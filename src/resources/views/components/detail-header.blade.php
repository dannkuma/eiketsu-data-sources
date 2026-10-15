@props(['title'])

<div class="flex justify-between items-center py-2">
    <div class="flex-1"></div>
    <div
        class="flex justify-center items-center mx-auto w-[26rem] text-2xl text-white border-solid border-brand-detail-title-border border rounded-md px-8 py-2">
        {{ $title }}
    </div>
    <div class="flex-1 flex justify-end">
        <button
            class="bg-black text-3xl text-white border-solid border-white border rounded-md px-1 btn-pushable">&times;</button>
    </div>
</div>
