@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
Manage Roles & Permission 
@endsection

@section('content')

<div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     <i class="header-icon  me-3 text-muted opacity-6"></i>
                                     Edit Permissions
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
                                     <form method="post" action="{{route('role.update',$role->id)}}">
                                     @method('PUT')  
                                     @csrf
                                         

                                          <div class="row">
                                             <div class="col-md-6">
                                                 <div class="position-relative mb-3">
                                                     <label for="exampleEmail11" class="form-label">Role</label>
                                                     <input name="role" readonly value="{{$role->role}}"  placeholder="Enter Role" type="text" class="form-control" required>
                                                 </div>
                                             </div>
                                             
                                             <div class="col-md-2">
                                                 <div class="position-relative mb-3">
                                                     <label for="examplePassword11" class="form-label"> &nbsp;</label>
                                                     <input type="submit" value="Update Permissions"  class=" form-control btn btn-dark" >
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                            <table style="width: 100%;"  class="table table-hover table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Sr #</th>
                                                        <th>Permission</th>
                                                        
                                                        <th style="text-align:center;">Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($permissions as $p)
                                                    
                                                    <tr>
                                                        <td>{{$p['value']}}</td>
                                                        <td>{{$p['permission']}}</td>
                                                        
                                                        <td style="text-align:center;">
                                                        <input type="checkbox" value="{{$p['value']}}" name="pr[]" class="form-check-control" {{ $permission->contains('permission', $p['value']) ? 'checked' : '' }}/>
                                                        </td>
                                                        
                                                    </tr>
                                                    @endforeach

                                                    
                                                    
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                    
                                                        <th>Sr #</th>
                                                        <th>Role</th>
                                                        <th style="text-align:center;">Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                         </div>

                                       
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