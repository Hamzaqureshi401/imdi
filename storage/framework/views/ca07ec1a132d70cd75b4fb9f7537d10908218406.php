
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
Dashboard
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="card mb-3">
    <div class="card-header">
        <h5 class="card-title">Select Warehouse</h5>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="warehouse_id">Warehouse</label>
            <select name="warehouse_id" id="warehouse_id" class="form-control warehouse_select">
                <option value="">Select Warehouse</option>
                <?php $__currentLoopData = $warehouses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($warehouse->id); ?>"><?php echo e($warehouse->warehouse); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
</div>

<div id="other_reports">
<?php echo $__env->make('other_reports', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<script type="text/javascript" src="<?php echo e(url('public/admin/js/count-up.js')); ?>" ></script>
<script type="text/javascript" src="<?php echo e(url('public/admin/js/form-components/input-mask.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('public/admin/vendors/inputmask/dist/jquery.inputmask.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('public/admin/js/form-components/input-select.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('public/admin/vendors/select2/dist/js/select2.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('public/admin/vendors/sweetalert2/dist/sweetalert2.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('public/admin/js/sweet-alerts.js')); ?>"></script>
<script>
   $(document).ready(function(){
      
   
        $("#create").click(function(){
            var id=$("#id").val();
            var org_name=$("#orgnization_name").val();
            var sector=$("#sector").val();
            var org_head=$("#orgnization_head").val();
            var ofc_adrs=$("#office_address").val();
            var ofc_con=$("#office_contact").val();
            var desig=$("#designation").val();
            var per_con=$("#personal_contact").val();
            
          /*  Swal.fire({ 
                    text: ""+id+"-"+org_name+"-"+sector+"-"+org_head+"-"+ofc_adrs+"-"+ofc_con+"-"+desig+"-"+per_con,
                    title:"Status",
                    type: "question",
                        });
            
                        */
                        
            $.ajax({
                type: "post",
                url: "<?php echo e(route('updateaccount')); ?>",
                data:{
                        '_token': "<?php echo csrf_token() ?>",
                        id:id,
                        orgnization:org_name,
                        sector:sector,
                        officer_name:org_head,
                        address:ofc_adrs,
                        office_contact:ofc_con,
                        designation:desig,
                        personal_contact:per_con,           
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
                        }).then(okay => {
                        if (okay) {
                            if($.isEmptyObject(res.error))
                            {
                                $(".print-error-msg").css('display','none');
                                location.reload(true);
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
   
                   
                   
                }
            });
            
   
        });
   
        $("#create_ind").click(function(){
            var id=$("#uid").val();
            var org_name="NA";
            var sector="NA";
            var org_head=$("#name").val();
            var ofc_adrs=$("#address").val();
            var ofc_con="NA";
            var desig="NA";
            var per_con=$("#mobile").val();
            
          
                        
            $.ajax({
                type: "post", 
                url: "<?php echo e(route('updateaccountind')); ?>",
                data:{
                        '_token': "<?php echo csrf_token() ?>",
                        id:id,
                        orgnization:org_name,
                        sector:sector,
                        name:org_head,
                        address:ofc_adrs,
                        office_contact:ofc_con,
                        designation:desig,
                        mobile:per_con,           
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
                        }).then(okay => {
                        if (okay) {
                            if($.isEmptyObject(res.error))
                            {
                                $(".print-error-msg").css('display','none');
                                location.reload(true);
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
   
                   
                   
                }
            });
            
   
        });
   
    });
</script>
<script>
   $(document).ready(function() {
       $('.warehouse_select').on('change', function() {
           var selectedWarehouse = $(this).val();
           var other_reports = $('#other_reports');
           other_reports.html('');
           if (selectedWarehouse) {
               $.ajax({
                   type: 'GET',
                   url: '/get-other-data/' + selectedWarehouse, 
                   success: function(data) {
                       other_reports.html(data);
                   },
                   error: function(xhr, status, error) {
                       console.error(error);
                   }
               });
           } else {
               other_reports.html('');
           }
       });
   });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imdi\resources\views/home.blade.php ENDPATH**/ ?>