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
                        <div class="bg-gradient-vertical h-8 w-8 flex justify-center items-center border rounded-full">

                        </div>
                        <span class="text-sm text-base-gray-200 truncate max-w-[90px]">Tiago Oliveira da Conceição</span>
                        <button class="p-1 rounded gap-3 flex justify-center items-center">
                            <i class="text-xl text-rose-500 ph ph-sign-in"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-[608px] h-[912px] ml-24 mr-16 mt-[52px] overflow-auto scrollbar-hide">
                <header>
                    <div class="w-36 flex items-center gap-3">
                        <i class="text-3xl text-base-green-100 ph ph-chart-line-up"></i>
                        <h2 class="text-base-gray-100 text-2xl font-bold">Início</h2>
                    </div>
                </header>
                <section class="mt-10">
                    <div class="flex justify-between items-center">
                        <h3 class="text-base-gray-100 text-sm">Sua última leitura</h3>
                        <a href="#" class="flex items-center gap-2 py-1 px-2 rounded text-base-purple-100">
                            <span class="font-bold">Ver todas</span>
                            <i class="text-lg ph ph-caret-right"></i>
                        </a>
                    </div>
                    <div class="mt-5 py-5 px-6 rounded-lg flex items-center gap-6 bg-base-gray-600">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/entendendo-algoritmos.png"
                            alt="Entendendo Algoritmos"
                        >
                        <div class="w-full">
                            <div class="flex justify-between items-center">
                                <span class="text-base-gray-300 text-sm">Há 2 dias</span>
                                <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                    <li><i class="ph-fill ph-star"></i></li>
                                    <li><i class="ph-fill ph-star"></i></li>
                                    <li><i class="ph-fill ph-star"></i></li>
                                    <li><i class="ph-fill ph-star"></i></li>
                                    <li><i class="ph ph-star"></i></li>
                                </ul>
                            </div>
                            <h2 class="mt-3 font-bold text-base-gray-100">Entendendo Algoritmos</h2>
                            <h3 class="text-base-gray-400 text-sm">Aditya Bhargava</h3>
                            <p class="mt-6 text-sm text-base-gray-300">Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectu...</p>
                        </div>
                    </div>
                </section>
                <section class="mt-10">
                    <h3 class="text-sm text-base-gray-100 mb-1">Avaliações mais recentes</h3>
                    <div class="mt-3 bg-base-gray-700 rounded-lg p-6">
                        <div class="flex justify-between items-start">
                            <div class="flex gap-4">
                                <div
                                    class="bg-gradient-vertical h-10 w-10 flex justify-center items-center border rounded-full"
                                >
                                </div>
                                <div>
                                    <h3 class="text-base-gray-100">Jaxson Dias</h3>
                                    <h4 class="text-sm text-base-gray-400">Hoje</h4>
                                </div>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                        <div class="mt-8 flex gap-5">
                            <img
                                class="w-[108px] h-[152px]"
                                src="images/books/o-hobbit.png"
                                alt="O Hobbit"
                            >
                            <div>
                                <h2 class="font-bold text-base-gray-100">O Hobbit</h2>
                                <h3 class="text-sm text-base-gray-400">J.R.R. Tolkien</h3>
                                <p class="mt-5 text-base-gray-300 text-sm leading-[22px]">Semper et sapien proin vitae nisi. Feugiat neque integer donec et aenean posuere amet ultrices. Cras fermentum id pulvinar varius leo a in. Amet libero pharetra nunc elementum fringilla velit ipsum. Sed vulputate massa velit nibh...
                                    <span class="text-base-purple-100 font-bold">ver mais</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="bg-blue-950 w-[324px]">right</div>
        </div>
    </body>
</html>
