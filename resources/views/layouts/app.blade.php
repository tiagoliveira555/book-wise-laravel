<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,400;6..12,700&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/@phosphor-icons/web"></script>

        <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <title>Book Wise</title>

    </head>
    <body class="antialiased max-w-[1440px] min-h-screen mx-auto p-5 bg-base-gray-800 text-white overflow-auto scrollbar-hide">
        <livewire:aside />
    </body>
</html>
