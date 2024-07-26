@extends('main.layout')

@section('title') Mainpage @endsection

@section('main_content')
    <div class="container-xl">
        @foreach($data as $el)
            <div class="row">
                <div class="col-6">
                    <div class="alert alert-danger text-dark">
                        <div>
                            <img src="img/product.jpg" alt="news picture" class="img-fluid">
                        </div>
                        <h4>{{ $el->category->name }}</h4>
                        <h4>{{ $el->name }}</h4>
                        <p>{{ $el->description }}</p>
                        <a href="{{ route('OneMessage', $el->id) }}"><button class="btn btn-warning">Properties</button></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
