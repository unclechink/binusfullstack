@extends('layouts.app')

@section('content')

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Wisata Indonesia</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Daerah Wisata</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Carousel -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="path_to_your_image1.jpg" class="d-block w-100" alt="Beautiful Indonesia 1">
        </div>
        <div class="carousel-item">
            <img src="path_to_your_image2.jpg" class="d-block w-100" alt="Beautiful Indonesia 2">
        </div>
        <div class="carousel-item">
            <img src="path_to_your_image3.jpg" class="d-block w-100" alt="Beautiful Indonesia 3">
        </div>
    </div>
</div>

<!-- Cards Section -->
<div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
    @for ($i = 1; $i <= 6; $i++)
    <div class="col">
        <div class="card h-100">
            <img src="path_to_card_image{{$i}}.jpg" class="card-img-top" alt="Destination {{$i}}">
            <div class="card-body">
                <h5 class="card-title">Destination {{$i}}</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    @endfor
</div>

@endsection
