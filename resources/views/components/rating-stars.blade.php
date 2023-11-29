@props([
    'rate' => 0,
    'isEditable' => false,
    'color' => 'text-base-purple-100'
])

<ul
    x-data="{
        rating: {{ $rate }},
        isEditable: {{ $isEditable ? 'true' : 'false' }},
        previewValue: {{ $rate }},
        handleMouseEnter(value) {
            if(this.isEditable) this.previewValue = value
        },
        handleMouseLeave() {
            if(this.isEditable) this.previewValue = this.rating
        },
        handleRate() {
            this.rating = this.previewValue
            $wire.rate = this.rating
        },
    }"
    class="{{ $color }} flex justify-center items-center gap-1"
    x-bind:class="{ 'cursor-pointer': isEditable }"
>
    @foreach ([1, 2, 3, 4, 5] as $index)
    <li
        x-bind:class="{ 'text-[28px]': isEditable }"
    >
        <i
            class="ph-star"
            x-bind:class="{ 'ph-fill': {{ $index }} <= previewValue, 'ph': {{ $index }} > previewValue }"
            x-on:mouseenter="handleMouseEnter({{ $index }})"
            x-on:mouseleave="handleMouseLeave"
            x-on:click="handleRate"
        >
        </i>
    </li>
    @endforeach
</ul>
