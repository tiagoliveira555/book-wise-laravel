@props(['name'])

<label for="{{ $name }}" class="cursor-pointer">
    <input wire:model.live="filterCategory" class="peer hidden" type="radio" id="{{ $name }}" name="filter" value="{{ $name === 'Tudo' ? '' : $name }}" @if ($name === 'Tudo') checked @endif>
    <div
        class="peer-checked:bg-base-purple-200 peer-checked:text-base-gray-100 peer-checked:border-transparent peer-checked:hover:border-base-purple-100 py-1 px-4 rounded-full text-center text-base-purple-100 border border-base-purple-100 hover:border-base-purple-100 transition-all"
    >
        {{ $name }}
    </div>
</label>
