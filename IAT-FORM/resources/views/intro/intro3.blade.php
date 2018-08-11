
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
            <h1>単語の分類</h1>
            <div class="description">
                <p>これから画面中央に単語がでてきます。</p>
                <p>矢印キー（←と→）を用いて、あるいは左右のボタンをタップして左右のどちらかに分類してください。</p>
                <p>左右どちらに分類するべきかは、画面のうえのほうにあるグループ名にしたがってください。<br>
                （例えば左に「良い」、右に「悪い」というカテゴリ名が書かれている場合、「うれしい」は左に分類するということです。）</p>
                <p>まちがってしまった場合は、×が表示されるので、もう一度分類をやりなおしてください。</p>
                <p>できるだけはやく、かつ、できるだけ間違いが少なくなるようにこころがけてください。</p>

            </div>
            
            <form action="{{ url('tests/create') }}" method="get">
                @csrf
                @method('GET')
                <input type="submit" value="次へ">
            </form>

        </div>
    </div>

</body>
</html>
