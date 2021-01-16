<?php

use Illuminate\Database\Seeder;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('answers')->truncate();
  
      DB::table('answers')->insert([
        //1アメジスト
        [
          'answer_1' => '1アメジスト',
          'answer_2' => '黒曜石',
          'answer_3' => '水晶',
          'answer_4' => 'タンザナイト',
          'correct_answer_no' => 1,
          'commentary' => 'アメジスト
  
  サンプル
  
  サンプル
  
  サンプル,',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        
        //2クォーツ
        [
            'answer_1' => 'サンプル',
            'answer_2' => '2クォーツ',
            'answer_3' => 'サンプル',
            'answer_4' => 'サンプル',
            'correct_answer_no' => 2,
            'commentary' => 'クォーツ
    
    サンプル
    
    サンプル
    
    サンプル,',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        //3黒曜石
        [
            'answer_1' => 'サンプル',
            'answer_2' => 'サンプル',
            'answer_3' => '3黒曜石',
            'answer_4' => 'サンプル',
            'correct_answer_no' => 3,
            'commentary' => '黒曜石
    
    サンプル
    
    サンプル
    
    サンプル,',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        //4翡翠
        [
            
                'answer_1' => 'サンプル',
                'answer_2' => 'サンプル',
                'answer_3' => 'サンプル',
                'answer_4' => '4翡翠',
                'correct_answer_no' => 4,
                'commentary' => '黒曜石
        
        サンプル
        
        サンプル
        
        サンプル,',
              'created_at' => now(),
              'updated_at' => now(),
        ],
        //5自然金
        [
            
            'answer_1' => '5自然金',
            'answer_2' => 'サンプル',
            'answer_3' => 'サンプル',
            'answer_4' => 'サンプル',
            'correct_answer_no' => 1,
            'commentary' => '自然金
    
    サンプル
    
    サンプル
    
    サンプル,',
          'created_at' => now(),
          'updated_at' => now(),
        ],
   
        //6ラピスラズリ
        [
            
            'answer_1' => '自然金',
            'answer_2' => '6ラピスラズリ',
            'answer_3' => 'サンプル',
            'answer_4' => '翡翠',
            'correct_answer_no' => 2,
            'commentary' => 'ラピスラズリ
    
    サンプル
    
    サンプル
    
    サンプル,',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        //7琥珀
        [
            
            'answer_1' => '7琥珀',
            'answer_2' => 'サンプル',
            'answer_3' => 'サンプル',
            'answer_4' => 'サンプル',
            'correct_answer_no' => 1,
            'commentary' => '琥珀
    
    サンプル
    
    サンプル
    
    サンプル,',
          'created_at' => now(),
          'updated_at' => now(),
        ],
          //8トルマリン
          [
            'answer_1' => 'サンプル',
            'answer_2' => 'トルマリン',
            'answer_3' => 'サンプル',
            'answer_4' => 'サンプル',
            'correct_answer_no' => 2,
            'commentary' => 'トルマリン
    
    サンプル
    
    サンプル
    
    サンプル,',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        //9トルコ石
        [
            
            'answer_1' => '9トルコ石',
            'answer_2' => 'サンプル',
            'answer_3' => 'サンプル',
            'answer_4' => '翡翠',
            'correct_answer_no' => 1,
            'commentary' => 'トルコ石
    
    サンプル
    
    サンプル
    
    サンプル,',
          'created_at' => now(),
          'updated_at' => now(),
    ],
        //10孔雀石
        [
            
            'answer_1' => '10孔雀石',
            'answer_2' => 'サンプル',
            'answer_3' => 'サンプル',
            'answer_4' => '翡翠',
            'correct_answer_no' => 1,
            'commentary' => '孔雀石
    
    サンプル
    
    サンプル
    
    サンプル,',
          'created_at' => now(),
          'updated_at' => now(),
    ],
          //11ダイヤモンド
          [
            
            'answer_1' => 'サンプル',
            'answer_2' => 'サンプル',
            'answer_3' => 'サンプル',
            'answer_4' => '11ダイヤモンド',
            'correct_answer_no' => 4,
            'commentary' => 'ダイヤモンド
    
    サンプル
    
    サンプル
    
    サンプル,',
          'created_at' => now(),
          'updated_at' => now(),
    ],

//12石膏
[
    'answer_1' => 'サンプル',
    'answer_2' => '12石膏',
    'answer_3' => 'サンプル',
    'answer_4' => 'サンプル',
    'correct_answer_no' => 2,
    'commentary' => '石膏

サンプル

サンプル

サンプル,',
  'created_at' => now(),
  'updated_at' => now(),
],
        //13沸石
        [
            
            'answer_1' => '13沸石',
            'answer_2' => 'サンプル',
            'answer_3' => 'サンプル',
            'answer_4' => 'サンプル',
            'correct_answer_no' => 1,
            'commentary' => '沸石
    
    サンプル
    
    サンプル
    
    サンプル,',
          'created_at' => now(),
          'updated_at' => now(),
    ],
        //14方解石
        [
            
            'answer_1' => 'サンプル',
            'answer_2' => 'サンプル',
            'answer_3' => '14方解石',
            'answer_4' => 'サンプル',
            'correct_answer_no' => 3,
            'commentary' => '方解石
    
    サンプル
    
    サンプル
    
    サンプル,',
          'created_at' => now(),
          'updated_at' => now(),
    ],
 //15辰砂
 [
    'answer_1' => 'サンプル',
    'answer_2' => '15辰砂',
    'answer_3' => 'サンプル',
    'answer_4' => 'サンプル',
    'correct_answer_no' => 2,
    'commentary' => '辰砂

サンプル

サンプル

サンプル,',
  'created_at' => now(),
  'updated_at' => now(),
],

        //16輝銅鉱
        [
            
            'answer_1' => 'サンプル',
            'answer_2' => 'サンプル',
            'answer_3' => 'サンプル',
            'answer_4' => '輝銅鉱',
            'correct_answer_no' => 4,
            'commentary' => '輝銅鉱
    
    サンプル
    
    サンプル
    
    サンプル,',
          'created_at' => now(),
          'updated_at' => now(),
    ],
        //17鉄鉱石
        [
            
            'answer_1' => '17鉄鉱石',
            'answer_2' => 'サンプル',
            'answer_3' => 'サンプル',
            'answer_4' => '翡翠',
            'correct_answer_no' => 1,
            'commentary' => '鉄鉱石
    
    サンプル
    
    サンプル
    
    サンプル,',
          'created_at' => now(),
          'updated_at' => now(),
    ],
        //18ルチル
        [
            
            'answer_1' => 'サンプル',
            'answer_2' => 'サンプル',
            'answer_3' => '18ルチル',
            'answer_4' => 'サンプル',
            'correct_answer_no' => 3,
            'commentary' => 'ルチル
    
    サンプル
    
    サンプル
    
    サンプル,',
          'created_at' => now(),
          'updated_at' => now(),
    ],
       //19アレキサンドライト
       [
            
        'answer_1' => 'サンプル',
        'answer_2' => 'サンプル',
        'answer_3' => '19アレキサンドライト',
        'answer_4' => 'サンプル',
        'correct_answer_no' => 3,
        'commentary' => 'アレキサンドライト

サンプル

サンプル

サンプル,',
      'created_at' => now(),
      'updated_at' => now(),
],
       //20自然銀
       [
            
        'answer_1' => 'サンプル',
        'answer_2' => '20自然銀',
        'answer_3' => 'サンプル',
        'answer_4' => 'サンプル',
        'correct_answer_no' => 2,
        'commentary' => '自然銀

サンプル

サンプル

サンプル,',
      'created_at' => now(),
      'updated_at' => now(),
],
       //21トパーズ
       [
            
        'answer_1' => 'サンプル',
        'answer_2' => '21トパーズ',
        'answer_3' => 'サンプル',
        'answer_4' => 'サンプル',
        'correct_answer_no' => 2,
        'commentary' => '21トパーズ

サンプル

サンプル

サンプル,',
      'created_at' => now(),
      'updated_at' => now(),
],
      ]);
    }
  }
  