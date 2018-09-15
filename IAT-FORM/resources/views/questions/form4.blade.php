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
        <p>次の項目についてあなたがどの程度同意するか、お答えください。</p>
        <p>※なお、ここでは「障害（者）」とは「聴覚障害（者）」をさします。</p>
        <form action="{{ url('questions') }}" method="post">
          @csrf
          @method('POST')
          <input type="hidden" name="block_id" value="{{$block_id}}">
          <div>
            <p>1.　聴覚障害のある子どもの親は、健聴の子どもの親よりも寛容であるべきだ</p>
            <input id="radio-11" type="radio" name="q[0]" value="1" required>
            <label for="radio-11">まったくそう思う</label><br>
            <input id="radio-12" type="radio" name="q[0]" value="2" required>
            <label for="radio-12">かなりそう思う</label><br>
            <input id="radio-13" type="radio" name="q[0]" value="3" required>
            <label for="radio-13">少しそう思う</label><br>
            <input id="radio-14" type="radio" name="q[0]" value="4" required>
            <label for="radio-14">少しそう思わない</label><br>
            <input id="radio-15" type="radio" name="q[0]" value="5" required>
            <label for="radio-15">あまりそう思わない</label><br>
            <input id="radio-16" type="radio" name="q[0]" value="6" required>
            <label for="radio-16">まったくそう思わない</label><br>
          </div>
          <div>
            <p>2．聴覚障害者は障害のない人とおなじくらい優秀だ</p>
            <input id="radio-21" type="radio" name="q[1]" value="1" required>
            <label for="radio-21">まったくそう思う</label><br>
            <input id="radio-22" type="radio" name="q[1]" value="2" required>
            <label for="radio-22">かなりそう思う</label><br>
            <input id="radio-23" type="radio" name="q[1]" value="3" required>
            <label for="radio-23">少しそう思う</label><br>
            <input id="radio-24" type="radio" name="q[1]" value="4" required>
            <label for="radio-24">少しそう思わない</label><br>
            <input id="radio-25" type="radio" name="q[1]" value="5" required>
            <label for="radio-25">あまりそう思わない</label><br>
            <input id="radio-26" type="radio" name="q[1]" value="6" required>
            <label for="radio-26">まったくそう思わない</label><br>
          </div>
          <div>
            <p>3．ほとんどの聴覚障害者は、聴者に比べて、人とうまくやっている</p>
            <input id="radio-31" type="radio" name="q[2]" value="1" required>
            <label for="radio-31">まったくそう思う</label><br>
            <input id="radio-32" type="radio" name="q[2]" value="2" required>
            <label for="radio-32">かなりそう思う</label><br>
            <input id="radio-33" type="radio" name="q[2]" value="3" required>
            <label for="radio-33">少しそう思う</label><br>
            <input id="radio-34" type="radio" name="q[2]" value="4" required>
            <label for="radio-34">少しそう思わない</label><br>
            <input id="radio-35" type="radio" name="q[2]" value="5" required>
            <label for="radio-35">あまりそう思わない</label><br>
            <input id="radio-36" type="radio" name="q[2]" value="6" required>
            <label for="radio-36">まったくそう思わない</label><br>
          </div>
          <div>
            <p>4．ほとんどの聴覚障害者は自分自身をかわいそうに思っている</p>
            <input id="radio-41" type="radio" name="q[3]" value="1" required>
            <label for="radio-41">まったくそう思う</label><br>
            <input id="radio-42" type="radio" name="q[3]" value="2" required>
            <label for="radio-42">かなりそう思う</label><br>
            <input id="radio-43" type="radio" name="q[3]" value="3" required>
            <label for="radio-43">少しそう思う</label><br>
            <input id="radio-44" type="radio" name="q[3]" value="4" required>
            <label for="radio-44">少しそう思わない</label><br>
            <input id="radio-45" type="radio" name="q[3]" value="5" required>
            <label for="radio-45">あまりそう思わない</label><br>
            <input id="radio-46" type="radio" name="q[3]" value="6" required>
            <label for="radio-46">まったくそう思わない</label><br>
          </div>
          <div>
            <p>5．聴覚障害者は他の人と同じだ</p>
            <input id="radio-51" type="radio" name="q[4]" value="1" required>
            <label for="radio-51">まったくそう思う</label><br>
            <input id="radio-52" type="radio" name="q[4]" value="2" required>
            <label for="radio-52">かなりそう思う</label><br>
            <input id="radio-53" type="radio" name="q[4]" value="3" required>
            <label for="radio-53">少しそう思う</label><br>
            <input id="radio-54" type="radio" name="q[4]" value="4" required>
            <label for="radio-54">少しそう思わない</label><br>
            <input id="radio-55" type="radio" name="q[4]" value="5" required>
            <label for="radio-55">あまりそう思わない</label><br>
            <input id="radio-56" type="radio" name="q[4]" value="6" required>
            <label for="radio-56">まったくそう思わない</label><br>
          </div>
          <div>
            <p>6．耳に障害のある子どものための特別な学校・学級・コースを設置すべきである</p>
            <input id="radio-61" type="radio" name="q[5]" value="1" required>
            <label for="radio-61">まったくそう思う</label><br>
            <input id="radio-62" type="radio" name="q[5]" value="2" required>
            <label for="radio-62">かなりそう思う</label><br>
            <input id="radio-63" type="radio" name="q[5]" value="3" required>
            <label for="radio-63">少しそう思う</label><br>
            <input id="radio-64" type="radio" name="q[5]" value="4" required>
            <label for="radio-64">少しそう思わない</label><br>
            <input id="radio-65" type="radio" name="q[5]" value="5" required>
            <label for="radio-65">あまりそう思わない</label><br>
            <input id="radio-66" type="radio" name="q[5]" value="6" required>
            <label for="radio-66">まったくそう思わない</label><br>
          </div>
          <div>
            <p>7．聴覚障害のある人にとって、特別なコミュニティーで暮らし働くことが最善だろう。</p>
            <input id="radio-71" type="radio" name="q[6]" value="1" required>
            <label for="radio-71">まったくそう思う</label><br>
            <input id="radio-72" type="radio" name="q[6]" value="2" required>
            <label for="radio-72">かなりそう思う</label><br>
            <input id="radio-73" type="radio" name="q[6]" value="3" required>
            <label for="radio-73">少しそう思う</label><br>
            <input id="radio-74" type="radio" name="q[6]" value="4" required>
            <label for="radio-74">少しそう思わない</label><br>
            <input id="radio-75" type="radio" name="q[6]" value="5" required>
            <label for="radio-75">あまりそう思わない</label><br>
            <input id="radio-76" type="radio" name="q[6]" value="6" required>
            <label for="radio-76">まったくそう思わない</label><br>
          </div>
          <div>
            <p>8．障害者を支援するのは政府の責任である</p>
            <input id="radio-81" type="radio" name="q[7]" value="1" required>
            <label for="radio-81">まったくそう思う</label><br>
            <input id="radio-82" type="radio" name="q[7]" value="2" required>
            <label for="radio-82">かなりそう思う</label><br>
            <input id="radio-83" type="radio" name="q[7]" value="3" required>
            <label for="radio-83">少しそう思う</label><br>
            <input id="radio-84" type="radio" name="q[7]" value="4" required>
            <label for="radio-84">少しそう思わない</label><br>
            <input id="radio-85" type="radio" name="q[7]" value="5" required>
            <label for="radio-85">あまりそう思わない</label><br>
            <input id="radio-86" type="radio" name="q[7]" value="6" required>
            <label for="radio-86">まったくそう思わない</label><br>
          </div>
          <div>
            <p>9．ほとんどの障害者はとても悩んでいるというわけではない</p>
            <input id="radio-91" type="radio" name="q[8]" value="1" required>
            <label for="radio-91">まったくそう思う</label><br>
            <input id="radio-92" type="radio" name="q[8]" value="2" required>
            <label for="radio-92">かなりそう思う</label><br>
            <input id="radio-93" type="radio" name="q[8]" value="3" required>
            <label for="radio-93">少しそう思う</label><br>
            <input id="radio-94" type="radio" name="q[8]" value="4" required>
            <label for="radio-94">少しそう思わない</label><br>
            <input id="radio-95" type="radio" name="q[8]" value="5" required>
            <label for="radio-95">あまりそう思わない</label><br>
            <input id="radio-96" type="radio" name="q[8]" value="6" required>
            <label for="radio-96">まったくそう思わない</label><br>
          </div>
          <div>
            <p>10．障害者は健常者と同じ基準を求めるられるべきではない</p>
            <input id="radio-101" type="radio" name="q[9]" value="1" required>
            <label for="radio-101">まったくそう思う</label><br>
            <input id="radio-102" type="radio" name="q[9]" value="2" required>
            <label for="radio-102">かなりそう思う</label><br>
            <input id="radio-103" type="radio" name="q[9]" value="3" required>
            <label for="radio-103">少しそう思う</label><br>
            <input id="radio-104" type="radio" name="q[9]" value="4" required>
            <label for="radio-104">少しそう思わない</label><br>
            <input id="radio-105" type="radio" name="q[9]" value="5" required>
            <label for="radio-105">あまりそう思わない</label><br>
            <input id="radio-106" type="radio" name="q[9]" value="6" required>
            <label for="radio-106">まったくそう思わない</label><br>
          </div>
          <div>
            <p>11．聴覚障害者は聴者と同じくらい幸せだ</p>
            <input id="radio-111" type="radio" name="q[10]" value="1" required>
            <label for="radio-111">まったくそう思う</label><br>
            <input id="radio-112" type="radio" name="q[10]" value="2" required>
            <label for="radio-112">かなりそう思う</label><br>
            <input id="radio-113" type="radio" name="q[10]" value="3" required>
            <label for="radio-113">少しそう思う</label><br>
            <input id="radio-114" type="radio" name="q[10]" value="4" required>
            <label for="radio-114">少しそう思わない</label><br>
            <input id="radio-115" type="radio" name="q[10]" value="5" required>
            <label for="radio-115">あまりそう思わない</label><br>
            <input id="radio-116" type="radio" name="q[10]" value="6" required>
            <label for="radio-116">まったくそう思わない</label><br>
          </div>
          <div>
            <p>12．重度の障害のある人は、軽度の障害のあるひとよりも、人とうまくやっていくことが難しいわけではない</p>
            <input id="radio-121" type="radio" name="q[11]" value="1" required>
            <label for="radio-121">まったくそう思う</label><br>
            <input id="radio-122" type="radio" name="q[11]" value="2" required>
            <label for="radio-122">かなりそう思う</label><br>
            <input id="radio-123" type="radio" name="q[11]" value="3" required>
            <label for="radio-123">少しそう思う</label><br>
            <input id="radio-124" type="radio" name="q[11]" value="4" required>
            <label for="radio-124">少しそう思わない</label><br>
            <input id="radio-125" type="radio" name="q[11]" value="5" required>
            <label for="radio-125">あまりそう思わない</label><br>
            <input id="radio-126" type="radio" name="q[11]" value="6" required>
            <label for="radio-126">まったくそう思わない</label><br>
          </div>
          <div>
            <p>13．障害のある人にとって、普通の生活をするのは困難だ</p>
            <input id="radio-131" type="radio" name="q[12]" value="1" required>
            <label for="radio-131">まったくそう思う</label><br>
            <input id="radio-132" type="radio" name="q[12]" value="2" required>
            <label for="radio-132">かなりそう思う</label><br>
            <input id="radio-133" type="radio" name="q[12]" value="3" required>
            <label for="radio-133">少しそう思う</label><br>
            <input id="radio-134" type="radio" name="q[12]" value="4" required>
            <label for="radio-134">少しそう思わない</label><br>
            <input id="radio-135" type="radio" name="q[12]" value="5" required>
            <label for="radio-135">あまりそう思わない</label><br>
            <input id="radio-136" type="radio" name="q[12]" value="6" required>
            <label for="radio-136">まったくそう思わない</label><br>
          </div>
          <div>
            <p>14．障害者には多くを望むべきではない</p>
            <input id="radio-141" type="radio" name="q[13]" value="1" required>
            <label for="radio-141">まったくそう思う</label><br>
            <input id="radio-142" type="radio" name="q[13]" value="2" required>
            <label for="radio-142">かなりそう思う</label><br>
            <input id="radio-143" type="radio" name="q[13]" value="3" required>
            <label for="radio-143">少しそう思う</label><br>
            <input id="radio-144" type="radio" name="q[13]" value="4" required>
            <label for="radio-144">少しそう思わない</label><br>
            <input id="radio-145" type="radio" name="q[13]" value="5" required>
            <label for="radio-145">あまりそう思わない</label><br>
            <input id="radio-146" type="radio" name="q[13]" value="6" required>
            <label for="radio-146">まったくそう思わない</label><br>
          </div>
          <div>
            <p>15．聴覚障害者は一人で過ごす時間が長くなりがちだ</p>
            <input id="radio-151" type="radio" name="q[14]" value="1" required>
            <label for="radio-151">まったくそう思う</label><br>
            <input id="radio-152" type="radio" name="q[14]" value="2" required>
            <label for="radio-152">かなりそう思う</label><br>
            <input id="radio-153" type="radio" name="q[14]" value="3" required>
            <label for="radio-153">少しそう思う</label><br>
            <input id="radio-154" type="radio" name="q[14]" value="4" required>
            <label for="radio-154">少しそう思わない</label><br>
            <input id="radio-155" type="radio" name="q[14]" value="5" required>
            <label for="radio-155">あまりそう思わない</label><br>
            <input id="radio-156" type="radio" name="q[14]" value="6" required>
            <label for="radio-156">まったくそう思わない</label><br>
          </div>
          <div>
            <p>16．聴覚障害のある人は聴者よりも動揺しやすい</p>
            <input id="radio-161" type="radio" name="q[15]" value="1" required>
            <label for="radio-161">まったくそう思う</label><br>
            <input id="radio-162" type="radio" name="q[15]" value="2" required>
            <label for="radio-162">かなりそう思う</label><br>
            <input id="radio-163" type="radio" name="q[15]" value="3" required>
            <label for="radio-163">少しそう思う</label><br>
            <input id="radio-164" type="radio" name="q[15]" value="4" required>
            <label for="radio-164">少しそう思わない</label><br>
            <input id="radio-165" type="radio" name="q[15]" value="5" required>
            <label for="radio-165">あまりそう思わない</label><br>
            <input id="radio-166" type="radio" name="q[15]" value="6" required>
            <label for="radio-166">まったくそう思わない</label><br>
          </div>
          <div>
            <p>17．聴覚障害者は普通の社会生活をおくることができる</p>
            <input id="radio-171" type="radio" name="q[16]" value="1" required>
            <label for="radio-171">まったくそう思う</label><br>
            <input id="radio-172" type="radio" name="q[16]" value="2" required>
            <label for="radio-172">かなりそう思う</label><br>
            <input id="radio-173" type="radio" name="q[16]" value="3" required>
            <label for="radio-173">少しそう思う</label><br>
            <input id="radio-174" type="radio" name="q[16]" value="4" required>
            <label for="radio-174">少しそう思わない</label><br>
            <input id="radio-175" type="radio" name="q[16]" value="5" required>
            <label for="radio-175">あまりそう思わない</label><br>
            <input id="radio-176" type="radio" name="q[16]" value="6" required>
            <label for="radio-176">まったくそう思わない</label><br>
          </div>
          <div>
            <p>18．ほとんどの聴覚障害者は、自分達が他の人より劣っていると思っている</p>
            <input id="radio-181" type="radio" name="q[17]" value="1" required>
            <label for="radio-181">まったくそう思う</label><br>
            <input id="radio-182" type="radio" name="q[17]" value="2" required>
            <label for="radio-182">かなりそう思う</label><br>
            <input id="radio-183" type="radio" name="q[17]" value="3" required>
            <label for="radio-183">少しそう思う</label><br>
            <input id="radio-184" type="radio" name="q[17]" value="4" required>
            <label for="radio-184">少しそう思わない</label><br>
            <input id="radio-185" type="radio" name="q[17]" value="5" required>
            <label for="radio-185">あまりそう思わない</label><br>
            <input id="radio-186" type="radio" name="q[17]" value="6" required>
            <label for="radio-186">まったくそう思わない</label><br>
          </div>
          <div>
            <p>19．聴者は、聴覚障害者と一緒にいるときには、その気持ちを傷つけないようにしてほしい</p>
            <input id="radio-191" type="radio" name="q[18]" value="1" required>
            <label for="radio-191">まったくそう思う</label><br>
            <input id="radio-192" type="radio" name="q[18]" value="2" required>
            <label for="radio-192">かなりそう思う</label><br>
            <input id="radio-193" type="radio" name="q[18]" value="3" required>
            <label for="radio-193">少しそう思う</label><br>
            <input id="radio-194" type="radio" name="q[18]" value="4" required>
            <label for="radio-194">少しそう思わない</label><br>
            <input id="radio-195" type="radio" name="q[18]" value="5" required>
            <label for="radio-195">あまりそう思わない</label><br>
            <input id="radio-196" type="radio" name="q[18]" value="6" required>
            <label for="radio-196">まったくそう思わない</label><br>
          </div>
          <div>
            <p>20．聴覚障害者は不平ばかり言う</p>
            <input id="radio-201" type="radio" name="q[19]" value="1" required>
            <label for="radio-201">まったくそう思う</label><br>
            <input id="radio-202" type="radio" name="q[19]" value="2" required>
            <label for="radio-202">かなりそう思う</label><br>
            <input id="radio-203" type="radio" name="q[19]" value="3" required>
            <label for="radio-203">少しそう思う</label><br>
            <input id="radio-204" type="radio" name="q[19]" value="4" required>
            <label for="radio-204">少しそう思わない</label><br>
            <input id="radio-205" type="radio" name="q[19]" value="5" required>
            <label for="radio-205">あまりそう思わない</label><br>
            <input id="radio-206" type="radio" name="q[19]" value="6" required>
            <label for="radio-206">まったくそう思わない</label><br>
          </div>

          <p>全ての質問に答えた場合のみ次へ進めます。</p>
          <input type="submit" value="次へ">
        </form>
      </div>
    </div>
  </div>
</body>
</html>
