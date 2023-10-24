@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
 Manage Warehouse Racks
@endsection

@section('content')

    


                    <div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     
                                     Rack List
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
                                <form method="post" action="{{route('assignbarcode')}}">
                                    @csrf
                                <table style="width: 100%;"  class="table table-hover table-striped table-bordered">
                                     <thead>
                                         <tr>
                                             <th>Sr #</th>
                                             <th>Location Name</th>
                                             <th>Barcode</th>
                                             
                                            
                                            
                                         </tr>
                                     </thead>
                                     <tbody>
                                        @php 
                                        $i=1;
                                        @endphp
                                        @foreach( $racks as $u )
                                         <tr>
                                             <td>{{$i}}</td>
                                             <td>{{$u->name}}</td>
                                             <td><input name="barcode[]" value="{{$u->barcode}}" pattern="[0-9]{12}"  Placeholder="Please enter 12 digits barcode."  class="form-control"/>
                                             <input name="id[]" type="hidden" value="{{$u->id}}" class="form-control"/></td>
                                             
                                             
                                             
                                         </tr>
                                         @php 
                                        $i++;
                                        @endphp
                                         @endforeach
                                     </tbody>
                                     <tfoot>
                                         <tr>
                                            <td colspan=3><input type="submit" value="Save" class=" form-control btn btn-dark"></td>
                                            

                                         </tr>
                                     </tfoot>
                                 </table>
                                </form>
                                 
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