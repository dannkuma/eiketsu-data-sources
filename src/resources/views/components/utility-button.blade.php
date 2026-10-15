@props(['type' => 'submit', 'variant' => 'action'])

@php
    $class = match ($variant) {
        // 何かを実行する・進む（赤系グラデーション）
        'action'
            => 'bg-gradient-to-b from-brand-action-light to-brand-action-dark hover:brightness-110 active:brightness-90 focus:ring-brand-action-dark text-white',
        // リセット・戻る（青系グラデーション）
        'cancel'
            => 'bg-gradient-to-b from-brand-cancel-light to-brand-cancel-dark hover:brightness-110 active:brightness-90 focus:ring-brand-cancel-dark text-white',
        // プレビュー・インポート・エクスポート（緑系グラデーション）
        'success'
            => 'bg-gradient-to-b from-brand-success-light to-brand-success-dark hover:brightness-110 active:brightness-90 focus:ring-brand-success-dark text-white',
        // ログアウト（グレー系グラデーション）
        'logout'
            => 'bg-gradient-to-b from-brand-logout-light to-brand-logout-dark hover:brightness-110 active:brightness-90 focus:ring-brand-logout-dark text-white',
        default => throw new InvalidArgumentException("Invalid button variant: $variant"),
    };

    $baseClass =
        'inline-flex items-center px-6 py-1 border border-transparent rounded-md font-semibold tracking-widest focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150';
@endphp

<button {{ $attributes->merge(['type' => $type, 'class' => $baseClass . ' ' . $class]) }}>
    {{ $slot }}
</button>
