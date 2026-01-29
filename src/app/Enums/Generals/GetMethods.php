<?php

namespace App\Enums\Generals;

enum GetMethods: string
{
    case Starter = 'starter';         // スターター
    case SearchGeneral = 'search-general';  // 探索(武将)
    case AcquireGeneral = 'acquire-general';  // 武将獲得
    case DiamondShop = 'diamond-shop';    // 金剛石商店(金剛石交換所)
    case BasaraShop = 'basara-shop';     // 金剛石商店(バサラ石交換所)
    case PointShop = 'point-shop';      // ポイントショップイベント
    case StampsCampaign = 'stamps-campaign'; // 大戦スタンプキャンペーン
    case GoodsCampaignFirst = 'goods-campaign-first'; // スペシャルグッズキャンペーン第1弾
    case GoodsCampaignSecond = 'goods-campaign-second'; // スペシャルグッズキャンペーン第2弾
    case GoodsCampaignThird = 'goods-campaign-third'; // スペシャルグッズキャンペーン第3弾
    case GoodsCampaignFourth = 'goods-campaign-fourth'; // スペシャルグッズキャンペーン第4弾
    case PreviousGamePlayPrivilege = 'previous-game-play-privilege'; // 三国志大戦プレイ特典
    case CommunityAndTwitterCampaign = 'community-and-twitter-campaign'; // 大戦組連携&Twitterフォローキャンペーン
    case LaunchCommemorationCampaign = 'launch-commemoration-campaign'; // 英傑大戦稼働記念キャンペーン

    public function label(): string
    {
        return match ($this) {
            self::Starter => 'スターター',
            self::SearchGeneral => '探索(武将)',
            self::AcquireGeneral => '武将獲得',
            self::DiamondShop => '金剛石商店(金剛石交換所)',
            self::BasaraShop => '金剛石商店(バサラ石交換所)',
            self::PointShop => 'ポイントショップイベント',
            self::StampsCampaign => '大戦スタンプキャンペーン',
            self::GoodsCampaignFirst => 'スペシャルグッズキャンペーン第1弾',
            self::GoodsCampaignSecond => 'スペシャルグッズキャンペーン第2弾',
            self::GoodsCampaignThird => 'スペシャルグッズキャンペーン第3弾',
            self::GoodsCampaignFourth => 'スペシャルグッズキャンペーン第4弾',
            self::PreviousGamePlayPrivilege => '三国志大戦プレイ特典',
            self::CommunityAndTwitterCampaign => '大戦組連携&Twitterフォローキャンペーン',
            self::LaunchCommemorationCampaign => '英傑大戦稼働記念キャンペーン',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
