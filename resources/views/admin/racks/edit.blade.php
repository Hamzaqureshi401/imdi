@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
Manage Warehouse Rows / Racks
@endsection

@section('content')

<div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     <i class="header-icon  me-3 text-muted opacity-6"></i>
                                     Edit Row / Rack
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
                                     <form method="post" action="{{route('rack.update',$wh->id)}}">
                                     @method('PUT')
                                    @csrf
                                         

                                    <div class="row">
                                                <div class="col-md-3">
                                                    <div class="position-relative mb-3">
                                                        <label for="exampleEmail11" class="form-label">Row Title:</label>
                                                        <input name="rowtitle" value="{{$wh->rowtitle}}" placeholder="Enter Row Title" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative mb-3">
                                                        <label for="examplePassword11" class="form-label">No of Location:</label>
                                                        <input name="length" value="{{$wh->length}}"  placeholder="Enter Length" min="{{$wh->length}}" type="number" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="position-relative mb-3">
                                                        <label for="examplePassword11" class="form-label">Format:</label>
                                                        <input name="format" id="pname" value="{{$wh->format}}" placeholder="Enter Row Format" type="text" class="form-control" required>
                                                            <span class="text-danger">Please use * where You want series</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-3"> 
                                                    <div class="position-relative mb-3">
                                                        <label for="examplePassword11" class="form-label">&nbsp;</label>
                                                        <input type="hidden" name="warehouse" value="{{$wh->warehouse}}" />
                                                        <input name="submit" type="submit" value="Update"class="form-control btn btn-success">
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