{{-- TODO: モーダルの動作確認用Blade（本番環境では削除予定） --}}
<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('モーダル動作確認画面') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>モーダル動作確認画面</h1>

                    <div x-data>
                        <button
                            @click="$dispatch('open-modal', '{{ config('ui.modal.general_sort_detail', 'general-sort-detail') }}')"
                            type="button"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            開く
                        </button>
                    </div>

                    {{-- <x-modal.message-modal message="これはメッセージモーダルの内容です。" /> --}}
                    <x-modal.general-sort-detail-modal dispState="base" />
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
