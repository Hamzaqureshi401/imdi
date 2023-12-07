

<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
 Manage Pick Orders
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?> 
<div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
                                     Pending Pick Order List for Transaction: &nbsp; <span class="text-primary"> <b><?php echo e($id); ?></b></span>
                                 </div>
                                
                             </div>
                             <div class="card-body">
                                 <table style="width: 100%;" id="mytb" class="table table-hover table-striped table-bordered">
                                     <thead>
                                         <tr>
                                             <th>Sr #</th>
                                             <th>Master Case</th>
                                             <th>Pallet No</th>
                                             
                                             <th>Bin Location</th>
                                             <th>Warehouse</th>
                                             <th>Quantity</th>
                                             <th>Register By & at</th>
            
                                             
                                             <th style="text-align:center;">Action</th>
                                            
                                         </tr>
                                     </thead> 
                                     <tbody> 
                                        <?php 
                                        $i=1;
                                        ?>
                                        <?php $__currentLoopData = $po; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                        $b=getbindetail($u->bin_id);
                                        
                                        ?>
                                         <tr>
                                             <td><?php echo e($i); ?></td>
                                             <td><?php echo e(getmastercase($u->mc_id)); ?></td>
                                             <td><?php echo e($u->label_no); ?></td> 
                                             <td><?php echo e($b->name); ?></td>
                                             <td><?php echo e(getwarehouse_rc($u->rc_id)); ?></td>
                                             <td style="text-align:center;"><b><?php echo e($u->qty); ?></b></td>
                                             <td style="text-align:center;"><?php echo e(getusername($u->user)); ?><br><?php echo e($u->created_at->format('Y-m-d h:i:s a')); ?></td>
                                             
                                          
                                             
                                             
                                             <td style="text-align:center;">
                                                    <div role="group" class="btn-group-lg btn-group btn-group-toggle">

                                                       

                                                        <a href="#">
                                                            <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit">
                                                                <i class="lnr-pencil icon-gradient bg-grow-early"></i>
                                                            </div>
                                                        </a>
                                                   
                                                       
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
                                             <th>Master Case</th>
                                             <th>Pallet No</th>
                                             
                                             <th>Bin Location</th>
                                             <th>Warehouse</th>
                                             <th>Quantity</th>
                                             <th>Register By & at</th>
                                             
                                            
                                            
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
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/pickorders/pendlist.blade.php ENDPATH**/ ?>