<?php

use Illuminate\Database\Seeder;

class KeywordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keywords')->truncate();
    
        DB::table('keywords')->insert([
    
      [
        'initial' => '元素鉱物',
        'description' => '成分である硫黄が火山ガスに多量に含まれているため、火山の多い日本では各地の火山噴気孔や硫黄泉などで硫黄の結晶を見ることができる。日本の場合は、濃度の高い火山ガスが地表で急速に結晶化することが多いので、中心部と外縁部との成長スピードがずれて、結晶の形は鋭い錐状になったり、塊状、骸状になったりする。外国産のものは、硫酸塩を含む地層が時間をかけて硫黄を遊離させるので、直線的で大きな結晶が見られる。硫黄は独特なにおいがあり、可燃性が高く、火で炙ると簡単に溶ける。高度は低くて脆いので、爪で傷つけることができる。',
        'keyword' => '硫',
        'categories_id' => 1,
        'created_at' => now(),
        'updated_at' => now(),
        'image_src' => '元素_硫黄.jpg',
      ]
      ]);
    }
}