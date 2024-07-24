<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Turkmenportal</title>
</head>
<body style="font-size: 14px">
    <div class="container-xl">
        @include('app/navbar')
        <div class="rounded-4 overflow-hidden">
            <a href="{{ asset('img/product.jpg') }}" data-fancybox="gallery"
               data-caption="{{ $product->name }} #1">
                <img src="{{ asset('img/product.jpg') }}" alt="" class="img-fluid">
            </a>
        </div>
        <div class="d-flex flex-column position-relative mb-2" style="height:7rem;">
            @if($product->hasDiscount())
                <div class="h5 text-danger">
                    <i class="bi-fire"></i>
                    {{ number_format($product->price(), 2, '.', ' ') }}
                    <small>TMT</small>
                </div>
            @else
                <div class="h5 text-primary">
                    {{ number_format($product->price, 2, '.', ' ') }}
                    <small>TMT</small>
                </div>
            @endif
            <div>
                <a class="h6 link-dark text-decoration-none stretched-link"
                   href="{{ route('products.show', $product->id) }}">
                    {{ $product->name }}
                </a>
            </div>
            <div class="row g-2 g-sm-3 mt-auto">
                <div class="col-auto"><i class="bi-box-fill text-secondary"></i> {{ $product->stock }}</div>
                <div class="col-auto"><i class="bi-eye-fill text-secondary"></i> {{ $product->viewed }}</div>
            </div>
    </div>
</body>
</html>
