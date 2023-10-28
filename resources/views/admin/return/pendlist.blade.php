@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
 Manage Returns
@endsection

@section('content') 
<div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
                                    Return List: &nbsp; <span class="text-primary"></span>
                                 </div>
                                
                             </div>
                             <div class="card-body">
                                 <table style="width: 100%;" id="mytb" class="table table-hover table-striped table-bordered">
                                     <thead>
                                         <tr>
                                             <th>Sr #</th>
                                             <th>Return Date</th>
                                             <th>Transaction</th>
                                             <th>Invoice No.</th>
                                             <th>Master Case</th>
                                             <th>Picked Quantity</th>
                                             <th>Return Quantity</th>
                                             <th>Warehouse</th>
                                             <th>Item Condition</th>
                                            
                                            
                                         </tr>
                                     </thead> 
                                     <tbody> 
                                       @foreach($po as $r)
                                       <tr>
                                           <td>{{ $loop->index + 1  }}</td>
                                       <td>{{ $r->return_date }}</td>
                                       <td>{{ $r->trans_no }}</td>
                                       <td>{{ $r->invoice_no }}</td>
                                       <td>{{ $r->masterCase->name }}</td>
                                       <td>{{ $r->return_qty }}</td>
                                       <td>{{ $r->qty }}</td>
                                       <td>{{ $r->warehouse->warehouse }}</td>
                                       <td>{{ $r->item_condition }}</td>
                        
                                       </tr>
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