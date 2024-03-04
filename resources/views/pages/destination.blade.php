@extends('layouts.app')

@section('title', 'destination-moon - Space Voyage')
@section('page-class', 'destination')

@section('content')
    <!-- Contenu spécifique à la page d'accueil -->

    <h2 role="heading" class='destination-h2'><span class='nb'>01</span> {{ __("destination choix") }}</h2>
    <main role="main" class='destination-article'>
  
        <img role="img" class='destination-picture' src="{{ asset($destination->picture) }}" alt="image de la destination">

        <article role="article" class="destination-sujet">
            <nav role="navigation" class="destination-nav-bar">
                <ul role="list"  class='destination-nav'>
                    @foreach($planets as $planet)
                    <li role="listitem"><a href="{{ route('destination', $planet->id) }}">{{ $planet->name }}</a></li>
                    @endforeach
                </ul>
            </nav>
  
            <h1 role="heading" class='destination-h1'>{{ $destination->name }}</h1>
            <p class='destination-p'>{{ $destination->description }}</p>
            <div class='destination-ligne'></div>
            <div class='destination-indication'>
                <div class='destination-distance-duree'>
                    <h3 role="heading" class='destinantion-h3'>{{ __("distance") }}</h3>
                    <p class='destination-distance-p'>{{ $destination->distance }}</p>
                </div>
                <div class='destination-distance-duree'>
                    <h3 role="heading" class='destinantion-h3'>{{ __("duree") }}</h3>
                    <p class='destination-distance-p'>{{ $destination->duration }}</p>
                </div>
            </div>

        </article>
    </main>
@endsection