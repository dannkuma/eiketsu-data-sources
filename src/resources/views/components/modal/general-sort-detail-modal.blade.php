@props(['dispState'])
@php
    $skillsToggle = request('skillsToggle', 'or');
    $strategyCategoryToggle = request('strategyCategoryToggle', 'or');
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
<x-modal.sort-base-modal name="{{ config('ui.modal.general_sort_detail', 'general-sort-detail') }}">
    <div x-data="{ activeTab: @js($dispState) }" class="flex min-h-0 flex-1 flex-col">
        <form id="general-sort-detail-form" action="" method="get" class="flex min-h-0 flex-1 flex-col">
            <div class="flex h-16 border-b border-solid border-brand-sort-detail-header-border bg-opacity-80 text-2xl">
                <div class="flex w-1/2 items-end justify-center">
                    <button type="button" @click="activeTab = '{{ App\Enums\SortStatus::BASE->value }}'"
                        :class="activeTab === '{{ App\Enums\SortStatus::BASE->value }}' ?
                            'bg-brand-sort-detail-header-selected' :
                            'bg-brand-sort-detail-header-unselected'"
                        class="mx-1 h-3/4 w-[7rem] rounded-t-md border-x border-t border-solid border-white text-white">
                        {{ config('ui.general_sort_detail.base', '基本') }}
                    </button>
                    <button type="button" @click="activeTab = '{{ App\Enums\SortStatus::DETAIL->value }}'"
                        :class="activeTab === '{{ App\Enums\SortStatus::DETAIL->value }}' ?
                            'bg-brand-sort-detail-header-selected' :
                            'bg-brand-sort-detail-header-unselected'"
                        class="mx-1 h-3/4 w-[7rem] rounded-t-md border-x border-t border-solid border-white text-white">
                        {{ config('ui.general_sort_detail.detail', '詳細') }}
                    </button>
                    <button type="button" @click="activeTab = '{{ App\Enums\SortStatus::SORT->value }}'"
                        :class="activeTab === '{{ App\Enums\SortStatus::SORT->value }}' ?
                            'bg-brand-sort-detail-header-selected' :
                            'bg-brand-sort-detail-header-unselected'"
                        class="mx-1 h-3/4 w-[7rem] rounded-t-md border-x border-t border-solid border-white text-white">
                        {{ config('ui.general_sort_detail.sort', 'ソート') }}
                    </button>
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
                <div class="flex w-[95%] flex-col px-1 pt-5">
                    <span
                        class="text-xl text-white">&#9670;{{ config('ui.general_sort_detail.category.faction', '勢力') }}</span>
                    <div class="mt-2 flex items-center justify-start gap-1">
                        @foreach (App\Enums\Generals\FactionColors::cases() as $factionColor)
                            <label class="cursor-pointer">
                                <input type="checkbox" name="faction_colors[]" value="{{ $factionColor->value }}"
                                    @checked(in_array($factionColor->value, (array) request('faction_colors'))) class="peer sr-only">
                                <span
                                    class="btn-pushable {{ $factionTextColorClasses[$factionColor->value] }} flex h-10 w-20 items-center justify-center rounded-md border border-white bg-brand-sort-detail-button-unselected py-2 text-2xl transition peer-checked:bg-brand-sort-detail-button-selected">
                                    {{ $factionColor->label() }}
                                </span>
                            </label>
                        @endforeach
                    </div>
                </div>
                <div class="flex w-[95%] flex-col px-1 pt-5">
                    <span
                        class="text-xl text-white">&#9670;{{ config('ui.general_sort_detail.category.period', '時代勢力') }}</span>
                    <div class="mt-1 flex flex-wrap items-center justify-start gap-1">
                        @foreach (App\Enums\Generals\Periods::cases() as $period)
                            <label class="cursor-pointer">
                                <input type="checkbox" name="periods[]" value="{{ $period->value }}"
                                    @checked(in_array($period->value, (array) request('periods'))) class="peer sr-only">
                                <span
                                    class="btn-pushable flex h-10 w-36 items-center justify-center rounded-md border border-white bg-brand-sort-detail-button-unselected py-2 text-xl transition peer-checked:bg-brand-sort-detail-button-selected">
                                    {{ $period->label() }}
                                </span>
                            </label>
                        @endforeach
                    </div>
                </div>
                <div class="flex w-[95%] items-center justify-between">
                    <div class="flex w-[57%] flex-col pl-1 pt-5">
                        <span
                            class="text-xl text-white">&#9670;{{ config('ui.general_sort_detail.category.cost', 'コスト') }}</span>
                        <div class="mt-1 flex flex-wrap items-center justify-start gap-1 text-2xl">
                            @foreach (App\Enums\Generals\Costs::cases() as $cost)
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="costs[]" value="{{ $cost->value }}"
                                        @checked(in_array($cost->value, (array) request('costs'))) class="peer sr-only">
                                    <span
                                        class="btn-pushable }} flex h-10 w-20 items-center justify-center rounded-md border border-white bg-brand-sort-detail-button-unselected py-2 transition peer-checked:bg-brand-sort-detail-button-selected">
                                        {{ $cost->value }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex w-[43%] flex-col pt-5">
                        <span
                            class="text-xl text-white">&#9670;{{ config('ui.general_sort_detail.category.unit_type', '兵種') }}</span>
                        <div class="mt-1 flex flex-wrap items-center justify-start gap-1 text-2xl">
                            @foreach (App\Enums\Generals\UnitTypes::cases() as $unitType)
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="unit_types[]" value="{{ $unitType->value }}"
                                        @checked(in_array($unitType->value, (array) request('unit_types'))) class="peer sr-only">
                                    <span
                                        class="btn-pushable }} flex h-10 w-20 items-center justify-center rounded-md border border-white bg-brand-sort-detail-button-unselected py-2 transition peer-checked:bg-brand-sort-detail-button-selected">
                                        {{ $unitType->label() }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="flex w-[95%] items-start justify-between">
                    <div class="flex w-[57%] flex-col pl-1 pt-5">
                        <div class="flex items-center justify-between">
                            <span class="text-xl text-white">&#9670;特技</span>
                            <x-detail-toggle class="mr-4" name="skillsToggle" :currentValue="$skillsToggle" />
                        </div>
                        <div class="mt-1 flex flex-wrap items-center justify-start gap-1 text-2xl">
                            @foreach (App\Enums\Generals\SpecialSkills::cases() as $skill)
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="skills[]" value="{{ $skill->value }}"
                                        @checked(in_array($skill->value, (array) request('skills'))) class="peer sr-only">
                                    <span
                                        class="btn-pushable }} flex h-10 w-20 items-center justify-center rounded-md border border-white bg-brand-sort-detail-button-unselected py-2 transition peer-checked:bg-brand-sort-detail-button-selected">
                                        {{ $skill->label() }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex w-[43%] flex-col pt-5">
                        <span
                            class="text-xl text-white">&#9670;{{ config('ui.general_sort_detail.category.rarity', 'レアリティ') }}</span>
                        <div class="mt-1 flex flex-wrap items-center justify-start gap-1 text-2xl">
                            @foreach (App\Enums\Rarities::cases() as $rarity)
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="rarities[]" value="{{ $rarity->value }}"
                                        @checked(in_array($rarity->value, (array) request('rarities'))) class="peer sr-only">
                                    <span
                                        class="btn-pushable }} flex h-10 w-20 items-center justify-center rounded-md border border-white bg-brand-sort-detail-button-unselected py-2 transition peer-checked:bg-brand-sort-detail-button-selected">
                                        {{ $rarity->label() }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="flex w-[95%] flex-col px-1 pt-5">
                    <span
                        class="text-xl text-white">&#9670;{{ config('ui.general_sort_detail.category.free_word', 'フリーワード検索(対象を指定可能)') }}</span>
                    <div class="mt-1 flex items-center justify-start gap-1">
                        @foreach (config('ui.general_sort_detail.free_words') as $key => $label)
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
            <div x-show="activeTab === '{{ App\Enums\SortStatus::DETAIL->value }}'"
                class="flex flex-col items-center">
                <div class="flex w-[95%] items-center justify-start px-1 pt-2">
                    <div class="flex w-1/2 items-end justify-start">
                        <div class="flex w-2/5 flex-col">
                            <span
                                class="text-xl text-white">&#9670;{{ config('ui.general_sort_detail.category.power', '武力') }}</span>
                            <div class="mt-2 flex items-center justify-start gap-1">
                                <select name="power_min" class="w-full py-0 text-xl">
                                    @foreach (App\Enums\Generals\Powers::cases() as $power)
                                        <option value="{{ $power->value }}" @selected(request('power_min') == $power->value)>
                                            {{ $power->value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex items-end justify-center text-xl text-white">
                            <p class="flex h-1/2 w-full items-center">
                                &#12316;
                            </p>
                        </div>
                        <div class="flex w-2/5">
                            <div class="mt-2 flex w-full items-end justify-start gap-1">
                                <select name="power_max" class="w-full py-0 text-xl">
                                    @foreach (App\Enums\Generals\Powers::cases() as $power)
                                        <option value="{{ $power->value }}" @selected(request('power_max', 12) == $power->value)>
                                            {{ $power->value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-1/2 items-end justify-start">
                        <div class="flex w-2/5 flex-col">
                            <span
                                class="text-xl text-white">&#9670;{{ config('ui.general_sort_detail.category.intelligence', '知力') }}</span>
                            <div class="mt-2 flex items-center justify-start gap-1">
                                <select name="intelligence_min" class="w-full py-0 text-xl">
                                    @foreach (App\Enums\Generals\Intelligences::cases() as $intelligence)
                                        <option value="{{ $intelligence->value }}" @selected(request('intelligence_min') == $intelligence->value)>
                                            {{ $intelligence->value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex items-end justify-center text-xl text-white">
                            <p class="flex h-1/2 w-full items-center">
                                &#12316;
                            </p>
                        </div>
                        <div class="flex w-2/5">
                            <div class="mt-2 flex w-full items-end justify-start gap-1">
                                <select name="intelligence_max" class="w-full py-0 text-xl">
                                    @foreach (App\Enums\Generals\Intelligences::cases() as $intelligence)
                                        <option value="{{ $intelligence->value }}" @selected(request('intelligence_max', 12) == $intelligence->value)>
                                            {{ $intelligence->value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex w-[95%] flex-col px-1 py-4">
                    <span
                        class="text-xl text-white">&#9670;{{ config('ui.general_sort_detail.category.release_set', '登場弾') }}</span>
                    @for ($releaseSetNum = 1; $releaseSetNum <= 5; $releaseSetNum++)
                        <div class="mt-2 flex flex-wrap items-center justify-start gap-1">
                            <p class="mr-2 text-xl text-brand-detail-title-border">第<span
                                    class="text-2xl">{{ $releaseSetNum }}</span>弾</p>
                            <div class="flex items-center justify-start gap-1">
                                @php
                                    $method = 'getD' . $releaseSetNum . 'NormalCases';
                                @endphp
                                @foreach (App\Enums\Generals\ReleaseSets::$method() as $releaseSet)
                                    <label class="cursor-pointer">
                                        <input type="checkbox" name="release_sets[d{{ $releaseSetNum }}][]"
                                            value="{{ $releaseSet->value }}" @checked(in_array($releaseSet->value, (array) request('release_sets.d' . $releaseSetNum)))
                                            class="peer sr-only">
                                        <span
                                            class="btn-pushable flex h-10 w-36 items-center justify-center rounded-md border border-white bg-brand-sort-detail-button-unselected py-2 text-xl transition peer-checked:bg-brand-sort-detail-button-selected">
                                            {{ $releaseSet->label() }}
                                        </span>
                                    </label>
                                @endforeach
                                <label class="cursor-pointer">
                                    <input type="checkbox" name="release_sets[d{{ $releaseSetNum }}_other][]"
                                        value="d{{ $releaseSetNum }}-other" @checked(in_array('d' . $releaseSetNum . '-other', (array) request('release_sets.d' . $releaseSetNum . '_other')))
                                        class="peer sr-only">
                                    <span
                                        class="btn-pushable flex h-10 w-36 items-center justify-center rounded-md border border-white bg-brand-sort-detail-button-unselected py-2 text-xl transition peer-checked:bg-brand-sort-detail-button-selected">
                                        その他
                                    </span>
                                </label>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="flex w-[95%] flex-col py-4 pl-1">
                    <span
                        class="text-xl text-white">&#9670;{{ config('ui.general_sort_detail.category.card_type', 'カード種別') }}</span>
                    <div class="mt-2 flex flex-wrap items-center justify-start gap-1">
                        @foreach (App\Enums\Generals\CardTypes::cases() as $cardType)
                            <label class="cursor-pointer">
                                <input type="checkbox" name="card_types[]" value="{{ $cardType->value }}"
                                    @checked(in_array($cardType->value, (array) request('card_types'))) class="peer sr-only">
                                <span
                                    class="btn-pushable }} flex h-10 w-20 items-center justify-center rounded-md border border-white bg-brand-sort-detail-button-unselected py-2 text-2xl transition peer-checked:bg-brand-sort-detail-button-selected">
                                    {{ $cardType->label() }}
                                </span>
                            </label>
                        @endforeach
                    </div>
                </div>
                <div class="flex w-[95%] flex-col px-1 py-4">
                    <div class="flex items-center justify-between">
                        <span
                            class="text-xl text-white">&#9670;{{ config('ui.general_sort_detail.category.strategy_category', '計略カテゴリー') }}</span>
                        <x-detail-toggle class="mr-4" name="strategyCategoryToggle" :currentValue="$strategyCategoryToggle" />
                    </div>
                    <div class="mt-2 flex flex-wrap items-center justify-start gap-1">
                        @foreach (App\Enums\Generals\StrategyCategories::cases() as $strategyCategory)
                            <label class="cursor-pointer">
                                <input type="checkbox" name="strategy_categories[]"
                                    value="{{ $strategyCategory->value }}" @checked(in_array($strategyCategory->value, (array) request('strategy_categories')))
                                    class="peer sr-only">
                                <span
                                    class="btn-pushable flex h-10 w-36 items-center justify-center rounded-md border border-white bg-brand-sort-detail-button-unselected py-2 text-2xl transition peer-checked:bg-brand-sort-detail-button-selected">
                                    {{ $strategyCategory->label() }}
                                </span>
                            </label>
                        @endforeach
                    </div>
                </div>
                <div class="flex w-[95%] items-center justify-start px-1 py-4 pb-24">
                    <div class="flex w-1/2 justify-start">
                        <div class="flex w-5/6 flex-col">
                            <span class="text-xl text-white">&#9670;イラストレーター</span>
                            <div class="mt-2 flex items-center justify-start gap-1">
                                <select name="illustration" class="w-full py-0 text-xl">
                                    <option value="all">
                                        &#9632;全てのイラストレーター
                                    </option>
                                    {{-- TODO: DBから取得したイラストレーターをループさせる --}}
                                    <option value="1">
                                        イラストレーター名</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-1/2 justify-start">
                        <div class="flex w-5/6 flex-col">
                            <span
                                class="text-xl text-white">&#9670;{{ config('ui.general_sort_detail.category.character_voice', '声優') }}</span>
                            <div class="mt-2 flex items-center justify-start gap-1">
                                <select name="character_voice" class="w-full py-0 text-xl">
                                    <option value="all">
                                        &#9632;全ての声優
                                    </option>
                                    {{-- TODO: DBから取得した声優をループさせる --}}
                                    <option value="1">
                                        声優名</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div x-show="activeTab === '{{ App\Enums\SortStatus::SORT->value }}'" class="flex flex-col items-center">
                <div class="flex w-[95%] flex-wrap px-1 py-4">
                    <span
                        class="w-full text-xl text-white">&#9670;{{ config('ui.general_sort_detail.category.sort', 'ソート') }}</span>
                    @foreach (config('ui.general_sort_detail.sort_selection') as $key => $label)
                        <div
                            class="{{ ($loop->index + 1) % 2 === 0 ? 'pl-4' : '' }} mt-2 flex w-1/2 min-w-0 items-center justify-start gap-1">
                            <p id="{{ $key }}_label"
                                class="my-2 mr-2 flex min-w-0 flex-1 items-center justify-center border-y border-solid border-brand-detail-title-border py-2 text-xl text-brand-detail-title-border">
                                {{ $label }}</p>
                            <button type="button" id="{{ $key }}_desc"
                                class="btn-pushable h-10 w-[22.5%] shrink-0 rounded-md bg-brand-sort-detail-button-unselected text-2xl"
                                onclick="setSortCond(this)">
                                &#9660;
                            </button>
                            <button type="button" id="{{ $key }}_asc"
                                class="btn-pushable h-10 w-[22.5%] shrink-0 rounded-md bg-brand-sort-detail-button-unselected text-2xl"
                                onclick="setSortCond(this)">
                                &#9650;
                            </button>
                        </div>
                    @endforeach
                </div>
                <div class="flex w-[95%] flex-col px-1 py-4">
                    <span
                        class="mb-4 w-full text-xl text-white">&#9670;{{ config('ui.general_sort_detail.category.current_sort_condition', '現在のソート条件') }}</span>
                    <div id="current-sort" class="flex flex-wrap">

                    </div>
                </div>
            </div>
        </form>
    </div>
    @push('scripts')
        @vite('resources/js/modal/general-sort-detail.js')
    @endpush
</x-modal.sort-base-modal>
