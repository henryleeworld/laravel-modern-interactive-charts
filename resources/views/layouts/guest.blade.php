<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.22.0/apexcharts.min.css" integrity="sha512-H6KANMpZQKsK9c09UqdcQv02JTiZ/hMVwxkcbDLrp125CR884wwEdnWDm+Yuo6tihuC/cizLYWAjMZi0xAfGig==" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.1/dist/alpine.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.22.0/apexcharts.min.js" integrity="sha512-4wZv8Ez08ZFd8692f3xggP4qy07M422jaolvHEu5Mq1EL8i+ANd1QhCCXyQipwaP7qxJvyvNhe7CfPylB1gb2Q==" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
