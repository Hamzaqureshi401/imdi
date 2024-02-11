<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 7 PDF Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        .barcode-container {
            max-width: 100%;
            margin: 0 auto;
        }
        
       
        .brd{
             border: 1px solid;
        }
    </style>
</head>
<body>
    <div class="container">
       
        <div class="row">
            <div class="col-12 text-center brd mt-3">
    <div class="barcode-container d-inline-block">
        <br>
        {!! DNS1D::getBarcodeHTML($data['label'], 'PHARMA', 2, 60) !!}
    </div>
    <div class="text-center"><strong style="font-size: 40px">{{ $data['label'] }}</strong></div>
</div>

<div class="col-12 brd text-center">

    <div class="barcode-container d-inline-block">
        <strong style="font-size: 40px">Master Case: {{ $data['master_case'] }}</strong>
    </div>

 <table class="table table-bordered">
        <tr>
            <td><strong style="font-size: 20px">UPC</strong></td>
            <td><strong style="font-size: 20px">Product</strong></td>
        </tr>
        @foreach($data['upcName'] as $d )
        <tr>
            <td style="word-wrap: break-word; max-width: 200px;">{{ $d[0] }}</td>
            <td style="word-wrap: break-word; max-width: 200px;">{{ $d[1] }}</td>
        </tr>
        @endforeach
    </table>
    
</div>





        </div>
        
    </div>
</body>
</html>
