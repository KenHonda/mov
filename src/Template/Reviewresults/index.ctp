<<<<<<< HEAD
<?php require_once('./top.php');
function json_safe_encode($data){
    return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
} ?>
<!--ロード、レーダー-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./js/load.js" type="text/javascript">
</script>
<!--IE用-->
<script type="text/javascript" src="./js/ie.js">
</script>
<script id="script" type="text/javascript" src="./js/rader.js"
 data-i11='<?php echo json_safe_encode($i11);?>' data-k11='<?php echo json_safe_encode($k11);?>' data-c11='<?php echo json_safe_encode($c11);?>' data-w11='<?php echo json_safe_encode($w11);?>' data-t11='<?php echo json_safe_encode($t11);?>' data-ki11='<?php echo json_safe_encode($ki11);?>'
 data-i14='<?php echo json_safe_encode($i14);?>' data-k14='<?php echo json_safe_encode($k14);?>' data-c14='<?php echo json_safe_encode($c14);?>' data-w14='<?php echo json_safe_encode($w14);?>' data-t14='<?php echo json_safe_encode($t14);?>' data-ki14='<?php echo json_safe_encode($ki14);?>'
 data-i15='<?php echo json_safe_encode($i15);?>' data-k15='<?php echo json_safe_encode($k15);?>' data-c15='<?php echo json_safe_encode($c15);?>' data-w15='<?php echo json_safe_encode($w15);?>' data-t15='<?php echo json_safe_encode($t15);?>' data-ki15='<?php echo json_safe_encode($ki15);?>'
 data-i16='<?php echo json_safe_encode($i16);?>' data-k16='<?php echo json_safe_encode($k16);?>' data-c16='<?php echo json_safe_encode($c16);?>' data-w16='<?php echo json_safe_encode($w16);?>' data-t16='<?php echo json_safe_encode($t16);?>' data-ki16='<?php echo json_safe_encode($ki16);?>'
 data-i17='<?php echo json_safe_encode($i17);?>' data-k17='<?php echo json_safe_encode($k17);?>' data-c17='<?php echo json_safe_encode($c17);?>' data-w17='<?php echo json_safe_encode($w17);?>' data-t17='<?php echo json_safe_encode($t17);?>' data-ki17='<?php echo json_safe_encode($ki17);?>'
 data-i18='<?php echo json_safe_encode($i18);?>' data-k18='<?php echo json_safe_encode($k18);?>' data-c18='<?php echo json_safe_encode($c18);?>' data-w18='<?php echo json_safe_encode($w18);?>' data-t18='<?php echo json_safe_encode($t18);?>' data-ki18='<?php echo json_safe_encode($ki18);?>'
 data-i19='<?php echo json_safe_encode($i19);?>' data-k19='<?php echo json_safe_encode($k19);?>' data-c19='<?php echo json_safe_encode($c19);?>' data-w19='<?php echo json_safe_encode($w19);?>' data-t19='<?php echo json_safe_encode($t19);?>' data-ki19='<?php echo json_safe_encode($ki19);?>'>
</script>
<script type="text/javascript" src="./js/slide.js">
</script>
<div id="loader-bg">
<div id="loader">
  <img src="./images/gif-load.gif" width="27px" height="27px" alt="Now Loading..." />
</div>
</div>
<div class="content" id="wrap">
  <div class="movrev_wrap">
    <h1 class="movrev_1">映画批評.com</h1>
  </div>
  <div class="tsuta_1_wrap">
  <img class="tsuta_1" src="./images/title.png" width="230px">
</div>
  <div class="top_menu_wrap">
    <div class="t_1">
      <a class="t_1_1" href="/mov/reviewresults">ホーム</a>
    </div>
    <div class="t_2">
      <a class="t_2_1" href="/mov/users/login">ログイン・新規登録</a>
    </div>
    <div class="t_3">
      <a class="t_3_1" href="/mov/reviewresults/category">映画カテゴリー</a>
    </div>
    <div class="t_4">
      <a class="t_4_1" href="/mov/reviewresults/release">現在上映中の作品</a>
    </div>
    <div class="t_5">
      <a class="t_5_1" href="/mov/reviewresults/rank">ランキング</a>
    </div>
    <div class="t_6">
      <a class="t_6_1" href="/mov/reviewresults/academy">アカデミー賞作品</a>
=======
<?php
  $workname = 0;
  //var_dump($data);
?>

<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script id="script" type="text/javascript" src="js/rader.js"
 data-package='<?php echo $data;?>' >
</script>

