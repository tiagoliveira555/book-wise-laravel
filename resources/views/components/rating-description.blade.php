@php
    $bg = 'bg-base-gray-700';

    if (auth()->check()) {
        if ($rating->user_id === auth()->user()->id) {
            $bg = 'bg-base-gray-600';
        }
    }
@endphp

<div wire:key="{{ $rating->id }}" class="{{ $bg }} flex flex-col gap-5 p-6 rounded-lg">
    <div class="flex justify-between items-start gap-4">
        <div class="flex gap-4">
            <a href="{{ route('profile', ['id' => $rating->user->id]) }}" wire:navigate class="h-10 w-10 flex justify-center items-center bg-gradient-vertical rounded-full cursor-pointer">
                <img class="rounded-full w-9 h-9" src="{{ $rating->user->avatar_url }}" alt="{{ $rating->user->name }}">
            </a>
            <div>
                <h2 class="text-base-gray-100 font-bold">{{ $rating->user->name }}</h2>
                <h3 class="text-sm text-base-gray-400">{{ $rating->created_at->diffForHumans() }}</h3>
            </div>
        </div>

        <x-rating-stars rate="{{ $rating->rate }}" />

    </div>
    <p class="truncate text-base-gray-300 text-sm">{{ $rating->description }}</p>
</div>
