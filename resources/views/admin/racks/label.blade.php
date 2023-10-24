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

@foreach($bin as $b)

<br>
<table>
    
    <tr>
        <td colspan=2 style="text-align:center">
        <h3>Location: {{strtoupper($b->name)}}</h3>
        </td>
    </tr>
    <tr>
        <td colspan=2 style="text-align:center">
            <center class="bc">{!!barcode_gen($b->barcode)!!}</center>
          
           {{$b->barcode}} 
           
        </td>
    </tr>
    
    
</table>

@endforeach