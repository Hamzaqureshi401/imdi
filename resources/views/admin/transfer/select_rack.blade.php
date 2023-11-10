                     <div class="position-relative mb-3">
                        <label for="exampleEmail11" class="form-label d-block">Rack</label>
                        <select name="rack_id"  id="rack" class="form-control multiselect-dropdown">
                           <option value="">Select Rack Location</option>
                           @foreach($rack as $b)
                           <option value="{{$b->id}}">{{$b->rowtitle}}</option>
                           @endforeach
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
                  </script>