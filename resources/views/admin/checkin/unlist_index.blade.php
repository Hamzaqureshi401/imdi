@extends('layouts.admin.app')
@section('header')
@endsection
@section('title')
Manage Check In 
@endsection
@section('content')
<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            Allocated Received Products
         </div>
         <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
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
                  <th>First Bin Location</th>
                  <th>Master Case</th>
                  <th>MasterCase Quantity</th>
                  <th>Ti*Hi</th>
                  <th>Label Count</th>
                  <th>Assigned</th>
                  <th>Un Assigned</th>
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
               $c=getassignedpallet($u->id);
               @endphp
               @if($c>0)
               <tr>
                  <td>{{$i}}</td>
                  <td>{{getwarehouse($u->warehouse)}}</td>
                  <td>{{$u->created_at}}</td>
                  <td>{{$u->order_no}}</td>
                  <td>{{$u->order_no}}</td>
                  <td>{{$u->binlocation->first()->name}}</td>
                  <th>{{getmastercase($u->mcid)}}</th>
                  <td>{{$u->mc_quantity}}</td>
                  <td>{{$pc}}</td>
                  <th>{{$q}}</th>
                  <th>{{$c}}</th>
                  <th>{{$q-$c}}</th>
                  <td style="text-align:center;">
                     <div role="group" class="btn-group-lg btn-group btn-group-toggle">
                        <a href="{{ route('checkinunlist', $u->id) }}">
                           <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit CheckIn">
                              <i class="lnr-pencil icon-gradient bg-grow-early"></i>
                           </div>
                        </a>
                     </div>
                     @if(Auth::user()->role == 1)
                   <!--   <a href="{{ route('delete.checkinunlist', $u->id) }}" class="btn btn-sm btn-danger">
                           Delete
                        </a> -->
                        @endif
                  </td>
               </tr>
               @php 
               $i++;
               @endphp
               @endif
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
                  <th>Assigned</th>
                  <th>Un Assigned</th>
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