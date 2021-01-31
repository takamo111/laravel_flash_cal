# README

# アプリ名
 
鉱物の雑学&クイズ

# 概要
 
鉱物の雑学&クイズは、俳句投稿型のSNSです。  

  
<img src="https://user-images.githubusercontent.com/56215139/99416311-13afd880-293c-11eb-8003-6f4f55db0e96.jpg" width=30%>  


 
# 本番環境
heroku  
https://mineral-trivia-quiz.herokuapp.com/

# 制作背景（意図）


# DEMO

## トップページ


<a href="https://gyazo.com/6e840c7409428cc6a56f7aeeb8244237"><img src="https://i.gyazo.com/6e840c7409428cc6a56f7aeeb8244237.jpg" alt="Image from Gyazo" width="50%"/></a>

## 新規登録画面
新規登録画面 

サインイン  

<a href="https://gyazo.com/a2a371e45d34a1e5f59c650a560aa6c1"><img src="https://i.gyazo.com/a2a371e45d34a1e5f59c650a560aa6c1.png" alt="Image from Gyazo" width="30%"/></a>  
新規登録  

<a href="https://gyazo.com/22ccc2fce3dd1280395b18b95438a9a3"><img src="https://i.gyazo.com/22ccc2fce3dd1280395b18b95438a9a3.png" alt="Image from Gyazo" width="30%"/></a>  


## 投稿画面
 

<a href="https://gyazo.com/52d225610e2e5b6e1ada9a61002d432e"><img src="https://i.gyazo.com/52d225610e2e5b6e1ada9a61002d432e.jpg" alt="Image from Gyazo" width="50%"/></a>


## 一覧画面

![3116f75d77faa276025d52a64732dcf0](https://user-images.githubusercontent.com/56215139/99906535-04090900-2d1b-11eb-8b35-50c8f6281e6d.gif)  



<a href="https://gyazo.com/86318b4ba6ae4072ec99016b5aa94952"><img src="https://i.gyazo.com/86318b4ba6ae4072ec99016b5aa94952.png" alt="Image from Gyazo" width="100%"/></a>  

## 詳細画面  




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


