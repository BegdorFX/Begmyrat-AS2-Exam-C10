@extends('main.layout')

@section('title') Onemessage @endsection

@section('main_content')
    <div class="container-xl">
            <div class="row">
                <div class="col-6">
                    <div class="alert alert-danger text-dark">
                        <div>
                            <img src="img/product.jpg" alt="news picture" class="img-fluid">
                        </div>
                        <h4>{{ $data->category->name }}</h4>
                        <h4>{{ $data->name }}</h4>
                        <p>{{ $data->description }}</p>
                    </div>
                </div>
            </div>
    </div>
@endsection
