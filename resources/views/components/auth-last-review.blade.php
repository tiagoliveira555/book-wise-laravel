<div class="mt-5 py-5 px-6 rounded-lg flex items-center gap-6 bg-base-gray-600">
    <img
        class="w-[108px] h-[152px]"
        src="{{ $this->authLastRating['book']['cover_url'] }}"
        alt="{{ $this->authLastRating['book']['name'] }}"
    >
    <div class="w-full">
        <div class="flex justify-between items-center">
            <span class="text-base-gray-300 text-sm">{{ $this->authLastRating['rating_date'] }}</span>
            <ul class="flex justify-center items-center gap-1 text-base-purple-100">
                <li><i class="ph-fill ph-star"></i></li>
                <li><i class="ph-fill ph-star"></i></li>
                <li><i class="ph-fill ph-star"></i></li>
                <li><i class="ph-fill ph-star"></i></li>
                <li><i class="ph ph-star"></i></li>
            </ul>
        </div>
        <h2 class="mt-3 font-bold text-base-gray-100">{{ $this->authLastRating['book']['name'] }}</h2>
        <h3 class="text-base-gray-400 text-sm">{{ $this->authLastRating['book']['author'] }}</h3>
        <p class="mt-6 text-sm text-base-gray-300">{{ $this->authLastRating['book']['summary'] }}</p>
    </div>
</div>
