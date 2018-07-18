@extends('layouts.admin')

@section('content')
    <h1>Edit Users</h1>

    <div class="col-sm-3">
        <img src="{{$user->photo->file}}" alt="img-responsive img-rounded">
    </div>

    <div class="col-sm-8">
        <form method="POST" action="/users/{{$user->id}}" enctype="multipart/form-data">
            @method('PUT')
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{$user->name}}" required>
            </div>
            {{--<div class="form-group">--}}
                {{--<label>Password</label>--}}
                {{--<input type="password" class="form-control" name="password" placeholder="Enter password" required>--}}
            {{--</div>--}}
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="{{$user->email}}" required>
            </div>
            <div class="form-group">
                <label>Role</label>
                <select class="form-control" name="role_id">
                    @foreach($roles as $role)
                        @if($role->name === $user->role->name)
                            <option value='{{$role->id}}' selected>{{$role->name}}</option>
                        @else
                            <option value='{{$role->id}}'>{{$role->name}}</option>
                        @endif
                        {{--<option value="1">Administrator</option>--}}
                        {{--<option value="0">Subscriber</option>--}}
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="is_active">
                    @if($user->is_active == '1')
                        <option value="1" selected>Active</option>
                        <option value="0">Not Active</option>
                    @else
                        <option value="1">Active</option>
                        <option value="0" selected>Not Active</option>
                    @endif
                </select>
            </div>
            <div class="form-group">
                <label>Upload File</label>
                <input type="file" class="form-control-file" name="photo_id">
            </div>
            <button type="submit" class="btn btn-primary">Edit User</button>
                {{--{{csrf_field()}}--}}
            @csrf
        </form>
        <br>
            {{--Delete Form--}}
        <form method="POST" action="/users/{{$user->id}}">
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete User</button>
            @csrf
        </form>
    </div>

    @include('includes.form_error')

@stop