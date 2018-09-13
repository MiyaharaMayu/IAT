
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
    <div class ="container">
        <div class ="row">
            <div class ="page-wrap  col-12">
                <div class ="page intro">
                         <ul class ="intro">
                                <li>このテストは全体で10～15分かかります。</li>
                            <li class ="appeal">静かな部屋にひとりで座り、テストに集中してください。</li>
                            <li class ="appeal">バックグラウンドで作動している他のプログラムを終了して下さい。</li>
                        </ul>

                        <h3 class ="program">これから２つの課題にとりくんでいただきます。</h3>
                        <ul class ="intro">
                            <li>単語をできるだけ速く2つのグループのいずれかに分類する課題(5分)</li>
                            <li>簡単な質問ページへの回答(10分)</li>
                        </ul>
                    
                
                    <form action="{{ url('intro') }}" method="get">
                        @csrf
                        @method('GET')
                        <input type="hidden" name="next" value="3">
                        <input type="submit" value="次へ">
                    </form>
                </div>
            </div>  
        </div>
    </div>
</body>
</html>
