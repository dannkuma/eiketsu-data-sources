{{-- 呼び出し時は親要素のgapで間隔を調整する --}}
<div class="w-1/2 flex flex-col bg-brand-heirloom-bring border-2 border-black">
    <div class="grid grid-cols-7">
        <div class="col-span-2 relative">
            <img src="{{ asset('images/heirlooms/images/0ade0644dfdb14fa56101bec9e50fe03.png') }}" alt=""
                class="block h-24 mt-2 ml-2">
            <img src="{{ asset('images/lock.png') }}" alt="" class="block absolute right-3 -top-2 h-8 mt-2 ml-2">
        </div>
        <div class="col-span-5 flex flex-col items-center">
            <div class="flex justify-end items-start w-full">
                <p class="bg-brand-heirloom-bring-icon text-xl text-white font-bold mt-0.5 px-9 py-2">戦場持込</p>
                <p class="bg-brand-heirloom-info-category-area text-xl text-white font-bold mt-0.5 ml-2 mr-0.5 p-2">宝物
                </p>
            </div>
            <div class="flex w-full ml-2 mt-2 mb-6">
                {{-- 戦器名 --}}
                <p class="text-2xl font-bold">曜変天目茶碗</p>
            </div>
            <div class="flex flex-row justify-between w-full">
                {{-- 英魂効果 --}}
                <div class="relative flex-none">
                    <p
                        class="flex justify-center items-center whitespace-nowrap bg-black text-red-400 px-5 py-1 mx-0.5 rounded-full">
                        弓射程
                    </p>
                    <span class="text-brand-star text-2xl absolute -top-4 right-0">&#9733;</span>
                </div>
                <div class="flex-none">
                    <p
                        class="flex justify-center items-center whitespace-nowrap bg-black text-red-400 px-5 py-1 mx-0.5 rounded-full">
                        弓射程
                    </p>
                </div>
                <div class="flex-none">
                    <p
                        class="flex justify-center items-center whitespace-nowrap bg-black text-red-400 px-5 py-1 mx-0.5 rounded-full">
                        弓射程
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-around items-center mt-4">
        <x-owned-item-main-button>詳細</x-owned-item-main-button>
        <x-owned-item-main-button>強化</x-owned-item-main-button>
        <x-owned-item-main-button>英魂装着</x-owned-item-main-button>
    </div>
    <div class="flex justify-around items-center my-2">
        <x-owned-item-sub-button variant="gray">売却</x-owned-item-sub-button>
        <x-owned-item-sub-button>ロック</x-owned-item-sub-button>
        <x-owned-item-sub-button>保管へ</x-owned-item-sub-button>
        <x-owned-item-sub-button variant="gray">取外し</x-owned-item-sub-button>
    </div>
</div>
