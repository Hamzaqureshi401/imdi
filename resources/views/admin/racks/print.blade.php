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
        .row {
            border: 1px solid;
        }
        .brd-top {
            width: 50%;
            border-top: 1px solid;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        @php
        $counter = 0;
        @endphp
        @foreach($data['label'] as $l)
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="barcode-container d-inline-block">
                    {!! DNS1D::getBarcodeHTML($l->barcode, 'PHARMA', 3, 60) !!}
                </div>
                <div class="text-center"><strong style="font-size: 40px">{{ $l->barcode }}</strong></div>
                <div class="brd-top"></div> <!-- Centered border -->
                <div class="text-center"><strong style="font-size: 40px">{{ $l->name }}</strong></div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
         @php
        $counter = $counter + 1;
        @endphp
        @if($counter == $data['print_range'])
        <div style="page-break-before:always;"> </div>
         @php
        $counter = 0;
        @endphp
        @endif
        <br>
        @endforeach
    </div>
</body>
</html>
