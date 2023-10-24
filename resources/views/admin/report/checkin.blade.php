@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
 Check In  Report
@endsection

@section('content')
                    <form class="" id="formmain" method="post" action="{{route('gen_checkin')}}">
                    @csrf
                      
                            
                                <div class="col-sm-12 col-lg-12">
                                    <div class="card-hover-shadow-2x mb-3 card">
                                        <div class="card-header">
                                            <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                                
                                                Search Panel
                                            </div>
                                           
                                        </div>
                                        
                                        <div class="card-body">

                                                            <div class="row">
                                                              
                                                                    
                                                                    <div class="col-md-3">
                                                                        <div class="position-relative mb-3">
                                                                        <label for="exampleEmail11" class="form-label d-block">Warehouse</label>

                                                                            <select name="warehouse"  id="warehouse" class="form-control multiselect-dropdown" >
                                                                            <option value="">Select Warehouse</option>
                                                                                @foreach($wh as $m)
                                                                                <option value="{{$m->id}}">{{$m->warehouse}}</option>
                                                                                @endforeach
                                                                            
                                                                                
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="position-relative mb-3">
                                                                            <label for="exampleEmail11" class="form-label d-block">Mastercase</label>

                                                                            <select  name="mastercase"   id="mc" class="form-control multiselect-dropdown">
                                                                                <option value="">Select Mastercase</option>
                                                                                @foreach($mc as $m)
                                                                                <option value="{{$m->id}}">{{$m->name}} ({{$m->upc}})</option>
                                                                                @endforeach
                                                                                
                                                                            </select>
                                                                        </div>
                                                                     </div>

                                                                    <div class="col-md-3">
                                                                        <div class="position-relative mb-3">
                                                                            <label for="examplePassword11" class="form-label"> From Date</label>
                                                                            <input name="from_date"  id="from_date" type="date" class="form-control" >
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="position-relative mb-3">
                                                                            <label for="examplePassword11" class="form-label"> To Date</label>
                                                                            <input name="to_date"  id="to_date" type="date" class="form-control" >
                                                                        </div>
                                                                    </div>

                                                                    
                                                                    
                                                                    
                                                                    
                                                               
                                                            </div>
                                        </div>
                                       
                                        <div class="d-block text-end card-footer">
                                        <input type="reset" id="reset" name="submit" class="btn btn-danger">
                                        <input type="submit" name="submit" value="Generate Report" class="btn btn-success">
                                       <br>
                                        </div>
                                    </div>
                                </div>
                    </form>
                                <div class="col-sm-12 col-lg-12">
                                    <div class="card-hover-shadow-2x mb-3 card">
                                        <div class="card-header-tab card-header">
                                            <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                              
                                                Check In List 
                                            </div>
                                            
                                        </div>
                                        <div class="scroll-area-lg" >
                                            <div class="scrollbar-container ps ps--active-y">
                                                <div class="p-2">

                                                        

                                                         

                                                        <div class="row">
                                                                <div class="col-ms-12">
                                                                    <table id="protable" class="mb-0 table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                            <th>Warehouse</th>
                                                                            <th>Master Case</th>
                                                                            <th>Arrival Date</th>
                                                                            <th>Purchase Order No</th>
                                                                            <th>Container No</th>
                                                                            <th>MasterCase Quantity</th>
                                                                            <th>Ti*Hi</th>
                                                                            <th>Label Count</th>
                                                                            
                                                                            <th style="text-align:center;">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        
                                                                            
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                        </div>
                                                </div>
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 400px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 289px;"></div></div></div>
                                        </div>
                                        <div class="d-block text-end card-footer">
                                       
                                        </div>
                                    </div>
                                </div>
                            
                        
                   
@endsection

@section('footer')
    <script type="text/javascript" src="{{url('public/admin/vendors/@chenfengyuan/datepicker/dist/datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{url('public/admin/vendors/daterangepicker/daterangepicker.js')}}"></script>
    <script type="text/javascript" src="{{url('public/admin/js/form-components/datepicker.js')}}"></script>
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

           

            $('#formmain').ajaxForm({
              
                
              complete: function (req) {
                 if(req.status==200)
                 {
                      var json = JSON.parse(req.responseText);
                    
                      
                      $("#protable tbody").empty();
                      $("#protable tbody").append(json.rec);
                        
                     
                      if($.isEmptyObject(req.error)){
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

            $("#reset").on("click", function () {
            // Clear the table content (optional)
            $("#protable tbody").empty();
         
            

            
        });
          
 
            
          

        });
    </script>

@endsection