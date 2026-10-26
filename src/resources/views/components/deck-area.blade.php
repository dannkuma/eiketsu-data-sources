@if (session()->has('deck'))
    {{-- 武将登録あり --}}
    <div class="flex justify-start">
        <div
            class="flex w-[80%] items-start border-b-2 border-l-2 border-t-2 border-solid border-black bg-brand-deck-area-dark">
            @for ($i = 0; $i <= 7; $i++)
                <x-deck-general-thumbnail :idx="$i" />
            @endfor
        </div>
        <div class="flex w-[20%] flex-col border-2 border-l-0 border-solid border-black">
            <div class="flex items-center justify-center bg-black py-2">
                <x-action-button :type="'button'" :variant="'deck-detail'" class="!px-1 !py-2 text-base"
                    onclick="showDeckDetail()">
                    デッキ詳細
                </x-action-button>
            </div>
            <div class="flex h-full items-center justify-center bg-brand-deck-area-light py-1">
                <p class="text-base">総コスト&nbsp;<span
                        class="text-lg font-bold text-brand-deck-list-cost">{{ $totalCost }}</span></p>
            </div>
        </div>
    </div>
@else
    {{-- 武将未登録 --}}
    <div class="flex justify-start">
        <div
            class="flex w-[80%] items-start border-b-2 border-l-2 border-t-2 border-solid border-black bg-brand-deck-area-dark">
            @for ($i = 0; $i <= 7; $i++)
                <x-deck-general-thumbnail :idx="$i" />
            @endfor
        </div>
        <div class="flex w-[20%] flex-col border-2 border-l-0 border-solid border-black">
            <div class="flex items-center justify-center bg-black py-2">
                <x-action-button :type="'button'" :variant="'disabled'" class="!px-1 !py-2 text-base">
                    デッキ詳細
                </x-action-button>
            </div>
            <div class="flex h-full items-center justify-center bg-brand-deck-area-light py-1">
                <p class="text-base">総コスト&nbsp;<span class="text-lg font-bold text-brand-deck-list-cost">0.0</span></p>
            </div>
        </div>
    </div>
@endif
