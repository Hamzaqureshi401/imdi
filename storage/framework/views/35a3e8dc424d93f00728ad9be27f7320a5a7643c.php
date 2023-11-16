

<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
 Manage Products
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
                                     Product List
                                 </div>
                                
                             </div>
                             
                             <div class="card-body">
                             <?php if(session('message')): ?>
                                <div class="alert alert-success">
                                    <?php echo e(session('message')); ?>

                                </div>
                            <?php endif; ?>
                                 <table style="width: 100%;" id="mytb" class="table table-hover table-striped table-bordered">
                                     <thead>
                                         <tr>
                                             <th>Sr #</th>
                                             <th>Product UPC</th>
                                             <th>Product Name</th>
                                             <th>Description </th>
                                             <th>Tags</th>
                                             <th>Start Month</th>
                                             <th>End Month</th>
                                             <th style="text-align:center;">Action</th>
                                            
                                         </tr>
                                     </thead>
                                     <tbody>
                                        <?php 
                                        $i=1;
                                        ?>
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <tr>
                                             <td><?php echo e($i); ?></td>
                                             <td><?php echo e($u->upc); ?></td>
                                             <td><?php echo e($u->name); ?></td>
                                             <td><?php echo e($u->description); ?></td>
                                             <td><?php echo e($u->keywords); ?></td>
                                             <td><?php if($u->start_date!=NULL || $u->start_date!=""): ?><?php echo e(monthname($u->start_date)); ?><?php endif; ?></td>
                                             <td><?php if($u->end_date!=NULL || $u->end_date!=""): ?><?php echo e(monthname($u->end_date)); ?><?php endif; ?></td>
                                             
                                             <td style="text-align:center;">
                                                    <div role="group" class="btn-group-lg btn-group btn-group-toggle">

                                                       

                                                        <a href="<?php echo e(route('product.edit', $u->id)); ?>">
                                                            <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit">
                                                                <i class="lnr-pencil icon-gradient bg-grow-early"></i>
                                                            </div>
                                                        </a>
                                                    <?php if($p=checkprodinmaster($u->id)==0): ?>
                                                        <form class="delete" method="POST" action="<?php echo e(route('product.destroy', $u->id)); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field("DELETE"); ?>
                                                        <button type="submit" class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete">
                                                            <i class="lnr-trash icon-gradient bg-amy-crisp"></i>
                                                        </button>
                                                        </form>
                                                    <?php endif; ?>
                                                       
                                                    </div>
                                             </td>
                                             
                                         </tr>
                                         <?php 
                                        $i++;
                                        ?>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     </tbody>
                                     <tfoot>
                                         <tr>
                                         <th>Sr #</th>
                                             <th>Product UPC</th>
                                             <th>Product Name</th>
                                             <th>Description </th>
                                             <th>Tags</th>
                                             <th>Start Month</th>
                                             <th>End Month</th>
                                             <th style="text-align:center;">Action</th>
                                         </tr>
                                     </tfoot>
                                 </table>
                             </div>
                         </div>
                        
                     </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

<script>
$(document).ready(function() {
  // Attach a submit event handler to the form
  $(".delete").submit(function(event) {
    // Show a confirmation dialog
    var confirmation = confirm("Are you sure you want to Delete");
    
    // If the user clicks "Cancel", prevent the form submission
    if (!confirmation) {
      event.preventDefault();
    }
  });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/product/index.blade.php ENDPATH**/ ?>