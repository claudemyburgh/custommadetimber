@php
    $classes = "shadow-sm bg-white dark:bg-gray-800/90 dark:border-gray-800 focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-gray-100/50 rounded-default focus:bg-gray-50/50 dark:focus:bg-gray-800/90";
@endphp

<div class="mt-1">
    <input {{ $attributes->merge([
    'id' => $id,
    'class' => $classes,
    'name' => $name,
    'value' => old($name),
   ...$attributes
    ]) }}">
</div>
