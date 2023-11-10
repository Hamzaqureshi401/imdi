                     <div class="position-relative mb-3">
                        <label for="exampleEmail11" class="form-label d-block">Bin Location</label>
                        <select name="binlocation"  id="binlocation" class="form-control multiselect-dropdown">
                           <option value="">Select Bin Location</option>
                           <?php $__currentLoopData = $bin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($b->id); ?>"><?php echo e($b->name); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                     </div>
<?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/transfer/select_bin.blade.php ENDPATH**/ ?>