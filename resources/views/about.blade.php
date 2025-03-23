@extends('layouts.app')
@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-5">
        <a href="{{ url('/') }}" class="text-custom-purple-2 hover:text-custom-purple-3 text-3xl">
            <i class="fas fa-arrow-left"></i> <!-- Icône de flèche -->
        </a>
    </div>
    <div class="pt-5 pb-5 text-center">
        <h1 class="text-4xl font-semibold text-custom-dark-blue font-custom no-underline">
            About Me
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto flex flex-col md:flex-row items-center">
    <div class="md:w-1/2">
        <img src="{{ asset('images/aboutme.jpg') }}" alt="About Me" class="rounded-lg shadow-lg w-3/4 h-auto">
    </div>
    <div class="md:w-1/2 md:pl-10 mt-10 md:mt-0 text-left">
        <p class="text-3xl text-custom-purple-3 font-bold leading-8">
            Welcome to my world of yarn and creativity!
        </p>
        <p class="text-xl text-custom-dark-blue leading-8 mt-4">
            It all started in October 2022 when I came across a video that completely changed the way I saw crochet. I discovered that it wasn’t just about old-fashioned designs but could also be used to create modern clothing, trendy accessories, and even adorable plushies.
        </p>
        <p class="text-xl text-custom-dark-blue leading-8 mt-4">
            Having always been passionate about arts and crafts-sewing, painting, and all things creative-it felt natural for me to dive into the world of crochet. As soon as I picked up my first crochet hook and a ball of yarn, I knew I had found something special.
        </p>
        <p class="text-xl text-custom-dark-blue leading-8 mt-4">
            After just a month of practice, I was able to make my very first top. Since then, I’ve been turning my ideas into reality, one stitch at a time. Now, with nothing but a hook and some yarn, I can create anything I imagine!
        </p>
        <p class="text-xl text-custom-dark-blue leading-8 mt-4">
            Through this website, I’m excited to share my love for crochet and my handmade creations. I hope they inspire you as much as crochet inspires me every day!
        </p>
    </div>
</div>
@endsection