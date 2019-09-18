<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" />

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    </head>
    <body class="grey lighten-4">
        <div id="app" v-bind:json="setJson({{ $content }})">
            <router-view :json="json"></router-view>
        </div>

        <!-- Script -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>