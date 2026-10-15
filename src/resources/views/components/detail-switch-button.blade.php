@props(['direction', 'link' => '#'])
@php
    $radius = $direction === 'prev' ? 'rounded-l-lg' : 'rounded-r-lg';
@endphp

<div class="bg-brand-detail-switch-button {{ $radius }}">
    <form method="GET" action="{{ $link }}">
        <button type="submit"
            class="btn-pushable h-[52rem] w-20 text-white text-4xl {{ $radius }} active:opacity-65">
            {!! $direction === 'prev' ? '&Lt;' : '&Gt;' !!}
        </button>
    </form>
</div>
