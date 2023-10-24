@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
 Manage Received Products
@endsection

@section('content')
<div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     
                                     Received Products List
                                 </div>
                                 <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                                <div class="btn-group dropdown">
                                                    <a href="{{route('newreceived')}}" type="button" class="btn btn-success" >
                                                        Add Receive Product
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                
                             </div>
                             <div class="card-body">
                                 <table style="width: 100%;" id="mytb" class="table table-hover table-striped table-bordered">
                                     <thead>
                                         <tr>
                                             <th>Sr #</th>            
                                             <th>Warehouse</th>
                                             <th>Arrival Date</th>
                                             <th>Purchase Order No</th>
                                             <th>Container No</th>
                                             
                                             <th>Master Case</th>
                                             <th>MasterCase Quantity</th>
                                             <th>Ti*Hi</th>
                                             <th>Label Count</th>
                                             
                                             <th style="text-align:center;">Action</th>
                                            
                                         </tr>
                                     </thead>
                                     <tbody>
                                        @php  
                                        $i=1;
                                        @endphp
                                        @foreach( $pr as $u )
                                        @php 
                                       $pc=$u->ti*$u->hi;
                                       $q=ceil($u->mc_quantity/$pc);
                                        @endphp
                                         <tr>
                                             <td>{{$i}}</td>                                
                                             <td>{{getwarehouse($u->warehouse)}}</td>
                                             <td>{{$u->arr_date}}</td>
                                             <td>{{$u->order_no}}</td>
                                             <td>{{$u->container_no}}</td>
                                             
                                             <th>{{getmastercase($u->mcid)}}</th>
                                             <td>{{$u->mc_quantity}}</td>
                                             <td>{{$pc}}</td>
                                             <th>{{$q}}</th>
                                            
                                             <td style="text-align:center;">
                                                    <div role="group" class="btn-group-lg btn-group btn-group-toggle">

                                                        <a href="{{ route('viewreceived', $u->id) }}">
                                                            <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View">
                                                                <i class="lnr-eye icon-gradient bg-grow-early"></i>
                                                            </div>
                                                        </a>

                                                       

                                                        <a href="{{ route('palletlabels',[$u->id,$q,$u->mcid]) }}">
                                                            <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Label">
                                                                <i class="lnr-printer icon-gradient bg-grow-early"></i>
                                                            </div>
                                                        </a>
                                                        @if(check_status_for_rc($u->id)<=0)
                                                        <a href="{{ route('editreceived', $u->id) }}">
                                                            <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit">
                                                                <i class="lnr-pencil icon-gradient bg-grow-early"></i>
                                                            </div>
                                                        </a>

                                                        <a class="delete" href="{{ route('deleterecieved', $u->id) }}">
                                                            <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete">
                                                                <i class="lnr-trash icon-gradient bg-amy-crisp"></i>
                                                            </div>
                                                        </a>
                                                        @endif

                                                        

                                                       
                                                    </div>
                                             </td>
                                             
                                         </tr>
                                         @php 
                                        $i++;
                                        @endphp
                                         @endforeach
                                     </tbody>
                                     <tfoot>
                                         <tr>
                                         <th>Sr #</th>            
                                             <th>Warehouse</th>
                                             <th>Arrival Date</th>
                                             <th>Purchase Order No</th>
                                             <th>Container No</th>
                                             
                                             <th>Master Case</th>
                                             <th>MasterCase Quantity</th>
                                             <th>Ti*Hi</th>
                                             <th>Label Count</th>
                                             
                                             <th style="text-align:center;">Action</th>
                                         </tr>
                                     </tfoot>
                                 </table>
                             </div>
                         </div>
                        
                     </div>

@endsection

@section('footer')
<script>
$(document).ready(function() {
  // Attach a submit event handler to the form
  $(".delete").click(function(event) {
    // Show a confirmation dialog
    var confirmation = confirm("Are you sure you want to Delete?");
    
    // If the user clicks "Cancel", prevent the form submission
    if (!confirmation) {
      event.preventDefault();
    }
  });
});
</script>
@endsection