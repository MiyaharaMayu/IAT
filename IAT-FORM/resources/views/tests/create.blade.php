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
<body class="test top">
    <div class="base">
    <div class ="">
    
    
    <ul class="left-right f-32 f-md-32">
        <li class = "left"></li>
        <li class = "right"></li>
    </ul>

    <div class ="next f-32 f-md-32"></div>
    <div class ="words f-32 f-md-32"></div>

    <form action="{{ url('tests') }}" method="post" name="myForm">
        @csrf
        @method('POST')
        <input type="hidden" name="subject_id" value="1"/>
        <input type="hidden" name="block_id" value=" {{$block_id}}"/>
        <input type="hidden" name="pattern" value=" {{$pattern}}"/>
        <input type="hidden" name="count" value="1"/>
        <input type="hidden" name="trial[]" value=""/>
        <input type="hidden" name="word[]" value=""/>
        <input type="hidden" name="error_num[]" value=""/>
        <input type="hidden" name="reaction_time[]" value=""/>
        <input class="btn" type = "submit" value ="送信">
    </form>

    <ul class="ul-btn f-32 f-md-32">
        <li>
            <div class = "li-btn left li-btn-left"></div>
        </li>
        <li>
            <div class = "li-btn right li-btn-right"></div>
        </li>
    </ul>
    <div class="li-btn space-btn f-32 f-md-32">
        <h2>START</h2>
    </div>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/display.js') }}"></script>
</div>
</body>
</html>
