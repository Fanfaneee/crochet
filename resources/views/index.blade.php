@extends('layouts.app')

@section('content')
    
<section>
    <div class="bg-custom-purple py-24 clip-ellipse">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="text-center md:text-left">
                <h1 class="text-custom-purple-2 text-center font-custom text-4xl font-bold text-white mb-4">Welcome to</h1>
                <h2 class="text-custom-dark-blue  text-center font-custom text-5xl font-bold text-white">Fanie's Crochet</h2>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <img src="{{ asset('images/img1.jpg') }}" alt="Image 1" class="w-40 h-32 rounded-lg ml-auto" >
                <img src="{{ asset('images/img2.jpg') }}" alt="Image 2" class="w-full h-32 rounded-lg mt-auto">
                <img src="{{ asset('images/img3.jpg') }}" alt="Image 3" class="w-40 h-32 rounded-lg">
                <img src="{{ asset('images/img4.jpg') }}" alt="Image 4" class="w-32 h-32 ml-auto rounded-lg">
                <img src="{{ asset('images/img5.jpg') }}" alt="Image 5" class="w-full h-32 rounded-lg">
                <img src="{{ asset('images/img6.jpg') }}" alt="Image 6" class="w-full h-32 rounded-lg">
            </div>
        </div>
    </div>
</section>

<div class="w-4/5 m-auto text-center">
    <div class="py-16">
        <h1 class="text-4xl font-semibold text-custom-dark-blue font-custom no-underline">
            Recent Blog Posts
        </h1>
    </div>
</div>

<div class="w-3/5 m-auto grid grid-cols-1 md:grid-cols-3 gap-8">

@foreach ($recentPosts as $post)
        <div class="bg-custom-purple rounded-lg overflow-hidden shadow-lg">
            <img src="{{ asset('images/' . $post->image_path) }}" alt="" class="w-full h-64 object-cover">
            <div class="p-6 pb-10">
                <h2 class="text-gray-700 font-bold text-2xl pb-4">
                    {{ $post->title }}
                </h2>
                <span class="text-gray-500">
                    By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>
                <p class="text-s text-gray-700 pt-2 pb-8 leading-6 font-light">
                    {{ \Illuminate\Support\Str::limit($post->description, 80, '...') }}
                </p>
                <div class="{{ isset(Auth::user()->id) && Auth::user()->id == $post->user_id ? 'flex justify-between' : 'text-center' }}">
                    <a href="/blog/{{ $post->slug }}" class=" hover:bg-custom-purple-3 uppercase bg-custom-purple-2 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-md">
                        Keep Reading
                    </a>
                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                        <div class="flex justify-end mt-4">
                            <a href="/blog/{{ $post->slug }}/edit" class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2 mr-4">
                                Edit
                            </a>
                            <form action="/blog/{{ $post->slug }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="text-red-500 pr-3" type="submit">
                                    Delete
                                </button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
    
</div>

<div class="relative bg-purple-100 mt-20 mb-20 py-12 ">
    <div class="max-w-2xl mx-auto text-center">
        <h2 class="text-3xl font-semibold text-custom-dark-blue font-custom no-underline">Join our newsletter !</h2>
        <p class="text-gray-600 mt-5">
            By joining the newsletter, be the first to know about new patterns and blog posts available.
        </p>
        <div class="mt-6 flex justify-center">
            <input type="email" placeholder="Your mail address"
                class=" placeholder-custom-purple-2::placeholder px-4 py-2 rounded-l-lg border border-custom-purple-2 focus:outline-none focus:ring-2 focus:ring-purple-500">
            <button class="px-4 py-2 bg-purple-500 text-white font-semibold rounded-r-lg hover:bg-purple-600">
                Subscribe
            </button>
        </div>
    </div>
</div>

@endsection