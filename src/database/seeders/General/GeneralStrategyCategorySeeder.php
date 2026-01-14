<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class GeneralStrategyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $generalStrategyCategories = [
            [
                'general_id' => 1,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 2,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 3,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 4,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 4,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 5,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 6,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 7,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 7,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 7,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 8,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 9,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 10,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 11,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 12,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 13,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 13,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 14,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 15,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 16,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 17,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 18,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 18,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 19,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 20,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 21,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 22,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 23,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 24,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 25,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 26,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 27,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 28,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 28,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 29,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 30,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 30,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 31,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 32,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 32,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 33,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 34,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 35,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 36,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 36,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 37,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 38,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 39,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 40,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 41,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 41,
                'strategy_category_id' => 7,
            ],
            [
                'general_id' => 42,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 42,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 43,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 44,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 45,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 46,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 47,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 48,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 49,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 50,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 50,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 51,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 52,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 52,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 53,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 54,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 55,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 56,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 57,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 58,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 58,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 59,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 60,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 61,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 62,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 63,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 64,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 64,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 65,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 65,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 66,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 67,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 68,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 69,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 70,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 70,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 71,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 72,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 73,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 73,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 73,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 74,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 74,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 75,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 76,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 77,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 78,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 79,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 80,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 81,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 81,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 82,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 83,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 83,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 84,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 85,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 86,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 87,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 88,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 89,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 89,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 90,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 91,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 92,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 93,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 94,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 95,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 96,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 96,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 97,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 98,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 99,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 100,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 100,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 100,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 100,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 101,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 101,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 102,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 103,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 103,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 104,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 105,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 105,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 106,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 107,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 108,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 109,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 109,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 110,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 111,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 111,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 112,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 113,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 114,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 114,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 115,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 116,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 117,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 118,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 118,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 119,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 119,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 120,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 120,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 120,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 121,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 121,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 122,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 122,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 123,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 124,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 125,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 126,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 126,
                'strategy_category_id' => 7,
            ],
            [
                'general_id' => 127,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 128,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 129,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 130,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 131,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 131,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 132,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 133,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 133,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 134,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 134,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 135,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 135,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 135,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 136,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 137,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 137,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 138,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 139,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 139,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 140,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 141,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 141,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 141,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 142,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 143,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 143,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 143,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 144,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 145,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 146,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 147,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 147,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 148,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 149,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 149,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 149,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 150,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 150,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 150,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 150,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 151,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 151,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 151,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 151,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 151,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 152,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 152,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 153,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 154,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 155,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 156,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 156,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 157,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 158,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 159,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 159,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 159,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 160,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 160,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 161,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 162,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 163,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 163,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 163,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 164,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 164,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 165,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 165,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 165,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 166,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 167,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 167,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 167,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 168,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 169,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 169,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 169,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 169,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 169,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 170,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 171,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 172,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 173,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 174,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 175,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 176,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 176,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 176,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 176,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 177,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 178,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 178,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 179,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 179,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 180,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 181,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 182,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 183,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 184,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 185,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 185,
                'strategy_category_id' => 4,
            ],
            [
                'general_id' => 186,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 187,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 187,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 188,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 188,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 189,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 189,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 190,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 190,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 191,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 191,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 192,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 193,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 194,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 194,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 195,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 196,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 196,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 196,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 197,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 197,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 198,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 198,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 199,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 200,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 201,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 202,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 202,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 203,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 204,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 205,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 206,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 207,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 208,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 209,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 210,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 211,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 211,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 211,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 212,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 212,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 213,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 213,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 214,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 215,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 216,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 217,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 218,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 219,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 220,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 220,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 220,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 221,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 221,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 222,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 222,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 223,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 224,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 225,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 226,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 227,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 228,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 229,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 230,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 231,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 232,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 233,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 234,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 235,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 235,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 236,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 237,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 238,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 239,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 239,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 240,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 241,
                'strategy_category_id' => 8,
            ],
            [
                'general_id' => 242,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 243,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 244,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 245,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 246,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 246,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 247,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 248,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 249,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 249,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 250,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 251,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 251,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 252,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 253,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 254,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 255,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 255,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 256,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 257,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 258,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 259,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 260,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 261,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 261,
                'strategy_category_id' => 7,
            ],
            [
                'general_id' => 262,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 262,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 263,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 264,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 264,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 265,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 266,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 267,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 267,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 267,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 268,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 269,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 270,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 271,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 272,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 273,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 274,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 274,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 275,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 276,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 277,
                'strategy_category_id' => 8,
            ],
            [
                'general_id' => 278,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 279,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 280,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 281,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 282,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 283,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 284,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 284,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 285,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 286,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 287,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 288,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 289,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 290,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 291,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 292,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 293,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 294,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 294,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 294,
                'strategy_category_id' => 12,
            ],
            [
                'general_id' => 295,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 296,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 297,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 297,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 297,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 298,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 299,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 300,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 301,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 302,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 303,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 303,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 304,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 305,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 306,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 307,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 307,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 307,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 308,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 309,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 309,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 310,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 311,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 311,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 312,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 313,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 314,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 315,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 315,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 316,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 316,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 317,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 317,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 318,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 318,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 319,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 319,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 320,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 321,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 321,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 322,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 322,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 323,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 324,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 324,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 325,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 325,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 325,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 325,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 326,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 327,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 328,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 328,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 328,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 329,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 329,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 330,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 330,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 331,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 332,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 333,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 334,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 335,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 336,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 337,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 338,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 339,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 340,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 341,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 342,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 342,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 343,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 344,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 345,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 345,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 345,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 346,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 346,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 346,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 346,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 347,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 347,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 348,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 349,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 350,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 350,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 350,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 350,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 350,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 351,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 352,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 353,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 354,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 354,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 355,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 355,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 355,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 356,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 357,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 357,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 358,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 358,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 359,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 359,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 359,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 360,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 360,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 361,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 361,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 362,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 363,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 363,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 364,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 364,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 364,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 365,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 365,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 366,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 366,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 367,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 368,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 368,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 368,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 369,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 370,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 371,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 371,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 371,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 372,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 372,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 372,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 373,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 373,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 374,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 375,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 376,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 376,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 377,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 377,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 378,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 379,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 379,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 379,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 379,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 380,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 380,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 380,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 380,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 381,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 381,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 382,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 382,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 383,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 384,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 384,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 384,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 385,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 386,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 386,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 387,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 388,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 388,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 389,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 390,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 391,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 391,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 391,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 392,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 392,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 393,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 394,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 395,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 395,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 396,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 397,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 398,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 398,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 399,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 400,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 401,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 402,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 402,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 403,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 404,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 405,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 406,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 406,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 407,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 408,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 408,
                'strategy_category_id' => 4,
            ],
            [
                'general_id' => 409,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 410,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 410,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 411,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 412,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 412,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 413,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 413,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 413,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 414,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 414,
                'strategy_category_id' => 4,
            ],
            [
                'general_id' => 415,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 416,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 417,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 418,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 419,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 420,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 421,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 422,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 422,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 422,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 423,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 423,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 424,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 425,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 425,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 425,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 425,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 426,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 426,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 427,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 428,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 429,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 429,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 430,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 431,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 432,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 433,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 433,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 434,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 435,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 435,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 436,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 437,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 437,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 437,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 438,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 438,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 439,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 440,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 440,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 440,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 441,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 441,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 442,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 442,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 442,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 443,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 443,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 443,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 443,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 444,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 445,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 446,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 447,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 448,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 449,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 450,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 451,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 452,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 452,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 453,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 453,
                'strategy_category_id' => 7,
            ],
            [
                'general_id' => 454,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 455,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 456,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 457,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 458,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 458,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 458,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 459,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 460,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 461,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 462,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 463,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 464,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 465,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 466,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 466,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 467,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 468,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 469,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 469,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 470,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 470,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 471,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 471,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 472,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 472,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 473,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 473,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 473,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 474,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 475,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 475,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 476,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 477,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 477,
                'strategy_category_id' => 4,
            ],
            [
                'general_id' => 478,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 479,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 480,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 481,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 481,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 482,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 483,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 484,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 485,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 486,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 486,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 487,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 487,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 488,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 489,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 490,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 491,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 491,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 492,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 492,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 493,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 494,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 495,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 496,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 497,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 498,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 499,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 500,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 501,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 502,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 503,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 504,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 505,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 506,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 507,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 508,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 509,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 510,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 511,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 511,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 512,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 513,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 514,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 515,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 516,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 517,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 517,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 518,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 519,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 519,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 519,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 520,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 520,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 521,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 522,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 523,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 524,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 525,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 525,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 526,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 526,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 527,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 528,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 529,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 530,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 531,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 532,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 533,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 533,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 534,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 534,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 535,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 536,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 536,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 537,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 538,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 539,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 539,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 539,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 540,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 540,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 541,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 541,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 541,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 542,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 543,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 544,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 545,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 545,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 545,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 546,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 547,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 548,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 549,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 550,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 551,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 552,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 552,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 553,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 554,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 554,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 555,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 555,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 556,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 557,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 558,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 559,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 560,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 561,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 562,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 563,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 564,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 565,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 565,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 565,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 565,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 566,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 566,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 567,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 568,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 569,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 570,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 570,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 570,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 570,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 571,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 572,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 573,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 574,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 575,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 576,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 576,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 577,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 577,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 578,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 579,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 580,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 580,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 580,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 581,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 582,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 583,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 583,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 584,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 584,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 585,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 586,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 587,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 588,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 588,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 589,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 590,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 590,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 591,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 592,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 592,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 593,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 593,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 594,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 595,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 595,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 596,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 597,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 598,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 598,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 598,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 598,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 599,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 600,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 600,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 600,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 600,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 601,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 602,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 603,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 603,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 603,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 603,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 604,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 605,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 606,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 606,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 606,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 607,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 608,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 609,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 609,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 609,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 609,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 610,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 611,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 612,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 612,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 613,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 613,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 614,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 615,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 616,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 616,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 616,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 617,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 618,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 619,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 620,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 621,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 622,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 623,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 624,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 624,
                'strategy_category_id' => 7,
            ],
            [
                'general_id' => 625,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 626,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 627,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 627,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 627,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 628,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 629,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 630,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 630,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 630,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 631,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 632,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 633,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 634,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 635,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 635,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 636,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 636,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 637,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 637,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 637,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 637,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 638,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 639,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 639,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 640,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 641,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 642,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 643,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 643,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 643,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 644,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 645,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 645,
                'strategy_category_id' => 4,
            ],
            [
                'general_id' => 645,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 646,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 647,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 648,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 649,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 650,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 651,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 652,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 653,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 653,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 654,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 655,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 656,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 657,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 658,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 659,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 659,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 660,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 660,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 661,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 661,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 661,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 662,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 663,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 664,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 664,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 665,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 666,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 666,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 667,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 667,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 668,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 669,
                'strategy_category_id' => 4,
            ],
            [
                'general_id' => 670,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 671,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 672,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 673,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 674,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 675,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 676,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 677,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 677,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 678,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 679,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 680,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 681,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 681,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 682,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 682,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 683,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 684,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 685,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 686,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 687,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 688,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 689,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 690,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 690,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 691,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 692,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 693,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 694,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 695,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 695,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 696,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 697,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 698,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 699,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 700,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 700,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 701,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 702,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 703,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 704,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 705,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 706,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 706,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 707,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 707,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 708,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 709,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 710,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 711,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 712,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 713,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 713,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 714,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 715,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 715,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 715,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 716,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 717,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 718,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 719,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 719,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 720,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 720,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 721,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 721,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 722,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 722,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 723,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 723,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 724,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 725,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 726,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 726,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 727,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 727,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 728,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 729,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 730,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 731,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 732,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 733,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 733,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 734,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 734,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 734,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 735,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 736,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 737,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 738,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 739,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 740,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 741,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 742,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 742,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 742,
                'strategy_category_id' => 7,
            ],
            [
                'general_id' => 743,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 744,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 745,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 746,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 747,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 747,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 748,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 749,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 749,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 750,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 750,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 751,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 752,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 752,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 753,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 754,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 754,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 755,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 755,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 756,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 756,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 757,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 758,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 759,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 760,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 761,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 762,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 762,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 762,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 763,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 764,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 764,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 765,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 765,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 765,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 766,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 767,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 768,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 768,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 769,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 769,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 770,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 771,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 771,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 772,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 772,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 773,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 773,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 774,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 775,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 776,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 776,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 777,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 778,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 779,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 780,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 780,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 781,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 781,
                'strategy_category_id' => 4,
            ],
            [
                'general_id' => 782,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 782,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 783,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 783,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 784,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 785,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 785,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 785,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 785,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 786,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 787,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 788,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 788,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 789,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 789,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 790,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 791,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 792,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 792,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 793,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 794,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 794,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 795,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 795,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 796,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 797,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 797,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 798,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 799,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 800,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 801,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 802,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 803,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 803,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 804,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 804,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 805,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 806,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 807,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 807,
                'strategy_category_id' => 7,
            ],
            [
                'general_id' => 808,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 809,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 810,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 811,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 812,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 812,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 812,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 812,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 813,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 813,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 814,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 814,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 815,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 816,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 816,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 817,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 818,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 818,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 819,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 819,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 820,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 820,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 820,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 821,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 821,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 822,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 822,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 822,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 822,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 823,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 824,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 824,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 825,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 826,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 826,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 826,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 827,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 828,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 829,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 830,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 830,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 831,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 831,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 832,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 833,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 833,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 834,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 835,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 835,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 836,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 837,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 838,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 839,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 839,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 840,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 841,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 842,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 842,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 843,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 843,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 844,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 845,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 846,
                'strategy_category_id' => 7,
            ],
            [
                'general_id' => 847,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 848,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 849,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 849,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 850,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 851,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 852,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 852,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 853,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 854,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 854,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 855,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 856,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 856,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 857,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 857,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 857,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 858,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 858,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 859,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 860,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 861,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 861,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 862,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 863,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 863,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 864,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 864,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 865,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 865,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 866,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 866,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 867,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 867,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 868,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 868,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 869,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 869,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 870,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 870,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 871,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 872,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 872,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 872,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 872,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 872,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 873,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 874,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 875,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 876,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 876,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 877,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 878,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 879,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 880,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 881,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 882,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 882,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 883,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 883,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 883,
                'strategy_category_id' => 12,
            ],
            [
                'general_id' => 884,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 885,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 885,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 886,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 886,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 886,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 886,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 887,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 888,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 888,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 888,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 889,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 889,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 889,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 890,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 891,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 891,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 892,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 893,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 893,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 893,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 893,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 894,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 894,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 895,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 895,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 895,
                'strategy_category_id' => 12,
            ],
            [
                'general_id' => 896,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 896,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 896,
                'strategy_category_id' => 12,
            ],
            [
                'general_id' => 897,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 898,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 898,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 899,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 899,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 900,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 900,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 901,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 902,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 902,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 902,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 903,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 904,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 905,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 906,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 907,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 907,
                'strategy_category_id' => 4,
            ],
            [
                'general_id' => 907,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 908,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 909,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 910,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 911,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 911,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 912,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 913,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 914,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 915,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 915,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 915,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 916,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 917,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 917,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 917,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 918,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 918,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 919,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 920,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 921,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 921,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 922,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 922,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 923,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 924,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 924,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 925,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 926,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 926,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 927,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 928,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 929,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 929,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 930,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 931,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 931,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 932,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 932,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 933,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 934,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 935,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 935,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 936,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 937,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 937,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 938,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 939,
                'strategy_category_id' => 7,
            ],
            [
                'general_id' => 939,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 940,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 941,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 941,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 942,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 943,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 943,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 944,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 945,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 945,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 945,
                'strategy_category_id' => 14,
            ],
            [
                'general_id' => 946,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 947,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 948,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 948,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 949,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 950,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 950,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 951,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 951,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 951,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 952,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 953,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 953,
                'strategy_category_id' => 14,
            ],
            [
                'general_id' => 954,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 955,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 956,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 957,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 957,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 958,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 958,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 958,
                'strategy_category_id' => 14,
            ],
            [
                'general_id' => 959,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 959,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 959,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 960,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 960,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 961,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 961,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 962,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 962,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 963,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 963,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 963,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 964,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 964,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 965,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 965,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 966,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 966,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 967,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 967,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 968,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 968,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 969,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 970,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 970,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 970,
                'strategy_category_id' => 8,
            ],
            [
                'general_id' => 970,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 971,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 971,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 972,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 972,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 972,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 973,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 973,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 974,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 974,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 974,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 974,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 975,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 976,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 976,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 977,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 977,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 978,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 979,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 979,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 980,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 980,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 980,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 981,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 981,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 982,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 983,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 983,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 984,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 984,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 985,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 985,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 985,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 986,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 986,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 986,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 987,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 988,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 988,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 988,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 989,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 990,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 991,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 992,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 992,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 993,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 993,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 993,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 994,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 994,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 994,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 995,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 995,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 995,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 996,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 996,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 997,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 997,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 997,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 998,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 999,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1000,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1001,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1001,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1002,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1002,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1003,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1003,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1003,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1003,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1003,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 1004,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1005,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1006,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1007,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1007,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1007,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1008,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1008,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1009,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1009,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1009,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1010,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1011,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1011,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1011,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1011,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1011,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 1012,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1012,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1013,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1014,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1014,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1015,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1015,
                'strategy_category_id' => 4,
            ],
            [
                'general_id' => 1015,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1016,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1017,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1017,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1018,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1018,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1018,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 1019,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1019,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1019,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1019,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 1020,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1020,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 1021,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1021,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1022,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1022,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1022,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1023,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1023,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1024,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1024,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 1024,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 1025,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1025,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1025,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1025,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1025,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 1026,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1026,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1027,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1027,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1028,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1029,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1029,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1030,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1031,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1031,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1031,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1032,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1033,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1034,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1034,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1034,
                'strategy_category_id' => 14,
            ],
            [
                'general_id' => 1035,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1035,
                'strategy_category_id' => 4,
            ],
            [
                'general_id' => 1036,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1037,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1037,
                'strategy_category_id' => 4,
            ],
            [
                'general_id' => 1037,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1038,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1039,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1040,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1040,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 1041,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1041,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1041,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1042,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1043,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1043,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1044,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1044,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1044,
                'strategy_category_id' => 14,
            ],
            [
                'general_id' => 1045,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1045,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1045,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1046,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1047,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1047,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1048,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1049,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1049,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1049,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1050,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1050,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1051,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1051,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1052,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1052,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1053,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1053,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1054,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1054,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1055,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1055,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1056,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1056,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1057,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1058,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1058,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1059,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1059,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1059,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 1060,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1060,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1061,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1061,
                'strategy_category_id' => 11,
            ],
            [
                'general_id' => 1062,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1062,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1063,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1063,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1063,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1064,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1064,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1064,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1065,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1065,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1066,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1067,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1067,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1067,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1068,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1068,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1069,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1069,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1070,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1070,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1070,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1071,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1071,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1072,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1072,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 1072,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1073,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1073,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1074,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1074,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1075,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1075,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1075,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1076,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1076,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1077,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1077,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1077,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1078,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1079,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1080,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1081,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1081,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1082,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1083,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1083,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 1083,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1084,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1084,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1085,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1085,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 1086,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1086,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1087,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1087,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1088,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1088,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 1089,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1089,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1090,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1090,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1090,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1091,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1091,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1092,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1092,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1092,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1093,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1093,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1094,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1094,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1095,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1095,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1096,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1096,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1097,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1097,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1098,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1098,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1099,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1099,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1100,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1100,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1100,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1101,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1101,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1102,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1102,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1103,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1104,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1105,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1106,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1106,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 1107,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1107,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1108,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1108,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1108,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1109,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1109,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1110,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1111,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1112,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1112,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1112,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1113,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1113,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1114,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1114,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1115,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1115,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1116,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1116,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1117,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1117,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 1117,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1118,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1118,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1119,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1120,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1121,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1122,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1122,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1123,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1123,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1124,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1125,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1126,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1126,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1127,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1127,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1128,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1129,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 1129,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1130,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1130,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1131,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1132,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1132,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1133,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1133,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1134,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1134,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1134,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 1135,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1136,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1137,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1137,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1137,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1137,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1138,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1138,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1138,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1139,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1139,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 1140,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1140,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1141,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1142,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1142,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1143,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1143,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1143,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1144,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1144,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1145,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1145,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1145,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1146,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1146,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1146,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1146,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1147,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1147,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1147,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1148,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1148,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1149,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1150,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1151,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1151,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1152,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1152,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1153,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1154,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1155,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1155,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1156,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1156,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1156,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1156,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1157,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1157,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1158,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1158,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1159,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1160,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1160,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1161,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1161,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1162,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1162,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1163,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1163,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1163,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1164,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1164,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1164,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 1165,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1166,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1166,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 1166,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1167,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1168,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1168,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1168,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1169,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 1169,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1170,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1170,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1170,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1171,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1172,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1173,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1173,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1173,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1174,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1174,
                'strategy_category_id' => 10,
            ],
            [
                'general_id' => 1175,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1175,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1176,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1176,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1176,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1177,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1177,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1178,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1178,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1179,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1179,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1180,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1180,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1181,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1181,
                'strategy_category_id' => 7,
            ],
            [
                'general_id' => 1182,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1182,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1183,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1183,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1184,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1184,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1184,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1185,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 1185,
                'strategy_category_id' => 13,
            ],
            [
                'general_id' => 1186,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1187,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1187,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 1188,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1189,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1190,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1191,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1191,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1191,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1192,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1192,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 1192,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1193,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1193,
                'strategy_category_id' => 4,
            ],
            [
                'general_id' => 1193,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 1194,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1194,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1194,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1195,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1196,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1196,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1196,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1196,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1196,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 1197,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1197,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1198,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1198,
                'strategy_category_id' => 7,
            ],
            [
                'general_id' => 1199,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1199,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1200,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1200,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 1201,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1201,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1202,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1203,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1204,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1204,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1205,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1205,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1205,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1205,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 1206,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1206,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 1207,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1207,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1208,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1208,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1209,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1209,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1210,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1211,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1212,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1212,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1213,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1214,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1214,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1215,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1215,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1216,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1217,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1217,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 1218,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1218,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1218,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1218,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1219,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1219,
                'strategy_category_id' => 4,
            ],
            [
                'general_id' => 1220,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 1221,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1221,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1221,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1222,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1222,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1223,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1223,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1224,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1225,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1226,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1226,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 1227,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1228,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1228,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1228,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1229,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1229,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1229,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1229,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 1230,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1230,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1231,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1231,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1232,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1232,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1233,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1233,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1234,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1234,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1235,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1235,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1236,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1236,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 1237,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1237,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1237,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1238,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1238,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 1238,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 1239,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1239,
                'strategy_category_id' => 16,
            ],
            [
                'general_id' => 1240,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1241,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 1242,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1242,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1242,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1243,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1243,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1244,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1244,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1245,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1245,
                'strategy_category_id' => 3,
            ],
            [
                'general_id' => 1245,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 1245,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 1246,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1246,
                'strategy_category_id' => 19,
            ],
            [
                'general_id' => 1247,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1247,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1248,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1248,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1249,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1249,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1249,
                'strategy_category_id' => 15,
            ],
            [
                'general_id' => 1249,
                'strategy_category_id' => 18,
            ],
            [
                'general_id' => 1250,
                'strategy_category_id' => 2,
            ],
            [
                'general_id' => 1250,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1251,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1251,
                'strategy_category_id' => 17,
            ],
            [
                'general_id' => 1252,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1252,
                'strategy_category_id' => 5,
            ],
            [
                'general_id' => 1252,
                'strategy_category_id' => 9,
            ],
            [
                'general_id' => 1253,
                'strategy_category_id' => 1,
            ],
            [
                'general_id' => 1253,
                'strategy_category_id' => 6,
            ],
            [
                'general_id' => 1253,
                'strategy_category_id' => 15,
            ],
        ];
        // created_at, updated_at を追加
        $generalStrategyCategories = array_map(function ($row) use ($now) {
            return array_merge($row, [
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }, $generalStrategyCategories);

        Schema::disableForeignKeyConstraints();
        DB::table('general_strategy_categories')->truncate();
        Schema::enableForeignKeyConstraints();

        // insertで一括挿入
        DB::table('general_strategy_categories')->insert($generalStrategyCategories);
    }
}
