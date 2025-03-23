@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Update Post
        </h1>
    </div>
</div>

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form 
        action="/blog/{{ $post->slug }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input 
            type="text"
            name="title"
            value="{{ $post->title }}"
            class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

        <textarea 
            name="description"
            placeholder="Description..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">{{ $post->description }}</textarea> 

        <div class="mb-4">
            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content:</label>
            <textarea name="content" id="content" rows="10" class="form-control shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('content', $post->content ?? '') }}</textarea>
        </div>
            
        <button    
            type="submit"
            class="uppercase mt-15 bg-custom-purple-2 hover:bg-custom-purple-3 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Submit Post
        </button>
    </form>
</div>
@push('scripts')
<script>
    tinymce.init({
        selector: 'textarea#content',  // Cible l'élément textarea par son id
        height: 300,  // Hauteur de l'éditeur
        menubar: false,  // Masquer le menu
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | link image',
        setup: function(editor) {
            editor.on('change', function() {
                tinymce.triggerSave(); // Sauvegarder l'édition du contenu dans la textarea
            });
        }
    });
</script>
@endpush

@endsection