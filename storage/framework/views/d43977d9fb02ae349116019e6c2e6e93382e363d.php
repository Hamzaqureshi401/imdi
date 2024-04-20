
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
            Pending Pick Order List
         </div>
      </div>
      <form action="<?php echo e(route('confirm.multiple.pending-pick-order')); ?>" method="POST">
         <?php echo csrf_field(); ?>
         <!-- Add this outside your table to create a Confirm button -->
         <button id="confirmBtn" type="submit" class="btn btn-sm btn-success">Confirm Pick Order</button>
         <div class="card-body">
            <table style="width: 100%;" id="mytb" class="table table-hover table-striped table-bordered">
               <thead>
                  <tr>
                     <th>Sr #</th>
                     <th>Transaction No</th>
                     <th>Invoice No</th>
                     <th>Master Case</th>
                     <th>Pallet No</th>
                     <th>Bin Location</th>
                     <th>Warehouse</th>
                     <th>Quantity</th>
                     <th>Register By & at</th>
                     <th>Status</th>
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
                     <td style="text-align:center;"><b><?php echo e($u->trans_no); ?></b></td>
                     <td><?php echo e($u->invoice_no); ?></td>
                     <td><?php echo e($u?->masterCase?->name . $u?->masterCase?->upc); ?></td>
                     <td><?php echo e($u->label_no); ?></td>
                     <td><?php echo e($b->name); ?></td>
                     <td><?php echo e($u?->received?->getWarehouse?->warehouse); ?></td>
                     <td style="text-align:center;"><b><?php echo e($u->qty); ?></b></td>
                     <td style="text-align:center;"><?php echo e(getusername($u->user)); ?><br><?php echo e($u->created_at->format('Y-m-d h:i:s a')); ?></td>
                     <td  style="text-align:center;" class="text-danger"><b>Not Picked from Location Yet</b></td>
                     <td style="text-align:center;">
                        <div role="group" class="btn-group-lg btn-group btn-group-toggle">
                           <a href="<?php echo e(route('confirm.pick.order', ['id' => $u->id, 'user' => Auth::id()])); ?>" class="btn btn-sm btn-dark">
                           Confirm Pick
                           </a>
                           <a href="<?php echo e(route('pick.show',$u->trans_no)); ?>">
                              <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View">
                                 <i class="lnr-eye icon-gradient bg-grow-early"></i>
                              </div>
                           </a>
                           <input type="checkbox" class="confirm-checkbox" name="ids[]" value="<?php echo e($u->id); ?>"/>
      </form>
      <form class="delete" method="POST" action="<?php echo e(route('pick.destroy', $u->id)); ?>">
      <?php echo csrf_field(); ?>
      <?php echo method_field("DELETE"); ?>
      <button type="submit" class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="destroy">
      <i class="lnr-trash icon-gradient bg-amy-crisp"></i>
      </button>
      </form>
      </div>
      </td>
      </tr>
      <?php 
      $i++;
      ?>
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
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/pickorders/index.blade.php ENDPATH**/ ?>