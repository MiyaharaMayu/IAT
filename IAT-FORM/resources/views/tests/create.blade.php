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
    <div class="row">
    <div class ="col-12">
    <div class="description">
    </div>
    
    <ul class="left-right">
        <li class = "h3 left"></li>
        <li class = "h3 right"></li>
    </ul>

    <div class ="h3 next"></div>
    <div class ="h4 words"></div>

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

    <ul class="ul-btn">
        <li>
            <div class = "li-btn left li-btn-left h3"></div>
        </li>
        <li>
            <div class = "li-btn right li-btn-right h3"></div>
        </li>
    </ul>
    <div class="li-btn space-btn">
        <h2>START</h2>
    </div>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/display.js') }}"></script>
</div>
</body>
</html>
