<div class="flex">
    <div class="w-[608px] h-[930px] pb-8 rounded
                min-[1366px]:ml-24 min-[1366px]:mr-16
                min-[1288px]:ml-16 min-[1288px]:mr-8
                xl:ml-16 xl:mr-8
                lg:ml-10 lg:mr-8
                md:ml-10
                sm:ml-10
                max-[1280px]:w-full
                overflow-auto scrollbar-hide">
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
                <x-latest-reviews :$rating />
            @endforeach

        </section>

    </div>
    <div class="w-[324px] max-[1280px]:hidden">
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
