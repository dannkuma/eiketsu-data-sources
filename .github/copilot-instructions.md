## このドキュメントについて

- GitHub Copilot や各種 AI ツールが本リポジトリのコンテキストを理解しやすくするためのガイドです。
- 新しい機能を実装する際はここで示す技術選定・設計方針・モジュール構成を前提にしてください。
- 不確かな点がある場合は、リポジトリのファイルを探索し、ユーザーに「こういうことですか?」と確認をするようにしてください。

## 前提条件

- 回答は必ず日本語でしてください。
- GitHub Copilot は必ず日本語でレビューして欲しい
- コードの変更をする際、変更量が200行を超える可能性が高い場合は、事前に「この指示では変更量が200行を超える可能性がありますが、実行しますか?」とユーザーに確認をとるようにしてください。
- 何か大きい変更を加える場合、まず何をするのか計画を立てた上で、ユーザーに「このような計画で進めようと思います。」と提案してください。この時、ユーザーから計画の修正を求められた場合は計画を修正して、再提案をしてください。
- 現在のプロジェクトを有効化してください。

## プロジェクト概要

**このプロジェクトは株式会社SEGAが運営するアーケードゲームである「英傑大戦」のデッキシミュレーターです。**

**このゲームの基本的な概念を以下に示します**

- このゲームはPVP1対1の対戦型カードゲームです。
- プレイヤーは「英傑」と呼ばれる歴史上の武将をモチーフにしたキャラクターを筐体上で操作します。
- プレイヤーは「武将カード」を組み合わせて「デッキ」を構築します。
- 戦器は、1試合中に1だけ使用することができる特殊なアイテムです。
- 英魂は、試合が始まる前に1人の武将に装備することで、その武将のステータスを上昇させることができます。
  ただし、英魂で付与されたステータス上昇は戦器を使用すると消えてしまいます。
- 1つの戦器に対して1つの英魂を装着することができます。
- 戦器と英魂を購入するのには、「大判」と呼ばれるゲーム内通貨を使用します。
  この通貨は決済サービスで直接購入するか、戦器・英魂を売却することで入手できます。

## 主な機能

- **武将一覧画面**: 登録されている武将カードの一覧を表示します。武将カードの詳細情報を確認できます。
  武将の絞り込みやソートも行えます。
  また、武将カードを指定残すと組み合わせることで、デッキを構築し、その画像をダウンロードすることができます。
  ログインした状態であれば、特定の武将のお気に入り登録が行えます。
- **戦器一覧画面**: 登録されている戦器の一覧を表示します。戦器の詳細情報を確認できます。
  戦器の絞り込みやソートも行えます。
  大判を消費して戦器を購入することもできます。
- **英魂一覧画面**: 登録されている英魂の一覧を表示します。英魂の詳細情報を確認できます。
  英魂の簡単な絞り込みが行えます。
  大判を消費して英魂を購入することもできます。
- **所持戦器一覧画面**: ログインユーザーが所持している戦器の一覧を表示します。
  この画面では所持戦器の詳細確認、強化、英魂の着脱、売却、ロック、戦場持ち込み状態の切り替えが行えます。
- **所持英魂一覧画面**: ログインユーザーが所持している英魂の一覧を表示します。
  この画面では英魂の着脱、効果の再抽選、効果の固定、売却、ロックが行えます。
- **ログイン画面**: ユーザーがアイパス認証でログインを行う画面です。
- **パスワード再設定画面**: ユーザーがパスワード再設定を行う画面です。
- **ユーザー登録画面**: ユーザーが新規登録を行う画面です。
- **ユーザー情報画面**: ユーザーが自身の登録情報を確認・変更する画面です。
  この画面からメールアドレス、ユーザー名の変更が行えます。
- **大判購入画面**: ユーザーが大判を決済サービスを通じて購入する画面です。
- **ユーザー管理画面**: 管理者ユーザーが他のユーザーの情報を確認・変更する画面です。
- **武将管理画面**: 管理者ユーザーが武将カードの情報を登録・変更する画面です。
  武将情報をDBからCSV形式にエクスポートすることができます。
  武将情報をCSV形式でインポートすることができます。
