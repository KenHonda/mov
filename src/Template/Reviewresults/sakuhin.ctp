<?php
$flag_2 = NULL;
<<<<<<< HEAD
require_once('./sakuhi.php');
function json_safe_encode($data){
    return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
}
=======
>>>>>>> rebase前
if($this->request->session()->check('flag_2')){
$flag_2 = $this->request->session()->consume('flag_2');
}
if($flag_2 == 'success'){ ?>
<script>
alert('投稿されました');
</script>
<?php }elseif($flag_2 == 'failed'){ ?>
<script>
alert('エラーがありました');
</script>
<?php } ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<<<<<<< HEAD
<script type="text/javascript" src="../js/load.js" ></script>
<script type="text/javascript" src="../js/slide.js"></script>
=======
<script type="text/javascript" src="../js/sakuhin.js" ></script>
>>>>>>> rebase前
<script type="text/javascript" src="../js/scroll.js"></script>
<script type="text/javascript" src="../js/jump_scroll.js"></script>
<!--IE用-->
<script type="text/javascript" src="../js/ie.js">
</script>
<!--その他レーダー-->
<script id="script" type="text/javascript" src="../js/sakuhin_rader.js"
<<<<<<< HEAD
 data-i1='<?php echo json_safe_encode($i{1});?>' data-k1='<?php echo json_safe_encode($k{1});?>' data-c1='<?php echo json_safe_encode($c{1});?>' data-w1='<?php echo json_safe_encode($w{1});?>' data-t1='<?php echo json_safe_encode($t{1});?>' data-ki1='<?php echo json_safe_encode($ki{1});?>'
 data-i2='<?php echo json_safe_encode($i{2});?>' data-k2='<?php echo json_safe_encode($k{2});?>' data-c2='<?php echo json_safe_encode($c{2});?>' data-w2='<?php echo json_safe_encode($w{2});?>' data-t2='<?php echo json_safe_encode($t{2});?>' data-ki2='<?php echo json_safe_encode($ki{2});?>'
 data-i3='<?php echo json_safe_encode($i{3});?>' data-k3='<?php echo json_safe_encode($k{3});?>' data-c3='<?php echo json_safe_encode($c{3});?>' data-w3='<?php echo json_safe_encode($w{3});?>' data-t3='<?php echo json_safe_encode($t{3});?>' data-ki3='<?php echo json_safe_encode($ki{3});?>'
 data-i4='<?php echo json_safe_encode($i{4});?>' data-k4='<?php echo json_safe_encode($k{4});?>' data-c4='<?php echo json_safe_encode($c{4});?>' data-w4='<?php echo json_safe_encode($w{4});?>' data-t4='<?php echo json_safe_encode($t{4});?>' data-ki4='<?php echo json_safe_encode($ki{4});?>'
 data-i5='<?php echo json_safe_encode($i{5});?>' data-k5='<?php echo json_safe_encode($k{5});?>' data-c5='<?php echo json_safe_encode($c{5});?>' data-w5='<?php echo json_safe_encode($w{5});?>' data-t5='<?php echo json_safe_encode($t{5});?>' data-ki5='<?php echo json_safe_encode($ki{5});?>'
 data-i6='<?php echo json_safe_encode($i{6});?>' data-k6='<?php echo json_safe_encode($k{6});?>' data-c6='<?php echo json_safe_encode($c{6});?>' data-w6='<?php echo json_safe_encode($w{6});?>' data-t6='<?php echo json_safe_encode($t{6});?>' data-ki6='<?php echo json_safe_encode($ki{6});?>'
 data-i7='<?php echo json_safe_encode($i{7});?>' data-k7='<?php echo json_safe_encode($k{7});?>' data-c7='<?php echo json_safe_encode($c{7});?>' data-w7='<?php echo json_safe_encode($w{7});?>' data-t7='<?php echo json_safe_encode($t{7});?>' data-ki7='<?php echo json_safe_encode($ki{7});?>'
 data-i8='<?php echo json_safe_encode($i{8});?>' data-k8='<?php echo json_safe_encode($k{8});?>' data-c8='<?php echo json_safe_encode($c{8});?>' data-w8='<?php echo json_safe_encode($w{8});?>' data-t8='<?php echo json_safe_encode($t{8});?>' data-ki8='<?php echo json_safe_encode($ki{8});?>'
 data-i9='<?php echo json_safe_encode($i{9});?>' data-k9='<?php echo json_safe_encode($k{9});?>' data-c9='<?php echo json_safe_encode($c{9});?>' data-w9='<?php echo json_safe_encode($w{9});?>' data-t9='<?php echo json_safe_encode($t{9});?>' data-ki9='<?php echo json_safe_encode($ki{9});?>'
 data-i10='<?php echo json_safe_encode($i{10});?>' data-k10='<?php echo json_safe_encode($k{10});?>' data-c10='<?php echo json_safe_encode($c{10});?>' data-w10='<?php echo json_safe_encode($w{10});?>' data-t10='<?php echo json_safe_encode($t{10});?>' data-ki10='<?php echo json_safe_encode($ki{10});?>'
 data-i11='<?php echo json_safe_encode($i{11});?>' data-k11='<?php echo json_safe_encode($k{11});?>' data-c11='<?php echo json_safe_encode($c{11});?>' data-w11='<?php echo json_safe_encode($w{11});?>' data-t11='<?php echo json_safe_encode($t{11});?>' data-ki11='<?php echo json_safe_encode($ki{11});?>'
 data-i12='<?php echo json_safe_encode($i{12});?>' data-k12='<?php echo json_safe_encode($k{12});?>' data-c12='<?php echo json_safe_encode($c{12});?>' data-w12='<?php echo json_safe_encode($w{12});?>' data-t12='<?php echo json_safe_encode($t{12});?>' data-ki12='<?php echo json_safe_encode($ki{12});?>'
 data-i13='<?php echo json_safe_encode($i{13});?>' data-k13='<?php echo json_safe_encode($k{13});?>' data-c13='<?php echo json_safe_encode($c{13});?>' data-w13='<?php echo json_safe_encode($w{13});?>' data-t13='<?php echo json_safe_encode($t{13});?>' data-ki13='<?php echo json_safe_encode($ki{13});?>'
 data-i14='<?php echo json_safe_encode($i{14});?>' data-k14='<?php echo json_safe_encode($k{14});?>' data-c14='<?php echo json_safe_encode($c{14});?>' data-w14='<?php echo json_safe_encode($w{14});?>' data-t14='<?php echo json_safe_encode($t{14});?>' data-ki14='<?php echo json_safe_encode($ki{14});?>'
 data-i15='<?php echo json_safe_encode($i{15});?>' data-k15='<?php echo json_safe_encode($k{15});?>' data-c15='<?php echo json_safe_encode($c{15});?>' data-w15='<?php echo json_safe_encode($w{15});?>' data-t15='<?php echo json_safe_encode($t{15});?>' data-ki15='<?php echo json_safe_encode($ki{15});?>'
 data-i16='<?php echo json_safe_encode($i{16});?>' data-k16='<?php echo json_safe_encode($k{16});?>' data-c16='<?php echo json_safe_encode($c{16});?>' data-w16='<?php echo json_safe_encode($w{16});?>' data-t16='<?php echo json_safe_encode($t{16});?>' data-ki16='<?php echo json_safe_encode($ki{16});?>'
 data-i17='<?php echo json_safe_encode($i{17});?>' data-k17='<?php echo json_safe_encode($k{17});?>' data-c17='<?php echo json_safe_encode($c{17});?>' data-w17='<?php echo json_safe_encode($w{17});?>' data-t17='<?php echo json_safe_encode($t{17});?>' data-ki17='<?php echo json_safe_encode($ki{17});?>'
 data-i18='<?php echo json_safe_encode($i{18});?>' data-k18='<?php echo json_safe_encode($k{18});?>' data-c18='<?php echo json_safe_encode($c{18});?>' data-w18='<?php echo json_safe_encode($w{18});?>' data-t18='<?php echo json_safe_encode($t{18});?>' data-ki18='<?php echo json_safe_encode($ki{18});?>'
 data-i19='<?php echo json_safe_encode($i{19});?>' data-k19='<?php echo json_safe_encode($k{19});?>' data-c19='<?php echo json_safe_encode($c{19});?>' data-w19='<?php echo json_safe_encode($w{19});?>' data-t19='<?php echo json_safe_encode($t{19});?>' data-ki19='<?php echo json_safe_encode($ki{19});?>'
 data-i20='<?php echo json_safe_encode($i{20});?>' data-k20='<?php echo json_safe_encode($k{20});?>' data-c20='<?php echo json_safe_encode($c{20});?>' data-w20='<?php echo json_safe_encode($w{20});?>' data-t20='<?php echo json_safe_encode($t{20});?>' data-ki20='<?php echo json_safe_encode($ki{20});?>'
 data-i21='<?php echo json_safe_encode($i{21});?>' data-k21='<?php echo json_safe_encode($k{21});?>' data-c21='<?php echo json_safe_encode($c{21});?>' data-w21='<?php echo json_safe_encode($w{21});?>' data-t21='<?php echo json_safe_encode($t{21});?>' data-ki21='<?php echo json_safe_encode($ki{21});?>'
 data-i22='<?php echo json_safe_encode($i{22});?>' data-k22='<?php echo json_safe_encode($k{22});?>' data-c22='<?php echo json_safe_encode($c{22});?>' data-w22='<?php echo json_safe_encode($w{22});?>' data-t22='<?php echo json_safe_encode($t{22});?>' data-ki22='<?php echo json_safe_encode($ki{22});?>'
 data-i23='<?php echo json_safe_encode($i{23});?>' data-k23='<?php echo json_safe_encode($k{23});?>' data-c23='<?php echo json_safe_encode($c{23});?>' data-w23='<?php echo json_safe_encode($w{23});?>' data-t23='<?php echo json_safe_encode($t{23});?>' data-ki23='<?php echo json_safe_encode($ki{23});?>'>
