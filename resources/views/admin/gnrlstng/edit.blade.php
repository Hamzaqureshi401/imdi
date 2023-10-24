@extends('layouts.admin.app')

@section('header')

@endsection
@section('title')
 Edit Category
@endsection

@section('content')

    <div class="tabs-animation">
                         
                         
                         <div class="card mb-3">
                             <div class="card-header-tab card-header">
                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                     <i class="header-icon lnr-user me-3 text-muted opacity-6"></i>
                                     Edit Category
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
                                                     <label for="exampleEmail11" class="form-label">Category</label>
                                                     <input name="category" id="category" placeholder="Enter Category" type="text" class="form-control" value="{{$cat->category}}" required>
                                                 </div>
                                             </div>
                                             
                                         </div>

                                       
                                         
                                         <button type="button" id="create"  class="mt-2 btn btn-primary">Update</button>
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
           
            $("#create").click(function(){

                var category=$("#category").val();
                
                
                $.ajax({
                    type: "put",
                    url: "{{route('category.update','2')}}",
                    data:{
                            '_token': "<?php echo csrf_token() ?>",
                            category: category,
                                    
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