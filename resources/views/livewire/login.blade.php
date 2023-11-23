<div class="w-full flex">
    <div class="w-[598px] h-[912px] bg-bg-logo rounded-[10px] opacity-[0.85] flex justify-center items-center">
        <img class="opacity-90" src="images/logo.svg" alt="Logo">
    </div>
    <div class="flex flex-1 justify-center items-center">
        <div class="w-[327px]">
            <h1 class="font-bold text-2xl text-base-gray-100">Boas vindas!</h1>
            <p class="text-base-gray-200">Faça seu login ou acesse como visitante.</p>
            <div class="mt-10 flex flex-col justify-center items-center w-full gap-4">
                <x-button-login image="google" text="Entrar com Google" />
                <x-button-login image="github" text="Entrar com GitHub" />
                <x-button-login image="rocket" text="Acessar como visitante" />
            </div>
        </div>
    </div>
</div>
