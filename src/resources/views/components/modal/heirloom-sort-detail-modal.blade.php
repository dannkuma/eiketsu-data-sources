@props(['dispState'])
@php
    $mainEffectCategoryToggle = request('mainEffectCategoryToggle', 'or');
    $subEffectCategoryToggle = request('subEffectCategoryToggle', 'or');
    $factionTextColorClasses = [
        App\Enums\Generals\FactionColors::Blue->value => 'text-brand-sort-detail-button-text-blue',
        App\Enums\Generals\FactionColors::Red->value => 'text-brand-sort-detail-button-text-red',
        App\Enums\Generals\FactionColors::Green->value => 'text-brand-sort-detail-button-text-green',
        App\Enums\Generals\FactionColors::Gray->value => 'text-brand-sort-detail-button-text-gray',
        App\Enums\Generals\FactionColors::Purple->value => 'text-brand-sort-detail-button-text-purple',
        App\Enums\Generals\FactionColors::Orange->value => 'text-brand-sort-detail-button-text-orange',
        App\Enums\Generals\FactionColors::Yellow->value => 'text-brand-sort-detail-button-text-yellow',
    ];
@endphp
<x-modal.sort-base-modal name="{{ config('ui.modal.heirloom_sort_detail', 'heirloom-sort-detail') }}">
    <div x-data="{ activeTab: @js($dispState) }" class="flex min-h-0 flex-1 flex-col">
        <form id="heirloom-sort-detail-form" action="" method="get" class="flex min-h-0 flex-1 flex-col">
            <div class="flex h-16 border-b border-solid border-brand-sort-detail-header-border bg-opacity-80 text-2xl">
                <div class="flex w-1/2 items-end justify-center">
                    <div
                        class="mx-1 flex h-3/4 w-[7rem] items-center justify-center rounded-t-md border-x border-t border-solid border-white bg-brand-sort-detail-header-selected text-white">
                        {{ config('ui.heirloom_sort_detail.base', '基本') }}
                    </div>
                    <div class="mx-1 h-3/4 w-[7rem] rounded-t-md border-solid text-white">
                        &nbsp;
                    </div>
                    <div class="mx-1 h-3/4 w-[7rem] rounded-t-md border-solid text-white">
                        &nbsp;
                    </div>
                </div>
                <div class="flex w-1/2 items-center justify-end">
                    <button type="button" onclick="resetSort()"
                        class="btn-pushable mx-1 flex w-[7rem] items-center justify-center rounded-md border border-solid border-white bg-brand-sort-detail-header-reset py-1 text-white">
                        リセット
                    </button>
                    <button type="submit" @click="isOpen = false"
                        class="btn-pushable mx-1 flex w-[7rem] items-center justify-center rounded-md border border-solid border-white bg-brand-sort-detail-header-decide py-1 text-white">
                        決定
                    </button>
                </div>
            </div>
            {{-- TODO:バックエンドの実装時にModelでwhereInで各Enumを一括取得したものをViewに渡すよう修正する --}}
            <div x-show="activeTab === '{{ App\Enums\SortStatus::BASE->value }}'" class="flex flex-col items-center">
                <div class="flex w-[95%] items-start justify-between">
                    <div class="flex w-[48%] flex-col px-1 pt-5">
                        <span
                            class="text-xl text-white">&#9670;{{ config('ui.heirloom_sort_detail.category.rarity', 'レアリティ') }}</span>
                        <div class="mt-1 flex flex-wrap items-center justify-start gap-1">
                            @foreach (App\Enums\Rarities::cases() as $rarity)
                                @continue($rarity === App\Enums\Rarities::ER)
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="rarities[]" value="{{ $rarity->value }}"
                                        @checked(in_array($rarity->value, (array) request('rarities'))) class="peer sr-only">
                                    <span
                                        class="btn-pushable }} flex h-10 w-20 items-center justify-center rounded-md border border-white bg-brand-sort-detail-button-unselected py-2 text-2xl transition peer-checked:bg-brand-sort-detail-button-selected">
                                        {{ $rarity->label() }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex w-[48%] flex-col px-1 pt-5">
                        <span
                            class="text-xl text-white">&#9670;{{ config('ui.heirloom_sort_detail.category.category', 'カテゴリ') }}</span>
                        <div class="mt-1 flex flex-wrap items-center justify-start gap-1">
                            @foreach (App\Enums\Heirlooms\HeirloomSoulClassifications::cases() as $classification)
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="classifications[]" value="{{ $classification->value }}"
                                        @checked(in_array($classification->value, (array) request('classifications'))) class="peer sr-only">
                                    <span
                                        class="btn-pushable flex h-10 w-20 items-center justify-center rounded-md border border-white bg-brand-sort-detail-button-unselected py-2 text-2xl transition peer-checked:bg-brand-sort-detail-button-selected">
                                        {{ $classification->label() }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="flex w-[95%] flex-col px-1 pt-5">
                    <div class="flex flex-col">
                        <div class="flex items-center justify-between">
                            <span
                                class="text-xl text-white">&#9670;{{ config('ui.heirloom_sort_detail.category.main_effect_category', '主効果カテゴリー') }}</span>
                            <x-detail-toggle class="mr-4" name="mainEffectCategoryToggle" :currentValue="$mainEffectCategoryToggle" />
                        </div>
                        <div class="mt-1 flex flex-wrap items-center justify-start gap-1">
                            @foreach (config('ui.heirloom_sort_detail.disp_effect_category', []) as $key => $main_effect)
                                @continue($key === 'disruption')
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="main_effects[]" value="{{ $key }}"
                                        @checked(in_array($key, (array) request('main_effects'))) class="peer sr-only">
                                    <span
                                        class="btn-pushable }} flex h-10 w-36 items-center justify-center rounded-md border border-white bg-brand-sort-detail-button-unselected py-2 text-2xl transition peer-checked:bg-brand-sort-detail-button-selected">
                                        {{ $main_effect }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="flex w-[95%] flex-col px-1 pt-5">
                    <div class="flex flex-col">
                        <div class="flex items-center justify-between">
                            <span
                                class="text-xl text-white">&#9670;{{ config('ui.heirloom_sort_detail.category.sub_effect_category', '副効果カテゴリー') }}</span>
                            <x-detail-toggle class="mr-4" name="subEffectCategoryToggle" :currentValue="$subEffectCategoryToggle" />
                        </div>
                        <div class="mt-1 flex flex-wrap items-center justify-start gap-1">
                            @foreach (config('ui.heirloom_sort_detail.disp_effect_category', []) as $key => $sub_effect)
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="sub_effects[]" value="{{ $key }}"
                                        @checked(in_array($key, (array) request('sub_effects'))) class="peer sr-only">
                                    <span
                                        class="btn-pushable }} flex h-10 w-36 items-center justify-center rounded-md border border-white bg-brand-sort-detail-button-unselected py-2 text-2xl transition peer-checked:bg-brand-sort-detail-button-selected">
                                        {{ $sub_effect }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="flex w-[95%] flex-col px-1 pt-5">
                    <span
                        class="text-xl text-white">&#9670;{{ config('ui.heirloom_sort_detail.category.free_word', 'フリーワード検索(対象を指定可能)') }}</span>
                    <div class="mt-1 flex flex-wrap items-center justify-start gap-1">
                        @foreach (config('ui.heirloom_sort_detail.free_words') as $key => $label)
                            <label class="cursor-pointer">
                                <input type="checkbox" name="free_words[]" value="{{ $key }}"
                                    @checked(in_array($key, (array) request('free_words'))) class="peer sr-only">
                                <span
                                    class="btn-pushable flex h-10 w-36 items-center justify-center rounded-md border border-white bg-brand-sort-detail-button-unselected py-2 text-xl transition peer-checked:bg-brand-sort-detail-button-selected">
                                    {{ $label }}
                                </span>
                            </label>
                        @endforeach
                    </div>
                </div>
                <div class="mt-2 w-[95%] px-1 pb-24">
                    <input type="text" class="block w-full py-0.5 text-xl" name="keyword"
                        placeholder="スペースでOR検索可能です">
                </div>
            </div>
        </form>
    </div>
    @push('scripts')
        @vite('resources/js/modal/heirloom-sort-detail.js')
    @endpush
</x-modal.sort-base-modal>
