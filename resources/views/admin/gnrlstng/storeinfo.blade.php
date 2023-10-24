@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
 Manage Store Information
@endsection

@section('content')

    <div class="tabs-animation">
                         
                         
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                        <i class="header-icon lnr-cog me-3 text-muted opacity-6"></i>
                                        Manage Store Information
                                    </div>
                                    
                                </div>
                                <div class="card-body">
                                                <div style="display:none;" class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
                                                    
                                                    </button>
                                                    <ul>
                                                        
                                                    </ul>
                                                    
                                                </div>
                                            <form method="post" id="formimg" enctype="multipart/form-data" action="{{route('updatestoreinfo')}}">

                                                @csrf
                                       
                                                <div>
                                                    <div class="mb-3 progress">
                                                        <div  id="probar" class="progress-bar progress-bar-animated bg-success progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:0%;" >
                                                        </div>
                                                    </div>

                                                    <div class="form-group">

                                                        <label>Upload your Logo</label>

                                                        <img class="img-fluid mb-2" id="s1"  src="{{url('public/storage/slider')}}/" style="height: 300px; width: 300px;">

                                                        <input class="form-control" type="file" name="image" accept="image/*" onchange="preview_image_first(event)">
                                                        
                                                    </div>
                                                    <br>
                                                    
                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <span class=""><b>Store Name</b></span>
                                                        </div>
                                                        <input value="{{$si->name}}" name="name" type="text" class="form-control" required>
                                                    </div>
                                                    <br>

                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <span class=""><b>Address</b></span>
                                                        </div>
                                                        <input value="{{$si->address}}" name="address"  type="text" class="form-control" required>
                                                    </div>
                                                    <br>

                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <span class=""><b>Map Link</b></span>
                                                        </div>
                                                        <input value="{{$si->maplink}}" name="maplink"  type="text" class="form-control" required>
                                                    </div>
                                                    <br>

                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <span class=""><b>Mobile No</b></span>
                                                        </div>
                                                        <input value="{{$si->mobile}}" name="mobile"  type="text" class="form-control" required>
                                                    </div>
                                                    <br>

                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <span class=""><b>Phone No <span class="text-danger">(optional)</span></b></span>
                                                        </div>
                                                        <input value="{{$si->phone}}" name="phone"  type="text" class="form-control">
                                                    </div>
                                                    <br>

                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <span class=""><b>Email</b></span>
                                                        </div>
                                                        <input value="{{$si->email}}" name="email" type="text" class="form-control" required>
                                                    </div>
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <span class=""><b>Email <span class="text-danger">(optional)</span></b></span>
                                                        </div>
                                                        <input value="{{$si->opemail}}" name="opemail" type="text" class="form-control" >
                                                    </div>
                                                    <br>

                                                
                                                </div>
                                            
                                                <input type="submit"class="mt-2 btn btn-primary" value="Save"/>
                                            </form>
                                </div>
                            </div>
                           
    </div>

@endsection

@section('footer')
    <script type="text/javascript" src="{{url('public/admin/vendors/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/admin/js/sweet-alerts.js')}}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

    <script>
        function preview_image_first(event) 
        {

        var reader = new FileReader();

        reader.onload = function()

        {

        var output = document.getElementById('s1');

        output.src = reader.result;

        }

        reader.readAsDataURL(event.target.files[0]);

        }

        $(function () {
            $(document).ready(function () {
                $('#formimg').ajaxForm({
                    beforeSend: function () {
                       var percentage = '0';
                        $('#probar').css("width", percentage+'%');
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentage = percentComplete;
                         $('#probar').css("width", percentage+'%');
                    },
                    complete: function (req) {
                       
                        Swal.fire({ 
                        text: "Store Information is Updated Successfully",
                        title:"Saved",
                        type: "question",
                            });
                        
                    }
                });

              
            });
        });
    </script>
@endsection