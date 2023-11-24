<div class="flex items-center justify-center gap-3 mb-6">
    <a href="{{ route('profile') }}" wire:navigate class="h-8 w-8 flex justify-center items-center bg-gradient-vertical rounded-full cursor-pointer">
        <img class="rounded-full w-7 h-7" src="{{ auth()->user()->avatar_url }}" alt="{{ auth()->user()->name }}">
    </a>
    <span class="text-sm text-base-gray-200 truncate max-w-[90px]">{{ auth()->user()->name }}</span>
    <button wire:click="logout" class="p-1 rounded gap-3 flex justify-center items-center">
        <i class="text-xl text-rose-500 ph ph-sign-out"></i>
    </button>
</div>
