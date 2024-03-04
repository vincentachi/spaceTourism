@extends('layouts.app')

@section('title', 'Accueil - Space Voyage')
@section('page-class', 'home')

@section('content')
    <!-- Contenu spécifique à la page d'accueil -->
<main role="main" class='home-div'>
    <article role="article" class='home-div-text'>
    <h2 role="heading" class='home-h2'>{{ __("home affirmation") }}</h2>
    <h1 role="heading" class='home-h1'>{{ __("espace") }}</h1>
    <p class='home-p'>{{ __("home-pesentation") }}</p>    
</article>
    <button role="tab" class='home-explorer-button' type='button'><a href="{{ route('destination', 'name') }}">
        <p class='explorer-text'>{{ __("explorer") }}</p></a>
    </button>
</main> 
@endsection