<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>フォームからデータを受け取る</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class = "top">
    <div class ="base">
      <div class ="page-wrap">
        <div class = "page f-18 f-md-20">
        <p>次の質問についてこの前期中のあなたがどれほど当てはまるか、あるいはどの程度そう思うかお答えください。</p>
        <form action="{{ url('questions') }}" method="post">
          @csrf
          @method('POST')
          <input type="hidden" name="block_id" value="{{$block_id}}">
          
          <div>
            <p>1. 私は簡単に諦めてしまう傾向がある</p>
            <input id="radio-11" type="radio" name="q[0]" value="1" required>
            <label for="radio-11">とてもあてはまる</label><br>
            <input id="radio-12" type="radio" name="q[0]" value="2" required>
            <label for="radio-12">あてはまる</label><br>
            <input id="radio-13" type="radio" name="q[0]" value="3" required>
            <label for="radio-13">わからない</label><br>
            <input id="radio-14" type="radio" name="q[0]" value="4" required>
            <label for="radio-14">あまりあてはまらない</label><br>
            <input id="radio-15" type="radio" name="q[0]" value="5" required>
            <label for="radio-15">まったくそう思わない</label><br>
          </div>

          <div>
          <p>２. 私は何か新しいことを学ぼうとするとき、最初のうまくいかないとすぐにやめてしまう
          </p>
            <input id="radio-21" type="radio" name="q[1]" value="1" required>
            <label for="radio-21">とてもあてはまる</label><br>
            <input id="radio-22" type="radio" name="q[1]" value="2" required>
            <label for="radio-22">あてはまる</label><br>
            <input id="radio-23" type="radio" name="q[1]" value="3" required>
            <label for="radio-23">わからない</label><br>
            <input id="radio-24" type="radio" name="q[1]" value="4" required>
            <label for="radio-24">あまりあてはまらない</label><br>
            <input id="radio-25" type="radio" name="q[1]" value="5" required>
            <label for="radio-25">まったくそう思わない</label><br>
          </div>

          <div>
          <p>３. 新しいことが自分には難しすぎるように思えるとき、学ぼうとするのを避けてしまう</p>
            <input id="radio-31" type="radio" name="q[2]" value="1" required>
            <label for="radio-31">とてもあてはまる</label><br>
            <input id="radio-32" type="radio" name="q[2]" value="2" required>
            <label for="radio-32">あてはまる</label><br>
            <input id="radio-33" type="radio" name="q[2]" value="3" required>
            <label for="radio-33">わからない</label><br>
            <input id="radio-34" type="radio" name="q[2]" value="4" required>
            <label for="radio-34">あまりあてはまらない</label><br>
            <input id="radio-35" type="radio" name="q[2]" value="5" required>
            <label for="radio-35">まったくそう思わない</label><br>
          </div>

          <div>
          <p>４. あなたは最近、常にいらいらしたり高ぶったりしていますか</p>
          <input id="radio-41" type="radio" name="q[3]" value="1" required>
          <label for="radio-41">とてもあてはまる</label><br>
          <input id="radio-42" type="radio" name="q[3]" value="2" required>
          <label for="radio-42">あてはまる</label><br>
          <input id="radio-43" type="radio" name="q[3]" value="3" required>
          <label for="radio-43">わからない</label><br>
          <input id="radio-44" type="radio" name="q[3]" value="4" required>
          <label for="radio-44">あまりあてはまらない</label><br>
          <input id="radio-45" type="radio" name="q[3]" value="5" required>
          <label for="radio-45">あてはまらない</label><br>
          </div>

          <div>
          <p>５. 私はもっと自分のことを尊重できたらと思う</p>
            <input id="radio-51" type="radio" name="q[4]" value="1" required>
            <label for="radio-51">とてもあてはまる</label><br>
            <input id="radio-52" type="radio" name="q[4]" value="2" required>
            <label for="radio-52">あてはまる</label><br>
            <input id="radio-53" type="radio" name="q[4]" value="3" required>
            <label for="radio-53">わからない</label><br>
            <input id="radio-54" type="radio" name="q[4]" value="4" required>
            <label for="radio-54">あまりあてはまらない</label><br>
            <input id="radio-55" type="radio" name="q[4]" value="5" required>
            <label for="radio-55">あてはまらない</label><br>
          </div>

          <div>
          <p>６.私は時おり、役に立たない人間であると感じる</p>
            <input id="radio-61" type="radio" name="q[5]" value="1" required>
            <label for="radio-61">とてもあてはまる</label><br>
            <input id="radio-62" type="radio" name="q[5]" value="2" required>
            <label for="radio-62">あてはまる</label><br>
            <input id="radio-63" type="radio" name="q[5]" value="3" required>
            <label for="radio-63">わからない</label><br>
            <input id="radio-64" type="radio" name="q[5]" value="4" required>
            <label for="radio-64">あまりあてはまらない</label><br>
            <input id="radio-65" type="radio" name="q[5]" value="5" required>
            <label for="radio-65">あてはまらない</label><br>
          </div>

          <div>
          <p>７.あなたは最近、全てのことから逃れ死んでしまいたいと思ったことはありますか。</p>
          <input id="radio-71" type="radio" name="q[6]" value="1" required>
          <label for="radio-71">とてもあてはまる</label><br>
          <input id="radio-72" type="radio" name="q[6]" value="2" required>
          <label for="radio-72">あてはまる</label><br>
          <input id="radio-73" type="radio" name="q[6]" value="3" required>
          <label for="radio-73">わからない</label><br>
          <input id="radio-74" type="radio" name="q[6]" value="4" required>
          <label for="radio-74">あまりあてはまらない</label><br>
          <input id="radio-75" type="radio" name="q[6]" value="5" required>
          <label for="radio-75">あてはまらない</label><br>
          </div>

          <div>
          <p>８.私は時々誇るべきところがほとんどないと感じる
          </p>
            <input id="radio-81" type="radio" name="q[7]" value="1" required>
            <label for="radio-81">とてもあてはまる</label><br>
            <input id="radio-82" type="radio" name="q[7]" value="2" required>
            <label for="radio-82">あてはまる</label><br>
            <input id="radio-83" type="radio" name="q[7]" value="3" required>
            <label for="radio-83">わからない</label><br>
            <input id="radio-84" type="radio" name="q[7]" value="4" required>
            <label for="radio-84">あまりあてはまらない</label><br>
            <input id="radio-85" type="radio" name="q[7]" value="5" required>
            <label for="radio-85">あてはまらない</label><br>
          </div>

          <div>
          <p>9.私は時おり自分は全くダメだと思う

          </p>
            <input id="radio-91" type="radio" name="q[8]" value="1" required>
            <label for="radio-91">とてもあてはまる</label><br>
            <input id="radio-92" type="radio" name="q[8]" value="2" required>
            <label for="radio-92">あてはまる</label><br>
            <input id="radio-93" type="radio" name="q[8]" value="3" required>
            <label for="radio-93">わからない</label><br>
            <input id="radio-94" type="radio" name="q[8]" value="4" required>
            <label for="radio-94">あまりあてはまらない</label><br>
            <input id="radio-95" type="radio" name="q[8]" value="5" required>
            <label for="radio-95">あてはまらない</label><br>
          </div>

          <div>
          <p>10.あなたは最近元気がなく落ち込んでいると感じていますか</p>
          <input id="radio-101" type="radio" name="q[9]" value="1" required>
          <label for="radio-101">とてもあてはまる</label><br>
          <input id="radio-102" type="radio" name="q[9]" value="2" required>
          <label for="radio-102">あてはまる</label><br>
          <input id="radio-103" type="radio" name="q[9]" value="3" required>
          <label for="radio-103">わからない</label><br>
          <input id="radio-104" type="radio" name="q[9]" value="4" required>
          <label for="radio-104">あまりあてはまらない</label><br>
          <input id="radio-105" type="radio" name="q[9]" value="5" required>
          <label for="radio-105">あてはまらない</label><br>
          </div>

          <div>
          <p>11.あなたは最近すべてのことが自分にのしかかっていると感じていますか</p>
          <input id="radio-111" type="radio" name="q[10]" value="1" required>
          <label for="radio-111">とてもあてはまる</label><br>
          <input id="radio-112" type="radio" name="q[10]" value="2" required>
          <label for="radio-112">あてはまる</label><br>
          <input id="radio-113" type="radio" name="q[10]" value="3" required>
          <label for="radio-113">わからない</label><br>
          <input id="radio-114" type="radio" name="q[10]" value="4" required>
          <label for="radio-114">あまりあてはまらない</label><br>
          <input id="radio-115" type="radio" name="q[10]" value="5" required>
          <label for="radio-115">あてはまらない</label><br>
          </div>

          <div>
            <p>12. 聴覚障害のことでいやな思いをすることはほとんどない</p>
            <input id="radio-121" type="radio" name="q[11]" value="1" required>
            <label for="radio-121">とてもあてはまる</label><br>
            <input id="radio-122" type="radio" name="q[11]" value="2" required>
            <label for="radio-122">あてはまる</label><br>
            <input id="radio-123" type="radio" name="q[11]" value="3" required>
            <label for="radio-123">わからない</label><br>
            <input id="radio-124" type="radio" name="q[11]" value="4" required>
            <label for="radio-124">あまりあてはまらない</label><br>
            <input id="radio-125" type="radio" name="q[11]" value="5" required>
            <label for="radio-125">まったくそう思わない</label><br>
          </div>
          <div>
            <p>13. 聴者にできて私にできないことがあっても別に気にしない</p>
            <input id="radio-131" type="radio" name="q[12]" value="1" required>
            <label for="radio-131">とてもあてはまる</label><br>
            <input id="radio-132" type="radio" name="q[12]" value="2" required>
            <label for="radio-132">あてはまる</label><br>
            <input id="radio-133" type="radio" name="q[12]" value="3" required>
            <label for="radio-133">わからない</label><br>
            <input id="radio-134" type="radio" name="q[12]" value="4" required>
            <label for="radio-134">あまりあてはまらない</label><br>
            <input id="radio-135" type="radio" name="q[12]" value="5" required>
            <label for="radio-135">まったくそう思わない</label><br>
          </div>

          <div>
            <p>14. 私は自分の能力に満足しており、耳のことでさほど悩むことはない
          </p>
            <input id="radio-141" type="radio" name="q[13]" value="1" required>
            <label for="radio-141">とてもあてはまる</label><br>
            <input id="radio-142" type="radio" name="q[13]" value="2" required>
            <label for="radio-142">あてはまる</label><br>
            <input id="radio-143" type="radio" name="q[13]" value="3" required>
            <label for="radio-143">わからない</label><br>
            <input id="radio-144" type="radio" name="q[13]" value="4" required>
            <label for="radio-144">あまりあてはまらない</label><br>
            <input id="radio-145" type="radio" name="q[13]" value="5" required>
            <label for="radio-145">まったくそう思わない</label><br>
          </div>
          <div>
            <p>15. 聴覚障害であってもしたいことはできるし、なりたい人間になることもできる</p>
            <input id="radio-151" type="radio" name="q[14]" value="1" required>
            <label for="radio-151">とてもあてはまる</label><br>
            <input id="radio-152" type="radio" name="q[14]" value="2" required>
            <label for="radio-152">あてはまる</label><br>
            <input id="radio-153" type="radio" name="q[14]" value="3" required>
            <label for="radio-153">わからない</label><br>
            <input id="radio-154" type="radio" name="q[14]" value="4" required>
            <label for="radio-154">あまりあてはまらない</label><br>
            <input id="radio-155" type="radio" name="q[14]" value="5" required>
            <label for="radio-155">まったくそう思わない</label><br>
          </div>
          <div>
            <p>16. 聴覚障害のことばかり考えてひどく落ち込むことは,ほとんどない</p>
            <input id="radio-161" type="radio" name="q[15]" value="1" required>
            <label for="radio-161">とてもあてはまる</label><br>
            <input id="radio-162" type="radio" name="q[15]" value="2" required>
            <label for="radio-162">あてはまる</label><br>
            <input id="radio-163" type="radio" name="q[15]" value="3" required>
            <label for="radio-163">わからない</label><br>
            <input id="radio-164" type="radio" name="q[15]" value="4" required>
            <label for="radio-164">あまりあてはまらない</label><br>
            <input id="radio-165" type="radio" name="q[15]" value="5" required>
            <label for="radio-165">まったくそう思わない</label><br>
          </div>
          <div>
            <p>17. 聴覚障害であっても私はいろんなことを楽しんでいる</p>
            <input id="radio-171" type="radio" name="q[16]" value="1" required>
            <label for="radio-171">とてもあてはまる</label><br>
            <input id="radio-172" type="radio" name="q[16]" value="2" required>
            <label for="radio-172">あてはまる</label><br>
            <input id="radio-173" type="radio" name="q[16]" value="3" required>
            <label for="radio-173">わからない</label><br>
            <input id="radio-174" type="radio" name="q[16]" value="4" required>
            <label for="radio-174">あまりあてはまらない</label><br>
            <input id="radio-175" type="radio" name="q[16]" value="5" required>
            <label for="radio-175">まったくそう思わない</label><br>
          </div>

          <div>
          <p>18. あなたは最近、いつも緊張していると感じていますか</p>
          <input id="radio-181" type="radio" name="q[17]" value="1" required>
          <label for="radio-181">とてもあてはまる</label><br>
          <input id="radio-182" type="radio" name="q[17]" value="2" required>
          <label for="radio-182">あてはまる</label><br>
          <input id="radio-183" type="radio" name="q[17]" value="3" required>
          <label for="radio-183">わからない</label><br>
          <input id="radio-184" type="radio" name="q[17]" value="4" required>
          <label for="radio-184">あまりあてはまらない</label><br>
          <input id="radio-185" type="radio" name="q[17]" value="5" required>
          <label for="radio-185">あてはまらない</label><br>
          </div>
          <div>
            <p>19. 聴覚障害者は一般的に自分に満足していない人が多い</p>
            <input id="radio-191" type="radio" name="q[18]" value="1" required>
            <label for="radio-191">とてもそう思う</label><br>
            <input id="radio-192" type="radio" name="q[18]" value="2" required>
            <label for="radio-192">そう思う</label><br>
            <input id="radio-193" type="radio" name="q[18]" value="3" required>
            <label for="radio-193">わからない</label><br>
            <input id="radio-194" type="radio" name="q[18]" value="4" required>
            <label for="radio-194">あまりそう思わない</label><br>
            <input id="radio-195" type="radio" name="q[18]" value="5" required>
            <label for="radio-195">まったくそう思わない</label><br>
          </div>

          <div>
            <p>20. 聴覚障害者は一般的に聴覚を失うことは最悪の出来事だと思っている人が多い</p>
            <input id="radio-201" type="radio" name="q[19]" value="1" required>
            <label for="radio-201">とてもそう思う</label><br>
            <input id="radio-202" type="radio" name="q[19]" value="2" required>
            <label for="radio-202">そう思う</label><br>
            <input id="radio-203" type="radio" name="q[19]" value="3" required>
            <label for="radio-203">わからない</label><br>
            <input id="radio-204" type="radio" name="q[19]" value="4" required>
            <label for="radio-204">あまりそう思わない</label><br>
            <input id="radio-205" type="radio" name="q[19]" value="5" required>
            <label for="radio-205">まったくそう思わない</label><br>
          </div>

          <div>
            <p>21. 聴覚障害者は聴者よりも落ち込みやすい</p>
            <input id="radio-211" type="radio" name="q[20]" value="1" required>
            <label for="radio-211">とてもそう思う</label><br>
            <input id="radio-212" type="radio" name="q[20]" value="2" required>
            <label for="radio-212">そう思う</label><br>
            <input id="radio-213" type="radio" name="q[20]" value="3" required>
            <label for="radio-213">わからない</label><br>
            <input id="radio-214" type="radio" name="q[20]" value="4" required>
            <label for="radio-214">あまりそう思わない</label><br>
            <input id="radio-215" type="radio" name="q[20]" value="5" required>
            <label for="radio-215">まったくそう思わない</label><br>
          </div>

          <div>
            <p>22.ほとんどの聴覚障害者は多くの事柄を自分の胸にしまい込んでいる</p>
            <input id="radio-221" type="radio" name="q[21]" value="1" required>
            <label for="radio-221">とてもそう思う</label><br>
            <input id="radio-222" type="radio" name="q[21]" value="2" required>
            <label for="radio-222">そう思う</label><br>
            <input id="radio-223" type="radio" name="q[21]" value="3" required>
            <label for="radio-223">わからない</label><br>
            <input id="radio-224" type="radio" name="q[21]" value="4" required>
            <label for="radio-224">あまりそう思わない</label><br>
            <input id="radio-225" type="radio" name="q[21]" value="5" required>
            <label for="radio-225">まったくそう思わない</label><br>
          </div>

          <div>
          <p>23. あなたは最近、まったく気力がなくて何もできないと感じたことがありますか</p>
          <input id="radio-231" type="radio" name="q[22]" value="1" required>
          <label for="radio-231">とてもあてはまる</label><br>
          <input id="radio-232" type="radio" name="q[22]" value="2" required>
          <label for="radio-232">あてはまる</label><br>
          <input id="radio-233" type="radio" name="q[22]" value="3" required>
          <label for="radio-233">わからない</label><br>
          <input id="radio-234" type="radio" name="q[22]" value="4" required>
          <label for="radio-234">あまりあてはまらない</label><br>
          <input id="radio-235" type="radio" name="q[22]" value="5" required>
          <label for="radio-235">あてはまらない</label><br>
          </div>

          <div>
            <p>24. これまでの成功はたまたま状況がうまく整っていたのである</p>
            <input id="radio-241" type="radio" name="q[23]" value="1" required>
            <label for="radio-241">いつも思う</label><br>
            <input id="radio-242" type="radio" name="q[23]" value="2" required>
            <label for="radio-242">しばしば思う</label><br>
            <input id="radio-243" type="radio" name="q[23]" value="3" required>
            <label for="radio-243">時々思う</label><br>
            <input id="radio-244" type="radio" name="q[23]" value="4" required>
            <label for="radio-244">ほとんど思わない</label><br>
            <input id="radio-245" type="radio" name="q[23]" value="5" required>
            <label for="radio-245">まったくそう思わない</label><br>
          </div>
          <div>
            <p>25. これまでの成功は幸運によるものである</p>
            <input id="radio-251" type="radio" name="q[24]" value="1" required>
            <label for="radio-251">いつも思う</label><br>
            <input id="radio-252" type="radio" name="q[24]" value="2" required>
            <label for="radio-252">しばしば思う</label><br>
            <input id="radio-253" type="radio" name="q[24]" value="3" required>
            <label for="radio-253">時々思う</label><br>
            <input id="radio-254" type="radio" name="q[24]" value="4" required>
            <label for="radio-254">ほとんど思わない</label><br>
            <input id="radio-255" type="radio" name="q[24]" value="5" required>
            <label for="radio-255">まったくそう思わない</label><br>
          </div>
          <div>
            <p>26. 物事がうまくいくのは単に幸運だからである
          </p>
            <input id="radio-261" type="radio" name="q[25]" value="1" required>
            <label for="radio-261">いつも思う</label><br>
            <input id="radio-262" type="radio" name="q[25]" value="2" required>
            <label for="radio-262">しばしば思う</label><br>
            <input id="radio-263" type="radio" name="q[25]" value="3" required>
            <label for="radio-263">時々思う</label><br>
            <input id="radio-264" type="radio" name="q[25]" value="4" required>
            <label for="radio-264">ほとんど思わない</label><br>
            <input id="radio-265" type="radio" name="q[25]" value="5" required>
            <label for="radio-265">まったくそう思わない</label><br>
          </div>
          <div>
            <p>27.これまでの成功は外からの影響によるものである
          </p>
            <input id="radio-271" type="radio" name="q[26]" value="1" required>
            <label for="radio-271">いつも思う</label><br>
            <input id="radio-272" type="radio" name="q[26]" value="2" required>
            <label for="radio-272">しばしば思う</label><br>
            <input id="radio-273" type="radio" name="q[26]" value="3" required>
            <label for="radio-273">時々思う</label><br>
            <input id="radio-274" type="radio" name="q[26]" value="4" required>
            <label for="radio-274">ほとんど思わない</label><br>
            <input id="radio-275" type="radio" name="q[26]" value="5" required>
            <label for="radio-275">まったくそう思わない</label><br>
          </div>

          <div>
            <p>28. ものごとがうまくいくのは世の中が私を助けてくれるからである</p>
            <input id="radio-281" type="radio" name="q[27]" value="1" required>
            <label for="radio-281">いつも思う</label><br>
            <input id="radio-282" type="radio" name="q[27]" value="2" required>
            <label for="radio-282">しばしば思う</label><br>
            <input id="radio-283" type="radio" name="q[27]" value="3" required>
            <label for="radio-283">時々思う</label><br>
            <input id="radio-284" type="radio" name="q[27]" value="4" required>
            <label for="radio-284">ほとんど思わない</label><br>
            <input id="radio-285" type="radio" name="q[27]" value="5" required>
            <label for="radio-285">まったくそう思わない</label><br>
          </div>

          <p>全ての質問に答えた場合のみ次へ進めます。</p>
          <p>次のページが最後の質問ページです。</p>
          <input type="submit" value="次へ">
        </form>
      </div>
    </div>
  </div>
</body>
</html>