=======
data-package='<?php echo $data;?>'>
>>>>>>> rebase前
</script>
<link rel="stylesheet" type="text/css" href="../css/sakuhin.css">
<div id="loader-bg" id="mad">
<div id="loader">
  <img src="../images/gif-load.gif" width="27px" height="27px" alt="Now Loading..." />
</div>
</div>
<div class="content_4" id="wrap">
<!--１-->
<iframe width="560" height="315" src="https://www.youtube.com/embed/bQXvCFFj_GA" frameborder="0" allowfullscreen></iframe>
<div class="text_g_1">
  <div class="mtitle_1">
    マッドマックス 怒りのデスロード
  </div>
<div class="arasuji_1">
  <div class="arasuji_1_1">
    資
  </div>
  源が底を突き荒廃した世界、愛する者も生きる望みも失い荒野をさまようマックス（トム・ハーディ）は、砂漠を牛耳る敵であるイモータン・ジョー（ヒュー・キース＝バーン）の一団に捕らわれ、深い傷を負ってしまう。そんな彼の前に、ジョーの配下の女戦士フュリオサ（シャーリーズ・セロン）、全身白塗りの謎の男、そしてジョーと敵対関係にあるグループが出現。マックスは彼らと手を組み、強大なジョーの勢力に戦いを挑む。
