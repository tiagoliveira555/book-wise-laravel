<div>
    <div x-on:click="open = false" class="fixed inset-0 w-full h-full opacity-60 blur-sm bg-black"></div>
    <div class="fixed top-0 pb-10 right-0 w-[660px] z-10 h-full bg-base-gray-800 overflow-auto">
        <header class="flex justify-end items-center w-full">
            <button x-on:click="open = false" class="mt-6 mr-12 flex justify-center items-center text-base-gray-400">
                <i class="text-xl ph ph-x"></i>
            </button>
        </header>

        @if ($this->book)

        <main class="flex flex-col mt-5">
            <div class="w-[564px] mx-auto bg-base-gray-700 rounded-[10px] py-6 px-8 flex flex-col">
                <div class="flex gap-8">
                    <img
                    class="w-[171px] h-[242px]"
                    src="{{ $this->book->cover_url }}"
                    alt="{{ $this->book->name }}"
                >
                <div class="flex flex-col justify-between items-start">
                    <div class="flex flex-col gap-2">
                        <h2 class="font-bold text-base-gray-100 text-lg">{{ $this->book->name }}</h2>
                        <h3 class="text-base-gray-300">{{ $this->book->author }}</h3>
                    </div>
                    <div class="flex gap-1 flex-col">

                        <x-rating-stars rate="{{ ratingAverage($this->book->ratings) }}" />

                        <span class="text-sm text-base-gray-400">{{ count($this->book->ratings) }} avaliações</span>
                    </div>
                </div>
            </div>
                <div class="flex items-center gap-14 py-6 mt-10 border border-t-base-gray-600 border-transparent">
                    <div class="px-1 flex items-center gap-4">
                        <i class="text-2xl text-base-green-100 ph ph-bookmark-simple"></i>
                        <div>
                            <h3 class="text-sm text-base-gray-300">Categoria</h3>
                            <h2 class="font-bold text-base-gray-200">{{ $this->convertCategories($this->book->categories) }}</h2>
                        </div>
                    </div>
                    <div class="px-1 flex items-center gap-4">
                        <i class="text-2xl text-base-green-100 ph ph-book-open"></i>
                        <div>
                            <h3 class="text-sm text-base-gray-300">Páginas</h3>
                            <h2 class="font-bold text-base-gray-200">{{ $this->book->total_pages }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <div>
            <div class="mx-12 mt-[46px] mb-4 flex justify-between items-center">
                <h2 class="text-base-gray-200 text-sm">Avaliações</h2>
                <button class="py-1 px-2 text-bold text-base-purple-100" wire:click="toggleArea">Avaliar</button>
            </div>

            @if ($this->assessment)
            <div class="flex flex-col gap-3 px-12">

                @if (auth()->check())

                <x-area-user-assessment-book />

                @else

                <x-modal-signin />

                @endif
            </div>
            @endif
        </div>
        <div class="flex flex-col gap-3 px-12">
            @foreach ($this->book->ratings as $rating)
            <x-rating-description :$rating />
            @endforeach
        </div>
        @endif
    </div>
</div>
