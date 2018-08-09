<?php
// データベースに接続
$db = new PDO('mysql:host=mysql708.db.sakura.ne.jp;dbname=iat2018_iat;charset=utf8','iat2018','mayu0822');

// TODO 自動的にidを付与する方法を考える

// block_idが7まで取れてる人のidを取得
$sub = $db-> prepare("SELECT max(subject_id) AS max_id FROM iattest WHERE block_id = ?");
$sub->bindValue(1, 7);
$sub->execute();
$result = $sub->fetch();
//var_dump($result);


// 被検者のidとブロックのidをここに挿入
$subject_id = $result['max_id'] + 1;
$block_id = 7;

// フォームからポストされたら
if(isset($_POST['subject_id'])){
    $subject_id = $_POST['subject_id'];
    $block_id = $_POST['block_id'];

    if($block_id == 4 || $block_id == 7){
    
    //カンマ区切りの文字列で来るので、配列に直す
    $trials = explode(',', $_POST['trial']);
    $words = explode(',', $_POST['word']);
    $error_nums = explode(',', $_POST['error_num']);
    $reaction_times = explode(',', $_POST['reaction_time']);

    // データをインサート
    for($i = 0; $i < 40; $i++) {
        $stmt = $db -> prepare("INSERT INTO iattest (subject_id, block_id, trial, word, error_num, reaction_time) VALUES (:subject_id, :block_id, :trial, :word, :error_num, :reaction_time)");
        $stmt->bindValue(':subject_id', $subject_id, PDO::PARAM_INT);
        $stmt->bindValue(':block_id', $block_id, PDO::PARAM_INT);
        $stmt->bindValue(':trial', $trials[$i], PDO::PARAM_INT);
        $stmt->bindValue(':word', $words[$i], PDO::PARAM_STR);
        $stmt->bindValue(':error_num', $error_nums[$i], PDO::PARAM_INT);
        $stmt->bindValue(':reaction_time', $reaction_times[$i], PDO::PARAM_INT);
        $stmt->execute();
    }

}
if($block_id == 7){
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
</head>
<body class="top">
    <h1>IAT</h1>
    <div class="description">
        <p>ここに</p>
        <p>説明文</p>
    </div>
    
    <ul>
        <li class = "left"></li>
        <li class = "right"></li>
    </ul>
    <div class ="next"></div>
    <div class ="words"></div>
    <form name="myForm" action = "test.php" method = "post">

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
        <div class = "li-btn left"></div>
        </li>
        <li>
            <div class = "li-btn right"></div>
        </li>
    </ul>
    <div class="li-btn space-btn">
        START
    </div>
    
    <style>
        .next {
            height: 50px;
        }
        .btn {
            display: none;
        }
        .top {
            text-align: center;
        }
        ul {
            text-align: center;
            list-style: none;
            padding-bottom: 50px;
        }
        ul li {
            width: 50%;
            float: left;
        }
        .ul-btn {
            margin-top: 100px;
        }
        .li-btn {
            margin: 0 auto;
            width: 100px;
            height: 100px;
            cursor: pointer;
            border: 1px solid black;
        }
    </style>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
    <script type="text/javascript">
    $(function(){
        // 被検者とブロックのidは受け取る
        var subject_id = $('input:hidden[name="subject_id"]').val();
        var block_id = $('input:hidden[name="block_id"]').val();
        var trial = new Array();
        var word = new Array();
        var error_num = new Array();
        var reaction_time = new Array();
        
        // カテゴリ群と単語群と解答群を用意
        var categories = [
            ['良い', '悪い'],
            ['健常者', '障害者'],
            ['良い　健常者', '悪い　障害者'],
            ['良い　健常者', '悪い　障害者'],
            ['障害者', '健常者'],
            ['良い　障害者', '悪い　健常者'],
            ['良い　障害者', '悪い　健常者']
        ];
        var words = [
            ['嬉しさ','愛情','苦悩' , 'ひどい'],
            ['健聴','聞こえる','聴覚障害','ろう'],
            ['嬉しさ','愛情','苦悩' , 'ひどい' ,'健聴','聞こえる','聴覚障害','ろう'],
            ['嬉しさ','愛情','苦悩' , 'ひどい' ,'健聴','聞こえる','聴覚障害','ろう'],
            ['聴覚障害','ろう','健聴','聞こえる'],
            ['嬉しさ','愛情','苦悩' , 'ひどい' ,'聴覚障害','ろう','健聴','聞こえる'],
            ['嬉しさ','愛情','苦悩' , 'ひどい' ,'聴覚障害','ろう','健聴','聞こえる']
        ];
        var ans = [
            [37, 37, 39, 39],
            [37, 37, 39, 39],
            [37, 37, 39, 39, 37, 37, 39, 39],
            [37, 37, 39, 39, 37, 37, 39, 39],
            [37, 37, 39, 39],
            [37, 37, 39, 39, 37, 37, 39, 39],
            [37, 37, 39, 39, 37, 37, 39, 39]
        ];

        // 今表示してあるのが何番目の要素かを保存
        var num = 0;
        $(".words").text("スペースキーを押してください");
        $(".next").text("");

        //時間計測
        var start_time;
        var end_time;
        var elapsed_time;
        var space_flag = true;

        var record_flag;
        if(block_id == 4 || block_id == 7){
            record_flag = true;
        }else{
            record_flag = false;
        }

        //回数
        var count = 0;
        var count_error = 0;
        $(".left").text(categories[block_id-1][0]);
        $(".right").text(categories[block_id-1][1]);

        // ボタンが押されたかどうかで判定
        $(".li-btn").click(function() {
            //何番目のボタンが押されたか 0 or 1
            var index = $('.li-btn').index(this);
            var pushed_num;
            if(index == 0) {
                pushed_num = 37;
            }else if(index == 1) {
                pushed_num = 39;
            }else {
                pushed_num = 32;
            }

            if((pushed_num == ans[block_id-1][num] && !(space_flag)) || (pushed_num == 32 && space_flag)) {
                switch(pushed_num){
                case 32: // スペースキー
                start_time = new Date().getTime();
                space_flag = false;
                $(".space-btn").hide();
                break;
                case 39: // Key[→]
                case 37: // Key[←]
                
                // 時間計測
                if(record_flag){
                    end_time = new Date().getTime();
                    elapsed_time = end_time - start_time;
                    $(".times").text(elapsed_time);
                //各回のデータを保存
                    trial.push(count+1);
                    word.push(words[block_id-1][num]);
                    error_num.push(count_error);
                    reaction_time.push(elapsed_time);
                // 始まりの時間を現在の時間に更新
                    start_time = end_time;
                }
                // カウント数を挙げる
                count++;
                // エラーの数を0に初期化
                count_error = 0;
                break;

                case 38: // Key[↑]
                case 40: // Key[↓]
                break;
                }
                
                $(".next").text("");
                num = Math.floor( Math.random() * words[block_id-1].length );
                $(".words").css({opacity:'0'});
                $(".words").text(words[block_id-1][num]);
                $(".words").stop().animate({opacity:'1'},200);

                // 規定回数終わったら、これをフォームで送信
                if(count == 20 && !(record_flag)){
                    var $form = jQuery('form[name="myForm"]');
                    $form.submit();
                }
                else if(count == 40 && record_flag) {
                    $('input:hidden[name="subject_id"]').val(subject_id);
                    $('input:hidden[name="block_id"]').val(block_id);
                    $('input:hidden[name="trial"]').val(trial);
                    $('input:hidden[name="word"]').val(word);
                    $('input:hidden[name="error_num"]').val(error_num);
                    $('input:hidden[name="reaction_time"]').val(reaction_time);
                    var $form = jQuery('form[name="myForm"]');
                    $form.submit();
                }
            // 間違えていたら、エラーカウントを増やす
            } else if ((pushed_num == 37 || pushed_num == 39) && !space_flag) {
                $(".next").text("×");
                count_error++;
            }
        });



        /***************** PC版 ******************/

        //topっていうクラスの中で、キーが押されたら
        $(".top").keyup(function(e){
            //配列にキーボードのどのキーを押したか
            //push・・・追加
            var pushed_num = e.which;
            // 解答が合っている時 or スペースキーを押したとき
            if((pushed_num == ans[block_id-1][num] && !(space_flag)) || (pushed_num == 32 && space_flag)) {
                switch(pushed_num){
                case 32: // スペースキー
                start_time = new Date().getTime();
                space_flag = false;
                break;
                case 39: // Key[→]
                case 37: // Key[←]
                
                // 時間計測
                if(record_flag){
                    end_time = new Date().getTime();
                    elapsed_time = end_time - start_time;
                    $(".times").text(elapsed_time);
                //各回のデータを保存
                    trial.push(count+1);
                    word.push(words[block_id-1][num]);
                    error_num.push(count_error);
                    reaction_time.push(elapsed_time);
                // 始まりの時間を現在の時間に更新
                    start_time = end_time;
                }
                // カウント数を挙げる
                count++;
                // エラーの数を0に初期化
                count_error = 0;
                break;

                case 38: // Key[↑]
                case 40: // Key[↓]
                break;
                }
                
                $(".next").text("");
                num = Math.floor( Math.random() * words[block_id-1].length );
                $(".words").css({opacity:'0'});
                $(".words").text(words[block_id-1][num]);
                $(".words").stop().animate({opacity:'1'},200);

                // 規定回数終わったら、これをフォームで送信
                if(count == 20 && !(record_flag)){
                    var $form = jQuery('form[name="myForm"]');
                    $form.submit();
                }
                else if(count == 40 && record_flag) {
                    $('input:hidden[name="subject_id"]').val(subject_id);
                    $('input:hidden[name="block_id"]').val(block_id);
                    $('input:hidden[name="trial"]').val(trial);
                    $('input:hidden[name="word"]').val(word);
                    $('input:hidden[name="error_num"]').val(error_num);
                    $('input:hidden[name="reaction_time"]').val(reaction_time);
                    var $form = jQuery('form[name="myForm"]');
                    $form.submit();
                }
            // 間違えていたら、エラーカウントを増やす
            } else if ((pushed_num == 37 || pushed_num == 39) && !space_flag) {
                $(".next").text("×");
                count_error++;
             
            }
            
        });
    });
    </script>
</body>
</html>
