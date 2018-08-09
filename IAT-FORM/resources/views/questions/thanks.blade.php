<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "UFT-8">
    <title>フォームからデータを受け取る</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
<form action="form.php" method="post">
<div class ="page-wrap">
<div class = "page">
<h1>質問は以上です。<br>
ご回答くださりありがとうございました。</h1>

<div>
  <label><p>感想などがある場合は以下に入力して送信してください</p></label>
  <textarea name="free" placeholder="感想を入力"></textarea>
</div>

<p>もしこの実験によって気分が悪くなった場合は以下のメールアドレスまでご連絡ください。</p>


<div>

  <input type="submit" value="送信する">
</div>
</form>
</div>

</body>
</html>
