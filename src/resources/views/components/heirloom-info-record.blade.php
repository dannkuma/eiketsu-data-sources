{{-- 戦器情報の参照に利用するレコード --}}
{{-- TODO: 全体的に動的描画に合わせて調整が必要 --}}
{{-- 戦器情報の参照に利用するレコード --}}
<div onclick="showHeirloomDetail(1)"
    onkeydown="if (event.key === 'Enter' || event.key === ' ') {
        event.preventDefault();
        showHeirloomDetail(1);
    }"
    role="button" tabindex="0"
    class="
        grid w-full grid-cols-6
        cursor-pointer
        border-b-2 border-black border-opacity-50
        pb-2
        text-left text-[1.35rem] font-bold text-black
        transition-all hover:brightness-110
    ">
    <div class="row-span-3 flex items-center justify-center">
        <img class="block h-24" src="{{ asset('images/heirlooms/images/0ade0644dfdb14fa56101bec9e50fe03.png') }}"
            alt="color">
    </div>
    <div class="col-span-2 flex items-center">
        <img class="block h-10" src="{{ asset('images/rarities/N.png') }}" alt="rarity">
        <p class="pl-2 text-2xl">戦器A</p>
    </div>
    <div class="flex items-center justify-center">
        <div class="my-1 bg-brand-heirloom-info-category-area px-2 py-4 text-white text-outline-black">
            <p>宝物</p>
        </div>
    </div>
    <div class="flex items-center justify-center">
        <div
            class="flex items-center justify-center px-2 mt-1 rounded-xl bg-brand-heirloom-record-inventory text-base text-white h-10">
            <p>所持数&times;30</p>
        </div>
    </div>
    <div class="flex items-center justify-center">
        <img src="{{ asset('images/balance.png') }}" alt="" class="h-10">
        <p class="pl-2 text-base">&times;5000</p>
    </div>

    <div class="col-span-4 grid grid-cols-[8rem_9rem_1fr] border-t border-black py-1">
        <div class="flex justify-center">
            <p class="pl-2 text-black text-outline-red">
                主効果
            </p>
        </div>
        <div>
            <div
                class="flex justify-center items-center ml-2 text-xl rounded-xl bg-brand-heirloom-info-category-area px-6 py-1 text-black">
                効果対象
            </div>
        </div>
        <div>
            <p class="ml-2 py-1 text-xl">味方全部隊</p>
        </div>
    </div>

    {{-- 主効果 --}}
    <div class="flex items-end justify-end border-t border-black py-1">
        <span
            class="
                inline-block
                bg-[#444438]
                mr-2 px-6 py-2
                text-xs text-[#d8c969]
                clip-path-tag
            ">
            復活-20秒
        </span>
    </div>


    {{-- =========================
        3行目：追加効果
    ========================== --}}

    {{-- 追加効果対象・条件 --}}
    <div class="col-span-4 grid grid-cols-[8rem_1fr] border-t border-black py-1">
        <div class="flex justify-center">
            <p class="pl-2 text-black text-outline-red">
                追加効果
            </p>
        </div>

        <div class="flex flex-col">
            <div class="flex">
                <div
                    class="flex justify-center items-center ml-2 text-xl rounded-xl bg-brand-heirloom-record-condition px-6 py-1 text-black">
                    発動条件
                </div>

                <p class="ml-2 py-1 text-xl">
                    味方全部隊
                </p>
            </div>

            <div class="mt-2 flex">
                <div
                    class="flex justify-center items-center ml-2 text-xl rounded-xl bg-brand-heirloom-info-category-area px-6 py-1 text-black">
                    効果対象
                </div>

                <p class="ml-2 py-1 text-xl">
                    味方全部隊
                </p>
            </div>
        </div>
    </div>

    {{-- 追加効果 --}}
    <div class="flex items-end justify-end border-t border-black py-1">
        <span
            class="
                inline-block
                bg-[#444438]
                mr-2 px-6 py-2
                text-xs text-[#d8c969]
                clip-path-tag
            ">
            復活-20秒
        </span>
    </div>
</div>
