@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-1/3 h-auto rounded-lg">
        <h1 class="text-6xl mt-8">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>

    <div class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {!! nl2br(e($post->content)) !!}
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <h2 class="text-2xl font-bold">Comments</h2>

    @foreach ($post->comments as $comment)
        <div class="mt-4">
            <p class="text-gray-700"><strong>{{ $comment->user->name }}</strong> said:</p>
            <p class="text-gray-700">{{ $comment->content }}</p>
            <p class="text-gray-500 text-sm">{{ $comment->created_at->diffForHumans() }}</p>
        </div>
    @endforeach

    @auth
        <form action="{{ route('posts.comment', $post->slug) }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-4">
                <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Add a comment:</label>
                <textarea name="content" id="content" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Submit
                </button>
            </div>
        </form>
    @endauth
</div>
@endsection