@props(['active'])

@php
$classes = ($active ?? false)
            ? 'font-bold hover:bg-success bg-success text-neutral'
            /* alternative active style
                ? 'font-bold underline underline-offset-4 decoration-indigo-400' 
            */
            : '';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
