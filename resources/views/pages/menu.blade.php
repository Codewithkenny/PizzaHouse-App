<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'PizzaHouse App')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      <link rel="stylesheet" href="/css/styles.css">
        </head>
    <body>
        {{-- @yield('content') --}}
        <div class="menu_text">
            <h1>menu page</h1>
        </div>

        <footer>
            Copyright 2023 Pizza House
        </footer>
    </body>
</html>