<div wire:key="{{ $rating->id }}" class="mt-3 bg-base-gray-700 rounded-lg p-6">
    <div class="flex justify-between items-start">
        <div class="flex gap-4">
            <a href="{{ route('profile', ['id' => $rating->user->id]) }}" wire:navigate class="h-10 w-10 flex justify-center items-center bg-gradient-vertical rounded-full cursor-pointer">
                <img class="rounded-full w-9 h-9" src="{{ $rating->user->avatar_url }}" alt="{{ $rating->user->name }}">
            </a>
            <div>
                <h3 class="text-base-gray-100">{{ $rating->user->name }}</h3>
                <h4 class="text-sm text-base-gray-400">{{ $this->convertDateForHumans($rating->created_at) }}</h4>
            </div>
        </div>

        <x-rating-stars rate="{{ $rating->rate }}" />

    </div>
    <div class="mt-8 flex gap-5">
        <img
            class="w-[108px] h-[152px]"
            src="{{ $rating->book->cover_url }}"
            alt="{{ $rating->book->name }}"
        >
        <div>
            <h2 class="font-bold text-base-gray-100">{{ $rating->book->name }}</h2>
            <h3 class="text-sm text-base-gray-400">{{ $rating->book->author }}</h3>
            <p class="mt-5 text-base-gray-300 text-sm leading-[22px]">{{ $rating->book->summary }}</p>
        </div>
    </div>
</div>
