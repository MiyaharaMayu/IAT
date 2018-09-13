<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>フォームからデータを受け取る</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class = "comntainer">
  <div class ="page-wrap row">
    <div class ="page col-11">
        <p>1から10までのことばがあなた自身にどのくらい当てはまるかについて，下の枠内の1（全く違うと思う）から7（強くそう思う）までの数字のうちもっとも適切なものを括弧内にチェック入れてください。文全体を総合的に見て，自分にどれだけ当てはまるかを評価してください。
    </p>
      <form action="{{ url('questions') }}" method="post">
        @csrf
        @method('POST')
        <input type="hidden" name="block_id" value="{{$block_id}}">
        <div>
          <p>1. 活発で外向的だと思う</p>
          <input id="radio-11" type="radio" name="q[0]" value="1"　required>
          <label for="radio-11">強くそう思う</label><br>
          <input id="radio-12" type="radio" name="q[0]" value="2" required>
          <label for="radio-12">まあまあそう思う</label><br>
          <input id="radio-13" type="radio" name="q[0]" value="3" required>
          <label for="radio-13">少しそうと思う</label><br>
          <input id="radio-14" type="radio" name="q[0]" value="4" required>
          <label for="radio-14">どちらでもない</label><br>
          <input id="radio-15" type="radio" name="q[0]" value="5" required>
          <label for="radio-15">少し違うと思う</label><br>
          <input id="radio-16" type="radio" name="q[0]" value="6" required>
          <label for="radio-16">おおよそ違うと思う</label><br>
          <input id="radio-17" type="radio" name="q[0]" value="7" required>
          <label for="radio-17">全く違うと思う</label><br>
        </div>

        <div>
          <p>2. 他人に不満をもち，もめごとを起こしやすいと思う</p>
          <input id="radio-21" type="radio" name="q[1]" value="1"　required>
          <label for="radio-21">強くそう思う</label><br>
          <input id="radio-22" type="radio" name="q[1]" value="2" required>
          <label for="radio-22">まあまあそう思う</label><br>
          <input id="radio-23" type="radio" name="q[1]" value="3" required>
          <label for="radio-23">少しそうと思う</label><br>
          <input id="radio-24" type="radio" name="q[1]" value="4" required>
          <label for="radio-24">どちらでもない</label><br>
          <input id="radio-25" type="radio" name="q[1]" value="5" required>
          <label for="radio-25">少し違うと思う</label><br>
          <input id="radio-26" type="radio" name="q[1]" value="6" required>
          <label for="radio-26">おおよそ違うと思う</label><br>
          <input id="radio-27" type="radio" name="q[1]" value="7" required>
          <label for="radio-27">全く違うと思う</label><br>
        </div>
        <div>
          <p>3. しっかりしていて，自分に厳しいと思う</p>
          <input id="radio-31" type="radio" name="q[2]" value="1"　required>
          <label for="radio-31">強くそう思う</label><br>
          <input id="radio-32" type="radio" name="q[2]" value="2" required>
          <label for="radio-32">まあまあそう思う</label><br>
          <input id="radio-33" type="radio" name="q[2]" value="3" required>
          <label for="radio-33">少しそうと思う</label><br>
          <input id="radio-34" type="radio" name="q[2]" value="4" required>
          <label for="radio-34">どちらでもない</label><br>
          <input id="radio-35" type="radio" name="q[2]" value="5" required>
          <label for="radio-35">少し違うと思う</label><br>
          <input id="radio-36" type="radio" name="q[2]" value="6" required>
          <label for="radio-36">おおよそ違うと思う</label><br>
          <input id="radio-37" type="radio" name="q[2]" value="7" required>
          <label for="radio-37">全く違うと思う</label><br>
        </div>
        <div>
          <p>4．心配性で，うろたえやすいと思う</p>
          <input id="radio-41" type="radio" name="q[3]" value="1"　required>
          <label for="radio-41">強くそう思う</label><br>
          <input id="radio-42" type="radio" name="q[3]" value="2" required>
          <label for="radio-42">まあまあそう思う</label><br>
          <input id="radio-43" type="radio" name="q[3]" value="3" required>
          <label for="radio-43">少しそうと思う</label><br>
          <input id="radio-44" type="radio" name="q[3]" value="4" required>
          <label for="radio-44">どちらでもない</label><br>
          <input id="radio-45" type="radio" name="q[3]" value="5" required>
          <label for="radio-45">少し違うと思う</label><br>
          <input id="radio-46" type="radio" name="q[3]" value="6" required>
          <label for="radio-46">おおよそ違うと思う</label><br>
          <input id="radio-47" type="radio" name="q[3]" value="7" required>
          <label for="radio-47">全く違うと思う</label><br>
        </div>
        <div>
          <p>5．新しいことが好きで，変わった考えをもつと思う</p>
          <input id="radio-51" type="radio" name="q[4]" value="1"　required>
          <label for="radio-51">強くそう思う</label><br>
          <input id="radio-52" type="radio" name="q[4]" value="2" required>
          <label for="radio-52">まあまあそう思う</label><br>
          <input id="radio-53" type="radio" name="q[4]" value="3" required>
          <label for="radio-53">少しそうと思う</label><br>
          <input id="radio-54" type="radio" name="q[4]" value="4" required>
          <label for="radio-54">どちらでもない</label><br>
          <input id="radio-55" type="radio" name="q[4]" value="5" required>
          <label for="radio-55">少し違うと思う</label><br>
          <input id="radio-56" type="radio" name="q[4]" value="6" required>
          <label for="radio-56">おおよそ違うと思う</label><br>
          <input id="radio-57" type="radio" name="q[4]" value="7" required>
          <label for="radio-57">全く違うと思う</label><br>
        </div>
        <div>
          <p>6．ひかえめで，おとなしいと思う</p>
          <input id="radio-61" type="radio" name="q[5]" value="1"　required>
          <label for="radio-61">強くそう思う</label><br>
          <input id="radio-62" type="radio" name="q[5]" value="2" required>
          <label for="radio-62">まあまあそう思う</label><br>
          <input id="radio-63" type="radio" name="q[5]" value="3" required>
          <label for="radio-63">少しそうと思う</label><br>
          <input id="radio-64" type="radio" name="q[5]" value="4" required>
          <label for="radio-64">どちらでもない</label><br>
          <input id="radio-65" type="radio" name="q[5]" value="5" required>
          <label for="radio-65">少し違うと思う</label><br>
          <input id="radio-66" type="radio" name="q[5]" value="6" required>
          <label for="radio-66">おおよそ違うと思う</label><br>
          <input id="radio-67" type="radio" name="q[5]" value="7" required>
          <label for="radio-67">全く違うと思う</label><br>
        </div>
        <div>
          <p>7．人に気をつかう，やさしい人間だと思う</p>
          <input id="radio-71" type="radio" name="q[6]" value="1"　required>
          <label for="radio-71">強くそう思う</label><br>
          <input id="radio-72" type="radio" name="q[6]" value="2" required>
          <label for="radio-72">まあまあそう思う</label><br>
          <input id="radio-73" type="radio" name="q[6]" value="3" required>
          <label for="radio-73">少しそうと思う</label><br>
          <input id="radio-74" type="radio" name="q[6]" value="4" required>
          <label for="radio-74">どちらでもない</label><br>
          <input id="radio-75" type="radio" name="q[6]" value="5" required>
          <label for="radio-75">少し違うと思う</label><br>
          <input id="radio-76" type="radio" name="q[6]" value="6" required>
          <label for="radio-76">おおよそ違うと思う</label><br>
          <input id="radio-77" type="radio" name="q[6]" value="7" required>
          <label for="radio-77">全く違うと思う</label><br>
        </div>
        <div>
          <p>8．だらしなく，うっかりしていると思う</p>
          <input id="radio-81" type="radio" name="q[7]" value="1"　required>
          <label for="radio-81">強くそう思う</label><br>
          <input id="radio-82" type="radio" name="q[7]" value="2" required>
          <label for="radio-82">まあまあそう思う</label><br>
          <input id="radio-83" type="radio" name="q[7]" value="3" required>
          <label for="radio-83">少しそうと思う</label><br>
          <input id="radio-84" type="radio" name="q[7]" value="4" required>
          <label for="radio-84">どちらでもない</label><br>
          <input id="radio-85" type="radio" name="q[7]" value="5" required>
          <label for="radio-85">少し違うと思う</label><br>
          <input id="radio-86" type="radio" name="q[7]" value="6" required>
          <label for="radio-86">おおよそ違うと思う</label><br>
          <input id="radio-87" type="radio" name="q[7]" value="7" required>
          <label for="radio-87">全く違うと思う</label><br>
        </div>
        <div>
        <p>9．冷静で，気分が安定していると思う</p>
          <input id="radio-91" type="radio" name="q[8]" value="1"　required>
          <label for="radio-91">強くそう思う</label><br>
          <input id="radio-92" type="radio" name="q[8]" value="2" required>
          <label for="radio-92">まあまあそう思う</label><br>
          <input id="radio-93" type="radio" name="q[8]" value="3" required>
          <label for="radio-93">少しそうと思う</label><br>
          <input id="radio-94" type="radio" name="q[8]" value="4" required>
          <label for="radio-94">どちらでもない</label><br>
          <input id="radio-95" type="radio" name="q[8]" value="5" required>
          <label for="radio-95">少し違うと思う</label><br>
          <input id="radio-96" type="radio" name="q[8]" value="6" required>
          <label for="radio-96">おおよそ違うと思う</label><br>
          <input id="radio-97" type="radio" name="q[8]" value="7" required>
          <label for="radio-97">全く違うと思う</label><br>
        </div>
        <div>
        <p>10．発想力に欠けた，平凡な人間だと思う</p>
          <input id="radio-101" type="radio" name="q[9]" value="1"　required>
          <label for="radio-101">強くそう思う</label><br>
          <input id="radio-102" type="radio" name="q[9]" value="2" required>
          <label for="radio-102">まあまあそう思う</label><br>
          <input id="radio-103" type="radio" name="q[9]" value="3" required>
          <label for="radio-103">少しそうと思う</label><br>
          <input id="radio-104" type="radio" name="q[9]" value="4" required>
          <label for="radio-104">どちらでもない</label><br>
          <input id="radio-105" type="radio" name="q[9]" value="5" required>
          <label for="radio-105">少し違うと思う</label><br>
          <input id="radio-106" type="radio" name="q[9]" value="6" required>
          <label for="radio-106">おおよそ違うと思う</label><br>
          <input id="radio-107" type="radio" name="q[9]" value="7" required>
          <label for="radio-107">全く違うと思う</label><br>
        </div>
        <input type="submit" value="次へ">
      </form>
    </div>
  </div>
</body>
</html>
