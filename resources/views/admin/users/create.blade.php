@extends('layouts.admin')

@section('content')
    <h1>Create Users</h1>
    <form method="POST" action="/users" enctype="multipart/form-data">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter password" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label>Role</label>
            <select class="form-control" name="role_id">
                @foreach($roles as $role)
                {{--<option value="1">Administrator</option>--}}
                {{--<option value="0">Subscriber</option>--}}
                    <option value='{{$role->id}}'>{{$role->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="is_active">
                <option value="1">Active</option>
                <option value="0">Not Active</option>
            </select>
        </div>
        <div class="form-group">
            <label>Upload File</label>
            <input type="file" class="form-control-file" name="photo_id">
        </div>
        <button type="submit" class="btn btn-primary">Create User</button>
        @csrf
        {{--{{csrf_field()}}--}}
    </form>

    @include('includes.form_error')

@stop