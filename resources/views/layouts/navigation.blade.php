<nav x-data="{ open: false }"
    class="bg-white border-b border-gray-200 sticky top-0 z-50">

    <div class="px-6">
        <div class="flex justify-between items-center h-[60px]">

            <div class="flex items-center">
                <a href="{{ route('dashboard') }}">
                    <img
                        src="{{ asset('images/Logo.svg') }}"
                        alt="Smart Exam"
                        class="h-8 w-auto">
                </a>
            </div>

            <div class="hidden sm:flex items-center gap-6">

                <button
                    class="relative text-blue-500 hover:text-blue-600 transition focus:outline-none">

                    <span
                        class="absolute -top-2 -right-2 bg-red-500 text-white text-[10px] font-semibold min-w-[20px] h-[20px] rounded-full flex items-center justify-center border border-white">
                        99+
                    </span>

                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg>

                </button>

                <x-dropdown align="right" width="56">

                    <x-slot name="trigger">

                        <button
                            class="flex items-center gap-3 focus:outline-none">

                            <div
                                class="w-10 h-10 rounded-full bg-orange-100 border border-orange-200 flex items-center justify-center text-orange-600 font-semibold text-sm">
                                {{ strtoupper(substr(Auth::user()->name,0,2)) }}
                            </div>

                            <div class="text-left">
                                <div
                                    class="text-gray-700 text-sm font-medium leading-tight">
                                    {{ Auth::user()->name }}
                                </div>
                                <span
                                    class="inline-block mt-1 px-2 py-0.5 text-[10px] rounded-full bg-green-100 text-green-700 border border-green-200">
                                    Dosen
                                </span>
                            </div>

                            <svg class="w-4 h-4 text-gray-400 transition-transform duration-200" :class="{ 'rotate-180': open }" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>

                        </button>

                    </x-slot>

                    <x-slot name="content">
                        <div
                            class="px-4 py-2 text-xs text-gray-400 border-b">
                            Pengaturan Akun
                        </div>

                        <x-dropdown-link
                            :href="route('profile.edit')">
                            Profil Saya
                        </x-dropdown-link>

                        <form
                            method="POST"
                            action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link
                                :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                <span class="text-red-500">
                                    Keluar Aplikasi
                                </span>
                            </x-dropdown-link>
                        </form>
                    </x-slot>

                </x-dropdown>

            </div>

            <div class="sm:hidden">
                <button
                    @click="open = !open"
                    class="p-2 rounded-md text-gray-500 hover:bg-gray-100 focus:outline-none">

                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" d="M3 12h18M3 6h18M3 18h18"/>
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" d="M18 6L6 18M6 6l12 12"/>
                    </svg>

                </button>
            </div>

        </div>
    </div>

    <div
        x-show="open"
        x-cloak
        class="sm:hidden border-t border-gray-100 bg-white">

        <div class="p-4">
            <div class="flex items-center gap-3 mb-4">
                <div
                    class="w-10 h-10 rounded-full bg-orange-100 border border-orange-200 flex items-center justify-center text-orange-600 font-semibold">
                    {{ strtoupper(substr(Auth::user()->name,0,2)) }}
                </div>
                <div>
                    <div class="font-medium text-gray-800">
                        {{ Auth::user()->name }}
                    </div>
                    <span
                        class="text-[10px] bg-green-100 text-green-700 px-2 py-0.5 rounded-full">
                        Dosen
                    </span>
                </div>
            </div>

            <x-responsive-nav-link
                :href="route('profile.edit')">
                Profil Saya
            </x-responsive-nav-link>

            <form
                method="POST"
                action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link
                    :href="route('logout')"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    <span class="text-red-500">
                        Keluar Aplikasi
                    </span>
                </x-responsive-nav-link>
            </form>
        </div>

    </div>

</nav>
