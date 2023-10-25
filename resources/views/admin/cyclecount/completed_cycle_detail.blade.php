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
                                                   <th>Action</th>
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
                                                   <td>
                                                      <div class="centered-icon text-center">
                                                         @if ($cycle->binlocation->labelid == $cycle->pallet_no)
                                                         <!-- Show the "tick" icon when the condition is true -->
                                                         <i class="lnr-checkmark-circle icon-gradient bg-success"></i>
                                                         @else
                                                         <!-- Show the "Edit" button when the condition is false -->
                                                         <a href="{{ route('cyclecount.update.bin', $cycle->id) }}" class="btn btn-dark">
                                                         Update Bin
                                                         </a>
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
@endsection
@section('footer')
<!-- Modal -->
<script>
 
</script>
@endsection