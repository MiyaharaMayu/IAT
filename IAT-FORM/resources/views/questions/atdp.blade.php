<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "UFT-8">
    <title>フォームからデータを受け取る</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
<form action="atdp.php" method="post">
<div class ="page-wrap">
<div class ="page">
    <p>次の項目についてあなたがどの程度同意するか、お答えください。</p>
<div>
  <p>1.　聴覚障害のある子どもの親は、健聴の子どもの親よりも寛容であるべきだ</p>
  <input id="radio-1" type="radio" name="ATDP-q1" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q1" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q1" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q1" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q1" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q1" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>2．聴覚障害者は障害のない人とおなじくらい優秀だ</p>
  <input id="radio-1" type="radio" name="ATDP-q2" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q2" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q2" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q2" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q2" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q2" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>3．ほとんどの聴覚障害者は、聴者に比べて、人とうまくやっている</p>
  <input id="radio-1" type="radio" name="ATDP-q3" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q3" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q3" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q3" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q3" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q3" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>4．ほとんどの聴覚障害者は自分自身をかわいそうに思っている</p>
  <input id="radio-1" type="radio" name="ATDP-q4" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q4" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q4" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q4" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q4" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q4" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>5．聴覚障害者は他の人と同じだ</p>
  <input id="radio-1" type="radio" name="ATDP-q5" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q5" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q5" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q5" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q5" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q5" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>6．耳に障害のある子どものための特別な学校・学級・コースを設置すべきである</p>
  <input id="radio-1" type="radio" name="ATDP-q6" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q6" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q6" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q6" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q6" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q6" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>7．聴覚障害のある人にとって、特別なコミュニティーで暮らし働くことが最善だろう。</p>
  <input id="radio-1" type="radio" name="ATDP-q7" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q7" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q7" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q7" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q7" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q7" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>8．障害者を支援するのは政府の責任である</p>
  <input id="radio-1" type="radio" name="ATDP-q8" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q8" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q8" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q8" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q8" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q8" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>9．ほとんどの障害者はとても悩んでいるというわけではない</p>
  <input id="radio-1" type="radio" name="ATDP-q9" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q9" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q9" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q9" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q9" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q9" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>10．障害者は健常者と同じ基準を求めるられるべきではない</p>
  <input id="radio-1" type="radio" name="ATDP-q10" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q10" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q10" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q10" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q10" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q10" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>11．聴覚障害者は聴者と同じくらい幸せだ</p>
  <input id="radio-1" type="radio" name="ATDP-q11" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q11" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q11" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q11" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q11" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q11" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>12．重度の障害のある人は、軽度の障害のあるひとよりも、人とうまくやっていくことが難しいわけではない</p>
  <input id="radio-1" type="radio" name="ATDP-q12" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q12" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q12" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q12" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q12" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q12" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>13．障害のある人にとって、普通の生活をするのは困難だ</p>
  <input id="radio-1" type="radio" name="ATDP-q13" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q13" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q13" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q13" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q13" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q13" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>14．障害者には多くを望むべきではない</p>
  <input id="radio-1" type="radio" name="ATDP-q14" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q14" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q14" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q14" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q14" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q14" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>15．聴覚障害者は一人で過ごす時間が長くなりがちだ</p>
  <input id="radio-1" type="radio" name="ATDP-q15" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q15" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q15" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q15" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q15" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q15" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>16．聴覚障害のある人は聴者よりも動揺しやすい</p>
  <input id="radio-1" type="radio" name="ATDP-q16" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q16" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q16" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q16" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q16" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q16" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>17．聴覚障害者は普通の社会生活をおくることができる</p>
  <input id="radio-1" type="radio" name="ATDP-q17" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q17" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q17" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q17" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q17" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q17" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>18．ほとんどの聴覚障害者は、自分達が他の人より劣っていると思っている</p>
  <input id="radio-1" type="radio" name="ATDP-q18" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q18" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q18" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q18" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q18" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q18" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>19．聴者は、聴覚障害者と一緒にいるときには、その気持ちを傷つけないようにしてほしい</p>
  <input id="radio-1" type="radio" name="ATDP-q19" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q19" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q19" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q19" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q19" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q19" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<div>
  <p>20．聴覚障害者は不平ばかり言う</p>
  <input id="radio-1" type="radio" name="ATDP-q20" value="1" required><label for="radio-1">まったくそう思う</label><br>
  <input id="radio-2" type="radio" name="ATDP-q20" value="2" required><label for="radio-2">かなりそう思う</label><br>
  <input id="radio-3" type="radio" name="ATDP-q20" value="3" required><label for="radio-3">少しそう思う</label><br>
  <input id="radio-4" type="radio" name="ATDP-q20" value="4" required><label for="radio-4">少しそう思わない</label><br>
  <input id="radio-5" type="radio" name="ATDP-q20" value="5" required><label for="radio-5">あまりそう思わない</label><br>
  <input id="radio-6" type="radio" name="ATDP-q20" value="6" required><label for="radio-6">まったくそう思わない</label><br>
</div>
<input type="submit" value="次へ">
</form>
</div>
</div>
</body>
</html>
