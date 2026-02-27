@extends('app')

@section('title', 'Create Post')

@section('content')
    <h1>Create New Post</h1>
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <x-input.text
            label="Post Title"
            id="title"
            name="title"
        />
        <x-input.select
            label="Category"
            id="category_id"
            name="category_id"
            :options='$categories'
        />
        <x-input.text-area
            label="Text"
            id="text"
            name="text"
            placeholder="Type something about your post..."
        />
    <button type="submit">Submit</button>
    </form>
    <a href="{{route('posts.index')}}">Back</a>

@endsection
