
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
    <div class ="base">
        <div class ="">
            <div class ="page-wrap  col-12">
                <div class ="page intro">
                         <ul class ="intro f-16 f-md-20">
                                <li>このテストは全体で10～15分かかります。</li>
                            <li class ="appeal">・静かな部屋にひとりで座り、テストに集中してください。</li>
                            <li class ="appeal">・バックグラウンドで作動している他のプログラムを終了して下さい。</li>
                            <li>
                                見えやすいようにモニターでの明るさ設定を最大にして下さい。</li>
                        </ul>

                        <h3 class ="program f-16 f-md-20">これから２つの課題にとりくんでいただきます。</h3>
                        <ul class ="intro f-16 f-md-20 lh-m">
                            <li>①単語をできるだけ速く2つのグループのいずれかに分類する課題(5分)</li>
                            <li>②簡単な質問ページへの回答(10分)</li>
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
