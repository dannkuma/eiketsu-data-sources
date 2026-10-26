{{-- 呼び出し時は親要素のgapで間隔を調整する --}}
<div class="flex w-1/2 flex-col border-2 border-black bg-brand-heirloom-bring">
    <div class="grid grid-cols-7">
        <div class="relative col-span-2">
            <img src="{{ asset('images/heirlooms/images/0ade0644dfdb14fa56101bec9e50fe03.png') }}" alt=""
                class="ml-2 mt-2 block h-24">
            <img src="{{ asset('images/lock.png') }}" alt="" class="absolute -top-2 right-3 ml-2 mt-2 block h-8">
        </div>
        <div class="col-span-5 flex flex-col items-center">
            <div class="flex w-full items-start justify-end">
                <p class="mt-0.5 bg-brand-heirloom-bring-icon px-9 py-2 text-xl font-bold text-white">戦場持込</p>
                <p class="ml-2 mr-0.5 mt-0.5 bg-brand-heirloom-info-category-area p-2 text-xl font-bold text-white">宝物
                </p>
            </div>
            <div class="mb-6 ml-2 mt-2 flex w-full">
                {{-- 戦器名 --}}
                <p class="text-2xl font-bold">曜変天目茶碗</p>
            </div>
            <div class="flex w-full flex-row justify-between">
                {{-- 英魂効果 --}}
                <div class="relative flex-none">
                    <p
                        class="mx-0.5 flex items-center justify-center whitespace-nowrap rounded-full bg-black px-5 py-1 text-red-400">
                        弓射程
                    </p>
                    <span class="absolute -top-4 right-0 text-2xl text-brand-star">&#9733;</span>
                </div>
                <div class="flex-none">
                    <p
                        class="mx-0.5 flex items-center justify-center whitespace-nowrap rounded-full bg-black px-5 py-1 text-red-400">
                        弓射程
                    </p>
                </div>
                <div class="flex-none">
                    <p
                        class="mx-0.5 flex items-center justify-center whitespace-nowrap rounded-full bg-black px-5 py-1 text-red-400">
                        弓射程
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 flex items-center justify-around">
        <x-owned-item-main-button>詳細</x-owned-item-main-button>
        <x-owned-item-main-button>強化</x-owned-item-main-button>
        <x-owned-item-main-button>英魂装着</x-owned-item-main-button>
    </div>
    <div class="my-2 flex items-center justify-around">
        <x-owned-item-sub-button variant="gray">売却</x-owned-item-sub-button>
        <x-owned-item-sub-button>ロック</x-owned-item-sub-button>
        <x-owned-item-sub-button>保管へ</x-owned-item-sub-button>
        <x-owned-item-sub-button variant="gray">取外し</x-owned-item-sub-button>
    </div>
</div>
