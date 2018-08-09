<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "UFT-8">
    <title>フォームからデータを受け取る</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
<form action="nas-j.php" method="post">
<div class ="page-wrap">
<div class ="page">
    <p>次の質問についてこの前期中のあなたがどれほど当てはまるか、あるいはどの程度そう思うかお答えください。</p>
<div>
  <p>1. 私は簡単に諦めてしまう傾向がある</p>
  <input id="radio-1" type="radio" name="NAS-J-q1" value="1" required><label for="radio-1">とてもあてはまる</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q1" value="2" required><label for="radio-2">あてはまる</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q1" value="3" required><label for="radio-3">わからない</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q1" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q1" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>

<div>
<p>２. 私は何か新しいことを学ぼうとするとき、最初のうまくいかないとすぐにやめてしまう
</p>
  <input id="radio-1" type="radio" name="NAS-J-q2" value="1" required><label for="radio-1">とてもあてはまる</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q2" value="2" required><label for="radio-2">あてはまる</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q2" value="3" required><label for="radio-3">わからない</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q2" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q2" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>

<div>
<p>３. 新しいことが自分には難しすぎるように思えるとき、学ぼうとするのを避けてしまう</p>
  <input id="radio-1" type="radio" name="NAS-J-q3" value="1" required><label for="radio-1">とてもあてはまる</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q3" value="2" required><label for="radio-2">あてはまる</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q3" value="3" required><label for="radio-3">わからない</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q3" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q3" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>

<div>
<p>４. あなたは最近、常にいらいらしたり高ぶったりしていますか</p>
  <input id="radio-1" type="radio" name="NAS-J-q4" value="1" required><label for="radio-1">まったくそうでない</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q4" value="2" required><label for="radio-2">少しそうである</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q4" value="3" required><label for="radio-3">だいぶそうである</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q4" value="4" required><label for="radio-4">とてもそうである</label><br>
</div>

<div>
<p>５. 私はもっと自分のことを尊重できたらと思う</p>
  <input id="radio-1" type="radio" name="NAS-J-q5" value="1" required><label for="radio-1">とてもあてはまる</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q5" value="2" required><label for="radio-2">あてはまる</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q5" value="3" required><label for="radio-3">わからない</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q5" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q5" value="5" required><label for="radio-5">あてはまらない</label><br>
</div>

<div>
<p>６.私は時おり、役に立たない人間であると感じる</p>
  <input id="radio-1" type="radio" name="NAS-J-q6" value="1" required><label for="radio-1">とてもあてはまる</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q6" value="2" required><label for="radio-2">あてはまる</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q6" value="3" required><label for="radio-3">わからない</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q6" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q6" value="5" required><label for="radio-5">あてはまらない</label><br>
</div>

<div>
<p>７.あなたは最近、全てのことから逃れ死んでしまいたいと思ったことはありますか。</p>
  <input id="radio-1" type="radio" name="NAS-J-q7" value="1" required><label for="radio-1">まったくそうでない</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q7" value="2" required><label for="radio-2">少しそうである</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q7" value="3" required><label for="radio-3">だいぶそうである</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q7" value="4" required><label for="radio-4">とてもそうである</label><br>
</div>

<div>
<p>８.私は時々誇るべきところがほとんどないと感じる
</p>
  <input id="radio-1" type="radio" name="NAS-J-q8" value="1" required><label for="radio-1">とてもあてはまる</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q8" value="2" required><label for="radio-2">あてはまる</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q8" value="3" required><label for="radio-3">わからない</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q8" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q8" value="5" required><label for="radio-5">あてはまらない</label><br>
</div>

<div>
<p>9.私は時おり自分は全くダメだと思う

</p>
  <input id="radio-1" type="radio" name="NAS-J-q9" value="1" required><label for="radio-1">とてもあてはまる</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q9" value="2" required><label for="radio-2">あてはまる</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q9" value="3" required><label for="radio-3">わからない</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q9" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q9" value="5" required><label for="radio-5">あてはまらない</label><br>
</div
>

