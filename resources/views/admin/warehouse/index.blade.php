@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
 Manage Warehoue
@endsection

@section('content')

    <div class="tabs-animation">
                         
                         
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                        <i class="header-icon  me-3 text-muted opacity-6"></i>
                                        Add New Warehouse
                                    </div>
                                    
                                </div>
                                <div class="card-body">
                                @if (\Session::has('message'))
                                                    <div  class="alert alert-success alert-dismissible fade show print-error-msg" role="alert">
                                                        
                                                    <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert">
                                                        </button>
                                                        <ul>
                                                        <li>{{Session::get('message')}}</li>
                                                        </ul>
                                                        
                                                    </div>
                                                @endif

                                                @if (count($errors) > 0)
                                                <div  class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
                                                        <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert">
                                                        </button>
                                                    
                                                    <ul>
                                                    @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                    
                                                </div> 
                                                @endif
                                        <form method="post" action="{{route('warehouse.store')}}">
                                       @csrf
                                            

                                             <div class="row">
                                                <div class="col-md-4">
                                                    <div class="position-relative mb-3">
                                                        <label for="exampleEmail11" class="form-label">Warehouse Name</label>
                                                        <input name="warehouse"  placeholder="Enter Warehouse Name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="position-relative mb-3">
                                                        <label for="examplePassword11" class="form-label"> Address</label>
                                                        <input name="address"  placeholder="Enter Warehouse Address" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="position-relative mb-3">
                                                        <label for="examplePassword11" class="form-label"> &nbsp;</label>
                                                        <input type="submit"  class=" form-control btn btn-dark" >
                                                    </div>
                                                </div>
                                            </div>

                                          
                                        </form>
                                </div>
                            </div>
                           
    </div>


                    <div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     
                                     Warehouse List
                                 </div>
                                
                             </div>
                             <div class="card-body">
                                 <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                     <thead>
                                         <tr>
                                             <th>Sr #</th>
                                             <th>Warehouse Name</th>
                                             <th>Address</th>
                                             <th style="text-align:center;">Action</th>
                                            
                                         </tr>
                                     </thead>
                                     <tbody>
                                        @php 
                                        $i=1;
                                        @endphp
                                        @foreach( $wh as $u )
                                        
                                         <tr>
                                             <td>{{$i}}</td>
                                             <td>{{$u->warehouse}}</td>
                                             <td>{{$u->address}}</td>
                                             <td style="text-align:center;">
                                                    <div role="group" class="btn-group-lg btn-group btn-group-toggle">

                                                        <a href="{{ route('managerack', $u->id) }}">
                                                            <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Manage">
                                                                <i class="lnr-select icon-gradient bg-grow-early"></i>
                                                            </div>
                                                        </a>
                                                       

                                                        <a href="{{ route('warehouse.edit', $u->id) }}">
                                                            <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit">
                                                                <i class="lnr-pencil icon-gradient bg-grow-early"></i>
                                                            </div>
                                                        </a>
                                                @if(rackstatusforwarehouse($u->id)<=0)
                                                        <form class="delete" method="POST" action="{{ route('warehouse.destroy', $u->id) }}">
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
                                             <th>Warehouse Name</th>
                                             <th>Address</th>
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