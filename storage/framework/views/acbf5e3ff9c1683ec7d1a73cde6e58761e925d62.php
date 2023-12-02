
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
            <i class="header-icon  me-3 text-muted opacity-6"></i>
            Add New Row / Racks
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
         <?php if(\Session::has('error')): ?>
         <div  class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
            <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert">
            </button>
            <ul>
               <li><?php echo e(Session::get('error')); ?></li>
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
         <form method="post" action="<?php echo e(route('rack.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="row">
               <div class="col-md-3">
                  <div class="position-relative mb-3">
                     <label for="exampleEmail11" class="form-label">Row Title:</label>
                     <input name="rowtitle" placeholder="Enter Row Title" type="text" class="form-control" required>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="position-relative mb-3">
                     <label for="examplePassword11" class="form-label">No of Location:</label>
                     <input name="length"  placeholder="Enter Length" min=1 type="number" class="form-control" required>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="position-relative mb-3">
                     <label for="examplePassword11" class="form-label">Format: </label>
                     <input name="format" id="pname" placeholder="Enter Row Format" type="text" class="form-control" pattern=".*\*.*" required title="Input must contain '*'"  required>
                     <span class="text-danger">Please use * where You want series</span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="position-relative mb-3">
                     <label for="examplePassword11" class="form-label">&nbsp;</label>
                     <input type="hidden" name="warehouse" value="<?php echo e($warehouse); ?>" />
                     <input name="submit" type="submit" value="Save"class="form-control btn btn-dark">
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            Row List
         </div>
      </div>
      <div class="card-body">
         <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
            <thead>
               <tr>
                  <th>Sr #</th>
                  <th>Row Title</th>
                  <th>Format</th>
                  <th>No of Location</th>
                  <th style="text-align:center;">Action</th>
               </tr>
            </thead>
            <tbody>
               <?php 
               $i=1;
               ?> 
               <?php $__currentLoopData = $racks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <td><?php echo e($i); ?></td>
                  <td><?php echo e($u->rowtitle); ?></td>
                  <td><?php echo e($u->format); ?></td>
                  <td><?php echo e($u->length); ?></td>
                  <td style="text-align:center;">
                     

                     <div role="group" class="btn-group-lg btn-group btn-group-toggle">
                      <!--   <a href="<?php echo e(route('binlabels', $u->id)); ?>">
                           <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Print Label">
                              <i class="lnr-printer icon-gradient bg-grow-early"></i>
                           </div>
                        </a> -->
                         <a href="<?php echo e(route('print', $u->id)); ?>" class="print-link">
                            <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Print Label">
                                <i class="lnr-printer icon-gradient bg-grow-early"></i>
                            </div>
                        </a>
                        <a href="<?php echo e(route('rack.show', $u->id)); ?>">
                           <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View or Update BarCode">
                              <i class="lnr-eye icon-gradient bg-grow-early"></i>
                           </div>
                        </a>
                        <a href="<?php echo e(route('rack.edit', $u->id)); ?>">
                           <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit">
                              <i class="lnr-pencil icon-gradient bg-grow-early"></i>
                           </div>
                        </a>
                        <?php if(binstatusforrack($u->id)==$u->length): ?>
                        <form class="delete" method="POST" action="<?php echo e(route('rack.destroy', $u->id)); ?>">
                           <?php echo csrf_field(); ?>
                           <?php echo method_field("DELETE"); ?>
                           <button type="submit" class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete">
                           <i class="lnr-trash icon-gradient bg-amy-crisp"></i>
                           </button>
                        </form>
                        <?php endif; ?>
                     </div>
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
                  <th>Row Title</th>
                  <th>Format</th>
                  <th>No of Location</th>
                  <th style="text-align:center;">Action</th>
               </tr>
            </tfoot>
         </table>
      </div>
   </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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
<script>
    $(document).ready(function () {
        $('.print-link').on('click', function (e) {
            e.preventDefault();

            // Show a prompt to get user input
            var numberOfPrints = prompt("How many prints do you want? (Maximum: 3)");

            // Check if the user entered a value and it's a positive integer within the range
            if (numberOfPrints !== null && !isNaN(numberOfPrints) && numberOfPrints > 0 && numberOfPrints <= 3) {
                // Get the href attribute from the clicked link
                var printUrl = $(this).attr('href');

                // Append the user input as a query parameter
                printUrl += '/' + numberOfPrints;

                // Redirect to the print route with the user input
                window.location.href = printUrl;
            } else {
                alert("Please enter a valid number between 1 and 3.");
            }
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/racks/index.blade.php ENDPATH**/ ?>