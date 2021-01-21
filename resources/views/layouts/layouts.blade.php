<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <!-- bootstrap使用するためのコード -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @component('components.header')
        @endcomponent
        <div class="container pt-5 pb-5">
            @yield('content')
        </div>

        @component('components.footer')
        @endcomponent
    <!-- bootstrap使用するためのコード -->
    <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>