- **戦器管理画面**: 管理者ユーザーが戦器の情報を登録・変更する画面です。
  戦器情報をDBからCSV形式にエクスポートすることができます。
  戦器情報をCSV形式でインポートすることができます。
- **英魂管理画面**: 管理者ユーザーが英魂の情報を登録・変更する画面です。
  英魂情報をDBからCSV形式にエクスポートすることができます。
  英魂情報をCSV形式でインポートすることができます。

## 用語集

- 武将: このゲームで最も重要なドメインです。generalsテーブルと紐づきます。**general**という単語があるときは武将のことを指しているものと考えてください。
- 戦器: このゲームで重要なドメインです。heirloomsテーブルと紐づきます。**heirloom**という単語があるときは戦器のことを指しているものと考えてください。
- 英魂: このゲームで重要なドメインです。soulsテーブルと紐づきます。**soul**という単語があるときは英魂のことを指しているものと考えてください。
- 大判: このゲームで使用される課金通貨です。**balance**という単語があるときは大判のことを指しているものと考えてください。

## 技術スタック

- **言語**: PHP8.3.24
- **フレームワーク**: Laravel11.45.1
- **データベース**: MySQL8.4.5
- **Webサーバー**: Nginx1.27.5
- **スタイリング**: Tailwind CSS3.1.0 + Bootstrap
- **テスト**: PHPUnit + Laravel Dusk
- **静的解析**: Larastan
- **フォーマッタ**: Pint
- **コンテナ管理**: Docker Compose
- **決済サービス**: Stripe (Laravel Cashier)

## プロジェクト構成

基本的なLaravelのプロジェクト構成に準じた構成になっています。
ただし、以下の点で一般的なLaravelプロジェクトとは異なります。

- app/Infrastructure には外部ライブラリなどのコードが配置されています。
- app/Services にはビジネスロジックが配置されています。

## プロジェクト内での規則

### **可読性の担保**

コードの可読性を最優先にしてください。
例えば、条件が複雑なif文を書く場合、早期リターンを使用してネストを浅くするなどの工夫をしてください。
また、無理に三項演算子を使用しないでください。コードの可読性が下がる場合は、if文を使用してください。
逆に、簡単な条件分岐の場合は三項演算子を使用してコードを簡潔にしてください。

### ++コメントの意義\*\*

コードのコメントは必要最低限にとどめてください。コードの意図が不明瞭な場合にのみコメントを追加してください。

### **SOLID原則の適用**

SOLID原則をなるべく遵守してください。ただし、共通化が必要なかったり、簡素な実装内容である場合は無理に適用しないでください。

### **コードの単純化**

関数・メソッドの長さはできるだけ短くしてください。1つの関数・メソッドが1つの責務を持つようにしてください。

### **変数名・関数名の命名規則**

変数名・関数名を提案するときは、業界内で一般的な命名規則を参考にしてください。（例: ブール値の変数名は is* や
has* で始めるなど）

### **ベタ書きによるハードコーディングの禁止**

マジックナンバー・マジックストリングは使用しないでください。定数や列挙型を使用してください。

### **型宣言とドキュメンテーションコメントの徹底**

可能な限り、型宣言を使用してください。
プロジェクトの理解のしやすさを上げるため、Docコメントが必要な箇所には確実に記載してください。

### **単一責任の原則**

クラスとメソッドは 1 つの責任だけを持つべきです。

### **ファットモデル、スキニーコントローラ**

DB に関連するすべてのロジックは Eloquent モデルに入れるか、もしクエリビルダもしくは生の SQL クエリを使用する場合はレポジトリークラスに入れます。

### **バリデーション**

バリデーションはコントローラからリクエストクラスに移動させます。

### **ビジネスロジックはサービスクラスの中に書く**

コントローラはただ 1 つの責任だけを持たないといけません、そのためビジネスロジックはコントローラからサービスクラスに移動させます。

### **繰り返し書かない (DRY)**

可能であればコードを再利用します。単一責任の原則は重複を避けることに役立ちます。また、Blade テンプレートを再利用したり、Eloquent のスコープなどを使用したりします。

### **クエリビルダや生の SQL クエリよりも Eloquent を優先して使い、配列よりもコレクションを優先する**

Eloquent により読みやすくメンテナンスしやすいコードを書くことができます。また、Eloquent には論理削除、イベント、スコープなどの優れた組み込みツールがあります。

