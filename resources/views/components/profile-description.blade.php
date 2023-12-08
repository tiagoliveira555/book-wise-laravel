@props([
    'icon',
    'content',
    'label'
])

<div class="flex gap-5">
    <div class="text-[32px] text-base-green-100">
        <i class="ph ph-{{ $icon }}"></i>
    </div>
    <div class="flex flex-col">
        <strong class="text-base-gray-200 font-bold">{{ $content }}</strong>
        <span class="text-base-gray-300 text-sm">{{ $label }}</span>
    </div>
</div>
