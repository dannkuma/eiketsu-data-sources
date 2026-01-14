<?php

namespace Database\Seeders\Heirloom;

use App\Models\Heirloom\HeirloomEffectDescription;
use Illuminate\Database\Seeder;

class HeirloomEffectDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heirloomEffectDescriptions = [
            '撤退中の味方の復活時間が減少する',
            '自軍の士気が上がる',
            '自軍の流派ゲージが上がる',
            '味方の兵力が回復する',
            '戦器を装備している味方が撤退している場合復活し武力が上がり撤退した場所に出現する',
            '撤退中の戦器を装備している味方が復活し武力が上がる',
            '戦場の味方を一瞬で城に戻す',
            '味方の移動速度が上がる',
            'コスト２.５以上の味方の兵力が回復する',
            'コスト１.５以下の味方の兵力が回復する',
            '戦器を装備している味方の武力が上がる',
            '味方の武力が上がる',
            '味方の兵力が上限を超えて回復する',
            '戦器を装備している味方の知力が上がる',
            '味方の覇気の溜まる量が増える',
            '味方の武力によるダメージを軽減する',
            '味方の兵力が徐々に回復する',
            '味方の攻城力が上がる',
            '敵を撃破するたびに味方の兵力が回復する',
            '槍兵の味方が全方向に槍の無敵攻撃を行う',
            '弓兵の味方の走射時間が延びる',
            '剣豪の味方の斬撃が発生するまでの時間を短縮する',
            '鉄砲隊の味方の弾数の回復速度が上がる',
            '味方の知力が上がる',
            '味方の乱戦中の攻撃速度が上がる',
            '戦器を装備している味方の兵力が上限を超えて回復する',
            '味方の武力が上がるが、移動速度が下がる',
            '戦器を装備している味方の武力と知力が上がる',
            '撤退したときの復活時間が減少する',
            '戦器を装備している味方の武力と移動速度が上がる',
            '騎兵の味方の武力と移動速度が上がる',
            '敵の移動速度を下げる',
            '敵の武力を下げる',
            '敵の知力を下げる',
            '戦場にいる最も武力の高い敵の武力と移動速度を下げる',
        ];

        $data = array_map(fn ($heirloomEffectDescription) => [
            'heirloom_effect_description' => $heirloomEffectDescription,
        ], $heirloomEffectDescriptions);

        HeirloomEffectDescription::upsert(
            $data,
            ['heirloom_effect_description'],
            ['heirloom_effect_description']
        );
    }
}
