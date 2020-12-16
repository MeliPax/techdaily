@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if ($data['status'] == '1' && $data['role'] == '1')
        @include('inc.leftNav_dash')
        @endif
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <a href="/posts/create" class="btn btn-primary btn-right">Create Post</a>
                    <br><br>
                    <h3>Your blog posts</h3>
                    @if (count($data['posts'])>0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($data['posts'] as $post)
                        <tr>
                            <td>{{$post->title}}<br><small>Posted on {{$post->created_at}} </small></td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                            <td>
                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'POST',
                                'class' =>
                                'pull-right'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete', ['class'=> 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <p>You have no post</p>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection