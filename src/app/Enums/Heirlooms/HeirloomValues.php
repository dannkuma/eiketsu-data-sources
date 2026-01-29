<?php

namespace App\Enums\Heirlooms;

enum HeirloomValues: string
{
    case ZeroPointThree = '0.3';
    case ZeroPointFour = '0.4';
    case ZeroPointSix = '0.6';
    case ZeroPointSixFive = '0.65';
    case ZeroPointSeven = '0.7';
    case ZeroPointSevenFive = '0.75';
    case ZeroPointEight = '0.8';
    case ZeroPointEightFive = '0.85';
    case One = '1.0';
    case Two = '2.0';
    case Three = '3.0';
    case Four = '4.0';
    case Five = '5.0';
    case Six = '6.0';
    case Seven = '7.0';
    case Eight = '8.0';
    case Ten = '10.0';
    case Twelve = '12.0';
    case Thirteen = '13.0';
    case Fourteen = '14.0';
    case Fifteen = '15.0';
    case Sixteen = '16.0';
    case Seventeen = '17.0';
    case Eighteen = '18.0';
    case Nineteen = '19.0';
    case Twenty = '20.0';
    case TwentyOne = '21.0';
    case TwentyTwo = '22.0';
    case TwentyThree = '23.0';
    case TwentyFour = '24.0';
    case TwentyFive = '25.0';
    case Thirty = '30.0';
    case ThirtyFive = '35.0';
    case Forty = '40.0';
    case FortyFive = '45.0';
    case Fifty = '50.0';
    case FiftyFive = '55.0';
    case Seventy = '70.0';
    case NinetyNine = '99.0';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
