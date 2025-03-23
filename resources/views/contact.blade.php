@extends('layouts.app')
@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-5">
        <a href="{{ url('/') }}" class="text-custom-purple-2 hover:text-custom-purple-3 text-3xl">
            <i class="fas fa-arrow-left"></i> <!-- Icône de flèche -->
        </a>
    </div>
    <div class="pt-5 pb-7 text-center">
        <h1 class="text-4xl font-semibold text-custom-dark-blue font-custom no-underline">
            Contact Me
        </h1>
    </div>
</div>
<div class="w-4/5 m-auto text-center">
    <p class="text-custom-dark-blue">
        If you have any queries or demand, let us know by filling this form.
    </p>
</div>

<div class="w-4/5 m-auto">
    <form action="{{ route('contact.submit') }}" method="POST" class="bg-white p-8 rounded-lg shadow-lg">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
            <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
            <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
            <textarea name="message" id="message" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
        </div>
        <div class="mb-4">
            <button type="submit" class="bg-custom-purple-2 hover:bg-custom-purple-3 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Send Message
            </button>
        </div>
    </form>
</div>
@endsection