
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
Manage Transfer 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="tabs-animation">
<?php if(session('message')): ?>
<div class="alert alert-success">
   <?php echo e(session('message')); ?>

</div>
<?php endif; ?>   
<form id="formmain" class="myform" method="post" action="<?php echo e(route('transfer.store')); ?>" >
   <?php echo csrf_field(); ?>    
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon  me-3 text-muted opacity-6"></i>
            Transfer
         </div>
      </div>
      <div class="card-body">
         <div style="display:none;" class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
            </button>
            <ul>
            </ul>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="row">
                  <div class="col-md-3">
                     <div class="position-relative mb-3">
                        <label for="exampleEmail11" class="form-label d-block">Pallet No</label>
                        <input class="form-control" readonly value="<?php echo e($pl->palletno); ?>" />
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="position-relative mb-3">
                        <label for="exampleEmail11" class="form-label d-block">Master Case</label>
                        <input class="form-control" readonly value="<?php echo e(getmastercase($pl->mc_id)); ?>" />
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="position-relative mb-3">
                        <label for="exampleEmail11" class="form-label d-block">Warehouse</label>
                        <input id="warehouse" name="warehouse" class="form-control" value="<?php echo e(getwarehouse($pl->warehouse)); ?>" readonly />
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="position-relative mb-3">
                        <label for="exampleEmail11" class="form-label d-block">Bin Location</label>
                        <input class="form-control" name="bin_location_name" value="<?php echo e(get_pl_location($pl->palletno)); ?>" readonly />
                        <input type="hidden" name="bid" value="<?php echo e(get_bin_location($pl->palletno)); ?>" readonly />
                     </div>
                  </div>
               </div>
               <div class="row">
                  <h3 class="text-primary">Transfer to New Location</h3>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="position-relative mb-3">
                        <label for="exampleEmail11" class="form-label d-block">Warehouse</label>
                        <select name="warehouse"  id="warehouse" class="form-control multiselect-dropdown" required>
                           <option value="">Select Warehouse</option>
                           <?php $__currentLoopData = $wh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($w->id); ?>"><?php echo e($w->warehouse); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                     </div>
                  </div>
                  <div id="show-rack"></div>
                  <div id="show-binlocation"></div>
                  
               </div>
            </div>
         </div>
      </div>
      <div class="d-block text-end card-footer">
         <input type="submit" name="submit" value="Transfer" class="btn btn-info">
         <br>
      </div>
   </div>
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script type="text/javascript" src="<?php echo e(url('public/admin/js/form-components/input-select.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('public/admin/vendors/select2/dist/js/select2.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('public/admin/vendors/sweetalert2/dist/sweetalert2.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('public/admin/js/sweet-alerts.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
<!-- Your Blade View -->


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        console.log(1);
        $('#warehouse').change(function() {
            console.log(2);
            var warehouseId = $(this).val();

            // AJAX request to fetch rack information
            $.ajax({
                type: 'GET',
                url: '/get-rack-info/' + warehouseId,
                success: function(data) {
                    $('#show-rack').html(data);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });

        // On change of rack, fetch bin location information
        $(document).on('change', '#rack', function() {
            var rackId = $(this).val();

            // AJAX request to fetch bin location information
            $.ajax({
                type: 'GET',
                url: '/get-bin-location/' + rackId,
                success: function(data) {
                    $('#show-binlocation').html(data);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/transfer/transfer.blade.php ENDPATH**/ ?>