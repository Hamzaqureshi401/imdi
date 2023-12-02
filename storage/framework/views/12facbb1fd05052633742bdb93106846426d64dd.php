

<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
Manage MasterCase
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="tabs-animation">
                         
                         
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                        <i class="header-icon  me-3 text-muted opacity-6"></i>
                                        MasterCase
                                    </div>
                                    
                                </div>
                                <div class="card-body">
                                                <div style="display:none;" class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
                                                    
                                                    </button>
                                                    <ul>
                                                        
                                                    </ul>
                                                    
                                                </div>
                                        
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="col-md-12">
                                                        <div class="position-relative mb-3">
                                                            <label for="exampleEmail11" class="form-label">MasterCase UPC</label>
                                                            <input name="upc" id="upc" value="<?php echo e($mc->upc); ?>"  placeholder="Enter MasterCase UPC" type="text" class="form-control" readonly required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="position-relative mb-3">
                                                            <label for="examplePassword11" class="form-label"> MasterCase Name</label>
                                                            <input name="name" id="pname" value="<?php echo e($mc->name); ?>" placeholder="Enter MasterCase Name" type="text" class="form-control" readonly required>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="examplePassword11" class="form-label"> Length</label>
                                                                <input name="length" id="length" value="<?php echo e($mc->length); ?>" placeholder="Enter Length" type="text"readonly class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="examplePassword11" class="form-label"> Height</label>
                                                                <input name="height" id="height" value="<?php echo e($mc->height); ?>" placeholder="Enter Height" type="text" readonly class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="examplePassword11" class="form-label"> Width</label>
                                                                <input name="width" id="width" value="<?php echo e($mc->width); ?>" placeholder="Enter Width" type="text" readonly class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="examplePassword11" class="form-label"> Weight</label>
                                                                <input name="weight" id="weight" value="<?php echo e($mc->weight); ?>" placeholder="Enter Weight" readonly type="text" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="examplePassword11" class="form-label"> Hi</label>
                                                                <input name="hi" id="hi" placeholder="Enter Hi" value="<?php echo e($mc->hi); ?>" type="text" readonly class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="examplePassword11" class="form-label"> Ti</label>
                                                                <input name="ti" id="ti" placeholder="Enter Ti" value="<?php echo e($mc->ti); ?>" readonly type="text" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="position-relative mb-3">
                                                            <label for="exampleEmail11" class="form-label">Description</label>
                                                            <textarea name="description"  id="desc"class="form-control" readonly><?php echo e($mc->description); ?></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-8">
                                                    
                                                    
                                                    <br>
                                                    <div class="col-ms-12">
                                                        <table id="protable" class="mb-0 table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Product UPC</th>
                                                                    <th>Product</th>
                                                                    <th>Unit(s)</th>
                                                                    
                                                                 </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $t=0;
                                                                ?>
                                                                <?php $__currentLoopData = $mcp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php
                                                                    $pr=getproduct($m->pid);
                                                                    $t=$t+$m->qty;

                                                                ?>
                                                                <tr id="<?php echo e($pr->upc); ?>">
                                                                    <th scope="row"><input type="hidden" name="pid[]" value="<?php echo e($pr->id); ?>"/><?php echo e($pr->upc); ?></th>
                                                                    <td><?php echo e($pr->name); ?></td><td><input type="hidden" name="pqty[]" value="<?php echo e($m->qty); ?>"/><?php echo e($m->qty); ?></td>
                                                                    
                                                                </tr>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                
                                                                
                                                            </tbody>
                                                            <tfoot>
                                                            <th colspan=4><h3>Total Unit(s) : <b><span id="total_qty"><?php echo e($t); ?></span></b></h3></th>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>

                                           

                                          
                                            
                                            
                                      
                                </div>
                            </div>
                           
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
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
                var newRow = '<tr id="'+data.upc+'"><th scope="row"><input type="hidden" name="pid[]" value="'+ data.id +'"/>'+ data.upc + '</th><td>'+ data.name + '</td><td><input type="hidden" name="pqty[]" value="'+ data.qty +'"/>'+ data.qty + '</td><td><button class="remove" >Remove</button></td></tr>';
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
          
 
            
            $('#formmain').ajaxForm({
              
                
                complete: function (req) {
                   if(req.status==200)
                   {
                        var json = JSON.parse(req.responseText);
                        Swal.fire({ 
                        text: json.message,
                        title:json.status,
                        type: "question",
                        });
                       
                        if($.isEmptyObject(req.error)){
                            $(".print-error-msg").css('display','none');
                            $("#formmain")[0].reset();
                        }
                        else{
                            $(".print-error-msg").find("ul").html('');
                            $(".print-error-msg").css('display','block');
                            $.each( res.error, function( key, value ) {
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
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/mastercase/show.blade.php ENDPATH**/ ?>