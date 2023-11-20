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
            <div class="w-[996px] h-[988px] rounded ml-24 mr-[76px]">
                <header class="mt-[52px] flex justify-between items-center">
                    <div class="w-36 flex items-center gap-3">
                        <i class="text-3xl text-base-green-100 ph ph-binoculars"></i>
                        <h2 class="text-base-gray-100 text-2xl font-bold">Explorar</h2>
                    </div>
                    <div class="w-[433px] h-12 rounded py-[14px] px-5 border border-base-gray-500 focus-within:border-base-green-200 flex justify-between items-center transition-all">
                        <input class="flex-1 bg-transparent text-base-gray-200 text-sm outline-none border-none focus:ring-0 placeholder:text-base-gray-400 peer" type="text" placeholder="Buscar livro ou autor">
                        <i class="text-xl text-base-gray-500 ph ph-magnifying-glass peer-focus:text-base-green-200"></i>
                    </div>
                </header>
                <div class="mt-10">
                    <ul class="flex items-center gap-3">
                        <li class="py-1 px-4 rounded-full bg-base-purple-200 text-center text-base-gray-100 border border-transparent hover:border-base-purple-100 transition-all">Tudo</li>
                        <li class="py-1 px-4 rounded-full text-center text-base-purple-100 border border-base-purple-100 hover:border-base-purple-100 transition-all">Computação</li>
                        <li class="py-1 px-4 rounded-full text-center text-base-purple-100 border border-base-purple-100 hover:border-base-purple-100 transition-all">Educação</li>
                        <li class="py-1 px-4 rounded-full text-center text-base-purple-100 border border-base-purple-100 hover:border-base-purple-100 transition-all">Fantasia</li>
                        <li class="py-1 px-4 rounded-full text-center text-base-purple-100 border border-base-purple-100 hover:border-base-purple-100 transition-all">Ficção científica</li>
                        <li class="py-1 px-4 rounded-full text-center text-base-purple-100 border border-base-purple-100 hover:border-base-purple-100 transition-all">Horror</li>
                        <li class="py-1 px-4 rounded-full text-center text-base-purple-100 border border-base-purple-100 hover:border-base-purple-100 transition-all">HQs</li>
                        <li class="py-1 px-4 rounded-full text-center text-base-purple-100 border border-base-purple-100 hover:border-base-purple-100 transition-all">Suspense</li>
                    </ul>
                </div>
                <main class="grid grid-cols-3 gap-5 mt-12 overflow-auto scrollbar-hide h-[750px] rounded">
                    <div class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/a-revolucao-dos-bixos.png"
                            alt="A revolução dos bixos"
                        >
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <h2 class="font-bold text-base-gray-100">A revolução dos bichos</h2>
                                <h3 class="text-sm text-base-gray-400">George Orwell</h3>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/a-revolucao-dos-bixos.png"
                            alt="A revolução dos bixos"
                        >
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <h2 class="font-bold text-base-gray-100">A revolução dos bichos</h2>
                                <h3 class="text-sm text-base-gray-400">George Orwell</h3>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/a-revolucao-dos-bixos.png"
                            alt="A revolução dos bixos"
                        >
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <h2 class="font-bold text-base-gray-100">A revolução dos bichos</h2>
                                <h3 class="text-sm text-base-gray-400">George Orwell</h3>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/a-revolucao-dos-bixos.png"
                            alt="A revolução dos bixos"
                        >
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <h2 class="font-bold text-base-gray-100">A revolução dos bichos</h2>
                                <h3 class="text-sm text-base-gray-400">George Orwell</h3>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/a-revolucao-dos-bixos.png"
                            alt="A revolução dos bixos"
                        >
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <h2 class="font-bold text-base-gray-100">A revolução dos bichos</h2>
                                <h3 class="text-sm text-base-gray-400">George Orwell</h3>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/a-revolucao-dos-bixos.png"
                            alt="A revolução dos bixos"
                        >
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <h2 class="font-bold text-base-gray-100">A revolução dos bichos</h2>
                                <h3 class="text-sm text-base-gray-400">George Orwell</h3>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/a-revolucao-dos-bixos.png"
                            alt="A revolução dos bixos"
                        >
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <h2 class="font-bold text-base-gray-100">A revolução dos bichos</h2>
                                <h3 class="text-sm text-base-gray-400">George Orwell</h3>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/a-revolucao-dos-bixos.png"
                            alt="A revolução dos bixos"
                        >
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <h2 class="font-bold text-base-gray-100">A revolução dos bichos</h2>
                                <h3 class="text-sm text-base-gray-400">George Orwell</h3>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/a-revolucao-dos-bixos.png"
                            alt="A revolução dos bixos"
                        >
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <h2 class="font-bold text-base-gray-100">A revolução dos bichos</h2>
                                <h3 class="text-sm text-base-gray-400">George Orwell</h3>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/a-revolucao-dos-bixos.png"
                            alt="A revolução dos bixos"
                        >
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <h2 class="font-bold text-base-gray-100">A revolução dos bichos</h2>
                                <h3 class="text-sm text-base-gray-400">George Orwell</h3>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/a-revolucao-dos-bixos.png"
                            alt="A revolução dos bixos"
                        >
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <h2 class="font-bold text-base-gray-100">A revolução dos bichos</h2>
                                <h3 class="text-sm text-base-gray-400">George Orwell</h3>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/a-revolucao-dos-bixos.png"
                            alt="A revolução dos bixos"
                        >
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <h2 class="font-bold text-base-gray-100">A revolução dos bichos</h2>
                                <h3 class="text-sm text-base-gray-400">George Orwell</h3>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/a-revolucao-dos-bixos.png"
                            alt="A revolução dos bixos"
                        >
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <h2 class="font-bold text-base-gray-100">A revolução dos bichos</h2>
                                <h3 class="text-sm text-base-gray-400">George Orwell</h3>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/a-revolucao-dos-bixos.png"
                            alt="A revolução dos bixos"
                        >
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <h2 class="font-bold text-base-gray-100">A revolução dos bichos</h2>
                                <h3 class="text-sm text-base-gray-400">George Orwell</h3>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/a-revolucao-dos-bixos.png"
                            alt="A revolução dos bixos"
                        >
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <h2 class="font-bold text-base-gray-100">A revolução dos bichos</h2>
                                <h3 class="text-sm text-base-gray-400">George Orwell</h3>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/a-revolucao-dos-bixos.png"
                            alt="A revolução dos bixos"
                        >
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <h2 class="font-bold text-base-gray-100">A revolução dos bichos</h2>
                                <h3 class="text-sm text-base-gray-400">George Orwell</h3>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
                        <img
                            class="w-[108px] h-[152px]"
                            src="images/books/a-revolucao-dos-bixos.png"
                            alt="A revolução dos bixos"
                        >
                        <div class="flex flex-col justify-between items-start">
                            <div>
                                <h2 class="font-bold text-base-gray-100">A revolução dos bichos</h2>
                                <h3 class="text-sm text-base-gray-400">George Orwell</h3>
                            </div>
                            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph-fill ph-star"></i></li>
                                <li><i class="ph ph-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>