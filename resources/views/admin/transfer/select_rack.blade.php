<div class="col-md-4">
                     <div class="position-relative mb-3">
                        <label for="exampleEmail11" class="form-label d-block">Rack</label>
                        <select name="rack_id"  id="rack" class="form-control multiselect-dropdown">
                           <option value="">Select Rack Location</option>
                           @foreach($rack as $b)
                           <option value="{{$b->id}}">{{$b->rowtitle}}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>