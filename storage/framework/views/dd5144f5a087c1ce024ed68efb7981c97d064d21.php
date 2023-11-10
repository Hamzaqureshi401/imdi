

<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
 Manage Returns
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?> 
<div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
                                    Return List: &nbsp; <span class="text-primary"></span>
                                 </div>
                                
                             </div>
                             <div class="card-body">
                                 <table style="width: 100%;" id="mytb" class="table table-hover table-striped table-bordered">
                                     <thead>
                                         <tr>
                                             <th>Sr #</th>
                                             <th>Return Date</th>
                                             <th>Transaction</th>
                                             <th>Invoice No.</th>
                                             <th>Master Case</th>
                                             <th>Picked Quantity</th>
                                             <th>Return Quantity</th>
                                             <th>Warehouse</th>
                                             <th>Item Condition</th>
                                            
                                            
                                         </tr>
                                     </thead> 
                                     <tbody> 
                                       <?php $__currentLoopData = $po; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <tr>
                                           <td><?php echo e($loop->index + 1); ?></td>
                                       <td><?php echo e($r->return_date); ?></td>
                                       <td><?php echo e($r->trans_no); ?></td>
                                       <td><?php echo e($r->invoice_no); ?></td>
                                       <td><?php echo e($r->masterCase->name ?? '--'); ?></td>
                                       <td><?php echo e($r->return_qty); ?></td>
                                       <td><?php echo e($r->qty); ?></td>
                                       <td><?php echo e($r->warehouse->warehouse ?? '--'); ?></td>
                                       <td><?php echo e($r->item_condition); ?></td>
                        
                                       </tr>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     </tbody>
                                     
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
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/return/pendlist.blade.php ENDPATH**/ ?>