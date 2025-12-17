## プロジェクト概要

英傑大戦のデッキシミュレーターサイトの再構築プロジェクトです。
要件定義から始めており、現在は詳細設計フェーズとなります。
本プロジェクトのモチベーションや設計等は[設計資料](#設計資料)をご覧ください。
まだインフラ環境の整備を進めたのみの状態ではありますが、ローカルで実行する場合は
[初回実行](#初回実行)を参照してください。

<a id="設計資料"></a>

## 設計資料

以下のリンクを参照
[シミュレーターサイト再構築](https://sprout-lord-594.notion.site/1596b65e71a080af9f5df11aa6b226f4)

<a id="初回実行"></a>

## 初回実行

-   前提条件 1：Github からローカル PC に PJ をダウンロードしていること
-   前提条件 2：ローカル PC に Docker(v24.0.5)、Docker Compose(v2.20.2)がインストールされていること

1. ルートディレクトリで`export DOCKER_CONTENT_TRUST=1`を実行する
2. ルートディレクトリで`docker compose build`を実行する
3. ルートディレクトリで`docker compose up -d`を実行する
4. ルートディレクトリで`.env.example をコピーして .env`を作成する
5. ルートディレクトリで`docker compose exec app composer install`を実行する
6. ルートディレクトリで`docker compose exec app npm install`を実行する
7. ルートディレクトリで`docker compose exec app php artisan key:generate`を実行する
8. ルートディレクトリで`docker compose exec app php artisan storage:link`を実行する
9. ルートディレクトリで`docker compose exec app chmod -R 777 storage bootstrap/cache`を実行する
10. ルートディレクトリで`docker compose exec app php artisan migrate`を実行する

## プロジェクトの起動

-   `docker compose up`を実行

## Pint の実行

-   `docker compose exec app ./vendor/bin/pint`を実行
-   Pint を実行できない場合は`docker compose exec app composer install `を実行

## commit時のPint自動実行
ローカルマシンでcommitを実行するとPintが合わせて実行されます。
Dockerコンテナ内でのpre-commitは想定していません。

## 開発用サーバの起動(tailwind の反映)

-   `docker compose exec -d app npm run dev `を実行

## スクレイピングの実行

-   `docker compose exec app composer show | grep dusk`で dusk のインストールを確認
-   `docker compose exec app php artisan dusk tests/Browser/ScrapingTest.php`を実行
