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
    <body class="antialiased max-w-[1440px] min-h-screen mx-auto p-5 bg-base-gray-800 text-white overflow-auto scrollbar-hide">
        <div class="flex w-full">
            {{-- Aside --}}
            <aside class="bg-sidebar-bg h-[912px] w-[232px] flex flex-col rounded-xl">
                <img class="mt-10 mx-[52px] opacity-90" src="images/logo-min.svg" alt="Logo">
                <div class="flex flex-col justify-between h-full">
                    <div class="flex flex-col gap-4 ml-12 mt-16">
                        <div class="flex items-center">
                            <div class="w-1 h-6 bg-gradient-vertical rounded-full hidden"></div>
                            <div class="py-2 ml-4 flex items-center gap-3 text-base-gray-400">
                                <i class="text-icon ph ph-chart-line-up"></i>
                                <span>Início</span>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-1 h-6 bg-gradient-vertical rounded-full"></div>
                            <div class="py-2 ml-4 flex items-center gap-3 text-base-gray-100">
                                <i class="text-2xl ph ph-binoculars"></i>
                                <span class="font-bold">Explorar</span>
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
                        <div class="bg-gradient-vertical h-8 w-8 flex justify-center items-center border rounded-full">

                        </div>
                        <span class="text-sm text-base-gray-200 truncate max-w-[90px]">Tiago Oliveira da Conceição</span>
                        <button class="p-1 rounded gap-3 flex justify-center items-center">
                            <i class="text-xl text-rose-500 ph ph-sign-in"></i>
                        </button>
                    </div>
                </div>
            </aside>
            {{-- Aside End --}}
            <div class="w-[996px] h-[988px] rounded ml-24 mr-[76px] overflow-auto scrollbar-hide">
                <header class="mt-[52px] flex justify-between items-center">
                    <div class="w-36 flex items-center gap-3">
                        <i class="text-3xl text-base-green-100 ph ph-binoculars"></i>
                        <h2 class="text-base-gray-100 text-2xl font-bold">Explorar</h2>
                    </div>
                    <div class="w-[433px] h-12 rounded py-[14px] px-5 border border-base-gray-500 focus-within:border-base-green-200 flex justify-between items-center">
                        <input class="bg-transparent text-base-gray-200 text-sm outline-none border-none focus:ring-0 placeholder:text-base-gray-400 peer" type="text" placeholder="Buscar livro ou autor">
                        <i class="text-xl text-base-gray-500 ph ph-magnifying-glass peer-focus:text-base-green-200"></i>
                    </div>
                </header>
            </div>
        </div>
    </body>
</html>
