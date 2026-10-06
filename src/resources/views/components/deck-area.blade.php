@if (session()->has('deck'))
    {{-- 武将登録あり --}}
    <div class="flex justify-start">
        <div
            class="flex items-start w-[80%] bg-brand-deck-area-dark border-solid border-black border-t-2 border-b-2 border-l-2">
            @for ($i = 0; $i <= 7; $i++)
                <x-deck-general-thumbnail :idx="$i" />
            @endfor
        </div>
        <div class="flex flex-col w-[20%] border-solid border-black border-2 border-l-0">
            <div class="flex items-center justify-center py-2 bg-black">
                <x-action-button :type="'button'" :variant="'deck-detail'" class="!px-1 !py-2 text-base"
                    onclick="showDeckDetail()">
                    デッキ詳細
                </x-action-button>
            </div>
            <div class="flex items-center justify-center h-full py-1 bg-brand-deck-area-light">
                <p class="text-base">総コスト&nbsp;<span
                        class="text-lg text-brand-deck-list-cost font-bold">{{ $totalCost }}</span></p>
            </div>
        </div>
    </div>
@else
    {{-- 武将未登録 --}}
    <div class="flex justify-start">
        <div
            class="flex items-start w-[80%] bg-brand-deck-area-dark border-solid border-black border-t-2 border-b-2 border-l-2">
            @for ($i = 0; $i <= 7; $i++)
                <x-deck-general-thumbnail :idx="$i" />
            @endfor
        </div>
        <div class="flex flex-col w-[20%] border-solid border-black border-2 border-l-0">
            <div class="flex items-center justify-center py-2 bg-black">
                <x-action-button :type="'button'" :variant="'disabled'" class="!px-1 !py-2 text-base">
                    デッキ詳細
                </x-action-button>
            </div>
            <div class="flex items-center justify-center h-full py-1 bg-brand-deck-area-light">
                <p class="text-base">総コスト&nbsp;<span class="text-lg text-brand-deck-list-cost font-bold">0.0</span></p>
            </div>
        </div>
    </div>
@endif
