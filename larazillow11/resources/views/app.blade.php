<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @routes
        @vite('resources/js/app.js',['resources/css/app.css'])
        @inertiaHead
    </head>

    <body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white">
        @inertia
    </body>
</html>
