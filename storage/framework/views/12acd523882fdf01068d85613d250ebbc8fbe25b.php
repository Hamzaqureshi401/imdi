

<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
 Manage Warehouse Racks
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    


                    <div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     
                                     Rack List
                                 </div>
                                
                             </div>
                             <div class="card-body">
                                                <?php if(\Session::has('message')): ?>
                                                    <div  class="alert alert-success alert-dismissible fade show print-error-msg" role="alert">
                                                        
                                                    <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert">
                                                        </button>
                                                        <ul>
                                                        <li><?php echo e(Session::get('message')); ?></li>
                                                        </ul>
                                                        
                                                    </div>
                                                <?php endif; ?>

                                                <?php if(count($errors) > 0): ?>
                                                <div  class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
                                                        <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert">
                                                        </button>
                                                    
                                                    <ul>
                                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li><?php echo e($error); ?></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                    
                                                </div> 
                                                <?php endif; ?>
                                <form method="post" action="<?php echo e(route('assignbarcode')); ?>">
                                    <?php echo csrf_field(); ?>
                                <table style="width: 100%;"  class="table table-hover table-striped table-bordered">
                                     <thead>
                                         <tr>
                                             <th>Sr #</th>
                                             <th>Location Name</th>
                                             <th>Barcode</th>
                                             
                                            
                                            
                                         </tr>
                                     </thead>
                                     <tbody>
                                        <?php 
                                        $i=1;
                                        ?>
                                        <?php $__currentLoopData = $racks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <tr>
                                             <td><?php echo e($i); ?></td>
                                             <td><?php echo e($u->name); ?></td>
                                             <td><input name="barcode[]" value="<?php echo e($u->barcode); ?>" pattern="[0-9]{12}"  Placeholder="Please enter 12 digits barcode."  class="form-control"/>
                                             <input name="id[]" type="hidden" value="<?php echo e($u->id); ?>" class="form-control"/></td>
                                             
                                             
                                             
                                         </tr>
                                         <?php 
                                        $i++;
                                        ?>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     </tbody>
                                     <tfoot>
                                         <tr>
                                            <td colspan=3><input type="submit" value="Save" class=" form-control btn btn-dark"></td>
                                            

                                         </tr>
                                     </tfoot>
                                 </table>
                                </form>
                                 
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
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/racks/show.blade.php ENDPATH**/ ?>