<div class="content">
  <div style="margin: 20px 0px; font-size: 1.1rem; text-align: center;">
    映画批評サイト .beta
  </div>
  <div class="top_menu_wrap">
    <div class="t_1">
      <a class="t_1_1" href="/reviewresults">ホーム</a>
    </div>
    <div class="t_2">
      <a class="t_2_1" href="/users/login">ログイン・新規登録</a>
    </div>
    <div class="t_3">
      <a class="t_3_1" href="/reviewresults/category">映画カテゴリー</a>
    </div>
    <div class="t_4">
      <a class="t_4_1" href="/reviewresults/release01">現在上映中の作品</a>
    </div>
    <div class="t_5">
      <a class="t_5_1" href="/reviewresults/academy">アカデミー賞作品</a>
>>>>>>> rebase前
    </div>
  </div>
  <!-- レーダーチャート -->
  <div class="l_1">
<<<<<<< HEAD
  <div id="fan_1"><a class="hoge" href="reviewresults/sakuhin?id=fant">ファンタスティック・ビーストと魔法の旅</a></div><div id="rogue_1"><a class="hoge" href="reviewresults/sakuhin?id=starwars">ローグ・ワン/スターウォーズストーリー</a></div></div>
  <div class="sample1"><canvas width="300" height="300" id="sample11"></canvas></div>
  <div class="sample2"><canvas width="300" height="300" id="sample16"></canvas></div>
  <img class="tatekou" src="images/tatekou.png" width="180px">
  <div class="l_2">
  <div id="bio_1"><a class="hoge" href="reviewresults/sakuhin?id=final">バイオハザード:ザ・ファイナル</a></div>
  <div id="kai_1"><a class="hoge" href="reviewresults/sakuhin?id=kaizoku">海賊と呼ばれた男</a></div><br></div>
  <div class="sample3"><canvas width="300" height="300" id="sample14"></canvas></div>
  <div class="sample4"><canvas width="300" height="300" id="sample15"></canvas></div>
  <div class="l_3"><div id="ner_1"><a class="hoge" href="reviewresults/sakuhin?id=nerve">NERVE ナーヴ 世界で一番危険なゲーム</a></div>
  <div id="hon_1"><a class="hoge" href="reviewresults/sakuhin?id=honnoji">本能寺ホテル</a></div>
  <div id="dor_1"><a class="hoge" href="reviewresults/sakuhin?id=doryunouta">土竜の唄 香港狂騒曲</a></div></div>
  <div class="sample5"><canvas width="300" height="300" id="sample18"></canvas></div>
  <div class="sample6"><canvas width="300" height="300" id="sample19"></canvas></div>
  <div class="sample7"><canvas width="300" height="300" id="sample17"></canvas></div>
=======
    <div id="fan_1">
      <a class="hoge" href="reviewresults/sakuhin?id=fant">
        ファンタスティック・ビーストと魔法の旅
      </a>
    </div>
    <div id="rogue_1">
      <a class="hoge" href="reviewresults/sakuhin?id=starwars">
        ローグ・ワン/スターウォーズストーリー
      </a>
    </div>
  </div>
  <div class="sample1">
    <canvas width="300" height="300" id="sample11"></canvas>
  </div>
  <div class="sample2">
    <canvas width="300" height="300" id="sample16"></canvas>
  </div>
  <img class="tatekou" src="images/tatekou.png" width="180px">
  <div class="l_2">
    <div id="bio_1">
      <a class="hoge" href="reviewresults/sakuhin?id=final">
        バイオハザード:ザ・ファイナル
      </a>
    </div>
    <div id="kai_1">
      <a class="hoge" href="reviewresults/sakuhin?id=kaizoku">
        海賊と呼ばれた男
      </a>
    </div>
    <br>
  </div>
  <div class="sample3">
    <canvas width="300" height="300" id="sample14"></canvas>
  </div>
  <div class="sample4">
    <canvas width="300" height="300" id="sample15"></canvas>
  </div>
  <div class="l_3">
    <div id="ner_1">
      <a class="hoge" href="reviewresults/sakuhin?id=nerve">
        NERVE ナーヴ 世界で一番危険なゲーム
      </a>
    </div>
    <div id="hon_1">
      <a class="hoge" href="reviewresults/sakuhin?id=honnoji">
        本能寺ホテル
      </a>
    </div>
    <div id="dor_1">
      <a class="hoge" href="reviewresults/sakuhin?id=doryunouta">
        土竜の唄 香港狂騒曲
      </a>
    </div>
  </div>
  <div class="sample5">
    <canvas width="300" height="300" id="sample18"></canvas>
  </div>
  <div class="sample6">
    <canvas width="300" height="300" id="sample19"></canvas>
  </div>
  <div class="sample7">
    <canvas width="300" height="300" id="sample17"></canvas>
  </div>
>>>>>>> rebase前
</div>
