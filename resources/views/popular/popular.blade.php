@extends('main.layout')

@section('title') Popular @endsection

@section('main_content')
    <div class="border-top py-4">
        <div class="h3 mb-3">Popular</div>
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-2 g-sm-3">
            @foreach($popular as $announcement)
                <div class="col">
                    @include('app.announcement')
                </div>
            @endforeach
        </div>
    </div>
@endsection



