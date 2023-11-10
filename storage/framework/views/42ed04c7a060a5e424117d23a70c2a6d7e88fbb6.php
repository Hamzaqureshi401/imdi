                     <div class="position-relative mb-3">
                        <label for="exampleEmail11" class="form-label d-block">Rack</label>
                        <select name="rack_id"  id="rack" class="form-control multiselect-dropdown">
                           <option value="">Select Rack Location</option>
                           <?php $__currentLoopData = $rack; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($b->id); ?>"><?php echo e($b->rowtitle); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                     </div>
                  <script type="text/javascript">
   $('#rack').change(function() {
            var rackId = $(this).val();

            // AJAX request to fetch bin location information
            $.ajax({
                type: 'GET',
                url: '/get-bin-location-rc/' + rackId,
                success: function(data) {
                    $('#show-binlocation').html(data);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
                  </script><?php /**PATH C:\xampp\htdocs\imdi\resources\views/admin/transfer/select_rack.blade.php ENDPATH**/ ?>