
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
Check In 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="tabs-animation">
   <div class="row">
      <div class="col-md-4">
         <div class="card mb-3">
            <div class="card-header-tab card-header">
               <div class="card-header-title font-size-lg text-capitalize fw-normal">
                  <i class="header-icon  me-3 text-muted opacity-6"></i>
                  Received Product Details
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
                     <div class="position-relative mb-3">
                        <label for="exampleEmail11" class="form-label">Pallet Labels</label>
                        <?php $__currentLoopData = $label; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(checkinstatusforlabel($l->id)==0): ?>
                        <div class="form-check">
                           <input class="form-check-input label_no" type="radio" name="palletno" value="<?php echo e($l->palletno); ?>" >
                           <label class="form-check-label" for="flexRadioDefault1">
                           <?php echo e($l->palletno); ?><br> <b>(<?php echo e($l->mc_qty); ?>) <?php echo e(getmastercase($l->mc_id)); ?> </b>
                           </label>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-8 col-lg-6 col-xl-8">
         <div class="mb-3 card">
            <div class="card-header-tab card-header">
               <div class="card-header-title font-size-lg text-capitalize fw-normal">
                  <i class="header-icon lnr-cloud-download icon-gradient bg-happy-itmeo"></i>
                  Bin Locations
               </div>
            </div>
            <div class="p-0 card-body">
               <div class="dropdown-menu-header mt-0 mb-0">
                  <div class="dropdown-menu-header-inner bg-heavy-rain">
                     <div class="menu-header-image opacity-1" style="background-image: url('images/dropdown-header/city3.jpg');"></div>
                     <div class="menu-header-content text-dark">
                        <h5 class="menu-header-title"><?php echo e(getwarehouse($rc->warehouse)); ?></h5>
                        <h6 class="menu-header-subtitle">
                           You have
                           <b class="text-danger"><?php echo e(getavailablespace($rc->warehouse)); ?></b>
                           Available Racks
                        </h6>
                     </div>
                  </div>
               </div>
               <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                  <?php
                  $a=1;
                  ?>   
                  <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="nav-item">
                     <a role="tab" class="nav-link <?php if($a==1): ?> active <?php endif; ?>" id="tab-c-0" data-bs-toggle="tab" href="#tab-animated-<?php echo e($row->id); ?>" aria-selected="false">
                     <span><?php echo e($row->rowtitle); ?></span>
                     </a>
                  </li>
                  <?php
                  $a=$a+1;
                  ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </ul>
               <div class="tab-content">
                  <?php
                  $a=1;
                  ?>
                  <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php
                  $bin=getbinlocations($row->id);
                  ?>
                  <div class="tab-pane <?php if($a==1): ?> active <?php endif; ?>" id="tab-animated-<?php echo e($row->id); ?>" role="tabpanel">
                     <div class="main-card mb-3 card">
                        <div class="grid-menu grid-menu-2col">
                           <div class="g-0 row">
                              <?php $__currentLoopData = $bin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="col-sm-2">
                                 <a  <?php if($b->status==0): ?> class="mdb" data-bs-toggle="modal" data-bs-target="#exampleModal" <?php else: ?> class="mdc" data-plabel="<?php echo e($b->labelid); ?>" data-mc="<?php echo e(getmastercase($b->mcid)); ?>" data-mc-id=<?php echo e($b->mcid); ?> data-bs-toggle="modal" data-bs-target="#exampleModal2"  <?php endif; ?> >
                                 <div class="widget-chart widget-chart-hover">
                                    <div class="icon-wrapper rounded-circle">
                                       <div class="icon-wrapper-bg bg-primary"></div>
                                       <i class="<?php if($b->status==0): ?>
                                          lnr-plus-circle text-success
                                          <?php else: ?>
                                          lnr-checkmark-circle text-danger
                                          <?php endif; ?>
                                          "></i>
                                    </div>
                                    <div class="widget-numbers">
                                       <h5><b class="rn"><?php echo e($b->name ?? '--'); ?></b><span class="rv" hidden><?php echo e($b->id); ?></span></span></h5>
                                    </div>
                                    <div class="widget-subheading" style="color:black;"><b><?php echo e($b->barcode); ?></b></div>
                                    <?php if($b->status==0): ?>
                                    <div class="widget-description text-success">
                                       <i class="fa fa-angle-up"></i>
                                       <span class="ps-1"><b> Available</b></span>
                                    </div>
                                    <?php else: ?>
                                    <div class="widget-subheading" style="color:blue;"><b>Palletno:<?php echo e($b->labelid); ?></b></div>
                                    <div class="widget-description text-danger">
                                       <i class="fa fa-angle-down"></i>
                                       <span class="ps-1"><b>Occupied </b></span>
                                    </div>
                                    <?php endif; ?>
                                 </div>
                                 </a>
                              </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
                  $a=$a+1;
                  ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <form method="post" id="formimg" enctype="multipart/form-data" action="<?php echo e(route('checkin.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Allot <b><span id="rowname"></span></b> Bin location</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
               </button>
            </div>
            <div class="modal-body">
               <div>
                  <div class="mb-3 progress">
                     <div  id="probar" class="progress-bar progress-bar-animated bg-success progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:0%;" >
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="position-relative mb-3">
                           <label for="exampleEmail11" class="form-label">Label Barcode / ID</label>
                           <input id="labelid" class="form-control"  name="labelid" required readonly/>
                           <input id="rowid" type="hidden" value="" name="rowid" />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button id="sbtn" type="submit" class="btn btn-dark">Save</button>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- Modal --> 
