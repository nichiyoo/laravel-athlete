@props([
    'disabled' => false,
])

@php
    $props = $attributes->merge([
        'class' => implode(' ', [
            'w-full bg-zinc-50 text-sm',
            'border-primary focus:border-primary-500 focus:ring-primary-500 rounded-md',
            $disabled ? 'opacity-50' : '',
        ]),
    ]);
@endphp

<input @if ($disabled) disabled @endif {{ $props }}>
