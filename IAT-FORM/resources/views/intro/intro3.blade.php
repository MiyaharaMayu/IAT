
<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>フォームからデータを受け取る</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<div class ="top">
    <div class ="base">
        <div class ="">
            <div class ="page-wrap  col-12">
                <div class ="page intro f-16 f-md-20">
                <h1>単語の分類(約5分)
                </h1>
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

                        </div>
                    <div class="description f-16 f-md-20">
                        <p>これから画面中央に単語がでてきます。</p>
                        <p>EキーとIキーを用いて、あるいは左右のボタンをタップして左右のどちらかに分類してください。</p>
                        <p>左右どちらに分類するべきかは、画面のうえのほうにあるグループ名にしたがってください。<br>
                        （例えば左に「良い」、右に「悪い」というカテゴリ名が書かれている場合、「うれしい」は左（E）に分類するということです。）</p>
                        <p>まちがってしまった場合は、×が表示されるので、もう一度分類をやりなおしてください。</p>
                        <p>できるだけはやく、かつ、できるだけ間違いが少なくなるようにこころがけてください。</p>
                    </div>
                
                    
                    <p class ="appeal f-16 f-md-20">注意事項</p>
                    <ul class="note f-16 f-md-20">
                        
                        <li>
                            速く反応ができるようにするために、パソコンで実施する場合、「E」と「I」のキーの上にあらかじめ人差し指を置いて下さい。
                        </li>
                        <li>
                            画面上部に示されている2つのラベルは、それぞれのキーがどちらの単語あるいは画像に対応しているのかを表しています。
                        </li>
                        <li>
                            見えやすいようにモニターでの明るさ設定を最大にして下さい。
                        </li>
                    </ul>

                    <p class ="f-16 f-md-20">１つの練習ブロックと、4つの本番ブロックにわかれています。</p>
                    <p class ="f-16 f-md-20">次のページへすすんで、練習ブロックにうつってください。</p>
                        <form action="{{ url('tests/create') }}" method="get">
                            @csrf
                            @method('GET')
                            <input type="submit" value="次へ">
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
