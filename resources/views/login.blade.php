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
        <div class="w-full flex">
            <div class="w-[598px] h-[912px] bg-bg-logo rounded-[10px] flex justify-center items-center">
                <img src="images/logo.svg" alt="Logo">
            </div>
            <div class="flex flex-1 justify-center items-center">
                <div class="w-[327px]">
                    <h1 class="font-bold text-2xl text-base-gray-100">Boas vindas!</h1>
                    <p class="text-base-gray-200">Faça seu login ou acesse como visitante.</p>
                    <div class="mt-10 flex flex-col justify-center items-center w-full gap-4">
                        <div class="bg-base-gray-600 w-full py-5 px-6 rounded-lg flex items-center gap-5">
                            <img src="images/icons/google.svg" alt="Google">
                            <span class="text-lg text-base-gray-200 font-bold">Entrar com Google</span>
                        </div>
                        <div class="bg-base-gray-600 w-full py-5 px-6 rounded-lg flex items-center gap-5">
                            <img src="images/icons/github.svg" alt="Github">
                            <span class="text-lg text-base-gray-200 font-bold">Entrar com GitHub</span>
                        </div>
                        <div class="bg-base-gray-600 w-full py-5 px-6 rounded-lg flex items-center gap-5">
                            <img src="images/icons/rocket.svg" alt="Rocket">
                            <span class="text-lg text-base-gray-200 font-bold">Acessar como visitante</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
