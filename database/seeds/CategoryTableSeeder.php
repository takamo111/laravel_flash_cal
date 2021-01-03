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
              'name' => '鉱物',
              'created_at' => now(),
              'updated_at' => now(),
            ],
            [
              'name' => '岩石',
              'created_at' => now(),
              'updated_at' => now(),
            ],
            [
              'name' => 'サンプル',
              'created_at' => now(),
              'updated_at' => now(),
            ],
            [
              'name' => 'サンプル',
              'created_at' => now(),
              'updated_at' => now(),
            ],
            [
              'name' => 'サンプル',
              'created_at' => now(),
              'updated_at' => now(),
            ], [
              'name' => 'サンプル',
              'created_at' => now(),
              'updated_at' => now(),
            ]
          ]
        );
      }
    }