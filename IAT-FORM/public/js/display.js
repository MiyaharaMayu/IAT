$(function () {

    function swap(a, x, y) {
        a[x] = [a[y], a[y] = a[x]][0];
        return a;
    }

    // 被検者とブロックのidは受け取る
    var subject_id = $('input:hidden[name="subject_id"]').val();
    var block_id = $('input:hidden[name="block_id"]').val();
    var pattern = $('input:hidden[name="pattern"]').val();
    // console.log(block_id);
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
        ['愛情', '失敗', 'うれしさ', 'ひどい', '戦争', 'すばらしい', '平和', '苦悩', '戦争', '平和', '恐ろしい', '楽しみ', '苦悩', '愛情', '楽しみ', '恐ろしい', 'ひどい', '失敗', 'すばらしい', 'うれしさ'],
        ['補聴器', '恐ろしい', '楽しみ', '聞こえない', 'すばらしい', '戦争', '筆談', 'ひどい', '平和', '愛情', '苦悩', '聴覚障害', '筆談', 'うれしさ', '手話', 'すばらしい', '失敗', '苦悩', '平和', '聴覚障害'],
        ['すばらしい', '戦争', 'うれしさ', '聞こえない', '筆談', '平和', '恐ろしい', '手話', '聞こえない', '失敗', '手話', '補聴器', '戦争', '苦悩', '聴覚障害', 'ひどい', '愛情', '愛情', '楽しみ', '平和', '恐ろしい', '楽しみ', 'うれしさ', '苦悩', '失敗', '補聴器', '聴覚障害', '補聴器', 'すばらしい', '聴覚障害', '愛情', '苦悩　', 'ひどい', '筆談', '平和', '失敗', '手話', 'すばらしい', '筆談', '楽しみ'],
        ['愛情', '楽しみ', '苦悩', '筆談', 'すばらしい', '戦争', 'ひどい', '筆談', '恐ろしい', 'すばらしい', '失敗', '戦争', '補聴器', '手話', '手話', '聴覚障害', 'うれしさ', '聞こえない', 'ひどい', '平和'],
        ['苦悩', 'うれしさ', '手話', '失敗', '愛情', '苦悩', '恐ろしい', 'うれしさ', '戦争', '聴覚障害', 'すばらしい', '失敗', '聴覚障害', 'すばらしい', '戦争', '愛情', '補聴器', '筆談', 'ひどい', '補聴器', 'ひどい', '手話', '愛情', '筆談', '平和', 'すばらしい', '聞こえない', '楽しみ', '戦争', '苦悩', '恐ろしい', '筆談', '聴覚障害', 'ひどい', '補聴器', '平和', '恐ろしい', '手話', '聞こえない', '楽しみ']
    ];
    var ans = [
        [69, 73, 69, 73, 73, 69, 69, 73, 73, 69, 73, 69, 73, 69, 69, 73, 73, 73, 69, 69],
        [73, 73, 69, 73, 69, 73, 73, 73, 69, 69, 73, 73, 73, 69, 73, 69, 73, 73, 69, 73],
        [69, 73, 69, 73, 73, 69, 73, 73, 73, 73, 73, 73, 73, 73, 73, 73, 69, 69, 69, 69, 73, 69, 69, 73, 73, 73, 73, 73, 69, 73, 69, 73, 73, 73, 69, 73, 73, 69, 73, 69],
        [69, 69, 73, 69, 69, 73, 73, 69, 73, 69, 73, 73, 69, 69, 69, 69, 69, 69, 73, 69],
        [73, 69, 69, 73, 69, 73, 73, 69, 73, 69, 69, 73, 69, 69, 73, 69, 69, 69, 73, 69, 73, 69, 69, 69, 69, 69, 69, 69, 73, 73, 73, 69, 69, 73, 69, 69, 73, 69, 69, 69],
    ];
    // パターンを入れ替える
    // 0が上記 1:(23)(45)を入れ替えた 2: 左右入れ替え 3: 1+2のやつ
    if (pattern == 1) {
        // console.log("gfga");
        categories = swap(categories, 1, 3);
        categories = swap(categories, 2, 4);
        words = swap(words, 1, 3);
        words = swap(words, 2, 4);
        ans = swap(ans, 1, 3);
        ans = swap(ans, 2, 4);
    } else if (pattern > 1) {
        // カテゴリと答えを逆にする
        categories = categories.map(function (category) {
            return swap(category, 0, 1);
        });
        ans = ans.map(function (block_ans) {
            block_ans = block_ans.map(function (answer) {
                return answer == 69 ? 73 : 69;
            });
            return block_ans;
        });
        if (pattern == 3) {
            categories = swap(categories, 1, 3);
            categories = swap(categories, 2, 4);
            words = swap(words, 1, 3);
            words = swap(words, 2, 4);
            ans = swap(ans, 1, 3);
            ans = swap(ans, 2, 4);
        }
    }


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
            pushed_num = 69;
        } else if (index == 1) {
            pushed_num = 73;
        } else {
            pushed_num = 32;
        }

        if ((pushed_num == ans[block_id - 1][count] && !(space_flag)) || (pushed_num == 32 && space_flag)) {
            switch (pushed_num) {
                case 32: // スペースキー
                    start_time = new Date().getTime();
                    space_flag = false;
                    $(".space-btn").hide();
                    break;
                case 73: // Key[→]
                case 69: // Key[←]

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
            /*console.log(count);
            console.log(trial);
            console.log(word);
            console.log(error_num);
            console.log(reaction_time);
            */
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
            } else {
                // 次の単語を表示する
                $(".words").text(words[block_id - 1][count]);
                $(".words").stop().animate({
                    opacity: '1'
                }, 200);
            }

            // 間違えていたら、エラーカウントを増やす
        } else if ((pushed_num == 69 || pushed_num == 73) && !space_flag) {
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
        if ((pushed_num == ans[block_id - 1][count] && !(space_flag)) || (pushed_num == 32 && space_flag)) {
            switch (pushed_num) {
                case 32: // スペースキー
                    start_time = new Date().getTime();
                    space_flag = false;
                    $(".space-btn").hide();
                    break;
                case 73: // Key[→]
                case 69: // Key[←]

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

            /*console.log(count);
            console.log(trial);
            console.log(word);
            console.log(error_num);
            */
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
            } else {
                // それ以外は次の単語を表示
                $(".words").text(words[block_id - 1][count]);
                $(".words").stop().animate({
                    opacity: '1'
                }, 200);
            }


            // 間違えていたら、エラーカウントを増やす
        } else if ((pushed_num == 69 || pushed_num == 73) && !space_flag) {
            $(".next").text("×");
            count_error++;

        }

    });
});