### **Blade テンプレート内でクエリを実行しない。Eager Loding を使う(N + 1 問題)**

### **コメントを書く。ただしコメントよりも説明的なメソッド名と変数名を付けるほうが良い**

### **JS と CSS を Blade テンプレートの中に入れない、PHP クラスの中に HTML を入れない**

Bad:

```javascript
let article = `{{ json_encode($article) }}`;
```

Better:

```php
<input id="article" type="hidden" value='@json($article)'>
Or
<button class="js-fav-article" data-article='@json($article)'>{{ $article->name }}<button>
```

JavaScript ファイルで以下のように記述します:

```javascript
let article = $("#article").val();
```

もっとも良い方法は、データを転送するため JS パッケージに特別な PHP を使用することです。

### **コード内の文字列の代わりに config ファイルと language のファイル、定数を使う**

### **コミュニティに受け入れられた標準の Laravel ツールを使う**

サードパーティ製のパッケージやツールの代わりに、Laravel 標準機能とコミュニティパッケージを使うことを推奨します。将来あなたと共に働くことになるどの開発者も新しいツールを学習する必要があります。また、サードパーティ製のパッケージやツールを使用している場合は、Laravel コミュニティから助けを得る機会が大幅に少なくなります。あなたのクライアントにその代金を払わせないでください。
タスク | 標準ツール | サードパーティ製ツール
------------ | ------------- | -------------
認可 | Policies | Entrust, Sentinel または他のパッケージ
アセットコンパイル | Laravel Mix, Vite | Grunt, Gulp, サードパーティ製パッケージ
開発環境 | Laravel Sail, Homestead | Docker
デプロイ | Laravel Forge | Deployer またはその他ソリューション
単体テスト| PHPUnit, Mockery | Phpspec, Pest
ブラウザテスト | Laravel Dusk | Codeception
DB | Eloquent | SQL, Doctrine
テンプレート | Blade | Twig
データの取り扱い | Laravel collections | Arrays
フォームバリデーション | Request classes | サードパーティ製パッケージ、コントローラ内でバリデーション
認証 | 標準組み込み | サードパーティ製パッケージ、独自実装
API 認証 | Laravel Passport, Laravel Sanctum | サードパーティ製の JWT や OAuth パッケージ
API 作成 | 標準組み込み | Dingo API や類似パッケージ
DB 構造の取り扱い | Migrations | 直接 DB 構造を扱う
ローカライゼーション | 標準組み込み | サードパーティ製パッケージ
リアルタイムユーザインターフェース | Laravel Echo, Pusher | サードパーティ製パッケージ または直接 Web ソケットを扱う
テストデータ生成 | Seeder classes, Model Factories, Faker | 手動でテストデータを作成
タスクスケジューリング | Laravel Task Scheduler | スクリプトやサードパーティ製パッケージ
DB | MySQL, PostgreSQL, SQLite, SQL Server | MongoDB

### **Laravel の命名規則に従う**

