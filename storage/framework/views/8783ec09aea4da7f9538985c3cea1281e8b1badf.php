

<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
Register New Master Case
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="tabs-animation">
                         
                         
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                        <i class="header-icon  me-3 text-muted opacity-6"></i>
                                        Add Master Case
                                    </div>
                                    
                                </div>
                                <div class="card-body">
                                                <div style="display:none;" class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
                                                    
                                                    </button>
                                                    <ul>
                                                        
                                                    </ul>
                                                    
                                                </div>
                                        <form class="" id="formmain" method="post" action="<?php echo e(route('mastercase.store')); ?>">
                                       <?php echo csrf_field(); ?>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="col-md-12">
                                                        <div class="position-relative mb-3">
                                                            <label for="exampleEmail11" class="form-label">Master Case UPC</label>
                                                            <input name="upc" id="upc" placeholder="Enter MasterCase UPC" type="text" class="form-control input-mask-trigger" data-inputmask="'mask': '999999999999'" im-insert="true" inputmode="text" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="position-relative mb-3">
                                                            <label for="examplePassword11" class="form-label"> Master Case Name</label>
                                                            <input name="name" id="pname" placeholder="Enter MasterCase Name" type="text" class="form-control" required>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="examplePassword11" class="form-label"> Length (In.)</label>
                                                                <input name="length" id="length" placeholder="Enter Length" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="examplePassword11" class="form-label"> Width (In.)</label>
                                                                <input name="width" id="width" placeholder="Enter Width" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="examplePassword11" class="form-label"> Height (In.)</label>
                                                                <input name="height" id="height" placeholder="Enter Height" type="text" class="form-control" >
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="examplePassword11" class="form-label"> Weight (lbs)</label>
                                                                <input name="weight" id="weight" placeholder="Enter Weight" type="text" class="form-control" >
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="examplePassword11" class="form-label"> Ti</label>
                                                                <input name="ti" id="ti" placeholder="Enter Ti" type="text" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="examplePassword11" class="form-label"> Hi</label>
                                                                <input name="hi" id="hi" placeholder="Enter Hi" type="text" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                  
                                                        <div class="col-md-12">
                                                            <div class="position-relative mb-3">
                                                                <label for="examplePassword11" class="form-label"> Alert Quantity</label>
                                                                <input name="alert_quantity" id="alert_quantity" placeholder="Enter Quantity" type="number" value="0" min=0 class="form-control" required>
                                                            </div>
                                                        </div>
                                                       
                                                        
                                                  

                                                    <div class="col-md-12">
                                                        <div class="position-relative mb-3">
                                                            <label for="exampleEmail11" class="form-label">Description</label>
                                                            <textarea name="description" id="desc"class="form-control"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-8">
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="exampleEmail11" class="form-label d-block">Product</label>

                                                                <select  id="pro" class="form-control multiselect-dropdown">
                                                                <option value="">Select Product</option>
                                                                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($p->name); ?>+<?php echo e($p->upc); ?>+<?php echo e($p->id); ?>"><?php echo e($p->name); ?> (<?php echo e($p->upc); ?>)</option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="exampleEmail11" class="form-label d-block">Unit(s)</label>
                                                                <input  id="pqty" placeholder="Enter Quantity" type="number" min=1 class="form-control" >
                                                        
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="exampleEmail11" class="form-label d-block">&nbsp;</label>

                                                            <input name="psave" id="psave" value="Add Product" type="button" class="form-control btn btn-dark" >
                                                        
                                                        </div>
                                                        
                                                    </div>
                                                    <br>
                                                    <div class="col-ms-12">
                                                        <table id="protable" class="mb-0 table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Product UPC</th>
                                                                    <th>Product</th>
                                                                    <th>Unit(s)</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                
                                                                
                                                            </tbody>
                                                            <tfoot>
                                                            <th colspan=4><h3>Total Unit(s) : <b><span id="total_qty">0</span></b></h3></th>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>

                                           

                                          
                                            
                                            <input type="submit" id="create"  class="mt-2 btn btn-dark" value="Save"/>
                                        </form>
                                </div>
                            </div>
                           
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <script type="text/javascript" src="<?php echo e(url('public/admin/js/form-components/input-mask.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('public/admin/vendors/inputmask/dist/jquery.inputmask.min.js')); ?>"></script>
    
    <script type="text/javascript" src="<?php echo e(url('public/admin/js/form-components/input-select.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('public/admin/vendors/select2/dist/js/select2.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('public/admin/vendors/sweetalert2/dist/sweetalert2.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('public/admin/js/sweet-alerts.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script>
       $(document).ready(function(){
                    var newRowData = {
                    upc: 0,
                    name:"0",
                    qty:0,
                    id:0

                };
        $("#protable tbody").on("click", ".remove", function() {
                $(this).closest("tr").remove();
                var rq = $(this).closest("tr").find('td').eq(1).text();
                var tq=$('#total_qty').text();
                tq=parseInt(tq)-parseInt(rq);
                $('#total_qty').text(tq);
            });
        

            function addTableRow(data) {
                var newRow = '<tr id="'+data.upc+'"><th scope="row"><input type="hidden" name="pid[]" value="'+ data.id +'"/>'+ data.upc + '</th><td>'+ data.name + '</td><td><input type="hidden" name="pqty[]" value="'+ data.qty +'"/>'+ data.qty + '</td><td><a class="remove btn btn-dark" >Remove</a></td></tr>';
                $('#protable tbody').append(newRow);
                 
            }
            $("#psave").click(function(){
                var pro=$("#pro").val();
                var pqty=$("#pqty").val();
                if(pqty==""|| pqty<=0)
                alert("quantity can not be empty or less than 1");
                else
                { 
                var myArray = pro.split('+');
                newRowData.upc=myArray[1];
                newRowData.name=myArray[0];
                newRowData.id=myArray[2];
                newRowData.qty=pqty;
                var targetRow = $("#protable tbody").find("tr#"+myArray[1]);
                if(targetRow.length==0)
                {
                addTableRow(newRowData);
                var tq=$('#total_qty').text();
                tq=parseInt(tq)+parseInt(pqty);
                $('#total_qty').text(tq);
                }
                else{
                    var prev=targetRow.find("td").eq(1).text();
                    var newval=parseInt(prev)+parseInt(pqty);
                    targetRow.find("td").eq(1).html('<td><input type="hidden" name="pqty[]" value="'+ newval +'"/>'+ newval + '</td>');
                    var tq=$('#total_qty').text();
                    tq=parseInt(tq)+parseInt(pqty);
                    $('#total_qty').text(tq); 
                }
                $("#pqty").val("");
                  

                }
                
            });

            $("#pqty").on("keypress", function(event) {
                if (event.keyCode === 13) { // Check if the Enter key is pressed (key code 13)
                    event.preventDefault();
                    $("#psave").click(); // Prevent the form from submitting
                }
            });
          
 
            
            $('#formmain').ajaxForm({

              
                beforeSubmit: function(arr, $form, options) {

                   
                    // Show a confirmation dialog
                    var isConfirmed = confirm("Are you sure you want to submit this form?");

                    // If the user confirms, continue with the form submission
                    return isConfirmed;
                  
                   
                },
              
                
                complete: function (req) {
                   if(req.status==200)
                    {
                        var json = JSON.parse(req.responseText);
                        Swal.fire({ 
                        text: json.message,
                        title:json.status,
                        type: "question",
                        });
                       
                        if($.isEmptyObject(json.error)){
                            $(".print-error-msg").css('display','none');
                            $("#formmain")[0].reset();
                            $("#protable tbody").empty();
                               $('#total_qty').text("0");
                        }
                        else{
                          
                            $(".print-error-msg").find("ul").html('');
                            $(".print-error-msg").css('display','block');
                            $.each( json.error, function( key, value ) {
                                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                            });
                        }
                    }
                    else
                    {
                      
                        Swal.fire({ 
                        text: "There is something Wrong Please Cross Check",
                        title:"Error",
                        type: "question",
                            });
                    }
                    
                }
            });

        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/mastercase/create.blade.php ENDPATH**/ ?>