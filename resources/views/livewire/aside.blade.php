<aside class="bg-sidebar-bg h-[912px] w-[232px] flex flex-col rounded-xl">
    <img class="mt-10 mx-[52px] opacity-90" src="images/logo-min.svg" alt="Logo">
    <div class="flex flex-col justify-between h-full">
        <div class="flex flex-col gap-4 ml-12 mt-16">

            <x-link-aside id="/" icon="chart-line-up" text="Início" />
            <x-link-aside id="explore" icon="binoculars" text="Explorar" />

            @if (auth()->check())
                <x-link-aside id="profile" icon="user" text="Perfil" />
            @endif

        </div>
        @if (auth()->check())
            <x-profile-signout />
        @else
            <x-signin />
        @endif
    </div>
</aside>
