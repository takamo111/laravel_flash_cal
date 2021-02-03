# README

# アプリ名
 
鉱物の雑学&クイズ

# 概要
 
鉱物の雑学&クイズは、俳句投稿型のSNSです。  

  
<a href="https://gyazo.com/07a43c72f10a861693bde666372d4289"><img src="https://i.gyazo.com/07a43c72f10a861693bde666372d4289.png" alt="Image from Gyazo" width="278"/></a>


 
# 本番環境
heroku  
https://mineral-trivia-quiz.herokuapp.com/

# 制作背景（意図）


# DEMO

## トップページ
ホーム画面の真ん中のロゴは、オリジナルで、canvaというロゴを作成できるサービスで作っています。  
上部バナーについては全ページ共通で、すぐに行きたいページにアクセスできるようになっています。 

<a href="https://gyazo.com/e26bb08ad859bbb94a800257ae936003"><img src="https://i.gyazo.com/e26bb08ad859bbb94a800257ae936003.png" alt="Image from Gyazo" width="1440"/></a>

### 新規登録
<a href="https://gyazo.com/7d584cbe70948c36b4771699436e5398"><img src="https://i.gyazo.com/7d584cbe70948c36b4771699436e5398.png" alt="Image from Gyazo" width="1026"/></a>


### サインイン  
<a href="https://gyazo.com/1ca821f19581c8a9ad65d9f1c93002ec"><img src="https://i.gyazo.com/1ca821f19581c8a9ad65d9f1c93002ec.png" alt="Image from Gyazo" width="992"/></a>

## クイズ画面

### 回答前
<a href="https://gyazo.com/8359c0c600dc4e13de49a2971f5b8bad"><img src="https://i.gyazo.com/8359c0c600dc4e13de49a2971f5b8bad.png" alt="Image from Gyazo" width="1440"/></a>

### 回答後
<a href="https://gyazo.com/4464e7c29264174a28571f2d4c8ff4e6"><img src="https://i.gyazo.com/4464e7c29264174a28571f2d4c8ff4e6.png" alt="Image from Gyazo" width="50%"/></a>

### 正答率表示(10問回答後)
<a href="https://gyazo.com/46d5b6c424bd71cc075bd0c965c8b3a6"><img src="https://i.gyazo.com/46d5b6c424bd71cc075bd0c965c8b3a6.png" alt="Image from Gyazo" width="50%"/>/></a>


## 鉱物図鑑機能
<a href="https://gyazo.com/6531fae184227d23c72a49c82e0b5354"><img src="https://i.gyazo.com/6531fae184227d23c72a49c82e0b5354.png" alt="Image from Gyazo" width="50%"/></a>

## マイページ画面
<a href="https://gyazo.com/61df49f6ed1ab2148ad83da48c1bdf18"><img src="https://i.gyazo.com/61df49f6ed1ab2148ad83da48c1bdf18.png" alt="Image from Gyazo" width="567"/></a>



# 工夫したポイント
・クイズを解いていくことで自然に鉱物の知識を得られるように写真と説明を
・



# 使用技術（開発環境）

## バックエンド
PHP,laravel
## フロントエンド
HTTP,Sass,JavaScript,JQuery,Ajax
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


