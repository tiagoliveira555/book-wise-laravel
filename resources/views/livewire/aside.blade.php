<aside class="bg-sidebar-bg h-[912px] w-[232px] flex flex-col rounded-xl">
    <img class="mt-10 mx-[52px] opacity-90" src="images/logo-min.svg" alt="Logo">
    <div class="flex flex-col justify-between h-full">
        <div class="flex flex-col gap-4 ml-12 mt-16">

            <x-link-aside id="/" icon="chart-line-up" text="Início" />
            <x-link-aside id="explorer" icon="binoculars" text="Explorar" />

            @if (auth()->check())
                <x-link-aside id="perfil" icon="user" text="Perfil" />
            @endif

        </div>
        @if (auth()->check())
        <div class="flex items-center justify-center gap-3 mb-6">
            <a href="{{ route('perfil') }}" wire:navigate class="h-8 w-8 flex justify-center items-center bg-gradient-vertical rounded-full cursor-pointer">
                <img class="rounded-full w-[30px] h-[30px]" src="{{ auth()->user()->avatar_url }}" alt="{{ auth()->user()->name }}">
            </a>
            <span class="text-sm text-base-gray-200 truncate max-w-[90px]">{{ auth()->user()->name }}</span>
            <button wire:click="logout" class="p-1 rounded gap-3 flex justify-center items-center">
                <i class="text-xl text-rose-500 ph ph-sign-out"></i>
            </button>
        </div>

        @else
        <div class="flex items-center justify-center gap-3 mb-6">
            <span class="text-sm text-base-gray-200 truncate max-w-[90px] font-bold">Fazer login</span>
            <a href="{{ route('login') }}" wire:navigate class="p-1 rounded gap-3 flex justify-center items-center cursor-pointer">
                <i class="text-xl text-base-green-100 ph ph-sign-in"></i>
            </a>
        </div>
        @endif
    </div>
</aside>
