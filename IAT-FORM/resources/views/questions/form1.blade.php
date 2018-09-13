<!DOCTYPE html>
<html lang = "ja">
<head>
  <meta charset = "UFT-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>フォームからデータを受け取る</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!--Bootstrap４に必要なCSSとJavaScriptを読み込み-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</head>

<body class = "container">
  <div class ="page-wrap row">
    <div class = "col-11 page">
      <h3>以下の質問に答えてください</h3>
      <form action="{{ url('questions') }}" method="post">
        @csrf
        @method('POST')
        <input type="hidden" name="block_id" value="{{$block_id}}">



        <div>
          <label>Q1.名前</label><br>
          <input type="text" name="q[0]" maxlength="10" value="" placeholder="" required>
        </div>

        <div>
          <label>Q2.年齢</label><br>
          <input type="number" name="q[1]" value="" required>
        </div>

        <div>
          <p>Q3.性別</p>
          <input id="radio-31" type="radio" name="q[2]" value="男性" class="radio-input" required>
          <label for="radio-31">男性</label><br>
          <input id="radio-32" type="radio" name="q[2]" value="女性" class="radio-input" required>
          <label for="radio-32">女性</label><br>
          <input id="radio-33" type="radio" name="q[2]" value="その他" class="radio-input" required>
          <label for="radio-33">その他</label><br>
        </div>

        <div>
          <label>Q4.大学</label><br>
          <input type="text" name="q[3]" value="" required>
        </div>

        <div>
          <label>Q5.メールアドレス</label><br>
          <input type="email" name="q[4]" value="" placeholder="xxxx@example.com" required><br>
        </div>

        <div>
          <p>Q6. 右耳の聴力を教えてください</p>
          <input id="radio-61" type="radio" name="q[5]" value="120dB以上" required>
          <label for="radio-61">120dB以上</label><br>
          <input id="radio-62" type="radio" name="q[5]" value="80~120dB" required>
          <label for="radio-62">80~120dB</label><br>
          <input id="radio-63" type="radio" name="q[5]" value="50~80dB" required>
          <label for="radio-63">50~80dB</label><br>
          <input id="radio-64" type="radio" name="q[5]" value="30~50dB"required>
          <label for="radio-64">30~50dB</label><br>
          <input id="radio-65" type="radio" name="q[5]" value="30dB以下" required>
          <label for="radio-65">30dB以下</label><br>
          <input id="radio-66" type="radio" name="q[5]" value="わからない" required>
          <label for="radio-66">わからない</label>
        </div>

        <div>
          <p>Q7. 左耳の聴力を教えてください</p>
          <input id="radio-71" type="radio" name="q[6]" value="120dB以上" required>
          <label for="radio-71">120dB以上</label><br>
          <input id="radio-72" type="radio" name="q[6]" value="80~120dB" required>
          <label for="radio-72">80~120dB</label><br>
          <input id="radio-73" type="radio" name="q[6]" value="50~80dB" required>
          <label for="radio-73">50~80dB</label><br>
          <input id="radio-74" type="radio" name="q[6]" value="30~50dB"required>
          <label for="radio-74">30~50dB</label><br>
          <input id="radio-75" type="radio" name="q[6]" value="30dB以下" required>
          <label for="radio-75">30dB以下</label><br>
          <input id="radio-76" type="radio" name="q[6]" value="わからない" required>
          <label for="radio-76">わからない</label>
        </div>

        <div>
          <p>Q8. 失聴時期を教えてください</p>
          <input id="radio-81" type="radio" name="q[7]" value="～1歳" required>
          <label for="radio-81">～1歳</label><br>
          <input id="radio-82" type="radio" name="q[7]" value="2～6歳" required>
          <label for="radio-82">2～6歳</label><br>
          <input id="radio-83" type="radio" name="q[7]" value="小学校から" required>
          <label for="radio-83">小学校から</label><br>
          <input id="radio-84" type="radio" name="q[7]" value="中学校から" required>
          <label for="radio-84">中学校から</label><br>
          <input id="radio-85" type="radio" name="q[7]" value="高校以降" required>
          <label for="radio-85">高校以降</label><br>
        </div>
        <div>
          <p>Q9. 家族の中に聴覚障害者はいますか</p>
          <input id="radio-91" type="checkbox" name="q[8]" value="父">
          <label for="radio-91">父</label><br>
          <input id="radio-92" type="checkbox" name="q[8]" value="母">
          <label for="radio-92">母</label><br>
          <input id="radio-93" type="checkbox" name="q[8]" value="兄弟姉妹">
          <label for="radio-93">兄弟姉妹</label><br>
          <input id="radio-94" type="checkbox" name="q[8]" value="祖父母">
          <label for="radio-94">祖父母</label><br>
          <input id="radio-95" type="checkbox" name="q[8]" value="その他親戚">
          <label for="radio-95">その他親戚</label><br>
          <input id="radio-96" type="checkbox" name="q[8]" value="家族のなかにはいない">
          <label for="radio-96">家族のなかにはいない</label><br>
        </div>
        <div>
          <p>Q10. 聴者の家族と口話や補聴器などの聴覚活用のみで会話できますか？</p>
          <input id="radio-101" type="radio" name="q[9]" value="会話ができる、困ることはほとんどない" required >
          <label for="radio-101">会話ができる、困ることはほとんどない</label><br>
          <input id="radio-102" type="radio" name="q[9]" value="時々通じにくいこともあるが、大体通じている" required>
          <label for="radio-102">時々通じにくいこともあるが、大体通じている</label><br>
          <input id="radio-103" type="radio" name="q[9]" value="通じにくいことが多い" required>
          <label for="radio-103">通じにくいことが多い</label><br>
          <input id="radio-104" type="radio" name="q[9]" value="聴覚活用のみで会話しようとしない" required>
          <label for="radio-104">聴覚活用のみで会話しようとしない</label><br>
        </div>

        <div>
          <p>Q11. 聴者の友だちと口話や補聴器などの聴覚活用のみで会話できますか？</p>
          <input id="radio-111" type="radio" name="q[10]" value="会話ができる、困ることはほとんどない" required>
          <label for="radio-111">会話ができる、困ることはほとんどない</label><br>
          <input id="radio-112" type="radio" name="q[10]" value="時々通じにくいこともあるが、大体通じている" required>
          <label for="radio-112">時々通じにくいこともあるが、大体通じている</label><br>
          <input id="radio-113" type="radio" name="q[10]" value="通じにくいことが多い" required>
          <label for="radio-113">通じにくいことが多い</label><br>
          <input id="radio-114" type="radio" name="q[10]" value="聴覚活用のみで会話しようとしない" required>
          <label for="radio-114">聴覚活用のみで会話しようとしない</label><br>
        </div>

        <div>
          <p>Q12. 聴者の見知らぬ人と口話や補聴器などの聴覚活用のみで会話できますか？</p>
          <input id="radio-121" type="radio" name="q[11]" value="会話ができる、困ることはほとんどない" required >
          <label for="radio-121">会話ができる、困ることはほとんどない</label><br>
          <input id="radio-122" type="radio" name="q[11]" value="時々通じにくいこともあるが、大体通じている" required>
          <label for="radio-122">時々通じにくいこともあるが、大体通じている</label><br>
          <input id="radio-123" type="radio" name="q[11]" value="通じにくいことが多い" required>
          <label for="radio-123">通じにくいことが多い</label><br>
          <input id="radio-124" type="radio" name="q[11]" value="聴覚活用のみで会話しようとしない" required>
          <label for="radio-124">聴覚活用のみで会話しようとしない</label><br>
        </div>

        <div>
          <p>Q13.聴覚障害者の知り合いや友人は何人いますか</p>
          <input id="radio-131" type="radio" name="q[12]" value="いない" required>
          <label for="radio-131">いない</label><br>
          <input id="radio-132" type="radio" name="q[12]" value="1人" required>
          <label for="radio-132">１人</label><br>
          <input id="radio-133" type="radio" name="q[12]" value="2~3人" required>
          <label for="radio-133">2~3人</label><br>
          <input id="radio-134" type="radio" name="q[12]" value="4人以上" required>
          <label for="radio-134">4人以上</label><br>
        </div>

        <div class="radio-text">
          <p>Q14.現在、どのような聴覚障害者とのつながりがありますか？</p>
          <input id="radio-141" type="checkbox" name="q[13]" value="ろう学校・難聴学級時代の友人">
          <label for="radio-141">ろう学校・難聴学級時代の友人</label><br>
          <input id="radio-142" type="checkbox" name="q[13]" value="ろう学校・難聴学級以外の個人的な聴覚障害者の友人、知り合い">
          <label for="radio-142">ろう学校・難聴学級以外の個人的な聴覚障害者の友人、知り合い</label><br>
          <input id="radio-143" type="checkbox" name="q[13]" value="手話サークル">
          <label for="radio-143">手話サークル</label><br>
          <input id="radio-144" type="checkbox" name="q[13]" value="ろう学生懇談会">
          <label for="radio-144">全日本ろう学生懇談会(例　近コンなどもふくむ)</label><br>
          <input id="radio-145" type="checkbox" name="q[13]" value="家族">
          <label for="radio-145">家族</label><br>

          <input id="radio-146" type="checkbox" name="q[13]" value="on" onclick="connecttext('textforscb146',this.checked);">
          <label for="radio-146">その他</label>：
          <input class="text-input" type="text" name="tex" id="textforscb146">
        </div>

        <h5>幼稚園～高校までの教育歴について教えてください</h5>
        <div class="radio-text">
          <p>q15.幼稚園（幼稚部）はどこに通っていましたか？</p>
          <input id="radio-151" type="radio" name="q[14]" value="ろう学校の幼稚部" required>
          <label for="radio-151">ろう学校の幼稚部</label><br>
          <input id="radio-152" type="radio" name="q[14]" value="幼稚園" required>
          <label for="radio-152">幼稚園</label><br>
          <input id="radio-153" type="radio" name="q[14]" value="通っていない" required>
          <label for="radio-153">通っていない</label><br>

          <input id="radio-154" type="radio" name="q[14]" value="on">
          <label for="radio-154">その他</label>：
          <input class="text-input" type="text" name="tex" id="textforscb154">
        </div>
        <div class="radio-text">
          <p>Q16.小学校はどこに通っていましたか？</p>
          <input id="radio-161" type="radio" name="q[15]" value="ろう学校の小学部" required>
          <label for="radio-161">ろう学校の小学部</label><br>
          <input id="radio-162" type="radio" name="q[15]" value="普通校の中の難聴学級" required>
          <label for="radio-162">通常学校の中の難聴学級</label><br>
          <input id="radio-163" type="radio" name="q[15]" value="通常学校，定期的に通級指導学級（ことばの教室，聞こえの教室など）" required>
          <label for="radio-163">通常学校，定期的に通級指導学級（ことばの教室，聞こえの教室など）</label><br>
          <input id="radio-164" type="radio" name="q[15]" value="普通校" required>
          <label for="radio-164">通常学校</label><br>
          <input id="radio-165" type="radio" name="q[15]" value="on">
          <label for="radio-165">その他</label>：
          <input class="text-input" type="text" name="tex" id="textforscb165">
        </div>
        <div class="radio-text">
          <p>Q17.中学校はどこに通っていましたか？</p>
          <input id="radio-171" type="radio" name="q[16]" value="ろう学校の中等部" required>
          <label for="radio-171">ろう学校の中等部</label><br>
          <input id="radio-172" type="radio" name="q[16]" value="普通校の中の難聴学級" required>
          <label for="radio-172">通常学校の中の難聴学級</label><br>
          <input id="radio-173" type="radio" name="q[16]" value="通常学校，定期的に通級指導学級（ことばの教室，聞こえの教室など）" required>
          <label for="radio-173">通常学校，定期的に通級指導学級（ことばの教室，聞こえの教室など）</label><br>
          <input id="radio-174" type="radio" name="q[16]" value="普通校" required>
          <label for="radio-174">通常学校</label><br>
          <input id="radio-175" type="radio" name="q[16]" value="on">
          <label for="radio-175">その他</label>：
          <input class="text-input" type="text" name="tex" id="textforscb175">
        </div>
        <div class="radio-text">
          <p>Q18.高校はどこに通っていましたか？</p>
          <input id="radio-181" type="radio" name="q[17]" value="ろう学校の高等部" required>
          <label for="radio-181">ろう学校の高等部</label><br>
          <input id="radio-182" type="radio" name="q[17]" value="普通校の中の難聴学級" required>
          <label for="radio-182">通常学校の中の難聴学級</label><br>
          <input id="radio-183" type="radio" name="q[17]" value="通常学校，定期的に通級指導学級（ことばの教室，聞こえの教室など）" required>
          <label for="radio-183">通常学校，定期的に通級指導学級（ことばの教室，聞こえの教室など）</label><br>
          <input id="radio-184" type="radio" name="q[17]" value="普通校" required>
          <label for="radio-184">通常学校</label><br>
          <input id="radio-185" type="radio" name="q[17]" value="on">
          <label for="radio-185">その他</label>：
          <input class="text-input" type="text" name="tex" id="textforscb185">
        </div>

        <h5>普段の会話方法について教えてください</h5>
        <div class="radio-text">
          <p>Q19.家でよく使う会話の手段は何ですか？</p>
          <input id="radio-191" type="radio" name="q[18]" value="口話" required>
          <label for="radio-191">口話</label><br>
          <input id="radio-192" type="radio" name="q[18]" value="手話" required>
          <label for="radio-192">手話</label><br>
          <input id="radio-193" type="radio" name="q[18]" value="筆談" required>
          <label for="radio-193">筆談</label><br>
          <input id="radio-194" type="radio" name="q[18]" value="キュー" required>
          <label for="radio-194">キュー</label><br>
          <input id="radio-195" type="radio" name="q[18]" value="on">
          <label for="radio-195">その他</label>：
          <input class="text-input" type="text" name="tex" id="textforscb195">
        </div>
        <div class="radio-text">
          <p>Q20.学校でよく使う会話の手段は何ですか？</p>
          <input id="radio-201" type="radio" name="q[19]" value="口話" required>
          <label for="radio-201">口話</label><br>
          <input id="radio-202" type="radio" name="q[19]" value="手話" required>
          <label for="radio-202">手話</label><br>
          <input id="radio-203" type="radio" name="q[19]" value="筆談" required>
          <label for="radio-203">筆談</label><br>
          <input id="radio-204" type="radio" name="q[19]" value="キュー" required>
          <label for="radio-204">キュー</label><br>
          <input id="radio-205" type="radio" name="q[19]" value="on">
          <label for="radio-205">その他</label>：
          <input class="text-input" type="text" name="q[19]" id="textforscb205" disabled>
        </div>
        <div class="radio-text">
          <p>Q21.街中でよく使う会話の手段は何ですか？</p>
          <input id="radio-211" type="radio" name="q[20]" value="口話" required>
          <label for="radio-211">口話</label><br>
          <input id="radio-212" type="radio" name="q[20]" value="手話" required>
          <label for="radio-212">手話</label><br>
          <input id="radio-213" type="radio" name="q[20]" value="筆談" required>
          <label for="radio-213">筆談</label><br>
          <input id="radio-214" type="radio" name="q[20]" value="キュー" required>
          <label for="radio-214">キュー</label><br>
          <input id="radio-215" type="radio" name="q[20]" value="on">
          <label for="radio-215">その他</label>：
          <input class="text-input" type="text" name="tex" id="textforscb215" disabled>
        </div>

        <div>
          <p>Q22.手話の獲得時期はいつですか？</p>
 <input id="radio18-6" type="radio" name="q[21]" value="手話は使わない" required><label for="radio18-6">手話は使わない</label><br>
          <input id="radio-221" type="radio" name="q[21]" value="手話が第一言語" required>
          <label for="radio-221">手話が第一言語</label><br>
          <input id="radio-222" type="radio" name="q[21]" value="小学校まで" required>
          <label for="radio-222">小学校まで</label><br>
          <input id="radio-223" type="radio" name="q[21]" value="中学校" required>
          <label for="radio-223">中学校</label><br>
          <input id="radio-224" type="radio" name="q[21]" value="高校" required>
          <label for="radio-224">高校</label><br>
          <input id="radio-225" type="radio" name="q[21]" value="大学" required>
          <label for="radio-225">大学</label><br>
          <input id="radio-226" type="radio" name="q[21]" value="手話は使わない" required>
          <label for="radio-226">手話は使わない</label><br>
        </div>

        <div>
          <p> Q23.自分は以下のどれにあてはまると思いますか？</p>
          <input id="radio-231" type="checkbox" name="q[22]" value="ろう">
          <label for="radio-231">ろう</label><br>
          <input id="radio-232" type="checkbox" name="q[22]" value="難聴">
          <label for="radio-232">難聴</label><br>
          <input id="radio-233" type="checkbox" name="q[22]" value="聴">
          <label for="radio-233">聴</label><br>
          <input id="radio-234" type="checkbox" name="q[22]" value="わからない">
          <label for="radio-234">わからない</label><br>
        </div>

        <input type="submit" value="次へ">
      </form>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/display.js') }}"></script>
  <script>
  $(function () {

    // radioボタンとtextを動的に切り替える
    $('.radio-text input').change(function() {
      var result = $(this).val();
      // その他だったら
      if(result == "on") {
        console.log($(this).nextAll('.text-input'));
        $(this).nextAll('.text-input').prop("disabled", false);
      } else {
        $(this).nextAll('.text-input').prop("disabled", true);
      }
      console.log( result );
    });
  });
  </script>
</body>
</html>
