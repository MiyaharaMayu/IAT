<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "UFT-8">
    <title>フォームからデータを受け取る</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
<form action="tipi.php" method="post">
<div class ="page-wrap">
<div class ="page">
    <p>1から10までのことばがあなた自身にどのくらい当てはまるかについて，下の枠内の1（全く違うと思う）から7（強くそう思う）までの数字のうちもっとも適切なものを括弧内にチェック入れてください。文全体を総合的に見て，自分にどれだけ当てはまるかを評価してください。
</p>
<div>
  <p>1. 活発で外向的だと思う</p>
  <input id="radio-1" type="radio" name="TIPI-q1" value="1"　required><label for="radio-1">全く違うと思う</label><br>
  <input id="radio-2" type="radio" name="TIPI-q1" value="2" required><label for="radio-2">おおよそ違うと思う</label><br>
  <input id="radio-3" type="radio" name="TIPI-q1" value="3" required><label for="radio-3">少し違うと思う</label><br>
  <input id="radio-4" type="radio" name="TIPI-q1" value="4" required><label for="radio-4">どちらでもない</label><br>
  <input id="radio-5" type="radio" name="TIPI-q1" value="5" required><label for="radio-5">少しそう思う</label><br>
  <input id="radio-6" type="radio" name="TIPI-q1" value="6" required><label for="radio-6">まあまあそう思う</label><br>
  <input id="radio-7" type="radio" name="TIPI-q1" value="7" required><label for="radio-7">強くそう思う</label><br>
</div>

<div>
  <p>2. 他人に不満をもち，もめごとを起こしやすいと思う</p>
  <input id="radio-1" type="radio" name="TIPI-q2" value="1" required><label for="radio-1">全く違うと思う</label><br>
  <input id="radio-2" type="radio" name="TIPI-q2" value="2" required><label for="radio-2">おおよそ違うと思う</label><br>
  <input id="radio-3" type="radio" name="TIPI-q2" value="3" required><label for="radio-3">少し違うと思う</label><br>
  <input id="radio-4" type="radio" name="TIPI-q2" value="4" required><label for="radio-4">どちらでもない</label><br>
  <input id="radio-5" type="radio" name="TIPI-q2" value="5" required><label for="radio-5">少しそう思う</label><br>
  <input id="radio-6" type="radio" name="TIPI-q2" value="6" required><label for="radio-6">まあまあそう思う</label><br>
  <input id="radio-7" type="radio" name="TIPI-q2" value="7" required><label for="radio-7">強くそう思う</label><br>
</div>
<div>
  <p>3. しっかりしていて，自分に厳しいと思う</p>
  <input id="radio-1" type="radio" name="TIPI-q3" value="1" required><label for="radio-1">全く違うと思う</label><br>
  <input id="radio-2" type="radio" name="TIPI-q3" value="2" required><label for="radio-2">おおよそ違うと思う</label><br>
  <input id="radio-3" type="radio" name="TIPI-q3" value="3" required><label for="radio-3">少し違うと思う</label><br>
  <input id="radio-4" type="radio" name="TIPI-q3" value="4" required><label for="radio-4">どちらでもない</label><br>
  <input id="radio-5" type="radio" name="TIPI-q3" value="5" required><label for="radio-5">少しそう思う</label><br>
  <input id="radio-6" type="radio" name="TIPI-q3" value="6" required><label for="radio-6">まあまあそう思う</label><br>
  <input id="radio-7" type="radio" name="TIPI-q3" value="7" required><label for="radio-7">強くそう思う</label><br>
</div>
<div>
  <p>4．心配性で，うろたえやすいと思う</p>
  <input id="radio-1" type="radio" name="TIPI-q4" value="1" required><label for="radio-1">全く違うと思う</label><br>
  <input id="radio-2" type="radio" name="TIPI-q4" value="2" required><label for="radio-2">おおよそ違うと思う</label><br>
  <input id="radio-3" type="radio" name="TIPI-q4" value="3" required><label for="radio-3">少し違うと思う</label><br>
  <input id="radio-4" type="radio" name="TIPI-q4" value="4" required><label for="radio-4">どちらでもない</label><br>
  <input id="radio-5" type="radio" name="TIPI-q4" value="5" required><label for="radio-5">少しそう思う</label><br>
  <input id="radio-6" type="radio" name="TIPI-q4" value="6" required><label for="radio-6">まあまあそう思う</label><br>
  <input id="radio-7" type="radio" name="TIPI-q4" value="7" required><label for="radio-7">強くそう思う</label><br>
</div>
<div>
  <p>5．新しいことが好きで，変わった考えをもつと思う</p>
  <input id="radio-1" type="radio" name="TIPI-q5" value="1" required><label for="radio-1">全く違うと思う</label><br>
  <input id="radio-2" type="radio" name="TIPI-q5" value="2" required><label for="radio-2">おおよそ違うと思う</label><br>
  <input id="radio-3" type="radio" name="TIPI-q5" value="3" required><label for="radio-3">少し違うと思う</label><br>
  <input id="radio-4" type="radio" name="TIPI-q5" value="4" required><label for="radio-4">どちらでもない</label><br>
  <input id="radio-5" type="radio" name="TIPI-q5" value="5" required><label for="radio-5">少しそう思う</label><br>
  <input id="radio-6" type="radio" name="TIPI-q5" value="6" required><label for="radio-6">まあまあそう思う</label><br>
  <input id="radio-7" type="radio" name="TIPI-q5" value="7" required><label for="radio-7">強くそう思う</label><br>
