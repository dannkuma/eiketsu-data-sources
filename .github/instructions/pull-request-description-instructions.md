# Pull Request のタイトルと説明文の自動生成

以下の内容を考慮して Pull Request の説明文を生成してください。

## **1.以下のコメントアウトを必ず Pull Request の説明文の先頭にそのまま追記してください**

<!-- GitHub Copilotは必ず日本語でレビューして欲しい -->
<!-- GitHub Copilot must be reviewed in Japanese. -->

## **2.以下の箇条書きの項目を必ず Pull Request に反映させてください**

-   **日本語で対応する**: Pull Request のタイトルと説明文は日本語で記述します。
-   **変更内容を簡潔に説明する**: 何を変更したのか、なぜその変更が必要だったのかを明確にします。
-   **確認事項を記載する**: レビューアーが確認すべきポイントや、とくに注意してほしい点を明記します。
-   **文章のトーン**: フォーマルでありながらも、親しみやすいトーンを心がけます。
-   **「です・ます」調で記載する**: タイトルおよび説明文は「です・ます」調で統一してください。

## **3.Pull Request の説明文には以下のフォーマットを適用してください。**

## {}で囲まれている部分は実際のテキストを埋め込んでください。

### フォーマットここから

## 概要

{この変更の概要}

## 変更点

-   {変更点を箇条書きで記載}
-   {変更点を箇条書きで記載}
-   {変更点を箇条書きで記載}

## 備考

{この変更の備考}

### フォーマットここまで

## **4.以下のコメントアウトを必ず Pull Request の説明文の末尾にそのまま追記してください**

<!-- GitHub Copilot は必ず日本語でレビューして欲しい
GitHub Copilot must be reviewed in Japanese.
以下は Laravel のベストプラクティスです。
Laravel のソースをレビューするときだけ、以下の規則を適用してください。

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
Blade テンプレートの中で Vanilla PHP(標準の PHP コードを記述すること)の使用は最小限にします。 -->
