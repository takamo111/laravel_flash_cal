<?php

use Illuminate\Database\Seeder;

class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizzes')->truncate();

        DB::table('quizzes')->insert(
          [
            [
              'title' => '1アメジスト',
              'answers_id' => 1,
              'categories_id' => 5,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '2クォーツ',
              'answers_id' => 2,
              'categories_id' => 5,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '3黒曜石',
              'answers_id' => 3,
              'categories_id' => 5,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '4翡翠',
              'answers_id' => 4,
              'categories_id' => 5,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '5自然金',
              'answers_id' => 5,
              'categories_id' => 5,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '6ラピスラズリ',
              'answers_id' => 6,
              'categories_id' => 5,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '7琥珀',
              'answers_id' => 7,
              'categories_id' => 5,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '8トルマリン',
              'answers_id' => 8,
              'categories_id' => 5,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '9トルコ石',
              'answers_id' => 9,
              'categories_id' => 5,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '10孔雀石',
              'answers_id' => 10,
              'categories_id' => 5,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '11ダイヤモンド',
              'answers_id' => 11,
              'categories_id' => 2,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '12石膏',
              'answers_id' => 12,
              'categories_id' => 2,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '13沸石',
              'answers_id' => 13,
              'categories_id' => 2,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '14方解石',
              'answers_id' => 14,
              'categories_id' => 2,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '15辰砂',
              'answers_id' => 15,
              'categories_id' => 2,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '16輝銅鉱',
              'answers_id' => 16,
              'categories_id' => 2,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '17鉄鉱石',
              'answers_id' => 17,
              'categories_id' => 2,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '18ルチル',
              'answers_id' => 18,
              'categories_id' => 2,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '19アレキサンドライト',
              'answers_id' => 19,
              'categories_id' => 2,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '21自然銀',
              'answers_id' => 20,
              'categories_id' => 2,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '紫水晶.png',
            ],
            [
              'title' => '21トパーズ',
              'answers_id' => 21,
              'categories_id' => 1,
              'created_at' => now(),
              'updated_at' => now(),
              'image_src' => '/images/quiz/紫水晶.png',
            ]
          ]
        );
      }
    }