@php
    $classes = "shadow-sm bg-white dark:bg-gray-800/90 dark:border-gray-800 focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-gray-100/50 rounded-default focus:bg-gray-50/50 dark:focus:bg-gray-800/90";
@endphp

<div class="mt-1" xmlns="http://www.w3.org/1999/html">
    <textarea {{ $attributes->merge([
    'class' => $classes,
    'name' => $fallback,
    'rows' => $rows,
    'cols' => $cols,
    'id' => $fallback,
    ...$attributes
    ]) }}> {{ old($name) }} </textarea>
</div>



