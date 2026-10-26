<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="relative min-h-screen">
        <div class="py-12">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-slate-800 shadow-sm sm:rounded-lg">
                    <div class="">
                        <x-deck-area />
                    </div><br>
                    <div class="px-2">
                        <x-detail-header title="計略詳細・所持武将一覧" />
                    </div><br>
                    <div class="bg-white">
                        <x-general-info />
                        <x-general-record />
                    </div>
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
            <div>
                <x-datalist-category-toggle type="general" />
            </div>
            <div x-data>
                <button
                    @click="$dispatch('open-modal', '{{ config('ui.modal.general_sort_detail', 'general-sort-detail') }}')"
                    type="button"
                    class="inline-flex items-center rounded-md border border-transparent bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:bg-gray-900">
                    開く
                </button>
            </div>
            <x-general-info />
            <x-general-record />
            <x-heirloom-info />
            <x-heirloom-info-record />
            <div class="mb-4 text-2xl font-bold">a</div>
            <div class="flex justify-between gap-1">
                {{-- これ --}}
                <x-owned-heirloom-record />
                <x-owned-heirloom-record />
            </div>
            <x-heirloom-record />
            <x-heirloom-soul-equipment-record />
            <x-soul-info />
            <x-soul-info-record />
            <div class="mt-2 flex justify-between gap-1">
                <x-owned-soul-record />
                <x-owned-soul-record />
            </div>
            <x-modal.general-sort-detail-modal dispState="base" />
        </div>
    </div>
</x-app-layout>
