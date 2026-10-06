{{-- TODO: 全体的に動的描画に合わせて調整が必要 --}}
{{-- @classで背景色を勢力ごとに切り替える --}}
<div onclick="showGeneralDetail(1)"
    onkeydown="if (event.key === 'Enter' || event.key === ' ') { event.preventDefault(); showGeneralDetail(1); }"
    role="button" tabindex="0"
    class="flex w-full cursor-pointer bg-brand-general-record-blue text-base text-black font-bold text-left hover:brightness-110 transition-all">
    <div class="w-1/12 flex justify-center items-center">
        <img class="block h-12" src="{{ asset('images/generals/colors/blue.png') }}" alt="color">
    </div>

    <div class="w-5/12 flex flex-col items-center">
        <div class="flex justify-start w-full">
            <div class="flex justify-center items-center w-3/5">
                <div class="flex justify-center w-44 bg-brand-deck-area-dark my-2">
                    <p class="mr-1">ST001</p>
                    <p class="ml-1">第1弾-ST</p>
                </div>
            </div>
            <div class="flex justify-center items-center flex-1">
                <div
                    class="whitespace-nowrap bg-brand-deck-area-dark [clip-path:polygon(5%_0%,_95%_0%,_100%_50%,_95%_100%,_5%_100%,_0%_50%)] px-3 text-sm">
                    <p>江戸・幕末</p>
                </div>
            </div>
        </div>
        <div class="flex justify-start items-center w-full pl-1">
            <img class="block h-10" src="{{ asset('images/rarities/N.png') }}" alt="rarity">
            <p class="pl-2 text-xl">
                <ruby class="[ruby-align:start]">
                    織田信長
                    <rt class="text-[0.6em] font-normal">おだのぶなが</rt>
                </ruby>
            </p>
        </div>
    </div>

    <div class="w-1/12 flex justify-center items-center">
        <img class="block h-16"
            src="{{ asset('images/generals/card_smalls/0a36e49c47f6ac4e6999ca69345e6fd0_small.png') }}"
            alt="general_image">
    </div>

    <div class="w-5/12 flex flex-col justify-center items-center">
        <div class="flex w-full h-1/2 items-center">
            <div class="flex justify-center items-center w-12">
                <img class="block h-8" src="{{ asset('images/generals/unit_types/lancer.png') }}" alt="unit_type">
            </div>
            <div class="flex flex-col justify-center items-center w-16">
                <span>3.0</span>
                <img class="block h-4" src="{{ asset('images/generals/costs/3.0.png') }}" alt="cost">
            </div>
            <p class="w-20 h-fit flex justify-center items-center pr-2">9/7</p>
            <div class="w-[38%] h-fit flex justify-start items-center text-sm">
                {{-- <p class="bg-brand-general-special-skill-none p-1 mr-1 text-center">特技なし</p> --}}
                <p class="bg-brand-general-special-skill p-1 mr-1 text-center">気</p>
                <p class="bg-brand-general-special-skill p-1 mr-1 text-center">昂</p>
            </div>
        </div>
        <div class="flex items-center w-full h-1/2 ml-1 text-left">
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
