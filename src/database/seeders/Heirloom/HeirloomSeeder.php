<?php

namespace Database\Seeders\Heirloom;

use App\Enums\Heirlooms\HeirloomSoulClassifications;
use App\Enums\Rarities;
use App\Models\Heirloom\Heirloom;
use App\Models\Heirloom\HeirloomSoulClassification;
use App\Models\Rarity;
use Illuminate\Database\Seeder;

class HeirloomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heirlooms = [
            ['name' => '素焼', 'name_furigana' => 'すやき', 'rarity_id' => Rarities::N->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Treasure->value],
            ['name' => '美濃焼', 'name_furigana' => 'みのやき', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Treasure->value],
            ['name' => '赤楽茶碗', 'name_furigana' => 'あからくちゃわん', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Treasure->value],
            ['name' => '緑釉壺', 'name_furigana' => 'りょくゆうつぼ', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Treasure->value],
            ['name' => '唐物肩衝', 'name_furigana' => 'からものかたつき', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Treasure->value],
            ['name' => '紫砂壺', 'name_furigana' => 'しさへい', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Treasure->value],
            ['name' => '井戸茶碗', 'name_furigana' => 'いどちゃわん', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Treasure->value],
            ['name' => '黄瀬戸鉢', 'name_furigana' => 'きせとはち', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Treasure->value],
            ['name' => '曜変天目茶碗', 'name_furigana' => 'ようへんてんもくちゃわん', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Treasure->value],
            ['name' => '六壬式盤', 'name_furigana' => 'りくじんしきばん', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Treasure->value],
            ['name' => '九鼎', 'name_furigana' => 'きゅうてい', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Treasure->value],
            ['name' => '無限の魔法石', 'name_furigana' => 'むげんのまほうせき', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Treasure->value],
            ['name' => '和氏の璧', 'name_furigana' => 'かしのへき', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Treasure->value],
            ['name' => '百貫茄子', 'name_furigana' => 'ひゃっかんなす', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Treasure->value],
            ['name' => '玉璽', 'name_furigana' => 'ぎょくじ', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Treasure->value],
            ['name' => '平蜘蛛釜', 'name_furigana' => 'ひらぐもがま', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Treasure->value],
            ['name' => '短甲', 'name_furigana' => 'たんこう', 'rarity_id' => Rarities::N->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Armor->value],
            ['name' => '月輪文胴', 'name_furigana' => 'がちりんもんどう', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Armor->value],
            ['name' => '白糸威胴', 'name_furigana' => 'しろいとおどしどう', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Armor->value],
            ['name' => '鎖子黄金甲', 'name_furigana' => 'さしおうごんこう', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Armor->value],
            ['name' => '黒糸威胴', 'name_furigana' => 'くろいとおどしどう', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Armor->value],
            ['name' => '朱塗胴', 'name_furigana' => 'しゅぬりどう', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Armor->value],
            ['name' => '金溜塗胴', 'name_furigana' => 'きんためぬりどう', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Armor->value],
            ['name' => '源太が産衣', 'name_furigana' => 'げんたがうぶきぬ', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Armor->value],
            ['name' => '褄取威大鎧', 'name_furigana' => 'つまどりおどしおおよろい', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Armor->value],
            ['name' => '獣面呑頭鎧', 'name_furigana' => 'じゅうめんのんとうがい', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Armor->value],
            ['name' => '日ノ本一の陣羽織', 'name_furigana' => 'ひのもといちのじんばおり', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Armor->value],
            ['name' => '天才魔女の草臥れ帽子', 'name_furigana' => 'てんさいまじょのくたびれぼうし', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Armor->value],
            ['name' => '楯無', 'name_furigana' => 'たてなし', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Armor->value],
            ['name' => '唐皮', 'name_furigana' => 'からかわ', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Armor->value],
            ['name' => '木刀', 'name_furigana' => 'ぼくとう', 'rarity_id' => Rarities::N->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '宗三左文字', 'name_furigana' => 'そうざさもんじ', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => 'アーミー・リボルバー', 'name_furigana' => 'あーみー・りぼるばー', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '蛇矛', 'name_furigana' => 'だぼう', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '石切丸', 'name_furigana' => 'いしきりまる', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => 'てつはう', 'name_furigana' => 'てつはう', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '弩', 'name_furigana' => 'ど', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '大典太光世', 'name_furigana' => 'おおでんたみつよ', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '三日月宗近', 'name_furigana' => 'みかづきむねちか', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '蜻蛉切', 'name_furigana' => 'とんぼきり', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '雷上動', 'name_furigana' => 'らいじょうどう', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '髭切', 'name_furigana' => 'ひげきり', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '墨縄', 'name_furigana' => 'すみなわ', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '天羽々斬', 'name_furigana' => 'あめのはばきり', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '和泉守兼定', 'name_furigana' => 'いずみのかみかねさだ', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '青龍偃月刀', 'name_furigana' => 'せいりゅうえんげつとう', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '童子切安綱', 'name_furigana' => 'どうじぎりやすつな', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '鬼丸国綱', 'name_furigana' => 'おにまるくにつな', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '毒匕寒月刃', 'name_furigana' => 'どくひかんげつじん', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '輝く太陽と月の双剣', 'name_furigana' => 'かがやくたいようとつきのそうけん', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '七支刀', 'name_furigana' => 'しちしとう', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Weapon->value],
            ['name' => '木製軍配', 'name_furigana' => 'もくせいぐんばい', 'rarity_id' => Rarities::N->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gunbai->value],
            ['name' => '蒼海配', 'name_furigana' => 'そうかいはい', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gunbai->value],
            ['name' => '緋炎配', 'name_furigana' => 'ひえんはい', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gunbai->value],
            ['name' => '碧玉配', 'name_furigana' => 'へきぎょくはい', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gunbai->value],
            ['name' => '玄天配', 'name_furigana' => 'げんてんはい', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gunbai->value],
            ['name' => '紫電配', 'name_furigana' => 'しでんはい', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gunbai->value],
            ['name' => '琥珀配', 'name_furigana' => 'こはくはい', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gunbai->value],
            ['name' => '黄金配', 'name_furigana' => 'おうごんはい', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gunbai->value],
            ['name' => '金箔采配', 'name_furigana' => 'きんぱくさいはい', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gunbai->value],
            ['name' => '羽扇', 'name_furigana' => 'うせん', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gunbai->value],
            ['name' => '天下布武', 'name_furigana' => 'てんかふぶ', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gunbai->value],
            ['name' => '臥龍鳳雛', 'name_furigana' => 'がりょうほうすう', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gunbai->value],
            ['name' => '軍配団扇', 'name_furigana' => 'ぐんばいうちわ', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gunbai->value],
            ['name' => '軍扇', 'name_furigana' => 'ぐんせん', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gunbai->value],
            ['name' => '軍馬', 'name_furigana' => 'ぐんば', 'rarity_id' => Rarities::N->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Horse->value],
            ['name' => '鏡栗毛', 'name_furigana' => 'かがみくりげ', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Horse->value],
            ['name' => '白鵠', 'name_furigana' => 'はくこく', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Horse->value],
            ['name' => '飛電', 'name_furigana' => 'ひでん', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Horse->value],
            ['name' => '汗血馬', 'name_furigana' => 'かんけつば', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Horse->value],
            ['name' => '翡翠', 'name_furigana' => 'ひすい', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Horse->value],
            ['name' => '奥州驪', 'name_furigana' => 'おうしゅうぐろ', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Horse->value],
            ['name' => 'グリンガレット', 'name_furigana' => 'ぐりんがれっと', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Horse->value],
            ['name' => '青海波', 'name_furigana' => 'せいがいは', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Horse->value],
            ['name' => '赤兎馬', 'name_furigana' => 'せきとば', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Horse->value],
            ['name' => '的盧', 'name_furigana' => 'てきろ', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Horse->value],
            ['name' => '王庭', 'name_furigana' => 'おうば', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Horse->value],
            ['name' => 'ＺＥＴＳＵ－Ａ－', 'name_furigana' => '', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Horse->value],
            ['name' => '松風', 'name_furigana' => 'まつかぜ', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Horse->value],
            ['name' => '兵法書', 'name_furigana' => 'へいほうしょ', 'rarity_id' => Rarities::N->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Book->value],
            ['name' => '五輪書', 'name_furigana' => 'ごりんのしょ', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Book->value],
            ['name' => '闘戦経', 'name_furigana' => 'とうせんきょう', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Book->value],
            ['name' => '陰徳太平記', 'name_furigana' => 'いんとくたいへいき', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Book->value],
            ['name' => '太平要術', 'name_furigana' => 'たいへいようじゅつ', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Book->value],
            ['name' => '羅生門', 'name_furigana' => 'らしょうもん', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Book->value],
            ['name' => '越絶書', 'name_furigana' => 'えつぜつしょ', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Book->value],
            ['name' => '独行道', 'name_furigana' => 'どっこうどう', 'rarity_id' => Rarities::R->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Book->value],
            ['name' => '五代之軍記', 'name_furigana' => 'ごだいのぐんき', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Book->value],
            ['name' => '金烏玉兎集', 'name_furigana' => 'きんうぎょくとしゅう', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Book->value],
            ['name' => '孫子', 'name_furigana' => 'そんし', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Book->value],
            ['name' => '海国兵談', 'name_furigana' => 'かいこくへいだん', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Book->value],
            ['name' => '進化の系譜', 'name_furigana' => 'しんかのけいふ', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Book->value],
            ['name' => '三国志', 'name_furigana' => 'さんごくし', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Book->value],
            ['name' => '琥珀', 'name_furigana' => 'こはく', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gem->value],
            ['name' => '翠玉', 'name_furigana' => 'すいぎょく', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gem->value],
            ['name' => '紅玉', 'name_furigana' => 'こうぎょく', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gem->value],
            ['name' => '黄水晶', 'name_furigana' => 'きすいしょう', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gem->value],
            ['name' => '蒼玉', 'name_furigana' => 'そうぎょく', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gem->value],
            ['name' => '紫石英', 'name_furigana' => 'しせきえい', 'rarity_id' => Rarities::SR->value, 'heirloom_soul_classification_id' => HeirloomSoulClassifications::Gem->value],
        ];

        $rarities = Rarity::all();
        $heirloomSoulClassifications = HeirloomSoulClassification::all();

        // 戦器配列をループで回して、FKカラムをモデルから取得したIDで代入する
        foreach ($heirlooms as $i => $h) {
            $rarityModel = $rarities->firstWhere('rarity', $h['rarity_id']);
            $hscModel = $heirloomSoulClassifications->firstWhere('heirloom_soul_classification', $h['heirloom_soul_classification_id']);

            if ($rarityModel) {
                $heirlooms[$i]['rarity_id'] = $rarityModel->id;
            }
            if ($hscModel) {
                $heirlooms[$i]['heirloom_soul_classification_id'] = $hscModel->id;
            }
        }

        Heirloom::upsert(
            $heirlooms,
            ['name', 'name_furigana'],
            ['rarity_id', 'heirloom_soul_classification_id']
        );
    }
}
