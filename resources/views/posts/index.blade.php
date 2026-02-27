@extends('app')

@section('content')
    <div>
        <h1 class="flex justify-center text-">Express your feelings!</h1>
        <div class="flex flex-wrap">
            @foreach($posts as $post)
                <ul class="w-[calc(25%-0.75rem)]">
                    <li>{{$post->title}}</li>
                    <li>{{$post->category->name}}</li>
                    <li>{{$post->text}}</li>
                </ul>
            @endforeach
        </div>

        <div class="justify-center flex">
            <a
                href="{{route('posts.create')}}"
                class="flex justify-center w-fit"
            >
                Create new Post
            </a>
        </div>

    </div>

@endsection
