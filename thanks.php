<?php

$subject_id = 1;
//r_dump($_POST);
if(isset($_POST['basic-q1'])){
    //$name = $_POST['name'];
    // データベースに接続
    $db = new PDO('mysql:host=localhost;dbname=iat2018_iat;charset=utf8','iat2018','mayu0822');

    // データをインサート
    foreach($_POST as $key => $value) {
        $stmt = $db -> prepare("INSERT INTO question (subject_id, question_id, answer) VALUES (:subject_id, :question_id, :answer)");
        $stmt->bindValue(':subject_id', $subject_id, PDO::PARAM_INT);
        $stmt->bindValue(':question_id', $key, PDO::PARAM_STR);
        $stmt->bindValue(':answer', $value, PDO::PARAM_STR);
        $stmt->execute();
    }
}
?>

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
