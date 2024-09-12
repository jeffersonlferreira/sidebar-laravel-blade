<header class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-[48] w-full bg-gray-50 border-b text-sm py-2.5 lg:ps-[260px]">
    <nav class="px-4 sm:px-6 flex basis-full items-center w-full mx-auto">

        <div class="me-5 lg:me-0 lg:hidden flex justify-center">
            <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="{{ route('dashboard') }}" aria-label="Logo">
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
            </a>
        </div>

        <div class="w-full flex items-center justify-end ms-auto md:justify-between gap-x-1 md:gap-x-3">
            <div class="hidden md:block"></div>
            <div class="flex flex-row items-center justify-end gap-1">
                <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                    <button id="hs-dropdown-account" type="button" aria-haspopup="menu" aria-expanded="false"
                        aria-label="Dropdown">
                        <div class="shrink-0 group block">
                            <div class="flex items-center">
                                <span class="inline-flex items-center justify-center size-[38px] rounded-full bg-gray-500 text-sm font-semibold text-white leading-none mr-1">

                                    @php
                                        $name = Auth::user()->name;
                                        $initials = collect(explode(' ', $name))->map(fn($word) => strtoupper($word[0]))->join('');
                                    @endphp

                                    {{ $initials }}

                                </span>
                                <h3 class="font-semibold text-gray-800 ms-1">
                                    {{ Auth::user()->name }}
                                </h3>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                        role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-account">
                        <div class="py-3 px-5 bg-gray-100 rounded-t-lg shadow-md">
                            <p class="text-sm text-gray-500">Conectado como:</p>
                            <p class="text-sm font-medium text-gray-800">{{ Auth::user()->email }}</p>
                        </div>
                        <div class="p-1.5 space-y-0.5">
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                href="{{ route('profile.edit') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-pen shrink-0 size-4"><path d="M11.5 15H7a4 4 0 0 0-4 4v2"/><path d="M21.378 16.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z"/><circle cx="10" cy="7" r="4"/></svg>
                                Perfil
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out shrink-0 size-4">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/>
                                        <line x1="21" x2="9" y1="12" y2="12"/>
                                    </svg>
                                    Desconectar
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
