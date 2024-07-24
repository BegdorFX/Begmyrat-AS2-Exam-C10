@extends('main.layout')

@section('title') Turkmenportal @endsection

@section('main_content')
    <div class="container-xl">
        @foreach($data as $el)
            <div class="row">
                <div class="col-6">
                    <div class="alert alert-danger text-dark">
                        <h4>{{ $el->category->name }}</h4>
                        <h4>{{ $el->name }}</h4>
                        <p>{{ $el->description }}</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="alert alert-danger text-dark">
                        <h4>{{ $el->category->name }}</h4>
                        <h4>{{ $el->name }}</h4>
                        <p>{{ $el->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
