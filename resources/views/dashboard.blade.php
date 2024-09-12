<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- CONTENT --}}
    <div class="w-full lg:ps-64 pt-8">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="w-full lg:ps-64 pt-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 flex gap-6">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg w-full">
                <div class="p-6 text-gray-900">
                    <h1>Bloco 01</h1>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg w-full">
                <div class="p-6 text-gray-900">
                    <h1>Bloco 02</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full lg:ps-64 pt-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-center">Bloco 03</h2>
                </div>
            </div>
        </div>
    </div>
    {{-- END CONTENT --}}
</x-app-layout>
