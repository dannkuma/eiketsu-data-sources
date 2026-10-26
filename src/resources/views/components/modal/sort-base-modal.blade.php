@props([
    'name' => config('ui.modal.message', 'message'),
])

<div x-data="{ isOpen: false }" x-on:open-modal.window="if ($event.detail === '{{ $name }}') isOpen = true"
    x-on:keydown.escape.window="isOpen = false" class="w-full">

    <div x-show="isOpen" x-transition @click="isOpen = false"
        class="absolute bottom-0 left-1/2 top-0 z-40 flex w-[50rem] -translate-x-1/2 flex-col bg-brand-sort-detail-base-back">

        <div class="flex min-h-0 flex-1 flex-col">
            <div class="relative flex min-h-0 w-full flex-1 flex-col" @click.stop>
                {{ $slot }}
            </div>
        </div>

    </div>
</div>
