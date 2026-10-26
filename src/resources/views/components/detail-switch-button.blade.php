@props(['direction', 'link' => '#'])
@php
    $radius = $direction === 'prev' ? 'rounded-l-lg' : 'rounded-r-lg';
@endphp

<div class="{{ $radius }} bg-brand-detail-switch-button">
    <form method="GET" action="{{ $link }}">
        <button type="submit"
            class="btn-pushable {{ $radius }} h-[52rem] w-20 text-4xl text-white active:opacity-65">
            {!! $direction === 'prev' ? '&Lt;' : '&Gt;' !!}
        </button>
    </form>
</div>
