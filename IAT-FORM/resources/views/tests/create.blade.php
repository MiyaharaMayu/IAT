<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset = "UFT-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>フォームからデータを受け取る</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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

    <form action="{{ url('tests') }}" method="post" name="myForm">
        @csrf
        @method('POST')
        <input type="hidden" name="subject_id" value="1"/>
        <input type="hidden" name="block_id" value=" {{$block_id}}"/>
        <input type="hidden" name="count" value="1"/>
        <input type="hidden" name="trial[]" value=""/>
        <input type="hidden" name="word[]" value=""/>
        <input type="hidden" name="error_num[]" value=""/>
        <input type="hidden" name="reaction_time[]" value=""/>
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
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/display.js') }}"></script>
</body>
</html>
