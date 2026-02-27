@extends('app')

@section('content')
    <div>
        <h1 class="flex justify-center text-[35px]">Express your feelings!</h1>
        <div class="flex flex-wrap gap-4">
            @foreach($posts as $post)
                <a href="{{route('posts.show', $post)}}" class="w-[calc(25%-0.75rem)] h-70">
                    <li class=""><strong>{{$post->title}}</strong></li>
                    <li class="">Category: <strong>{{$post->category->name}}</strong></li>
                    <li class="!text-left">{{$post->text}}</li>
                </a>
            @endforeach
        </div>

        <div class="justify-center absolute bottom-1 right-1">
            <a
                href="{{route('posts.create')}}"
                class="flex justify-center w-fit"
            >
                Create new Post
            </a>
        </div>

    </div>

@endsection
