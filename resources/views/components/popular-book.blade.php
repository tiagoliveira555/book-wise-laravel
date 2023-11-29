<div wire:key="{{ $popularBook->id }}" class="mt-3 flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700">
    <img
        class="w-16 h-[94px]"
        src="{{ $popularBook->cover_url }}"
        alt="{{ $popularBook->name }}"
    >
    <div class="flex flex-col justify-between items-start">
        <div>
            <h2 class="font-bold text-base-gray-100">{{ $popularBook->name }}</h2>
            <h3 class="text-sm text-base-gray-400">{{ $popularBook->author }}</h3>
        </div>

        <x-rating-stars rate="{{ $this->ratingAverage($popularBook->ratings) }}" />
    </div>
</div>
