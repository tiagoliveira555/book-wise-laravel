<div class="flex flex-col rounded-lg mb-3 p-6 bg-base-gray-700">
    <header class="flex justify-between w-full">
        <div class="flex items-center gap-4 flex-1">
            <a href="{{ route('profile') }}" wire:navigate class="h-10 w-10 flex justify-center items-center bg-gradient-vertical rounded-full cursor-pointer">
                <img class="rounded-full w-9 h-9" src="{{ auth()->user()->avatar_url }}" alt="{{ auth()->user()->name }}">
            </a>
            <span class="font-bold text-base-gray-100">{{ auth()->user()->name }}</span>
        </div>
        <ul class="flex justify-center items-center gap-1 text-base-purple-100">
            <li class="text-[28px]"><i class="ph ph-star"></i></li>
            <li class="text-[28px]"><i class="ph ph-star"></i></li>
            <li class="text-[28px]"><i class="ph ph-star"></i></li>
            <li class="text-[28px]"><i class="ph ph-star"></i></li>
            <li class="text-[28px]"><i class="ph ph-star"></i></li>
        </ul>
    </header>

    <x-area-assessment />

    <div class="flex justify-end items-center gap-2">
        <x-button-square
            icon='x'
            wire:click="toggleArea"
        />
        <x-button-square
            icon='check'
            wire:click='saveRating'
        />
    </div>
</div>
