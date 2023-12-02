<div class="flex">
    <div class="w-[624px] ml-24 mr-16">
        <header class="mt-[52px] mb-10 flex flex-col gap-10">
            @if (auth()->check() && $this->user)
            <div class="w-36 flex items-center gap-3">

                @if (auth()->user()->id === $this->user->id)
                    <i class="text-3xl text-base-green-100 ph ph-user"></i>
                    <h2 class="text-base-gray-100 text-2xl font-bold">Perfil</h2>
                @else
                    <a
                        href="{{ route('home') }}" wire:navigate
                        class="py-1 px-2 flex items-center gap-3 text-base-gray-200 "
                    >
                        <i class="text-xl ph ph-caret-left"></i>
                        <h2 class="font-bold">Voltar</h2>
                    </a>
                @endif

            </div>
            @endif
            <div class="w-full h-12 rounded py-[14px] px-5 border border-base-gray-500 focus-within:border-base-green-200 flex justify-between items-center transition-all">
                <input class="flex-1 bg-transparent text-base-gray-200 text-sm outline-none border-none focus:ring-0 placeholder:text-base-gray-400 peer" type="text" placeholder="Buscar livro avaliado">
                <i class="text-xl text-base-gray-500 ph ph-magnifying-glass peer-focus:text-base-green-200"></i>
            </div>
        </header>
        <div class="flex flex-col h-[715px] rounded pb-10 gap-6 overflow-auto scrollbar-hide">


        @if ($this->user)
            @foreach ($user->ratings->sortByDesc('created_at') as $rating)
                <x-card-profile-rating :$rating />
            @endforeach
        @endif

        </div>
    </div>


    @if($this->user)
    <div class="w-[308px] mt-[126px] flex flex-col items-center gap-8">
        <div class="flex flex-col items-center gap-5">
            <div class="h-[72px] w-[72px] flex justify-center items-center bg-gradient-vertical rounded-full">
                <img class="rounded-full w-[68px] h-[68px]"
                src="{{ $user->avatar_url }}"
                alt="{{ $user->name }}"
            >
            </div>
            <div class="flex flex-col items-center">
                <h2 class="text-base-gray-100 text-xl font-bold">{{ $user->name }}</h2>
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
    @endif
</div>
