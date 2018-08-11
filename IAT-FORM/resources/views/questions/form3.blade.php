<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>フォームからデータを受け取る</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class = "comtainer">
  <div class ="page-wrap row">
    <div class ="page col-11">
      <p>次の質問についてこの前期中のあなたがどれほど当てはまるか、あるいはどの程度そう思うかお答えください。</p>
      <form action="{{ url('questions') }}" method="post">
        @csrf
        @method('POST')
        <input type="hidden" name="block_id" value="{{$block_id}}">
        
        <div>
          <p>1. 私は簡単に諦めてしまう傾向がある</p>
          <input id="radio-1" type="radio" name="q[0]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
          <input id="radio-2" type="radio" name="q[0]" value="2" required><label for="radio-2">あてはまる</label><br>
          <input id="radio-3" type="radio" name="q[0]" value="3" required><label for="radio-3">わからない</label><br>
          <input id="radio-4" type="radio" name="q[0]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
          <input id="radio-5" type="radio" name="q[0]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>

        <div>
        <p>２. 私は何か新しいことを学ぼうとするとき、最初のうまくいかないとすぐにやめてしまう
        </p>
          <input id="radio-1" type="radio" name="q[1]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
          <input id="radio-2" type="radio" name="q[1]" value="2" required><label for="radio-2">あてはまる</label><br>
          <input id="radio-3" type="radio" name="q[1]" value="3" required><label for="radio-3">わからない</label><br>
          <input id="radio-4" type="radio" name="q[1]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
          <input id="radio-5" type="radio" name="q[1]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>

        <div>
        <p>３. 新しいことが自分には難しすぎるように思えるとき、学ぼうとするのを避けてしまう</p>
          <input id="radio-1" type="radio" name="q[2]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
          <input id="radio-2" type="radio" name="q[2]" value="2" required><label for="radio-2">あてはまる</label><br>
          <input id="radio-3" type="radio" name="q[2]" value="3" required><label for="radio-3">わからない</label><br>
          <input id="radio-4" type="radio" name="q[2]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
          <input id="radio-5" type="radio" name="q[2]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>

        <div>
        <p>４. あなたは最近、常にいらいらしたり高ぶったりしていますか</p>
        <input id="radio-1" type="radio" name="q[3]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
        <input id="radio-2" type="radio" name="q[3]" value="2" required><label for="radio-2">あてはまる</label><br>
        <input id="radio-3" type="radio" name="q[3]" value="3" required><label for="radio-3">わからない</label><br>
        <input id="radio-4" type="radio" name="q[3]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
        <input id="radio-5" type="radio" name="q[3]" value="5" required><label for="radio-5">あてはまらない</label><br>
        </div>

        <div>
        <p>５. 私はもっと自分のことを尊重できたらと思う</p>
          <input id="radio-1" type="radio" name="q[4]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
          <input id="radio-2" type="radio" name="q[4]" value="2" required><label for="radio-2">あてはまる</label><br>
          <input id="radio-3" type="radio" name="q[4]" value="3" required><label for="radio-3">わからない</label><br>
          <input id="radio-4" type="radio" name="q[4]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
          <input id="radio-5" type="radio" name="q[4]" value="5" required><label for="radio-5">あてはまらない</label><br>
        </div>

        <div>
        <p>６.私は時おり、役に立たない人間であると感じる</p>
          <input id="radio-1" type="radio" name="q[5]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
          <input id="radio-2" type="radio" name="q[5]" value="2" required><label for="radio-2">あてはまる</label><br>
          <input id="radio-3" type="radio" name="q[5]" value="3" required><label for="radio-3">わからない</label><br>
          <input id="radio-4" type="radio" name="q[5]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
          <input id="radio-5" type="radio" name="q[5]" value="5" required><label for="radio-5">あてはまらない</label><br>
        </div>

        <div>
        <p>７.あなたは最近、全てのことから逃れ死んでしまいたいと思ったことはありますか。</p>
        <input id="radio-1" type="radio" name="q[6]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
        <input id="radio-2" type="radio" name="q[6]" value="2" required><label for="radio-2">あてはまる</label><br>
        <input id="radio-3" type="radio" name="q[6]" value="3" required><label for="radio-3">わからない</label><br>
        <input id="radio-4" type="radio" name="q[6]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
        <input id="radio-5" type="radio" name="q[6]" value="5" required><label for="radio-5">あてはまらない</label><br>
        </div>

        <div>
        <p>８.私は時々誇るべきところがほとんどないと感じる
        </p>
          <input id="radio-1" type="radio" name="q[7]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
          <input id="radio-2" type="radio" name="q[7]" value="2" required><label for="radio-2">あてはまる</label><br>
          <input id="radio-3" type="radio" name="q[7]" value="3" required><label for="radio-3">わからない</label><br>
          <input id="radio-4" type="radio" name="q[7]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
          <input id="radio-5" type="radio" name="q[7]" value="5" required><label for="radio-5">あてはまらない</label><br>
        </div>

        <div>
        <p>9.私は時おり自分は全くダメだと思う

        </p>
          <input id="radio-1" type="radio" name="q[8]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
          <input id="radio-2" type="radio" name="q[8]" value="2" required><label for="radio-2">あてはまる</label><br>
          <input id="radio-3" type="radio" name="q[8]" value="3" required><label for="radio-3">わからない</label><br>
          <input id="radio-4" type="radio" name="q[8]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
          <input id="radio-5" type="radio" name="q[8]" value="5" required><label for="radio-5">あてはまらない</label><br>
        </div
        >

        <div>
        <p>10.あなたは最近元気がなく落ち込んでいると感じていますか</p>
        <input id="radio-1" type="radio" name="q[9]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
        <input id="radio-2" type="radio" name="q[9]" value="2" required><label for="radio-2">あてはまる</label><br>
        <input id="radio-3" type="radio" name="q[9]" value="3" required><label for="radio-3">わからない</label><br>
        <input id="radio-4" type="radio" name="q[9]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
        <input id="radio-5" type="radio" name="q[9]" value="5" required><label for="radio-5">あてはまらない</label><br>
        </div>

        <div>
        <p>11.あなたは最近すべてのことが自分にのしかかっていると感じていますか</p>
        <input id="radio-1" type="radio" name="q[10]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
        <input id="radio-2" type="radio" name="q[10]" value="2" required><label for="radio-2">あてはまる</label><br>
        <input id="radio-3" type="radio" name="q[10]" value="3" required><label for="radio-3">わからない</label><br>
        <input id="radio-4" type="radio" name="q[10]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
        <input id="radio-5" type="radio" name="q[10]" value="5" required><label for="radio-5">あてはまらない</label><br>
        </div>

        <div>
          <p>12. 聴覚障害のことでいやな思いをすることはほとんどない</p>
          <input id="radio-1" type="radio" name="q[11]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
          <input id="radio-2" type="radio" name="q[11]" value="2" required><label for="radio-2">あてはまる</label><br>
          <input id="radio-3" type="radio" name="q[11]" value="3" required><label for="radio-3">わからない</label><br>
          <input id="radio-4" type="radio" name="q[11]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
          <input id="radio-5" type="radio" name="q[11]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>
        <div>
          <p>13. 聴者にできて私にできないことがあっても別に気にしない</p>
          <input id="radio-1" type="radio" name="q[12]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
          <input id="radio-2" type="radio" name="q[12]" value="2" required><label for="radio-2">あてはまる</label><br>
          <input id="radio-3" type="radio" name="q[12]" value="3" required><label for="radio-3">わからない</label><br>
          <input id="radio-4" type="radio" name="q[12]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
          <input id="radio-5" type="radio" name="q[12]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>

        <div>
          <p>14. 私は自分の能力に満足しており、耳のことでさほど悩むことはない
        </p>
          <input id="radio-1" type="radio" name="q[13]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
          <input id="radio-2" type="radio" name="q[13]" value="2" required><label for="radio-2">あてはまる</label><br>
          <input id="radio-3" type="radio" name="q[13]" value="3" required><label for="radio-3">わからない</label><br>
          <input id="radio-4" type="radio" name="q[13]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
          <input id="radio-5" type="radio" name="q[13]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>
        <div>
          <p>15. 聴覚障害であってもしたいことはできるし、なりたい人間になることもできる</p>
          <input id="radio-1" type="radio" name="q[14]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
          <input id="radio-2" type="radio" name="q[14]" value="2" required><label for="radio-2">あてはまる</label><br>
          <input id="radio-3" type="radio" name="q[14]" value="3" required><label for="radio-3">わからない</label><br>
          <input id="radio-4" type="radio" name="q[14]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
          <input id="radio-5" type="radio" name="q[14]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>
        <div>
          <p>16. 聴覚障害のことばかり考えてひどく落ち込むことは,ほとんどない</p>
          <input id="radio-1" type="radio" name="q[15]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
          <input id="radio-2" type="radio" name="q[15]" value="2" required><label for="radio-2">あてはまる</label><br>
          <input id="radio-3" type="radio" name="q[15]" value="3" required><label for="radio-3">わからない</label><br>
          <input id="radio-4" type="radio" name="q[15]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
          <input id="radio-5" type="radio" name="q[15]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>
        <div>
          <p>17. 聴覚障害であっても私はいろんなことを楽しんでいる</p>
          <input id="radio-1" type="radio" name="q[16]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
          <input id="radio-2" type="radio" name="q[16]" value="2" required><label for="radio-2">あてはまる</label><br>
          <input id="radio-3" type="radio" name="q[16]" value="3" required><label for="radio-3">わからない</label><br>
          <input id="radio-4" type="radio" name="q[16]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
          <input id="radio-5" type="radio" name="q[16]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>

        <div>
        <p>18. あなたは最近、いつも緊張していると感じていますか</p>
        <input id="radio-1" type="radio" name="q[17]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
        <input id="radio-2" type="radio" name="q[17]" value="2" required><label for="radio-2">あてはまる</label><br>
        <input id="radio-3" type="radio" name="q[17]" value="3" required><label for="radio-3">わからない</label><br>
        <input id="radio-4" type="radio" name="q[17]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
        <input id="radio-5" type="radio" name="q[17]" value="5" required><label for="radio-5">あてはまらない</label><br>
        </div>
        <div>
          <p>19. 聴覚障害者は一般的に自分に満足していない人が多い</p>
          <input id="radio-1" type="radio" name="q[18]" value="1" required><label for="radio-1">とてもそう思う</label><br>
          <input id="radio-2" type="radio" name="q[18]" value="2" required><label for="radio-2">そう思う</label><br>
          <input id="radio-3" type="radio" name="q[18]" value="3" required><label for="radio-3">わからない</label><br>
          <input id="radio-4" type="radio" name="q[18]" value="4" required><label for="radio-4">あまりそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[18]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>

        <div>
          <p>20. 聴覚障害者は一般的に聴覚を失うことは最悪の出来事だと思っている人が多い</p>
          <input id="radio-1" type="radio" name="q[19]" value="1" required><label for="radio-1">とてもそう思う</label><br>
          <input id="radio-2" type="radio" name="q[19]" value="2" required><label for="radio-2">そう思う</label><br>
          <input id="radio-3" type="radio" name="q[19]" value="3" required><label for="radio-3">わからない</label><br>
          <input id="radio-4" type="radio" name="q[19]" value="4" required><label for="radio-4">あまりそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[19]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>

        <div>
          <p>21. 聴覚障害者は聴者よりも落ち込みやすい</p>
          <input id="radio-1" type="radio" name="q[20]" value="1" required><label for="radio-1">とてもそう思う</label><br>
          <input id="radio-2" type="radio" name="q[20]" value="2" required><label for="radio-2">そう思う</label><br>
          <input id="radio-3" type="radio" name="q[20]" value="3" required><label for="radio-3">わからない</label><br>
          <input id="radio-4" type="radio" name="q[20]" value="4" required><label for="radio-4">あまりそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[20]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>

        <div>
          <p>22.ほとんどの聴覚障害者は多くの事柄を自分の胸にしまい込んでいる</p>
          <input id="radio-1" type="radio" name="q[21]" value="1" required><label for="radio-1">とてもそう思う</label><br>
          <input id="radio-2" type="radio" name="q[21]" value="2" required><label for="radio-2">そう思う</label><br>
          <input id="radio-3" type="radio" name="q[21]" value="3" required><label for="radio-3">わからない</label><br>
          <input id="radio-4" type="radio" name="q[21]" value="4" required><label for="radio-4">あまりそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[21]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>

        <div>
        <p>23. あなたは最近、まったく気力がなくて何もできないと感じたことがありますか</p>
        <input id="radio-1" type="radio" name="q[22]" value="1" required><label for="radio-1">とてもあてはまる</label><br>
        <input id="radio-2" type="radio" name="q[22]" value="2" required><label for="radio-2">あてはまる</label><br>
        <input id="radio-3" type="radio" name="q[22]" value="3" required><label for="radio-3">わからない</label><br>
        <input id="radio-4" type="radio" name="q[22]" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
        <input id="radio-5" type="radio" name="q[22]" value="5" required><label for="radio-5">あてはまらない</label><br>
        </div>

        <div>
          <p>24. これまでの成功はたまたま状況がうまく整っていたのである</p>
          <input id="radio-1" type="radio" name="q[23]" value="1" required><label for="radio-1">いつも思う</label><br>
          <input id="radio-2" type="radio" name="q[23]" value="2" required><label for="radio-2">しばしば思う</label><br>
          <input id="radio-3" type="radio" name="q[23]" value="3" required><label for="radio-3">時々思う</label><br>
          <input id="radio-4" type="radio" name="q[23]" value="4" required><label for="radio-4">ほとんど思わない</label><br>
          <input id="radio-5" type="radio" name="q[23]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>
        <div>
          <p>25. これまでの成功は幸運によるものである</p>
          <input id="radio-1" type="radio" name="q[24]" value="1" required><label for="radio-1">いつも思う</label><br>
          <input id="radio-2" type="radio" name="q[24]" value="2" required><label for="radio-2">しばしば思う</label><br>
          <input id="radio-3" type="radio" name="q[24]" value="3" required><label for="radio-3">時々思う</label><br>
          <input id="radio-4" type="radio" name="q[24]" value="4" required><label for="radio-4">ほとんど思わない</label><br>
          <input id="radio-5" type="radio" name="q[24]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>
        <div>
          <p>26. 物事がうまくいくのは単に幸運だからである
        </p>
          <input id="radio-1" type="radio" name="q[25]" value="1" required><label for="radio-1">いつも思う</label><br>
          <input id="radio-2" type="radio" name="q[25]" value="2" required><label for="radio-2">しばしば思う</label><br>
          <input id="radio-3" type="radio" name="q[25]" value="3" required><label for="radio-3">時々思う</label><br>
          <input id="radio-4" type="radio" name="q[25]" value="4" required><label for="radio-4">ほとんど思わない</label><br>
          <input id="radio-5" type="radio" name="q[25]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>
        <div>
          <p>27.これまでの成功は外からの影響によるものである
        </p>
          <input id="radio-1" type="radio" name="q[26]" value="1" required><label for="radio-1">いつも思う</label><br>
          <input id="radio-2" type="radio" name="q[26]" value="2" required><label for="radio-2">しばしば思う</label><br>
          <input id="radio-3" type="radio" name="q[26]" value="3" required><label for="radio-3">時々思う</label><br>
          <input id="radio-4" type="radio" name="q[26]" value="4" required><label for="radio-4">ほとんど思わない</label><br>
          <input id="radio-5" type="radio" name="q[26]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>

        <div>
          <p>28. ものごとがうまくいくのは世の中が私を助けてくれるからである</p>
          <input id="radio-1" type="radio" name="q[27]" value="1" required><label for="radio-1">いつも思う</label><br>
          <input id="radio-2" type="radio" name="q[27]" value="2" required><label for="radio-2">しばしば思う</label><br>
          <input id="radio-3" type="radio" name="q[27]" value="3" required><label for="radio-3">時々思う</label><br>
          <input id="radio-4" type="radio" name="q[27]" value="4" required><label for="radio-4">ほとんど思わない</label><br>
          <input id="radio-5" type="radio" name="q[27]" value="5" required><label for="radio-5">まったくそう思わない</label><br>
        </div>

        <input type="submit" value="次へ">
      </form>
    </div>
  </div>
</body>
</html>
