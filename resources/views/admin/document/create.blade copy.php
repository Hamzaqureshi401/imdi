@extends('layouts.admin.app')



@section('header')



@endsection



@section('title')

Add Documents for Verification

@endsection



@section('content')



    <div class="tabs-animation">

                         

                         

                            <div class="card mb-3">

                                <div class="card-header-tab card-header">

                                    <div class="card-header-title font-size-lg text-capitalize fw-normal">

                                        <i class="header-icon lnr-file-add me-3 text-muted opacity-6"></i>

                                        Document Information

                                    </div>

                                    

                                </div>

                                <div class="card-body">

                                                <div style="display:none;" class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">

                                                    

                                                    </button>

                                                    <ul>

                                                        

                                                    </ul>

                                                    

                                                </div>

                                        <form class="" id="form" method="post" action="#">

                                       

                                            <div class="row">

                                                <div class="col-md-4">

                                                    <div class="position-relative mb-3">

                                                        <label for="exampleEmail11" class="form-label d-block">Certificate</label>

                                                        <select name="sector" id="certificate" class="form-control multiselect-dropdown" required>

                                                            <option value="Matric">Matric</option>

                                                            <option value="Intermediate">Intermediate</option>   

                                                        </select>

                                                    </div>

                                                </div>

                                                <div class="col-md-4">

                                                    <div class="position-relative mb-3">

                                                        <label for="examplePassword11" class="form-label">Exam</label>

                                                        <select name="sector" id="exam" class="form-control multiselect-dropdown" required>

                                                            <option value="Annual">Annual / 1st Annual</option>

                                                            <option value="Supply">Supply / 2nd Annual</option>   

                                                        </select>

                                                    </div>

                                                </div>

                                                <div class="col-md-4">

                                                    <div class="position-relative mb-3">

                                                        <label for="examplePassword11" class="form-label">Year</label>

                                                        <select name="sector" id="year" class="form-control multiselect-dropdown" required>

                                                            

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

                                                        <input name="Employee_code" id="rollno" placeholder="" type="text" class="form-control" required>

                                                    </div>

                                                </div>

                                                <div class="col-md-4">

                                                    <div class="position-relative mb-3">

                                                        <label for="examplePassword11" class="form-label">Name</label>

                                                        <input name="Employee_name" id="name" placeholder="" type="text" class="form-control" required>

                                                    </div>

                                                </div>

                                                <div class="col-md-4">

                                                    <div class="position-relative mb-3">

                                                        <label for="examplePassword11" class="form-label">Father Name</label>

                                                        <input name="Employee_name" id="father_name" placeholder="" type="text" class="form-control" required>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-md-4">

                                                    <div class="position-relative mb-3">

                                                        <label for="exampleEmail11" class="form-label">Document</label>

                                                        <input name="Employee_code" id="document" placeholder="" type="file" class="form-control" required>

                                                    </div>

                                                </div>

                                                <div class="col-md-4">

                                                    <div class="position-relative mb-3">

                                                        <label for="examplePassword11" class="form-label">Picture</label>

                                                        <input name="Employee_name" id="picture" placeholder="" type="file" class="form-control" required>

                                                    </div>

                                                </div>

                                                <div class="col-md-2">

                                                    <div class="position-relative mb-3">

                                                        <label for="examplePassword11" class="form-label"><br></label>

                                                        <button  id="create"  type="button"  class="form-control btn btn-dark" >Save</button>

                                                    </div>

                                                </div>

                                                <div class="col-md-2">

                                                    <div class="position-relative mb-3">

                                                        <label for="examplePassword11" class="form-label"><br></label>

                                                        <input name="Employee_name" id="ename"  type="reset" value="Reset" class="form-control btn btn-dark" required>

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

    <script>

       $(document).ready(function(){

           



            $("#create").click(function(){



                var certificate=$("#certificate").val();

                var exam=$("#exam").val();

                var year=$("#year").val();

                var rollno=$("#rollno").val();

                var name=$("#name").val();

                var father_name=$("#father_name").val();

                

              

                

                $.ajax({

                    type: "post",

                    url: "{{route('document.store')}}",

                    data:{

                            '_token': "<?php echo csrf_token() ?>",

                            certificate:certificate,

                            exam:exam,

                            year:year,

                            rollno:rollno,

                            name:name,

                            father_name:father_name,         

                        },

                    dataType: "json",

                    beforeSend:function()

                    {

                        

                    },

                    success: function (res) {



                         Swal.fire({ 

                        text: res.message,

                        title:res.status,

                        type: "question",

                            }).then(okay => {

                            if (okay) {

                                if($.isEmptyObject(res.error))

                                {

                                    $(".print-error-msg").css('display','none');

                                    $(".print-error-msg").css('display','none');

                            $("#form")[0].reset();

                                }

                                else{

                                    $(".print-error-msg").find("ul").html('');

                                    $(".print-error-msg").css('display','block');

                                    $.each( res.error, function( key, value ) {

                                        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');

                                    });

                                }

                            }

                        });

                       

                    }

                });



            });



        });

    </script>

@endsection