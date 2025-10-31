@extends('cilent.welcome.index')

@section('movie')
<style>
    body {
        background-color: #0b0b0b;
        color: #fff;
        font-family: 'Poppins', sans-serif;
    }

    .movie-hero {
        position: relative;
        height: 90vh;
        background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0.2)), 
                    url('{{ asset('storage/img/'.$movie->foto) }}') center/cover no-repeat;
        border-bottom: 2px solid #e50914;
    }

    .movie-hero .content {
        position: absolute;
        bottom: 10%;
        left: 10%;
        max-width: 600px;
    }

    .movie-hero h1 {
        font-size: 3rem;
        font-weight: 700;
        color: #fff;
        text-shadow: 2px 2px 10px rgba(0,0,0,0.6);
    }

    .movie-hero p {
        font-size: 1.1rem;
        color: #ccc;
    }

    .btn-watch {
        background-color: #e50914;
        color: #fff;
        border: none;
        padding: 10px 25px;
        border-radius: 5px;
        font-size: 1.1rem;
        transition: 0.3s;
    }

    .btn-watch:hover {
        background-color: #f40612;
        transform: scale(1.05);
    }

    .movie-details {
        margin-top: -80px;
        background-color: #141414;
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 0 20px rgba(0,0,0,0.6);
    }

    .movie-details h2 {
        color: #e50914;
        font-weight: 600;
    }

    .info {
        color: #aaa;
    }

    .back-btn {
        margin-top: 30px;
        display: inline-block;
        color: #fff;
        text-decoration: none;
        border: 1px solid #e50914;
        padding: 10px 20px;
        border-radius: 5px;
        transition: 0.3s;
    }

    .back-btn:hover {
        background-color: #e50914;
    }
</style>

<div class="movie-hero">
    <div class="content">
        <h1>{{ $movie->title }}</h1>
        <p>{{ Str::limit($movie->description, 150) }}</p>
        <a href="#details" class="btn-watch">Watch Details</a>
    </div>
</div>

<div class="container movie-details pt-5 my-5" id="details">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="{{ asset('storage/img/'.$movie->foto) }}" alt="{{ $movie->title }}" class="img-fluid w-100 rounded shadow-lg">
        </div>
        <div class="col-md-6">
            <h2>{{ $movie->title }}</h2>
            <p class="mt-3">{{ $movie->description }}</p>
        <p class="info"><i class="bi bi-geo-alt-fill text-danger"></i> Location: {{ $movie->location }}</p> 
        <p class="info">Year: {{$movie->yyl}}</p>
            <a href="{{ url('/') }}" class="back-btn"><i class="bi bi-arrow-left"></i> Back to Home</a>
        </div>
    </div>
</div>
@endsection

