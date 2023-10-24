@extends('layouts.admin.app')



@section('header')



@endsection



@section('title')
 
        <div class="page-title-icon">

        <i class="pe-7s-albums icon-gradient bg-primary"></i>

        </div>

        <div>

        Create New Batch

        <div class="page-title-subheading"></div>

        </div>
@endsection

 

@section('content')

<div class="tabs-animation">

                         

                         

                         <div class="card mb-3">

                         <div class="card-header-tab card-header">
                                                <i class="header-icon pe-7s-copy-file me-3 text-muted opacity-6"></i>
                                                Document List
                                                <div class="btn-actions-pane-right">
                                                   
                                                <a id="createbatch"class="btn btn-dark">Create Batch</a>
                                                                                                           
                                                </div>
                                            </div>

                             <div class="card-body">
                                                <div class="alert alert-warning fade show" role="alert">
                                                    Select Document By Click and Create Batch
                                                </div>

                                 <table style="width: 100%;" id="batchtable" class="table table-bordered">

                                     <thead>

                                         <tr>
                                           
                                             <th>Sr #</th>

                                             <th>Certificate</th>

                                             <th>Exam / Year</th> 

                                             <th>Name / Father Name</th>

                                             <th style="text-align:center;">Attachment</th>

                                             <th style="text-align:center;">Action</th>

                                            

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
                                             <td style="text-align:center;">

                                                    <div role="group" class="btn-group-lg btn-group btn-group-toggle">



                                                        <form method="POST" action="{{ route('document.destroy', $u->id) }}">

                                                        @csrf

                                                        @method("DELETE")

                                                        <button type="submit" class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete">

                                                            <i class="lnr-trash icon-gradient bg-amy-crisp"></i>

                                                        </button>

                                                        </form>



                                                       

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
        else
            {
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

                    success: function (res) 
                    {



                        Swal.fire({ 

                        text: res.message,

                        title:res.status,

                        type: "question",

                            }).then(okay => {

                            if (okay) 
                            {

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

 });

</script>
@endsection