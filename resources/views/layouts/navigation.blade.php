<x-sidebar.sidebar-header />

<x-sidebar.sidebar-btn-nav />

<div id="hs-application-sidebar" class="hs-overlay [--auto-close:lg] hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform w-[260px] h-full hidden fixed inset-y-0 start-0 z-[60] bg-white border-e border-gray-200 lg:block lg:translate-x-0 lg:end-auto lg:bottom-0" role="dialog" tabindex="-1" aria-label="Sidebar">
    <div class="relative flex flex-col h-full max-h-full">
        <div class="px-6 pt-4 flex justify-center h-28 items-center">
            <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="{{ route('dashboard') }}" aria-label="Logo">
                <x-application-logo class="block h-14 w-auto fill-current text-gray-800" />
            </a>
        </div>
        <div class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 mt-2">
            <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                <ul class="flex flex-col space-y-1">
                    <x-sidebar.sidebar-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <x-slot:icon>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                <polyline points="9 22 9 12 15 12 15 22" />
                            </svg>
                        </x-slot>
                        {{ __('Dashboard') }}
                    </x-sidebar.sidebar-link>

                    <x-sidebar.sidebar-dropdown title="Administração">
                        <x-slot:icon>
                            <svg class="shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="18" cy="15" r="3" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M10 15H6a4 4 0 0 0-4 4v2" />
                                <path d="m21.7 16.4-.9-.3" />
                                <path d="m15.2 13.9-.9-.3" />
                                <path d="m16.6 18.7.3-.9" />
                                <path d="m19.1 12.2.3-.9" />
                                <path d="m19.6 18.7-.4-1" />
                                <path d="m16.8 12.3-.4-1" />
                                <path d="m14.3 16.6 1-.4" />
                                <path d="m20.7 13.8 1-.4" />
                            </svg>
                        </x-slot>
                        <x-sidebar.sidebar-link :href="route('administration.users')" :active="request()->routeIs('administration.users')">
                            {{ __('Usuarios') }}
                        </x-sidebar.sidebar-link>
                        <x-sidebar.sidebar-link :href="route('administration.groups')" :active="request()->routeIs('administration.groups')">
                            {{ __('Grupos') }}
                        </x-sidebar.sidebar-link>
                    </x-sidebar.sidebar-dropdown>

                    <x-sidebar.sidebar-dropdown title="Menssageria">
                        <x-slot:icon>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle-more shrink-0 mt-0.5 size-4">
                                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/>
                                <path d="M8 12h.01"/>
                                <path d="M12 12h.01"/>
                                <path d="M16 12h.01"/>
                            </svg>
                        </x-slot>
                        <x-sidebar.sidebar-link :href="route('menssage.channels')" :active="request()->routeIs('menssage.channels')">
                            {{ __('Canais') }}
                        </x-sidebar.sidebar-link>
                        <x-sidebar.sidebar-link :href="route('menssage.models')" :active="request()->routeIs('menssage.models')">
                            {{ __('Modelos') }}
                        </x-sidebar.sidebar-link>
                        <x-sidebar.sidebar-link :href="route('menssage.teams')" :active="request()->routeIs('menssage.teams')">
                            {{ __('Grupos') }}
                        </x-sidebar.sidebar-link>
                        <x-sidebar.sidebar-link :href="route('menssage.services')" :active="request()->routeIs('menssage.services')">
                            {{ __('Servicos') }}
                        </x-sidebar.sidebar-link>
                    </x-sidebar.sidebar-dropdown>
                </ul>
            </nav>
        </div>
    </div>
</div>
