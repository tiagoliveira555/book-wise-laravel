@props(['image', 'text'])

<a href="#" class="bg-base-gray-600 w-full py-5 px-6 rounded-lg flex items-center gap-5 cursor-pointer">
    <img src="images/icons/{{ $image }}.svg" alt="{{ $image }}">
    <span class="text-lg text-base-gray-200 font-bold">{{ $text }}</span>
</a>
