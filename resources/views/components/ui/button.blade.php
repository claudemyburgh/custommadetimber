@props([
    'type' => 'button',
    'size' => 'md',
    'variant' => 'primary',
    'icon' => '',
    'rounded' => 'md',
    'disabled' => false,
])

@php
    $baseClasses = "inline-flex items-center justify-center font-medium focus:outline-none transition duration-200";
    $sizeClasses = match ($size) {
        'sm' => 'px-3 py-1 text-sm',
        'md' => $default ??= 'px-4 py-2 text-base',
        'lg' => 'px-6 py-3 text-lg',
        default => 'px-4 py-2 text-base',
    };
    $variantClasses = match ($variant) {
        'primary' => 'bg-blue-600 text-white hover:bg-blue-700',
        'secondary' => 'bg-gray-600 text-white hover:bg-gray-700',
        'danger' => 'bg-red-600 text-white hover:bg-red-700',
        'success' => 'bg-green-600 text-white hover:bg-green-700',
        'outline' => 'border border-gray-300 text-gray-700 hover:bg-gray-100',
        'ghost' => 'text-gray-700 hover:bg-gray-200',
        default => 'bg-gray-600 text-white hover:bg-gray-700',
    };
    $roundedClasses = match ($rounded) {
        'sm' => 'rounded-sm',
        'md' => $default ??='rounded-md',
        'lg' => 'rounded-lg',
        'full' => 'rounded-full',
        default => 'rounded-md',
    };
    $disabledClasses = $disabled ? 'opacity-50 cursor-not-allowed' : '';
@endphp

<button type="{{ $type }}"
        {{ $attributes->merge(['class' => "$baseClasses $sizeClasses $variantClasses $roundedClasses $disabledClasses"]) }}
        @if($disabled) disabled @endif>
    @if($icon)
        <x-dynamic-component :component="$icon" class="mr-2"/>
    @endif
    {{ $slot }}
</button>
