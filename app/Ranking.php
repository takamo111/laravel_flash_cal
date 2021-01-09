<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    protected $table = 'rankings';
    //Rankingモデルについてpercentage_correct_answerとuser_idに値を代入して値をinsert
    public function insertScore(int $correctRatio, int $userId)
  {
    $ranking = new Ranking();
    $ranking->percentage_correct_answer = $correctRatio;
    $ranking->user_id = $userId;
    $ranking->save();
    }
    
    //リレーションの設定
    public function user()
    {
      return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
