@extends('layouts.admin.app')



@section('header')



@endsection



@section('title')
                    <div class="page-title-icon">

                    <i class="pe-7s-notebook icon-gradient bg-primary"></i>

                    </div>

                    <div>

                    Documents

                    <div class="page-title-subheading"></div>

                    </div>

@endsection




@section('content')

    <div class="tabs-animation">
                         
                         
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                        <i class="header-icon lnr-file-add me-3 text-muted opacity-6"></i>
                                        Add New Document
                                    </div>
                                    
                                </div> 
                                <div class="card-body">
                                                <div style="display:none;" class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
                                                    
                                                    </button>
                                                    <ul>
                                                        
                                                    </ul>
                                                    
                                                </div>
                                                <form method="post" id="formimg" enctype="multipart/form-data" action="{{route('document.store')}}">

                                                        @csrf

                                                        <div>
                                                            <div class="mb-3 progress">
                                                                <div  id="probar" class="progress-bar progress-bar-animated bg-success progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:0%;" >
                                                                </div>
                                                            </div>

                                                            
                                                            <br>
                                                            
                                                            <div class="row">

                                                                    <div class="col-md-4">

                                                                        <div class="position-relative mb-3">

                                                                            <label for="exampleEmail11" class="form-label d-block">Certificate</label>

                                                                            <select name="certificate" id="certificate" class="form-control multiselect-dropdown" required>

                                                                                <option value="Matric">Matric</option>

                                                                                <option value="Intermediate">Intermediate</option>   

                                                                            </select>

                                                                        </div>

                                                                    </div>

                                                                    <div class="col-md-4">

                                                                        <div class="position-relative mb-3">

                                                                            <label for="examplePassword11" class="form-label">Exam</label>

                                                                            <select name="exam" id="exam" class="form-control multiselect-dropdown" required>

                                                                                <option value="Annual">Annual / 1st Annual</option>

                                                                                <option value="Supply">Supply / 2nd Annual</option>   

                                                                            </select>

                                                                        </div>

                                                                    </div>

                                                                    <div class="col-md-4">

                                                                        <div class="position-relative mb-3">

                                                                            <label for="examplePassword11" class="form-label">Year</label>

                                                                            <select name="year" id="year" class="form-control multiselect-dropdown" required>

                                                                                

                                                                            @for($i=date("Y"); $i>=1980;$i--)

                                                                            <option value="{{$i}}">{{$i}}</option>

                                                                            @endfor  

                                                                            </select>

                                                                        </div>

                                                                    </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-md-4">

                                                                    <div class="position-relative mb-3">

                                                                        <label for="exampleEmail11" class="form-label">Roll No</label>

                                                                        <input name="rollno" id="rollno" placeholder="" type="text" class="form-control" required>

                                                                    </div>

                                                                </div>

                                                                <div class="col-md-4">

                                                                    <div class="position-relative mb-3">

                                                                        <label for="examplePassword11" class="form-label">Name</label>

                                                                        <input name="name" id="name" placeholder="" type="text" class="form-control" required>

                                                                    </div>

                                                                </div>

                                                                <div class="col-md-4">

                                                                    <div class="position-relative mb-3">

                                                                        <label for="examplePassword11" class="form-label">Father Name</label>

                                                                        <input name="father_name" id="father_name" placeholder="" type="text" class="form-control" required>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="col-md-4">

                                                                    <div class="position-relative mb-3">

                                                                        <label for="exampleEmail11" class="form-label">Document</label>
                                                                        <img class="img-thumbnail mb-2" id="s1"  src="{{url('public/storage/slider')}}/" >

                                                                        <input name="document" type="file"  accept="image/*" onchange="preview_image_first(event)" required>

                                                                    </div>

                                                                </div>

                                                                <div class="col-md-4">

                                                                    <div class="position-relative mb-3">

                                                                        <label for="examplePassword11" class="form-label">Picture</label>
                                                                        <img class="img-thumbnail" id="s2"  src="{{url('public/storage/slider')}}/" >


                                                                        <input name="picture" type="file"  accept="image/*" onchange="preview_image_sec(event)" required>


                                                                    </div>

                                                                </div>

                                                                <div class="col-md-2">

                                                                    <div class="position-relative mb-3">

                                                                        <label for="examplePassword11" class="form-label"><br></label>

                                                                        <input type="submit"  class="form-control btn btn-success" value="Save" />

                                                                    </div>

                                                                </div>

                                                                <div class="col-md-2">

                                                                    <div class="position-relative mb-3">

                                                                        <label for="examplePassword11" class="form-label"><br></label>

                                                                        <input name="Employee_name" type="reset" value="Reset" class="form-control btn btn-danger">

                                                                    </div>

                                                                </div>

                                                            </div>
                                                            
                                                        </div>
                                                </form>
                                </div>
                            </div>
                           
    </div>

@endsection

@section('footer')
        <script type="text/javascript" src="{{url('public/admin/js/form-components/input-select.js')}}"></script>

        <script type="text/javascript" src="{{url('public/admin/vendors/select2/dist/js/select2.min.js')}}"></script>

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
                   if(req.status==200)
                   {
                        Swal.fire({ 
                        text: "Documet is Saved Successfully.",
                        title:"Saved",
                        type: "question",
                            }).then(okay => {
                                if (okay) {
                                    $("#formimg")[0].reset();
                                    document.getElementById('s1').src="";
                                    document.getElementById('s2').src="";
                                    $('#probar').css("width",'0%');
                                }
                            });
                    }
                    else{
                       $("#probar").removeClass("bg-success").addClass("bg-danger");
                        Swal.fire({ 
                        text: "There is something Wrong Please Cross Check",
                        title:"Error",
                        type: "question",
                            });
                    }
                    
                }
            });

          
        });
    });
</script>
@endsection