@props([
    'rate' => 0,
    'isEditable' => false
])

<ul
    x-data="{
        rating: {{ $rate }},
        isEditable: {{ $isEditable ? 'true' : 'false' }},
        previewValue: this.isEditable ? 0 : {{ $rate }},
        handleMouseEnter(value) {
            if(this.isEditable) this.previewValue = value
        },
        handleMouseLeave() {
            if(this.isEditable) this.previewValue = this.rating
        },
        handleRate() {
            this.rating = this.previewValue
        }
    }"

    class="flex justify-center items-center gap-1 text-base-purple-100"
    x-bind:class="{ 'cursor-pointer': isEditable }"
>
    @foreach (range(1, 5) as $index)
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

