@extends('layouts.admin.app')





@section('title')

 Slider Manager

@endsection



@section('content')



 

<div class="tabs-animation">

                         

                         

                         <div class="card mb-3">

                             <div class="card-header-tab card-header">

                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">

                                     <i class="header-icon lnr-screen me-3 text-muted opacity-6"></i>

                                     Update Sliders

                                 </div>

                                 

                             </div>

                             <div class="card-body">

                                             <div style="display:none;" class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">

                                                 

                                                 </button>

                                                 <ul>

                                                     

                                                 </ul>

                                                 

                                             </div>

                                             <div class="tabs-animation">

                         <div class="container mb-3 pb-3" style="background-color:white;">

                       

                       

                             

                               <div class="row">


                                    
                                       <div class="col-md-4">
                                         <form method="post" id="formimg1" enctype="multipart/form-data" action="{{route('uploadslider')}}">

                                            @csrf
                                         <div class="form-group">

                                           <label>Image </label>

                                           <img class="img-fluid mb-2" id="s1"  src="{{url('public/storage/slider')}}/{{$sl->s1}}" style="height: 300px; width: 300px;">

                                           <input class="form-control" type="file" name="image" accept="image/*" onchange="preview_image_first(event)">
                                            <input name="id" value="1" type="hidden"/>
                                         </div>
                                         <div class="mb-3 progress">
                                            <div  id="probar1" class="progress-bar progress-bar-animated bg-success progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:0%;" >
                                            </div>
                                        </div>
                                        <div class="position-relative mb-3">
                                                        <label for="exampleEmail11" class="form-label">Slider Heading</label>
                                                        <input name="heading" type="text" class="form-control" required="" value="{{$sl->s1head}}">
                                        </div>

                                        <div class="position-relative mb-3">
                                                        <label for="exampleEmail11" class="form-label">Sub Heading</label>
                                                        <input name="subheading"  type="text" class="form-control" required="" value="{{$sl->s1subhead}}">
                                        </div>
                                        <input name="upload" type="submit" class="btn btn-info" />
                                        </form>
                                       </div>

                                        <div class="col-md-4">
                                            <form method="post" id="formimg2" enctype="multipart/form-data" action="{{route('uploadslider')}}">

                                            @csrf
                                            <div class="form-group">

                                            <label>Image </label>

                                            <img class="img-fluid mb-2" id="s2"  src="{{url('public/storage/slider')}}/{{$sl->s2}}" style="

                                            height: 300px; width: 300px;">

                                            <input class="form-control" type="file" name="image" accept="image/*" onchange="preview_image_sec(event)">
                                            <input name="id" value="2" type="hidden"/>
                                            </div>
                                            <div class="mb-3 progress">
                                            <div  id="probar2" class="progress-bar progress-bar-animated bg-success progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:0%;" >
                                            </div>
                                            </div>
                                                <div class="position-relative mb-3">
                                                        <label for="exampleEmail11" class="form-label">Slider Heading</label>
                                                        <input name="heading" type="text" class="form-control" required="" value="{{$sl->s2head}}">
                                                </div>

                                                <div class="position-relative mb-3">
                                                                <label for="exampleEmail11" class="form-label">Sub Heading</label>
                                                                <input name="subheading"  type="text" class="form-control" required="" value="{{$sl->s2subhead}}">
                                                </div>
                                            <input name="upload" type="submit" class="btn btn-info" />
                                            </form>
                                        </div>

                                        <div class="col-md-4">
                                            <form method="post" id="formimg3" enctype="multipart/form-data" action="{{route('uploadslider')}}">

                                            @csrf
                                            <div class="form-group">

                                            <label>Image </label>

                                            <img class="img-fluid mb-2" id="s3"  src="{{url('public/storage/slider')}}/{{$sl->s3}}" style="

                                            height: 300px; width: 300px;">

                                            <input class="form-control" type="file" name="image" accept="image/*" onchange="preview_image_third(event)">
                                            <input name="id" value="3" type="hidden"/>
                                            </div>
                                            <div class="mb-3 progress">
                                            <div  id="probar3" class="progress-bar progress-bar-animated bg-success progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:0%;" >
                                            </div>
                                            </div>
                                            <div class="position-relative mb-3">
                                                        <label for="exampleEmail11" class="form-label">Slider Heading</label>
                                                        <input name="heading" type="text" class="form-control" required="" value="{{$sl->s3head}}">
                                            </div>

                                            <div class="position-relative mb-3">
                                                            <label for="exampleEmail11" class="form-label">Sub Heading</label>
                                                            <input name="subheading"  type="text" class="form-control" required="" value="{{$sl->s3subhead}}">
                                            </div>
                                            <input name="upload" type="submit" class="btn btn-info" />
                                            </form>
                                        </div>


                    

                                 </div>
                        </form>

                        
                        

                         </div>

                     </div>

                             </div>

                         </div>

                        

 </div>





    @endsection





@section('footer')

    <script type="text/javascript" src="{{url('public/admin/vendors/sweetalert2/dist/sweetalert2.min.js')}}"></script>

    <script type="text/javascript" src="{{url('public/admin/js/sweet-alerts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

    <script>

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            

        }

    });

    
    </script>

    

<script type="text/javascript">

  $(function () {
            $(document).ready(function () {
                $('#formimg1').ajaxForm({
                    beforeSend: function () {
                       var percentage = '0';
                        $('#probar1').css("width", percentage+'%');
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentage = percentComplete;
                         $('#probar1').css("width", percentage+'%');
                    },
                    complete: function (req) {
                        var txt= req.responseText;
                        var js=JSON.parse(txt);
                        alert("Image Uploaded Successfully");
                        
                    }
                });

                $('#formimg2').ajaxForm({
                    beforeSend: function () {
                       var percentage = '0';
                        $('#probar2').css("width", percentage+'%');
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentage = percentComplete;
                         $('#probar2').css("width", percentage+'%');
                    },
                    complete: function (req) {
                        var txt= req.responseText;
                        var js=JSON.parse(txt);
                        alert("Image Uploaded Successfully");
                       
                    }
                });
                
                $('#formimg3').ajaxForm({
                    beforeSend: function () {
                       var percentage = '0';
                        $('#probar3').css("width", percentage+'%');
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentage = percentComplete;
                         $('#probar3').css("width", percentage+'%');
                    },
                    complete: function (req) {
                        var txt= req.responseText;
                        var js=JSON.parse(txt);
                        alert("Image Uploaded Successfully");
                       
                    }
                });
            });
        });



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

function preview_image_sec(event) 

{

 var reader = new FileReader();

 reader.onload = function()

 {

  var output = document.getElementById('s2');

  output.src = reader.result;

 }

 reader.readAsDataURL(event.target.files[0]);

}



function preview_image_third(event) 

{

 var reader = new FileReader();

 reader.onload = function()

 {

  var output = document.getElementById('s3');

  output.src = reader.result;

 }

 reader.readAsDataURL(event.target.files[0]);

}





</script>

@endsection