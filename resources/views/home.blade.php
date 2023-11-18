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
        <script src="https://unpkg.com/@phosphor-icons/web"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased max-w-[1440px] min-h-screen mx-auto p-5 bg-base-gray-800 text-white">
        <div class="flex w-full">
            <div class="bg-sidebar-bg h-[912px] w-[232px] flex flex-col rounded-xl">
                <img class="mt-10 mx-[52px] opacity-90" src="images/logo-min.svg" alt="Logo">
                <div class="flex flex-col justify-between h-full">
                    <div class="flex flex-col gap-4 ml-12 mt-16">
                        <div class="flex items-center">
                            <div class="w-1 h-6 bg-gradient-vertical rounded-full"></div>
                            <div class="py-2 ml-4 flex items-center gap-3 text-base-gray-100">
                                <i class="text-icon ph ph-chart-line-up"></i>
                                <span class="font-bold">Início</span>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-1 h-6 bg-gradient-vertical rounded-full hidden"></div>
                            <div class="py-2 ml-4 flex items-center gap-3 text-base-gray-400">
                                <i class="text-2xl ph ph-binoculars"></i>
                                <span class="leading-6">Explorar</span>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-1 h-6 bg-gradient-vertical rounded-full hidden"></div>
                            <div class="py-2 ml-4 flex items-center gap-3 text-base-gray-400">
                                <i class="text-2xl ph ph-user"></i>
                                <span>Perfil</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center gap-3 mb-6">
                        <div class="bg-green-700 h-8 w-8 flex justify-center items-center border border-green-500 rounded-full">

                        </div>
                        <span class="text-sm text-base-gray-200 truncate max-w-[90px]">Tiago Oliveira da Conceição</span>
                        <button class="p-1 rounded gap-3 flex justify-center items-center">
                            <i class="text-xl text-rose-500 ph ph-sign-in"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-[608px] ml-24 mr-16 mt-[52px]">
                <header>
                    <div class="w-36 flex items-center gap-3">
                        <i class="text-3xl text-base-green-100 ph ph-chart-line-up"></i>
                        <h2 class="text-base-gray-100 text-2xl font-bold">Início</h2>
                    </div>
                </header>
            </div>
            <div class="bg-blue-950 w-[324px]">right</div>
        </div>
    </body>
</html>
