@extends('layouts.app')

@section('title', 'technologie - Space Voyage')
@section('page-class', 'technology')

@section('content')
    <!-- Contenu spécifique à la page d'accueil -->
<h2 role="heading" class='technology-title'><span class='nb'>03</span> {{ __("technologie presentation") }}</h2>
<main role="main" class='technology-article'>
    <div class='technology-picture-div'>

        <img role="img" class='technology-picture' src="{{ asset($technology->picture) }}" alt="image du lanceur">

    </div>
    <nav role="navigation" class='technology-nav-bar'>
        <ul class='technology-ul'>
            @foreach($technologyLinks as $technologyLink)
            <li role ="listitem"><a href="{{ route('technology', $technologyLink->id)}}">{{ $loop->iteration }}</li>
            @endforeach
        </ul>
    </nav>
    <article role="article" class='technology-sujet'>
    <h2 role="heading" class='technology-h2'>{{ __("technologie utilise") }}</h2>

            <h1 role="heading" class='technology-h1'>{{ $technology->name }}</h1>
            <p class='technology-text'>{{ $technology->description }}</p>

    </article>
</main>
@endsection   