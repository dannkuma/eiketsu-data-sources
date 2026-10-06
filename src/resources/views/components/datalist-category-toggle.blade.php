{{-- TODO: 各ボタンのonclick="location.href='{{route()}}'を追加する --}}
@props(['type'])
@php
    $selected = 'text-white bg-brand-datalist-category-selected disabled';
    $isGeneral = $type === 'general';
    $isHeirloom = $type === 'heirloom';
    $isSoul = $type === 'soul';
@endphp
<div class="flex justify-center items-center py-4">
    <div class="flex justify-around items-center w-3/4">
        <button
            class="w-32 flex justify-start items-center btn-pushable border-brand-datalist-category-border border-2 {{ $isGeneral ? $selected : '' }}"
            {{ $isGeneral ? 'disabled' : '' }}>
            <span class="w-2/3 text-2xl">武将</span>
            <img class="block w-1/3 h-9 mr-4" src="{{ asset('images/datalist_categories/general.png') }}"
                alt="datalistCategoryGeneral">
        </button>
        <button
            class="w-32 flex justify-start items-center btn-pushable border-brand-datalist-category-border border-2 {{ $isHeirloom ? $selected : '' }}"
            {{ $isHeirloom ? 'disabled' : '' }}>
            <span class="w-2/3 text-2xl">戦器</span>
            <img class="block w-1/3 h-9 mr-4" src="{{ asset('images/datalist_categories/heirloom.png') }}"
                alt="datalistCategoryHeirloom">
        </button>
        <button
            class="w-32 flex justify-start items-center btn-pushable border-brand-datalist-category-border border-2 {{ $isSoul ? $selected : '' }}"
            {{ $isSoul ? 'disabled' : '' }}>
            <span class="w-2/3 text-2xl">英魂</span>
            <img class="block w-1/3 h-9 mr-4" src="{{ asset('images/datalist_categories/soul.png') }}"
                alt="datalistCategorySoul">
        </button>
    </div>
</div>
