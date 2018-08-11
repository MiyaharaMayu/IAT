$(function () {
    // 被検者とブロックのidは受け取る
    var subject_id = $('input:hidden[name="subject_id"]').val();
    var block_id = $('input:hidden[name="block_id"]').val();
    console.log(block_id);
    var trial = new Array();
    var word = new Array();
    var error_num = new Array();
    var reaction_time = new Array();

    // カテゴリ群と単語群と解答群を用意
    var categories = [
        ['良い', '悪い'],
        ['良い', '悪い　障害者'],
        ['良い', '悪い　障害者'],
        ['良い　障害者', '悪い'],
        ['良い　障害者', '悪い']
    ];
    var words = [
        ['うれしさ', '愛情', '平和', 'すばらしい', '楽しみな', '苦悩', 'ひどい', '恐ろしい', '失敗', '戦争'],
        ['うれしさ', '愛情', '平和', 'すばらしい', '楽しみな', '苦悩', 'ひどい', '恐ろしい', '失敗', '戦争', '補聴器', '手話', '筆談', '聴覚障害', '聞こえない'],
        ['うれしさ', '愛情', '平和', 'すばらしい', '楽しみな', '苦悩', 'ひどい', '恐ろしい', '失敗', '戦争', '補聴器', '手話', '筆談', '聴覚障害', '聞こえない'],
        ['うれしさ', '愛情', '平和', 'すばらしい', '楽しみな', '補聴器', '手話', '筆談', '聴覚障害', '聞こえない', '苦悩', 'ひどい', '恐ろしい', '失敗', '戦争'],
        ['うれしさ', '愛情', '平和', 'すばらしい', '楽しみな', '補聴器', '手話', '筆談', '聴覚障害', '聞こえない', '苦悩', 'ひどい', '恐ろしい', '失敗', '戦争']
    ];
    var ans = [
        [37, 37, 37, 37, 37, 39, 39, 39, 39, 39],
        [37, 37, 37, 37, 37, 39, 39, 39, 39, 39, 39, 39, 39, 39, 39],
        [37, 37, 37, 37, 37, 39, 39, 39, 39, 39, 39, 39, 39, 39, 39],
        [37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 39, 39, 39, 39, 39],
        [37, 37, 37, 37, 37, 37, 37, 37, 37, 37, 39, 39, 39, 39, 39],
    ];

    // 今表示してあるのが何番目の要素かを保存
    var num = 0;
    $(".space-btn").show();
    $(".words").text("スペースキーを押してください(STARTを押してください)");
    $(".next").text("");

    //時間計測
    var start_time;
    var end_time;
    var elapsed_time;
    var space_flag = true;

    var record_flag;
    if (block_id == 1 || block_id == 2 || block_id == 4) {
        record_flag = false; // 20回
    } else {
        record_flag = true; // 40回
    }

    //回数
    var count = 0;
    var count_error = 0;
    $(".left").text(categories[block_id - 1][0]);
    $(".right").text(categories[block_id - 1][1]);

    // ボタンが押されたかどうかで判定
    $(".li-btn").click(function () {
        //何番目のボタンが押されたか 0 or 1
        var index = $('.li-btn').index(this);
        var pushed_num;
        if (index == 0) {
            pushed_num = 37;
        } else if (index == 1) {
            pushed_num = 39;
        } else {
            pushed_num = 32;
        }

        if ((pushed_num == ans[block_id - 1][num] && !(space_flag)) || (pushed_num == 32 && space_flag)) {
            switch (pushed_num) {
                case 32: // スペースキー
                    start_time = new Date().getTime();
                    space_flag = false;
                    $(".space-btn").hide();
                    break;
                case 39: // Key[→]
                case 37: // Key[←]

                    // 時間計測
                    end_time = new Date().getTime();
                    elapsed_time = end_time - start_time;
                    $(".times").text(elapsed_time);
                    //各回のデータを保存
                    trial.push(count + 1);
                    word.push(words[block_id - 1][num]);
                    error_num.push(count_error);
                    reaction_time.push(elapsed_time);
                    // 始まりの時間を現在の時間に更新
                    start_time = end_time;
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
            num = Math.floor(Math.random() * words[block_id - 1].length);
            $(".words").css({
                opacity: '0'
            });
            console.log(count);
            console.log(trial);
            console.log(word);
            console.log(error_num);
            console.log(reaction_time);
            // 規定回数終わったら、これをフォームで送信
            if (count == 20 && !(record_flag)) {
                $('input:hidden[name="count"]').val(count);
                $('input:hidden[name="subject_id"]').val(subject_id);
                $('input:hidden[name="block_id"]').val(block_id);
                $('input:hidden[name="trial[]"]').val(trial);
                $('input:hidden[name="word[]"]').val(word);
                $('input:hidden[name="error_num[]"]').val(error_num);
                $('input:hidden[name="reaction_time[]"]').val(reaction_time);
                var $form = jQuery('form[name="myForm"]');
                $form.submit();
            } else if (count == 40 && record_flag) {
                $('input:hidden[name="count"]').val(count);
                $('input:hidden[name="subject_id"]').val(subject_id);
                $('input:hidden[name="block_id"]').val(block_id);
                $('input:hidden[name="trial[]"]').val(trial);
                $('input:hidden[name="word[]"]').val(word);
                $('input:hidden[name="error_num[]"]').val(error_num);
                $('input:hidden[name="reaction_time[]"]').val(reaction_time);
                var $form = jQuery('form[name="myForm"]');
                $form.submit();
            }
            // 次の単語を表示する
            $(".words").text(words[block_id - 1][num]);
            $(".words").stop().animate({
                opacity: '1'
            }, 200);

            // 間違えていたら、エラーカウントを増やす
        } else if ((pushed_num == 37 || pushed_num == 39) && !space_flag) {
            $(".next").text("×");
            count_error++;
        }
    });



    /***************** PC版 ******************/

    //topっていうクラスの中で、キーが押されたら
    $(".top").keyup(function (e) {
        //配列にキーボードのどのキーを押したか
        //push・・・追加
        var pushed_num = e.which;
        // 解答が合っている時 or スペースキーを押したとき
        if ((pushed_num == ans[block_id - 1][num] && !(space_flag)) || (pushed_num == 32 && space_flag)) {
            switch (pushed_num) {
                case 32: // スペースキー
                    start_time = new Date().getTime();
                    space_flag = false;
                    $(".space-btn").hide();
                    break;
                case 39: // Key[→]
                case 37: // Key[←]

                    // 時間計測
                    end_time = new Date().getTime();
                    elapsed_time = end_time - start_time;
                    $(".times").text(elapsed_time);
                    //各回のデータを保存
                    trial.push(count + 1);
                    word.push(words[block_id - 1][num]);
                    error_num.push(count_error);
                    reaction_time.push(elapsed_time);
                    // 始まりの時間を現在の時間に更新
                    start_time = end_time;
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
            num = Math.floor(Math.random() * words[block_id - 1].length);
            $(".words").css({
                opacity: '0'
            });

            console.log(count);
            console.log(trial);
            console.log(word);
            console.log(error_num);

            // 規定回数終わったら、これをフォームで送信
            if (count == 20 && !(record_flag)) {
                $('input:hidden[name="count"]').val(count);
                $('input:hidden[name="subject_id"]').val(subject_id);
                $('input:hidden[name="block_id"]').val(block_id);
                $('input:hidden[name="trial[]"]').val(trial);
                $('input:hidden[name="word[]"]').val(word);
                $('input:hidden[name="error_num[]"]').val(error_num);
                $('input:hidden[name="reaction_time[]"]').val(reaction_time);
                var $form = jQuery('form[name="myForm"]');
                $form.submit();
            } else if (count == 40 && record_flag) {
                $('input:hidden[name="count"]').val(count);
                $('input:hidden[name="subject_id"]').val(subject_id);
                $('input:hidden[name="block_id"]').val(block_id);
                $('input:hidden[name="trial[]"]').val(trial);
                $('input:hidden[name="word[]"]').val(word);
                $('input:hidden[name="error_num[]"]').val(error_num);
                $('input:hidden[name="reaction_time[]"]').val(reaction_time);
                var $form = jQuery('form[name="myForm"]');
                $form.submit();
            }
            // それ以外は次の単語を表示
            $(".words").text(words[block_id - 1][num]);
            $(".words").stop().animate({
                opacity: '1'
            }, 200);

            // 間違えていたら、エラーカウントを増やす
        } else if ((pushed_num == 37 || pushed_num == 39) && !space_flag) {
            $(".next").text("×");
            count_error++;

        }

    });
});
