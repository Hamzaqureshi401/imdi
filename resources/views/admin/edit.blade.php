@extends('layouts.admin.app')

@section('header')

@endsection
@section('title')
 Edit User
@endsection

@section('content')
<div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     <i class="header-icon lnr-user me-3 text-muted opacity-6"></i>
                                     Edit User
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
                                                     <label for="exampleEmail11" class="form-label">Email / Username</label>
                                                     <input value="{{$user->email}}" name="Email" id="email" placeholder="Enter Email / username" type="text" class="form-control" required>
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="position-relative mb-3">
                                                     <label for="examplePassword11" class="form-label"> Full Name</label>
                                                     <input name="Employee_name" value="{{$user->name}}" id="ename" placeholder="Enter Full Name" type="text" class="form-control" required>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="row">
                                             <div class="col-md-6">
                                                 <div class="position-relative mb-3">
                                                     <label for="exampleEmail11" class="form-label">Contact No</label>
                                                     <input name="contact" value="{{$user->contact}}" id="contact" placeholder="Enter Contact No" type="text" class="form-control" required>
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="position-relative mb-3">
                                                     <label for="examplePassword11" class="form-label"> Address</label>
                                                     <input name="address" value="{{$user->address}}" id="address" placeholder="Enter Address" type="text" class="form-control" required>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="row">
                                             <div class="col-md-6">
                                                 <div class="position-relative mb-3">
                                                     <label for="exampleEmail11" class="form-label">Password</label>
                                                     <div class="input-group">
                                                         <input  name="Password" id="pass" type="text" class="form-control" required>
                                                         <a id="generate"  class="btn btn-secondary">Generate</a>
                                                      </div>
                                                 </div>
                                             </div>
                                             <div class="col-md-6">
                                                 <div class="position-relative mb-3">
                                                     <label for="exampleEmail11" class="form-label">Confirm Password</label>
                                                     <div class="input-group">
                                                         <input name="Confirm_password" id="conpass" type="text" class="form-control" required>
                                                         
                                                      </div>
                                                 </div>
                                             </div>
                                              <div class="col-md-12">
    <div class="position-relative mb-3">
        <label for="role" class="form-label">Role</label>
        <div class="input-group">
            <select name="role" id="role" class="form-select" required>
                <option value="">Select Role</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}" @if ($user->role == $role['id']) selected @endif>
                        {{ $role['role'] }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>

                                         </div>
                                         
                                         <button type="button" id="create"  class="mt-2 btn btn-dark">Update</button>
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

                var email=$("#email").val();
                var ename=$("#ename").val();
                var address=$("#address").val();
                var contact=$("#contact").val();
                var pass=$("#pass").val();
                var conpass=$("#conpass").val();
                var role = $('#role').val();
                console.log(role);
                
                $.ajax({
                    type: "put",
                    url: "{{route('user.update',$user->id)}}",
                    data:{
                            '_token': "<?php echo csrf_token() ?>",
                            email:email,
                            name:ename,
                            address:address,
                            contact:contact,
                            password:pass,
                            confirm_password:conpass,
                            role:role,         
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