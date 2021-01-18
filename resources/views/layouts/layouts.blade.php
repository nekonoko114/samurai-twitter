<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- bootstrap使用するためのコード -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @component('components.header')
        @endcomponent
        <div class="container">
            @yield('content')
        </div>
    <!-- bootstrap使用するためのコード -->
    <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>

