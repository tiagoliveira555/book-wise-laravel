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
            <div class="mt-5 py-5 px-6 rounded-lg flex items-center gap-6 bg-base-gray-600">
                <img
                    class="w-[108px] h-[152px]"
                    src="{{ $this->authLastRating['book']['cover_url'] }}"
                    alt="{{ $this->authLastRating['book']['name'] }}"
                >
                <div class="w-full">
                    <div class="flex justify-between items-center">
                        <span class="text-base-gray-300 text-sm">{{ $this->authLastRating['rating_date'] }}</span>
                        <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                            <li><i class="ph-fill ph-star"></i></li>
                            <li><i class="ph-fill ph-star"></i></li>
                            <li><i class="ph-fill ph-star"></i></li>
                            <li><i class="ph-fill ph-star"></i></li>
                            <li><i class="ph ph-star"></i></li>
                        </ul>
                    </div>
                    <h2 class="mt-3 font-bold text-base-gray-100">{{ $this->authLastRating['book']['name'] }}</h2>
                    <h3 class="text-base-gray-400 text-sm">{{ $this->authLastRating['book']['author'] }}</h3>
                    <p class="mt-6 text-sm text-base-gray-300">{{ $this->authLastRating['book']['summary'] }}</p>
                </div>
            </div>
        </section>
        @endif

        <section class="mt-10">
            <h3 class="text-sm text-base-gray-100 mb-1">Avaliações mais recentes</h3>

            @foreach ($this->ratings as $rating)
                <x-latest-reviews :$rating />
            @endforeach

        </section>

    </div>
    <div class="w-[324px]">
        <header class="flex justify-between items-center mt-[126px] mb-5">
            <h3 class="text-base-gray-100 text-sm">Livros populares</h3>
            <a href="#" class="flex items-center gap-2 py-1 px-2 rounded text-base-purple-100">
                <span class="font-bold">Ver todas</span>
                <i class="text-lg ph ph-caret-right"></i>
            </a>
        </header>
        <div class="mt-3 flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700">
            <img
                class="w-16 h-[94px]"
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
        <div class="mt-3 flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700">
            <img
                class="w-16 h-[94px]"
                src="images/books/14-habitos-de-desenvolvedores-altamente-produtivos.png"
                alt="14 Hábitos de Desenvolvedores Alta..."
            >
            <div class="flex flex-col justify-between items-start">
                <div>
                    <h2 class="font-bold text-base-gray-100">14 Hábitos de Desenvolvedores Alta...</h2>
                    <h3 class="text-sm text-base-gray-400">Zeno Rocha</h3>
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
        <div class="mt-3 flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700">
            <img
                class="w-16 h-[94px]"
                src="images/books/o-fim-da-eternidade.png"
                alt="O Fim da Eternidade"
            >
            <div class="flex flex-col justify-between items-start">
                <div>
                    <h2 class="font-bold text-base-gray-100">O Fim da Eternidade</h2>
                    <h3 class="text-sm text-base-gray-400">Isaac Asimov</h3>
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
        <div class="mt-3 flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700">
            <img
                class="w-16 h-[94px]"
                src="images/books/entendendo-algoritmos.png"
                alt="Entendendo Algoritmos"
            >
            <div class="flex flex-col justify-between items-start">
                <div>
                    <h2 class="font-bold text-base-gray-100">Entendendo Algoritmos</h2>
                    <h3 class="text-sm text-base-gray-400">Aditya Bhargava</h3>
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
    </div>
</div>
