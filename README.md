# README

# アプリ名
 
鉱物の雑学&クイズ

# 概要
 
鉱物の雑学&クイズは、鉱物に詳しくなれるクイズアプリです。
約100種類の鉱物を4択クイズ形式で学んでいきましょう!また、解説のみのページもあります。

  
<a href="https://gyazo.com/07a43c72f10a861693bde666372d4289"><img src="https://i.gyazo.com/07a43c72f10a861693bde666372d4289.png" alt="Image from Gyazo" width="50%"/></a>


 
# 本番環境
heroku  
https://mineral-trivia-quiz.herokuapp.com/

# 制作背景（意図）
・前回SNS形式のアプリを作成したため違う形式のものを作りたいと思いクイズアプリを作成しました。また、あまり無い題材のクイズを作りたいと思い、大学で地学を専攻していたことから、馴染みのある鉱物を題材にしてアプリを作成しました。
・前回はRuby on Railsでのアプリ作成を行いましたが、より幅を広げるため、PHP,laravelでアプリを作成しました。

# DEMO

## トップページ
ホーム画面のロゴは、canvaというロゴを作成できるサービスで作っています。 

上部バナーについては全ページ共通で、すぐに行きたいページにアクセスできるようになっています。 

<a href="https://gyazo.com/e26bb08ad859bbb94a800257ae936003"><img src="https://i.gyazo.com/e26bb08ad859bbb94a800257ae936003.png" alt="Image from Gyazo" width="100%"/></a>

### 出題カテゴリー選択
出題するカテゴリーを選ぶことができます。鉱物の分類には元素鉱物、酸化鉱物、炭酸塩鉱物、珪酸塩鉱物、硫化鉱物、宝石、その他の7種類があります。全項目を選択するには『全項目チェック』のONを選択します。
クイズを開始する場合は『出題開始』を押してください(問題が10問に満たない場合はトップページに戻ります）

<a href="https://gyazo.com/7a31ba98210e5239a1f83730362288be"><img src="https://i.gyazo.com/7a31ba98210e5239a1f83730362288be.png" alt="Image from Gyazo" width="100%"/></a>

### ランキング機能
回答
<a href="https://gyazo.com/392583d2e4992af5931f32480c52b71d"><img src="https://i.gyazo.com/392583d2e4992af5931f32480c52b71d.png" alt="Image from Gyazo" width="50%"/></a>

### 新規登録
登録を行わなくてもクイズはできますが、新規登録を行うとマイページ機能とランキング機能が使えます。
登録には名前、メールアドレスとパスワードを入力します。
<a href="https://gyazo.com/7d584cbe70948c36b4771699436e5398"><img src="https://i.gyazo.com/7d584cbe70948c36b4771699436e5398.png" alt="Image from Gyazo" width="100%"/></a>

### サインイン  
<a href="https://gyazo.com/1ca821f19581c8a9ad65d9f1c93002ec"><img src="https://i.gyazo.com/1ca821f19581c8a9ad65d9f1c93002ec.png" alt="Image from Gyazo" width="100%"/></a>

## クイズ画面


### 回答前
<a href="https://gyazo.com/8359c0c600dc4e13de49a2971f5b8bad"><img src="https://i.gyazo.com/8359c0c600dc4e13de49a2971f5b8bad.png" alt="Image from Gyazo" width="100%"/></a>

### 回答後
<a href="https://gyazo.com/4464e7c29264174a28571f2d4c8ff4e6"><img src="https://i.gyazo.com/4464e7c29264174a28571f2d4c8ff4e6.png" alt="Image from Gyazo" width="100%"/></a>

### 正答率表示(10問回答後)
10問回答を行うと
<a href="https://gyazo.com/46d5b6c424bd71cc075bd0c965c8b3a6"><img src="https://i.gyazo.com/46d5b6c424bd71cc075bd0c965c8b3a6.png" alt="Image from Gyazo" width="50%"/>/></a>


## 鉱物図鑑機能
<a href="https://gyazo.com/6531fae184227d23c72a49c82e0b5354"><img src="https://i.gyazo.com/6531fae184227d23c72a49c82e0b5354.png" alt="Image from Gyazo" width="100%"/></a>

## マイページ画面
<a href="https://gyazo.com/61df49f6ed1ab2148ad83da48c1bdf18"><img src="https://i.gyazo.com/61df49f6ed1ab2148ad83da48c1bdf18.png" alt="Image from Gyazo" width="50%"/></a>



# 工夫したポイント
・クイズを解いていくことで自然に鉱物の知識を得られるように写真と説明を
・



# 使用技術（開発環境）

## バックエンド
PHP,laravel
## フロントエンド
HTTP,Sass,Vue.js,Node.js
## データベース
PostgreSQL 
## インフラ
heroku
## ソース管理
GitHub, GitHubDesktop
## テスト
RSpec
## エディタ
VSCode

# 課題や今後実装したいこと
・  
・


## usersテーブル

|Column|Type|Options|
|------|----|-------|
|name|string|null: false|
|email|string|null: false|



## informationsテーブル

|Column|Type|Options|
|------|----|-------|
|infomation|text||



## categoriesテーブル

|Column|Type|Options|
|------|----|-------|
|name|string|null: false|


### Association
- belongs_to :
- belongs_to :


## quizzesテーブル

|Column|Type|Options|
|------|----|-------|
|title|text||
|tweet_id|integer|null: false, foreign_key: true|

### Association
- belongs_to :user
- belongs_to :tweet


## likesテーブル

|Column|Type|Options|
|------|----|-------|
|user_id|integer|null: false, foreign_key: true|
|tweet_id|integer|null: false, foreign_key: true|

### Association
- belongs_to :user
- belongs_to :tweet


