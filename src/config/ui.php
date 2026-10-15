<?php

/**
 * UI関連の設定値を管理するファイル
 * キーを識別子、表示項目を値とする連想配列を返す
 * 例: 'general_sort_detail' => [ 'base' => '基本', 'detail' => '詳細', 'sort' => 'ソート' ]
 * 表示項目が不要である場合は、キーと値を同一にする
 */
return [
    'modal' => [
        'message' => 'message',
        'general_sort_detail' => 'general-sort-detail',
        'heirloom_sort_detail' => 'heirloom-sort-detail',
    ],
    'general_sort_detail' => [
        'base' => '基本',
        'detail' => '詳細',
        'sort' => 'ソート',
        'category' => [
            'faction' => '勢力',
            'period' => '時代勢力',
            'cost' => 'コスト',
            'unit_type' => '兵種',
            'rarity' => 'レアリティ',
            'free_word' => 'フリーワード検索(対象を指定可能)',
            'power' => '武力',
            'intelligence' => '知力',
            'release_set' => '登場弾',
            'card_type' => 'カード種別',
            'strategy_category' => '計略カテゴリー',
            'character_voice' => '声優',
            'sort' => 'ソート',
            'current_sort_condition' => '現在のソート条件',
        ],
        'free_words' => [
            'general_name' => '武将名',
            'general_name_kana' => '武将名読み',
            'strategy_name' => '計略名',
            'strategy_name_kana' => '計略名読み',
            'strategy_explanation' => '計略説明',
        ],
        'sort_selection' => [
            'power' => '武力',
            'intelligence' => '知力',
            'cost' => 'コスト',
            'required_energy' => '必要士気',
            'japanese_syllabary' => '五十音順',
        ],
    ],
    'heirloom_sort_detail' => [
        'base' => '基本',
        'category' => [
            'rarity' => 'レアリティ',
            'category' => 'カテゴリ',
            'main_effect_category' => '主効果カテゴリー',
            'sub_effect_category' => '副効果カテゴリー',
            'free_word' => 'フリーワード検索(対象を指定可能)',
        ],
        'disp_effect_category' => [
            'revival' => '復活',
            'troop' => '兵力',
            'power' => '武力',
            'intelligence' => '知力',
            'speed' => '速度',
            'disruption' => '妨害',
            'other' => 'その他',
        ],
        'free_words' => [
            'heirloom_name' => '戦器名',
            'heirloom_name_kana' => '戦器読み',
            'strategy_name' => '計略名',
            'strategy_name_kana' => '計略名読み',
            'strategy_explanation' => '計略説明',
        ],
    ],
];
