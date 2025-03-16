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

@endsection