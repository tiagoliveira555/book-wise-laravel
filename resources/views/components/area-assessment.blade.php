@php
    $border = $errors->has('description') ? 'border-red-800' : 'border-base-gray-500';
@endphp

<div
    class="{{ $border }} relative mt-6 mb-3 h-[164px] rounded border bg-base-gray-800 text-sm text-base-gray-400 focus-within:border-base-green-200"
>
    <textarea
        wire:model='description'
        class="resize-none bg-transparent w-full h-full placeholder:text-sm placeholder:text-base-gray-400 border-none outline-none focus:ring-0"
        name="a"
        placeholder="Escreva sua avaliação"
    ></textarea>
    <span class="absolute bottom-1 right-1 text-xs text-base-gray-400"><span x-text="$wire.description.length"></span>/450</span>
</div>
