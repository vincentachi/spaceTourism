<header role="banner">
    <nav role="navigation" class="nav-bar">  
        <ul role="list" class="navP1">
            <li role="listitem"><img src="{{ asset('images/EllipseDifference.png') }}" alt="logo du site"></li>
            <li role="listitem" class="ligne"></li>
        </ul>
        <ul role="list" class="langage">
            <li role="listitem"><a href="{{ route('lang.choix', 'fr') }}">Français</a></li>
            <li role="listitem"><a href="{{ route('lang.choix', 'en') }}">English</a></li>
        </ul>
        <div role="menu" id='burger'>
            <span></span>
        </div>
        <ul role="list" id='navP2'>
            <li role="listitem" class='accueil'><a href="{{ route('home') }}"><span class='nb'>00 </span>{{ __('accueil') }}</a></li>
            <li role="listitem" class='destination'><a href="{{ route('destination', $navlink['destination']) }}"><span class='nb'>01 </span>{{ __("destination") }}</a></li>
            <li role="listitem" class='equipage'><a href="{{ route('crew', $navlink['crew']) }}"><span class='nb'>02 </span>{{ __('equipage') }}</a></li>
            <li role="listitem" class='technologie'><a href="{{ route('technology', $navlink['technology']) }}"><span class='nb'>03 </span>{{ __('technologie') }}</a></li>
        </ul>
    </nav>
</head>
 