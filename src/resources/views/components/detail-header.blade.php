@props(['title'])

<div class="flex items-center justify-between py-2">
    <div class="flex-1"></div>
    <div
        class="mx-auto flex w-[26rem] items-center justify-center rounded-md border border-solid border-brand-detail-title-border px-8 py-2 text-2xl text-white">
        {{ $title }}
    </div>
    <div class="flex flex-1 justify-end">
        <button
            class="btn-pushable rounded-md border border-solid border-white bg-black px-1 text-3xl text-white">&times;</button>
    </div>
</div>
