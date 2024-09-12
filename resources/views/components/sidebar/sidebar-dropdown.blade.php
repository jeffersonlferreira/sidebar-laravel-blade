@props(['title', 'active' => false])

@php
    $isActive = $active || strpos($slot->toHtml(), 'active') !== false;
@endphp

<li class="hs-accordion pb-2 {{ $isActive ? 'active-class bg-gray-50 rounded-lg' : '' }}" id="account-accordion">
    <button type="button"
        class="hs-accordion-toggle w-full text-start flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-200 focus:outline-none focus:bg-gray-200
        {{ $isActive ? 'bg-gray-200 shadow' : '' }}"
        aria-expanded="{{ $isActive ? 'true' : 'false' }}" aria-controls="account-accordion-child">

        @if (isset($icon))
            {{ $icon }}
        @endif

        {{ $title }}

        <svg class="hs-accordion-active:block ms-auto size-4 {{ $isActive ? 'block' : 'hidden' }}"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="m18 15-6-6-6 6" />
        </svg>

        <svg class="hs-accordion-active:hidden ms-auto size-4 {{ $isActive ? 'hidden' : 'block' }}"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="m6 9 6 6 6-6" />
        </svg>
    </button>

    <div id="account-accordion-child" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 pr-2 {{ $isActive ? 'block' : 'hidden' }}"
        role="region" aria-labelledby="account-accordion">
        <ul class="ps-8 pt-1 space-y-1">
            {{ $slot }}
        </ul>
    </div>
</li>
