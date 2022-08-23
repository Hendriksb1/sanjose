<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
    <h1>test</h1>
    <div id="app">
        <example-component />
    </div>
    <script type="module" src="{{ mix('/resources/js/app.js') }}"></script>
    </body>
</html>
