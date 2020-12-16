@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <p>Welcome to our services page</p>

    @if(count($Services) > 0)
        @foreach ($Services as $service)
            <ul class="list-group">
                <li class="list-group-item">{{$service}}</li>
            </ul>
        @endforeach
    @endif
@endsection
