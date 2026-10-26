@props(['message'])
<x-modal.base-modal name="{{ config('ui.modal.message', 'message') }}">
    <div class="bg-white p-4 shadow-xl">
        <div class="border border-solid border-black p-4">
            {{ $message }}
        </div>
    </div>
</x-modal.base-modal>
