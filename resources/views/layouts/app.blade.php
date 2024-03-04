@include('components.head')
<body class="@yield('page-class')">
    @include('components.header')
    
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
