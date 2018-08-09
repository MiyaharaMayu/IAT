<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>フォームからデータを受け取る</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="top">
    <div class ="page-wrap">
        <div class ="page">
            <h1>IAT</h1>
            <div class="description">
                <h3>テストに参加してくださってありがとうございます。</h3>
                <p>このテストは全体で10～15分かかります。</p>
            
                <ul class ="intro">
            <li class ="appeal">静かな部屋にひとりで座り、気が散らないようにしてください。</li>
            <li class ="appeal">バックグラウンドで作動している他のプログラムを終了して下さい。</li>
            </ul>
            <p>このページで終了処理をしないで下さい。このページの終了処理をすると、自動的にテストを終了してしまいます。</p>

            <h3 class ="program">あなたはこれから以下の２つの課題を行なうことになります。</h3>
            <ul class ="intro">
            <li>単語や写真などをできるだけ速く2つのカテゴリーのいずれかに分類するIAT課題(5分)</li>
            <li>簡単な質問ページへの回答(10分)</li>
            </ul>
            </div>
            
            <form action="{{ url('intro') }}" method="get">
                @csrf
                @method('GET')
                <input type="hidden" name="next" value="2">
                <input type="submit" value="次へ">
            </form>
        </div>
    </div>
</body>
</html>
