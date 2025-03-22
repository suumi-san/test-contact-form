# お問い合わせフォーム

## 環境構築

Docker ビルド

1.git clone https://github.com/suumi-san/test-contact-form
2.docker-compose up -d --build

Laravel 環境構築

1.docker-compose exec php bash
2.composer create-project "laravel/laravel=8.\*" . --prefer-dist
3..env.example ファイルから.ev ファイルを作成し、環境変数を変更

## 使用技術(実行環境)

・php:7.4.9-fpm
・Laravel 8.83.29
・mysql:8.0.26

## ER 図

< - - - 作成した ER 図の画像 - - - >

## URL

-   例) 開発環境：http://localhost/
