<div>
    <div x-on:click="open = false" class="fixed inset-0 w-full h-full opacity-60 blur-sm bg-black"></div>
    <div class="fixed top-0 pb-10 right-0 w-[660px] z-10 h-full bg-base-gray-800 overflow-auto">
        <header class="flex justify-end items-center w-full">
            <button x-on:click="open = false" class="mt-6 mr-12 flex justify-center items-center text-base-gray-400">
                <i class="text-xl ph ph-x"></i>
            </button>
        </header>

        <main class="flex flex-col mt-5">
            <div class="w-[564px] mx-auto bg-base-gray-700 rounded-[10px] py-6 px-8 flex flex-col">
                <div class="flex gap-8">
                    <img
                    class="w-[171px] h-[242px]"
                    :src="bookSelected.cover_url"
                    :alt="bookSelected.name"
                >
                <div class="flex flex-col justify-between items-start">
                    <div class="flex flex-col gap-2">
                        <h2 class="font-bold text-base-gray-100 text-lg" x-text="bookSelected.name"></h2>
                        <h3 class="text-base-gray-300" x-text="bookSelected.author"></h3>
                    </div>
                    <div class="flex gap-1 flex-col">
                        <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                            <li class="text-xl"><i class="ph-fill ph-star"></i></li>
                            <li class="text-xl"><i class="ph-fill ph-star"></i></li>
                            <li class="text-xl"><i class="ph-fill ph-star"></i></li>
                            <li class="text-xl"><i class="ph-fill ph-star"></i></li>
                            <li class="text-xl"><i class="ph ph-star"></i></li>
                        </ul>
                        <span class="text-sm text-base-gray-400"><span x-text="bookSelected.ratings_count"></span> avaliações</span>
                    </div>
                </div>
            </div>
                <div class="flex items-center gap-14 py-6 mt-10 border border-t-base-gray-600 border-transparent">
                    <div class="px-1 flex items-center gap-4">
                        <i class="text-2xl text-base-green-100 ph ph-bookmark-simple"></i>
                        <div>
                            <h3 class="text-sm text-base-gray-300">Categoria</h3>
                            <h2 class="font-bold text-base-gray-200" x-text="covertCategories(bookSelected.categories)"></h2>
                        </div>
                    </div>
                    <div class="px-1 flex items-center gap-4">
                        <i class="text-2xl text-base-green-100 ph ph-book-open"></i>
                        <div>
                            <h3 class="text-sm text-base-gray-300">Páginas</h3>
                            <h2 class="font-bold text-base-gray-200" x-text="bookSelected.total_pages"></h2>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="mx-12 mt-[46px] mb-4 flex justify-between items-center">
            <h2 class="text-base-gray-200 text-sm">Avaliações</h2>
            <button class="py-1 px-2 text-bold text-base-purple-100">Avaliar</button>
        </div>
        <div class="flex flex-col gap-3 px-12">
            <div class="flex flex-col rounded-lg p-6 bg-base-gray-700">
                <header class="flex justify-between w-full">
                    <div class="flex items-center gap-4 flex-1">
                        <div class="bg-gradient-vertical h-10 w-10 flex justify-center items-center border rounded-full">

                        </div>
                        <span class="font-bold text-base-gray-100">Cristofer Rosser</span>
                    </div>
                    <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                        <li class="text-[28px]"><i class="ph ph-star"></i></li>
                        <li class="text-[28px]"><i class="ph ph-star"></i></li>
                        <li class="text-[28px]"><i class="ph ph-star"></i></li>
                        <li class="text-[28px]"><i class="ph ph-star"></i></li>
                        <li class="text-[28px]"><i class="ph ph-star"></i></li>
                    </ul>
                </header>
                <div class="relative mt-6 mb-3 h-[164px] rounded border bg-base-gray-800 text-sm border-base-gray-500 text-base-gray-400 focus-within:border-base-green-200">
                    <textarea class="resize-none bg-transparent w-full h-full placeholder:text-sm placeholder:text-base-gray-400 border-none outline-none focus:ring-0" name="a" placeholder="Escreva sua avaliação"></textarea>
                    <span class="absolute bottom-1 right-1 text-xs text-base-gray-400">0/450</span>
                </div>
                <div class="flex justify-end items-center gap-2">
                    <button class="flex justify-center items-center p-2 rounded bg-base-gray-600 text-base-purple-100 text-2xl hover:bg-base-gray-500 transition-all">
                        <i class="ph ph-x"></i>
                    </button>
                    <button class="flex justify-center items-center p-2 rounded bg-base-gray-600 text-base-green-100 text-2xl hover:bg-base-gray-500 transition-all">
                        <i class="ph ph-check"></i>
                    </button>
                </div>
            </div>
            <div class="flex flex-col gap-5 p-6 rounded-lg bg-base-gray-700">
                <div class="flex justify-between items-start gap-4">
                    <div class="flex gap-4">
                        <div class="bg-gradient-vertical h-10 w-10 flex justify-center items-center border rounded-full">

                        </div>
                        <div>
                            <h2 class="text-base-gray-100 font-bold">Brandon Botosh</h2>
                            <h3 class="text-sm text-base-gray-400">Há 2 dias</h3>
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
                <p class="text-base-gray-300 text-sm">Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget</p>
            </div>
            <div class="flex flex-col gap-5 p-6 rounded-lg bg-base-gray-700">
                <div class="flex justify-between items-start gap-4">
                    <div class="flex gap-4">
                        <div class="bg-gradient-vertical h-10 w-10 flex justify-center items-center border rounded-full">

                        </div>
                        <div>
                            <h2 class="text-base-gray-100 font-bold">Brandon Botosh</h2>
                            <h3 class="text-sm text-base-gray-400">Há 2 dias</h3>
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
                <p class="text-base-gray-300 text-sm">Nec tempor nunc in egestas. Euismod nisi eleifend at et in sagittis. Penatibus id vestibulum imperdiet a at imperdiet lectus leo. Sit porta eget nec vitae sit vulputate eget</p>
            </div>
        </div>
    </div>
</div>
