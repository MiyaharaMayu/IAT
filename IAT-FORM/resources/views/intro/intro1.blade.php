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
            <div class ="page-wrap">
                <div class ="page intro">
                    <h1></h1>
                    <div class="description">
                        <h3 class ="f-32 f-md-40">このたびは調査にご協力くださりありがとうございます。</h3>
                        <ul class ="intro f-16 f-md-20">
                            <li>
                                <p class ="appeal">＜注意＞</p>
                                <p>なお、この研究への協力を断っても，途中で止めてもなんら不利益を受けることはございません。</p>
                                <p>インターネット調査を用いているので，もし途中でやめたくなった場合にはいつでもやめることができます。</p>
                            </li>

                            <li>
                                <p class ="appeal">＜個人情報について＞</p>
                                <p>1.データは，参加者を特定できないように，匿名化して保管されます。</p>
                                <p>2.データは，研究代表者のみがアクセスできるように，鍵のかかる書庫もしくはセキュリティソフトの入ったコンピュータに保管し，厳格に保護します。</p>
                                <p>3.データは当該論文等での研究成果公表後，研究者代表者が責任を持って最低10年間は保存，その後は廃棄する。データを破棄する時，情報漏洩が起こらないように，コンピュータのハードディスクの物理的破壊，質問紙の焼却等の適切な処置を取ります。</p>
                                <p>4.研究代表者が卒業等で研究室を離れる場合でも，保存期間内は研究代表者が責任をもってデータを管理し，他者に管理の権利の譲渡は行いません。</p>
                            </li>

                            <li><p class ="appeal">以上のことに同意して調査にご協力くださる場合は、次のページに進んでください。</p></li>

                        </ul>
                    
                    </div>
                    
                    <form action="{{ url('intro') }}" method="get">
                        @csrf
                        @method('GET')
                        <input type="hidden" name="next" value="2">
                        <input type="submit" value="同意して次へすすむ">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
