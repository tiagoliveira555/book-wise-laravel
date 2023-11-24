@props([
    'id' => null,
    'text' => null,
    'icon' => null,
])

<a href="{{ route($id === '/' ? 'home' : $id) }}" wire:navigate >
    <label for="{{ $id }}" class="flex items-center cursor-pointer transition-all">
        <input class="peer hidden" type="radio" id="{{ $id }}" name="links" @if ($id === $this->page) checked @endif>
        <div class="w-1 h-6 bg-gradient-vertical rounded-full opacity-0 peer-checked:opacity-100"></div>
        <div class="py-2 ml-4 flex items-center gap-3 text-base-gray-400 hover:text-base-gray-100 peer-checked:text-base-gray-100 peer-checked:font-bold">
            <i class="text-icon ph ph-{{ $icon }}"></i>
            <span>{{ $text }}</span>
        </div>
    </label>
</a>
