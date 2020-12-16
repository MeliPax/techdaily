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
                    {{-- <a href="/posts/create" class="btn btn-primary btn-right">Create Post</a>
                    <br><br> --}}
                    <h3>All registered users </h3>
                    @if (count($data['users'])>0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>Activate/Disactivate</th>
                            {{-- <th>Delete User</th> --}}
                        </tr>
                        @foreach ($data['users'] as $user)
                        <tr>
                            <td>{{$user->name}}<br><small>Posted on {{$user->created_at}} </small></td>
                            <td>
                                {{-- {!!Form::open(['action' => ['ManageAccountsController@updateUser_status', $user->id],
                                'method'=>'POST',
                                'class' =>
                                'pull-right'])!!} --}}
                                <label for="">Disactivate</label>
                                @if ($user->status =='0')
                                <input name="sex" type="radio" value="0" checked disabled> |
                                <input name="sex" type="radio" value="1">
                                @else
                                <input name="acc_status" type="radio" value="0"> |
                                <input name="acc_status" type="radio" value="1" checked disabled>
                                @endif
                                <label for="">Activate</label>
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