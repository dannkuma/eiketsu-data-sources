# AGENTS.md

## Purpose

このファイルは、本リポジトリで作業する AI Coding Agent 向けのガイドです。

コードの実装・変更・調査・レビューを行う際は、
このファイルに記載されたルールと既存コードの設計を優先してください。

不明点がある場合は推測で判断せず、
まず関連するコード・テスト・ドキュメントを確認してください。

それでも仕様を判断できない場合は、ユーザーへ確認してください。

## Language

ユーザーへの回答、説明、Pull Request のレビューコメントは
日本語で記述してください。

コード上のクラス名、メソッド名、変数名などは、
既存プロジェクトの命名規則に従って英語を使用してください。

## Project Overview

本プロジェクトは、株式会社SEGAが運営する
アーケードゲーム「英傑大戦」を対象とした
デッキシミュレーターおよび関連機能を提供する Web アプリケーションです。

主要ドメインは以下です。

- 武将: `general`
- 戦器: `heirloom`
- 英魂: `soul`
- 大判: `balance`

ゲーム仕様やドメインルールが実装・レビュー判断に関係する場合は、
`docs/domain.md` を参照してください。

## Technology Stack

主要技術は以下です。

- PHP 8.3
- Laravel 11
- MySQL 8
- Nginx
- Tailwind CSS
- Bootstrap
- PHPUnit
- Laravel Dusk
- Larastan
- Laravel Pint
- Docker Compose
- Stripe / Laravel Cashier

正確なバージョンや依存関係については、
このファイルではなく以下の実ファイルを正としてください。

- `composer.json`
- `composer.lock`
- `package.json`
- `package-lock.json`
- `compose.yaml`
- `Dockerfile`

記載内容と実際の設定が異なる場合は、
実際の設定ファイルを優先してください。

## Architecture

基本的に Laravel 標準のディレクトリ構成に従います。

本プロジェクトでは、主に以下の責務分離を行います。

- `app/Services`
  - ビジネスロジックを配置する。
- `app/Infrastructure`
  - 外部サービス、外部ライブラリ、インフラストラクチャに依存する処理を配置する。

Controller は HTTP リクエスト・レスポンスの調整を主な責務とし、
複雑なビジネスロジックを直接持たせないでください。

設計判断が必要な場合は、
`docs/architecture.md` を参照してください。

## Coding

既存コードとの一貫性を優先してください。

新しい実装方法を導入する前に、
同じ目的を持つ既存コードが存在しないか確認してください。

詳細な PHP / Laravel のコーディング規則については、
必要に応じて `docs/coding-guidelines.md` を参照してください。

## Repository Exploration

実装・修正・レビューに必要な範囲で、
関連するコードを確認してください。

特に必要に応じて以下を確認してください。

- 呼び出し元
- 呼び出し先
- Model
- Eloquent Relation
- Migration
- FormRequest
- Service
- Infrastructure
- Controller
- Blade
- JavaScript
- Test

すべてのタスクでリポジトリ全体を読む必要はありません。

変更対象とその影響範囲を判断するために必要なファイルを優先してください。

## Changes

依頼された目的を達成するために必要な範囲だけを変更してください。

依頼内容と無関係な以下の変更を同時に行わないでください。

- 大規模なリファクタリング
- 命名変更
- フォーマット変更
- ディレクトリ構成変更
- ライブラリの入れ替え

破壊的変更や大規模な設計変更が必要だと判断した場合は、
実装前に理由・影響範囲・変更方針をユーザーへ説明してください。

## Testing

変更内容に対応するテストが存在する場合は実行してください。

PHPUnit / Laravel のテスト:

    php artisan test

コードフォーマット:

    ./vendor/bin/pint

静的解析:

    ./vendor/bin/phpstan analyse

ブラウザ操作を伴う機能については、
必要に応じて Laravel Dusk を使用してください。

テストを通すためだけに既存テストの期待値を変更しないでください。

既存テストの変更が必要な場合は、
仕様変更を伴っていないか確認してください。

## Code Review

Pull Request のレビューでは、
スタイル上の好みよりも実害のある問題を優先してください。

詳細なレビュー基準については、
`docs/review-guidelines.md` を参照してください。

ドメイン仕様に依存する変更では、
`docs/domain.md` も参照してください。

アーキテクチャ上の判断が必要な場合は、
`docs/architecture.md` も参照してください。

既存コードと整合しており、
実害のないスタイル差については原則として指摘しないでください。

確証のない問題を断定しないでください。

## Documentation

必要な場合のみ、以下のドキュメントを参照してください。

- `docs/domain.md`
  - ゲーム仕様・ドメインルール
- `docs/architecture.md`
  - アプリケーション構成・責務分離
- `docs/coding-guidelines.md`
  - PHP / Laravel のコーディング規約
- `docs/review-guidelines.md`
  - Pull Request のレビュー基準


## Notion Documentation

本プロジェクトの外部仕様書は Notion で管理しています。

Project root:
{本PJ用のNotion上でルートとなるページのURLに置き換えてください}

Notion MCPを使用する場合は、
上記ページおよびその配下のページのみを本プロジェクトのドキュメントとして参照してください。

タスクに必要なページのみを参照し、プロジェクトと無関係な Notion ページは検索・参照しないでください。
