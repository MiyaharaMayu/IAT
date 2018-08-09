<?php
// データベースに接続
$db = new PDO('mysql:host=mysql708.db.sakura.ne.jp;dbname=iat2018_iat;charset=utf8','iat2018','mayu0822');

// TODO 自動的にidを付与する方法を考える

// block_idが7まで取れてる人のidを取得
$sub = $db-> prepare("SELECT max(subject_id) AS max_id FROM iattest WHERE block_id = ?");
$sub->bindValue(1, 5);
$sub->execute();
$result = $sub->fetch();
//var_dump($result);


// 被検者のidとブロックのidをここに挿入
$subject_id = $result['max_id'] + 1;
$block_id = 1;
$times = 20;

// フォームからポストされたら
if(isset($_POST['subject_id'])){
    $subject_id = $_POST['subject_id'];
    $block_id = $_POST['block_id'];
    if($block_id == 3 || $block_id == 5) {
        $times = 40;
    }
        
    //カンマ区切りの文字列で来るので、配列に直す
    $trials = explode(',', $_POST['trial']);
    $words = explode(',', $_POST['word']);
    $error_nums = explode(',', $_POST['error_num']);
    $reaction_times = explode(',', $_POST['reaction_time']);

    // データをインサート
    for($i = 0; $i < $times; $i++) {
        $stmt = $db -> prepare("INSERT INTO iattest (subject_id, block_id, trial, word, error_num, reaction_time) VALUES (:subject_id, :block_id, :trial, :word, :error_num, :reaction_time)");
        $stmt->bindValue(':subject_id', $subject_id, PDO::PARAM_INT);
        $stmt->bindValue(':block_id', $block_id, PDO::PARAM_INT);
        $stmt->bindValue(':trial', $trials[$i], PDO::PARAM_INT);
        $stmt->bindValue(':word', $words[$i], PDO::PARAM_STR);
        $stmt->bindValue(':error_num', $error_nums[$i], PDO::PARAM_INT);
        $stmt->bindValue(':reaction_time', $reaction_times[$i], PDO::PARAM_INT);
        $stmt->execute();
    }
    if($block_id == 5){
        header( "Location: http://iat2018.sakura.ne.jp/IAT/form.php" ) ;
        exit;
    }
    // ブロック数を更新
    $block_id = $block_id + 1;
}


?>


<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "UFT-8">
    <title>フォームからデータを受け取る</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body class="test">
    <div class="description">
    </div>
    
    <ul class="left-right">
        <li class = "left"></li>
        <li class = "right"></li>
    </ul>
    <div class ="next"></div>
    <div class ="words"></div>
    <form name="myForm" action = "test2.php" method = "post">

    <input class="" type="hidden" name="subject_id" value="<?php echo $subject_id; ?>"/>
    <input class="" type="hidden" name="block_id" value="<?php echo $block_id; ?>"/>
    <input class="" type="hidden" name="trial" value=""/>
    <input class="" type="hidden" name="word" value=""/>
    <input class="" type="hidden" name="error_num" value=""/>
    <input class="" type="hidden" name="reaction_time" value=""/>
    <input class="btn" type = "submit" value ="送信">
    </form>

    <ul class="ul-btn">
        <li>
        <div class = "li-btn left li-btn-left"></div>
        </li>
        <li>
            <div class = "li-btn right li-btn-right"></div>
        </li>
    </ul>
    <div class="li-btn space-btn">
        <p>START</p>
    </div>
    

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
    <script type="text/javascript" src="display.js"></script>
</body>
</html>
