## 初回実行

1. ルートディレクトリで`export DOCKER_CONTENT_TRUST=1`を実行する
2. ルートディレクトリで`docker compose build`を実行する
3. ルートディレクトリで`docker compose up -d`を実行する
4. ルートディレクトリで`docker compose exec app composer install`を実行する
5. ルートディレクトリで`docker compose exec app php artisan key:generate`を実行する
6. ルートディレクトリで`docker compose exec app php artisan storage:link`を実行する
7. ルートディレクトリで`docker compose exec app chmod -R 777 storage bootstrap/cache`を実行する
8. ルートディレクトリで`docker compose exec app php artisan migrate`を実行する

## プロジェクトの起動

-   `docker compose up`を実行

### Pint の実行

-   `docker compose exec app ./vendor/bin/pint`を実行
-   Pint を実行できない場合は`docker compose exec app composer install `を実行

### 開発用サーバの起動(tailwind の反映)

-   `docker compose exec -d app npm run dev `を実行

### スクレイピングの実行

-   `docker compose exec app composer show | grep dusk`で dusk のインストールを確認
-   `docker compose exec app php artisan dusk tests/Browser/ScrapingTest.php`を実行
