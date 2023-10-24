@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
 Manage Products
@endsection

@section('content')
<div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     <i class="header-icon lnr-users me-3 text-muted opacity-6"></i>
                                     Product List
                                 </div>
                                
                             </div>
                             
                             <div class="card-body">
                             @if(session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                                 <table style="width: 100%;" id="mytb" class="table table-hover table-striped table-bordered">
                                     <thead>
                                         <tr>
                                             <th>Sr #</th>
                                             <th>Product UPC</th>
                                             <th>Product Name</th>
                                             <th>Description </th>
                                             <th>Tags</th>
                                             <th>Start Month</th>
                                             <th>End Month</th>
                                             <th style="text-align:center;">Action</th>
                                            
                                         </tr>
                                     </thead>
                                     <tbody>
                                        @php 
                                        $i=1;
                                        @endphp
                                        @foreach( $products as $u )
                                         <tr>
                                             <td>{{$i}}</td>
                                             <td>{{$u->upc}}</td>
                                             <td>{{$u->name}}</td>
                                             <td>{{$u->description}}</td>
                                             <td>{{$u->keywords}}</td>
                                             <td>@if($u->start_date!=NULL || $u->start_date!=""){{monthname($u->start_date)}}@endif</td>
                                             <td>@if($u->end_date!=NULL || $u->end_date!=""){{monthname($u->end_date)}}@endif</td>
                                             
                                             <td style="text-align:center;">
                                                    <div role="group" class="btn-group-lg btn-group btn-group-toggle">

                                                       

                                                        <a href="{{ route('product.edit', $u->id) }}">
                                                            <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit">
                                                                <i class="lnr-pencil icon-gradient bg-grow-early"></i>
                                                            </div>
                                                        </a>
                                                    @if($p=checkprodinmaster($u->id)==0)
                                                        <form class="delete" method="POST" action="{{ route('product.destroy', $u->id) }}">
                                                        @csrf
                                                        @method("DELETE")
                                                        <button type="submit" class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete">
                                                            <i class="lnr-trash icon-gradient bg-amy-crisp"></i>
                                                        </button>
                                                        </form>
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
                                             <th>Product UPC</th>
                                             <th>Product Name</th>
                                             <th>Description </th>
                                             <th>Tags</th>
                                             <th>Start Month</th>
                                             <th>End Month</th>
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