<style>
    td{
        border:1px solid;
    }
    table{
        border:1px solid;
    }
    @media print {
    .bc {
      display: block; /* or inline-block depending on your layout */
    }
  }
    
</style>
@php

$t=count($label);
$i=1;
@endphp
@foreach($label as $l)
@php
$a=$l->mc_qty;
@endphp
<br>
<table>
    
    <tr>
        <td colspan=2 style="text-align:center">
        <h3>Mastercase: {{strtoupper($mc->name)}}</h3>
        </td>
    </tr>
    <tr>
        <td colspan=2 style="text-align:center">
            <center class="bc">{!!barcode_gen($l->palletno)!!}</center>
          
           {{$l->palletno}} <br><b>( Pallet # {{$i}}/{{$t}} )</b>
           
        </td>
    </tr>
    <tr>
            <td>
                <b>Container No</b>
            </td>
            <td style="text-align:center">
                <b>P.O No</b>
            </td>
            
    </tr>
    <tr>
            <td style="text-align:center">
                {{$rc->container_no}}
            </td>
            <td style="text-align:center">
            {{$rc->order_no}}
            </td>
    </tr>
    <tr>
            <td>
                <b>Arrival Date</b>
            </td>
            <td style="text-align:center">
                <b>No of MasterCases</b>
            </td>
            
    </tr>
    <tr>
            <td style="text-align:center">
            {{$rc->arr_date}}
            </td>
            <td style="text-align:center">
            <b>
                
                
                {{$a}}
            </b>
            </td>
    </tr>
    

    
    <tr>
            <td>
                <b>Product UPC</b>
            </td>
            <td style="text-align:center">
                <b>Product</b>
            </td>
    </tr>
    </tr>
    @foreach($mcp as $m)
    @php
    $pr=getproduct($m->pid);
    @endphp
    <tr>
        <td>
            {{$pr->upc}}
        </td>
        <td style="text-align:center">
            ({{$m->qty}}X{{$a}}={{$m->qty*$a}}) {{$pr->name}}
        </td>
    </tr>
    @endforeach

</table>
@php
$i++;
@endphp
@endforeach