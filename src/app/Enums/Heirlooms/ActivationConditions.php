<?php

namespace App\Enums\Heirlooms;

enum ActivationConditions: string
{
    case SengokuCostGte4_5 = 'sengoku-cost-gte-4-5';        // 戦国の武将を４.５コスト以上登録
    case EdoBakumatsuCostGte4_5 = 'edo-bakumatsu-cost-gte-4-5'; // 江戸･幕末の武将を４.５コスト以上登録
    case SangokushiCostGte4_5 = 'sangokushi-cost-gte-4-5';     // 三国志の武将を４.５コスト以上登録
    case HeianCostGte4_5 = 'heian-cost-gte-4-5';          // 平安の武将を４.５コスト以上登録
    case ChuseiCostGte4_5 = 'chusei-cost-gte-4-5';         // 中世の武将を４.５コスト以上登録
    case ShunjuSengokuCostGte4_5 = 'shunju-sengoku-cost-gte-4-5'; // 春秋戦国の武将を４.５コスト以上登録
    case None = 'none';                        // なし
    case SpecialCostGte1 = 'special-cost-gte-1';          // 特殊の武将を１コスト以上登録
    case BlueCostGte4_5 = 'blue-cost-gte-4-5';         // 蒼の武将を４.５コスト以上登録
    case ScarletCostGte4_5 = 'scarlet-cost-gte-4-5';   // 緋の武将を４.５コスト以上登録
    case GreenCostGte4_5 = 'green-cost-gte-4-5';       // 碧の武将を４.５コスト以上登録
    case GenCostGte4_5 = 'gen-cost-gte-4-5';           // 玄の武将を４.５コスト以上登録
    case PurpleCostGte4_5 = 'purple-cost-gte-4-5';     // 紫の武将を４.５コスト以上登録
    case OrangeCostGte4_5 = 'orange-cost-gte-4-5';       // 琥の武将を４.５コスト以上登録
    case YellowCostGte4_5 = 'yellow-cost-gte-4-5';     // 黄の武将を４.５コスト以上登録
    case CardCountLte5 = 'card-count-lte-5';           // カード登録枚数が５枚以下
    case CostGte2_5 = 'cost-gte-2-5';                  // コスト２.５以上の武将を登録
    case CostLte1_5 = 'cost-lte-1-5';                  // コスト１.５以下の武将を登録
    case RemainingCountGte25 = 'remaining-count-gte-25'; // 残りカウントが２５カウント以上
    case AllAllies = 'all-allies';                     // 味方全部隊
    case AllEnemies = 'all-enemies';                   // 敵全部隊
    case CardCountGte5 = 'card-count-gte-5';            // カード登録枚数が５枚以上
    case RemainingCountLte40 = 'remaining-count-lte-40';      // 残りカウントが４０カウント以下
    case RemainingCountGte40 = 'remaining-count-gte-40';      // 残りカウントが４０カウント以上
    case RemainingCountLte20 = 'remaining-count-lte-20';      // 残りカウントが２０カウント以下

    public function label(): string
    {
        return match ($this) {
            self::SengokuCostGte4_5 => '戦国の武将を４.５コスト以上登録',
            self::EdoBakumatsuCostGte4_5 => '江戸･幕末の武将を４.５コスト以上登録',
            self::SangokushiCostGte4_5 => '三国志の武将を４.５コスト以上登録',
            self::HeianCostGte4_5 => '平安の武将を４.５コスト以上登録',
            self::ChuseiCostGte4_5 => '中世の武将を４.５コスト以上登録',
            self::ShunjuSengokuCostGte4_5 => '春秋戦国の武将を４.５コスト以上登録',
            self::None => 'なし',
            self::SpecialCostGte1 => '特殊の武将を１コスト以上登録',
            self::BlueCostGte4_5 => '蒼の武将を４.５コスト以上登録',
            self::ScarletCostGte4_5 => '緋の武将を４.５コスト以上登録',
            self::GreenCostGte4_5 => '碧の武将を４.５コスト以上登録',
            self::GenCostGte4_5 => '玄の武将を４.５コスト以上登録',
            self::PurpleCostGte4_5 => '紫の武将を４.５コスト以上登録',
            self::OrangeCostGte4_5 => '琥の武将を４.５コスト以上登録',
            self::YellowCostGte4_5 => '黄の武将を４.５コスト以上登録',
            self::CardCountLte5 => 'カード登録枚数が５枚以下',
            self::CostGte2_5 => 'コスト２.５以上の武将を登録',
            self::CostLte1_5 => 'コスト１.５以下の武将を登録',
            self::RemainingCountGte25 => '残りカウントが２５カウント以上',
            self::AllAllies => '味方全部隊',
            self::AllEnemies => '敵全部隊',
            self::CardCountGte5 => 'カード登録枚数が５枚以上',
            self::RemainingCountLte40 => '残りカウントが４０カウント以下',
            self::RemainingCountGte40 => '残りカウントが４０カウント以上',
            self::RemainingCountLte20 => '残りカウントが２０カウント以下',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
