<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token }}">
        <!-- bootstrap使用するためのコード -->
        <link href="{{ $asset('css/app.css') }}" rel="stylesheet">
        <staile></staile>
    </head>
    <body>
        <div class="container">
        @yield('content')
        </div>
    </body>
    <!-- bootstrap使用するためのコード -->
    <script src="{{ asset('js/app.js' }}" ></script>
</html>

