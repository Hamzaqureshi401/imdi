<form class="" id="formpick" method="post" action="<?php echo e(route('pickorder')); ?>">
            <?php echo csrf_field(); ?>
<div class="table-responsive">

    <div class="card">
        <div class="card-body">
            <h1>Unallocated Pallets</h1>
        
     <table class="table table-bordered mytb" > 
        <thead>
            <tr>
                              <th>Arrival Date</th>
                              <th>Master Case</th>
                              <th>Products(s)</th>
                              <th>Warehouse</th>
                              <th>Label No & Bin Location </th>
                              <th>Invoice No</th>
                              <th>Pick Master Case</th>
                              <th>Pick Products (s)</th>
                           </tr>
        </thead>
        <tbody>
            <?php if($pl->count() > 0): ?>
                <?php $__currentLoopData = $pl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($r->stockPlacement->count() == 0 && !empty($r->receiveds->id)): ?>
                    <tr>
                        <td><?php echo e($r->created_at); ?></td>
                        <td><?php echo e($r->mastercase->name); ?><br>Available Quantity(s): <b><?php echo e($r->avl_qty); ?></b></td>
                        <td class="mcp">
                            <?php $__currentLoopData = $r->mastercase->mastercaseproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php echo e($pr->product->name); ?> / 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </td>
                        <td><?php echo e($r->wareHouse->warehouse); ?></td>
                        <td>
                            <input type="hidden" name="id[]" value="<?php echo e($r->id); ?>">
                            <input type="hidden" name="un_lb[]" value="<?php echo e($r->palletno); ?>"/>
                            <input type="hidden" name="un_bid[]" value="<?php echo e($r->id); ?>"/>
                            <b><?php echo e($r->palletno); ?></b>
                        </td>
                        <td><input name="un_invoice[]" id="invoice" type="text" class="form-control pick-inv" /></td>
                        <td><input name="un_pq[]" id="t" type="number" min=1 max="<?php echo e($r->avl_qty); ?>" class="form-control pick-qty" /></td>
                        <td class="product-quantity"></td>
                    </tr>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td colspan="8" style="text-align:center;" class="text-danger"><b>There is No Record Found!</b></td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h1>Allocated Pallets</h1>
        

    <table class="table table-bordered mytb" >
        <thead>
            <tr>
                              <th>Arrival Date</th>
                              <th>Master Case</th>
                              <th>Products(s)</th>
                              <th>Warehouse</th>
                              <th>Label No & Bin Location </th>
                              <th>Invoice No</th>
                              <th>Pick Master Case</th>
                              <th>Pick Products (s)</th>
                           </tr>
        </thead>
        <tbody>
            <?php if($result->count() > 0): ?>
                <?php $__currentLoopData = $result->where('status' , 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($r->arr_date); ?></td>
                        <td><?php echo e(getmastercase($r->mc_id)); ?><br>Available Quantity(s): <b><?php echo e($r->avl_qty); ?></b></td>
                        <td class="mcp"><?php echo implode(', ', get_mc_pro_wise($r->mc_id, $r->avl_qty)); ?></td>
                        <td><?php echo e(getwarehouse($r->warehouse)); ?></td>
                        <td>
                            <input type="hidden" name="lb[]" value="<?php echo e($r->labelid); ?>"/>
                            <input type="hidden" name="bid[]" value="<?php echo e($r->id); ?>"/>
                            <b><?php echo e($r->labelid); ?><br><?php echo e($r->name); ?></b>
                        </td>
                        <td><input name="invoice[]" id="invoice" type="text" class="form-control pick-inv" /></td>
                        <td><input name="pq[]" id="t" type="number" min=1 max="<?php echo e($r->avl_qty); ?>" class="form-control pick-qty" /></td>
                        <td class="product-quantity"></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr>
                    <td colspan="8" style="text-align:center;" class="text-danger"><b>There is No Record Found!</b></td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    </div>
    </div>
</div>
 <a id="create"  class="mt-2 btn btn-dark" >Confirm Pick</a> 
         </form>

<script type="text/javascript">
     $(".mytb tbody").on("keyup", ".pick-qty", function() {

        console.log('working');
           
            var index = $(this).closest("tr").index();
            var productData = $(this).closest("tr").find(".mcp").html();
          
            var pq =  $(this).closest("tr").find(".pick-qty").val();
            productData=productData.replace(/<b>.*?<\/b>/g, "");
            var md = productData.replace(/\[(\d+)\]/g, function(match, value) {
                
            return '<span class="text-danger"><b>(' + value * pq + ')</b></span>';
        });
            $(this).closest("tr").find(".product-quantity").html(md);
           
           
            
           // $row.find('.product-quantity').html(productsText);
           
          
            
           
        });

      $('#create').click(function() {
        // Select all checkboxes in the DataTable
        $('.mytb').DataTable().page.len(-1).draw();
        
        // Submit the form
        $('#formpick').submit();
    });
</script>
<?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/pickorders/product-mastercase-details.blade.php ENDPATH**/ ?>