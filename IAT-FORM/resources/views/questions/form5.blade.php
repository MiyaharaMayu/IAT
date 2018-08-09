<!DOCTYPE html>
<html lang = "ja">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>フォームからデータを受け取る</title>
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
  <div class ="page-wrap">
    <div class = "page">
      <h1>質問は以上です。<br>
      ご回答くださりありがとうございました。</h1>

      <form action="{{ url('questions') }}" method="post">
        @csrf
        @method('POST')
        <input type="hidden" name="block_id" value="{{$block_id}}">
        <div>
          <label for="free">
            <p>感想などがある場合は以下に入力して送信してください</p>
          </label>
          <textarea id="free" name="q[0]" placeholder="感想を入力"></textarea>
        </div>

        <p>
          もしこの実験によって気分が悪くなった場合は以下のメールアドレスまでご連絡ください。
        </p>
        <div>
          <input type="submit" value="送信する">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
