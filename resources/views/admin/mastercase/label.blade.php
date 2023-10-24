<style>
    td{
        border:1px solid;
    }
    table{
        border:1px solid;
    }
    
</style>
<table>
    <tr>
        <td colspan=2>
        <h3>Mastercase: {{strtoupper($mc->name)}}</h3>
        </td>
    </tr>

    <tr>
        <td colspan=2 style="text-align:center">
            <center>{!!$barcode!!}</center>
          
           {{$mc->upc}}
           
        </td>
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
            ({{$m->qty}}) {{$pr->name}}
        </td>
    </tr>
    @endforeach

</table>