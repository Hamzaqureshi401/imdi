
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
Manage Cycle Count
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="tabs-animation">
<div class="card mb-3">
   <div class="card-header-tab card-header">
      <div class="card-header-title font-size-lg text-capitalize fw-normal">
         <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
         Completed Cycle Count List
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
               <th>Warehouse</th>
               <th>Start Location</th>
               <th>End Location</th>
               <th>Cycle Count By</th>
               <th>Date & Time</th>
               <td>Total Locations</td>
               <td>Closed at</td>
               <th style="text-align:center;">Action</th>
            </tr>
         </thead>
         <tbody>
            <?php 
            $i=1;
            ?>
            <?php $__currentLoopData = $cc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $fbin=getbindetail($u->start_location);
            $ebin=getbindetail($u->end_location);
            ?>
            <tr>
               <td><?php echo e($i); ?></td>
               <td><?php echo e(getwarehouse($u->warehouse)); ?></td>
               <td><?php echo e($fbin->name); ?></td>
               <td><?php echo e($ebin->name); ?></td>
               <td><?php echo e(getusername($u->user)); ?></td>
               <td><?php echo e($u->created_at->format('Y-m-d h:i:s a')); ?></td>
               <td><b><?php echo e(get_total_ccl($u->id)); ?></b></td>
               <td><?php echo e($u->closed_at); ?></td>
               <td style="text-align:center;">
                  <div role="group" class="btn-group-lg btn-group btn-group-toggle">
                     <a href="<?php echo e(route('cyclecount.show', $u->id)); ?>">
                        <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View">
                           <i class="lnr-eye icon-gradient bg-grow-early"></i>
                        </div>
                     </a>
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
         <th>Warehouse</th></th>
         <th>Rack</th>
         <th>Start Location</th>
         <th>End Location</th>
         <th>Cycle Count By</th>
         <th>Date & Time</th>
         <td>Total Locations</td>
         <td>Counted Locations</td>
         <th style="text-align:center;">Action</th>
         </tr>
         </tfoot>
      </table>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Master Case Quick View </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
         </div>
         <div class="modal-body">
            <div id="mcdata" class="row">
               <div class="col-md-12">
                  <div class="position-relative mb-3">
                     <label for="exampleEmail11" class="form-label">Label Barcode / ID</label>
                     <input id="labelid" class="form-control" name="labelid" required/>
                     <input id="rowid" type="hidden" value="" name="rowid" />
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-ms-12">
                  <table id="protable" class="mb-0 table table-bordered">
                     <thead>
                        <tr>
                           <th>Product UPC</th>
                           <th>Product Name</th>
                           <th>Units</th>
                        </tr>
                     </thead>
                     <tbody>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
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
    
     $(".mdb").click(function() {
               var mcid = $(this).data("user-id");
                   $.ajax({
                       type: "post", 
                       url: "<?php echo e(route('getmcdq')); ?>",
                       data:{
                               '_token': "<?php echo csrf_token() ?>",
                               mcid:mcid,
                               mqty:1,
                                        
                           },
                       dataType: "json", 
                       beforeSend:function()
                       {
                           
                       },
                       success: function (res) {
   
                          
                           $('#mcdata').html(res.mc);
                           $("#protable tbody").empty();
                           $('#protable tbody').append(res.rec);
   
                          
                       }
                   });
     });
   
   });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/cyclecount/completed.blade.php ENDPATH**/ ?>