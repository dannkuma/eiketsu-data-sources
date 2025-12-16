<?php
namespace App\Enums\Heirlooms;

enum ActivationConditions: string
{
    case SengokuCostGte4_5        = 'sengoku-cost-gte-4-5';        // 戦国の武将を4.5コスト以上登録
    case EdoBakumatsuCostGte4_5   = 'edo-bakumatsu-cost-gte-4-5'; // 江戸・幕末の武将を4.5コスト以上登録
    case SangokushiCostGte4_5     = 'sangokushi-cost-gte-4-5';     // 三国志の武将を4.5コスト以上登録
    case HeianCostGte4_5          = 'heian-cost-gte-4-5';          // 平安の武将を4.5コスト以上登録
    case ChuseiCostGte4_5         = 'chusei-cost-gte-4-5';         // 中世の武将を4.5コスト以上登録
    case ShunjuSengokuCostGte4_5  = 'shunju-sengoku-cost-gte-4-5'; // 春秋戦国の武将を4.5コスト以上登録
    case None                     = 'none';                        // なし
    case SpecialCostGte1          = 'special-cost-gte-1';          // 特殊の武将を1コスト以上登録
    case CardCountGte5            = 'card-count-gte-5';            // カード登録枚数が5枚以上
    case RemainingCountLte40      = 'remaining-count-lte-40';      // 残りカウントが40カウント以下
    case RemainingCountGte40      = 'remaining-count-gte-40';      // 残りカウントが40カウント以上
    case RemainingCountLte20      = 'remaining-count-lte-20';      // 残りカウントが20カウント以下

    public function label(): string
    {
        return match ($this) {
            self::SengokuCostGte4_5       => '戦国の武将を4.5コスト以上登録',
            self::EdoBakumatsuCostGte4_5  => '江戸・幕末の武将を4.5コスト以上登録',
            self::SangokushiCostGte4_5    => '三国志の武将を4.5コスト以上登録',
            self::HeianCostGte4_5         => '平安の武将を4.5コスト以上登録',
            self::ChuseiCostGte4_5        => '中世の武将を4.5コスト以上登録',
            self::ShunjuSengokuCostGte4_5 => '春秋戦国の武将を4.5コスト以上登録',
            self::None                    => 'なし',
            self::SpecialCostGte1         => '特殊の武将を1コスト以上登録',
            self::CardCountGte5           => 'カード登録枚数が5枚以上',
            self::RemainingCountLte40     => '残りカウントが40カウント以下',
            self::RemainingCountGte40     => '残りカウントが40カウント以上',
            self::RemainingCountLte20     => '残りカウントが20カウント以下',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}