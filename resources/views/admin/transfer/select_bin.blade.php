<div class="col-md-4">
                     <div class="position-relative mb-3">
                        <label for="exampleEmail11" class="form-label d-block">Bin Location</label>
                        <select name="binlocation"  id="binlocation" class="form-control multiselect-dropdown">
                           <option value="">Select Bin Location</option>
                           @foreach($bin as $b)
                           <option value="{{$b->id}}">{{$b->name}}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>