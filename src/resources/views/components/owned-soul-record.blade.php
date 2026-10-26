{{-- 呼び出し時は親要素のgapで間隔を調整する --}}
<div class="flex w-1/2 flex-col border-2 border-black bg-brand-heirloom-bring">
    <div class="grid grid-cols-10 pt-2">
        <div class="relative col-span-3">
            <img src="{{ asset('images/heirloom_soul_categories/souls/宝物.png') }}" alt="" class="block h-24">
            <img src="{{ asset('images/lock.png') }}" alt="" class="absolute -top-1 right-6 ml-2 mt-2 block h-8">
        </div>
        <div class="col-span-2 flex flex-col justify-center gap-y-2">
            <div class="relative flex items-center justify-center">
                <p class="mx-0.5 flex-none whitespace-nowrap rounded-full bg-black px-5 py-1 text-red-400">弓射程
                </p>
                <span class="absolute -top-4 right-0 text-2xl text-brand-star">&#9733;</span>
            </div>
            <div class="flex items-center justify-center">
                <p class="mx-0.5 flex-none whitespace-nowrap rounded-full bg-black px-5 py-1 text-red-400">弓射程
                </p>
            </div>
            <div class="flex items-center justify-center">
                <p class="mx-0.5 flex-none whitespace-nowrap rounded-full bg-black px-5 py-1 text-red-400">弓射程
                </p>
            </div>
        </div>
        <div
            class="col-span-2 flex items-center justify-center text-3xl font-bold tracking-[-0.15em] text-brand-soul-arrow-equipment">
            &gt;&gt;
        </div>
        <div class="relative col-span-3 flex items-center justify-center">
            <div class="relative flex -translate-x-3 items-center justify-center">
                <img src="{{ asset('images/heirlooms/images/0ade0644dfdb14fa56101bec9e50fe03.png') }}" alt=""
                    class="ml-2 block h-24">
                <p class="absolute bottom-0 right-2 bg-black px-4 py-0.5 text-base font-bold text-white">Lv.1/4</p>
                <p
                    class="absolute -right-4 -top-1 rounded-md bg-brand-heirloom-bring-icon px-2 py-0.5 text-sm font-bold text-white">
                    戦場持込
                </p>
            </div>
        </div>
    </div>
    <div class="mt-4 flex items-center justify-around">
        <x-owned-item-main-button>詳細</x-owned-item-main-button>
        <x-owned-item-main-button>強化</x-owned-item-main-button>
        <x-owned-item-main-button>英魂装着</x-owned-item-main-button>
    </div>
    <div class="my-2 flex items-center justify-around">
        <x-owned-item-sub-button variant="gray" class="w-[32%]">売却</x-owned-item-sub-button>
        <x-owned-item-sub-button class="w-[32%]">ロック</x-owned-item-sub-button>
        <x-owned-item-sub-button variant="gray" class="w-[32%]">取外し</x-owned-item-sub-button>
    </div>
</div>
