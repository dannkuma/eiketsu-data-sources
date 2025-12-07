<?php
namespace App\Enums\Generals;

enum EffectRanges: string
{
    case AllBuffSquare                  = 'all-buff-square';                  // 全体強化四角
    case SelfBuff                       = 'self-buff';                        // 自身強化
    case ThrowCircle                    = 'throw-circle';                     // 投げ円
    case DebuffFormationCircle          = 'debuff-formation-circle';          // 妨害陣形円
    case AllBuffCircle                  = 'all-buff-circle';                  // 全体強化円
    case AllFormationSquare             = 'all-formation-square';             // 全体陣形四角
    case DamageSquare                   = 'damage-square';                    // ダメージ四角
    case AllyDance                      = 'ally-dance';                       // 味方舞
    case All                            = 'all';                              // 全体
    case FrontSquareHorizontal          = 'front-square-horizontal';          // 前方四角横
    case EnemyCastleInside              = 'enemy-castle-inside';              // 敵城内
    case FrontFormationSquareVertical   = 'front-formation-square-vertical';  // 前方陣形四角縦
    case BattlefieldCenterVertical      = 'battlefield-center-vertical';      // 戦場中央縦
    case FrontFormationSquareHorizontal = 'front-formation-square-horizontal';// 前方陣形四角横
    case OwnCastleInside                = 'own-castle-inside';                // 自城内
    case BackAll                        = 'back-all';                         // 後方全体
    case FixedPosition                  = 'fixed-position';                   // 固定位置
    case AllFormationHexagon            = 'all-formation-hexagon';            // 全体陣形六角
    case EnemyDance                     = 'enemy-dance';                      // 敵舞
    case HalfFrontSquare                = 'half-front-square';                // 半分前方四角

    public function label(): string
    {
        return match ($this) {
            self::AllBuffSquare                  => '全体強化四角',
            self::SelfBuff                       => '自身強化',
            self::ThrowCircle                    => '投げ円',
            self::DebuffFormationCircle          => '妨害陣形円',
            self::AllBuffCircle                  => '全体強化円',
            self::AllFormationSquare             => '全体陣形四角',
            self::DamageSquare                   => 'ダメージ四角',
            self::AllyDance                      => '味方舞',
            self::All                            => '全体',
            self::FrontSquareHorizontal          => '前方四角横',
            self::EnemyCastleInside              => '敵城内',
            self::FrontFormationSquareVertical   => '前方陣形四角縦',
            self::BattlefieldCenterVertical      => '戦場中央縦',
            self::FrontFormationSquareHorizontal => '前方陣形四角横',
            self::OwnCastleInside                => '自城内',
            self::BackAll                        => '後方全体',
            self::FixedPosition                  => '固定位置',
            self::AllFormationHexagon            => '全体陣形六角',
            self::EnemyDance                     => '敵舞',
            self::HalfFrontSquare                => '半分前方四角',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}