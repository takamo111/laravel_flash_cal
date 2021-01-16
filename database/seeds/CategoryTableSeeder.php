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
            [
              'name' => '元素鉱物',
              'created_at' => now(),
              'updated_at' => now(),
            ],
            [
              'name' => '酸化鉱物',
              'created_at' => now(),
              'updated_at' => now(),
            ],
            [
              'name' => '炭酸塩鉱物',
              'created_at' => now(),
              'updated_at' => now(),
            ], 
            [
              'name' => '珪酸塩鉱物',
              'created_at' => now(),
              'updated_at' => now(),
            ],
            [
                'name' => '酸化鉱物',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '宝石',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'その他',
                'created_at' => now(),
                'updated_at' => now(),
            ],
          ]
        );
    }
}