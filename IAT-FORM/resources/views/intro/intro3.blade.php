
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
                            <p>これからする課題では、単語が呈示されますので、以下の表にしたがってグループに分けてください。</p>
                            <p>自分の意見とは関係なく、以下の表のとおりのグループに分類していただきます。</p>
                            <br>
                            <div class ="text-center">
                                <img class="img-sp" src="{{ Storage::url('public/intro1.png') }}">
                                <img class="img-md" src="{{ Storage::url('public/intro1.png') }}">
                                </div>
                            <!--<table border="1">
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
                        -->
                        </div>
                    <div class="description f-16 f-md-20">
                        <p>PCの場合はキーボードのEキーとIキーを用いて、分類してください。（スマートフォンの場合は左右の四角いボタンをタップして左右のどちらかに分類してください。）</p>
                        <p>どちらのキー（ボタン）でに分類するべきかは、四角いボタンに書かれているグループ名にしたがってください。<br>
                        <p class ="appeal">まちがってしまった場合は、×が表示されます。もう一度分類をやりなおしてください。</p>
                        <p>できるだけはやく、かつ、できるだけ間違いが少なくなるようにこころがけてください。</p>
                    </div>
                    <div class ="text-center">
                    <img class="img-sp" src="{{ Storage::url('public/intro.png') }}">
                    <img class="img-md" src="{{ Storage::url('public/intro.png') }}">
                    </div>
                    <p class ="appeal f-16 f-md-20">注意事項</p>
                    <ul class="note f-16 f-md-20">
                        
                        <li>
                            速く反応ができるようにするために、パソコンで実施する場合、「E」と「I」のキーの上にあらかじめ人差し指を置いて下さい。
                        </li>
                        <li>
                            画面上部とボタンに描いてある「良い」「悪い」「障害者」は、それぞれのキーがどちらの単語に対応しているのかを表しています。
                        </li>
                        <li>
                         どのキーで分類するのが正解かは、ブロックごとに変わるので、四角いボタンに書いてある「良い」「悪い」「障害者」のグループ名をよく見て、したがってください。
                        </li>
                        
                       <li>できるだけミスしないように、できるだけ速く呈示された単語を分類してください。</li>
                       
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
