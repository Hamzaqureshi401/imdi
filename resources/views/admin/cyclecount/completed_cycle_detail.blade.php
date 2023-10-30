@extends('layouts.admin.app')
@section('header')
@endsection
@section('title')
Manage Cycle Count
@endsection
@section('content')
<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
            Completed Cycle Count List
         </div>
      </div>
      <div class="card-body">
         @if(session('message'))
         <div class="alert alert-success">
            {{ session('message') }}
         </div>
         @endif
         <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
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
                                                   <th>Bin Location No.</th>
                                                   <th>Pallet No.</th>

                                                </tr>
                                             </thead>
                                             <tbody>
                                                @if(!empty($cycleCount->cycleCountLocation))
                                                @foreach($cycleCount->cycleCountLocation as $cycle)
                                                <tr>
                                                   <td>{{ $loop->index + 1 }}</td>
                                                   <td>{{ $cycle->bl_name  }}</td>
                                                   <td>
                                                      @if($cycle->pallet_no == 0)
                                                      {{ 'Vaccant Bin' }}
                                                      @else
                                                      {{ $cycle->pallet_no }}
                                                      @endif
                                                   </td>
                                                </tr>
                                                @endforeach
                                                @endif
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
            <div class="col-12 col-md-6 col-lg-6">
               <div class="card">
                  <div class="padding-20">
                     <div class="section-body bg-dark">
                        <div class="row">
                           <div class="col-12 col-md-12 col-lg-12">
                              <div class="card">
                                 <div class="card-header bg-dark d-flex justify-content-center">
                                    <h4 style="color: white;">System Data</h4>
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
                                                   <th>Bin Location No.</th>
                                                   <th>Pallet No.</th>
                                                   <th>Qty</th>
                                                    <th>Rc Id</th>
                                                   <th>Mc Id</th> 

                                                   <th class="text-center">Action</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                @foreach($cycleCount->cycleCountLocation as $cycle)
                                                @if(!empty($cycle->binlocation))
                                                <tr>
                                                   <td>{{ $loop->index + 1 }}</td>
                                                   <td>{{ $cycle->binlocation->name ?? '--'  }}</td>
                                                   <td>
                                                      @if($cycle->binlocation->labelid == 0 || $cycle->binlocation->labelid == NULL)
                                                      {{ 'Vaccant Bin' }}
                                                      @else
                                                      {{ $cycle->binlocation->labelid }}
                                                      @endif
                                                   </td>
                                                   <td>{{ $cycle->binlocation->palletLabel->avl_qty ?? '--' }}</td>
                                                    <td>{{ $cycle->binlocation->rcid}}</td>
                                                   <td>{{ $cycle->binlocation->mcid}}</td> 
                                                   <td>
                                                      <div class="centered-icon text-center">
                                                         @if ($cycle->binlocation->labelid == $cycle->pallet_no)
                                                         <!-- Show the "tick" icon when the condition is true -->
                                                         <i class="lnr-checkmark-circle icon-gradient bg-success"></i>
                                                         @elseif($cycle->pallet_no == 0)
                                                         <a href="#" class="btn-sm btn btn-dark" data-toggle="modal" data-target="#confirmUpdateBinModal" data-update-url="{{ route('cyclecount.update.bin', $cycle->id) }}">Update Bin</a>



                                                         @elseif($binlocation->where('labelid', $cycle->pallet_no)->isNotEmpty())

                                                         <!-- Show the "Edit" button when the condition is false -->
                                                        <a href="#" class="btn-sm btn btn-dark" data-toggle="modal" data-target="#confirmUpdateBinModal" data-update-url="{{ route('cyclecount.update.bin', $cycle->id) }}">Update Bin</a>



                                                         @else
                                                         <i class="fas fa-times icon-gradient bg-danger"></i> Wrong Pallet

                                                         @endif
                                                      </div>
                                                   </td>
                                                </tr>
                                                @endif
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
<div class="modal fade" id="confirmUpdateBinModal" tabindex="-1" role="dialog" aria-labelledby="confirmUpdateBinModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmUpdateBinModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to update the bin?
            </div>
            <div class="modal-footer">
                <button type="button" id="cancelButton" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="{{ route('cyclecount.update.bin', $cycle->id) }}" id="confirmUpdateBinButton" class="btn btn-primary">Update Bin</a>
            </div>
        </div>
    </div>
</div>

@endsection
@section('footer')
<!-- Modal -->
<script>
 $(document).ready(function () {
    $('a[data-toggle="modal"]').on('click', function (e) {
        e.preventDefault(); 
        var updateBinURL = $(this).data('update-url');
        $('#confirmUpdateBinButton').attr('href', updateBinURL);
        $('#confirmUpdateBinModal').appendTo("body").modal('show');
        //$('#confirmUpdateBinModal').modal('show');
    });
    $('#confirmUpdateBinButton').on('click', function () {
        var updateBinURL = $(this).attr('href');
        window.location.href = updateBinURL;
    });
});
 $('#cancelButton').on('click', function() {
    $('#confirmUpdateBinModal').modal('hide');
});


</script>
@endsection