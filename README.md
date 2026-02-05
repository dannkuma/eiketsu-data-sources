## プロジェクト概要

英傑大戦のデッキシミュレーターサイトの再構築プロジェクトです。
本プロジェクトのモチベーションや設計等は[設計資料](#設計資料)をご覧ください。

## 目次

- [プロジェクト概要](#プロジェクト概要)
- [目次](#目次)
- [設計資料](#設計資料)
- [前提条件](#前提条件)
- [環境構築](#環境構築)
  - [1. VS Code 推奨拡張機能のインストール](#1-vs-code-推奨拡張機能のインストール)
  - [2. 初回セットアップ](#2-初回セットアップ)
- [開発ガイド](#開発ガイド)
  - [プロジェクトの起動](#プロジェクトの起動)
  - [Pint (フォーマッタ) の実行](#pint-フォーマッタ-の実行)
    - [自動実行](#自動実行)
    - [手動実行](#手動実行)
  - [Larastan (静的解析) の実行](#larastan-静的解析-の実行)
    - [自動実行 (Git Hook)](#自動実行-git-hook)
    - [手動実行](#手動実行-1)
  - [開発用サーバの起動 (Tailwind CSS)](#開発用サーバの起動-tailwind-css)
- [スクレイピング手順](#スクレイピング手順)
  - [武将データの取得](#武将データの取得)
  - [戦器データの取得](#戦器データの取得)
  - [英魂データの取得](#英魂データの取得)
- [Serena MCP の適用](#serena-mcp-の適用)

---

<a id="設計資料"></a>

## 設計資料

以下のリンクを参照してください。
[シミュレーターサイト再構築（Notion）](https://sprout-lord-594.notion.site/1596b65e71a080af9f5df11aa6b226f4)

<a id="前提条件"></a>

## 前提条件

-   GitHub からプロジェクトをクローン済みであること
-   Docker (v24.0.5 以上)
-   Docker Compose (v2.20.2 以上)

<a id="環境構築"></a>

## 環境構築

### 1. VS Code 推奨拡張機能のインストール

本プロジェクトには、PHP開発やDocker、Tailwind CSSを効率化するための推奨拡張機能が設定されています。

1.  VS Code の **Extensions (拡張機能)** ビューを開きます（`Ctrl+Shift+X` または `Cmd+Shift+X`）。
2.  検索窓に `@recommended` と入力します。
3.  表示された「WORKSPACE RECOMMENDATIONS」にある拡張機能をインストールしてください。

### 2. 初回セットアップ

ルートディレクトリで以下の手順を実行してください。

1.  `export DOCKER_CONTENT_TRUST=1`
2.  `docker compose build`
3.  `docker compose up -d`
4.  `.env.example` をコピーして `.env` を作成
5.  `docker compose exec app composer install`
6.  `docker compose exec app npm install`
7.  `docker compose exec app php artisan key:generate`
8.  `docker compose exec app php artisan storage:link`
9.  `docker compose exec app chmod -R 777 storage bootstrap/cache`
10. `docker compose exec app php artisan migrate`

---

<a id="開発ガイド"></a>

## 開発ガイド

### プロジェクトの起動

```bash
docker compose up
```

### Pint (フォーマッタ) の実行

#### 自動実行
-   VS Code に `Run on Save` 拡張機能をインストール済みであれば、保存時に自動実行されます。
-   設定は `.vscode/settings.json` で管理されています。

#### 手動実行
```bash
docker compose exec app ./vendor/bin/pint
```
※ 実行できない場合は `docker compose exec app composer install` を試してください。

### Larastan (静的解析) の実行

#### 自動実行 (Git Hook)
コミット時に自動で解析が走ります。初回のみ以下の設定が必要です。
```bash
chmod +x .githooks/pre-commit
git config core.hooksPath .githooks
```

#### 手動実行
```bash
docker exec -it eiketsu-data-sources-app-1 ./vendor/bin/phpstan analyse
```
※ 設定の調整は `src/phpstan.neon` で行います。

### 開発用サーバの起動 (Tailwind CSS)

```bash
docker compose exec -d app npm run dev
```

---

<a id="スクレイピング手順"></a>

## スクレイピング手順

`docker compose exec app composer show | grep dusk` で Laravel Dusk がインストールされていることを確認してから実行してください。

### 武将データの取得
1.  **IDリスト作成**: `docker compose exec app php artisan dusk tests/Browser/Scraping/General/CreateIdList.php`
2.  **詳細ページ保存**: `docker compose exec app php artisan dusk tests/Browser/Scraping/General/SaveGeneralDetailPages.php`
3.  **CSV変換**: `docker compose exec app php artisan app:create-all-general-csv`
4.  **画像取得**: `docker compose exec app php artisan app:get-general-images`

### 戦器データの取得
1.  **IDリスト作成**: `docker compose exec app php artisan dusk tests/Browser/Scraping/Heirloom/CreateIdList.php`
2.  **詳細ページ保存**: `docker compose exec app php artisan dusk tests/Browser/Scraping/Heirloom/SaveHeirloomDetailPages.php`
3.  **CSV変換**: `docker compose exec app php artisan app:create-all-heirloom-csv`
4.  **画像取得**: `docker compose exec app php artisan app:get-heirloom-images`

### 英魂データの取得
1.  **IDリスト作成**: `docker compose exec app php artisan dusk tests/Browser/Scraping/Soul/CreateIdList.php`
2.  **詳細ページ保存**: `docker compose exec app php artisan dusk tests/Browser/Scraping/Soul/SaveSoulDetailPages.php`
3.  **CSV変換**: `docker compose exec app php artisan app:create-all-soul-csv`
4.  **画像取得**: `docker compose exec app php artisan app:get-soul-images`

---

<a id="serena-mcp-の適用"></a>

## Serena MCP の適用

本プロジェクトでは GitHub Copilot に対して **Serena MCP** を適用可能です。
プロジェクトディレクトリ直下で、Copilot に対して以下の命令を実行してください。

> 現在のプロジェクトを Serena MCP を利用して分析してください。

ルートに `.serena` ディレクトリが作成されれば完了です。
詳細: [なぜSerena MCPを使うのか](https://izanami.dev/post/725d69ba-890d-4d0d-a06b-c81b77ccbc72)
