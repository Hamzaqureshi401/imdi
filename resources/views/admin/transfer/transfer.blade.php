@extends('layouts.admin.app')

@section('header')

@endsection
 
@section('title')
Manage Transfer 
@endsection

@section('content')

    <div class="tabs-animation">
                         
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif   
                 
                <form id="formmain" class="myform" method="post" action="{{route('transfer.store')}}" >
                @csrf    
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                        <i class="header-icon  me-3 text-muted opacity-6"></i>
                                        Transfer
                                    </div>
                                    
                                </div>
                                <div class="card-body">
                                                <div style="display:none;" class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
                                                    
                                                    </button>
                                                    <ul>
                                                        
                                                    </ul> 
                                                    
                                                </div>
                                       
                                            <div class="row">
                                                
                                                <div class="col-md-12">
                                                    
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="position-relative mb-3">
                                                                <label for="exampleEmail11" class="form-label d-block">Pallet No</label>

                                                                <input class="form-control" readonly value="{{$pl->palletno}}" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative mb-3">
                                                                <label for="exampleEmail11" class="form-label d-block">Master Case</label>
                                                                <input class="form-control" readonly value="{{getmastercase($pl->mc_id)}}" />
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="position-relative mb-3">
                                                                <label for="exampleEmail11" class="form-label d-block">Warehouse</label>

                                                                <input id="warehouse" name="warehouse" class="form-control" value="{{getwarehouse($pl->warehouse)}}" readonly />
                                                            </div>
                                                        </div> 

                                                        <div class="col-md-3">
                                                            <div class="position-relative mb-3">
                                                                <label for="exampleEmail11" class="form-label d-block">Bin Location</label>

                                                                <input class="form-control" name="bin_location_name" value="{{get_pl_location($pl->palletno)}}" readonly />
                                                                <input type="hidden" name="bid" value="{{get_bin_location($pl->palletno)}}" readonly />
                                                            </div>
                                                        </div>
                                                    </div> 

                                                    <div class="row"><h3 class="text-primary">Transfer to New Location</h3></div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="exampleEmail11" class="form-label d-block">Warehouse</label>

                                                                <select name="warehouse"  id="warehouse" class="form-control multiselect-dropdown" required>
                                                                <option value="">Select Warehouse</option>
                                                                
                                                                    @foreach($wh as $w)
                                                                    <option value="{{$w->id}}">{{$w->warehouse}}</option>
                                                                    @endforeach
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="exampleEmail11" class="form-label d-block">Bin Location</label>
                                                                <input name="pid" type="hidden" hidden value="{{$pl->id}}" />
                                                                <select name="binlocation"  id="binlocation" class="form-control multiselect-dropdown">
                                                                <option value="">Select Bin Location</option>
                                                                    @foreach($bin as $b)
                                                                    <option value="{{$b->id}}">{{$b->name}}</option>
                                                                    @endforeach
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>

                                                    

                                                   

                                                   
                                                
                                                </div>
                                               
                                                
                                            </div>

                                      
                                </div>
                                <div class="d-block text-end card-footer">
                                       
                                        
                                        <input type="submit" name="submit" value="Transfer" class="btn btn-info">
                                       <br>
                                </div>
                            </div>
                </form>

                           
                           

@endsection

@section('footer')


    <script type="text/javascript" src="{{url('public/admin/js/form-components/input-select.js')}}"></script>
    <script type="text/javascript" src="{{url('public/admin/vendors/select2/dist/js/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/admin/vendors/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/admin/js/sweet-alerts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script>
      
@endsection