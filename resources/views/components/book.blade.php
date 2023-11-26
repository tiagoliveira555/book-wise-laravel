<button x-on:click="open = true" class="flex rounded-lg py-4 px-5 gap-5 bg-base-gray-700 border-2 border-transparent hover:border-base-gray-600 transition-all">
    <img
        class="w-[108px] h-[152px]"
        :src="book.cover_url"
        :alt="book.name"
    >
    <div class="w-full h-full text-start flex flex-col justify-between items-start">
        <div>
            <h2 class="font-bold text-base-gray-100" x-text="book.name"></h2>
            <h3 class="text-sm text-base-gray-400" x-text="book.author"></h3>
        </div>
        <ul class="flex justify-center items-center gap-1 text-base-purple-100">
            <li><i class="ph-fill ph-star"></i></li>
            <li><i class="ph-fill ph-star"></i></li>
            <li><i class="ph-fill ph-star"></i></li>
            <li><i class="ph-fill ph-star"></i></li>
            <li><i class="ph ph-star"></i></li>
        </ul>
    </div>
</button>
