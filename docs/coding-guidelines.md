# Coding Guidelines

## Purpose

本ドキュメントでは、
本プロジェクトにおける PHP / Laravel の
コーディング上の基本方針を定義します。

既存コードとの一貫性を最優先してください。

## Readability

コードの可読性を優先してください。

短さだけを目的とした記述は避けてください。

複雑な条件分岐では、
早期 return を利用してネストを浅くすることを検討してください。

三項演算子は、
条件が単純で読みやすい場合のみ使用してください。

複雑な条件で無理に三項演算子を使用しないでください。

## Responsibility

クラス・メソッドは、
可能な範囲で明確な責務を持たせてください。

1つのメソッドが以下を大量に同時実行している場合は、
分割を検討してください。

- Validation
- Data Access
- Business Logic
- External API Access
- Formatting
- Response Generation

ただし、単純な処理を過度に細分化しないでください。

## SOLID

SOLID 原則は設計判断の参考として使用してください。

原則を適用すること自体を目的にしないでください。

小規模で単純な実装に対して、
不要な Interface や抽象クラスを導入しないでください。

## Naming

PHP / Laravel の一般的な命名規則と、
既存コードの命名方法に従ってください。

基本方針:

- Class: PascalCase
- Method: camelCase
- Variable: camelCase
- DB table: snake_case / plural
- DB column: snake_case
- Model: singular
- Controller: singular + `Controller`
- FormRequest: 処理内容 + `Request`
- Seeder: singular + `Seeder`
- Enum: singular

Boolean を表す名称では、
意味に応じて以下の prefix を検討してください。

- `is`
- `has`
- `can`
- `should`

名称は短さより意味の明確さを優先してください。

## Type Declarations

可能な限り PHP の型宣言を使用してください。

以下について型を明示できる場合は明示してください。

- Method parameter
- Return type
- Property

PHPDoc は、
PHP の型宣言だけでは十分に表現できない場合に使用してください。

例:

- Collection の要素型
- Array shape
- Generic type
- 複雑な戻り値

## Comments

コメントは必要最低限にしてください。

コードから読み取れる「何をしているか」を
そのままコメントで説明しないでください。

コメントを書く場合は、
主に以下を説明してください。

- なぜこの実装なのか
- なぜ通常とは異なる処理が必要なのか
- 外部仕様上の制約
- 一見不要に見える処理の理由

## Constants

意味を持つ値について、
マジックナンバー・マジックストリングを避けてください。

状況に応じて以下を使用してください。

- Constant
- Enum
- config
- Language file

ただし、
一度しか使用しない自明な値まで
機械的に定数化する必要はありません。

## Validation

複雑な入力 validation は、
FormRequest に配置してください。

Controller 内に大量の validation rule を
記述しないでください。

## Eloquent

単純な CRUD や Relationship については
Eloquent を優先してください。

ただし、
Query Builder や Raw SQL の方が
明確・効率的・保守しやすい場合は使用できます。

「必ず Eloquent を使う」
というルールにはしません。

## N+1

Relationship をループ内で遅延ロードすることで
N+1 が発生していないか確認してください。

必要に応じて以下を使用してください。

- `with()`
- `load()`
- `loadMissing()`

ただし、
不要な Relation を大量に eager load しないでください。

## Collections

Laravel Collection を使用することで
処理が明確になる場合は Collection を使用してください。

単純な配列処理まで、
無理に Collection へ変換する必要はありません。

## Dependency Injection

Service や外部依存クラスについては、
Constructor Injection を優先してください。

例:

    public function __construct(
        PaymentService $paymentService,
    ) {
        $this->paymentService = $paymentService;
    }

すべての `new` を禁止しません。

Value Object、DTO、PHP 標準クラスなど、
依存性注入が不要なオブジェクトは直接生成して構いません。

## Environment Variables

アプリケーションコードから
`env()` を直接使用しないでください。

環境変数は config ファイルへ読み込み、
アプリケーションからは `config()` を利用してください。

例:

    // config/services.php

    'example' => [
        'api_key' => env('EXAMPLE_API_KEY'),
    ],

アプリケーション側:

    $config = config('services.example.api_key');

## Blade

Blade では View の表示に必要な処理のみを行ってください。

以下は避けてください。

- DB Query
- 複雑な Business Logic
- 大量の PHP
- 大規模な JavaScript

サーバー側のデータを JavaScript へ渡す場合は、
Blade のエスケープ・JSON 出力機能を適切に使用してください。

## Configuration

環境・機能ごとに変わる値については、
ハードコードせず config の使用を検討してください。

## Database

DB スキーマの変更は Migration を利用してください。

直接 DB を編集することを前提とした実装を作らないでください。

## Dates

日時カラムについては、
必要に応じて Eloquent の `$casts` を使用してください。

例:

    protected $casts = [
        'ordered_at' => 'datetime',
    ];

View ごとに毎回日時文字列を解析するような実装は避けてください。

## Formatter

フォーマットについては Laravel Pint を使用します。

人間または Codex が、
Pint が自動修正できるだけのスタイル差を
レビューで細かく指摘する必要はありません。

## Static Analysis

Larastan を使用します。

静的解析で検出可能な型・コード品質上の問題については、
必要に応じて Larastan の結果も確認してください。

## Scope of Changes

対象変更と無関係なリファクタリングを
同一の Pull Request に混ぜないでください。

コードを変更する場合は、
現在の依頼を満たす最小限の変更を優先してください。
