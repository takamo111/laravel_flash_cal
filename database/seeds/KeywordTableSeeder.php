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
        'description' => '硫黄',
        'description' => '硫黄',// => '成分である硫黄が火山ガスに多量に含まれているため、火山の多い日本では各地の火山噴気孔や硫黄泉などで硫黄の結晶を見ることができる。日本の場合は、濃度の高い火山ガスが地表で急速に結晶化することが多いので、中心部と外縁部との成長スピードがずれて、結晶の形は鋭い錐状になったり、塊状、骸状になったりする。外国産のものは、硫酸塩を含む地層が時間をかけて硫黄を遊離させるので、直線的で大きな結晶が見られる。硫黄は独特なにおいがあり、可燃性が高く、火で炙ると簡単に溶ける。高度は低くて脆いので、爪で傷つけることができる。',
        'keyword' => '硫黄',
        'categories_id' => 1,
        'created_at' => now(),
        'updated_at' => now(),
        'image_src' => '元素_硫黄.jpg',
      ],
      [
        'initial' => 'その他',
        'description' => '硫黄',// => '母岩となる火山岩が火山性の噴気ガスや温泉の作用を受けた時にできる。この作用を「明礬石化作用」という。明礬石は、通常塊状で産出することが多いが、まれに葉片状や立方体に近い菱面体の結晶も産する。色は白色から褐色、ピンクや黄色がかったものも見られる。主成分はカリウムとアルミニウムだが、明礬石の化学成分は入れ替わる事があり、カリウムがナトリウムに置き換わればガラスの原料になるソーダ明礬石になり、アルミニウムに代わって鉄が加わると鉄明礬石になる。産地としては、火山国の日本や、イタリアで多く産出される。',
        'keyword' => '明礬石',
        'categories_id' => 7,
        'created_at' => now(),
        'updated_at' => now(),
        'image_src' => 'その他_明礬石.jpeg',
      ]
      ]);
    }
}