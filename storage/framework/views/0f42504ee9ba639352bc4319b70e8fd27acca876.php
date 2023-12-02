

<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
Manage Warehouse
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     <i class="header-icon  me-3 text-muted opacity-6"></i>
                                     Edit Warehouse
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
                                     <form method="post" action="<?php echo e(route('warehouse.update',$wh->id)); ?>">
                                     <?php echo method_field('PUT'); ?>
                                    <?php echo csrf_field(); ?>
                                         

                                          <div class="row">
                                             <div class="col-md-4">
                                                 <div class="position-relative mb-3">
                                                     <label for="exampleEmail11" class="form-label">Warehouse Name</label>
                                                     <input name="warehouse" value="<?php echo e($wh->warehouse); ?>"  placeholder="Enter Warehouse Name" type="text" class="form-control">
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="position-relative mb-3">
                                                     <label for="examplePassword11" class="form-label"> Address</label>
                                                     <input name="address" value="<?php echo e($wh->address); ?>"  placeholder="Enter Warehouse Address" type="text" class="form-control">
                                                 </div>
                                             </div>
                                             <div class="col-md-2">
                                                 <div class="position-relative mb-3">
                                                     <label for="examplePassword11" class="form-label"> &nbsp;</label>
                                                     <input type="submit"  class=" form-control btn btn-dark" >
                                                 </div>
                                             </div>
                                         </div>

                                       
                                     </form>
                             </div>
                         </div>
                        
 </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/warehouse/edit.blade.php ENDPATH**/ ?>