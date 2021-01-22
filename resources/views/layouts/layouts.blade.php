<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <!-- bootstrap使用するためのコード -->
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        @component('components.header')
        @endcomponent
        <div class="container pt-5 pb-5">
                @component('components.flash')
                @endcomponent
            @yield('content')
        </div>

        @component('components.footer')
        @endcomponent
        <!-- bootstrap使用するためのコード -->
        <!-- <script src="{{ asset('js/app.js') }}"></script> -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>

