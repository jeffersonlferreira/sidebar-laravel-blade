@php
$classes = ($active ?? false)
            ? 'flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-200 focus:outline-none focus:bg-gray-200 bg-gray-200 border-l-4 border-l-blue-600 shadow'
            : 'flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-200 focus:outline-none focus:bg-gray-200';
@endphp
<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>

        @if (isset($icon))
        {{ $icon }}
        @endif

        {{ $slot }}
    </a>
</li>
