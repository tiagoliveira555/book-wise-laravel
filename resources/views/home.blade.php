<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Book Wise</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,400;6..12,700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased max-w-[1440px] min-h-screen mx-auto p-5 bg-base-gray-800 text-white">
        <div class="flex w-full">
            <div class="bg-sidebar-bg h-[57rem] w-[232px]">
                <img class="mt-10 mx-[52px] opacity-90" src="images/logo-min.svg" alt="Logo">
            </div>
            <div class="bg-yellow-950 w-[608px] ml-24 mr-16">menu</div>
            <div class="bg-blue-950 w-[324px]">right</div>
        </div>
    </body>
</html>
