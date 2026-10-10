# Architecture Guide

## Purpose

本ドキュメントでは、
本プロジェクトにおけるアプリケーション構成と
責務分離の基本方針を説明します。

新規実装や比較的大きな変更を行う際、
またはレビューで責務の配置を判断する際に参照してください。

## Basic Policy

基本的には Laravel 標準のディレクトリ構成・設計思想を使用します。

既存コードに同種の実装が存在する場合は、
新しい設計パターンを導入する前に既存実装を確認してください。

一貫性を保てる場合は、
既存パターンを優先してください。

## Controller

Controller は HTTP レイヤーの調整を担当します。

主な責務:

- Request の受け取り
- FormRequest から受け取った値の利用
- Service の呼び出し
- Response / View / Redirect の返却

複雑なビジネスロジックを
Controller に直接実装しないでください。

## FormRequest

入力値のバリデーションは、
原則として FormRequest に配置します。

Controller 内で複雑な validation rule を直接記述することは避けてください。

## Service

`app/Services` には、
アプリケーションのビジネスロジックを配置します。

複数の Model や外部サービスをまたぐ処理、
状態変更を伴う処理、
ドメイン上意味のある一連の操作などは
Service への配置を検討してください。

ただし、単純な処理まで機械的に
Service クラスへ切り出す必要はありません。

## Model

Eloquent Model は、
データベース上のエンティティと
その関係性を表現します。

主に以下を配置します。

- Relationship
- Cast
- Scope
- Attribute
- Model 固有の単純な振る舞い

複数ドメインをまたぐ複雑な処理を、
1つの Model に集中させないでください。

## Infrastructure

`app/Infrastructure` には、
外部システム・外部ライブラリ・技術的詳細に
依存する処理を配置します。

例:

- 外部 API
- スクレイピング
- ファイル生成
- ブラウザ操作
- 外部 SDK
- 特定ミドルウェアとの連携

ビジネスロジックと外部依存の詳細を
必要以上に密結合させないでください。

## Repository

Repository パターンは、
必要性がある場合に使用してください。

Query Builder や Raw SQL を隠蔽するためだけに、
すべての Model に Repository を作成する必要はありません。

以下のような場合は Repository の利用を検討できます。

- 複雑なデータアクセス
- 複数箇所で再利用する複雑な Query
- 外部データソースとの抽象化が必要
- Data Access の境界を明確にする必要がある

## Database

データベース構造の変更は Migration で管理してください。

アプリケーションコードから
直接 DB スキーマを変更しないでください。

データ整合性を保証できるものについては、
アプリケーションロジックだけでなく
DB 制約の利用も検討してください。

例:

- UNIQUE
- FOREIGN KEY
- NOT NULL

## Transactions

複数の更新処理が1つの業務操作を構成し、
一部だけ成功するとデータ不整合になる場合は、
DB Transaction を使用してください。

特に以下のような処理では注意してください。

- 大判の増減
- 商品・アイテム購入
- 売却
- 所有状態の変更
- 複数テーブルを同時更新する処理

## Authorization

認可については、
Laravel の Policy / Gate の利用を優先してください。

特にユーザー所有リソースを変更する処理では、
「ログインしているか」だけでなく
「そのリソースを操作する権限があるか」を確認してください。

## External Services

外部サービスへの依存は、
Controller や View へ直接埋め込まないでください。

依存クラスは必要に応じて
Constructor Injection を利用してください。

単純な Value Object や DTO などについては、
`new` の利用を禁止しません。

## Frontend

Blade は View の描画を主な責務とします。

Blade 内には以下を置かないでください。

- DB Query
- 複雑なビジネスロジック
- 大量の Vanilla PHP
- 大規模な JavaScript

JavaScript が複雑になる場合は、
JS ファイル・Module 側への分離を検討してください。

## Change Policy

既存アーキテクチャを変更する場合は、
局所的な改善だけではなく、
既存コードへの影響を確認してください。

既存パターンから大きく外れる設計を導入する場合は、
実装前に理由を説明してください。
