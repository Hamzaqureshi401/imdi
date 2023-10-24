@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
 Manage Pick Orders
@endsection

@section('content') 
<div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
                                     Processed Pick Order List for Transaction: &nbsp; <span class="text-primary"> <b>{{$id}}</b></span>
                                 </div>
                                
                             </div>
                             <div class="card-body">
                                 <table style="width: 100%;" id="mytb" class="table table-hover table-striped table-bordered">
                                     <thead>
                                         <tr>
                                             <th>Sr #</th>
                                             <th>Master Case</th>
                                             <th>Pallet No</th>
                                             
                                             <th>Bin Location</th>
                                             <th>Warehouse</th>
                                             <th>Quantity</th>
                                             <th>Register By & at</th>
            
                                             <th>Picked By & at</th>
                                           
                                         </tr>
                                     </thead> 
                                     <tbody> 
                                        @php 
                                        $i=1;
                                        @endphp
                                        @foreach( $po as $u )
                                        @php
                                        $b=getbindetail($u->bin_id);
                                        
                                        @endphp
                                         <tr>
                                             <td>{{$i}}</td>
                                             <td>{{getmastercase($u->mc_id)}}</td>
                                             <td>{{$u->label_no}}</td>
                                             <td>{{$b->name}}</td>
                                             <td>{{getwarehouse_rc($u->rc_id)}}</td>
                                             <td style="text-align:center;"><b>{{$u->qty}}</b></td>
                                             <td style="text-align:center;">{{getusername($u->user)}}<br>{{ $u->created_at->format('Y-m-d h:i:s a') }}</td>
                                             <td style="text-align:center;">{{getusername($u->pick_by)}}<br>{{ $u->pick_date }}</td>
                                          
                                             
                                             
                                         </tr>
                                         @php 
                                        $i++;
                                        @endphp
                                         @endforeach
                                     </tbody>
                                    
                                 </table>
                             </div>
                         </div>
                        
                     </div>

@endsection

@section('footer')

<script>
$(document).ready(function() {
  // Attach a submit event handler to the form
  $(".delete").submit(function(event) {
    // Show a confirmation dialog
    var confirmation = confirm("Are you sure you want to Delete");
    
    // If the user clicks "Cancel", prevent the form submission
    if (!confirmation) {
      event.preventDefault();
    }
  });
});
</script>
@endsection