<div class="modal fade" id="exampleModal2"  tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Alloted <b><span id="rowname2"></span></b> Bin location</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-md-12">
                  <div class="position-relative mb-3">
                     <label for="exampleEmail11" class="form-label">Label Barcode / ID</label>
                     <input id="plabel" class="form-control" name="" readonly/>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="position-relative mb-3">
                     <label for="exampleEmail11" class="form-label">Master Case</label>
                     <input id="mcname" class="form-control" name="" readonly/>
                  </div>
               </div>
            </div>
            <div class="row" id="mcdata"></div>
            <div class="row">
               <div class="col-ms-12">
                  <table id="protable" class="mb-0 table table-bordered">
                     <thead>
                        <tr>
                           <th>Product UPC</th>
                           <th>Product Name</th>
                           <th>Units</th>
                           <th>Total Units</th>
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
<!-- Modal -->
<div class="modal fade" id="occupiedModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                           <th>Total Units</th>
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
<script type="text/javascript" src="<?php echo e(url('public/admin/vendors/sweetalert2/dist/sweetalert2.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('public/admin/js/sweet-alerts.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
<script type="text/javascript" src="<?php echo e(url('public/admin/vendors/slick-carousel/slick/slick.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('public/admin/js/carousel-slider.js')); ?>"></script>
<script>
   $(document).ready(function() {
   
           $('.mdb').click(function() {
               row = $(this).find('b.rn').text();
               rowid = $(this).find('span.rv').text();
               batch_id = $(this).closest('tr').find('.batch_id').text();
               var selectedValue = $("input[name='palletno']:checked").val();
             
               if (selectedValue) {
                   $("#sbtn").show();
                   $("#labelid").val(selectedValue);
                   $("#labelid").prop("readonly", true);
               } else {
                   $("#sbtn").hide();
                   $("#labelid").val("Please Select a Label first");
                   $("#labelid").prop("readonly", true); 
               
               }
               $('#rowname').text(row);
               $('#rowid').val(rowid);
              
   
           });
   
           $('.mdc').click(function() {
               row = $(this).find('b.rn').text();
               $('#plabel').val($(this).data("plabel"));
               $('#mcname').val($(this).data("mc"));
               $('#rowname2').text(row);
               $('#rowid').val(row);
               var mcid = $(this).data("mc-id");
               var label=$(this).data("plabel");
                   $.ajax({
                       type: "post", 
                       url: "<?php echo e(route('getmcd')); ?>",
                       data:{
                               '_token': "<?php echo csrf_token() ?>",
                               mcid:mcid,
                               mqty:1,
                               label:label,
                                        
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
     // Attach a submit event handler to the form
     $('#formimg').ajaxForm({
                   beforeSend: function () {
                      var percentage = '0';
                       $('#probar').css("width", percentage+'%');
                   },
                   uploadProgress: function (event, position, total, percentComplete) {
                       var percentage = percentComplete;
                        $('#probar').css("width", percentage+'%');
                   },
                   complete: function (req) {
                      if(req.status==200)
                      {
                       
                           Swal.fire({ 
                           text: "Checked In Successfully.",
                           title:"Saved",
                           type: "question",
                               }).then(okay => {
                                   if (okay) {
                                       location.reload(true);
                                   }
                               });
                       }
                       else{
                          $("#probar").removeClass("bg-success").addClass("bg-danger");
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
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/checkin/index.blade.php ENDPATH**/ ?>