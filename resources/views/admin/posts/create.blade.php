@extends('layouts.admin')

@section('content')
    <h1>Create Post</h1>
    <form method="POST" action="/posts" enctype="multipart/form-data">
        <div class="form-group">
            <label>Title:</label>
            <input type="text" class="form-control" name="title" placeholder="Enter Title" required>
        </div>
        <div class="form-group">
            <label>Category:</label>
            <select class="form-control" name="category_id">
                {{--<option value="1">PHP</option>--}}
                @foreach($categories as $category)
                    <option value='{{$category->id}}'>{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Description:</label>
            <textarea class="form-control" name="body" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label>Photo:</label>
            <input type="file" class="form-control-file" name="photo_id">
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
        @csrf
        {{--{{csrf_field()}}--}}
    </form>

    @include('includes.form_error')

@stop