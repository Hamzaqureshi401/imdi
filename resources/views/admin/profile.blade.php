@extends('layouts.admin.app')

@section('header')

@endsection


@section('title')
<div class="page-title-icon">

<i class="pe-7s-user icon-gradient bg-primary"></i>

</div>

<div>


Profile

<div class="page-title-subheading"></div>

</div>
@endsection

@section('content')


                                        <div class="main-card mb-3 card">
                                            <div class="card-header-tab card-header">
                                                <i class="header-icon lnr-user me-3 text-muted opacity-6"></i>
                                                Profile
                                                <div class="btn-actions-pane-right">
                                                    <div role="group" class="btn-group-sm nav btn-group">
                                                        @if(Auth::user()->acc_type==0)
                                                        <a data-bs-toggle="tab" href="#tab-eg1-0" class="btn-shadow btn btn-dark active">Orgnization</a>
                                                        @else
                                                        <a data-bs-toggle="tab" href="#tab-eg1-1" class="btn-shadow btn btn-dark active">Individual</a>
                                                       @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane {{ Auth::user()->acc_type==0 ? 'active' : ''}}" id="tab-eg1-0" role="tabpanel">
                                                            <div style="display:none;" class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
                                                            
                                                            </button>
                                                            <ul>
                                                                
                                                            </ul>
                                                            
                                                            </div>
                                                            <form class="" id="form" method="post" action="#">
                                                        
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="position-relative mb-3">
                                                                            <label for="exampleEmail11" class="form-label">Orgnization Name</label>
                                                                            <input readonly="" name="orgnization_name" id="orgnization_name" placeholder="Orgnization Name" value="{{Auth::user()->orgnization_name}}" type="text" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="position-relative mb-3">
                                                                            <label for="examplePassword11" class="form-label">Sector</label>
                                                                            <select name="sector" id="sector" class="form-control multiselect-dropdown" value="{{Auth::user()->type}}" required>

                                                                                <option value="Public">Public</option>

                                                                                <option value="Private">Private</option>

                                                                                <option value="Semi-Government">Semi-Government</option>

                                                                                <option value="Autonomus">Autonomus</option>

                                                                                <option value="Pak Army">Pak Army</option>

                                                                                <option value="Police Department">Police Department</option>

                                                                                

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="position-relative mb-3">
                                                                            <label for="exampleEmail11" class="form-label">Officer Name</label>
                                                                            <input name="orgnization_head" id="orgnization_head" placeholder="" type="text" value="{{Auth::user()->officer_name}}" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                    <div class="position-relative mb-3">
                                                                            <label for="exampleEmail11" class="form-label">Designation </label>
                                                                            <input name="designation" id="designation" value="{{Auth::user()->designation}}" placeholder="" type="text" class="form-control" required>
                                                                        </div>
                                                                    
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                    <div class="position-relative mb-3">
                                                                            <label for="examplePassword11" class="form-label">Office Address</label>
                                                                            <input name="office_address" id="office_address" value="{{Auth::user()->address}}" placeholder="" type="text" class="form-control" required>
                                                                        </div>
                                                                    
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="position-relative mb-3">
                                                                            <label for="examplePassword11" class="form-label">Office Contact</label>
                                                                            <input name="office_contact" id="office_contact" class="form-control input-mask-trigger" data-inputmask="'mask': '999-99999999'" value="{{Auth::user()->office_contact}}" value="" im-insert="true" inputmode="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                    <div class="position-relative mb-3">
                                                                            <label for="exampleEmail11" class="form-label">Email</label>
                                                                            <input name="email" id="email" placeholder="" value="{{Auth::user()->email}}" readonly type="email" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="position-relative mb-3">
                                                                            <label for="examplePassword11" class="form-label">Personal Contact</label>
                                                                            <input value="{{Auth::user()->contact}}" name="personal_contact" id="personal_contact" class="form-control input-mask-trigger" data-inputmask="'mask': '9999-9999999'" value="" im-insert="true" inputmode="text">
                                                                            <input id="id" value="{{Auth::user()->id}}" type="hidden"/>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            

                                                            
                                                                
                                                                <button type="button" id="create"  class="mt-2 btn btn-dark">Update</button>
                                                            </form>
                                                    </div>
                                                    <div class="tab-pane {{ Auth::user()->acc_type==1 ? 'active' : ''}}" id="tab-eg1-1" role="tabpanel">
                                                        <div style="display:none;" class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
                                                            
                                                            </button>
                                                            <ul>
                                                                
                                                            </ul>
                                                            
                                                            </div>
                                                            <form class="" id="form_ind" method="post" action="#">
                                                        
                                                                
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="position-relative mb-3">
                                                                            <label for="exampleEmail11" class="form-label">Name</label>
                                                                            <input name="orgnization_head" id="name" placeholder="" value="{{Auth::user()->officer_name}}" type="text" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="position-relative mb-3">
                                                                            <label for="examplePassword11" class="form-label">Mobile</label>
                                                                            <input name="personal_contact" value="{{Auth::user()->contact}}" id="mobile" class="form-control input-mask-trigger" data-inputmask="'mask': '9999-9999999'" value="" im-insert="true" inputmode="text">
                                                                            <input id="uid" value="{{Auth::user()->id}}" type="hidden"/>
                                                                        </div>
                                                                    
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                    <div class="position-relative mb-3">
                                                                            <label for="examplePassword11" class="form-label">Address</label>
                                                                            <input name="office_address" id="address" value="{{Auth::user()->address}}" placeholder="" type="text" class="form-control" required>
                                                                        </div>
                                                                    
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                    <div class="position-relative mb-3">
                                                                            <label for="exampleEmail11" class="form-label">Email</label>
                                                                            <input name="email" id="email" placeholder="" value="{{Auth::user()->email}}" readonly type="email" class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>

                                                            

                                                            
                                                                
                                                                <button type="button" id="create_ind"  class="mt-2 btn btn-dark">Update</button>
                                                            </form>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>




