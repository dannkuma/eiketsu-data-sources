<?php
namespace App\Enums;

enum GetMethods: string
{
    case Starter         = 'starter';         // スターター
    case DiamondShop     = 'diamond-shop';    // 金剛石商店(金剛石交換所)
    case SearchGeneral   = 'search-general';  // 探索(武将)
    case ObtainGeneral   = 'obtain-general';  // 武将獲得
    case StampsCampaign  = 'stamps-campaign'; // 大戦スタンプキャンペーン
    case BasaraShop      = 'basara-shop';     // 金剛石商店(バサラ石交換所)

    public function label(): string
    {
        return match ($this) {
            self::Starter        => 'スターター',
            self::DiamondShop    => '金剛石商店(金剛石交換所)',
            self::SearchGeneral  => '探索(武将)',
            self::ObtainGeneral  => '武将獲得',
            self::StampsCampaign => '大戦スタンプキャンペーン',
            self::BasaraShop     => '金剛石商店(バサラ石交換所)',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}