@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-5 flex items-center">
        <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-1/5 h-auto rounded-lg">
        <h1 class="text-6xl ml-8">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-7">
    <span class="text-gray-500">
        By <span class="font-bold italic text-custom-purple-2">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>

    <div class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {!! nl2br(e($post->content)) !!}
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <h2 class="text-2xl font-bold">Comments ({{ $post->comments_count }})</h2>

    @foreach ($post->comments as $comment)
        <div class="mt-4">
            <p class="text-gray-700"><strong>{{ $comment->user->name }}</strong> <span class="text-sm">{{ $comment->created_at->diffForHumans() }}</span></p>
            <p class="text-gray-700">{{ $comment->content }}</p>
           
            
            @auth
                <form action="{{ route('comments.like', $comment->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="text-custom-purple-2">
                    @if($comment->likes->contains('user_id', auth()->user()->id))
                            <p class=" text-sm">{{ $comment->likes_count }}     <i class="fas fa-heart"></i><p> <!-- Icône de cœur plein -->
                        @else
                            <p class=" text-sm">{{ $comment->likes_count }}     <i class="far fa-heart "></i></p> <!-- Icône de cœur vide -->
                        @endif
                    </button>
                </form>
            @endauth
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
                <button type="submit" class="bg-custom-purple-2 hover:bg-custom-purple-3 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Submit
                </button>
            </div>
        </form>
    @endauth
</div>
@endsection