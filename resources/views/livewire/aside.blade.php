<aside class="bg-sidebar-bg h-[912px] w-[232px] flex flex-col rounded-xl">
    <img class="mt-10 mx-[52px] opacity-90" src="images/logo-min.svg" alt="Logo">
    <div class="flex flex-col justify-between h-full">
        <div class="flex flex-col gap-4 ml-12 mt-16">
            <label for="home" class="flex items-center cursor-pointer transition-all">
                <input class="peer hidden" type="radio" id="home" name="links" checked>
                <div class="w-1 h-6 bg-gradient-vertical rounded-full opacity-0 peer-checked:opacity-100"></div>
                <div class="py-2 ml-4 flex items-center gap-3 text-base-gray-400 hover:text-base-gray-100 peer-checked:text-base-gray-100 peer-checked:font-bold">
                    <i class="text-icon ph ph-chart-line-up"></i>
                    <span>Início</span>
                </div>
            </label>
            <label for="explorer" class="flex items-center cursor-pointer transition-all">
                <input class="peer hidden" type="radio" id="explorer" name="links">
                <div class="w-1 h-6 bg-gradient-vertical rounded-full opacity-0 peer-checked:opacity-100"></div>
                <div class="py-2 ml-4 flex items-center gap-3 text-base-gray-400 hover:text-base-gray-100 peer-checked:text-base-gray-100 peer-checked:font-bold">
                    <i class="text-2xl ph ph-binoculars"></i>
                    <span>Explorar</span>
                </div>
            </label>
            <label for="perfil" class="flex items-center cursor-pointer transition-all">
                <input class="peer hidden" type="radio" id="perfil" name="links">
                <div class="w-1 h-6 bg-gradient-vertical rounded-full opacity-0 peer-checked:opacity-100"></div>
                <div class="py-2 ml-4 flex items-center gap-3 text-base-gray-400 hover:text-base-gray-100 peer-checked:text-base-gray-100 peer-checked:font-bold">
                    <i class="text-2xl ph ph-user"></i>
                    <span>Perfil</span>
                </div>
            </label>
        </div>
        <div class="flex items-center justify-center gap-3 mb-6">
            <div class="bg-gradient-vertical h-8 w-8 flex justify-center items-center border rounded-full">

            </div>
            <span class="text-sm text-base-gray-200 truncate max-w-[90px]">Tiago Oliveira da Conceição</span>
            <button class="p-1 rounded gap-3 flex justify-center items-center">
                <i class="text-xl text-rose-500 ph ph-sign-in"></i>
            </button>
        </div>
    </div>
</aside>