<div>
<p>10.あなたは最近元気がなく落ち込んでいると感じていますか</p>
  <input id="radio-1" type="radio" name="NAS-J-q10" value="1" required><label for="radio-1">まったくそうでない</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q10" value="2" required><label for="radio-2">少しそうである</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q10" value="3" required><label for="radio-3">だいぶそうである</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q10" value="4" required><label for="radio-4">とてもそうである</label><br>
</div>

<div>
  <p>11. これまでの成功はたまたま状況がうまく整っていたのである</p>
  <input id="radio-1" type="radio" name="NAS-J-q11" value="1" required><label for="radio-1">いつも思う</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q11" value="2" required><label for="radio-2">しばしば思う</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q11" value="3" required><label for="radio-3">時々思う</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q11" value="4" required><label for="radio-4">ほとんど思わない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q11" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>
<div>
  <p>1２. これまでの成功は幸運によるものである</p>
  <input id="radio-1" type="radio" name="NAS-J-q12" value="1" required><label for="radio-1">いつも思う</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q12" value="2" required><label for="radio-2">しばしば思う</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q12" value="3" required><label for="radio-3">時々思う</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q12" value="4" required><label for="radio-4">ほとんど思わない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q12" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>
<div>
  <p>13. 物事がうまくいくのは単に幸運だからである
</p>
  <input id="radio-1" type="radio" name="NAS-J-q13" value="1" required><label for="radio-1">いつも思う</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q13" value="2" required><label for="radio-2">しばしば思う</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q13" value="3" required><label for="radio-3">時々思う</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q13" value="4" required><label for="radio-4">ほとんど思わない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q13" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>
<div>
  <p>14.これまでの成功は外からの影響によるものである
</p>
  <input id="radio-1" type="radio" name="NAS-J-q14" value="1" required><label for="radio-1">いつも思う</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q14" value="2" required><label for="radio-2">しばしば思う</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q14" value="3" required><label for="radio-3">時々思う</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q14" value="4" required><label for="radio-4">ほとんど思わない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q14" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>

<div>
  <p>15. ものごとがうまくいくのは世の中が私を助けてくれるからである</p>
  <input id="radio-1" type="radio" name="NAS-J-q15" value="1" required><label for="radio-1">いつも思う</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q15" value="2" required><label for="radio-2">しばしば思う</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q15" value="3" required><label for="radio-3">時々思う</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q15" value="4" required><label for="radio-4">ほとんど思わない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q15" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>

<div>
<p>16.あなたは最近すべてのことが自分にのしかかっていると感じていますか</p>
  <input id="radio-1" type="radio" name="NAS-J-q16" value="1" required><label for="radio-1">まったくそうでない</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q16" value="2" required><label for="radio-2">少しそうである</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q16" value="3" required><label for="radio-3">だいぶそうである</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q16" value="4" required><label for="radio-4">とてもそうである</label><br>
</div>

<div>
  <p>17. 聴覚障害のことでいやな思いをすることはほとんどない</p>
  <input id="radio-1" type="radio" name="NAS-J-q17" value="1" required><label for="radio-1">とてもあてはまる</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q17" value="2" required><label for="radio-2">あてはまる</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q17" value="3" required><label for="radio-3">わからない</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q17" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q17" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>
<div>
  <p>18. 聴者にできて私にできないことがあっても別に気にしない</p>
  <input id="radio-1" type="radio" name="NAS-J-q18" value="1" required><label for="radio-1">とてもあてはまる</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q18" value="2" required><label for="radio-2">あてはまる</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q18" value="3" required><label for="radio-3">わからない</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q18" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q18" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>

<div>
  <p>19. 私は自分の能力に満足しており、耳のことでさほど悩むことはない
</p>
  <input id="radio-1" type="radio" name="NAS-J-q19" value="1" required><label for="radio-1">とてもあてはまる</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q19" value="2" required><label for="radio-2">あてはまる</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q19" value="3" required><label for="radio-3">わからない</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q19" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q19" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>
