<div>
    <div wire:click="toggleArea" class="fixed inset-0 w-full h-full opacity-60 blur-sm bg-black"></div>
    <div class="fixed inset-0 m-auto w-0 h-0 flex justify-center items-center">
        <div class="relative bg-base-gray-700 rounded-xl py-14 px-[72px] flex flex-col justify-center items-center gap-10">
            <button class="absolute top-6 right-6 text-base-gray-400" wire:click="toggleArea">
                <i class="text-xl ph ph-x"></i>
            </button>
            <h2 class="text-base-gray-200 font-bold">Faça login para deixar sua avaliação</h2>
            <div class="flex flex-col gap-4 w-[372px]">
                <x-button-login href="{{ route('auth.social', [ 'driver' => 'google' ]) }}" image="google" text="Entrar com Google" />
                <x-button-login href="{{ route('auth.social', [ 'driver' => 'github' ]) }}" image="github" text="Entrar com GitHub" />
            </div>
        </div>
    </div>
</div>
