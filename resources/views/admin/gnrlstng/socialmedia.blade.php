@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
 Manage Social Media
@endsection

@section('content')

    <div class="tabs-animation">
                         
                         
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                        <i class="header-icon lnr-cog me-3 text-muted opacity-6"></i>
                                        Manage Social Media Links 
                                    </div>
                                    
                                </div>
                                <div class="card-body">
                                                <div style="display:none;" class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
                                                    
                                                    </button>
                                                    <ul>
                                                        
                                                    </ul>
                                                    
                                                </div>
                                        <form class="" id="form" method="post" action="#">
                                       
                                                <div>
                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <span class=""><b>Facebook</b></span>
                                                        </div>
                                                        <input value="{{$sm->facebook}}" id="facebook" type="text" class="form-control">
                                                    </div>
                                                    <br>

                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <span class=""><b>Twitter</b></span>
                                                        </div>
                                                        <input value="{{$sm->twitter}}" id="twitter" type="text" class="form-control">
                                                    </div>
                                                    <br>

                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <span class=""><b>Instagram</b></span>
                                                        </div>
                                                        <input value="{{$sm->instagram}}" id="instagram" type="text" class="form-control">
                                                    </div>
                                                    <br>

                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <span class=""><b>Youtube</b></span>
                                                        </div>
                                                        <input value="{{$sm->youtube}}" id="youtube" type="text" class="form-control">
                                                    </div>
                                                    <br>

                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <span class=""><b>Gmail</b></span>
                                                        </div>
                                                        <input value="{{$sm->gmail}}" id="gmail" type="text" class="form-control">
                                                    </div>
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-text">
                                                            <span class=""><b>Official Email</b></span>
                                                        </div>
                                                        <input value="{{$sm->official}}" id="official" type="text" class="form-control">
                                                    </div>
                                                    <br>

                                                
                                                </div>
                                            
                                            <button type="button" id="create"  class="mt-2 btn btn-primary">Save</button>
                                        </form>
                                </div>
                            </div>
                           
    </div>

@endsection

@section('footer')
    <script type="text/javascript" src="{{url('public/admin/vendors/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/admin/js/sweet-alerts.js')}}"></script>
    <script>
       $(document).ready(function(){
            $("#generate").click(function(){
               var p= Math.random().toString(36).substring(2, 10);
               $("#pass").val(p);
               $("#conpass").val(p);
                Swal.fire({
                    text: "Password is Generated Successfully!",
                    title: "Alert",
                    type: "question",
                });
                
            });

            $("#create").click(function(){

                var f=$("#facebook").val();
                var t=$("#twitter").val();
                var i=$("#instagram").val();
                var y=$("#youtube").val();
                var g=$("#gmail").val();
                var o=$("#official").val();
                
                $.ajax({
                    type: "post",
                    url: "{{route('updatesocialmedia')}}",
                    data:{
                            '_token': "<?php echo csrf_token() ?>",
                            facebook:f,
                            twitter:t,
                            instagram:i,
                            youtube:y,
                            gmail:g,
                            official:o,
                                   
                        },
                    dataType: "json",
                    beforeSend:function()
                    {
                        $('#create').prop('disabled', true);
                    },
                    success: function (res) {

                        Swal.fire({ 
                        text: res.message,
                        title:res.status,
                        type: "question",
                            });

                        if($.isEmptyObject(res.error)){
                            $(".print-error-msg").css('display','none');
                           
                        }
                        else{
                            $(".print-error-msg").find("ul").html('');
                            $(".print-error-msg").css('display','block');
                            $.each( res.error, function( key, value ) {
                                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                            });
                        }
                        $('#create').prop('disabled', false);
                       
                    }
                });

            });

        });
    </script>
@endsection