@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
 Received Products
@endsection

@section('content')
                                                
<form class="" id="formmain" method="post" action="{{route('savereceived')}}">
@csrf
    <div class="row">
                                                <div style="display:none;" class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
                                                    
                                                    </button>
                                                    <ul>
                                                        
                                                    </ul>
                                                    
                                                </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="mb-3 card">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                                    
                                                    Add Received Products
                                                </div>
                                            
                                            </div>
                                            
                                            <div class="pt-2 pb-0 card-body">
                                                <div class="row">
                                                    

                                                        <div class="col-md-12">
                                                            <div class="position-relative mb-3">
                                                            <label for="exampleEmail11" class="form-label d-block">Warehouse</label>

                                                                <select name="warehouse"  id="warehouse" class="form-control multiselect-dropdown" required>
                                                                <option value="">Select Warehouse</option>
                                                                    @foreach($wh as $m)
                                                                    <option value="{{$m->id}}">{{$m->warehouse}}</option>
                                                                    @endforeach
                                                                
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>

                                                        
                                                        <div class="col-md-12">
                                                            <div class="position-relative mb-3">
                                                            <label for="exampleEmail11" class="form-label d-block">No of Master Case in 1 Pallet</label>
                                                            <input name="pallet_quantity"  id="p" placeholder="Enter Mastercase Quantity for 1 Pallet" type="number" min="1" max="100000" class="form-control" >
                                                            
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="position-relative mb-3">
                                                                <label for="examplePassword11" class="form-label"> Arrival Date</label>
                                                                <input name="arrival_date" id="arrival_date" type="text" class="form-control" data-toggle="datepicker" >
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="position-relative mb-3">
                                                                <label for="examplePassword11" class="form-label"> Expiry Date</label>
                                                                <input name="expiry_date" id="expiry_date" type="text" class="form-control" data-toggle="datepicker" >
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="position-relative mb-3">
                                                                
                                                                <input type="submit" value="Save" class="form-control btn btn-dark">
                                                            </div>
                                                            
                                                        </div>

                                                        


                                                </div>
                                                
                                            
                                            </div>
                                        
                                        </div>
                                    </div> 

                                    <div class="col-lg-6 col-xl-8">
                                        <div class="mb-3 card">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                                    
                                                    MasterCase Details
                                                </div>
                                            
                                            </div>
                                            
                                            <div class="pt-2 pb-0 card-body">
                                                <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                                <label for="exampleEmail11" class="form-label d-block">Mastercase</label>

                                                                <select   id="mc" class="form-control multiselect-dropdown">
                                                                    <option value="">Select Mastercase</option>
                                                                    @foreach($mc as $m)
                                                                    <option value="{{$m->name}}+{{$m->upc}}+{{$m->id}}">{{$m->name}} ({{$m->upc}})</option>
                                                                    @endforeach
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="position-relative mb-3">
                                                            <label for="exampleEmail11" class="form-label d-block">Quantity</label>
                                                            <input  id="mqty" placeholder="Enter Quantity"  type="number" min="1" max="100000" class="form-control" >
                                                            
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                                <label for="exampleEmail11" class="form-label d-block">&nbsp;</label>

                                                                <input name="psave" id="psave" value="Add Mastercase" type="button" class="form-control btn btn-dark" >
                                                            
                                                        </div>
                                                </div>

                                                <div class="row">
                                                        <div class="col-ms-12">
                                                            <table id="protable" class="mb-0 table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Mastercase UPC</th>
                                                                        <th>Name</th>
                                                                        <th>Quantity</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                </div>
                                                <br>
                                                
                                            
                                            </div>
                                        
                                        </div>
                                    </div> 
    </div>
</form>

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
                    var newRowData = {
                    upc: 0,
                    name:"0",
                    qty:0,
                    id:0

                };
        

            function addTableRow(data) {
                var newRow = '<tr><th scope="row"><input type="hidden" name="mcid[]" value="'+ data.id +'"/>'+ data.upc + '</th><td>'+ data.name + '</td><td><input type="hidden" name="mcqty[]" value="'+ data.qty +'"/>'+ data.qty + '</td><td><button class="remove" >Remove</button></td></tr>';
                $('#protable tbody').append(newRow);
            }

            $("#protable tbody").on("click", ".remove", function() {
                $(this).closest("tr").remove();
            });

            $("#psave").click(function(){
                var mc=$("#mc").val();
                var mqty=$("#mqty").val();
                if(mqty=="")
                alert("quantity can not be empty");
                else
                {
                var myArray = mc.split('+');
                newRowData.upc=myArray[1];
                newRowData.name=myArray[0];
                newRowData.id=myArray[2];
                newRowData.qty=mqty;
                addTableRow(newRowData);
                }
                
            });
          
 
            
            $('#formmain').ajaxForm({
              
                
                complete: function (req) {
                   if(req.status==200)
                   {
                        var json = JSON.parse(req.responseText);
                        Swal.fire({ 
                        text: json.message,
                        title:json.status,
                        type: "question",
                        });
                       
                        if($.isEmptyObject(req.error)){
                            $(".print-error-msg").css('display','none');
                            $("#formmain")[0].reset();
                           
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

        });
    </script>

@endsection