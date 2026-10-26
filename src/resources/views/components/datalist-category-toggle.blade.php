{{-- TODO: 各ボタンのonclick="location.href='{{route()}}'を追加する --}}
@props(['type'])
@php
    $selected = 'text-white bg-brand-datalist-category-selected disabled';
    $isGeneral = $type === 'general';
    $isHeirloom = $type === 'heirloom';
    $isSoul = $type === 'soul';
@endphp
<div class="flex items-center justify-center py-4">
    <div class="flex w-3/4 items-center justify-around">
        <button
            class="btn-pushable {{ $isGeneral ? $selected : '' }} flex w-32 items-center justify-start border-2 border-brand-datalist-category-border"
            {{ $isGeneral ? 'disabled' : '' }}>
            <span class="w-2/3 text-2xl">武将</span>
            <img class="mr-4 block h-9 w-1/3" src="{{ asset('images/datalist_categories/general.png') }}"
                alt="datalistCategoryGeneral">
        </button>
        <button
            class="btn-pushable {{ $isHeirloom ? $selected : '' }} flex w-32 items-center justify-start border-2 border-brand-datalist-category-border"
            {{ $isHeirloom ? 'disabled' : '' }}>
            <span class="w-2/3 text-2xl">戦器</span>
            <img class="mr-4 block h-9 w-1/3" src="{{ asset('images/datalist_categories/heirloom.png') }}"
                alt="datalistCategoryHeirloom">
        </button>
        <button
            class="btn-pushable {{ $isSoul ? $selected : '' }} flex w-32 items-center justify-start border-2 border-brand-datalist-category-border"
            {{ $isSoul ? 'disabled' : '' }}>
            <span class="w-2/3 text-2xl">英魂</span>
            <img class="mr-4 block h-9 w-1/3" src="{{ asset('images/datalist_categories/soul.png') }}"
                alt="datalistCategorySoul">
        </button>
    </div>
</div>
