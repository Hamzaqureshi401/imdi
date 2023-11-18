
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
Check In 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            Un Allocate Received Products
         </div>
         <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
         </div>
      </div>
      <div class="card-body">
         <table style="width: 100%;" id="mytb" class="table table-hover table-striped table-bordered">
            <thead>
               <tr>
                  <th>Sr #</th>
                  <th>Master Case</th>
                  <th>Pallet Label </th>
                  <th>Bin Location</th>
                  <th>Barcode</th>
                  <th>Checkin Status</th>
                  <th>Checked In By</th>
                  <th style="text-align:center;">Action</th>
               </tr>
            </thead>
            <tbody>
              
               <?php $__currentLoopData = $bin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php
               $pl=getlabelinfo($u->labelid);
               ?>
               <tr>
                  <td><?php echo e($loop->index + 1); ?></td>
                  <td><?php echo e(getmastercase($u->mcid)); ?></td>
                  <td><?php echo e($u->labelid); ?></td>
                  <td><?php echo e($u->name); ?></td>
                  <td style="text-align:center;">
                     <center><?php echo barcode_gen($u->barcode); ?></center>
                     <?php echo e($u->barcode); ?>

                  </td>
                  <td>
                     <?php if(empty($pl->checkin_status) || $pl->checkin_status==0): ?>
                     <b class="text-danger">Pending</b>
                     <?php else: ?>
                     <b class="text-success">Checked in Completed</b>
                     <?php endif; ?>
                  </td>
                  <td>
                     <?php if(empty($pl->checkin_status) || $pl->checkin_status==0): ?>
                     <b class="text-danger">Pending</b>
                     <?php else: ?>
                     <b class="text-primary"><?php echo e($pl->user->name ?? ''); ?><br><?php echo e($pl->checkin_date); ?></b>
                     <?php endif; ?>
                  </td>
                  <td style="text-align:center;">
                    <?php if(empty($u->palletLabel->checkin_date)): ?>
                    <a href="<?php echo e(route('checkin.edit' , $u->id)); ?>" class="btn btn-sm btn-dark">Check In Confirm</a>
                    <?php endif; ?>
                     <?php if(empty($pl->checkin_status) || $pl->checkin_status==0): ?>
                     <div role="group" class="btn-group-lg btn-group btn-group-toggle">
                        <form class="delete" method="POST" action="<?php echo e(route('checkin.destroy', $u->id)); ?>">
                           <?php echo csrf_field(); ?>
                           <?php echo method_field("DELETE"); ?>
                           <button type="submit" class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Un Allocate">
                           <i class="lnr-trash icon-gradient bg-amy-crisp"></i>
                           </button>
                        </form>
                     </div>
                     <?php endif; ?>
                  </td>
               </tr>
              
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
           <!--  <tfoot>
               <tr>
                  <th>Sr #</th>
                  <th>Master Case</th>
                  <th>Pallet Label </th>
                  <
                  <th>Bin Location</th>
                  <th>Barcode</th>
                  <th>Checkin Status</th>
                  <th>Checked In By</th>
                  <th style="text-align:center;">Action</th>
               </tr>
            </tfoot> -->
         </table>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script>
   $(document).ready(function() {
     // Attach a submit event handler to the form
     $(".delete").click(function(event) {
       // Show a confirmation dialog
       var confirmation = confirm("Are you sure you want to unallocate it ?");
       
       // If the user clicks "Cancel", prevent the form submission
       if (!confirmation) {
         event.preventDefault();
       }
     });
   });
   
   
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/checkin/allPendingCheckInList.blade.php ENDPATH**/ ?>