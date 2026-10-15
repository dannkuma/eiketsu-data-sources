@props(['name', 'currentValue'])

<div {{ $attributes->merge(['class' => 'flex items-center']) }}>
    <label class="cursor-pointer">
        <input type="radio" name="{{ $name }}" value="or" @checked($currentValue === 'or') class="peer sr-only">
        <span
            class="btn-pushable flex h-6 w-18 items-center justify-center rounded-l-full border border-r border-white bg-brand-sort-detail-toggle-unselected px-4 py-2 text-sm text-white transition peer-checked:bg-brand-sort-detail-button-selected peer-checked:text-black">
            OR
        </span>
    </label>
    <label class="cursor-pointer">
        <input type="radio" name="{{ $name }}" value="and" @checked($currentValue === 'and') class="peer sr-only">
        <span
            class="btn-pushable flex h-6 w-18 items-center justify-center rounded-r-full border border-l-0 border-white bg-brand-sort-detail-toggle-unselected px-4 py-2 text-sm text-white transition peer-checked:bg-brand-sort-detail-button-selected peer-checked:text-black">
            AND
        </span>
    </label>
</div>
