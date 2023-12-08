<div class="w-[996px] h-[930px] rounded ml-24 mr-[76px] max-[1024px]:ml-10  max-[1024px]:mr-10">
    <header class="mt-[52px] flex justify-between items-center">
        <div class="w-36 flex items-center gap-3">
            <i class="text-3xl text-base-green-100 ph ph-binoculars"></i>
            <h2 class="text-base-gray-100 text-2xl font-bold">Explorar</h2>
        </div>
        <div class="w-[433px] h-12 rounded py-[14px] px-5 border border-base-gray-500 focus-within:border-base-green-200 flex justify-between items-center transition-all">
            <input wire:model.live.debounce.500ms="search" class="flex-1 bg-transparent text-base-gray-200 text-sm outline-none border-none focus:ring-0 placeholder:text-base-gray-400 peer" type="text" placeholder="Buscar livro ou autor">
            <i class="text-xl text-base-gray-500 ph ph-magnifying-glass peer-focus:text-base-green-200"></i>
        </div>
    </header>
    <div class="mt-10">
        <div class="flex flex-wrap items-center gap-3">

            <x-filter-book name="Tudo" />
            <x-filter-book name="Programação" />
            <x-filter-book name="Educação" />
            <x-filter-book name="Ficção" />
            <x-filter-book name="Aventura" />
            <x-filter-book name="Geek" />
            <x-filter-book name="Alegoria" />
            <x-filter-book name="Fábula" />
            <x-filter-book name="Romance" />
            <x-filter-book name="Suspense" />
            <x-filter-book name="Autoajuda" />
            <x-filter-book name="Arquitetura" />
            <x-filter-book name="Terror" />

        </div>
    </div>

    <main
        x-data="{ open: false }"
        class="grid grid-cols-3
        max-[1280px]:grid-cols-2 max-[1280px]:gap-6
        max-[1024px]:grid-cols-1 gap-5 mt-12 pb-10 overflow-auto scrollbar-hide max-h-[682px] rounded"
    >

        @foreach ($books as $book)
            <x-book :$book />
        @endforeach

        <template x-if="open">
            <x-book-description />
        </template>

    </main>

</div>
