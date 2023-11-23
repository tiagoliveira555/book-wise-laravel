@props(['image', 'text'])

<a {{ $attributes->class(["bg-base-gray-600 w-full py-5 px-6 rounded-lg flex items-center gap-5 cursor-pointer border-2 border-transparent hover:border-base-gray-500 transition-all"]) }}>
    <img src="images/icons/{{ $image }}.svg" alt="{{ $image }}">
    <span class="text-lg text-base-gray-200 font-bold">{{ $text }}</span>
</a>
