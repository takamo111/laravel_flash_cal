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
        'initial' => 'あ',
        'keyword' => 'アメジスト',
        'description' => 'アメジストです',
        'categories_id' => 1,
        'created_at' => now(),
        'updated_at' => now(),
      ],
      ]);
    }
}