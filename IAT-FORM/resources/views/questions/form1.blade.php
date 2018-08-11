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

<body>
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
          <input id="radio-1" type="radio" name="q[2]" value="男性" class="radio-input" required><label for="radio-1">男性</label><br>
          <input id="radio-2" type="radio" name="q[2]" value="女性" class="radio-input" required><label for="radio-2">女性</label><br>
          <input id="radio-3" type="radio" name="q[2]" value="未回答" class="radio-input" required><label for="radio-3">未回答</label><br>
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
          <input id="radio-1" type="radio" name="q[5]" value="120dB以上" required><label for="radio-1">120dB以上</label><br>
          <input id="radio-2" type="radio" name="q[5]" value="80~120dB" required><label for="radio-2">80~120dB</label><br>
          <input id="radio-3" type="radio" name="q[5]" value="50~80dB" required><label for="radio-3">50~80dB</label><br>
          <input id="radio-4" type="radio" name="q[5]" value="30~50dB"required><label for="radio-4">30~50dB</label><br>
          <input id="radio-5" type="radio" name="q[5]" value="30dB以下" required><label for="radio-5">30dB以下</label><br>
          <input id="radio-6" type="radio" name="q[5]" value="わからない" required><label for="radio-6">わからない</label>
        </div>

        <div>
          <p>Q7. 左耳の聴力を教えてください</p>
          <input id="radio-1" type="radio" name="q[6]" value="120dB以上" required><label for="radio-1">120dB以上</label><br>
          <input id="radio-2" type="radio" name="q[6]" value="80~120dB" required><label for="radio-2">80~120dB</label><br>
          <input id="radio-3" type="radio" name="q[6]" value="50~80dB" required><label for="radio-3">50~80dB</label><br>
          <input id="radio-4" type="radio" name="q[6]" value="30~50dB"required><label for="radio-4">30~50dB</label><br>
          <input id="radio-5" type="radio" name="q[6]" value="30dB以下" required><label for="radio-5">30dB以下</label><br>
          <input id="radio-6" type="radio" name="q[6]" value="わからない" required><label for="radio-6">わからない</label>
        </div>

        <div>
          <p>Q8. 失聴時期を教えてください</p>
          <input id="radio-1" type="radio" name="q[7]" value="～1歳" required><label for="radio-1">～1歳</label><br>
          <input id="radio-2" type="radio" name="q[7]" value="2～6歳" required><label for="radio-2">2～6歳</label><br>
          <input id="radio-3" type="radio" name="q[7]" value="小学校から" required><label for="radio-3">小学校から</label><br>
          <input id="radio-4" type="radio" name="q[7]" value="中学校から" required><label for="radio-4">中学校から</label><br>
          <input id="radio-5" type="radio" name="q[7]" value="高校以降" required><label for="radio-5">高校以降</label><br>
        </div>
        <div>
          <p>Q9. 家族の中に聴覚障害者はいますか</p>
          <input id="radio-1" type="checkbox" name="q[8]" value="父"><label for="radio-1">父</label><br>
          <input id="radio-2" type="checkbox" name="q[8]" value="母"><label for="radio-2">母</label><br>
          <input id="radio-3" type="checkbox" name="q[8]" value="兄弟姉妹"><label for="radio-3">兄弟姉妹</label><br>
          <input id="radio-4" type="checkbox" name="q[8]" value="祖父母"><label for="radio-4">祖父母</label><br>
          <input id="radio-5" type="checkbox" name="q[8]" value="その他親戚"><label for="radio-5">その他親戚</label><br>
          <input id="radio-6" type="checkbox" name="q[8]" value="家族のなかにはいない"><label for="radio-6">家族のなかにはいない</label><br>
        </div>
        <div>
          <p>Q10. 聴者の家族と口話や補聴器などの聴覚活用のみで会話できますか？</p>
          <input id="radio-1" type="radio" name="q[9]" value="会話ができる、困ることはほとんどない" required ><label for="radio-1">会話ができる、困ることはほとんどない</label><br>
          <input id="radio-2" type="radio" name="q[9]" value="時々通じにくいこともあるが、大体通じている" required><label for="radio-2">時々通じにくいこともあるが、大体通じている</label><br>
          <input id="radio-3" type="radio" name="q[9]" value="通じにくいことが多い" required><label for="radio-3">通じにくいことが多い</label><br>
          <input id="radio-4" type="radio" name="q[9]" value="聴覚活用のみで会話しようとしない" required><label for="radio-4">聴覚活用のみで会話しようとしない</label><br>
        </div>

        <div>
          <p>Q11. 聴者の友だちと口話や補聴器などの聴覚活用のみで会話できますか？</p>
          <input id="radio-1" type="radio" name="q[10]" value="会話ができる、困ることはほとんどない" required ><label for="radio-1">会話ができる、困ることはほとんどない</label><br>
          <input id="radio-2" type="radio" name="q[10]" value="時々通じにくいこともあるが、大体通じている" required><label for="radio-2">時々通じにくいこともあるが、大体通じている</label><br>
          <input id="radio-3" type="radio" name="q[10]" value="通じにくいことが多い" required><label for="radio-3">通じにくいことが多い</label><br>
          <input id="radio-4" type="radio" name="q[10]" value="聴覚活用のみで会話しようとしない" required><label for="radio-4">聴覚活用のみで会話しようとしない</label><br>
        </div>

        <div>
          <p>Q12. 聴者の見知らぬ人と口話や補聴器などの聴覚活用のみで会話できますか？</p>
          <input id="radio-1" type="radio" name="q[11]" value="会話ができる、困ることはほとんどない" required ><label for="radio-1">会話ができる、困ることはほとんどない</label><br>
          <input id="radio-2" type="radio" name="q[11]" value="時々通じにくいこともあるが、大体通じている" required><label for="radio-2">時々通じにくいこともあるが、大体通じている</label><br>
          <input id="radio-3" type="radio" name="q[11]" value="通じにくいことが多い" required><label for="radio-3">通じにくいことが多い</label><br>
          <input id="radio-4" type="radio" name="q[11]" value="聴覚活用のみで会話しようとしない" required><label for="radio-4">聴覚活用のみで会話しようとしない</label><br>
        </div>

        <div>
          <p>Q13.聴覚障害者の知り合いや友人は何人いますか</p>
          <input id="radio-1" type="radio" name="q[12]" value="いない" required><label for="radio-1">いない</label><br>
          <input id="radio-2" type="radio" name="q[12]" value="1人" required><label for="radio-2">１人</label><br>
          <input id="radio-3" type="radio" name="q[12]" value="2~3人" required><label for="radio-3">2~3人</label><br>
          <input id="radio-4" type="radio" name="q[12]" value="4人以上" required><label for="radio-5">4人以上</label><br>
        </div>

        <div>
          <p>Q14.現在、どのような聴覚障害者とのつながりがありますか？</p>
          <input id="radio-1" type="checkbox" name="q[13]" value="ろう学校・難聴学級時代の友人"><label for="radio-1">ろう学校・難聴学級時代の友人</label><br>
          <input id="radio-2" type="checkbox" name="q[13]" value="ろう学校・難聴学級以外の個人的な聴覚障害者の友人、知り合い"><label for="radio-2">ろう学校・難聴学級以外の個人的な聴覚障害者の友人、知り合い</label><br>
          <input id="radio-3" type="checkbox" name="q[13]" value="手話サークル"><label for="radio-3">手話サークル</label><br>
          <input id="radio-4" type="checkbox" name="q[13]" value="ろう学生懇談会"><label for="radio-4">全日本ろう学生懇談会(例　近コンなどもふくむ)</label><br>
          <input id="radio-5" type="checkbox" name="q[13]" value="家族"><label for="radio-5">家族</label><br>
          <input id="radio-6" type="checkbox" name="q[13]" value="on" onclick="connecttext('textforscb3',this.checked);"><label for="radio-6">その他</label>：
          <input type="text" name="tex" id="textforscb3">
        </div>

        <h5>幼稚園～高校までの教育歴について教えてください</h5>
        <div>
          <p>q15.幼稚園（幼稚部）はどこに通っていましたか？</p>
          <input id="radio-1" type="radio" name="q[14]" value="ろう学校の幼稚部" required><label for="radio-1">ろう学校の幼稚部</label><br>
          <input id="radio-2" type="radio" name="q[14]" value="幼稚園" required><label for="radio-2">幼稚園</label><br>
          <input id="radio-3" type="radio" name="q[14]" value="通っていない" required><label for="radio-3">通っていない</label><br>
          <input id="radio-4" type="radio" name="q[14]" value="on" onclick="connecttext('textforscb3',this.checked);"><label for="radio-4">その他</label>：
          <input type="text" name="tex" id="textforscb3">
        </div>
        <div>
          <p>Q16.小学校はどこに通っていましたか？</p>
          <input id="radio-1" type="radio" name="q[15]" value="ろう学校の小学部" required><label for="radio-1">ろう学校の小学部</label><br>
          <input id="radio-2" type="radio" name="q[15]" value="普通校の中の難聴学級" required><label for="radio-2">通常学校の中の難聴学級</label><br>
          <input id="radio-3" type="radio" name="q[15]" value="通常学校，定期的に通級指導学級（ことばの教室，聞こえの教室など）" required><label for="radio-3">通常学校，定期的に通級指導学級（ことばの教室，聞こえの教室など）</label><br>
          <input id="radio-4" type="radio" name="q[15]" value="普通校" required><label for="radio-3">通常学校</label><br>
          <input id="radio-5" type="radio" name="q[15]" value="on" onclick="connecttext('textforscb3',this.checked);"><label for="radio-5">その他</label>：
          <input type="text" name="tex" id="textforscb3">
        </div>
        <div>
          <p>Q17.中学校はどこに通っていましたか？</p>
          <input id="radio-1" type="radio" name="q[16]" value="ろう学校の中等部" required><label for="radio-1">ろう学校の中等部</label><br>
          <input id="radio-2" type="radio" name="q[16]" value="普通校の中の難聴学級" required><label for="radio-2">通常学校の中の難聴学級</label><br>
          <input id="radio-3" type="radio" name="q[16]" value="通常学校，定期的に通級指導学級（ことばの教室，聞こえの教室など）" required><label for="radio-3">通常学校，定期的に通級指導学級（ことばの教室，聞こえの教室など）</label><br>
          <input id="radio-4" type="radio" name="q[16]" value="普通校" required><label for="radio-3">通常学校</label><br>
          <input id="radio-5" type="radio" name="q[16]" value="on" onclick="connecttext('textforscb3',this.checked);"><label for="radio-5">その他</label>：
          <input type="text" name="tex" id="textforscb3">
        </div>
        <div>
          <p>Q18.高校はどこに通っていましたか？</p>
          <input id="radio-1" type="radio" name="q[17]" value="ろう学校の高等部" required><label for="radio-1">ろう学校の高等部</label><br>
          <input id="radio-2" type="radio" name="q[17]" value="普通校の中の難聴学級" required><label for="radio-2">通常学校の中の難聴学級</label><br>
          <input id="radio-3" type="radio" name="q[17]" value="通常学校，定期的に通級指導学級（ことばの教室，聞こえの教室など）" required><label for="radio-3">通常学校，定期的に通級指導学級（ことばの教室，聞こえの教室など）</label><br>
          <input id="radio-4" type="radio" name="q[17]" value="普通校" required><label for="radio-3">通常学校</label><br>
          <input id="radio-5" type="radio" name="q[17]" value="on" onclick="connecttext('textforscb3',this.checked);"><label for="radio-5">その他</label>：
          <input type="text" name="tex" id="textforscb3">
        </div>

        <h5>普段の会話方法について教えてください</h5>
        <div>
          <p>Q19.家でよく使う会話の手段は何ですか？</p>
          <input id="radio-1" type="radio" name="q[18]" value="口話" required><label for="radio-1">口話</label><br>
          <input id="radio-2" type="radio" name="q[18]" value="手話" required><label for="radio-2">手話</label><br>
          <input id="radio-3" type="radio" name="q[18]" value="筆談" required><label for="radio-3">筆談</label><br>
          <input id="radio-4" type="radio" name="q[18]" value="キュー" required><label for="radio-4">キュー</label><br>
          <input id="radio-5" type="radio" name="q[18]" value="on" onclick="connecttext('textforscb3',this.checked);"><label for="radio-5">その他</label>：
          <input type="text" name="tex" id="textforscb3">
        </div>
        <div>
          <p>Q20.学校でよく使う会話の手段は何ですか？</p>
          <input id="radio-1" type="radio" name="q[19]" value="口話" required><label for="radio-1">口話</label><br>
          <input id="radio-2" type="radio" name="q[19]" value="手話" required><label for="radio-2">手話</label><br>
          <input id="radio-3" type="radio" name="q[19]" value="筆談" required><label for="radio-3">筆談</label><br>
          <input id="radio-4" type="radio" name="q[19]" value="キュー" required><label for="radio-4">キュー</label><br>
          <input id="radio-5" type="radio" name="q[19]" value="on" onclick="connecttext('textforscb3',this.checked);"><labe for="radio-5">その他</label>：
          <input type="text" name="tex" id="textforscb3">
        </div>
        <div>
          <p>Q21.街中でよく使う会話の手段は何ですか？</p>
          <input id="radio-1" type="radio" name="q[20]" value="口話" required><label for="radio-1">口話</label><br>
          <input id="radio-2" type="radio" name="q[20]" value="手話" required><label for="radio-2">手話</label><br>
          <input id="radio-3" type="radio" name="q[20]" value="筆談" required><label for="radio-3">筆談</label><br>
          <input id="radio-4" type="radio" name="q[20]" value="キュー" required><label for="radio-4">キュー</label><br>
          <input id="radio-5" type="radio" name="q[20]" value="on" onclick="connecttext('textforscb3',this.checked);"><labe for="radio-5">その他</label>：
          <input type="text" name="tex" id="textforscb3">
        </div>

        <div>
          <p>Q22.手話の獲得時期はいつですか？</p>
          <input id="radio-1" type="radio" name="q[21]" value="手話が第一言語" required><label for="radio-1">手話が第一言語</label><br>
          <input id="radio-2" type="radio" name="q[21]" value="小学校まで" required><label for="radio-2">小学校まで</label><br>
          <input id="radio-3" type="radio" name="q[21]" value="中学校" required><label for="radio-3">中学校</label><br>
          <input id="radio-4" type="radio" name="q[21]" value="高校" required><label for="radio-4">高校</label><br>
          <input id="radio-5" type="radio" name="q[21]" value="大学" required><label for="radio-5">大学</label><br>
          <input id="radio-6" type="radio" name="q[21]" value="手話は使わない" required><label for="radio-6">手話は使わない</label><br>
        </div>

        <div>
          <p> Q23.自分は以下のどれにあてはまると思いますか？</p>
          <input id="radio-1" type="checkbox" name="q[22]" value="ろう"><label for="radio-1">ろう</label><br>
          <input id="radio-2" type="checkbox" name="q[22]" value="難聴"><label for="radio-2">難聴</label><br>
          <input id="radio-3" type="checkbox" name="q[22]" value="聴"><label for="radio-3">聴</label><br>
          <input id="radio-4" type="checkbox" name="q[22]" value="わからない"><label for="radio-4">わからない</label><br>
        </div>



        <input type="submit" value="次へ">
      </form>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/display.js') }}"></script>
</body>
</html>