<div>
  <p>20. 聴覚障害であってもしたいことはできるし、なりたい人間になることもできる</p>
  <input id="radio-1" type="radio" name="NAS-J-q20" value="1" required><label for="radio-1">とてもあてはまる</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q20" value="2" required><label for="radio-2">あてはまる</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q20" value="3" required><label for="radio-3">わからない</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q20" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q20" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>
<div>
  <p>21. 聴覚障害のことばかり考えてひどく落ち込むことはほとんどない</p>
  <input id="radio-1" type="radio" name="NAS-J-q21" value="1" required><label for="radio-1">とてもあてはまる</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q21" value="2" required><label for="radio-2">あてはまる</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q21" value="3" required><label for="radio-3">わからない</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q21" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q21" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>
<div>
  <p>22. 聴覚障害であっても私はいろんなことを楽しんでいる</p>
  <input id="radio-1" type="radio" name="NAS-J-q22" value="1" required><label for="radio-1">とてもあてはまる</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q22" value="2" required><label for="radio-2">あてはまる</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q22" value="3" required><label for="radio-3">わからない</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q22" value="4" required><label for="radio-4">あまりあてはまらない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q22" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>

<div>
<p>23. あなたは最近、いつも緊張していると感じていますか</p>
  <input id="radio-1" type="radio" name="NAS-J-q23" value="1" required><label for="radio-1">まったくそうでない</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q23" value="2" required><label for="radio-2">少しそうである</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q23" value="3" required><label for="radio-3">だいぶそうである</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q23" value="4" required><label for="radio-4">とてもそうである</label><br>
</div>
<div>
  <p>24. 聴覚障害者は一般的に自分に満足していない人が多い</p>
  <input id="radio-1" type="radio" name="NAS-J-q24" value="1" required><label for="radio-1">とてもそう思う</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q24" value="2" required><label for="radio-2">そう思う</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q24" value="3" required><label for="radio-3">わからない</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q24" value="4" required><label for="radio-4">あまりそう思わない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q24" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>

<div>
  <p>25. 聴覚障害者は一般的に聴覚を失うことは最悪の出来事だと思っている人が多い</p>
  <input id="radio-1" type="radio" name="NAS-J-q25" value="1" required><label for="radio-1">とてもそう思う</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q25" value="2" required><label for="radio-2">そう思う</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q25" value="3" required><label for="radio-3">わからない</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q25" value="4" required><label for="radio-4">あまりそう思わない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q25" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>

<div>
  <p>26. 聴覚障害者は聴者よりも落ち込みやすい</p>
  <input id="radio-1" type="radio" name="NAS-J-q26" value="1" required><label for="radio-1">とてもそう思う</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q26" value="2" required><label for="radio-2">そう思う</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q26" value="3" required><label for="radio-3">わからない</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q26" value="4" required><label for="radio-4">あまりそう思わない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q26" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>

<div>
  <p>27.ほとんどの聴覚障害者は多くの事柄を自分の胸にしまい込んでいる</p>
  <input id="radio-1" type="radio" name="NAS-J-q27" value="1" required><label for="radio-1">とてもそう思う</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q27" value="2" required><label for="radio-2">そう思う</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q27" value="3" required><label for="radio-3">わからない</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q27" value="4" required><label for="radio-4">あまりそう思わない</label><br>
  <input id="radio-5" type="radio" name="NAS-J-q27" value="5" required><label for="radio-5">まったくそう思わない</label><br>
</div>

<div>
<p>28. あなたは最近、まったく気力がなくて何もできないと感じたことがありますか</p>
  <input id="radio-1" type="radio" name="NAS-J-q23" value="1" required><label for="radio-1">まったくそうでない</label><br>
  <input id="radio-2" type="radio" name="NAS-J-q23" value="2" required><label for="radio-2">少しそうである</label><br>
  <input id="radio-3" type="radio" name="NAS-J-q23" value="3" required><label for="radio-3">だいぶそうである</label><br>
  <input id="radio-4" type="radio" name="NAS-J-q23" value="4" required><label for="radio-4">とてもそうである</label><br>
</div>

<input type="submit" value="次へ">
</form>
</div>
</div>
</body>
</html>