[PSR](https://www.php-fig.org/psr/psr-12/)に従います。
また、Laravel コミュニティに受け入れられた命名規則に従います。
対象 | 規則 | Good | Bad
------------ | ------------- | ------------- | -------------
コントローラ | 単数形 | ArticleController | ~~ArticlesController~~
ルート | 複数形 | articles/1 | ~~article/1~~
名前付きルート | スネークケースとドット表記 | users.show_active | ~~users.show-active, show-active-users~~
モデル | 単数形 | User | ~~Users~~
hasOne または belongsTo 関係 | 単数形 | articleComment | ~~articleComments, article_comment~~
その他すべての関係 | 複数形 | articleComments | ~~articleComment, article_comments~~
テーブル | 複数形 | article_comments | ~~article_comment, articleComments~~
Pivot テーブル | 単数形 モデル名のアルファベット順 | article_user | ~~user_article, articles_users~~
テーブルカラム | スネークケース モデル名は含めない | meta_title | ~~MetaTitle; article_meta_title~~
モデルプロパティ | スネークケース | $model->created_at | ~~$model->createdAt~~
外部キー | 単数形 モデル名の最後に\_id をつける | article_id | ~~ArticleId, id_article, articles_id~~
主キー | - | id | ~~custom_id~~
マイグレーション | - | 2017_01_01_000000_create_articles_table | ~~2017_01_01_000000_articles~~
メソッド | キャメルケース | getAll | ~~get_all~~
リソースコントローラのメソッド | [一覧](https://laravel.com/docs/master/controllers#resource-controllers) | store | ~~saveArticle~~
テストクラスのメソッド | キャメルケース | testGuestCannotSeeArticle | ~~test_guest_cannot_see_article~~
変数 | キャメルケース | $articlesWithAuthor | ~~$articles_with_author~~
コレクション | 説明的、 複数形 | $activeUsers = User::active()->get() | ~~$active, $data~~
オブジェクト | 説明的, 単数形 | $activeUser = User::active()->first() | ~~$users, $obj~~
設定ファイルと言語ファイルのインデックス | スネークケース | articles_enabled | ~~ArticlesEnabled; articles-enabled~~
ビュー | ケバブケース | show-filtered.blade.php | ~~showFiltered.blade.php, show_filtered.blade.php~~
コンフィグ | スネークケース | google_calendar.php | ~~googleCalendar.php, google-calendar.php~~
契約 (インターフェイス) | 形容詞または名詞 | AuthenticationInterface | ~~Authenticatable, IAuthentication~~
Trait | 形容詞 | Notifiable | ~~NotificationTrait~~
Trait [(PSR)](https://www.php-fig.org/bylaws/psr-naming-conventions/) | adjective | NotifiableTrait | ~~Notification~~
Enum | singular | UserType | ~~UserTypes~~, ~~UserTypeEnum~~
FormRequest | singular | UpdateUserRequest | ~~UpdateUserFormRequest~~, ~~UserFormRequest~~, ~~UserRequest~~
Seeder | singular | UserSeeder | ~~UsersSeeder~~

### **できるだけ短く読みやすい構文で書く**

例:
一般的な構文 | 短く読みやすい構文
------------ | -------------
`Session::get('cart')` | `session('cart')`
`$request->session()->get('cart')` | `session('cart')`
`Session::put('cart', $data)` | `session(['cart' => $data])`
`$request->input('name'), Request::get('name')` | `$request->name, request('name')`
`return Redirect::back()` | `return back()`
`is_null($object->relation) ? null : $object->relation->id` | `optional($object->relation)->id`
`return view('index')->with('title', $title)->with('client', $client)` | `return view('index', compact('title', 'client'))`
`$request->has('value') ? $request->value : 'default';` | `$request->get('value', 'default')`
`Carbon::now(), Carbon::today()` | `now(), today()`
`App::make('Class')` | `app('Class')`
`->where('column', '=', 1)` | `->where('column', 1)`
`->orderBy('created_at', 'desc')` | `->latest()`
`->orderBy('age', 'desc')` | `->latest('age')`
`->orderBy('created_at', 'asc')` | `->oldest()`
`->select('id', 'name')->get()` | `->get(['id', 'name'])`
`->first()->name` | `->value('name')`

### **new の代わりに IoC コンテナもしくはファサードを使う**

new 構文はクラス間の密結合を生み出し、テストすることを難しくします。IoC コンテナまたはファサードを代わりに使います。

### **`.env`ファイルのデータを直接参照しない**

代わりに config ファイルへデータを渡します。そして、アプリケーション内でデータを参照する場合は`config()`ヘルパー関数を使います。

### **日付を標準フォーマットで保存する。アクセサとミューテータを使って日付フォーマットを変更する**

Bad:

```php
{{ Carbon::createFromFormat('Y-d-m H-i', $object->ordered_at)->toDateString() }}
{{ Carbon::createFromFormat('Y-d-m H-i', $object->ordered_at)->format('m-d') }}
```

Good:

```php
// Model
protected $casts = [
    'ordered_at' => 'datetime',
];
public function getSomeDateAttribute($date)
{
    return $date->format('m-d');
}
// View
{{ $object->ordered_at->toDateString() }}
{{ $object->ordered_at->some_date }}
```

### **その他 グッドプラクティス**

ルートファイルにはロジックを入れないでください。
Blade テンプレートの中で Vanilla PHP(標準の PHP コードを記述すること)の使用は最小限にします。
