

<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
Register New Product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="tabs-animation">
                         
                         
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                        <i class="header-icon  me-3 text-muted opacity-6"></i>
                                        Import Products
                                    </div>
                                    
                                </div>
                                <div class="card-body">

                                <?php if(session('success')): ?>
                                    <div class="alert alert-successalert-dismissible fade show print-error-msg" role="alert">
                                        <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert">
                                                     </button>
                                        <?php echo e(session('success')); ?>

                                    </div>
                                <?php endif; ?>

                                             <?php if(session('error')): ?>
    
                                             <div  class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
                                                     <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert">
                                                     </button>
                                                 
                                                 <ul>
                                                 <?php echo e(session('error')); ?>

                                                 </ul>
                                                 
                                             </div> 
                                             <?php endif; ?>

                                             <?php if($errors->any()): ?>
                                                <div class="alert alert-danger mt-3">
                                                    <h4>Error(s) occurred:</h4>
                                                    <ul>
                                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li><?php echo e($error); ?></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            <?php endif; ?>







                                                
                                        <form class=""  method="post" action="<?php echo e(route('importsave')); ?>" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                        <div  class="alert alert-warning alert-dismissible fade show print-error-msg" role="alert">
                                                    
                                                    </button>
                                                    <ul>
                                                        <li>Please Use Only Excel file </li>
                                                        <li>Download <b><a href="<?php echo e(url('public/template.xls')); ?>">Template</a></b> From here and use that for further proceed</li>
                                                        
                                                    </ul>
                                                    
                                                </div>
                                       
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="position-relative mb-3">
                                                        <label for="exampleEmail11" class="form-label">Pleas Select Excel File To Import Products</label>
                                                        <input name="file"  type="file"class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="position-relative mb-3">
                                                        <label for="examplePassword11" class="form-label"> &nbsp</label>
                                                        <input name="submit" type="submit" Value="Import" class="form-control btn btn-dark" required>
                                                    </div>
                                                </div>
                                            </div>

                                           

                                            

                                          
                                            
                                           
                                        </form>
                                </div>
                            </div>
                           
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <script type="text/javascript" src="<?php echo e(url('public/admin/vendors/@chenfengyuan/datepicker/dist/datepicker.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('public/admin/vendors/daterangepicker/daterangepicker.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('public/admin/js/form-components/datepicker.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('public/admin/vendors/sweetalert2/dist/sweetalert2.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('public/admin/js/sweet-alerts.js')); ?>"></script>
    <script>
       $(document).ready(function(){
          
 
            $("#create").click(function(){

                var upc=$("#upc").val();
                var pname=$("#pname").val();
                var desc=$("#desc").val();
                var keywords=$("#keywords").val();
                var start_date=$("#start_date").val();
                var end_date=$("#end_date").val();
               
                
                $.ajax({
                    type: "post",
                    url: "<?php echo e(route('product.store')); ?>",
                    data:{
                            '_token': "<?php echo csrf_token() ?>",
                            upc:upc,
                            product_name:pname,
                            description:desc,
                            keywords:keywords,
                            start_date:start_date,
                            end_date:end_date,         
                        },
                    dataType: "json",
                    beforeSend:function()
                    {
                        
                    },
                    success: function (res) {

                        Swal.fire({ 
                        text: res.message,
                        title:res.status,
                        type: "question",
                            });
 
                        if($.isEmptyObject(res.error)){
                            $(".print-error-msg").css('display','none');
                            $("#form")[0].reset();
                        }
                        else{
                            $(".print-error-msg").find("ul").html('');
                            $(".print-error-msg").css('display','block');
                            $.each( res.error, function( key, value ) {
                                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                            });
                        }
                       
                    }
                });

            });

        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/product/import.blade.php ENDPATH**/ ?>