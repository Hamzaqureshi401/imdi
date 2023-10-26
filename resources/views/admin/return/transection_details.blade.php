<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
            Orders Detail
         </div>
      </div>
      <div class="card-body">
         @if(session('message'))
         <div class="alert alert-success">
            {{ session('message') }}
         </div>
         @endif
         <div class="row">
            <div class="col-12 ">
               <div class="card">
                  <div class="padding-20">
                     <div class="section-body bg-dark">
                        <div class="row">
                           <div class="col-12 col-md-12 col-lg-12">
                              <div class="card">
                                 <div class="card-header bg-dark d-flex justify-content-center">
                                    <h4 style="color: white;">Cycle Count Data</h4>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab-content tab-bordered" id="myTab3Content">
                        <div class="tab-pane fade show active" id="about" role="tabpanel"
                           aria-labelledby="home-tab2">
                           <div class="row">
                              <div class="col-12">
                                 <div class="card">
                                    <div class="card-body p-0">
                                       <div class="table-responsive">
                                          <table class="table table-striped">
                                             <thead>
                                                <tr>
                                                   <th>Sr</th>
                                                   <th>Date</th>
                                                   <th>Transection No.</th>
                                                   <th>Invoice No.</th>
                                                   <th>Master Case.</th>
                                                   <th>Pallet No.</th>
                                                   <th>Ware House</th>
                                                   <th>Quantity</th>
                                                   <th>Select Whare House</th>
                                                   <th>Whare Location</th>
                                                   <th>Return MS Qty </th>
                                                   <th>Action</th>

                                                </tr>
                                             </thead>
                                             <tbody>
                                                @foreach($searchResults as $result)
                                                <tr>
                                                   <td>{{ $loop->index + 1}}</td>
                                                   <td>{{ $result->pick_date ?? '--'}}</td>
                                                   <td>{{ $result->trans_no}}</td>
                                                   <td>{{ $result->invoice_no ?? '--' }}</td>
                                                   <td>{{ $result->masterCase->name }}</td>
                                                   <td>{{ $result->label_no}}</td>

                                                   <td>{{ $result->palletlabel->wareHouse->warehouse}}</td>
                                                   <td>{{ $result->qty}}</td>
                                                   <td>
                                                   <div class="form-group">
                                                    <select name="warehouse_select" class="form-control warehouse_select" data-id="{{ $result->id }}">
                                                        @foreach($wharehouses as $wharehouse)
                                                        <option>Select Whare House</option>
                                                            <option value="{{ $wharehouse->id }}">{{ $wharehouse->warehouse }}</option>
                                                        @endforeach
                                                    </select>
                                                 </div>
                                                </td>
                                                   <td id="rack_info_cell-{{ $result->id }}"></td>
                                                   <td>
                                                      <div class="form-group">
                                                       <!-- <label for="transactionNo">Transaction No / Invoice No</label> -->
                                                       <input type="number" class="form-control" name="return" >
                                                      </div>
                                                   </td>
                                                   <td><a href="#" class="btn-sm btn btn-dark" data-toggle="modal" data-target="#confirmUpdateBinModal" data-update-url="{{ route('cyclecount.update.bin', $result->id) }}">Return</a></td>
                                                </tr>
                                                @endforeach                                          
                                          </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
           
         </div>
      </div>
   </div>
</div>
<!-- Modal -->
<script>
$(document).ready(function() {
    $('.warehouse_select').on('change', function() {
        var selectedWarehouse = $(this).val();
        var rowId = $(this).data('id');
        var rackInfoCell = $('#rack_info_cell-' + rowId);
        if (selectedWarehouse) {
            $.ajax({
                type: 'GET',
                url: '/get-rack-info/' + selectedWarehouse, 
                success: function(data) {
                    rackInfoCell.html(data);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        } else {
            rackInfoCell.html('');
        }
    });
});
</script>
