<div class="">
    <a href="{{ asset('img/product.jpg') }}" data-fancybox="gallery"
       data-caption="{{ $announcement->name }} ">
        <img src="{{ asset('img/product.jpg') }}" alt="" class="img-fluid">
    </a>
</div>
<div class="d-flex flex-column position-relative mb-2 alert alert-danger">
    <div>
        Name: {{ $announcement->name }}
    </div>
    <div class="row g-2 g-sm-3 mt-auto">
        <div class="col-auto">Viewed<i class="bi-eye-fill text-secondary"></i> {{ $announcement->viewed }}</div>
    </div>
</div>

