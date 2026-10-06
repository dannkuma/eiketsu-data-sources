@props(['idx', 'general' => null])
@php
    $general = $general ?? session('deck.' . $idx);

    $hasRenderableGeneral =
        is_array($general) &&
        array_key_exists('general_id', $general) &&
        array_key_exists('image_path', $general) &&
        $general['general_id'] !== null &&
        $general['image_path'] !== null;
    $generalId = $hasRenderableGeneral ? $general['general_id'] : null;
    $imagePath = $hasRenderableGeneral ? $general['image_path'] : null;
@endphp

@if ($hasRenderableGeneral)
    <div class="flex flex-col w-[12.5%] h-full bg-brand-deck-area-light">
        <div class="flex h-[70%] border-solid border-black border-r-2">
            <button onclick="showGeneralDetail({{ $generalId }})" class="flex aspect-square w-full">
                <img class="block object-scale-down h-[95%] w-[95%] m-auto"
                    src="{{ asset('images/generals/thumbnails/' . $imagePath . '_thumbnail.png') }}" alt="">
            </button>
        </div>
        <div class="flex justify-center items-center h-[2.95rem] py-1 border-solid border-black border-t-2 border-r-2">
            <button onclick="removeGeneralFromDeck({{ $idx }})"
                class="text-sm text-white bg-brand-deck-area-button px-2 py-0.5 rounded-md border-t border-l border-r-[0.1875rem] border-b-[0.1875rem] border-t-white/20 border-l-white/20 border-r-black/30 border-b-black/35 font-semibold tracking-widest shadow-[0.125rem_0.125rem_0_0_rgba(0,0,0,0.18)] hover:brightness-105 active:translate-x-[0.125rem] active:translate-y-[0.125rem] active:brightness-95 active:shadow-none focus:outline-none focus:ring-2 focus:ring-offset-2'">
                外す
            </button>
        </div>
    </div>
@else
    <div class="flex flex-col w-[12.5%] h-full">
        <div class="flex h-[70%] border-solid border-black border-r-2 bg-brand-deck-area-dark">
            <div class="flex aspect-square w-full">
                <div class="block object-scale-down h-[100%] w-[100%]"></div>
            </div>
        </div>
        <div
            class="flex justify-center items-center h-[2.95rem] py-1 border-solid border-black border-t-2 border-r-2 bg-brand-deck-area-light">
        </div>
    </div>
@endif