</div>
</div>
<div class="reviewf_1">
<div class="form_title_1">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_1'])?>
<div class="subtit_1">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1'],
['text'=>'  2,やや面白くない ','value'=>'2'],
['text'=>'  3,普通 ','value'=>'3'],
['text'=>'  4,やや面白い ','value'=>'4'],
['text'=>'  5,面白い ','value'=>'5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_2">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1'],
['text'=>'  2,やや感動なし ','value'=>'2'],
['text'=>'  3,普通 ','value'=>'3'],
['text'=>'  4,やや感動あり ','value'=>'4'],
['text'=>'  5,感動あり ','value'=>'5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_3">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>'  1,有名じゃない ','value'=>'1'],
['text'=>'  2,やや有名じゃない ','value'=>'2'],
['text'=>'  3,普通 ','value'=>'3'],
['text'=>'  4,やや有名 ','value'=>'4'],
['text'=>'  5,有名 ','value'=>'5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_4">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>'  1,なし ','value'=>'1'],
['text'=>'  2,ややなし ','value'=>'2'],
['text'=>'  3,普通 ','value'=>'3'],
['text'=>'  4,ややあり ','value'=>'4'],
['text'=>'  5,あり ','value'=>'5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_5">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>'  1,なし ','value'=>'1'],
['text'=>'  2,ややなし ','value'=>'2'],
['text'=>'  3,普通 ','value'=>'3'],
['text'=>'  4,ややあり ','value'=>'4'],
['text'=>'  5,あり ','value'=>'5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_6">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>'  1,なし ','value'=>'1'],
['text'=>'  2,ややなし ','value'=>'2'],
['text'=>'  3,普通 ','value'=>'3'],
['text'=>'  4,ややあり ','value'=>'4'],
['text'=>'  5,あり ','value'=>'5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'1']) ?>
<div class="submit_1">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_1"><canvas width="300" height="300" id="sample1"></canvas></div>
<!--2-->
<iframe id="bridge" width="560" height="315" src="https://www.youtube.com/embed/D22lKWeQfQI" frameborder="0" allowfullscreen></iframe>
<div class="text_g_2">
  <div class="mtitle_2">
    ブリッジ・オブ・スパイ
  </div>
  <div class="arasuji_2">
    <div class="arasuji_2_1">
      ア
    </div>
    メリカとソ連の冷戦のさなか、保険関連の敏腕弁護士ドノヴァン（トム・ハンクス）は、ソ連のスパイであるアベル（マーク・ライランス）の弁護を引き受ける。その後ドノヴァンの弁護により、アベルは死刑を免れ懲役刑となった。5年後、アメリカがソ連に送り込んだ偵察機が撃墜され、乗組員が捕獲される。ジェームズは、CIAから自分が弁護したアベルとアメリカ人乗組員のパワーズ（オースティン・ストウェル）の交換という任務を任され……。
  </div>
</div>
<div class="reviewf_2">
  <div class="form_title_2">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_2'])?>
<div class="subtit_7">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1','id'=>'2-i-1'],
['text'=>'  2,やや面白くない ','value'=>'2','id'=>'2-i-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'2-i-3'],
['text'=>'  4,やや面白い ','value'=>'4','id'=>'2-i-4'],
['text'=>'  5,面白い ','value'=>'5','id'=>'2-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_8">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1','id'=>'2-ka-1'],
['text'=>'  2,やや感動なし ','value'=>'2','id'=>'2-ka-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'2-ka-3'],
['text'=>'  4,やや感動あり ','value'=>'4','id'=>'2-ka-4'],
['text'=>'  5,感動あり ','value'=>'5','id'=>'2-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_9">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>'  1,有名じゃない ','value'=>'1','id'=>'2-c-1'],
['text'=>'  2,やや有名じゃない ','value'=>'2','id'=>'2-c-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'2-c-3'],
['text'=>'  4,やや有名 ','value'=>'4','id'=>'2-c-4'],
['text'=>'  5,有名 ','value'=>'5','id'=>'2-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_10">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>'  1,なし ','value'=>'1','id'=>'2-w-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'2-w-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'2-w-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'2-w-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'2-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_11">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>'  1,なし ','value'=>'1','id'=>'2-t-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'2-t-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'2-t-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'2-t-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'2-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_12">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>'  1,なし ','value'=>'1','id'=>'2-ki-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'2-ki-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'2-ki-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'2-ki-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'2-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'2']) ?>
<div class="submit_2">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_2"><canvas width="300" height="300" id="sample2"></canvas></div>
<!--3-->
<iframe id="odess" width="560" height="315" src="https://www.youtube.com/embed/XRBSHEKDLpM" frameborder="0" allowfullscreen></iframe>
<div class="text_g_3">
  <div class="mtitle_3">
    オデッセイ
  </div>
  <div class="arasuji_3">
    <div class="arasuji_3_1">
      火
    </div>
    星での有人探査中に嵐に巻き込まれた宇宙飛行士のマーク・ワトニー（マット・デイモン）。乗組員はワトニーが死亡したと思い、火星を去るが、彼は生きていた。空気も水も通信手段もなく、わずかな食料しかない危機的状況で、ワトニーは生き延びようとする。一方、NASAは世界中から科学者を結集し救出を企て、仲間たちもまた大胆な救出ミッションを敢行しようとしていた。
  </div>
</div>
<div class="reviewf_3">
  <div class="form_title_3">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_3'])?>
<div class="subtit_13">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1','id'=>'3-i-1'],
['text'=>'  2,やや面白くない ','value'=>'2','id'=>'3-i-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'3-i-3'],
['text'=>'  4,やや面白い ','value'=>'4','id'=>'3-i-4'],
['text'=>'  5,面白い ','value'=>'5','id'=>'3-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_14">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1','id'=>'3-ka-1'],
['text'=>'  2,やや感動なし ','value'=>'2','id'=>'3-ka-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'3-ka-3'],
['text'=>'  4,やや感動あり ','value'=>'4','id'=>'3-ka-4'],
['text'=>'  5,感動あり ','value'=>'5','id'=>'3-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_15">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>'  1,有名じゃない ','value'=>'1','id'=>'3-c-1'],
['text'=>'  2,やや有名じゃない ','value'=>'2','id'=>'3-c-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'3-c-3'],
['text'=>'  4,やや有名 ','value'=>'4','id'=>'3-c-4'],
['text'=>'  5,有名 ','value'=>'5','id'=>'3-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_16">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>'  1,なし ','value'=>'1','id'=>'3-w-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'3-w-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'3-w-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'3-w-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'3-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_17">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>'  1,なし ','value'=>'1','id'=>'3-t-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'3-t-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'3-t-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'3-t-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'3-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_18">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>'  1,なし ','value'=>'1','id'=>'3-ki-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'3-ki-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'3-ki-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'3-ki-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'3-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'3']) ?>
<div class="submit_3">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_3"><canvas width="300" height="300" id="sample3"></canvas></div>
<!--4-->
<iframe id="money" width="560" height="315" src="https://www.youtube.com/embed/3dVHToERcDc" frameborder="0" allowfullscreen></iframe>
<div class="text_g_4">
  <div class="mtitle_4">
    マネー・ショート 華麗なる大逆転
  </div>
  <div class="arasuji_4">
    <div class="arasuji_4_1">
      2
    </div>
    005年のアメリカ。金融トレーダーのマイケル（クリスチャン・ベイル）は、サブプライムローンの危機を指摘するもウォール街では一笑を買ってしまい、「クレジット・デフォルト・スワップ」という金融取引で出し抜いてやろうと考える。同じころ、銀行家ジャレド（ライアン・ゴズリング）がマイケルの戦略を知り、ヘッジファンドマネージャーのマーク（スティーヴ・カレル）、伝説の銀行家ベン（ブラッド・ピット）らを巻き込み……。
  </div>
</div>
<div class="reviewf_4">
<div class="form_title_4">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_4'])?>
<div class="subtit_19">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1','id'=>'4-i-1'],
['text'=>'  2,やや面白くない ','value'=>'2','id'=>'4-i-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'4-i-3'],
['text'=>'  4,やや面白い ','value'=>'4','id'=>'4-i-4'],
['text'=>'  5,面白い ','value'=>'5','id'=>'4-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_20">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1','id'=>'4-ka-1'],
['text'=>'  2,やや感動なし ','value'=>'2','id'=>'4-ka-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'4-ka-3'],
['text'=>'  4,やや感動あり ','value'=>'4','id'=>'4-ka-4'],
['text'=>'  5,感動あり ','value'=>'5','id'=>'4-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_21">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>'  1,有名じゃない ','value'=>'1','id'=>'4-c-1'],
['text'=>'  2,やや有名じゃない ','value'=>'2','id'=>'4-c-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'4-c-3'],
['text'=>'  4,やや有名 ','value'=>'4','id'=>'4-c-4'],
['text'=>'  5,有名 ','value'=>'5','id'=>'4-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_22">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>'  1,なし ','value'=>'1','id'=>'4-w-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'4-w-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'4-w-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'4-w-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'4-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_23">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>'  1,なし ','value'=>'1','id'=>'4-t-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'4-t-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'4-t-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'4-t-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'4-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_24">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>'  1,なし ','value'=>'1','id'=>'4-ki-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'4-ki-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'4-ki-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'4-ki-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'4-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'4']) ?>
<div class="submit_4">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_4"><canvas width="300" height="300" id="sample4"></canvas></div>
<!--5-->
<iframe id="revenant" width="560" height="315" src="https://www.youtube.com/embed/Q9oOfyF4k00" frameborder="0" allowfullscreen></iframe>
<div class="text_g_5">
  <div class="mtitle_5">
    レヴェナント：蘇りし者
  </div>
  <div class="arasuji_5">
    <div class="arasuji_5_1">
      ア
    </div>
    メリカ西部の原野、ハンターのヒュー・グラス（レオナルド・ディカプリオ）は狩猟の最中に熊の襲撃を受けて瀕死（ひんし）の重傷を負うが、同行していた仲間のジョン・フィッツジェラルド（トム・ハーディ）に置き去りにされてしまう。かろうじて死のふちから生還したグラスは、自分を見捨てたフィッツジェラルドにリベンジを果たすべく、大自然の猛威に立ち向かいながらおよそ300キロに及ぶ過酷な道のりを突き進んでいく。
  </div>
</div>
<div class="reviewf_5">
  <div class="form_title_5">
評価投稿フォーム:</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_5'])?>
<div class="subtit_25">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1','id'=>'5-i-1'],
['text'=>'  2,やや面白くない ','value'=>'2','id'=>'5-i-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'5-i-3'],
['text'=>'  4,やや面白い ','value'=>'4','id'=>'5-i-4'],
['text'=>'  5,面白い ','value'=>'5','id'=>'5-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_26">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1','id'=>'5-ka-1'],
['text'=>'  2,やや感動なし ','value'=>'2','id'=>'5-ka-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'5-ka-3'],
['text'=>'  4,やや感動あり ','value'=>'4','id'=>'5-ka-4'],
['text'=>'  5,感動あり ','value'=>'5','id'=>'5-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_27">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>'  1,有名じゃない ','value'=>'1','id'=>'5-c-1'],
['text'=>'  2,やや有名じゃない ','value'=>'2','id'=>'5-c-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'5-c-3'],
['text'=>'  4,やや有名 ','value'=>'4','id'=>'5-c-4'],
['text'=>'  5,有名 ','value'=>'5','id'=>'5-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_28">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>'  1,なし ','value'=>'1','id'=>'5-w-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'5-w-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'5-w-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'5-w-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'5-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_29">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>'  1,なし ','value'=>'1','id'=>'5-t-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'5-t-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'5-t-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'5-t-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'5-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_30">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>'  1,なし ','value'=>'1','id'=>'5-ki-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'5-ki-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'5-ki-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'5-ki-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'5-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'5']) ?>
<div class="submit_5">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_5"><canvas width="300" height="300" id="sample5"></canvas></div>
<!--6-->
<iframe id="room" width="560" height="315" src="https://www.youtube.com/embed/iqp-fDEMrGU" frameborder="0" allowfullscreen></iframe>
<div class="text_g_6">
  <div class="mtitle_6">
    ルーム
  </div>
  <div class="arasuji_6">
    <div class="arasuji_6_1">
      施
    </div>
    錠された狭い部屋に暮らす5歳の男の子ジャック（ジェイコブ・トレンブレイ）と、母親ジョイ（ブリー・ラーソン）。彼女はオールド・ニック（ショーン・ブリジャース）によって7年間も監禁されており、そこで生まれ育った息子にとっては、小さな部屋こそが世界の全てだった。ある日ジョイは、オールド・ニックとの言い争いをきっかけに、この密室しか知らないジャックに外の世界を教えるため、そして自身の奪われた人生を取り戻すため、部屋からの脱出を決心する。
  </div>
</div>
<div class="reviewf_6">
  <div class="form_title_6">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_6'])?>
<div class="subtit_31">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1','id'=>'6-i-1'],
['text'=>'  2,やや面白くない ','value'=>'2','id'=>'6-i-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'6-i-3'],
['text'=>'  4,やや面白い ','value'=>'4','id'=>'6-i-4'],
['text'=>'  5,面白い ','value'=>'5','id'=>'6-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_32">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1','id'=>'6-ka-1'],
['text'=>'  2,やや感動なし ','value'=>'2','id'=>'6-ka-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'6-ka-3'],
['text'=>'  4,やや感動あり ','value'=>'4','id'=>'6-ka-4'],
['text'=>'  5,感動あり ','value'=>'5','id'=>'6-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_33">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>'  1,有名じゃない ','value'=>'1','id'=>'6-c-1'],
['text'=>'  2,やや有名じゃない ','value'=>'2','id'=>'6-c-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'6-c-3'],
['text'=>'  4,やや有名 ','value'=>'4','id'=>'6-c-4'],
['text'=>'  5,有名 ','value'=>'5','id'=>'6-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_34">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>'  1,なし ','value'=>'1','id'=>'6-w-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'6-w-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'6-w-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'6-w-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'6-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_35">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>'  1,なし ','value'=>'1','id'=>'6-t-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'6-t-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'6-t-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'6-t-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'6-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_36">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>'  1,なし ','value'=>'1','id'=>'6-ki-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'6-ki-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'6-ki-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'6-ki-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'6-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'6']) ?>
<div class="submit_6">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_6"><canvas width="300" height="300" id="sample6"></canvas></div>

<!--7-->
<iframe id="spot" width="560" height="315" src="https://www.youtube.com/embed/h8TwCzA59Lg" frameborder="0" allowfullscreen></iframe>
<div class="text_g_7">
  <div class="mtitle_7">
    スポットライト 世紀のスクープ
  </div>
  <div class="arasuji_7">
    <div class="arasuji_7_1">
      2
    </div>
002年、ウォルター（マイケル・キートン）やマイク（マーク・ラファロ）たちのチームは、「The Boston Globe」で連載コーナーを担当していた。ある日、彼らはこれまでうやむやにされてきた、神父による児童への性的虐待の真相について調査を開始する。カトリック教徒が多いボストンでは彼らの行為はタブーだったが……。
</div>
</div>
<div class="reviewf_7">
  <div class="form_title_7">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_7'])?>
<div class="subtit_37">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1','id'=>'7-i-1'],
['text'=>'  2,やや面白くない ','value'=>'2','id'=>'7-i-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'7-i-3'],
['text'=>'  4,やや面白い ','value'=>'4','id'=>'7-i-4'],
['text'=>'  5,面白い ','value'=>'5','id'=>'7-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_38">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1','id'=>'7-ka-1'],
['text'=>'  2,やや感動なし ','value'=>'2','id'=>'7-ka-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'7-ka-3'],
['text'=>'  4,やや感動あり ','value'=>'4','id'=>'7-ka-4'],
['text'=>'  5,感動あり ','value'=>'5','id'=>'7-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_39">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>'  1,有名じゃない ','value'=>'1','id'=>'7-c-1'],
['text'=>'  2,やや有名じゃない ','value'=>'2','id'=>'7-c-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'7-c-3'],
['text'=>'  4,やや有名 ','value'=>'4','id'=>'7-c-4'],
['text'=>'  5,有名 ','value'=>'5','id'=>'7-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_40">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>'  1,なし ','value'=>'1','id'=>'7-w-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'7-w-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'7-w-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'7-w-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'7-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_41">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>'  1,なし ','value'=>'1','id'=>'7-t-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'7-t-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'7-t-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'7-t-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'7-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_42">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>'  1,なし ','value'=>'1','id'=>'7-ki-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'7-ki-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'7-ki-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'7-ki-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'7-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'7']) ?>
<div class="submit_7">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_7"><canvas width="300" height="300" id="sample7"></canvas></div>

<!--8-->
<iframe id="brook" width="560" height="315" src="https://www.youtube.com/embed/I768tXFAI5I" frameborder="0" allowfullscreen></iframe>
<div class="text_g_8">
  <div class="mtitle_8">
  ブルックリン</div>
  <div class="arasuji_8">
    <div class="arasuji_8_1">
      ア
    </div>
    イルランドの町で暮らすエイリシュ（シアーシャ・ローナン）は、きれいで仕事もバリバリこなす姉ローズ（フィオナ・グラスコット）とは正反対だった。内気な妹の未来を心配するローズの考えもあり、エイリシュはニューヨークに渡ることを決意する。だが、田舎町での静かな生活とは全然違う暮らしが彼女を待ち受けていた。
  </div>
</div>
<div class="reviewf_8">
  <div class="form_title_8">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_8'])?>
<div class="subtit_43">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1','id'=>'8-i-1'],
['text'=>'  2,やや面白くない ','value'=>'2','id'=>'8-i-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'8-i-3'],
['text'=>'  4,やや面白い ','value'=>'4','id'=>'8-i-4'],
['text'=>'  5,面白い ','value'=>'5','id'=>'8-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_44">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1','id'=>'8-ka-1'],
['text'=>'  2,やや感動なし ','value'=>'2','id'=>'8-ka-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'8-ka-3'],
['text'=>'  4,やや感動あり ','value'=>'4','id'=>'8-ka-4'],
['text'=>'  5,感動あり ','value'=>'5','id'=>'8-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_45">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>'  1,有名じゃない ','value'=>'1','id'=>'8-c-1'],
['text'=>'  2,やや有名じゃない ','value'=>'2','id'=>'8-c-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'8-c-3'],
['text'=>'  4,やや有名 ','value'=>'4','id'=>'8-c-4'],
['text'=>'  5,有名 ','value'=>'5','id'=>'8-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_46">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>'  1,なし ','value'=>'1','id'=>'8-w-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'8-w-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'8-w-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'8-w-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'8-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_47">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>'  1,なし ','value'=>'1','id'=>'8-t-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'8-t-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'8-t-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'8-t-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'8-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_48">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>'  1,なし ','value'=>'1','id'=>'8-ki-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'8-ki-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'8-ki-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'8-ki-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'8-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'8']) ?>
<div class="submit_8">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_8"><canvas width="300" height="300" id="sample8"></canvas></div>

<!--9-->
<iframe id="kimi" width="560" height="315" src="https://www.youtube.com/embed/k4xGqY5IDBE" frameborder="0" allowfullscreen></iframe>
<div class="text_g_9">
  <div class="mtitle_9">
    君の名は。
  </div>
  <div class="arasuji_9">
    <div class="arasuji_9_1">
      1
    </div>
    000年に1度のすい星来訪が、1か月後に迫る日本。山々に囲まれた田舎町に住む女子高生の三葉は、町長である父の選挙運動や、家系の神社の風習などに鬱屈（うっくつ）していた。それゆえに都会への憧れを強く持っていたが、ある日彼女は自分が都会に暮らしている少年になった夢を見る。夢では東京での生活を楽しみながらも、その不思議な感覚に困惑する三葉。一方、東京在住の男子高校生・瀧も自分が田舎町に生活する少女になった夢を見る。やがて、その奇妙な夢を通じて彼らは引き合うようになっていくが……。
  </div>
</div>
<div class="reviewf_9">
<div class="form_title_9">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_9'])?>
<div class="subtit_49">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1','id'=>'9-i-1'],
['text'=>'  2,やや面白くない ','value'=>'2','id'=>'9-i-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'9-i-3'],
['text'=>'  4,やや面白い ','value'=>'4','id'=>'9-i-4'],
['text'=>'  5,面白い ','value'=>'5','id'=>'9-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_50">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1','id'=>'9-ka-1'],
['text'=>'  2,やや感動なし ','value'=>'2','id'=>'9-ka-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'9-ka-3'],
['text'=>'  4,やや感動あり ','value'=>'4','id'=>'9-ka-4'],
['text'=>'  5,感動あり ','value'=>'5','id'=>'9-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_51">
キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>'  1,有名じゃない ','value'=>'1','id'=>'9-c-1'],
['text'=>'  2,やや有名じゃない ','value'=>'2','id'=>'9-c-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'9-c-3'],
['text'=>'  4,やや有名 ','value'=>'4','id'=>'9-c-4'],
['text'=>'  5,有名 ','value'=>'5','id'=>'9-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_52">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>'  1,なし ','value'=>'1','id'=>'9-w-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'9-w-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'9-w-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'9-w-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'9-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_53">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>'  1,なし ','value'=>'1','id'=>'9-t-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'9-t-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'9-t-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'9-t-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'9-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_54">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>'  1,なし ','value'=>'1','id'=>'9-ki-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'9-ki-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'9-ki-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'9-ki-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'9-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'9']) ?>
<div class="submit_9">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_9"><canvas width="300" height="300" id="sample9"></canvas></div>

<!--10-->
<iframe id="xmen" width="560" height="315" src="https://www.youtube.com/embed/umjNdWsY5tc" frameborder="0" allowfullscreen></iframe>
<div class="text_g_10">
  <div class="mtitle_10">
    X-MEN:アポカリプス
  </div>
  <div class="arasuji_10">
    <div class="arasuji_10_1">
      1
    </div>
    983年。文明が誕生する前から神として君臨していた、ミュータントの始祖でもあるアポカリプス（オスカー・アイザック）が、突如として長い眠りから覚醒する。数千年ぶりに目にした人間とその文明が、誤った方向に進んでしまったと考えた彼は新しい秩序が必要だと判断。マグニートー（マイケル・ファスベンダー）など、4人のミュータントを率いる。彼の存在と考えを知ったプロフェッサーX（ジェームズ・マカヴォイ）は、ミスティーク（ジェニファー・ローレンス）らと共にその行動の阻止に挑むが……。
  </div>
</div>
<div class="reviewf_10">
  <div class="form_title_10">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_10'])?>
<div class="subtit_55">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1','id'=>'10-i-1'],
['text'=>'  2,やや面白くない ','value'=>'2','id'=>'10-i-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'10-i-3'],
['text'=>'  4,やや面白い ','value'=>'4','id'=>'10-i-4'],
['text'=>'  5,面白い ','value'=>'5','id'=>'10-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_56">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1','id'=>'10-ka-1'],
['text'=>'  2,やや感動なし ','value'=>'2','id'=>'10-ka-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'10-ka-3'],
['text'=>'  4,やや感動あり ','value'=>'4','id'=>'10-ka-4'],
['text'=>'  5,感動あり ','value'=>'5','id'=>'10-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_57">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>'  1,有名じゃない ','value'=>'1','id'=>'10-c-1'],
['text'=>'  2,やや有名じゃない ','value'=>'2','id'=>'10-c-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'10-c-3'],
['text'=>'  4,やや有名 ','value'=>'4','id'=>'10-c-4'],
['text'=>'  5,有名 ','value'=>'5','id'=>'10-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_58">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>'  1,なし ','value'=>'1','id'=>'10-w-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'10-w-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'10-w-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'10-w-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'10-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_59">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>'  1,なし ','value'=>'1','id'=>'10-t-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'10-t-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'10-t-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'10-t-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'10-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_60">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>'  1,なし ','value'=>'1','id'=>'10-ki-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'10-ki-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'10-ki-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'10-ki-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'10-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'10']) ?>
<div class="submit_10">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_10"><canvas width="300" height="300" id="sample10"></canvas></div>

<!--11-->
<iframe id="fant" width="560" height="315" src="https://www.youtube.com/embed/C5y9guceh6M" frameborder="0" allowfullscreen></iframe>
<div class="text_g_11">
  <div class="mtitle_11">
    ファンタスティック・ビーストと魔法の旅
  </div>
  <div class="arasuji_11">
    <div class="arasuji_11_1">
      魔
    </div>
    法動物学者ニュート・スキャマンダー（エディ・レッドメイン）は、魔法動物の調査と保護のためニューヨークを訪問する。ある日、彼の魔法のトランクが人間のものと取り違えられ、魔法動物たちが人間の世界に逃亡してしまう。街中がパニックに陥る中、ニュートはティナ（キャサリン・ウォーターストン）らと共に追跡を開始するが……。
  </div>
</div>
<div class="reviewf_11">
  <div class="form_title_11">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_11'])?>
<div class="subtit_61">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1','id'=>'11-i-1'],
['text'=>'  2,やや面白くない ','value'=>'2','id'=>'11-i-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'11-i-3'],
['text'=>'  4,やや面白い ','value'=>'4','id'=>'11-i-4'],
['text'=>'  5,面白い ','value'=>'5','id'=>'11-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_62">
感動:
</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1','id'=>'11-ka-1'],
['text'=>'  2,やや感動なし ','value'=>'2','id'=>'11-ka-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'11-ka-3'],
['text'=>'  4,やや感動あり ','value'=>'4','id'=>'11-ka-4'],
['text'=>'  5,感動あり ','value'=>'5','id'=>'11-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_63">
キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>'  1,有名じゃない ','value'=>'1','id'=>'11-c-1'],
['text'=>'  2,やや有名じゃない ','value'=>'2','id'=>'11-c-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'11-c-3'],
['text'=>'  4,やや有名 ','value'=>'4','id'=>'11-c-4'],
['text'=>'  5,有名 ','value'=>'5','id'=>'11-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_64">
独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>'  1,なし ','value'=>'1','id'=>'11-w-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'11-w-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'11-w-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'11-w-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'11-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_65">
話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>'  1,なし ','value'=>'1','id'=>'11-t-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'11-t-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'11-t-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'11-t-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'11-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_66">
緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>'  1,なし ','value'=>'1','id'=>'11-ki-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'11-ki-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'11-ki-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'11-ki-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'11-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'11']) ?>
<div class="submit_11">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_11"><canvas width="300" height="300" id="sample11"></canvas></div>

<!--12-->
<iframe id="knife" width="560" height="315" src="https://www.youtube.com/embed/2WbYGg9CxAc" frameborder="0" allowfullscreen></iframe>
<div class="text_g_12">
  <div class="mtitle_12">
    溺れるナイフ
  </div>
  <div class="arasuji_12">
    <div class="arasuji_12_1">
      東
    </div>
    京で雑誌モデルを務める望月夏芽（小松菜奈）は、急に父親の郷里である浮雲町に転居することになる。彼女は都会とはかけ離れた田舎での地味な生活に幻滅してしまうが、長谷川航一朗（菅田将暉）と出会ったことで人生が一変する。彼は田舎町で有名な神主の一族の出身で、夏芽はひねくれ者で一風変わった航一朗に強く惹（ひ）き付けられる。
  </div>
</div>
<div class="reviewf_12">
  <div class="form_title_12">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_12'])?>
<div class="subtit_67">
話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1','id'=>'12-i-1'],
['text'=>'  2,やや面白くない ','value'=>'2','id'=>'12-i-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'12-i-3'],
['text'=>'  4,やや面白い ','value'=>'4','id'=>'12-i-4'],
['text'=>'  5,面白い ','value'=>'5','id'=>'12-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_68">
感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1','id'=>'12-ka-1'],
['text'=>'  2,やや感動なし ','value'=>'2','id'=>'12-ka-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'12-ka-3'],
['text'=>'  4,やや感動あり ','value'=>'4','id'=>'12-ka-4'],
['text'=>'  5,感動あり ','value'=>'5','id'=>'12-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_69">
キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>'  1,有名じゃない ','value'=>'1','id'=>'12-c-1'],
['text'=>'  2,やや有名じゃない ','value'=>'2','id'=>'12-c-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'12-c-3'],
['text'=>'  4,やや有名 ','value'=>'4','id'=>'12-c-4'],
['text'=>'  5,有名 ','value'=>'5','id'=>'12-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_70">
独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>'  1,なし ','value'=>'1','id'=>'12-w-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'12-w-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'12-w-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'12-w-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'12-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_71">
話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>'  1,なし ','value'=>'1','id'=>'12-t-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'12-t-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'12-t-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'12-t-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'12-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_72">
緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>'  1,なし ','value'=>'1','id'=>'12-ki-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'12-ki-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'12-ki-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'12-ki-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'12-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'12']) ?>
<div class="submit_12">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_12"><canvas width="300" height="300" id="sample12"></canvas></div>

<!--13-->
<iframe id="shippu" width="560" height="315" src="https://www.youtube.com/embed/xsEIBUto2QE" frameborder="0" allowfullscreen></iframe>
<div class="text_g_13">
  <div class="mtitle_13">
    疾風ロンド
  </div>
  <div class="arasuji_13">
    <div class="arasuji_13_1">
      大
    </div>
    学の研究施設の違法生物兵器「K-55」が盗難に遭い、さらに国民を人質に身代金3億円を用意するよう脅迫メールが届く。残された時間は4日間、主任研究員の栗林和幸（阿部寛）はひそかに兵器を探索するという任務を依頼されるも、手掛かりはゼロ。そんな折、犯人死亡というまさかの事態にぼうぜんとしながらも大惨事を回避すべく、犯人の遺品をヒントに国内屈指の規模を誇るスキー場へと向かう。
  </div>
</div>
<div class="reviewf_13">
  <div class="form_title_13">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_13'])?>
<div class="subtit_73">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1','id'=>'13-i-1'],
['text'=>'  2,やや面白くない ','value'=>'2','id'=>'13-i-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'13-i-3'],
['text'=>'  4,やや面白い ','value'=>'4','id'=>'13-i-4'],
['text'=>'  5,面白い ','value'=>'5','id'=>'13-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_74">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1','id'=>'13-ka-1'],
['text'=>'  2,やや感動なし ','value'=>'2','id'=>'13-ka-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'13-ka-3'],
['text'=>'  4,やや感動あり ','value'=>'4','id'=>'13-ka-4'],
['text'=>'  5,感動あり ','value'=>'5','id'=>'13-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_75">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>'  1,有名じゃない ','value'=>'1','id'=>'13-c-1'],
['text'=>'  2,やや有名じゃない ','value'=>'2','id'=>'13-c-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'13-c-3'],
['text'=>'  4,やや有名 ','value'=>'4','id'=>'13-c-4'],
['text'=>'  5,有名 ','value'=>'5','id'=>'13-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_76">
独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>'  1,なし ','value'=>'1','id'=>'13-w-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'13-w-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'13-w-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'13-w-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'13-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_77">
話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>'  1,なし ','value'=>'1','id'=>'13-t-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'13-t-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'13-t-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'13-t-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'13-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_78">
緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>'  1,なし ','value'=>'1','id'=>'13-ki-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'13-ki-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'13-ki-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'13-ki-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'13-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'13']) ?>
<div class="submit_13">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_13"><canvas width="300" height="300" id="sample13"></canvas></div>

<!--14-->
<iframe id="final" width="560" height="315" src="https://www.youtube.com/embed/fsUmSwhLfjM" frameborder="0" allowfullscreen></iframe>
<div class="text_g_14">
<div class="mtitle_14">
  バイオハザード：ザ・ファイナル
</div>
<div class="arasuji_14">
  <div class="arasuji_14_1">
    ア
  </div>
  リス（ミラ・ジョヴォヴィッチ）は、レッドクイーンから48時間後に人類が滅びると告げられる。そして、宿敵アンブレラ社が放った膨大な数のアンデッドが地上を占領。アリスはラクーンシティに戻って、生還したクレアやコバルトらと合流し、アンブレラ社の心臓部であるハイブを潰そうとするが……。
</div>
</div>
<div class="reviewf_14">
  <div class="form_title_14">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_14'])?>
<div class="subtit_79">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1','id'=>'14-i-1'],
['text'=>'  2,やや面白くない ','value'=>'2','id'=>'14-i-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'14-i-3'],
['text'=>'  4,やや面白い ','value'=>'4','id'=>'14-i-4'],
['text'=>'  5,面白い ','value'=>'5','id'=>'14-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_80">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1','id'=>'14-ka-1'],
['text'=>'  2,やや感動なし ','value'=>'2','id'=>'14-ka-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'14-ka-3'],
['text'=>'  4,やや感動あり ','value'=>'4','id'=>'14-ka-4'],
['text'=>'  5,感動あり ','value'=>'5','id'=>'14-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_81">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>'  1,有名じゃない ','value'=>'1','id'=>'14-c-1'],
['text'=>'  2,やや有名じゃない ','value'=>'2','id'=>'14-c-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'14-c-3'],
['text'=>'  4,やや有名 ','value'=>'4','id'=>'14-c-4'],
['text'=>'  5,有名 ','value'=>'5','id'=>'14-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_82">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>'  1,なし ','value'=>'1','id'=>'14-w-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'14-w-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'14-w-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'14-w-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'14-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_83">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>'  1,なし ','value'=>'1','id'=>'14-t-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'14-t-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'14-t-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'14-t-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'14-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_84">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>'  1,なし ','value'=>'1','id'=>'14-ki-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'14-ki-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'14-ki-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'14-ki-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'14-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'14']) ?>
<div class="submit_14">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_14"><canvas width="300" height="300" id="sample14"></canvas></div>

<!--15-->
<iframe id="kaizoku" width="560" height="315" src="https://www.youtube.com/embed/D9emnxN_SSM" frameborder="0" allowfullscreen></iframe>
<div class="text_g_15">
  <div class="mtitle_15">
    海賊と呼ばれた男
  </div>
  <div class="arasuji_15">
    <div class="arasuji_15_1">
      敗
    </div>
    戦後の1945年、東京。石油会社・国岡商店を率いる国岡鐡造（岡田准一）は、日本人としての誇りを持ち復興に向け突き進もうと従業員を激励する。戦後の混乱期にもかかわらず誰も解雇せず、独自の経営哲学と行動力で事業を広げていく。やがて欧米の石油メジャーも国岡を警戒し、その強大な包囲網により同社の石油輸入ルートは全て封鎖されてしまうが……。
  </div>
</div>
<div class="reviewf_15">
  <div class="form_title_15">
評価投稿フォーム:</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_15'])?>
<div class="subtit_85">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1','id'=>'15-i-1'],
['text'=>'  2,やや面白くない ','value'=>'2','id'=>'15-i-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'15-i-3'],
['text'=>'  4,やや面白い ','value'=>'4','id'=>'15-i-4'],
['text'=>'  5,面白い ','value'=>'5','id'=>'15-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_86">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1','id'=>'15-ka-1'],
['text'=>'  2,やや感動なし ','value'=>'2','id'=>'15-ka-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'15-ka-3'],
['text'=>'  4,やや感動あり ','value'=>'4','id'=>'15-ka-4'],
['text'=>'  5,感動あり ','value'=>'5','id'=>'15-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_87">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>'  1,有名じゃない ','value'=>'1','id'=>'15-c-1'],
['text'=>'  2,やや有名じゃない ','value'=>'2','id'=>'15-c-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'15-c-3'],
['text'=>'  4,やや有名 ','value'=>'4','id'=>'15-c-4'],
['text'=>'  5,有名 ','value'=>'5','id'=>'15-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_88">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>'  1,なし ','value'=>'1','id'=>'15-w-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'15-w-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'15-w-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'15-w-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'15-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_89">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>' 1,なし ','value'=>'1','id'=>'15-t-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'15-t-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'15-t-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'15-t-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'15-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_90">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>' 1,なし ','value'=>'1','id'=>'15-ki-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'15-ki-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'15-ki-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'15-ki-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'15-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'15']) ?>
<div class="submit_15">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_15"><canvas width="300" height="300" id="sample15"></canvas></div>

<!--16-->
<iframe id="starwars" width="560" height="315" src="https://www.youtube.com/embed/aDgww2IICBs" frameborder="0" allowfullscreen></iframe>
<div class="text_g_16">
  <div class="mtitle_16">
    ローグ・ワン/スター・ウォーズ・ストーリー
  </div>
  <div class="arasuji_16">
    <div class="arasuji_16_1">
      帝
    </div>
    国軍の誇る究極兵器デス・スターによって、銀河は混乱と恐怖にさらされていた。窃盗、暴行、書類偽造などの悪事を重ねてきたジン（フェリシティ・ジョーンズ）は反乱軍に加わり、あるミッションを下される。それはデス・スターの設計図を奪うという、困難かつ無謀なものであった。彼女を筆頭に、キャシアン（ディエゴ・ルナ）、チアルート（ドニー・イェン）、ベイズ（チアン・ウェン）、ボーティー（リズ・アーメッド）といったメンバーで極秘部隊ローグ・ワンが結成され、ミッションが始動するが……。
  </div>
</div>
<div class="reviewf_16">
<div class="form_title_16">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_16'])?>
<div class="subtit_91">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>' 1,面白くない ','value'=>'1','id'=>'16-i-1'],
['text'=>' 2,やや面白くない ','value'=>'2','id'=>'16-i-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'16-i-3'],
['text'=>' 4,やや面白い ','value'=>'4','id'=>'16-i-4'],
['text'=>' 5,面白い ','value'=>'5','id'=>'16-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_92">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>' 1,感動なし ','value'=>'1','id'=>'16-ka-1'],
['text'=>' 2,やや感動なし ','value'=>'2','id'=>'16-ka-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'16-ka-3'],
['text'=>' 4,やや感動あり ','value'=>'4','id'=>'16-ka-4'],
['text'=>' 5,感動あり ','value'=>'5','id'=>'16-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_93">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>' 1,有名じゃない ','value'=>'1','id'=>'16-c-1'],
['text'=>' 2,やや有名じゃない ','value'=>'2','id'=>'16-c-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'16-c-3'],
['text'=>' 4,やや有名 ','value'=>'4','id'=>'16-c-4'],
['text'=>' 5,有名 ','value'=>'5','id'=>'16-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_94">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>' 1,なし ','value'=>'1','id'=>'16-w-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'16-w-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'16-w-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'16-w-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'16-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_95">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>' 1,なし ','value'=>'1','id'=>'16-t-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'16-t-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'16-t-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'16-t-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'16-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_96">
緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>' 1,なし ','value'=>'1','id'=>'16-ki-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'16-ki-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'16-ki-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'16-ki-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'16-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'16']) ?>
<div class="submit_16">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_16"><canvas width="300" height="300" id="sample16"></canvas></div>

<!--17-->
<iframe id="doryunouta" width="560" height="315" src="https://www.youtube.com/embed/MucWGlZ56Zo" frameborder="0" allowfullscreen></iframe>
<div class="text_g_17">
  <div class="mtitle_17">
    土竜の唄 香港狂騒曲
  </div>
  <div class="arasuji_17">
    <div class="arasuji_17_1">
      犯
    </div>
    罪組織・数寄矢会に潜り込んだ潜入捜査官モグラの菊川玲二（生田斗真）は、日浦組組長・日浦匡也（堤真一）と兄弟の契りを交わし、思いがけず日浦組若頭に就任。そのころ、容姿・頭脳・人望もピカイチの警官・兜真矢（瑛太）が警視庁組織犯罪対策部課長に就任し、玲二の逮捕に動き始める。一方玲二は、最終ターゲットの数寄矢会会長・轟周宝（岩城滉一）からチャイニーズマフィア仙骨竜の撲滅と、轟と娘のボディーガードを任され……。
  </div>
</div>
<div class="reviewf_17">
<div class="form_title_17">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_17'])?>
<div class="subtit_97">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>' 1,面白くない ','value'=>'1','id'=>'17-i-1'],
['text'=>' 2,やや面白くない ','value'=>'2','id'=>'17-i-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'17-i-3'],
['text'=>' 4,やや面白い ','value'=>'4','id'=>'17-i-4'],
['text'=>' 5,面白い ','value'=>'5','id'=>'17-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_98">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>' 1,感動なし ','value'=>'1','id'=>'17-ka-1'],
['text'=>' 2,やや感動なし ','value'=>'2','id'=>'17-ka-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'17-ka-3'],
['text'=>' 4,やや感動あり ','value'=>'4','id'=>'17-ka-4'],
['text'=>' 5,感動あり ','value'=>'5','id'=>'17-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_99">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>' 1,有名じゃない ','value'=>'1','id'=>'17-c-1'],
['text'=>' 2,やや有名じゃない ','value'=>'2','id'=>'17-c-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'17-c-3'],
['text'=>' 4,やや有名 ','value'=>'4','id'=>'17-c-4'],
['text'=>' 5,有名 ','value'=>'5','id'=>'17-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_100">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>' 1,なし ','value'=>'1','id'=>'17-w-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'17-w-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'17-w-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'17-w-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'17-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_101">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>' 1,なし ','value'=>'1','id'=>'17-t-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'17-t-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'17-t-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'17-t-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'17-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_102">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>' 1,なし ','value'=>'1','id'=>'17-ki-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'17-ki-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'17-ki-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'17-ki-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'17-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'17']) ?>
<div class="submit_17">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_17"><canvas width="300" height="300" id="sample17"></canvas></div>

<!--18-->
<iframe id="nerve" width="560" height="315" src="https://www.youtube.com/embed/IcQI8rl3Zoc" frameborder="0" allowfullscreen></iframe>
<div class="text_g_18">
  <div class="mtitle_18">
    NERVE 世界で一番危険なゲーム
  </div>
  <div class="arasuji_18">
    <div class="arasuji_18_1">
      高
    </div>
    校生のヴィー（エマ・ロバーツ）は、ひょんなことから裏オンラインゲームに参加する。それは視聴者が出す指令をクリアして賞金をつかむというもので、彼女は見知らぬ者と5秒間キスをして賞金の100ドルを得る。同じゲームのプレイヤーでもあったキスの相手イアン（デイヴ・フランコ）と一緒に、繰り出される指令を遂行していくヴィー。人気プレイヤーコンビとなって多額の賞金を手にする二人だったが、イアンの怪しい一面が浮き上がり、さらに指令の過激さもエスカレートしていき……。
  </div>
</div>
<div class="reviewf_18">
  <div class="form_title_18">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_18'])?>
<div class="subtit_103">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>' 1,面白くない ','value'=>'1','id'=>'18-i-1'],
['text'=>' 2,やや面白くない ','value'=>'2','id'=>'18-i-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'18-i-3'],
['text'=>' 4,やや面白い ','value'=>'4','id'=>'18-i-4'],
['text'=>' 5,面白い ','value'=>'5','id'=>'18-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_104">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>' 1,感動なし ','value'=>'1','id'=>'18-ka-1'],
['text'=>' 2,やや感動なし ','value'=>'2','id'=>'18-ka-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'18-ka-3'],
['text'=>' 4,やや感動あり ','value'=>'4','id'=>'18-ka-4'],
['text'=>' 5,感動あり ','value'=>'5','id'=>'18-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_105">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>' 1,有名じゃない ','value'=>'1','id'=>'18-c-1'],
['text'=>' 2,やや有名じゃない ','value'=>'2','id'=>'18-c-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'18-c-3'],
['text'=>' 4,やや有名 ','value'=>'4','id'=>'18-c-4'],
['text'=>' 5,有名 ','value'=>'5','id'=>'18-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_106">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>' 1,なし ','value'=>'1','id'=>'18-w-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'18-w-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'18-w-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'18-w-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'18-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_107">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>' 1,なし ','value'=>'1','id'=>'18-t-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'18-t-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'18-t-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'18-t-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'18-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_108">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>' 1,なし ','value'=>'1','id'=>'18-ki-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'18-ki-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'18-ki-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'18-ki-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'18-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'18']) ?>
<div class="submit_18">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_18"><canvas width="300" height="300" id="sample18"></canvas></div>

<!--19-->
<iframe id="honnoji" width="560" height="315" src="https://www.youtube.com/embed/mJW305CadBg" frameborder="0" allowfullscreen></iframe>
<div class="text_g_19">
  <div class="mtitle_19">
    本能寺ホテル
  </div>
  <div class="arasuji_19">
    <div class="arasuji_19_1">
      倉
    </div>
    本繭子（綾瀬はるか）は、会社の倒産を機に恋人の吉岡恭一（平山浩行）にプロポーズされ、恭一の両親の住む京都へ向かう。京都に着いた繭子は、路地裏にある“本能寺ホテル”に導かれ、気が付けば1582年の本能寺にいた。繭子は現代と1582年を行き来しながら、織田信長（堤真一）や森蘭丸（濱田岳）と交流を果たす。その日は信長が暗殺された本能寺の変の前日だった。
  </div>
</div>
<div class="reviewf_19">
<div class="form_title_19">評価投稿フォーム:</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_19'])?>
<div class="subtit_109">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>' 1,面白くない ','value'=>'1','id'=>'19-i-1'],
['text'=>' 2,やや面白くない ','value'=>'2','id'=>'19-i-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'19-i-3'],
['text'=>' 4,やや面白い ','value'=>'4','id'=>'19-i-4'],
['text'=>' 5,面白い ','value'=>'5','id'=>'19-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_110">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>' 1,感動なし ','value'=>'1','id'=>'19-ka-1'],
['text'=>' 2,やや感動なし ','value'=>'2','id'=>'19-ka-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'19-ka-3'],
['text'=>' 4,やや感動あり ','value'=>'4','id'=>'19-ka-4'],
['text'=>' 5,感動あり ','value'=>'5','id'=>'19-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_111">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>' 1,有名じゃない ','value'=>'1','id'=>'19-c-1'],
['text'=>' 2,やや有名じゃない ','value'=>'2','id'=>'19-c-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'19-c-3'],
['text'=>' 4,やや有名 ','value'=>'4','id'=>'19-c-4'],
['text'=>' 5,有名 ','value'=>'5','id'=>'19-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_112">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>' 1,なし ','value'=>'1','id'=>'19-w-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'19-w-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'19-w-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'19-w-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'19-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_113">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>' 1,なし ','value'=>'1','id'=>'19-t-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'19-t-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'19-t-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'19-t-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'19-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_114">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>' 1,なし ','value'=>'1','id'=>'19-ki-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'19-ki-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'19-ki-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'19-ki-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'19-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'19']) ?>
<div class="submit_19">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_19"><canvas width="300" height="300" id="sample19"></canvas></div>

<!--20-->
<iframe id="dirty" width="560" height="315" src="https://www.youtube.com/embed/-q5lK4ndBfU" frameborder="0" allowfullscreen></iframe>
<div class="text_g_20">
  <div class="mtitle_20">
    ダーティ・グランパ
  </div>
  <div class="arasuji_20">
    <div class="arasuji_20_1">
      1
    </div>
週間後に挙式予定のカタブツ弁護士ジェイソン（ザック・エフロン）は、祖母の逝去の知らせを受けて葬儀に参列する。彼は一人残された祖父ディック（ロバート・デ・ニーロ）に半ば引きずられるように、祖父母の思い出の場所フロリダへと旅に出る。ところが、ディックは40年ぶりの独身生活をエンジョイし、朝から酒浸りで葉巻を吹かし、ナンパに明け暮れ……。
  </div>
</div>
<div class="reviewf_20">
  <div class="form_title_20">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_20'])?>
<div class="subtit_115">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>' 1,面白くない ','value'=>'1','id'=>'20-i-1'],
['text'=>' 2,やや面白くない ','value'=>'2','id'=>'20-i-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'20-i-3'],
['text'=>' 4,やや面白い ','value'=>'4','id'=>'20-i-4'],
['text'=>' 5,面白い ','value'=>'5','id'=>'20-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_116">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>' 1,感動なし ','value'=>'1','id'=>'20-ka-1'],
['text'=>' 2,やや感動なし ','value'=>'2','id'=>'20-ka-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'20-ka-3'],
['text'=>' 4,やや感動あり ','value'=>'4','id'=>'20-ka-4'],
['text'=>' 5,感動あり ','value'=>'5','id'=>'20-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_117">
キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>' 1,有名じゃない ','value'=>'1','id'=>'20-c-1'],
['text'=>' 2,やや有名じゃない ','value'=>'2','id'=>'20-c-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'20-c-3'],
['text'=>' 4,やや有名 ','value'=>'4','id'=>'20-c-4'],
['text'=>' 5,有名 ','value'=>'5','id'=>'20-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_118">
独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>' 1,なし ','value'=>'1','id'=>'20-w-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'20-w-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'20-w-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'20-w-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'20-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_119">
話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>' 1,なし ','value'=>'1','id'=>'20-t-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'20-t-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'20-t-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'20-t-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'20-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_120">
緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>' 1,なし ','value'=>'1','id'=>'20-ki-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'20-ki-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'20-ki-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'20-ki-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'20-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'20']) ?>
<div class="submit_20">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_20"><canvas width="300" height="300" id="sample20"></canvas></div>

<!--21-->
<iframe id="consultant" width="560" height="315" src="https://www.youtube.com/embed/6or2Z629qmQ" frameborder="0" allowfullscreen></iframe>
<div class="text_g_21">
  <div class="mtitle_21">
    ザ・コンサルタント
  </div>
  <div class="arasuji_21">
    <div class="arasuji_21_1">
      小
    </div>
    さな町で会計士として働くクリスチャン（ベン・アフレック）のもとに、ある日大手企業からの財務調査のオファーが寄せられる。調査を進めるうちに彼は重大な不正を発見するが依頼は突然取り下げられ、それ以来クリスチャンは身の危険を感じるようになる。実は、彼は闇の社会の会計士として各国の危険人物の裏帳簿を握るすご腕の暗殺者だった。
  </div>
</div>
<div class="reviewf_21">
<div class="form_title_21">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_21'])?>
<div class="subtit_121">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>' 1,面白くない ','value'=>'1','id'=>'21-i-1'],
['text'=>' 2,やや面白くない ','value'=>'2','id'=>'21-i-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'21-i-3'],
['text'=>' 4,やや面白い ','value'=>'4','id'=>'21-i-4'],
['text'=>' 5,面白い ','value'=>'5','id'=>'21-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_122">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>' 1,感動なし ','value'=>'1','id'=>'21-ka-1'],
['text'=>' 2,やや感動なし ','value'=>'2','id'=>'21-ka-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'21-ka-3'],
['text'=>' 4,やや感動あり ','value'=>'4','id'=>'21-ka-4'],
['text'=>' 5,感動あり ','value'=>'5','id'=>'21-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_123">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>' 1,有名じゃない ','value'=>'1','id'=>'21-c-1'],
['text'=>' 2,やや有名じゃない ','value'=>'2','id'=>'21-c-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'21-c-3'],
['text'=>' 4,やや有名 ','value'=>'4','id'=>'21-c-4'],
['text'=>' 5,有名 ','value'=>'5','id'=>'21-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_124">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>' 1,なし ','value'=>'1','id'=>'21-w-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'21-w-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'21-w-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'21-w-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'21-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_125">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>' 1,なし ','value'=>'1','id'=>'21-t-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'21-t-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'21-t-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'21-t-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'21-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_126">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>' 1,なし ','value'=>'1','id'=>'21-ki-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'21-ki-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'21-ki-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'21-ki-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'21-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'21']) ?>
<div class="submit_21">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_21"><canvas width="300" height="300" id="sample21"></canvas></div>
<!--22-->
<iframe id="shinjuku" width="560" height="315" src="https://www.youtube.com/embed/hP9YgJhuCCo" frameborder="0" allowfullscreen></iframe>
<div class="text_g_22">
<div class="mtitle_22">
  新宿スワンⅡ
</div>
<div class="arasuji_22">
  <div class="arasuji_22_1">
    ス
  </div>
  カウト会社の新宿バーストが横浜に勢力を広げることになり、エース格となった白鳥龍彦（綾野剛）がその命を受ける。だが、横浜には横浜ウィザードのタキ（浅野忠信）が君臨。警察やヤクザともコネクションのあるタキの工作により、新宿バーストはピンチを迎えてしまう。龍彦は、歌舞伎町を守るために立ち上がり……。
</div>
</div>
<div class="reviewf_22">
  <div class="form_title_22">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_22'])?>
<div class="subtit_127">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>' 1,面白くない ','value'=>'1','id'=>'22-i-1'],
['text'=>' 2,やや面白くない ','value'=>'2','id'=>'22-i-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'22-i-3'],
['text'=>' 4,やや面白い ','value'=>'4','id'=>'22-i-4'],
['text'=>' 5,面白い ','value'=>'5','id'=>'22-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_128">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>' 1,感動なし ','value'=>'1','id'=>'22-ka-1'],
['text'=>' 2,やや感動なし ','value'=>'2','id'=>'22-ka-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'22-ka-3'],
['text'=>' 4,やや感動あり ','value'=>'4','id'=>'22-ka-4'],
['text'=>' 5,感動あり ','value'=>'5','id'=>'22-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_129">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>' 1,有名じゃない ','value'=>'1','id'=>'22-c-1'],
['text'=>' 2,やや有名じゃない ','value'=>'2','id'=>'22-c-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'22-c-3'],
['text'=>' 4,やや有名 ','value'=>'4','id'=>'22-c-4'],
['text'=>' 5,有名 ','value'=>'5','id'=>'22-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_130">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>' 1,なし ','value'=>'1','id'=>'22-w-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'22-w-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'22-w-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'22-w-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'22-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_131">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>' 1,なし ','value'=>'1','id'=>'22-t-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'22-t-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'22-t-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'22-t-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'22-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_132">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>' 1,なし ','value'=>'1','id'=>'22-ki-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'22-ki-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'22-ki-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'22-ki-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'22-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'22']) ?>
<div class="submit_22">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_22"><canvas width="300" height="300" id="sample22"></canvas></div>
<!--23-->
<iframe id="ousama" width="560" height="315" src="https://www.youtube.com/embed/HQ4kodiyKlo" frameborder="0" allowfullscreen></iframe>
<div class="text_g_23">
  <div class="mtitle_23">
王様のためのホログラム
  </div>
  <div class="arasuji_23">
    <div class="arasuji_23_1">
      大
    </div>
    手自転車メーカーの取締役を解任され何もかも失ったアラン・クレイ（トム・ハンクス）は、何とかIT企業に再就職する。早速出張を言い渡された彼は、祖国から遠く離れたサウジアラビアのジッダにやって来る。アランはまな娘の大学の学費を稼ぐためにも、何とかして国王に最新鋭のテレビ会議システムである「3Dホログラム」を売り込もうとするが……。
  </div>
</div>
<div class="reviewf_23">
  <div class="form_title_23">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'addRecord'],'class'=>'radio_23'])?>
<div class="subtit_133">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>' 1,面白くない ','value'=>'1','id'=>'23-i-1'],
['text'=>' 2,やや面白くない ','value'=>'2','id'=>'23-i-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'23-i-3'],
['text'=>' 4,やや面白い ','value'=>'4','id'=>'23-i-4'],
['text'=>' 5,面白い ','value'=>'5','id'=>'23-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_134">感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>' 1,感動なし ','value'=>'1','id'=>'23-ka-1'],
['text'=>' 2,やや感動なし ','value'=>'2','id'=>'23-ka-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'23-ka-3'],
['text'=>' 4,やや感動あり ','value'=>'4','id'=>'23-ka-4'],
['text'=>' 5,感動あり ','value'=>'5','id'=>'23-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_135">キャストの有名度:</div>
<?=$this->Form->radio("cast",
[['text'=>' 1,有名じゃない ','value'=>'1','id'=>'23-c-1'],
['text'=>' 2,やや有名じゃない ','value'=>'2','id'=>'23-c-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'23-c-3'],
['text'=>' 4,やや有名 ','value'=>'4','id'=>'23-c-4'],
['text'=>' 5,有名 ','value'=>'5','id'=>'23-c-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_136">独特の世界観:</span>
<?=$this->Form->radio("worldview",
[['text'=>' 1,なし ','value'=>'1','id'=>'23-w-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'23-w-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'23-w-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'23-w-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'23-w-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_137">話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>' 1,なし ','value'=>'1','id'=>'23-t-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'23-t-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'23-t-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'23-t-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'23-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_138">緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>' 1,なし ','value'=>'1','id'=>'23-ki-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'23-ki-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'23-ki-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'23-ki-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'23-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'23']) ?>
<div class="submit_23">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_23"><canvas width="300" height="300" id="sample23"></canvas></div>
</div>
<p id="pageTop"><a href="#"><img src="../images/ue.png" width="40px" height="40px"></i></a></p>
