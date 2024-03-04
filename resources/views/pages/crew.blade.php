@extends('layouts.app')

@section('title', 'crew - Space Voyage')
@section('page-class', 'crew')

@section('content')
    <!-- Contenu spécifique à la page d'accueil -->
<h2 role="heading" class='crew-h2'><span class='nb'>02</span> {{ __("crew rencontre") }}</h2>
<main role="main" class= 'crew-article'>
    <article role="article" class='crew-sujet'>
            <h2 role="heading" class='crew-job'>{{ $crew->job }}</h2>
            <h1 role="heading" class='crew-name'>{{ $crew->name }}</h1>
            <p class='crew-text'>{{ $crew->description }}</p>
    <nav role="navigation" class='crew-navbar'>
        <ul role="list" class='crew-ul'>>
            @foreach($crewLinks as $crewLink)
                <li role ="listitem"><a href="{{ route('crew', $crewLink->id) }}"><img src="/images/list-navbar.png" alt="point de navigation"></a></li>
            @endforeach
        </ul>
    </nav>

    <div class='crew-picture-div'>
           
            <img role="img" class='crew-picture' src="{{ asset($crew->picture) }}" alt="image de l'équipage">           
    </div>
</main>
@endsection