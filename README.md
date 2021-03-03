# Laravel環境@Dockerの構築

Dockerを使ったLaravel環境の構築

## 仕様

- php:7.4-fpm-buster
- composer:1.10
- nginx:1.18-alpine
- mysql:8.0
- laravel/laravel=8.*

## 手順

### 準備

`laravel` ディレクトリの作成

`mkdir laravel`

### Dockerイメージとコンテナの構築

`docker-compose.yml`のファイルがあるディレクトリにて以下のコマンドを実行

1. `docker-compose build --parallel --no-cache`
2. `docker-compose up -d`

### Laravelインストール

1. `app`コンテナのbashにアクセスし、  
  `docker-compose exec app bash`
2. `laravel`ディレクトリにlaravelのソースファイルインストール.  
  `composer create-project --prefer-dist "laravel/laravel=8.*" .`

注意)  
`.env`が`laravel`ディレクトリに存在しないことを確認する.  
存在する場合は削除.  

### パーミッション問題

以上でインストール作業は終わりだが実行時にパーミッション問題が上がる.  

`app`サービスにbashログイン.  
`docker-compose exec app bash`.  
  
各フォルダのパーミッションを`777`に変更.  

```
chmod 777 -R storage/logs/
chmod 777 -R storage/framework/sessions/
chmod 777 -R storage/framework/views/
```

## 確認

ブラウザで`localhost:8080`を開き、laravelのウェルカムページが開けば成功
