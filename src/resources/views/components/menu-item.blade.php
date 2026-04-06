@props(['href', 'showBottomBorder' => false])

@php
    $classes =
        'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-xl font-medium text-black hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<div>
    <a {{ $attributes->merge(['class' => $classes]) }} href="{{ $href }}">
        &#9654;&nbsp;{{ $slot }}
    </a>
    @if ($showBottomBorder)
        <div class="mx-2 border-t-2 border-gray-400"></div>
    @endif
</div>
