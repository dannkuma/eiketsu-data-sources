@props([
    'name' => config('modal.names.base', 'base-modal'),
])

<div x-data="{ isOpen: false }" x-on:open-modal.window="if ($event.detail === '{{ $name }}') isOpen = true"
    x-on:keydown.escape.window="isOpen = false">
    <!-- 背景オーバーレイ -->
    <div x-show="isOpen" x-transition.opacity x-on:click="isOpen = false" class="fixed inset-0 z-40 bg-black/70"></div>
    <div x-show="isOpen" x-transition @click="isOpen = false"
        class="fixed inset-0 z-50 flex items-center justify-center p-4">
        <div class="relative w-full max-w-5xl" @click.stop>
            <button type="button"
                class="absolute -top-14 right-0 p-0 text-6xl leading-none text-white hover:text-gray-300 transition-colors focus:outline-none"
                aria-label="閉じる" @click="isOpen = false">
                &times;
            </button>
            <div class="bg-white p-4 shadow-xl">
                <div class="border-solid border-black border p-4">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
