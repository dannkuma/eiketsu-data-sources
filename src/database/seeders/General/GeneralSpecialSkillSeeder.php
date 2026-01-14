<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class GeneralSpecialSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();
        $general_special_skills = [
            [
                'general_id' => 2,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 3,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 5,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 7,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 8,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 9,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 13,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 14,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 15,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 17,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 18,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 18,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 19,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 21,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 22,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 23,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 24,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 25,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 27,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 29,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 31,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 33,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 34,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 34,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 37,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 38,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 39,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 40,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 42,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 43,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 44,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 45,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 45,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 46,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 47,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 47,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 48,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 49,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 50,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 50,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 51,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 51,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 52,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 53,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 53,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 54,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 55,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 55,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 56,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 57,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 58,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 60,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 60,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 61,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 62,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 63,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 63,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 64,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 64,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 65,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 66,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 67,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 68,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 68,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 69,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 70,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 71,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 72,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 73,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 74,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 75,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 77,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 78,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 78,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 79,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 79,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 80,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 81,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 82,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 83,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 84,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 84,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 85,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 85,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 86,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 88,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 88,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 89,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 89,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 89,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 90,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 92,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 92,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 94,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 94,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 95,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 96,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 97,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 97,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 98,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 98,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 99,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 99,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 100,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 101,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 102,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 103,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 104,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 105,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 108,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 112,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 113,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 114,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 114,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 115,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 116,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 117,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 118,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 119,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 120,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 120,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 121,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 121,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 122,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 122,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 124,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 124,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 125,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 127,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 127,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 128,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 129,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 129,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 130,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 131,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 133,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 134,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 136,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 136,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 137,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 138,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 139,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 140,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 142,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 142,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 142,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 143,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 144,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 144,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 146,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 147,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 148,
                'special_skill_id' => 14,
            ],
            [
                'general_id' => 149,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 151,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 151,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 154,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 154,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 155,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 156,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 156,
                'special_skill_id' => 14,
            ],
            [
                'general_id' => 157,
                'special_skill_id' => 13,
            ],
            [
                'general_id' => 158,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 158,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 159,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 159,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 160,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 161,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 164,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 165,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 166,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 169,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 169,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 171,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 171,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 173,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 174,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 175,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 176,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 177,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 178,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 178,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 179,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 179,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 182,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 182,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 184,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 185,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 185,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 186,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 186,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 187,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 187,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 191,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 191,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 193,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 193,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 194,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 196,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 196,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 197,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 197,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 198,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 201,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 202,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 202,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 202,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 203,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 203,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 204,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 205,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 209,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 211,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 211,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 212,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 213,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 214,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 215,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 215,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 216,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 216,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 216,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 217,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 217,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 218,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 219,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 220,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 220,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 221,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 221,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 221,
                'special_skill_id' => 10,
            ],
            [
                'general_id' => 222,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 224,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 226,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 227,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 232,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 233,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 233,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 235,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 235,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 236,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 236,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 237,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 238,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 239,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 242,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 244,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 244,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 244,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 245,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 246,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 247,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 247,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 248,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 249,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 250,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 250,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 252,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 253,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 254,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 255,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 257,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 258,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 259,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 259,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 260,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 260,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 262,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 262,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 263,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 264,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 268,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 269,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 269,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 271,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 272,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 273,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 275,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 276,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 278,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 280,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 281,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 282,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 283,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 284,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 284,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 285,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 286,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 288,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 288,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 289,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 290,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 290,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 291,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 292,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 293,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 295,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 296,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 297,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 298,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 299,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 299,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 300,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 302,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 303,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 304,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 304,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 305,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 307,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 308,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 309,
                'special_skill_id' => 13,
            ],
            [
                'general_id' => 310,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 310,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 310,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 311,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 312,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 313,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 316,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 317,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 318,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 318,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 319,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 321,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 322,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 323,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 324,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 326,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 327,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 328,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 329,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 330,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 331,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 331,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 332,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 333,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 334,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 335,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 336,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 338,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 339,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 340,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 340,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 342,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 342,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 344,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 345,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 345,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 346,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 347,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 347,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 348,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 349,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 350,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 351,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 351,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 352,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 353,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 353,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 354,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 355,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 359,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 360,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 361,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 362,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 362,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 363,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 364,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 364,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 366,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 366,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 366,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 367,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 367,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 367,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 368,
                'special_skill_id' => 14,
            ],
            [
                'general_id' => 369,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 370,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 373,
                'special_skill_id' => 13,
            ],
            [
                'general_id' => 374,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 374,
                'special_skill_id' => 14,
            ],
            [
                'general_id' => 375,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 376,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 377,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 377,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 379,
                'special_skill_id' => 13,
            ],
            [
                'general_id' => 380,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 382,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 382,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 382,
                'special_skill_id' => 13,
            ],
            [
                'general_id' => 385,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 385,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 385,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 386,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 386,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 387,
                'special_skill_id' => 14,
            ],
            [
                'general_id' => 389,
                'special_skill_id' => 14,
            ],
            [
                'general_id' => 390,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 392,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 393,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 393,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 394,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 395,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 396,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 397,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 397,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 397,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 398,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 399,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 399,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 400,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 401,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 402,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 403,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 403,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 404,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 405,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 406,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 407,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 408,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 408,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 409,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 410,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 410,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 411,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 412,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 413,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 414,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 415,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 416,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 417,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 418,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 419,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 419,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 420,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 420,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 420,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 421,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 422,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 422,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 423,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 424,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 425,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 426,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 427,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 428,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 429,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 429,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 430,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 430,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 431,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 431,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 431,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 432,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 433,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 434,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 434,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 435,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 436,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 436,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 436,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 438,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 438,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 439,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 440,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 441,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 441,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 442,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 443,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 443,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 443,
                'special_skill_id' => 10,
            ],
            [
                'general_id' => 444,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 446,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 447,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 449,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 450,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 450,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 450,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 451,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 453,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 454,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 458,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 459,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 460,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 460,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 462,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 463,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 464,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 465,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 465,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 466,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 467,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 470,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 472,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 473,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 474,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 475,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 476,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 477,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 478,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 479,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 480,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 481,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 481,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 482,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 482,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 483,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 485,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 486,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 487,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 487,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 488,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 489,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 491,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 492,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 493,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 493,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 493,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 494,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 495,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 497,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 498,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 499,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 500,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 501,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 502,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 503,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 504,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 505,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 509,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 510,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 512,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 513,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 514,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 514,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 515,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 516,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 517,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 518,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 519,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 520,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 523,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 523,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 524,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 525,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 526,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 526,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 526,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 527,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 529,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 530,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 530,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 531,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 532,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 532,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 533,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 533,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 534,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 534,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 534,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 535,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 536,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 536,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 537,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 538,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 539,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 539,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 540,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 541,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 542,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 543,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 544,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 545,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 545,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 546,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 547,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 548,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 550,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 550,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 551,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 554,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 554,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 555,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 556,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 557,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 557,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 558,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 559,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 560,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 560,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 561,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 562,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 562,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 562,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 563,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 564,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 564,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 565,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 566,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 567,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 568,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 569,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 569,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 570,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 570,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 571,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 572,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 573,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 574,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 575,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 576,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 576,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 579,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 579,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 580,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 581,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 581,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 582,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 582,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 583,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 583,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 585,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 586,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 588,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 588,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 589,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 590,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 591,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 591,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 592,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 593,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 594,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 595,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 596,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 597,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 599,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 599,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 599,
                'special_skill_id' => 13,
            ],
            [
                'general_id' => 600,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 600,
                'special_skill_id' => 13,
            ],
            [
                'general_id' => 601,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 602,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 602,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 604,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 605,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 606,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 607,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 608,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 609,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 610,
                'special_skill_id' => 14,
            ],
            [
                'general_id' => 611,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 611,
                'special_skill_id' => 14,
            ],
            [
                'general_id' => 612,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 613,
                'special_skill_id' => 13,
            ],
            [
                'general_id' => 615,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 616,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 617,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 618,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 619,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 620,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 621,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 622,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 622,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 624,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 625,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 627,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 627,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 628,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 628,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 629,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 630,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 631,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 632,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 632,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 633,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 634,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 634,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 635,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 636,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 637,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 638,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 639,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 643,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 644,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 645,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 645,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 647,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 648,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 649,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 650,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 651,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 652,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 653,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 654,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 654,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 655,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 657,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 659,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 659,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 660,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 661,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 661,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 661,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 663,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 663,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 666,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 667,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 668,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 668,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 669,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 670,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 671,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 673,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 674,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 676,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 676,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 678,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 679,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 680,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 681,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 682,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 683,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 683,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 684,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 686,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 687,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 689,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 690,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 691,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 692,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 692,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 692,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 693,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 693,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 694,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 695,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 696,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 697,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 697,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 698,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 699,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 700,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 701,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 702,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 703,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 704,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 705,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 707,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 713,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 714,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 715,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 715,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 716,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 717,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 718,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 719,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 720,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 720,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 722,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 723,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 724,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 725,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 725,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 726,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 727,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 728,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 729,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 729,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 730,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 730,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 731,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 732,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 733,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 733,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 734,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 734,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 735,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 736,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 737,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 738,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 739,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 741,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 742,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 742,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 743,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 743,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 744,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 745,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 745,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 745,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 746,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 747,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 748,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 749,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 749,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 749,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 750,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 752,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 752,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 753,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 754,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 754,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 755,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 755,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 757,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 758,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 759,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 760,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 761,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 762,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 762,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 763,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 764,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 765,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 765,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 766,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 767,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 768,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 769,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 770,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 771,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 772,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 773,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 774,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 775,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 775,
                'special_skill_id' => 14,
            ],
            [
                'general_id' => 777,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 777,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 778,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 779,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 780,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 781,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 782,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 783,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 785,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 785,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 786,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 787,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 787,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 788,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 789,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 790,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 790,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 791,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 792,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 794,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 795,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 795,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 797,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 797,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 798,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 799,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 801,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 801,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 802,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 803,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 804,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 805,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 805,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 806,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 806,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 807,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 808,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 809,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 811,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 812,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 812,
                'special_skill_id' => 13,
            ],
            [
                'general_id' => 813,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 814,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 818,
                'special_skill_id' => 13,
            ],
            [
                'general_id' => 819,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 819,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 820,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 821,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 822,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 822,
                'special_skill_id' => 13,
            ],
            [
                'general_id' => 823,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 823,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 824,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 826,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 826,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 827,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 828,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 828,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 829,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 830,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 831,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 832,
                'special_skill_id' => 14,
            ],
            [
                'general_id' => 834,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 834,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 835,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 836,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 837,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 837,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 838,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 839,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 840,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 842,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 843,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 845,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 846,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 846,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 847,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 847,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 849,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 850,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 852,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 853,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 854,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 854,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 855,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 857,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 857,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 858,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 860,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 860,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 861,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 862,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 863,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 864,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 864,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 865,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 865,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 866,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 866,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 867,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 867,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 868,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 869,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 870,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 870,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 871,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 871,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 872,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 873,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 874,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 875,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 876,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 877,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 878,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 879,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 880,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 881,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 882,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 883,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 884,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 885,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 886,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 887,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 887,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 887,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 888,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 889,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 891,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 891,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 893,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 893,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 894,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 897,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 899,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 899,
                'special_skill_id' => 10,
            ],
            [
                'general_id' => 900,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 901,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 902,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 904,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 905,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 905,
                'special_skill_id' => 10,
            ],
            [
                'general_id' => 906,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 907,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 907,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 908,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 908,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 909,
                'special_skill_id' => 10,
            ],
            [
                'general_id' => 910,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 911,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 912,
                'special_skill_id' => 10,
            ],
            [
                'general_id' => 913,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 914,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 915,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 915,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 916,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 917,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 917,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 918,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 920,
                'special_skill_id' => 10,
            ],
            [
                'general_id' => 921,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 922,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 922,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 923,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 924,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 925,
                'special_skill_id' => 10,
            ],
            [
                'general_id' => 927,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 928,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 929,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 929,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 931,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 932,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 934,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 936,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 937,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 937,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 938,
                'special_skill_id' => 14,
            ],
            [
                'general_id' => 940,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 942,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 943,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 944,
                'special_skill_id' => 10,
            ],
            [
                'general_id' => 945,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 945,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 946,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 947,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 948,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 949,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 949,
                'special_skill_id' => 10,
            ],
            [
                'general_id' => 951,
                'special_skill_id' => 10,
            ],
            [
                'general_id' => 952,
                'special_skill_id' => 10,
            ],
            [
                'general_id' => 953,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 954,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 955,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 956,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 958,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 959,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 959,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 959,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 960,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 960,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 961,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 962,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 963,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 963,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 964,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 968,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 969,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 970,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 971,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 972,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 973,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 974,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 975,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 975,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 976,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 977,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 977,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 978,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 979,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 980,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 982,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 983,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 983,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 984,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 985,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 985,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 985,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 986,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 987,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 988,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 988,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 988,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 991,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 991,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 992,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 992,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 993,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 994,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 994,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 994,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 995,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 997,
                'special_skill_id' => 10,
            ],
            [
                'general_id' => 998,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 999,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1000,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1000,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1001,
                'special_skill_id' => 14,
            ],
            [
                'general_id' => 1002,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1003,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1003,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1003,
                'special_skill_id' => 13,
            ],
            [
                'general_id' => 1004,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1005,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 1006,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 1006,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 1007,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1009,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1009,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 1010,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1011,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1012,
                'special_skill_id' => 14,
            ],
            [
                'general_id' => 1013,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1013,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1014,
                'special_skill_id' => 13,
            ],
            [
                'general_id' => 1015,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1016,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1016,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1018,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1018,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1021,
                'special_skill_id' => 14,
            ],
            [
                'general_id' => 1022,
                'special_skill_id' => 13,
            ],
            [
                'general_id' => 1023,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1024,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1024,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 1025,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 1026,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1026,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1027,
                'special_skill_id' => 10,
            ],
            [
                'general_id' => 1028,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1029,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1030,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1031,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1031,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1032,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1033,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1034,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1036,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1037,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1038,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1038,
                'special_skill_id' => 10,
            ],
            [
                'general_id' => 1039,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1039,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1041,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1042,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1042,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 1044,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1045,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1045,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1045,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1046,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1047,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1047,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1048,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1049,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1050,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1050,
                'special_skill_id' => 10,
            ],
            [
                'general_id' => 1051,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1052,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1052,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1053,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1053,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1054,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1055,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1056,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 1056,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1059,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1059,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1060,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 1062,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1062,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1064,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1066,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1068,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1069,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1069,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1070,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1071,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1072,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1072,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1074,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1075,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1075,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 1077,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1079,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1080,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1080,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1082,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1083,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1084,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1086,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 1087,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 1088,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1089,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1089,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1090,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 1090,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1090,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1091,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1092,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1094,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1095,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1096,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1096,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1097,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1099,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1100,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1101,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1102,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1103,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1104,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1105,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1105,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1106,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1107,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1107,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1108,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1109,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1109,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1110,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1110,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1112,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1112,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1113,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1114,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1115,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1115,
                'special_skill_id' => 6,
            ],
            [
                'general_id' => 1115,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1117,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1118,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1119,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1120,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1121,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1122,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1122,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1123,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1124,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1126,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1127,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1128,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1129,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1130,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1131,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1132,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1133,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1136,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1137,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1138,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1139,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1139,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1140,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1140,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1141,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1142,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1142,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1143,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1144,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1144,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1145,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1146,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1147,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1147,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1148,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1149,
                'special_skill_id' => 14,
            ],
            [
                'general_id' => 1150,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1150,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1151,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1152,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1153,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1155,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1155,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1156,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1157,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1158,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1158,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1159,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1160,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1160,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1161,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1161,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1162,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1163,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1163,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1164,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1166,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1166,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1167,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1169,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1170,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1171,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1171,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1172,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1173,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1174,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1175,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 1176,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1177,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1177,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1178,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1179,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1180,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1181,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1182,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1182,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1184,
                'special_skill_id' => 13,
            ],
            [
                'general_id' => 1185,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1186,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1187,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1187,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1189,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1190,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 1190,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 1191,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1192,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1193,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 1193,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1195,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1195,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1196,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1196,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1198,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1199,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1199,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1200,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1200,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1201,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1201,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1202,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1202,
                'special_skill_id' => 9,
            ],
            [
                'general_id' => 1203,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1203,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1204,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1205,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1205,
                'special_skill_id' => 13,
            ],
            [
                'general_id' => 1206,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1208,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1209,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1209,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1211,
                'special_skill_id' => 4,
            ],
            [
                'general_id' => 1211,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1212,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1213,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1213,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1214,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1215,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1216,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1216,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1217,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1218,
                'special_skill_id' => 14,
            ],
            [
                'general_id' => 1219,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1219,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1220,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1220,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1221,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1222,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1223,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1223,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1224,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 1224,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1225,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1226,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1227,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1228,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1228,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1229,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1230,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1230,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1231,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1232,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1232,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1233,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1234,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1234,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1235,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1236,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1237,
                'special_skill_id' => 11,
            ],
            [
                'general_id' => 1238,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1239,
                'special_skill_id' => 8,
            ],
            [
                'general_id' => 1240,
                'special_skill_id' => 1,
            ],
            [
                'general_id' => 1240,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1241,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1243,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1243,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1244,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1244,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1245,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 1245,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 1245,
                'special_skill_id' => 3,
            ],
            [
                'general_id' => 1247,
                'special_skill_id' => 2,
            ],
            [
                'general_id' => 1247,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1248,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1250,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1250,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1251,
                'special_skill_id' => 7,
            ],
            [
                'general_id' => 1251,
                'special_skill_id' => 15,
            ],
            [
                'general_id' => 1252,
                'special_skill_id' => 5,
            ],
            [
                'general_id' => 1253,
                'special_skill_id' => 8,
            ],
        ];
        // created_at, updated_at を追加
        $general_special_skills = array_map(function ($row) use ($now) {
            return array_merge($row, [
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }, $general_special_skills);

        // FK制約を一時的に解除し、テーブルをリセット
        Schema::disableForeignKeyConstraints();
        DB::table('general_special_skills')->truncate();
        Schema::enableForeignKeyConstraints();

        // insertで一括挿入
        DB::table('general_special_skills')->insert($general_special_skills);
    }
}
