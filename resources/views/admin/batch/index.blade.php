@extends('layouts.admin.app')



@section('header')



@endsection



@section('title')
        <div class="page-title-icon">

        <i class="pe-7s-albums icon-gradient bg-primary"></i>

        </div>

        <div>

        Batches

        <div class="page-title-subheading"></div>

        </div>

@endsection



@section('content')

        <div class="tabs-animation">

                         

                         

                         <div class="card mb-3">

                             <div class="card-header-tab card-header">

                                 <div class="card-header-title font-size-lg text-capitalize fw-normal">

                                     <i class="header-icon lnr-list me-3 text-muted opacity-6"></i>

                                    {{$type}} 

                                 </div>

                                

                             </div>

                             <div class="card-body">
                             @if (\Session::has('message'))
                                            <div class="alert alert-success fade show" role="alert">
                                            {!! \Session::get('message') !!}
                                                </div>
                            @endif
                            @if (\Session::has('error'))
                                            <div class="alert alert-danger fade show" role="alert">
                                            {!! \Session::get('error') !!}
                                                </div>
                            @endif

                                                <div class="alert alert-warning fade show" role="alert">
                                                    @if(Request::is('batch/confirmed'))
                                                    <ul>
                                                        <li>Print Challan and Pay it in Any HBL Bank or With Konnect App.</li>
                                                        <li>Upload Picture of Challan.</li>
                                                        <li>Upload Pciture of Fowarding Letter</li>
                                                    </ul>
                                                    
                                                    @elseif(Request::is('batch/verified'))
                                                    <b>Note: </b>Online Verification Letter Can be Printed Here.
                                                    @else
                                                    <b>Note: </b>Once Batch is Confirmed it can not be unconfirmed.
                                                @endif
                                                </div>
                                 <table style="width: 100%;" id="confirmtable" class="table table-hover table-striped table-bordered">

                                     <thead>

                                         <tr>

                                             <th>Sr #</th>

                                             <th>Batch</th>

                                             <th>No of Documents</th>

                                             

                                             <th style="text-align:center;">Action</th>

                                            

                                         </tr>

                                     </thead>

                                     <tbody>

                                        @php 

                                        $i=1;

                                        @endphp

                                        @foreach( $batch as $u )

                                         <tr>

                                             <td>{{$i}}</td>

                                             <td><span class="batch">{{$u->batch}}</span><span class="batch_id" hidden>{{$u->id}}</span></td>

                                             <td>{{$u->no_doc}} </td>

                                            

                                             <td style="text-align:center;">

                                             <div class="btn-group btn-group-lg" role="group" aria-label="Basic radio toggle button group">
                                                <a href="{{route('batch.show', $u->id)}}">
                                                        <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View ">

                                                        <i class="fa fa-fw icon-gradient bg-info" aria-hidden="true" ></i>
                                                        </div> 
                                                    </a>
                                                @if($u->status==0)
                                                        <a href="{{route('confirmbatch', $u->id)}}">
                                                        <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Confirm">

                                                        <i class="fa fa-fw icon-gradient bg-success" aria-hidden="true" title=""></i>

                                                        </div>
                                                        </a>



                                                        <form method="POST" action="{{ route('batch.destroy', $u->id) }}">

                                                        @csrf

                                                        @method("DELETE")

                                                        <button type="submit" class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Cancel">

                                                        <i class="fa fa-fw icon-gradient bg-danger" aria-hidden="true" title=""></i>

                                                        </button>

                                                        </form>

                                                @else   
                                                        @php
                                                        $key=($u->challan_no*2);
                                                        $key=$key."ovs";
                                                        $key=crc32($key);
                                                        $t=0;
                                                        @endphp

                                                        @if($u->is_processed==0)

                                                        @if(Auth::user()->acc_type==0)
                                                        @php
                                                            $t=2;
                                                        @endphp
                                                        <a href="{{route('printbatch',$u->id)}}" >
                                                        <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Print Batch">

                                                        <i class="fa fa-fw icon-gradient bg-alternate" aria-hidden="true" ></i>
                                                        </div>
                                                        </a>
                                                        @endif


                                                        <a target="_blank" href="{{url('https://portal.bisemultan.edu.pk/forms/print_challan/'.$u->challan_no.'/'.$t)}}/{{$key}}">
                                                        <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Print Challan">

                                                        <i class="fa fa-fw icon-gradient bg-success" aria-hidden="true" title=""></i>

                                                        </div>
                                                        </a>
                                                        @endif
                                                        @if($u->challan_img==NULL)
                                                        <a class="up_challan_btn"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Upload Challan">

                                                        <i class="fa fa-fw" aria-hidden="true" title=""></i>

                                                        </div>
                                                        </a>
                                                        @endif
                                                        @if($u->letter_img==NULL)
                                                         @if(Auth::user()->acc_type==0)
                                                        <a class="up_letter_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Upload Forwarding Letter">

                                                        <i class="fa fa-fw icon-gradient bg-info" aria-hidden="true" title=""></i>

                                                        </div> 
                                                        </a>
                                                            @endif
                                                        @endif

                                                         @if($u->is_processed==1)
                                                       
                                                        <a href="{{route('printreport',$u->id)}}" >
                                                        <div class="font-icon-wrapper font-icon-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Print Verfication">

                                                        <i class="fa fa-fw icon-gradient bg-primary" aria-hidden="true" title="Copy to use file-text"></i>
                                                        </div>
                                                        </a>
                                                      
                                                        @endif
                                                @endif
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
<!-- Modal -->
<div class="modal fade" id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form method="post" id="formimg" enctype="multipart/form-data" action="{{route('upload-doc')}}">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload <span id="head_type"></span> for Batch = <strong><span id="batch_ret"></span></strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                

                    <div>
                        <div class="mb-3 progress">
                            <div  id="probar" class="progress-bar progress-bar-animated bg-success progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:0%;" >
                            </div>
                        </div>

                        
                        <br>
                        
                        

                        <div class="row">
                            <div class="col-md-4">
                            </div>

                            <div class="col-md-4">

                                <div class="position-relative mb-3">

                                    <label for="exampleEmail11" class="form-label">Upload File</label>
                                    <img class="img-thumbnail mb-2" id="s1"  src="{{url('public/storage/slider')}}/" >
                                    <input name="field" type="hidden" value="" id="field" />
                                    <input name="up_batch" type="hidden" value="" id="up_batch" />
                                    <input name="document" type="file"  accept="image/*" onchange="preview_image_first(event)" required>

                                </div>

                            </div>

                            <div class="col-md-4">
                            </div>

                            

                           

                        </div>
                        
                    </div>
              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-dark">Save changes</button>
            </div>
        </form>
        </div>
    </div>
</div>
    <script type="text/javascript" src="{{url('public/admin/vendors/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/admin/js/sweet-alerts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>


<script>
    var batch;
    var batch_id;
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
    
        $('.up_challan_btn').click(function() {
            batch = $(this).closest('tr').find('.batch').text();
            batch_id = $(this).closest('tr').find('.batch_id').text();
            $('#batch_ret').text(batch);
            $('#head_type').text('Paid Challan');
            $('#up_batch').val(batch_id); 
            $('#field').val('challan_img'); 

        });

        $('.up_letter_btn').click(function() {
            batch = $(this).closest('tr').find('.batch').text();
            batch_id = $(this).closest('tr').find('.batch_id').text();
            $('#batch_ret').text(batch);
            $('#head_type').text('Fowarding Letter');
            $('#up_batch').val(batch_id); 
            $('#field').val('letter_img'); 

        });
   
    

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
                                    location.reload(true);
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