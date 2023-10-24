@extends('layouts.admin.app')

@section('header')

@endsection

@section('title')
 Receive Product
@endsection

@section('content')
                    
                        <div class="row">
                            <input name="rcid" type="hidden" value="{{$rc->id}}">
                                <div class="col-sm-12 col-lg-3">
                                    <div class="card-hover-shadow-2x mb-3 card">
                                        <div class="card-header-tab card-header">
                                            <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                                
                                                Receive Product information
                                            </div>
                                           
                                        </div>
                                        <div class="scroll-area-lg" style="height:600px;">
                                            <div class="scrollbar-container ps ps--active-y">
                                                
                                                
                                                <div class="p-2">
                                                    <ul class="todo-list-wrapper list-group list-group-flush">
                                                        
                                                        <li class="list-group-item">
                                                           
                                                            <div class="widget-content p-0">
                                                              
                                                                    
                                                                    <div class="col-md-12">
                                                                        <div class="position-relative mb-3">
                                                                        <label for="exampleEmail11" class="form-label d-block">Warehouse</label>

                                                                            <input class="form-control" value="{{getwarehouse($rc->warehouse)}}" readonly/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="position-relative mb-3">
                                                                            <label for="examplePassword11" class="form-label"> Arrival Date</label>
                                                                            <input name="arrival_date" value="{{$rc->arr_date}}" id="arrival_date" type="text" class="form-control" data-toggle="datepicker" readonly>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="position-relative mb-3">
                                                                            <label for="examplePassword11" class="form-label"> Purchase Order No</label>
                                                                            <input name="order_no" value="{{$rc->order_no}}" id="order_no" type="text" class="form-control" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="position-relative mb-3">
                                                                            <label for="examplePassword11" class="form-label"> Container No</label>
                                                                            <input name="container_no" value="{{$rc->container_no}}" id="container_no" type="text" class="form-control" readonly>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                               
                                                            </div>
                                                        </li>
                                                       
                                                      
                                                  
                                                       
                                                        
                                                    </ul>
                                                </div>
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 400px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 261px;"></div></div></div>
                                        </div>
                                        <div class="d-block text-end card-footer">
                                       
                                            </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-9">
                                    <div class="card-hover-shadow-2x mb-3 card">
                                        <div class="card-header-tab card-header">
                                            <div class="card-header-title font-size-lg text-capitalize fw-normal">
                                              
                                                MasterCase Details
                                            </div>
                                            
                                        </div>
                                        <div class="scroll-area-lg" style="height:600px;">
                                            <div class="scrollbar-container ps ps--active-y">
                                                <div class="p-2">

                                                        <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="position-relative mb-3">
                                                                        <label for="exampleEmail11" class="form-label d-block">Mastercase</label>

                                                                        <input class="form-control" value="{{getmaster($rc->mcid)}}" readonly/>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="position-relative mb-3">
                                                                    <label for="exampleEmail11" class="form-label d-block">MasterCase Quantity</label>
                                                                    <input name="quantity" value="{{$rc->mc_quantity}}"  id="mqty" placeholder="Enter Quantity" value="1"  type="number" min="1" max="100000" class="form-control" readonly>
                                                                    
                                                                    </div>
                                                                </div>

                                                                

                                                                

                                                                
                                                        </div>

                                                        <div class="row" id="mcd">
                                                             {!!getmastercasefull($rc->mcid)!!}
                                                        </div>

                                                        <div class="row">
                                                                <div class="col-ms-12">
                                                                    <table id="protable" class="mb-0 table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Product UPC</th>
                                                                                <th>Product Name</th>
                                                                                <th>Units</th>
                                                                                <th>Total Units</th>
                                                                                <th>FOB Cost Per Unit</th>
                                                                                <th>Retail Price Per Unit</th>
                                                                                <th>Arrival Date</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach($pr as $pd)
                                                                            @php 
                                                                            $pro=getproduct($pd->p_id);
                                                                            $q=getmcp_qty($rc->mcid,$pd->p_id);
                                                                            @endphp
                                                                        <tr>
                                                                            <th>{{$pro->upc}}</th>
                                                                            <td>{{$pro->name}}</td>
                                                                            <td>{{$q}}</td>
                                                                            <td><input name="tqty[]" class="form-control tqty" value="{{$q*$rc->mc_quantity}}" type="text" readonly /></td>
                                                                            <td><input type="hidden" name="pid[]" value="{{$pd->p_id}}" /><input name="fob[]" class="form-control fob" type="text" value="{{$pd->fob}}" readonly/></td>
                                                                            <td><input name="rp[]" class="form-control rp" type="text" value="{{$pd->retail_price}}" readonly/></td>
                                                                            <td><input name="ed[]" class="form-control ed" type="date" value="{{$pd->expiry}}" readonly/></td>
                                                                        </tr>
                                                                        @endforeach
                                                                            
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                        </div>
                                                </div>
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 400px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 289px;"></div></div></div>
                                        </div>
                                        <div class="card-footer">
                                           <br>
                                        </div>
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

            $("#mqty").on("keyup", function () {
                var mainQuantity = parseInt($(this).val());
                    $(".tqty").each(function () {
                    var quantity = parseInt($(this).closest("tr").find("td:nth-child(3)").text());
                    $(this).val(mainQuantity * quantity);
                    });
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

            $("#mc").on('change',function(){
                $("#protable tbody").empty();
                var mcid=$("#mc").val();
                var mqty=$("#mqty").val();
             

                $.ajax({
                    type: "post",
                    url: "{{route('getmc')}}",
                    data:{
                            '_token': "<?php echo csrf_token() ?>",
                            mcid:mcid,
                            mqty:mqty,
                                     
                        },
                    dataType: "json",
                    beforeSend:function()
                    {
                        
                    },
                    success: function (res) {

                       
                        $('#mcd').html(res.mc);
                        $('#protable tbody').append(res.rec);

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
            $("#mcd").html("-------------------------");

            
        });
          
 
            
          

        });
    </script>

@endsection