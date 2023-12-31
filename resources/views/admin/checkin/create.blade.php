@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
Register New Product
@endsection

@section('content')

    <div class="tabs-animation">
                         
                         
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                        <i class="header-icon  me-3 text-muted opacity-6"></i>
                                        Add Product
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
                                                <div class="col-md-6">
                                                    <div class="position-relative mb-3">
                                                        <label for="exampleEmail11" class="form-label">Product UPC</label>
                                                        <input name="upc" id="upc" placeholder="Enter Product UPC" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="position-relative mb-3">
                                                        <label for="examplePassword11" class="form-label"> Product Name</label>
                                                        <input name="pname" id="pname" placeholder="Enter Product Name" type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="position-relative mb-3">
                                                        <label for="exampleEmail11" class="form-label">Description</label>
                                                        <textarea name="desc" id="desc"class="form-control" required></textarea>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                             <div class="row">
                                                <div class="col-md-4">
                                                    <div class="position-relative mb-3">
                                                        <label for="exampleEmail11" class="form-label">Product Keywords</label>
                                                        <input name="keywords" id="keywords" placeholder="Enter Product Keywords (Seprate Kewords with Comma ,)" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative mb-3">
                                                        <label for="examplePassword11" class="form-label"> Product Start Date</label>
                                                        <input id="start_date" type="text" class="form-control" data-toggle="datepicker" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative mb-3">
                                                        <label for="examplePassword11" class="form-label"> Product End Date</label>
                                                        <input id="end_date" type="text" class="form-control" data-toggle="datepicker" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                          
                                            
                                            <button type="button" id="create"  class="mt-2 btn btn-dark">Save</button>
                                        </form>
                                </div>
                            </div>
                           
    </div>

@endsection

@section('footer')
    <script type="text/javascript" src="{{url('public/admin/vendors/@chenfengyuan/datepicker/dist/datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/admin/vendors/daterangepicker/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{url('public/admin/js/form-components/datepicker.js')}}"></script>
    <script type="text/javascript" src="{{url('public/admin/vendors/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/admin/js/sweet-alerts.js')}}"></script>
    <script>
       $(document).ready(function(){
          
 
            $("#create").click(function(){

                var upc=$("#upc").val();
                var pname=$("#pname").val();
                var desc=$("#desc").val();
                var keywords=$("#keywords").val();
                var start_date=$("#start_date").val();
                var end_date=$("#end_date").val();
               
                
                $.ajax({
                    type: "post",
                    url: "{{route('product.store')}}",
                    data:{
                            '_token': "<?php echo csrf_token() ?>",
                            upc:upc,
                            product_name:pname,
                            description:desc,
                            keywords:keywords,
                            start_date:start_date,
                            end_date:end_date,         
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
                            });
 
                        if($.isEmptyObject(res.error)){
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

            });

        });
    </script>
@endsection