@props(['type' => 'submit', 'variant' => 'blue'])

@php
    $class = match ($variant) {
        // 青系グラデーション
        'blue' => 'bg-gradient-to-b from-brand-cancel-light to-brand-cancel-dark focus:ring-brand-cancel-dark',
        // グレー系グラデーション
        'gray' => 'bg-gradient-to-b from-brand-logout-light to-brand-logout-dark focus:ring-brand-logout-dark',
        default => throw new InvalidArgumentException("Invalid button variant: $variant"),
    };

    $baseClass = 'w-[24%] text-white font-extrabold text-xl py-4 px-4 btn-pushable';
    $buttonClass = trim($baseClass . ' ' . $class . ' ' . $attributes->get('class', ''));
@endphp

<button {{ $attributes->except('class')->merge(['type' => $type, 'class' => $buttonClass]) }}>
    {{ $slot }}
</button>
