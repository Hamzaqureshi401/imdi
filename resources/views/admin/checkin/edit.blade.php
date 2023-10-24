@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
Manage Warehouse
@endsection

@section('content')

<div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     <i class="header-icon  me-3 text-muted opacity-6"></i>
                                     Edit Warehouse
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
                                     <form method="post" action="{{route('warehouse.update',$wh->id)}}">
                                     @method('PUT')
                                    @csrf
                                         

                                          <div class="row">
                                             <div class="col-md-4">
                                                 <div class="position-relative mb-3">
                                                     <label for="exampleEmail11" class="form-label">Warehouse Name</label>
                                                     <input name="warehouse" value="{{$wh->warehouse}}"  placeholder="Enter Warehouse Name" type="text" class="form-control">
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="position-relative mb-3">
                                                     <label for="examplePassword11" class="form-label"> Address</label>
                                                     <input name="address" value="{{$wh->address}}"  placeholder="Enter Warehouse Address" type="text" class="form-control">
                                                 </div>
                                             </div>
                                             <div class="col-md-2">
                                                 <div class="position-relative mb-3">
                                                     <label for="examplePassword11" class="form-label"> &nbsp;</label>
                                                     <input type="submit"  class=" form-control btn btn-success" >
                                                 </div>
                                             </div>
                                         </div>

                                       
                                     </form>
                             </div>
                         </div>
                        
 </div>

@endsection

@section('footer')
    
  
@endsection