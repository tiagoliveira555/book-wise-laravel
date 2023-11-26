<div class="w-[996px] h-[930px] rounded ml-24 mr-[76px]">
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

    <main
        x-data="{
            open: false,
            bookSelected: {},
            books: {{ $books }},
            modal(book) {
                this.open = true
                this.bookSelected = book
            },
            covertCategories(categories) {
                return categories.map(category => category.name).join(', ')
            }
        }"
        class="grid grid-cols-3 gap-5 mt-12 pb-10 overflow-auto scrollbar-hide h-[728px] rounded">

        <template x-for="book in books" :key="book.id">
            <x-book />
        </template>

        <template x-if="open">
            <x-book-description />
        </template>

    </main>

</div>
