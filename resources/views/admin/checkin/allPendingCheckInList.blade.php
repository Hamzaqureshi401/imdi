@extends('layouts.admin.app')
@section('header')
@endsection
@section('title')
Check In 
@endsection
@section('content')
<div class="tabs-animation">
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            Un Allocate Received Products
         </div>
         <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
         </div>
      </div>
      <div class="card-body">
         <table style="width: 100%;" id="mytb" class="table table-hover table-striped table-bordered">
            <thead>
               <tr>
                  <th>Sr #</th>
                  <th>Master Case</th>
                  <th>Pallet Label </th>
                  <th>Bin Location</th>
                  <th>Barcode</th>
                  <th>Checkin Status</th>
                  <th>Checked In By</th>
                  <th style="text-align:center;">Action</th>
               </tr>
            </thead>
            <tbody>
              
               @foreach( $bin as $u )
               @php
               $pl=getlabelinfo($u->labelid);
               @endphp
               <tr>
                  <td>{{$loop->index + 1}}</td>
                  <td>{{getmastercase($u->mcid)}}</td>
                  <td>{{$u->labelid}}</td>
                  <td>{{$u->name}}</td>
                  <td style="text-align:center;">
                     <center>{!!barcode_gen($u->barcode)!!}</center>
                     {{$u->barcode}}
                  </td>
                  <td>
                     @if(empty($pl->checkin_status) || $pl->checkin_status==0)
                     <b class="text-danger">Pending</b>
                     @else
                     <b class="text-success">Checked in Completed</b>
                     @endif
                  </td>
                  <td>
                     @if(empty($pl->checkin_status) || $pl->checkin_status==0)
                     <b class="text-danger">Pending</b>
                     @else
                     <b class="text-primary">{{$pl->user->name ?? ''}}<br>{{$pl->checkin_date}}</b>
                     @endif
                  </td>
                  <td style="text-align:center;">
                    @if(empty($u->palletLabel->checkin_date))
                    <a href="{{ route('checkin.edit' , $u->id) }}" class="btn btn-sm btn-dark">Check In Confirm</a>
                    @endif
                     @if(empty($pl->checkin_status) || $pl->checkin_status==0)
                     <div role="group" class="btn-group-lg btn-group btn-group-toggle">
                        <form class="delete" method="POST" action="{{ route('checkin.destroy', $u->id) }}">
                           @csrf
                           @method("DELETE")
                           <button type="submit" class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Un Allocate">
                           <i class="lnr-trash icon-gradient bg-amy-crisp"></i>
                           </button>
                        </form>
                     </div>
                     @endif
                  </td>
               </tr>
              
               @endforeach
            </tbody>
           <!--  <tfoot>
               <tr>
                  <th>Sr #</th>
                  <th>Master Case</th>
                  <th>Pallet Label </th>
                  <
                  <th>Bin Location</th>
                  <th>Barcode</th>
                  <th>Checkin Status</th>
                  <th>Checked In By</th>
                  <th style="text-align:center;">Action</th>
               </tr>
            </tfoot> -->
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
       var confirmation = confirm("Are you sure you want to unallocate it ?");
       
       // If the user clicks "Cancel", prevent the form submission
       if (!confirmation) {
         event.preventDefault();
       }
     });
   });
   
   
</script>
@endsection