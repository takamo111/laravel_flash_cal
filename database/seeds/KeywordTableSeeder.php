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
        'initial' => '元',
        'description' => '硫',
        'description' => '硫',
        'keyword' => '硫',
        'categories_id' => 1,
        'created_at' => now(),
        'updated_at' => now(),
        'image_src' => '元素_硫黄.jpg',
      ]
      ]);
    }
}