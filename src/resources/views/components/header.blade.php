<header x-data="{ open: false }"
    class="bg-gradient-to-b from-brand-orange to-brand-yamabuki border-b border-gray-100 relative z-50">
    <!-- Overlay: ハンバーガーメニューopen時のグレーアウト -->
    <div x-show="open" x-transition.opacity.300ms class="fixed inset-0 bg-black/40 z-40 pointer-events-auto"
        @click="open = false" style="display: none;">
    </div>
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-28">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="block h-24 w-auto object-contain fill-current text-gray-800" />
                </a>
            </div>

            <!-- Title -->
            <div class="h-full flex items-center">
                <h1 class="text-4xl font-bold text-white">データリスト</h1>
            </div>

            <!-- Hamburger Box -->
            <div :style="open ? 'transform: translateX(-19rem)' : ''"
                class="flex items-center h-4/5 aspect-square bg-white rounded-md shadow-sm transition-transform duration-300 z-50">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center w-full rounded-md text-black focus:outline-none">
                    <div class="flex flex-col items-center w-full">
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
        class="fixed top-0 right-0 w-[25rem] h-full bg-white border-l border-gray-200 z-50 shadow-xl"
        style="display: none;">

        <div class="pt-3 pb-3 space-y-1 text-center bg-brand-dark text-white">
            <p class="mx-4 my-4 text-3xl border-b-2 border-white tracking-tighter">
                {{ Auth::user()->name }}
            </p>
        </div>

        @if (Auth::user()->isAdmin())
            <div class="pb-1 border-t border-gray-200">
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
                <form method="POST" action="{{ route('logout') }}" class="flex justify-center items-center mt-5">
                    @csrf
                    <x-action-button :type="'submit'" :variant="'logout'">
                        {{ __('ログアウト') }}
                    </x-action-button>
                </form>
            </div>
        @elseif (Auth::user()->isGeneral())
            <div class="pb-1 border-t border-gray-200">
                <p class="text-2xl font-medium my-1 mx-1">&#9654;&nbsp;データリスト</p>
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
                <p class="text-2xl font-medium my-1 mx-1">&#9654;&nbsp;戦器/英魂（強化・整理）</p>
                {{-- TODO:ルート追加後リンクを修正 --}}
                <x-menu-item :href="route('profile.edit')">
                    {{ __('戦器強化・整理') }}
                </x-menu-item>
                <x-menu-item :href="route('profile.edit')" :showBottomBorder="true">
                    {{ __('英魂強化・整理') }}
                </x-menu-item>
                <a href="{{ route('profile.edit') }}"
                    class="font-medium my-3 mx-1 block w-full text-start text-xl font-medium text-black hover:text-gray-800 hover:bg-gray-50 focus:outline-none focus:text-gray-800 focus:bg-gray-50 transition duration-150 ease-in-out">
                    &#9654;&nbsp;大判購入</a>
                <div class="mx-2 border-t-2 border-gray-400"></div>
                <a href="{{ route('profile.edit') }}"
                    class="font-medium my-3 mx-1 block w-full text-start text-xl font-medium text-black hover:text-gray-800 hover:bg-gray-50 focus:outline-none focus:text-gray-800 focus:bg-gray-50 transition duration-150 ease-in-out">
                    &#9654;&nbsp;ユーザー情報</a>
                <div class="mx-2 border-t-2 border-gray-400"></div>
                <form method="POST" action="{{ route('logout') }}" class="flex justify-center items-center mt-5">
                    @csrf
                    <x-action-button :type="'submit'" :variant="'logout'">
                        {{ __('ログアウト') }}
                    </x-action-button>
                </form>
            </div>
        @else
            <div class="pb-1 border-t border-gray-200">
                <p class="text-2xl font-medium my-1 mx-1">&#9654;&nbsp;データリスト</p>
                {{-- TODO:ルート追加後リンクを修正 --}}
                <x-menu-item :href="route('profile.edit')" :showBottomBorder="true">
                    {{ __('武将') }}
                </x-menu-item>
                <form method="POST" action="{{ route('login') }}" class="flex justify-center items-center mt-5">
                    @csrf
                    <x-action-button :type="'submit'" :variant="'action'">
                        {{ __('ログイン') }}
                    </x-action-button>
                </form>
            </div>
        @endif
    </div>
</header>
