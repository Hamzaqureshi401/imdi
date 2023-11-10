@extends('layouts.admin.app')
@section('header')
@endsection
@section('title')
Register New Pick Order
@endsection
@section('content')
<div class="tabs-animation">
   @if(session('message'))
   <div class="alert alert-success">
      {{ session('message') }}
   </div>
   @endif       
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon  me-3 text-muted opacity-6"></i>
            Pick Orders
         </div>
      </div>
      <div class="card-body">
         <div style="display:none;" class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
            </button>
            <ul>
            </ul>
         </div>
         <form class="" id="form_import"  method="post" action="{{route('pick_import')}}" enctype="multipart/form-data">
            @csrf
            <div  class="alert alert-warning alert-dismissible fade show print-error-msg" role="alert">
               </button>
               <ul>
                  <li>Please Use Only Excel file </li>
                  <li>Download <b><a href="{{url('public/pickorder_template.xls')}}">Template</a></b> From here and use that for further proceed</li>
               </ul>
            </div>
            <div class="row">
               <div class="col-md-8">
                  <div class="position-relative mb-3">
                     <label for="exampleEmail11" class="form-label">Pleas Select Excel File To Import Products</label>
                     <input name="file" id="excel_file"  type="file"class="form-control" required>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="position-relative mb-3">
                     <label for="examplePassword11" class="form-label"> &nbsp</label>
                     <input name="submit" type="submit" Value="Import" class="form-control btn btn-dark" required>
                  </div>
               </div>
            </div>
         </form>
         <form class="" id="formmain" method="post" action="{{route('pick.store')}}">
            @csrf
            <div class="row">
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="position-relative mb-3">
                           <label for="exampleEmail11" class="form-label d-block">Warehouse</label>
                           <select name="warehouse"  id="warehouse" class="form-control multiselect-dropdown" required>
                              <option value="">Select Warehouse</option>
                              <option selected value="All">All Warehouse</option>
                              @foreach($wh as $w)
                              <option value="{{$w->id}}">{{$w->warehouse}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="position-relative mb-3">
                           <label for="exampleEmail11" class="form-label d-block">Product</label>
                           <select  id="pro" class="form-control multiselect-dropdown">
                              <option value="">Select Product</option>
                              @foreach($product as $p)
                              <option value="{{$p->name}}+{{$p->upc}}+{{$p->id}}">{{$p->name}} ({{$p->upc}})</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="position-relative mb-3">
                           <label for="exampleEmail11" class="form-label d-block">Unit(s)</label>
                           <input  id="pqty" placeholder="Enter Quantity" type="number" min=1 class="form-control" >
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="position-relative mb-3">
                           <label class="form-label d-block">Invoice no.</label>
                           <input  id="inv-no" placeholder="Enter Invoice No." type="number" min=1 class="form-control" >
                        </div>
                     </div>
                     <div class="col-md-2">
                        <label for="exampleEmail11" class="form-label d-block">&nbsp;</label>
                        <input name="psave" id="psave" value="Add Product" type="button" class="form-control btn btn-dark" >
                     </div>
                  </div>
                  <br>
                  <div class="col-ms-12">
                     <table id="protable" class="mb-0 table table-bordered">
                        <thead>
                           <tr>
                              <th>Product UPC</th>
                              <th>Product</th>
                              <th>Unit(s)</th>
                              <th>Invoice No.</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                        </tfoot>
                     </table>
                  </div>
               </div>
            </div>
            <input type="submit" id="create"  class="mt-2 btn btn-dark" value="Search"/>
         </form>
      </div>
   </div>
   <div class="card mb-3">
      <div class="card-header-tab card-header">
         <div class="card-header-title font-size-lg text-capitalize fw-normal">
            <i class="header-icon  me-3 text-muted opacity-6"></i>
            Available Master Case Details  
         </div>
      </div>
      <div class="card-body">
         <div style="display:none;" class="alert alert-danger alert-dismissible fade show print-error-msg" role="alert">
            </button>
            <ul>
            </ul>
         </div>
         <form class="" id="formpick" method="post" action="{{route('pickorder')}}">
            @csrf
            <div class="row">
               <div class="col-md-12">
                  <div class="row">
                     <table id="stocktable" class="mb-0 table table-bordered">
                        <thead>
                           <tr>
                              <th>Arrival Date</th>
                              <th>Master Case</th>
                              <th>Products(s)</th>
                              <th>Warehouse</th>
                              <th>Label No & Bin Location </th>
                              <th>Invoice No</th>
                              <th>Pick Master Case</th>
                              <th>Pick Products (s)</th>
                           </tr>
                        </thead>
                        <tbody>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <input type="submit" id="create"  class="mt-2 btn btn-dark" value="Confirm Pick"/>
         </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.4/xlsx.full.min.js"></script>
<script>
   $(document).ready(function(){
                var newRowData = {
                upc: 0,
                name:"0",
                qty:0,
                id:0
   
            };
        $("#protable tbody").on("click", ".remove", function() {
            $(this).closest("tr").remove();
            var rq = $(this).closest("tr").find('td').eq(1).text();
            var tq=$('#total_qty').text();
            tq=parseInt(tq)-parseInt(rq);
            $('#total_qty').text(tq);
        });
   
        $("#stocktable tbody").on("click", ".remove", function() {
            $(this).closest("tr").remove();
            
           
        });
   
        $("#stocktable tbody").on("keyup", ".pick-qty", function() {
           
            var index = $(this).closest("tr").index();
            var productData = $(this).closest("tr").find(".mcp").html();
          
            var pq =  $(this).closest("tr").find(".pick-qty").val();
            productData=productData.replace(/<b>.*?<\/b>/g, "");
            var md = productData.replace(/\[(\d+)\]/g, function(match, value) {
                
            return '<span class="text-danger"><b>(' + value * pq + ')</b></span>';
        });
            $(this).closest("tr").find(".product-quantity").html(md);
           
           
            
           // $row.find('.product-quantity').html(productsText);
           
          
            
           
        });
    
   
        function addTableRow(data) {

            console.log('123' , data);
            var newRow = '<tr id="'+data.upc+'">\
            <th scope="row"><input type="hidden" name="pid[]" value="'+ data.id +'"/>'+ data.upc + '</th>\
            <td>'+ data.name + '</td>\
            <td><input type="hidden" name="pqty[]" value="'+ data.qty +'"/>'+ data.qty + '</td>\
            <td><input type="hidden" name="pqty[]" value="'+ data.inv_no +'"/>'+ data.inv_no + '</td>\
            <td><a class="remove btn btn-dark" >Remove</a></td></tr>';
            $('#protable tbody').append(newRow);
             
        }
        $("#psave").click(function(){
            var pro=$("#pro").val();
            var pqty=$("#pqty").val();
            var inv_no=$("#inv-no").val();

            if(pqty==""|| pqty<=0)
            alert("quantity can not be empty or less than 1");
            else
            { 
            var myArray = pro.split('+');
            newRowData.upc=myArray[1];
            newRowData.name=myArray[0];
            newRowData.id=myArray[2];
            newRowData.qty=pqty;
            newRowData.inv_no=inv_no;
            var targetRow = $("#protable tbody").find("tr#"+myArray[1]);
            if(targetRow.length==0)
            {
            addTableRow(newRowData);
            var tq=$('#total_qty').text();
            tq=parseInt(tq)+parseInt(pqty);
            $('#total_qty').text(tq);
            }
            else{
                var prev=targetRow.find("td").eq(1).text();
                var newval=parseInt(prev)+parseInt(pqty);
                targetRow.find("td").eq(1).html('<td><input type="hidden" name="pqty[]" value="'+ newval +'"/>'+ newval + '</td>');
                var tq=$('#total_qty').text();
                tq=parseInt(tq)+parseInt(pqty);
                $('#total_qty').text(tq); 
            }
            $("#pqty").val("");
              
   
            }
            
        });
   
        $("#pqty").on("keypress", function(event) {
            if (event.keyCode === 13) { // Check if the Enter key is pressed (key code 13)
                event.preventDefault();
                $("#psave").click(); // Prevent the form from submitting
            }
        });
      
   
        
        $('#formmain').ajaxForm({
            beforeSubmit: function(arr, $form, options) {
                // Show a confirmation dialog
                var isConfirmed = confirm("Are you sure you want to submit this form?");
   
                // If the user confirms, continue with the form submission
                return isConfirmed;
            },
          
            
            complete: function (req) {
               if(req.status==200)
                {
                    var json = JSON.parse(req.responseText);
                    
                    
                    $("#stocktable tbody").empty();
                    $('#stocktable tbody').append(json.output);
                    
                  
                    if($.isEmptyObject(json.error)){
                        $(".print-error-msg").css('display','none');
                        $("#formmain")[0].reset();
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
   
        $("#form_import").submit(function (e) {

            console.log('hamza');
            e.preventDefault(); // Prevent the default form submission behavior
   
            var fileInput = $("#excel_file")[0]; // Get the file input DOM element
            var file = fileInput.files[0];
            var so,s=0;
            if (file) {
                var reader = new FileReader();
   
                reader.onload = function (e) {
                    var data = new Uint8Array(e.target.result);
                    var workbook = XLSX.read(data, { type: "array" });
                    var sheetName = workbook.SheetNames[0];
                    var sheet = workbook.Sheets[sheetName];
                    var jsonData = XLSX.utils.sheet_to_json(sheet, { header: 1 });
   
                    // Create your custom table based on jsonData
                    var customTableHTML = "<table>";
                    customTableHTML += "<thead><tr>";
   
                    // Assuming the first row contains headers
                    for (var i = 0; i < jsonData[0].length; i++) {
                        customTableHTML += "<th>" + jsonData[0][i] + "</th>";
                    }
   
                    customTableHTML += "</tr></thead><tbody>";
                    customTableHTML="";
   
                    // Start from the second row for data
                    for (var j = 1; j < jsonData.length; j++) {
                        
                        if (jsonData[j].length>0)
                         {
                           
   
                           
                                $("#pro option").each(function() {
                                        var optionValue = $(this).val();
                                        if (optionValue.includes(jsonData[j][0])) {
                                            so = optionValue.split('+');
                                            s=1;
                                        return false; // Exit the loop when a match is found
                                        }
                                    });
                                console.log(jsonData);
                               if(s==1)
                               {
                                    customTableHTML += '<tr id="'+ jsonData[j][0] +'">';
                                    customTableHTML += '<th><input type="hidden" name="pid[]" value="'+so[2]+'">' + jsonData[j][0] + '</th>';
                                    customTableHTML += "<td>" + so[0] + "</td>";
                                    customTableHTML += '<td><input type="hidden" name="pqty[]" value="'+jsonData[j][2]+'">' + jsonData[j][2] + '</td>';

                                    customTableHTML += '<td><input type="hidden" name="inv_no[]" value="'+jsonData[j][3]+'">' + jsonData[j][3] + '</td>';


                                    customTableHTML += '<td><a class="remove btn btn-dark">Remove</a></td>';
                                    customTableHTML += "</tr>";
                                    s=0;
                               }
                                   
                               
                                   
                               
                        
                          
                         }
                        
                    }
   
                    
   
                    // Display the custom table in the container
                    $("#protable tbody").empty();
                    $("#protable tbody").append(customTableHTML);
                };
   
                reader.readAsArrayBuffer(file);
            }
   
        });
        
   
    });
   
    
</script>
@endsection