
@extends('layouts.app')
@section('content')

<section id="gallery" class="gallery">
  <div class="container m-auto">
    <div class="grid">
      <div class="column-xs-12 column-md-4">
        <figure class="img-container">
          <img class="bordure" src="{{ asset('images/img1.jpg') }}" alt="Smart Watch">
        </figure>
      </div>
      <div class="column-xs-12 column-md-4">
        <figure class="img-container">
          <img class="bordure" src="{{ asset('images/img2.jpg') }}" alt="Camera Film">
        </figure>
      </div>
      <div class="column-xs-12 column-md-4">
        <figure class="img-container">
          <img class="bordure" src="{{ asset('images/img3.jpg') }}" alt="Coffee">
        </figure>
      </div>
      <div class="column-xs-12 column-md-4">
        <figure class="img-container">
          <img class="bordure" src="{{ asset('images/img4.jpg') }}" alt="Coffee">
        </figure>
      </div>
      <div class="column-xs-12 column-md-4">
        <figure class="img-container">
          <img class="bordure" src="{{ asset('images/img5.jpg') }}" alt="Coffee">
        </figure>
      </div>
      <div class="column-xs-12 column-md-4">
        <figure class="img-container">
          <img class="bordure" src="{{ asset('images/img6.jpg') }}" alt="Coffee">
        </figure>
      </div>
      <div class="column-xs-12 column-md-4">
        <figure class="img-container">
          <img class="bordure" src="{{ asset('images/img7.jpg') }}" alt="Coffee">
        </figure>
      </div>
      <div class="column-xs-12 column-md-4">
        <figure class="img-container">
          <img class="bordure" src="{{ asset('images/img8.jpg') }}" alt="Coffee">
        </figure>
      </div>
      
    </div>
  </div>
</section>


@endsection