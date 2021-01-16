<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
    
        DB::table('categories')->insert(
          [
            //id=1
            [
              'name' => '元素鉱物',
              'created_at' => now(),
              'updated_at' => now(),

            ],
            //id=2
            [
              'name' => '酸化鉱物',
              'created_at' => now(),
              'updated_at' => now(),
            ],
            //id=3
            [
              'name' => '炭酸塩鉱物',
              'created_at' => now(),
              'updated_at' => now(),
            ], 
            //id=4
            [
              'name' => '珪酸塩鉱物',
              'created_at' => now(),
              'updated_at' => now(),
            ],
            //id=5
            [
                'name' => '硫化鉱物',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //id=6
            [
                'name' => '宝石',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //id=7
            [
                'name' => 'その他',
                'created_at' => now(),
                'updated_at' => now(),
            ],
          ]
        );
    }
}