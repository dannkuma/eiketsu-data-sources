<?php

namespace App\Enums\Heirlooms;

enum HeirloomEffectDescriptions: string
{
    case AlliesRevivalTimeDecrease = 'allies_revival_time_decrease';
    case AlliesEnergyUp = 'allies_energy_up';
    case AlliesStyleGaugeUp = 'allies_style_gauge_up';
    case AlliesTroopStrengthRecover = 'allies_troop_strength_recover';
    case HeirloomEquippedReviveSpawn = 'heirloom_equipped_revive_spawn';
    case HeirloomEquippedRevivePowerUp = 'heirloom_equipped_revive_power_up';
    case ReturnAlliesToCastleInstant = 'return_allies_to_castle_instant';
    case AlliesSpeedUp = 'allies_speed_up';
    case AlliesTroopStrengthRecoverCostAbove2_5 = 'allies_troop_strength_recover_cost_above_2_5';
    case AlliesTroopStrengthRecoverCostBelow1_5 = 'allies_troop_strength_recover_cost_below_1_5';
    case HeirloomEquippedPowerUp = 'heirloom_equipped_power_up';
    case AlliesPowerUp = 'allies_power_up';
    case AlliesTroopStrengthOverMaxRecover = 'allies_troop_strength_over_max_recover';
    case HeirloomEquippedIntelligenceUp = 'heirloom_equipped_intelligence_up';
    case HeirloomEquippedPowerAndIntelligenceUp = 'heirloom_equipped_power_and_intelligence_up';
    case AlliesHakiIncrease = 'allies_haki_increase';
    case ReduceDamageFromAlliesPower = 'reduce_damage_from_allies_power';
    case AlliesTroopStrengthGradualRecover = 'allies_troop_strength_gradual_recover';
    case AlliesSiegePowerUp = 'allies_siege_power_up';
    case AlliesTroopStrengthRecoverOnKill = 'allies_troop_strength_recover_on_kill';
    case RevivalTimeDecreaseOnRetreat = 'revival_time_decrease_on_retreat';
    case AlliesIntelligenceUp = 'allies_intelligence_up';
    case SpearmanOmniSpearAttack = 'spearman_omni_spear_attack';
    case ArcherShootingTimeExtend = 'archer_shooting_time_extend';
    case SwordsmanSlashDelayReduce = 'swordsman_slash_delay_reduce';
    case GunSquadAmmoRecoverSpeedUp = 'gun_squad_ammo_recover_speed_up';
    case AlliesAttackSpeedInMeleeUp = 'allies_attack_speed_in_melee_up';
    case HeirloomEquippedTroopStrengthOverMaxRecover = 'Heirloom_equipped_troop_strength_over_max_recover';
    case AlliesPowerUpSpeedDown = 'allies_power_up_speed_down';
    case HeirloomEquippedAttackAndSpeedUp = 'Heirloom_equipped_attack_and_speed_up';
    case CavalryAttackAndSpeedUp = 'cavalry_attack_and_speed_up';
    case EnemySpeedDown = 'enemy_speed_down';
    case EnemyAttackDown = 'enemy_attack_down';
    case EnemyIntelligenceDown = 'enemy_intelligence_down';
    case HighestEnemyAttackAndSpeedDown = 'highest_enemy_attack_and_speed_down';

    public function label(): string
    {
        return match ($this) {
            self::AlliesRevivalTimeDecrease => '撤退中の味方の復活時間が減少する',
            self::AlliesEnergyUp => '自軍の士気が上がる',
            self::AlliesStyleGaugeUp => '自軍の流派ゲージが上がる',
            self::AlliesTroopStrengthRecover => '味方の兵力が回復する',
            self::HeirloomEquippedReviveSpawn => '戦器を装備している味方が撤退している場合復活し武力が上がり撤退した場所に出現する',
            self::HeirloomEquippedRevivePowerUp => '撤退中の戦器を装備している味方が復活し武力が上がる',
            self::ReturnAlliesToCastleInstant => '戦場の味方を一瞬で城に戻す',
            self::AlliesSpeedUp => '味方の移動速度が上がる',
            self::AlliesTroopStrengthRecoverCostAbove2_5 => 'コスト２.５以上の味方の兵力が回復する',
            self::AlliesTroopStrengthRecoverCostBelow1_5 => 'コスト１.５以下の味方の兵力が回復する',
            self::HeirloomEquippedPowerUp => '戦器を装備している味方の武力が上がる',
            self::AlliesPowerUp => '味方の武力が上がる',
            self::AlliesTroopStrengthOverMaxRecover => '味方の兵力が上限を超えて回復する',
            self::HeirloomEquippedIntelligenceUp => '戦器を装備している味方の知力が上がる',
            self::HeirloomEquippedPowerAndIntelligenceUp => '戦器を装備している味方の武力と知力が上がる',
            self::AlliesHakiIncrease => '味方の覇気の溜まる量が増える',
            self::ReduceDamageFromAlliesPower => '味方の武力によるダメージを軽減する',
            self::AlliesTroopStrengthGradualRecover => '味方の兵力が徐々に回復する',
            self::AlliesSiegePowerUp => '味方の攻城力が上がる',
            self::AlliesTroopStrengthRecoverOnKill => '敵を撃破するたびに味方の兵力が回復する',
            self::RevivalTimeDecreaseOnRetreat => '撤退したときの復活時間が減少する',
            self::AlliesIntelligenceUp => '味方の知力が上がる',
            self::SpearmanOmniSpearAttack => '槍兵の味方が全方向に槍の無敵攻撃を行う',
            self::ArcherShootingTimeExtend => '弓兵の味方の走射時間が延びる',
            self::SwordsmanSlashDelayReduce => '剣豪の味方の斬撃が発生するまでの時間を短縮する',
            self::GunSquadAmmoRecoverSpeedUp => '鉄砲隊の味方の弾数の回復速度が上がる',
            self::AlliesAttackSpeedInMeleeUp => '味方の乱戦中の攻撃速度が上がる',
            self::HeirloomEquippedTroopStrengthOverMaxRecover => '戦器を装備している味方の兵力が上限を超えて回復する',
            self::AlliesPowerUpSpeedDown => '味方の武力が上がるが、移動速度が下がる',
            self::HeirloomEquippedAttackAndSpeedUp => '戦器を装備している味方の武力と移動速度が上がる',
            self::CavalryAttackAndSpeedUp => '騎兵の味方の武力と移動速度が上がる',
            self::EnemySpeedDown => '敵の移動速度を下げる',
            self::EnemyAttackDown => '敵の武力を下げる',
            self::EnemyIntelligenceDown => '敵の知力を下げる',
            self::HighestEnemyAttackAndSpeedDown => '戦場にいる最も武力の高い敵の武力と移動速度を下げる',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