@endsection

@section('footer')
<script type="text/javascript" src="{{url('public/admin/js/count-up.js')}}" ></script>
        <script type="text/javascript" src="{{url('public/admin/js/form-components/input-mask.js')}}"></script>
        <script type="text/javascript" src="{{url('public/admin/vendors/inputmask/dist/jquery.inputmask.min.js')}}"></script>

        <script type="text/javascript" src="{{url('public/admin/js/form-components/input-select.js')}}"></script>
        <script type="text/javascript" src="{{url('public/admin/vendors/select2/dist/js/select2.min.js')}}"></script>

        <script type="text/javascript" src="{{url('public/admin/vendors/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/admin/js/sweet-alerts.js')}}"></script>
    <script>
       $(document).ready(function(){
          

            $("#create").click(function(){
                var id=$("#id").val();
                var org_name=$("#orgnization_name").val();
                var sector=$("#sector").val();
                var org_head=$("#orgnization_head").val();
                var ofc_adrs=$("#office_address").val();
                var ofc_con=$("#office_contact").val();
                var desig=$("#designation").val();
                var per_con=$("#personal_contact").val();
                
              /*  Swal.fire({ 
                        text: ""+id+"-"+org_name+"-"+sector+"-"+org_head+"-"+ofc_adrs+"-"+ofc_con+"-"+desig+"-"+per_con,
                        title:"Status",
                        type: "question",
                            });
                
                            */
                            
                $.ajax({
                    type: "post",
                    url: "{{route('updateaccount')}}",
                    data:{
                            '_token': "<?php echo csrf_token() ?>",
                            id:id,
                            orgnization:org_name,
                            sector:sector,
                            officer_name:org_head,
                            address:ofc_adrs,
                            office_contact:ofc_con,
                            designation:desig,
                            personal_contact:per_con,           
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
                                    location.reload(true);
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

            $("#create_ind").click(function(){
                var id=$("#uid").val();
                var org_name="NA";
                var sector="NA";
                var org_head=$("#name").val();
                var ofc_adrs=$("#address").val();
                var ofc_con="NA";
                var desig="NA";
                var per_con=$("#mobile").val();
                
              
                            
                $.ajax({
                    type: "post", 
                    url: "{{route('updateaccountind')}}",
                    data:{
                            '_token': "<?php echo csrf_token() ?>",
                            id:id,
                            orgnization:org_name,
                            sector:sector,
                            name:org_head,
                            address:ofc_adrs,
                            office_contact:ofc_con,
                            designation:desig,
                            mobile:per_con,           
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
                                    location.reload(true);
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