</div>
<div>
  <p>6．ひかえめで，おとなしいと思う</p>
  <input id="radio-1" type="radio" name="TIPI-q6" value="1" required><label for="radio-1">全く違うと思う</label><br>
  <input id="radio-2" type="radio" name="TIPI-q6" value="2" required><label for="radio-2">おおよそ違うと思う</label><br>
  <input id="radio-3" type="radio" name="TIPI-q6" value="3" required><label for="radio-3">少し違うと思う</label><br>
  <input id="radio-4" type="radio" name="TIPI-q6" value="4" required><label for="radio-4">どちらでもない</label><br>
  <input id="radio-5" type="radio" name="TIPI-q6" value="5" required><label for="radio-5">少しそう思う</label><br>
  <input id="radio-6" type="radio" name="TIPI-q6" value="6" required><label for="radio-6">まあまあそう思う</label><br>
  <input id="radio-7" type="radio" name="TIPI-q6" value="7" required><label for="radio-7">強くそう思う</label><br>
</div>
<div>
  <p>7．人に気をつかう，やさしい人間だと思う</p>
  <input id="radio-1" type="radio" name="TIPI-q7" value="1" required><label for="radio-1">全く違うと思う</label><br>
  <input id="radio-2" type="radio" name="TIPI-q7" value="2" required><label for="radio-2">おおよそ違うと思う</label><br>
  <input id="radio-3" type="radio" name="TIPI-q7" value="3" required><label for="radio-3">少し違うと思う</label><br>
  <input id="radio-4" type="radio" name="TIPI-q7" value="4" required><label for="radio-4">どちらでもない</label><br>
  <input id="radio-5" type="radio" name="TIPI-q7" value="5" required><label for="radio-5">少しそう思う</label><br>
  <input id="radio-6" type="radio" name="TIPI-q7" value="6" required><label for="radio-6">まあまあそう思う</label><br>
  <input id="radio-7" type="radio" name="TIPI-q7" value="7" required><label for="radio-7">強くそう思う</label><br>
</div>
<div>
  <p>8．だらしなく，うっかりしていると思う</p>
  <input id="radio-1" type="radio" name="TIPI-q8" value="1" required><label for="radio-1">全く違うと思う</label><br>
  <input id="radio-2" type="radio" name="TIPI-q8" value="2" required><label for="radio-2">おおよそ違うと思う</label><br>
  <input id="radio-3" type="radio" name="TIPI-q8" value="3" required><label for="radio-3">少し違うと思う</label><br>
  <input id="radio-4" type="radio" name="TIPI-q8" value="4" required><label for="radio-4">どちらでもない</label><br>
  <input id="radio-5" type="radio" name="TIPI-q8" value="5" required><label for="radio-5">少しそう思う</label><br>
  <input id="radio-6" type="radio" name="TIPI-q8" value="6" required><label for="radio-6">まあまあそう思う</label><br>
  <input id="radio-7" type="radio" name="TIPI-q8" value="7" required><label for="radio-7">強くそう思う</label><br>
</div>
<div>
<p>9．冷静で，気分が安定していると思う</p>
  <input id="radio-1" type="radio" name="TIPI-q9" value="1" required><label for="radio-1">全く違うと思う</label><br>
  <input id="radio-2" type="radio" name="TIPI-q9" value="2" required><label for="radio-2">おおよそ違うと思う</label><br>
  <input id="radio-3" type="radio" name="TIPI-q9" value="3" required><label for="radio-3">少し違うと思う</label><br>
  <input id="radio-4" type="radio" name="TIPI-q9" value="4" required><label for="radio-4">どちらでもない</label><br>
  <input id="radio-5" type="radio" name="TIPI-q9" value="5" required><label for="radio-5">少しそう思う</label><br>
  <input id="radio-6" type="radio" name="TIPI-q9" value="6" required><label for="radio-6">まあまあそう思う</label><br>
  <input id="radio-7" type="radio" name="TIPI-q9" value="7" required><label for="radio-7">強くそう思う</label><br>
</div>
<div>
<p>10．発想力に欠けた，平凡な人間だと思う</p>
  <input id="radio-1" type="radio" name="TIPI-q10" value="1" required><label for="radio-1">全く違うと思う</label><br>
  <input id="radio-2" type="radio" name="TIPI-q10" value="2" required><label for="radio-2">おおよそ違うと思う</label><br>
  <input id="radio-3" type="radio" name="TIPI-q10" value="3" required><label for="radio-3">少し違うと思う</label><br>
  <input id="radio-4" type="radio" name="TIPI-q10" value="4" required><label for="radio-4">どちらでもない</label><br>
  <input id="radio-5" type="radio" name="TIPI-q10" value="5" required><label for="radio-5">少しそう思う</label><br>
  <input id="radio-6" type="radio" name="TIPI-q10" value="6" required><label for="radio-6">まあまあそう思う</label><br>
  <input id="radio-7" type="radio" name="TIPI-q10" value="7" required><label for="radio-7">強くそう思う</label><br>
</div>


<input type="submit" value="次へ">
</form>
</div>
</div>
</body>
</html>
