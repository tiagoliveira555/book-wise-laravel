<div class="flex">
    <div class="w-[624px] ml-24 mr-16">
        <header class="mt-[52px] mb-10 flex flex-col gap-10">
            <div class="w-36 flex items-center gap-3">
                <i class="text-3xl text-base-green-100 ph ph-user"></i>
                <h2 class="text-base-gray-100 text-2xl font-bold">Perfil</h2>
            </div>
            <div class="w-full h-12 rounded py-[14px] px-5 border border-base-gray-500 focus-within:border-base-green-200 flex justify-between items-center transition-all">
                <input class="flex-1 bg-transparent text-base-gray-200 text-sm outline-none border-none focus:ring-0 placeholder:text-base-gray-400 peer" type="text" placeholder="Buscar livro avaliado">
                <i class="text-xl text-base-gray-500 ph ph-magnifying-glass peer-focus:text-base-green-200"></i>
            </div>
        </header>
        <div class="flex flex-col h-[715px] rounded pb-10 gap-6 overflow-auto scrollbar-hide">
            <div class="flex flex-col gap-2">
                <span class="text-base-gray-300 text-sm">Hoje</span>
                <div class="bg-base-gray-700 rounded-lg p-6 flex flex-col gap-6">
                    <div class="flex gap-6">
                        <img class="w-[98px] h-[134px] rounded" src="images/books/o-hobbit.png" alt="O Hobbit">
                        <div class="flex flex-col justify-between">
                            <div>
                                <h2 class="text-lg font-bold text-base-gray-100">O Hobbit</h2>
                                <h3 class="text-sm text-base-gray-400">Junji Ito</h3>
                            </div>
                            <x-rating-stars rate="4" />
                        </div>
                    </div>
                    <p class="text-base-gray-300 text-sm">Ornare amet scelerisque eget sit in donec dui. Tempus eget porttitor hendrerit eros viverra. Sit eget ipsum purus morbi curabitur cras gravida adipiscing dictum. Dui duis ut auctor dolor et mattis ultrices. Convallis quis in tortor pretium hendrerit sed. Vel et nibh sodales blandit egestas a quis bibendum.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-[308px] mt-[126px] flex flex-col items-center gap-8">
        <div class="flex flex-col items-center gap-5">
            <div class="h-[72px] w-[72px] flex justify-center items-center bg-gradient-vertical rounded-full">
                <img class="rounded-full w-[68px] h-[68px]"
                src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1480&q=80"
                alt="name"
            >
            </div>
            <div class="flex flex-col items-center">
                <h2 class="text-base-gray-100 text-xl font-bold">Cristofer Rosser</h2>
                <h3 class="text-base-gray-400 text-sm">membro desde 2019</h3>
            </div>
        </div>
        <div class="py-2">
            <hr class="h-1 w-8 bg-gradient-horizontal rounded-full">
        </div>
        <div class="pb-5 px-14 flex flex-col gap-8">
            <div class="flex gap-5">
                <div class="text-[32px] text-base-green-100">
                    <i class="ph ph-book-open"></i>
                </div>
                <div class="flex flex-col">
                    <strong class="text-base-gray-200 font-bold">3853</strong>
                    <span class="text-base-gray-300 text-sm">Páginas lidas</span>
                </div>
            </div>
            <div class="flex gap-5">
                <div class="text-[32px] text-base-green-100">
                    <i class="ph ph-books"></i>
                </div>
                <div class="flex flex-col">
                    <strong class="text-base-gray-200 font-bold">10</strong>
                    <span class="text-base-gray-300 text-sm">Livros avaliados</span>
                </div>
            </div>
            <div class="flex gap-5">
                <div class="text-[32px] text-base-green-100">
                    <i class="ph ph-user-list"></i>
                </div>
                <div class="flex flex-col">
                    <strong class="text-base-gray-200 font-bold">8</strong>
                    <span class="text-base-gray-300 text-sm">Autores lidos</span>
                </div>
            </div>
            <div class="flex gap-5">
                <div class="text-[32px] text-base-green-100">
                    <i class="ph ph-bookmark-simple"></i>
                </div>
                <div class="flex flex-col">
                    <strong class="text-base-gray-200 font-bold">Computação</strong>
                    <span class="text-base-gray-300 text-sm">Categoria mais lida</span>
                </div>
            </div>
        </div>
    </div>
</div>
