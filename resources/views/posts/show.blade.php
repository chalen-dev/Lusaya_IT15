@extends('app')

@section('title', 'Post Details')

@section('content')
    <div class="flex flex-col justify-center items-center">
        <ul class="w-[calc(25%-0.75rem)] h-70">
            <li><strong>{{$post->title}}</strong></li>
            <li>Category: <strong>{{$post->category->name}}</strong></li>
            <li>{{$post->text}}</li>
        </ul>
    </div>
    <a href="{{route('posts.edit', $post)}}">Edit Post</a>
    <x-buttons.delete
        action='posts.destroy'
        :params='$post'
        label="Delete Post"
        item_name="Post"
    />
    <a href="{{route('posts.index')}}">Back</a>

@endsection
