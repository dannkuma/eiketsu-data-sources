{{-- TODO: 全体的に動的描画に合わせて調整が必要 --}}
{{-- @classで背景色を勢力ごとに切り替える --}}
<div onclick="showGeneralDetail(1)"
    onkeydown="if (event.key === 'Enter' || event.key === ' ') { event.preventDefault(); showGeneralDetail(1); }"
    role="button" tabindex="0"
    class="flex w-full cursor-pointer bg-brand-general-record-blue text-left text-base font-bold text-black transition-all hover:brightness-110">
    <div class="flex w-1/12 items-center justify-center">
        <img class="block h-12" src="{{ asset('images/generals/colors/blue.png') }}" alt="color">
    </div>

    <div class="flex w-5/12 flex-col items-center">
        <div class="flex w-full justify-start">
            <div class="flex w-3/5 items-center justify-center">
                <div class="my-2 flex w-44 justify-center bg-brand-deck-area-dark">
                    <p class="mr-1">ST001</p>
                    <p class="ml-1">第1弾-ST</p>
                </div>
            </div>
            <div class="flex flex-1 items-center justify-center">
                <div
                    class="whitespace-nowrap bg-brand-deck-area-dark px-3 text-sm [clip-path:polygon(5%_0%,_95%_0%,_100%_50%,_95%_100%,_5%_100%,_0%_50%)]">
                    <p>江戸・幕末</p>
                </div>
            </div>
        </div>
        <div class="flex w-full items-center justify-start pl-1">
            <img class="block h-10" src="{{ asset('images/rarities/N.png') }}" alt="rarity">
            <p class="pl-2 text-xl">
                <ruby class="[ruby-align:start]">
                    織田信長
                    <rt class="text-[0.6em] font-normal">おだのぶなが</rt>
                </ruby>
            </p>
        </div>
    </div>

    <div class="flex w-1/12 items-center justify-center">
        <img class="block h-16"
            src="{{ asset('images/generals/card_smalls/0a36e49c47f6ac4e6999ca69345e6fd0_small.png') }}"
            alt="general_image">
    </div>

    <div class="flex w-5/12 flex-col items-center justify-center">
        <div class="flex h-1/2 w-full items-center">
            <div class="flex w-12 items-center justify-center">
                <img class="block h-8" src="{{ asset('images/generals/unit_types/lancer.png') }}" alt="unit_type">
            </div>
            <div class="flex w-16 flex-col items-center justify-center">
                <span>3.0</span>
                <img class="block h-4" src="{{ asset('images/generals/costs/3.0.png') }}" alt="cost">
            </div>
            <p class="flex h-fit w-20 items-center justify-center pr-2">9/7</p>
            <div class="flex h-fit w-[38%] items-center justify-start text-sm">
                {{-- <p class="bg-brand-general-special-skill-none p-1 mr-1 text-center">特技なし</p> --}}
                <p class="mr-1 bg-brand-general-special-skill p-1 text-center">気</p>
                <p class="mr-1 bg-brand-general-special-skill p-1 text-center">昂</p>
            </div>
        </div>
        <div class="ml-1 flex h-1/2 w-full items-center text-left">
            <p class="w-2/3">天下布武【6】</p>
            <div class="flex w-1/3 justify-center">
                <button type="button"
                    class="btn-pushable relative z-10 rounded-md bg-brand-deck-area-button px-4 py-2 text-white"
                    onclick="event.stopPropagation(); addGeneralFromDeck(1)">
                    デッキ
                </button>
            </div>
        </div>
    </div>
</div>
