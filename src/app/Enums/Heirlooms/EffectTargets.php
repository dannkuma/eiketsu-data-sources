<?php

namespace App\Enums\Heirlooms;

enum EffectTargets: string
{
    case AllAllies = 'all-allies';             // 味方全部隊
    case OwnArmy = 'own-army';               // 自軍
    case AlliesWithWarHeirloom = 'allies-with-war-heirloom';   // 戦器を装備している味方
    case BattlefieldAllies = 'battlefield-allies';     // 戦場の味方
    case CostGte2_5Allies = 'cost-gte-2-5-allies';    // コスト2.5以上の味方
    case CostLte1_5Allies = 'cost-lte-1-5-allies';    // コスト1.5以下の味方
    case LancerAllies = 'lancer-allies';          // 槍兵の味方
    case ArcherAllies = 'archer-allies';          // 弓兵の味方
    case SwordsmanAllies = 'swordsman-allies';       // 剣豪の味方
    case GunSquadAllies = 'gun-squad-allies';       // 鉄砲隊の味方
    case CavalryAllies = 'cavalry-allies';         // 騎兵の味方
    case HighestEnemyPower = 'highest-enemy-power';    // 最も武力の高い敵

    public function label(): string
    {
        return match ($this) {
            self::AllAllies => '味方全部隊',
            self::OwnArmy => '自軍',
            self::AlliesWithWarHeirloom => '戦器を装備している味方',
            self::BattlefieldAllies => '戦場の味方',
            self::CostGte2_5Allies => 'コスト2.5以上の味方',
            self::CostLte1_5Allies => 'コスト1.5以下の味方',
            self::LancerAllies => '槍兵の味方',
            self::ArcherAllies => '弓兵の味方',
            self::SwordsmanAllies => '剣豪の味方',
            self::GunSquadAllies => '鉄砲隊の味方',
            self::CavalryAllies => '騎兵の味方',
            self::HighestEnemyPower => '最も武力の高い敵',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
