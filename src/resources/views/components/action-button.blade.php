@props(['type' => 'submit', 'variant' => 'action'])

@php
    $class = match ($variant) {
        // 何かを実行する・進む（赤系グラデーション）
        'action' => 'bg-gradient-to-b from-brand-action-light to-brand-action-dark focus:ring-brand-action-dark',
        // リセット・戻る（青系グラデーション）
        'cancel' => 'bg-gradient-to-b from-brand-cancel-light to-brand-cancel-dark focus:ring-brand-cancel-dark',
        // プレビュー・インポート・エクスポート（緑系グラデーション）
        'success' => 'bg-gradient-to-b from-brand-success-light to-brand-success-dark focus:ring-brand-success-dark',
        // ログアウト（グレー系グラデーション）
        'logout' => 'bg-gradient-to-b from-brand-logout-light to-brand-logout-dark focus:ring-brand-logout-dark',
        // デッキ詳細（青系単色）
        'deck-detail' => 'bg-brand-deck-area-button focus:ring-brand-deck-area-button',
        // 非活性時（グレー単色）
        'disabled' => 'bg-brand-disabled focus:ring-brand-disabled',
        // 検索ボタン（青系単色背景、文字色黄色）
        'search' => 'text-brand-search-button bg-brand-deck-area-button focus:ring-brand-deck-area-button',
        default => throw new InvalidArgumentException("Invalid button variant: $variant"),
    };

    $baseClass =
        'inline-flex items-center justify-center text-lg px-6 py-2 border-t border-l border-r-[0.1875rem] border-b-[0.1875rem] border-t-white/20 border-l-white/20 border-r-black/30 border-b-black/35 rounded-md font-semibold tracking-widest text-white focus:outline-none focus:ring-2 focus:ring-offset-2';

    $interactiveClass = $variant === 'disabled' ? 'cursor-not-allowed pointer-events-none' : 'btn-pushable';
@endphp

<button {{ $attributes->merge(['type' => $type, 'class' => $baseClass . ' ' . $interactiveClass . ' ' . $class]) }}>
    {{ $slot }}
</button>
