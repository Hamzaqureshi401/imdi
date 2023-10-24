@extends('layouts.admin.app')



@section('header')



@endsection



@section('title')

        <div class="page-title-icon">

        <i class="pe-7s-albums icon-gradient bg-primary"></i>

        </div>

        <div>

        Document List In Batch

        <div class="page-title-subheading"></div>

        </div>
@endsection

 

@section('content')

<div class="tabs-animation">

                         

                         

                         <div class="card mb-3">

                         <div class="card-header-tab card-header">
                                                <i class="header-icon pe-7s-copy-file me-3 text-muted opacity-6"></i>
                                                Document List of Batch  
                                                <div class="btn-actions-pane-right">
                                                   
                                                
                                                                                                           
                                                </div>
                                            </div>

                             <div class="card-body">
                                               

                                 <table style="width: 100%;" id="batchtable" class="table table-bordered">

                                     <thead>

                                         <tr>
                                           
                                             <th>Sr #</th>

                                             <th>Certificate</th>

                                             <th>Exam / Year</th> 

                                             <th>Name / Father Name</th>
                                             <th style="text-align:center;">Attachments</th>

                                             

                                            

                                         </tr>

                                     </thead>

                                     <tbody>

                                        @php 

                                        $i=1;

                                        @endphp

                                        @foreach( $docs as $u )

                                         <tr >

                                             <td>{{$i}}<span class="val" hidden>{{$u->id}}</span></td>
                                             <td>{{$u->certificate}}</td>
                                             <td>{{$u->exam}} / {{$u->year}}</td>
                                             <td>{{$u->name}} / {{$u->father_name}}</td>
                                             <td style="text-align:center;">

                                                    <div role="group" class="btn-group-lg btn-group btn-group-toggle">



                                                        

                                                        <a href="{{url('public/storage/documents')}}/{{$u->document}}"  class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Document">

                                                            <i class="lnr-paperclip icon-gradient bg-primary"></i>

                                                        </a>
                                                        <a href="{{url('public/storage/pictures')}}/{{$u->img}}" class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Picture">

                                                            <i class="lnr-picture icon-gradient bg-info"></i>

                                                        </a>




                                                       

                                                    </div>

                                             </td>
 
                                             

                                         </tr>

                                         @php 

                                        $i++;

                                        @endphp

                                         @endforeach

                                     </tbody>

                                     

                                 </table>

                             </div>

                         </div>

                        

                     </div>



@endsection



@section('footer')
<script type="text/javascript" src="{{url('public/admin/vendors/sweetalert2/dist/sweetalert2.min.js')}}"></script>

<script type="text/javascript" src="{{url('public/admin/js/sweet-alerts.js')}}"></script>
<script>

$(document).ready(function(){
    var selectorIDs;

     $("#createbatch").click(function(){
        var count = $('#batchtable .selectedid').length;
        if(count<=0)
        {
            alert("Batch Cannot be created. You have not selected any document.")
        }
        else{
            selectedIDs = [];
                $('.selectedid').each(function() {
                selectedIDs.push($(this).text());
                });
               
                $.ajax({

                    type: "post",

                    url: "{{route('batch.store')}}",

                    data:{

                            '_token': "<?php echo csrf_token() ?>",

                            documents:selectedIDs,

                                     

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
                                else
                                {

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

                
               
                }
       });



     $("#create").click(function(){



         var code=$("#code").val();

         var ename=$("#ename").val();

         var pass=$("#pass").val();

         var conpass=$("#conpass").val();

         

         $.ajax({

             type: "post",

             url: "{{route('user.store')}}",

             data:{

                     '_token': "<?php echo csrf_token() ?>",

                     email:code,

                     name:ename,

                     pass:pass,

                     conpass:conpass,         

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