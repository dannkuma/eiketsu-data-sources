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
    <div class="flex h-full w-[12.5%] flex-col bg-brand-deck-area-light">
        <div class="flex h-[70%] border-r-2 border-solid border-black">
            <button onclick="showGeneralDetail({{ $generalId }})" class="flex aspect-square w-full">
                <img class="m-auto block h-[95%] w-[95%] object-scale-down"
                    src="{{ asset('images/generals/thumbnails/' . $imagePath . '_thumbnail.png') }}" alt="">
            </button>
        </div>
        <div class="flex h-[2.95rem] items-center justify-center border-r-2 border-t-2 border-solid border-black py-1">
            <button onclick="removeGeneralFromDeck({{ $idx }})"
                class="focus:ring-offset-2' rounded-md border-b-[0.1875rem] border-l border-r-[0.1875rem] border-t border-b-black/35 border-l-white/20 border-r-black/30 border-t-white/20 bg-brand-deck-area-button px-2 py-0.5 text-sm font-semibold tracking-widest text-white shadow-[0.125rem_0.125rem_0_0_rgba(0,0,0,0.18)] hover:brightness-105 focus:outline-none focus:ring-2 active:translate-x-[0.125rem] active:translate-y-[0.125rem] active:shadow-none active:brightness-95">
                外す
            </button>
        </div>
    </div>
@else
    <div class="flex h-full w-[12.5%] flex-col">
        <div class="flex h-[70%] border-r-2 border-solid border-black bg-brand-deck-area-dark">
            <div class="flex aspect-square w-full">
                <div class="block h-[100%] w-[100%] object-scale-down"></div>
            </div>
        </div>
        <div
            class="flex h-[2.95rem] items-center justify-center border-r-2 border-t-2 border-solid border-black bg-brand-deck-area-light py-1">
        </div>
    </div>
@endif
