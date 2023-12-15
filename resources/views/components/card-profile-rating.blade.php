<div class="flex flex-col gap-2">
    <span class="text-base-gray-300 text-sm">{{ $rating->created_at->diffForHumans() }}</span>
    <div class="bg-base-gray-700 rounded-lg p-6 flex flex-col gap-6 w-full break-words">
        <div class="flex gap-6">
            <img class="w-[98px] h-[134px] rounded" src="{{ $rating->book->cover_url }}" alt="{{ $rating->book->name }}">
            <div class="flex flex-col justify-between">
                <div>
                    <h2 class="text-lg font-bold text-base-gray-100">{{ $rating->book->name }}</h2>
                    <h3 class="text-sm text-base-gray-400">{{ $rating->book->author }}</h3>
                </div>
                <x-rating-stars rate="{{ $rating->rate }}" />
            </div>
        </div>
        <p class="text-base-gray-300 text-sm">{{ $rating->description }}</p>
    </div>
</div>
