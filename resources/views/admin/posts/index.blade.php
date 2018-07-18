@extends('layouts.admin')

@section('content')

    {{--@if(Session::has('deleted_user'))--}}
        {{--<p class="bg-danger">{{session('deleted_user')}}</p>--}}
    {{--@endif--}}
    {{--@if(Session::has('created_user'))--}}
        {{--<p class="bg-primary">{{session('created_user')}}</p>--}}
    {{--@endif--}}
    {{--@if(Session::has('updated_user'))--}}
        {{--<p class="bg-primary">{{session('updated_user')}}</p>--}}
    {{--@endif--}}

    <h1>Posts</h1>
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Category ID</th>
            <th>Photo ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category ? $post->category->name : 'Uncatogorized'}}</td>
                    <td><img height="50" src="{{$post->photo ? $post->photo->file : ''}}" alt=""></td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    @stop