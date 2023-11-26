<div class="flex">
    <div class="w-[608px] h-[930px] pb-8 rounded ml-24 mr-16 overflow-auto scrollbar-hide">
        <header class="mt-[52px]">
            <div class="w-36 flex items-center gap-3">
                <i class="text-3xl text-base-green-100 ph ph-chart-line-up"></i>
                <h2 class="text-base-gray-100 text-2xl font-bold">Início</h2>
            </div>
        </header>

        @if (count($this->authLastRating) > 0)
        <section class="mt-10">
            <div class="flex justify-between items-center">
                <h3 class="text-base-gray-100 text-sm">Sua última leitura</h3>
                <a href="#" class="flex items-center gap-2 py-1 px-2 rounded text-base-purple-100">
                    <span class="font-bold">Ver todas</span>
                    <i class="text-lg ph ph-caret-right"></i>
                </a>
            </div>
            <x-auth-last-review />
        </section>
        @endif

        <section class="mt-10">
            <h3 class="text-sm text-base-gray-100 mb-1">Avaliações mais recentes</h3>

            @foreach ($ratings as $rating)
                <x-latest-reviews wire:key="{{ $rating->id }}" :$rating />
            @endforeach

        </section>

    </div>
    <div class="w-[324px]">
        <header class="flex justify-between items-center mt-[126px] mb-5">
            <h3 class="text-base-gray-100 text-sm">Livros populares</h3>
            <a href="{{ route('explore') }}" wire:navigate class="flex items-center gap-2 py-1 px-2 rounded text-base-purple-100">
                <span class="font-bold">Ver todos</span>
                <i class="text-lg ph ph-caret-right"></i>
            </a>
        </header>

        @foreach ($this->popularBooks as $popularBook)
            <x-popular-book wire:key="{{ $popularBook->id }}" :$popularBook />
        @endforeach

    </div>
</div>
