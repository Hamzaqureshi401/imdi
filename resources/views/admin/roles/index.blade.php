@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
 Manage Roles and Permission 
@endsection

@section('content')

    


                    <div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     
                                     Roles List
                                 </div>
                                <div class="btn-actions-pane-right">
                                    
                                        <a  href="{{route('role.create')}}" class="btn btn-primary ">New Role</a>
                                   
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
                                 <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                     <thead>
                                         <tr>
                                             <th>Sr #</th>
                                             <th>Role</th>
                                             
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
                                             <td>{{$u->role}}</td>
                                            
                                             <td style="text-align:center;">
                                                    <div role="group" class="btn-group-lg btn-group btn-group-toggle">

                                                        

                                                        <a href="{{ route('role.edit', $u->id) }}">
                                                            <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit">
                                                                <i class="lnr-select icon-gradient bg-grow-early"></i>
                                                            </div>
                                                        </a>
                                                    @if(checkrolestatus($u->id)==0)
                                                        <form class="delete" method="POST" action="{{ route('role.destroy', $u->id) }}">
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
                                             <th>Role</th>
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