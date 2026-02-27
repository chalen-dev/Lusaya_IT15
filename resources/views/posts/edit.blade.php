@extends('app')

@section('title', 'Edit Post')

@section('content')
    <form method="POST" action="{{route('posts.update', $post)}}">
        @csrf
        @method('PUT')
        <x-input.text
            label="Post Title"
            id="title"
            name="title"
            value="{{$post->title}}"
        />
        <x-input.select
            label="Category"
            id="category_id"
            name="category_id"
            value="{{$post->category_id}}"
            :options='$categories'
        />
        <x-input.text-area
            label="Text"
            id="text"
            name="text"
            value="{{$post->text}}"
            placeholder="Type something about your post..."
        />
        <button type="submit">Confirm</button>
    </form>
    <a href="{{route('posts.show', $post)}}">Back</a>

@endsection
