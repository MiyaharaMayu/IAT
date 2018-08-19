<!DOCTYPE html>
<html lang = "ja">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>フォームからデータを受け取る</title>
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body  class = "comtainer">
  <div class ="page-wrap row">
    <div class ="page col-11">
      <p>次の項目についてあなたがどの程度同意するか、お答えください。</p>
      <p>※なお、ここでは「障害（者）」とは「聴覚障害（者）」をさします。</p>
      <form action="{{ url('questions') }}" method="post">
        @csrf
        @method('POST')
        <input type="hidden" name="block_id" value="{{$block_id}}">
        <div>
          <p>1.　聴覚障害のある子どもの親は、健聴の子どもの親よりも寛容であるべきだ</p>
          <input id="radio-1" type="radio" name="q[0]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[0]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[0]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[0]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[0]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[0]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>2．聴覚障害者は障害のない人とおなじくらい優秀だ</p>
          <input id="radio-1" type="radio" name="q[1]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[1]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[1]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[1]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[1]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[1]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>3．ほとんどの聴覚障害者は、聴者に比べて、人とうまくやっている</p>
          <input id="radio-1" type="radio" name="q[2]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[2]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[2]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[2]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[2]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[2]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>4．ほとんどの聴覚障害者は自分自身をかわいそうに思っている</p>
          <input id="radio-1" type="radio" name="q[3]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[3]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[3]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[3]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[3]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[3]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>5．聴覚障害者は他の人と同じだ</p>
          <input id="radio-1" type="radio" name="q[4]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[4]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[4]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[4]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[4]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[4]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>6．耳に障害のある子どものための特別な学校・学級・コースを設置すべきである</p>
          <input id="radio-1" type="radio" name="q[5]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[5]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[5]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[5]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[5]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[5]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>7．聴覚障害のある人にとって、特別なコミュニティーで暮らし働くことが最善だろう。</p>
          <input id="radio-1" type="radio" name="q[6]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[6]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[6]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[6]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[6]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[6]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>8．障害者を支援するのは政府の責任である</p>
          <input id="radio-1" type="radio" name="q[7]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[7]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[7]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[7]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[7]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[7]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>9．ほとんどの障害者はとても悩んでいるというわけではない</p>
          <input id="radio-1" type="radio" name="q[8]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[8]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[8]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[8]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[8]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[8]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>10．障害者は健常者と同じ基準を求めるられるべきではない</p>
          <input id="radio-1" type="radio" name="q[9]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[9]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[9]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[9]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[9]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[9]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>11．聴覚障害者は聴者と同じくらい幸せだ</p>
          <input id="radio-1" type="radio" name="q[10]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[10]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[10]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[10]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[10]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[10]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>12．重度の障害のある人は、軽度の障害のあるひとよりも、人とうまくやっていくことが難しいわけではない</p>
          <input id="radio-1" type="radio" name="q[11]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[11]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[11]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[11]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[11]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[11]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>13．障害のある人にとって、普通の生活をするのは困難だ</p>
          <input id="radio-1" type="radio" name="q[12]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[12]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[12]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[12]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[12]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[12]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>14．障害者には多くを望むべきではない</p>
          <input id="radio-1" type="radio" name="q[13]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[13]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[13]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[13]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[13]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[13]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>15．聴覚障害者は一人で過ごす時間が長くなりがちだ</p>
          <input id="radio-1" type="radio" name="q[14]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[14]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[14]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[14]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[14]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[14]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>16．聴覚障害のある人は聴者よりも動揺しやすい</p>
          <input id="radio-1" type="radio" name="q[15]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[15]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[15]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[15]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[15]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[15]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>17．聴覚障害者は普通の社会生活をおくることができる</p>
          <input id="radio-1" type="radio" name="q[16]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[16]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[16]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[16]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[16]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[16]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>18．ほとんどの聴覚障害者は、自分達が他の人より劣っていると思っている</p>
          <input id="radio-1" type="radio" name="q[17]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[17]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[17]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[17]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[17]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[17]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>19．聴者は、聴覚障害者と一緒にいるときには、その気持ちを傷つけないようにしてほしい</p>
          <input id="radio-1" type="radio" name="q[18]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[18]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[18]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[18]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[18]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[18]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <div>
          <p>20．聴覚障害者は不平ばかり言う</p>
          <input id="radio-1" type="radio" name="q[19]" value="1" required><label for="radio-1">まったくそう思う</label><br>
          <input id="radio-2" type="radio" name="q[19]" value="2" required><label for="radio-2">かなりそう思う</label><br>
          <input id="radio-3" type="radio" name="q[19]" value="3" required><label for="radio-3">少しそう思う</label><br>
          <input id="radio-4" type="radio" name="q[19]" value="4" required><label for="radio-4">少しそう思わない</label><br>
          <input id="radio-5" type="radio" name="q[19]" value="5" required><label for="radio-5">あまりそう思わない</label><br>
          <input id="radio-6" type="radio" name="q[19]" value="6" required><label for="radio-6">まったくそう思わない</label><br>
        </div>
        <input type="submit" value="次へ">
      </form>
    </div>
  </div>
</body>
</html>
