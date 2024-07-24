@extends('main.layout')

@section('title') Create @endsection

@section('main_content')
    <div class="container-xl">
        <div class="h3">Creating A New Announcement</div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
     @endif

    <form action="post" action="/create/check">
        @csrf
        <div class="container-xl">
            <div>
                <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control border-2 border-black">
            </div>
            <div class="pt-4">
                <input type="text" name="subject" id="subject" placeholder="Enter announcement subject of announcement" class="form-control border-2 border-black">
            </div>
            <div class="pt-4">
                <textarea name="message" id="message" class="form-control border-2 border-black" placeholder="Enter your announcement"></textarea><br>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
@endsection
