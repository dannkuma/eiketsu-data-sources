<?php
namespace App\Enums\Generals;

enum UnitTypes: string
{
    case Cavalry   = 'cavalry';
    case Lancer    = 'lancer';
    case Archer    = 'archer';
    case Swordsman = 'swordsman';
    case GunSquad  = 'gun-squad';

    public function label(): string
    {
        return match ($this) {
            self::Cavalry   => '騎兵',
            self::Lancer    => '槍兵',
            self::Archer    => '弓兵',
            self::Swordsman => '剣豪',
            self::GunSquad  => '鉄砲隊',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}