<div onclick="showHeirloomDetail(1)"
    onkeydown="if (event.key === 'Enter' || event.key === ' ') { event.preventDefault(); showHeirloomDetail(1); }"
    role="button" tabindex="0"
    class="flex w-full cursor-pointer border-b-2 border-black py-1 font-bold text-black transition-all hover:brightness-110">
    <div class="flex w-2/12 items-center justify-start">
        <img src="{{ asset('images/souls/images/7a750bf32e7c8d689810d300a46cce66.png') }}" alt=""
            class="ml-4 block h-24">
    </div>
    <div class="flex w-6/12 items-center justify-start">
        <img class="block h-10" src="{{ asset('images/rarities/N.png') }}" alt="rarity">
        <p class="pl-2 text-2xl">R宝物用英魂</p>
    </div>
    <div class="flex w-2/12 items-center justify-center">
        <div
            class="mt-1 flex h-10 items-center justify-center rounded-xl bg-brand-heirloom-record-inventory px-2 text-base text-white">
            <p>所持数&times;30</p>
        </div>
    </div>
    <div class="flex w-2/12 items-center justify-center">
        <img src="{{ asset('images/balance.png') }}" alt="" class="h-10">
        <p class="pl-2 text-base">&times;5000</p>
    </div>
</div>
