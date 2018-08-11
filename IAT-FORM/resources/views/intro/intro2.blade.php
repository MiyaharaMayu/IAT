
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
        <div class ="page col-11 intro">
            <h1>単語の分類</h1>
            <h3 class ="sub-info">約5分</h3>
            <div class="description">
                <p>これからする課題では、単語が呈示されますので、グループに分けてください。</p>
                <p class ="appeal">できるだけミスしないように、できるだけ速く呈示された項目を分類してください。</p>
                <br>
                <p>以下に示してあるのは、グループラベルと、それらのグループに属する項目のリストです。</p>

                <table border="1">
                    <tr>
                        <th>グループ</th>
                        <th>単語</th>
                    </tr>
                    <tr>
                        <td class ="categori">良い</td>
                        <td>うれしさ、愛情、平和、すばらしい、楽しみ</td>
                    </tr>
                    <tr>
                        <td class ="categori">悪い</td>
                        <td>苦悩、ひどい、恐ろしい、失敗、戦争</td>
                    </tr>
                    <tr>
                        <td class ="categori">聴覚障害者</td>
                        <td>補聴器、手話、筆談、聴覚障害、聞こえない</td>
                    </tr>
                </table>

                <h3>注意事項</h3>
                <ul class="note">
                    <li>
                        速く反応ができるようにするために、パソコンで実施する場合、「←」と「→」のキーの上に予め人差し指を置いて下さい。
                    </li>
                    <li>
                        画面上部に示されている2つのラベルは、それぞれのキーがどちらの単語あるいは画像に対応しているのかを表しています。
                    </li>
                    <li>
                        見えやすいようにモニターでの明るさ設定を最大にして下さい。
                    </li>
                </ul>
            </div>
            
            <form action="{{ url('intro') }}" method="get">
                @csrf
                @method('GET')
                <input type="hidden" name="next" value="3">
                <input type="submit" value="次へ">
            </form>
        </div>
    </div>
</body>
</html>
