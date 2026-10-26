<header x-data="{ open: false }"
    class="relative z-50 border-b border-gray-100 bg-gradient-to-b from-brand-orange to-brand-yamabuki">
    <!-- Overlay: ハンバーガーメニューopen時のグレーアウト -->
    <div x-show="open" x-transition.opacity.300ms class="pointer-events-auto fixed inset-0 z-40 bg-black/40"
        @click="open = false" style="display: none;">
    </div>
    <!-- Primary Navigation Menu -->
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid h-20 grid-cols-3 items-center">
            <!-- Logo -->
            <div class="flex shrink-0 items-center justify-start">
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="block h-20 w-auto fill-current object-contain text-gray-800" />
                </a>
            </div>

            <!-- Title -->
            <div class="flex h-full items-center justify-center">
                @isset($header)
                    {{ $header }}
                @else
                    <h1 class="text-2xl font-bold text-white">データリスト</h1>
                @endisset
            </div>

            <!-- Hamburger Box -->
            <div :style="open ? 'transform: translateX(-3rem)' : ''"
                class="z-50 flex aspect-square h-3/5 items-center justify-self-end rounded-md bg-white shadow-sm transition-transform duration-300">
                <button @click="open = ! open"
                    class="inline-flex w-full items-center justify-center rounded-md text-black focus:outline-none">
                    <div class="flex w-full flex-col items-center">
                        <svg class="h-16 w-full" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                </button>
            </div>
        </div>
    </div>


    <!-- Hamburger Menu -->
    <div x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed right-0 top-0 z-50 h-full w-[25rem] border-l border-gray-200 bg-white shadow-xl"
        style="display: none;">

        <div class="space-y-1 bg-brand-dark pb-3 pt-3 text-center text-white">
            <p class="mx-4 my-4 border-b-2 border-white text-3xl tracking-tighter">
                {{ Auth::user()->name }}
            </p>
        </div>

        @if (Auth::user()->isAdmin())
            <div class="border-t border-gray-200 pb-1">
                {{-- TODO:ルート追加後リンクを修正 --}}
                <x-menu-item :href="route('profile.edit')" :showBottomBorder="true">
                    {{ __('ユーザー管理') }}
                </x-menu-item>
                <x-menu-item :href="route('profile.edit')" :showBottomBorder="true">
                    {{ __('武将管理') }}
                </x-menu-item>
                <x-menu-item :href="route('profile.edit')" :showBottomBorder="true">
                    {{ __('戦器管理') }}
                </x-menu-item>
                <x-menu-item :href="route('profile.edit')" :showBottomBorder="true">
                    {{ __('英魂管理') }}
                </x-menu-item>
                <form method="POST" action="{{ route('logout') }}" class="mt-5 flex items-center justify-center">
                    @csrf
                    <x-action-button :type="'submit'" :variant="'logout'">
                        {{ __('ログアウト') }}
                    </x-action-button>
                </form>
            </div>
        @elseif (Auth::user()->isGeneral())
            <div class="border-t border-gray-200 pb-1">
                <p class="mx-1 my-1 text-2xl font-medium">&#9654;&nbsp;データリスト</p>
                {{-- TODO:ルート追加後リンクを修正 --}}
                <x-menu-item :href="route('profile.edit')">
                    {{ __('武将') }}
                </x-menu-item>
                <x-menu-item :href="route('profile.edit')">
                    {{ __('戦器（購入）') }}
                </x-menu-item>
                <x-menu-item :href="route('profile.edit')" :showBottomBorder="true">
                    {{ __('英魂（購入）') }}
                </x-menu-item>
                <p class="mx-1 my-1 text-2xl font-medium">&#9654;&nbsp;戦器/英魂（強化・整理）</p>
                {{-- TODO:ルート追加後リンクを修正 --}}
                <x-menu-item :href="route('profile.edit')">
                    {{ __('戦器強化・整理') }}
                </x-menu-item>
                <x-menu-item :href="route('profile.edit')" :showBottomBorder="true">
                    {{ __('英魂強化・整理') }}
                </x-menu-item>
                <a href="{{ route('profile.edit') }}"
                    class="mx-1 my-3 block w-full text-start text-xl font-medium font-medium text-black transition duration-150 ease-in-out hover:bg-gray-50 hover:text-gray-800 focus:bg-gray-50 focus:text-gray-800 focus:outline-none">
                    &#9654;&nbsp;大判購入</a>
                <div class="mx-2 border-t-2 border-gray-400"></div>
                <a href="{{ route('profile.edit') }}"
                    class="mx-1 my-3 block w-full text-start text-xl font-medium font-medium text-black transition duration-150 ease-in-out hover:bg-gray-50 hover:text-gray-800 focus:bg-gray-50 focus:text-gray-800 focus:outline-none">
                    &#9654;&nbsp;ユーザー情報</a>
                <div class="mx-2 border-t-2 border-gray-400"></div>
                <form method="POST" action="{{ route('logout') }}" class="mt-5 flex items-center justify-center">
                    @csrf
                    <x-action-button :type="'submit'" :variant="'logout'">
                        {{ __('ログアウト') }}
                    </x-action-button>
                </form>
            </div>
        @else
            <div class="border-t border-gray-200 pb-1">
                <p class="mx-1 my-1 text-2xl font-medium">&#9654;&nbsp;データリスト</p>
                {{-- TODO:ルート追加後リンクを修正 --}}
                <x-menu-item :href="route('profile.edit')" :showBottomBorder="true">
                    {{ __('武将') }}
                </x-menu-item>
                <form method="POST" action="{{ route('login') }}" class="mt-5 flex items-center justify-center">
                    @csrf
                    <x-action-button :type="'submit'" :variant="'action'">
                        {{ __('ログイン') }}
                    </x-action-button>
                </form>
            </div>
        @endif
    </div>
</header>
