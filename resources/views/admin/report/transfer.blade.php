@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
Transfer Report 
@endsection

@section('content')

    <div class="tabs-animation">
                         
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif   
                 
                <form id="formmain" class="myform" method="post" action="{{route('report_gen_transfer')}}" >
                @csrf    
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                        <i class="header-icon  me-3 text-muted opacity-6"></i>
                                        Search Panel
                                    </div>
                                    
                                </div>
                                <div class="card-body">
                                                <div style="display:none;" class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
                                                    
                                                    </button>
                                                    <ul>
                                                        
                                                    </ul> 
                                                    
                                                </div>
                                       
                                            <div class="row">
                                                
                                                <div class="col-md-12">
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="exampleEmail11" class="form-label d-block">From Warehouse</label>

                                                                <select name="from_warehouse"  id="from_warehouse" class="form-control multiselect-dropdown" required>
                                                                <option value="">Select Warehouse</option>
                                                                <option value="All">All Warehouse</option>
                                                                    @foreach($wh as $w)
                                                                    <option value="{{$w->id}}">{{$w->warehouse}}</option>
                                                                    @endforeach
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="exampleEmail11" class="form-label d-block">To Warehouse</label>

                                                                <select name="to_warehouse"  id="to_warehouse" class="form-control multiselect-dropdown" required>
                                                                <option value="">Select Warehouse</option>
                                                                <option value="All">All Warehouse</option>
                                                                    @foreach($wh as $w)
                                                                    <option value="{{$w->id}}">{{$w->warehouse}}</option>
                                                                    @endforeach
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                                        <div class="position-relative mb-3">
                                                                            <label for="examplePassword11" class="form-label"> Pallet No</label>
                                                                            <input name="pallet_no"  id="palletno" type="text" class="form-control" >
                                                                        </div>
                                                        </div>
                                                      
                                                        
                                                    </div>

                                                    

                                                    <div class="row">
                                                      
                                                        <div class="col-md-4">
                                                                        <div class="position-relative mb-3">
                                                                            <label for="examplePassword11" class="form-label"> From Date</label>
                                                                            <input name="from_date"  id="from_date" type="date" class="form-control" >
                                                                        </div>
                                                        </div>
 
                                                        <div class="col-md-4">
                                                                        <div class="position-relative mb-3">
                                                                            <label for="examplePassword11" class="form-label"> To Date</label>
                                                                            <input name="to_date"  id="to_date" type="date" class="form-control" >
                                                                        </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                                         <div class="position-relative mb-3">
                                                                            <label for="examplePassword11" class="form-label"> Report Options</label>
                                                                            <div class="form-control">
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" name="report" checked type="radio" id="inlineCheckbox1" value="view">
                                                                                    <label class="form-check-label" for="inlineCheckbox1">View Report</label>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                            
                                                            
                                                        </div>


                                                       

                                                           
                                                    </div>

                                                    <div class="row">
                                                        

                                                       
                                                           
                                                    </div>
                                                
                                                </div>
                                               
                                                
                                            </div>

                                      
                                </div>
                                <div class="d-block text-end card-footer">
                                       
                                        
                                        <input type="submit" name="submit" value="Generate Report" class="btn btn-info">
                                       <br>
                                </div>
                            </div>
                </form>

                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                        <i class="header-icon  me-3 text-muted opacity-6"></i>
                                        Transfer Report
                                       
                                    </div>
                                    <div id="pan" class="btn-actions-pane-right">
                                    
                                       
                                   
                                    </div>
                                    
                                </div>
                                <div class="card-body">
                                                <div style="display:none;" class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
                                                    
                                                    </button>
                                                    <ul>
                                                        
                                                    </ul> 
                                                    
                                                </div>
                                       
                                            <div class="row">
                                                
                                               
                                                <div class="col-md-12">
                                                    
                                                    <div class="row">
                                                    <table id="stocktable" class="mb-0 table table-bordered">
                                                            <thead>
                                                                
                                                            </thead>
                                                            <tbody>
                                                                    
                                                                
                                                                
                                                            </tbody>
                                                            
                                                        </table>

                                                    </div>

                                                </div>
                                                 
                                            </div>

                                           

                                          
                                            
                                          
                                </div>
                            </div>
                           

@endsection

@section('footer')


    <script type="text/javascript" src="{{url('public/admin/js/form-components/input-select.js')}}"></script>
    <script type="text/javascript" src="{{url('public/admin/vendors/select2/dist/js/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/admin/vendors/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/admin/js/sweet-alerts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script>
       $(document).ready(function(){
            $("#from_date").on('change',function(){
                var ad=$('#from_date').val();
                
                $("#to_date").attr("min", ad);
            });
            $('input[name="report"]').change(function () {
                var v=$(this).val();
                var myForm = $(".myform");
                myForm.removeAttr("action").unbind("submit");
               

                if(v=="view")
                {
                    myForm.removeAttr("id");
                    myForm.removeAttr("action");
                    myForm.attr("id", "formmain");
                    myForm.attr("action", "{{ route('gen_transfer') }}");
                    $('#formmain').ajaxForm({
              
                
              complete: function (req) {
                 if(req.status==200)
                  {
                      var json = JSON.parse(req.responseText);
                      
                      
                      $("#stocktable tbody").empty();
                      $('#stocktable tbody').append(json.tbody);
                      $("#stocktable thead").empty();
                      $('#stocktable thead').append(json.thead);
                      
                    
                      if($.isEmptyObject(json.error)){
                          $(".print-error-msg").css('display','none');
                          $("#formmain").reset();
                      }
                      else{
                        
                          $(".print-error-msg").find("ul").html('');
                          $(".print-error-msg").css('display','block');
                          $.each( json.error, function( key, value ) {
                              $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                          });
                      }
                  }
                  else
                  {
                    
                      Swal.fire({ 
                      text: "There is something Wrong Please Cross Check",
                      title:"Error",
                      type: "question",
                          });
                  }
                  
              }
          });
                   
                }
              
            });

           
        
            
            $('#formmain').ajaxForm({
              
                
                complete: function (req) {
                   if(req.status==200)
                    {
                        var json = JSON.parse(req.responseText);
                        
                        $('#pan').html(json.pan);
                        $("#stocktable tbody").empty();
                        $('#stocktable tbody').append(json.tbody);
                        $("#stocktable thead").empty();
                        $('#stocktable thead').append(json.thead);
                        
                      
                        if($.isEmptyObject(json.error)){
                            $(".print-error-msg").css('display','none');
                            $("#formmain").reset();
                        }
                        else{
                          
                            $(".print-error-msg").find("ul").html('');
                            $(".print-error-msg").css('display','block');
                            $.each( json.error, function( key, value ) {
                                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                            });
                        }
                    }
                    else
                    {
                      
                        Swal.fire({ 
                        text: "There is something Wrong Please Cross Check",
                        title:"Error",
                        type: "question",
                            });
                    }
                    
                }
            });
            

        });

        
    </script>
@endsection