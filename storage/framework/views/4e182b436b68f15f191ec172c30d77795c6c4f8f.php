  
   <div class="card-body">
                                 <table style="width: 100%;" id="mytb" class="table table-hover table-striped table-bordered">
                             
            <thead>
                <tr>
                    <th>Warehouse Name</th>
                    <th>Entry Date & Time</th>
                    <th>Master Case Name UPC</th>
                    <th>MC Received Quantity</th>
                    <th>Available Quantity</th>
                    <th>Product Details</th>
                    <th>Pallet No</th>
                    <th>Bin Location</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                ?>
                <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php
                $data = get_mc_pro_wise($p->mcid, $p->avl_qty);
                $total = $total + $data['total'];
                ?>
               
                    <tr>
                        <td><?php echo e($p->wareHouse->warehouse); ?></td>
                        <td><?php echo e($p->created_at->format('Y-m-d h:i:s A')); ?></td>
                        <td><?php echo e(getmastercase($p->mcid) ?? '--'); ?></td>
                        <td><?php echo e($p->mc_quantity); ?></td>
                        <td><?php echo e($p->avl_qty ?? 0); ?></td>
                        <td><?php echo $data['res']; ?></td>
                        <td><?php echo e($p->palletno); ?></td>
                        <td><?php echo e($p->name); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </tbody>
             <tfoot>
        <tr>
            <td><b><?php echo e('--'); ?></b></td>
            <td><b><?php echo e('--'); ?></b></td>
            <td><b><?php echo e('--'); ?></b></td>
            <td><b><?php echo e('--'); ?></b></td>
            <td><b><?php echo e($result->sum('avl_qty')); ?></b></td>
            <td><b><?php echo e($total); ?></b></td>
            <td><b><?php echo e($result->pluck('palletno')->count()); ?></b></td>
            <td><b><?php echo e($result->pluck('name')->count()); ?></b></td>
        </tr>
    </tfoot>
        </table>
    </div><?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/report/inventory_ajax.blade.php ENDPATH**/ ?>