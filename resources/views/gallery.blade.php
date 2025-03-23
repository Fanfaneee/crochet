@extends('layouts.app')
@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="pt-16 pb-7">
        <h1 class="text-4xl font-semibold text-custom-dark-blue font-custom no-underline">
            Gallery
        </h1>
    </div>
</div>
<div class="w-4/5 m-auto text-center">
    
    <p class="text-custom-dark-blue">
  This gallery is full of inspiration from pinterest, new inspi will arrived soon. click on the picture to access the pinterest link.
  </p>
    
</div>

<!-- Formulaire pour télécharger des images -->
 <!--
<div class="w-4/5 m-auto pt-10">
    <form action="{{ route('gallery.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Upload Image:</label>
            <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="alt_text" class="block text-gray-700 text-sm font-bold mb-2">Alt Text:</label>
            <input type="text" name="alt_text" id="alt_text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="link" class="block text-gray-700 text-sm font-bold mb-2">Link:</label>
            <input type="url" name="link" id="link" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Upload
            </button>
        </div>
    </form>
</div>-->

<section id="gallery" class="gallery">
  <div class="container m-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
      @foreach ($images as $image)
        <div class="column-xs-12 column-md-4">
          <figure class="img-container">
            <img class="bordure cursor-pointer" src="{{ asset('images/' . $image->path) }}" alt="{{ $image->alt_text }}" onclick="openModal('{{ $image->path }}', '{{ $image->link }}')">
          </figure>
        </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Modal -->
<div id="imageModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
  <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
    <div class="mt-3 text-center"></div>
      <div class="mt-2 px-7 py-3">
        <img id="modalImage" src="" alt="" class="w-full h-auto rounded-lg">
      </div>
      <div class="items-center px-4 py-3">
        <button id="openImageButton" class="px-4 py-2 bg-custom-purple-2 hover:bg-custom-purple-3  text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300">
          Open Link in New Tab
        </button>
        <button onclick="closeModal()" class="mt-2 px-4 py-2 bg-gray-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-300">
          Close
        </button>
      </div>
    </div>
  </div>
</div>

<script>
  function openModal(imagePath, link) {
    document.getElementById('modalImage').src = '/images/' + imagePath;
    document.getElementById('openImageButton').onclick = function() {
      window.open(link, '_blank');
    };
    document.getElementById('imageModal').classList.remove('hidden');
  }

  function closeModal() {
    document.getElementById('imageModal').classList.add('hidden');
  }
</script>


@endsection