@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
    <h1>Welcome to TechDaily online</h1>
    <p>Making learning and sharing easy for the Tech community</p>

    <br><br>
    <h3>START TODAY AND NOW!</h3>
    <br>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>
<div style="text-align:center;">
    <h1>Checkout featured blogs</h1>
    <br>
    {{-- <div class="form-group row">
        <label for="search_blog_input"
            class="col-md-4 col-form-label text-md-right">{{ __('Search a topic or key word') }}</label>

    <div class="col-md-6">
        <input id="search_blog_input" type="text" class="form-control @error('search_blog_input') is-invalid @enderror"
            name="search_blog_input" required>

        @error('search_blog_input')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div> --}}
<br><br>
</div>
<div>


    @if(count($posts)>0)
    @foreach ($posts as $post)
    <div class="well">
        <div class="row">
            <div class="col-md-6 col-sm-4">
                <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
            </div>
            <div class="col-md-8 col-sm-8">
                <h3> <a href="/posts/{{$post->id}}"> {{$post->title}}</a></h3>
                <small>Posted on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        </div>
    </div>
    @endforeach

    {{$posts->links()}}
    @else
    <p>No Posts yet :) </p>
    @endif
</div>
@endsection