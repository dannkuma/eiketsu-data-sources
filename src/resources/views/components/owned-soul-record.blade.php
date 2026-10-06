{{-- 呼び出し時は親要素のgapで間隔を調整する --}}
<div class="w-1/2 flex flex-col bg-brand-heirloom-bring border-2 border-black">
    <div class="grid grid-cols-10 pt-2">
        <div class="col-span-3 relative">
            <img src="{{ asset('images/heirloom_soul_categories/souls/宝物.png') }}" alt="" class="block h-24">
            <img src="{{ asset('images/lock.png') }}" alt="" class="block absolute right-6 -top-1 h-8 mt-2 ml-2">
        </div>
        <div class="col-span-2 flex flex-col justify-center gap-y-2">
            <div class="relative flex justify-center items-center">
                <p class="flex-none whitespace-nowrap bg-black text-red-400 px-5 py-1 mx-0.5 rounded-full">弓射程
                </p>
                <span class="text-brand-star text-2xl absolute -top-4 right-0">&#9733;</span>
            </div>
            <div class="flex justify-center items-center">
                <p class="flex-none whitespace-nowrap bg-black text-red-400 px-5 py-1 mx-0.5 rounded-full">弓射程
                </p>
            </div>
            <div class="flex justify-center items-center">
                <p class="flex-none whitespace-nowrap bg-black text-red-400 px-5 py-1 mx-0.5 rounded-full">弓射程
                </p>
            </div>
        </div>
        <div
            class="col-span-2 flex justify-center items-center font-bold tracking-[-0.15em] text-3xl text-brand-soul-arrow-equipment">
            &gt;&gt;
        </div>
        <div class="col-span-3 flex justify-center items-center relative">
            <div class="relative flex justify-center items-center -translate-x-3">
                <img src="{{ asset('images/heirlooms/images/0ade0644dfdb14fa56101bec9e50fe03.png') }}" alt=""
                    class="block h-24 ml-2">
                <p class="absolute bottom-0 right-2 bg-black text-white text-base font-bold px-4 py-0.5">Lv.1/4</p>
                <p
                    class="absolute -top-1 -right-4 bg-brand-heirloom-bring-icon text-sm text-white font-bold px-2 py-0.5 rounded-md">
                    戦場持込
                </p>
            </div>
        </div>
    </div>
    <div class="flex justify-around items-center mt-4">
        <x-owned-item-main-button>詳細</x-owned-item-main-button>
        <x-owned-item-main-button>強化</x-owned-item-main-button>
        <x-owned-item-main-button>英魂装着</x-owned-item-main-button>
    </div>
    <div class="flex justify-around items-center my-2">
        <x-owned-item-sub-button variant="gray" class="w-[32%]">売却</x-owned-item-sub-button>
        <x-owned-item-sub-button class="w-[32%]">ロック</x-owned-item-sub-button>
        <x-owned-item-sub-button variant="gray" class="w-[32%]">取外し</x-owned-item-sub-button>
    </div>
</div>
