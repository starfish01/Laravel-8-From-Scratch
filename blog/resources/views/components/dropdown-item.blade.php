@props(['active' => false])
{{--                    {{ isset($currentCategory) && $currentCategory->is($category) ? 'bg-blue-500 text-white' : '' }}--}}

@php
    $classes = 'block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white';
    if ($active) $classes .= ' bg-blue-500 text-white';
@endphp


<a {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}</a>
