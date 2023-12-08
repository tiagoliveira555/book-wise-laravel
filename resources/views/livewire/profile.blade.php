<div class="flex max-[1280px]:flex-col-reverse max-[1280px]:items-center">
    <div class="w-[624px] ml-24 mr-16">
        <header class="mt-[52px] max-[1280px]:mt-0 mb-10 flex flex-col gap-10">
            @if ($this->user)
            <div class="w-36 flex items-center gap-3">

                @if (auth()->check() && auth()->user()->id === $this->user->id)
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
                <input wire:model.live.debounce.500ms="bookFilter" class="flex-1 bg-transparent text-base-gray-200 text-sm outline-none border-none focus:ring-0 placeholder:text-base-gray-400 peer" type="text" placeholder="Buscar livro avaliado">
                <i class="text-xl text-base-gray-500 ph ph-magnifying-glass peer-focus:text-base-green-200"></i>
            </div>
        </header>
        <div class="flex flex-col h-[715px] max-[1280px]:w-full rounded pb-10 gap-6 overflow-auto scrollbar-hide">


        @if ($this->user)
            @if (count($this->user->ratings) !== 0)


                @foreach ($this->searchBook($this->user) as $rating)
                    <x-card-profile-rating :$rating />
                @endforeach


            @else
                <p class="text-base-gray-100">
                    Nenhum livro avaliado
                    <a
                        href="{{ route('explore') }}"
                        wire:navigate
                        class="font-bold underline"
                    >
                        clique aqui
                    </a>
                    e avalie.
                </p>
            @endif
        @endif

        </div>
    </div>


    @if($this->user)
    <div class="w-[308px] mt-[126px] flex flex-col items-center gap-8 max-[1280px]:mt-5">
        <div class="flex flex-col items-center gap-5">
            <div class="h-[72px] w-[72px] flex justify-center items-center bg-gradient-vertical rounded-full">
                <img class="rounded-full w-[68px] h-[68px]"
                src="{{ $user->avatar_url }}"
                alt="{{ $user->name }}"
            >
            </div>
            <div class="flex flex-col items-center">
                <h2 class="text-base-gray-100 text-xl font-bold">{{ $user->name }}</h2>
                <h3 class="text-base-gray-400 text-sm">membro desde <span>{{ $this->getYear($user->created_at) }}</span></h3>
            </div>
        </div>
        <div class="py-2">
            <hr class="h-1 w-8 bg-gradient-horizontal rounded-full">
        </div>
        <div class="pb-5 px-14 flex flex-col gap-8 max-[1280px]:hidden">

            <x-profile-description icon="book-open" content="{{ $this->getCountReadingPage($user) }}" label="Páginas lidas" />
            <x-profile-description icon="books" content="{{ $this->getCountAvaliabledBooks($user) }}" label="Livros avaliados" />
            <x-profile-description icon="user-list" content="{{ $this->getCountAvaliabledBooks($user) }}" label="Autores lidos" />
            <x-profile-description icon="bookmark-simple" content="{{ $this->getMostCategory($user) }}" label="Categoria mais lida" />

        </div>
    </div>
    @endif
</div>
