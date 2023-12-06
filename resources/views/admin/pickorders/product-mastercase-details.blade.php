<form class="" id="formpick" method="post" action="{{route('pickorder')}}">
            @csrf
<div class="table-responsive">

    <div class="card">
        <div class="card-body">
            <h1>Unallocated Pallets</h1>
        
     <table class="table table-bordered mytb" > 
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
            @if ($pl->count() > 0)
                @foreach ($pl as $r)
                @if($r->stockPlacement->count() == 0 && !empty($r->receiveds->id))
                    <tr>
                        <td>{{ $r->created_at }}</td>
                        <td>{{ $r->mastercase->name }}<br>Available Quantity(s): <b>{{ $r->avl_qty }}</b></td>
                        <td class="mcp">
                            @foreach($r->mastercase->mastercaseproduct as $pr)
                              {{ $pr->product->name }} / 
                            @endforeach
                            
                        </td>
                        <td>{{ $r->wareHouse->warehouse }}</td>
                        <td>
                            <input type="hidden" name="id[]" value="{{ $r->id }}">
                            <input type="hidden" name="un_lb[]" value="{{ $r->palletno }}"/>
                            <input type="hidden" name="un_bid[]" value="{{ $r->id }}"/>
                            <b>{{ $r->palletno }}</b>
                        </td>
                        <td><input name="un_invoice[]" id="invoice" type="text" class="form-control pick-inv" /></td>
                        <td><input name="un_pq[]" id="t" type="number" min=1 max="{{ $r->avl_qty }}" class="form-control pick-qty" /></td>
                        <td class="product-quantity"></td>
                    </tr>
                    @endif
                @endforeach
            @else
                <tr>
                    <td colspan="8" style="text-align:center;" class="text-danger"><b>There is No Record Found!</b></td>
                </tr>
            @endif
        </tbody>
    </table>
    </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h1>Allocated Pallets</h1>
        

    <table class="table table-bordered mytb" >
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
            @if ($result->count() > 0)
                @foreach ($result->where('status' , 1) as $r)
                    <tr>
                        <td>{{ $r->arr_date }}</td>
                        <td>{{ getmastercase($r->mc_id) }}<br>Available Quantity(s): <b>{{ $r->avl_qty }}</b></td>
                        <td class="mcp">{!! implode(', ', get_mc_pro_wise($r->mc_id, $r->avl_qty)) !!}</td>
                        <td>{{ getwarehouse($r->warehouse) }}</td>
                        <td>
                            <input type="hidden" name="lb[]" value="{{ $r->labelid }}"/>
                            <input type="hidden" name="bid[]" value="{{ $r->id }}"/>
                            <b>{{ $r->labelid }}<br>{{ $r->name }}</b>
                        </td>
                        <td><input name="invoice[]" id="invoice" type="text" class="form-control pick-inv" /></td>
                        <td><input name="pq[]" id="t" type="number" min=1 max="{{ $r->avl_qty }}" class="form-control pick-qty" /></td>
                        <td class="product-quantity"></td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="8" style="text-align:center;" class="text-danger"><b>There is No Record Found!</b></td>
                </tr>
            @endif
        </tbody>
    </table>
    </div>
    </div>
</div>
 <input type="submit" id="create"  class="mt-2 btn btn-dark" value="Confirm Pick"/>
         </form>

<script type="text/javascript">
     $(".mytb tbody").on("keyup", ".pick-qty", function() {

        console.log('working');
           
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
</script>
