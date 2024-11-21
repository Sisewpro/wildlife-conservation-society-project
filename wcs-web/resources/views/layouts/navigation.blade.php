<nav x-data="{ open: false, isHero: false, hasHero: false }" x-init="
            const heroElement = document.querySelector('.hero');
            hasHero = !!heroElement;
            if (hasHero) {
                window.addEventListener('scroll', () => {
                    isHero = window.scrollY > heroElement.offsetHeight;
                });
            }
        " :class="hasHero && !isHero ? 'text-neutral-content' : 'pb-6'"
    class="dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 sticky z-10">
    <div class="fixed top-0 left-0 right-0 navbar mx-auto px-4 sm:px-6 lg:px-8">
        <div class="navbar-start">
            <!-- Logo -->
            @if (Route::has('login'))
            @auth
            <a href="{{ route('dashboard') }}" class="btn btn-ghost text-xl">
                <x-application-logo class="block h-10 w-auto fill-current dark:text-gray-200 pr-3" />
            </a>
            @else
            <a class="btn btn-ghost text-xl" href="/">
                <x-application-logo class="block h-10 w-auto fill-current dark:text-gray-200 pr-3" />
            </a>
            @endauth
            @endif
        </div>

        <div class="navbar-center invisible sm:visible md:visible lg:visible lg:flex">
            <ul :class="hasHero && !isHero ? '' : 'bg-base-100 rounded-box shadow'" class="menu menu-horizontal px-2">
                <li :class="hasHero && !isHero ? 'hover:font-bold' : ''">
                    @if (Route::has('login'))
                    @auth
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    @else
                    <x-nav-link href="/" class="font-bold hover:bg-success bg-success text-neutral">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    @endauth
                    @endif
                </li>
                <li>
                    <details>
                        <summary :class="hasHero && !isHero ? 'hover:font-bold' : ''">Discover</summary>
                        <ul class="p-2 w-52 text-base-content">
                            <li><x-dropdown-link href="{{ route('photos.view') }}" :active="request()->routeIs('photos.view')">Photos</x-dropdown-link></li>
                            <li><x-dropdown-link href="{{ route('videos.view') }}" :active="request()->routeIs('videos.view')">Videos</x-dropdown-link></li>
                            <li><x-dropdown-link href="{{ route('audios.view') }}" :active="request()->routeIs('audios.view')">Audios</x-dropdown-link></li>
                        </ul>
                    </details>
                </li>
                <li :class="hasHero && !isHero ? 'hover:font-bold' : ''">
                    <x-nav-link :href="route('upload.uploadArticle')"
                        :active="request()->routeIs('upload.uploadArticle')">
                        {{ __('Uploads') }}
                    </x-nav-link>
                </li>
            </ul>
        </div>
        <div class="navbar-end">
            <!-- Hamburger -->
            <div class="dropdown flex-none">
                <div tabindex="0" role="button" @click="open = ! open"
                    class="btn btn-ghost lg:hidden md:hidden sm:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block h-5 w-5 stroke-current">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                @if (Route::has('login'))
                @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md focus:outline-none transition ease-in-out duration-150">
                            <div class="hover:underline underline-offset-8">{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                @else
                <a href="{{ route('login') }}" class="hover:underline underline-offset-8 me-4 text-sm font-medium">
                    Login
                </a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="hover:underline underline-offset-8 me-3 text-sm font-medium">
                    Register
                </a>
                @endif
                @endauth
                @endif
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="fixed inset-x-0 top-14 hidden sm:hidden bg-base-100 z-10">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link>{{ __('Discover') }}</x-responsive-nav-link>
            <x-responsive-nav-link>{{ __('Uploads') }}</x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            @if (Route::has('login'))
            @auth
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
            @else
            <div>
                <x-responsive-nav-link :href="route('login')">
                    {{ __('Log in') }}
                </x-responsive-nav-link>
            </div>
            @if (Route::has('register'))
            <div>
                <x-responsive-nav-link :href="route('register')">
                    {{ __('Register') }}
                </x-responsive-nav-link>
            </div>
            @endif
            @endauth
            @endif
        </div>
    </div>
</nav>