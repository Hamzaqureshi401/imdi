
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
Manage Check In 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            Allocated Received Products
         </div>
         <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
         </div>
      </div>
      <div class="card-body">
         <table style="width: 100%;" id="mytb" class="table table-hover table-striped table-bordered">
            <thead>
               <tr>
                  <th>Sr #</th>
                  <th>Warehouse</th>
                  <th>Arrival Date</th>
                  <th>Purchase Order No</th>
                  <th>Container No</th>
                  <th>First Bin Location</th>
                  <th>Master Case</th>
                  <th>MasterCase Quantity</th>
                  <th>Ti*Hi</th>
                  <th>Label Count</th>
                  <th>Assigned</th>
                  <th>Un Assigned</th>
                  <th style="text-align:center;">Action</th>
               </tr>
            </thead>
            <tbody>
               <?php 
               $i=1; 
               ?>
               <?php $__currentLoopData = $pr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php 
               $pc=$u->ti*$u->hi;
               $q=ceil($u->mc_quantity/$pc);
               $c=getassignedpallet($u->id);
               ?>
               <?php if($c>0): ?>
               <tr>
                  <td><?php echo e($i); ?></td>
                  <td><?php echo e(getwarehouse($u->warehouse)); ?></td>
                  <td><?php echo e($u->created_at); ?></td>
                  <td><?php echo e($u->order_no); ?></td>
                  <td><?php echo e($u->order_no); ?></td>
                  <td><?php echo e($u->binlocation->first()->name); ?></td>
                  <th><?php echo e(getmastercase($u->mcid)); ?></th>
                  <td><?php echo e($u->mc_quantity); ?></td>
                  <td><?php echo e($pc); ?></td>
                  <th><?php echo e($q); ?></th>
                  <th><?php echo e($c); ?></th>
                  <th><?php echo e($q-$c); ?></th>
                  <td style="text-align:center;">
                     <div role="group" class="btn-group-lg btn-group btn-group-toggle">
                        <a href="<?php echo e(route('checkinunlist', $u->id)); ?>">
                           <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit CheckIn">
                              <i class="lnr-pencil icon-gradient bg-grow-early"></i>
                           </div>
                        </a>
                     </div>
                     <?php if(Auth::user()->role == 1): ?>
                   <!--   <a href="<?php echo e(route('delete.checkinunlist', $u->id)); ?>" class="btn btn-sm btn-danger">
                           Delete
                        </a> -->
                        <?php endif; ?>
                  </td>
               </tr>
               <?php 
               $i++;
               ?>
               <?php endif; ?>
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
     $(".delete").click(function(event) {
       // Show a confirmation dialog
       var confirmation = confirm("Are you sure you want to Delete?");
       
       // If the user clicks "Cancel", prevent the form submission
       if (!confirmation) {
         event.preventDefault();
       }
     });
   });
   
   
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/checkin/unlist_index.blade.php ENDPATH**/ ?>