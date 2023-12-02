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
            <?php if($result->count() > 0): ?>
                <?php $__currentLoopData = $result->where('status' , 0); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
 <input type="submit" id="create"  class="mt-2 btn btn-dark" value="Confirm Pick"/>
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
</script>
<?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/pickorders/product-mastercase-details.blade.php ENDPATH**/ ?>