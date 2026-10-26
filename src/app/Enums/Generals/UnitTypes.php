<?php

namespace App\Enums\Generals;

enum UnitTypes: string
{
    case Cavalry = 'cavalry';
    case Lancer = 'lancer';
    case Archer = 'archer';
    case Swordsman = 'swordsman';
    case GunSquad = 'gun-squad';

    public function label(): string
    {
        return match ($this) {
            self::Cavalry => '騎',
            self::Lancer => '槍',
            self::Archer => '弓',
            self::Swordsman => '剣',
            self::GunSquad => '鉄',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
