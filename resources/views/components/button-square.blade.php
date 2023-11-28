@props(['icon'])

<button
    {{ $attributes->class([
        'flex justify-center items-center p-2 rounded bg-base-gray-600 text-2xl hover:bg-base-gray-500 transition-all',
        'text-base-green-100' => $icon === 'check',
        'text-base-purple-100' => $icon === 'x'
    ]) }}
>
    <i class="ph ph-{{ $icon }}"></i>
</button>
