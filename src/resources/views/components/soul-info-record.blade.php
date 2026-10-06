<div onclick="showHeirloomDetail(1)"
    onkeydown="if (event.key === 'Enter' || event.key === ' ') { event.preventDefault(); showHeirloomDetail(1); }"
    role="button" tabindex="0"
    class="flex w-full cursor-pointer text-black font-bold py-1 hover:brightness-110 transition-all border-b-2 border-black">
    <div class="w-2/12 flex justify-start items-center">
        <img src="{{ asset('images/souls/images/7a750bf32e7c8d689810d300a46cce66.png') }}" alt=""
            class="block h-24 ml-4">
    </div>
    <div class="w-6/12 flex justify-start items-center">
        <img class="block h-10" src="{{ asset('images/rarities/N.png') }}" alt="rarity">
        <p class="pl-2 text-2xl">R宝物用英魂</p>
    </div>
    <div class="w-2/12 flex justify-center items-center">
        <div
            class="flex items-center justify-center px-2 mt-1 rounded-xl bg-brand-heirloom-record-inventory text-base text-white h-10">
            <p>所持数&times;30</p>
        </div>
    </div>
    <div class="w-2/12 flex justify-center items-center">
        <img src="{{ asset('images/balance.png') }}" alt="" class="h-10">
        <p class="pl-2 text-base">&times;5000</p>
    </div>
</div>
