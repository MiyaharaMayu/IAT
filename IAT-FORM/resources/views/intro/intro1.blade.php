<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>フォームからデータを受け取る</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="top container">
    <div class ="page-wrap row">
        <div class ="col-11 page intro">
            <h1></h1>
            <div class="description">
                <h3>このたびは調査にご協力くださりありがとうございます。</h3>
                <ul class ="intro">
                    <li>このテストは全体で10～15分かかります。</li>
                </ul>
            
                <ul class ="intro">
                    <li class ="appeal">静かな部屋にひとりで座り、テストに集中してください。</li>
                    <li class ="appeal">バックグラウンドで作動している他のプログラムを終了して下さい。</li>
                </ul>

                <h3 class ="program">これから２つの課題にとりくんでいただきます。</h3>
                <ul class ="intro">
                    <li>単語をできるだけ速く2つのグループのいずれかに分類する課題(5分)</li>
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
