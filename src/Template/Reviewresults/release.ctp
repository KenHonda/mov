<?php
$flag_1 = NULL;
<<<<<<< HEAD
require_once('./re.php');
function json_safe_encode($data){
    return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
}
if($this->request->session()->check('flag_1')){
$flag_1 = $this->request->session()->consume('flag_1');
}
if($flag_1 == 'success'){ ?>
<script>
alert('投稿されました');
</script>
<?php }elseif($flag_1 == 'failed'){ ?>
=======
if($this->request->session()->check('flag_1')){
$flag_1 = $this->request->session()->consume('flag_1');
}
if($flag_1 === 'success'){ ?>
<script>
alert('投稿されました');
</script>
<?php }elseif($flag_1 === 'failed'){ ?>
>>>>>>> rebase前
<script>
alert('エラーがありました');
</script>
<?php } ?>
<<<<<<< HEAD
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/load.js" ></script>
<script type="text/javascript" src="../js/slide.js">
</script>
<script type="text/javascript" src="../js/scroll.js">
</script>
<script type="text/javascript" src="../js/ie.js">
</script>
<script id="script" type="text/javascript" src="../js/release_rader.js"
 data-i9='<?php echo json_safe_encode($i{9});?>' data-k9='<?php echo json_safe_encode($k{9});?>' data-c9='<?php echo json_safe_encode($c{9});?>' data-w9='<?php echo json_safe_encode($w{9});?>' data-t9='<?php echo json_safe_encode($t{9});?>' data-ki9='<?php echo json_safe_encode($ki{9});?>'
 data-i11='<?php echo json_safe_encode($i{11});?>' data-k11='<?php echo json_safe_encode($k{11});?>' data-c11='<?php echo json_safe_encode($c{11});?>' data-w11='<?php echo json_safe_encode($w{11});?>' data-t11='<?php echo json_safe_encode($t{11});?>' data-ki11='<?php echo json_safe_encode($ki{11});?>'
 data-i14='<?php echo json_safe_encode($i{14});?>' data-k14='<?php echo json_safe_encode($k{14});?>' data-c14='<?php echo json_safe_encode($c{14});?>' data-w14='<?php echo json_safe_encode($w{14});?>' data-t14='<?php echo json_safe_encode($t{14});?>' data-ki14='<?php echo json_safe_encode($ki{14});?>'
 data-i15='<?php echo json_safe_encode($i{15});?>' data-k15='<?php echo json_safe_encode($k{15});?>' data-c15='<?php echo json_safe_encode($c{15});?>' data-w15='<?php echo json_safe_encode($w{15});?>' data-t15='<?php echo json_safe_encode($t{15});?>' data-ki15='<?php echo json_safe_encode($ki{15});?>'
 data-i16='<?php echo json_safe_encode($i{16});?>' data-k16='<?php echo json_safe_encode($k{16});?>' data-c16='<?php echo json_safe_encode($c{16});?>' data-w16='<?php echo json_safe_encode($w{16});?>' data-t16='<?php echo json_safe_encode($t{16});?>' data-ki16='<?php echo json_safe_encode($ki{16});?>'
 data-i17='<?php echo json_safe_encode($i{17});?>' data-k17='<?php echo json_safe_encode($k{17});?>' data-c17='<?php echo json_safe_encode($c{17});?>' data-w17='<?php echo json_safe_encode($w{17});?>' data-t17='<?php echo json_safe_encode($t{17});?>' data-ki17='<?php echo json_safe_encode($ki{17});?>'>
</script>
<link rel="stylesheet" type="text/css" href="../css/release.css">
<div id="loader-bg">
<div id="loader">
  <img src="../images/gif-load.gif" width="27px" height="27px" alt="Now Loading..." />
</div>
</div>
=======
<script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="../js/release.js" ></script>
<script type="text/javascript" src="../js/scroll.js">
</script>
<script id="script" type="text/javascript" src="../js/release_rader.js"
 data-package='<?php echo $data;?>'>
</script>
<link rel="stylesheet" type="text/css" href="../css/release.css">
>>>>>>> rebase前
<div class="content_3" id="wrap">
<!--9-->
<div class="youtube_1">
<iframe width="560" height="315" src="https://www.youtube.com/embed/k4xGqY5IDBE" frameborder="0" allowfullscreen></iframe>
</div>
<div class="text_g_1">
<div class="mtitle_1">
  君の名は。
</div>
<div class="arasuji_1">
  <span class="arasuji_1_1">1</span>000年に1度のすい星来訪が、1か月後に迫る日本。山々に囲まれた田舎町に住む女子高生の三葉は、町長である父の選挙運動や、家系の神社の風習などに鬱屈（うっくつ）していた。それゆえに都会への憧れを強く持っていたが、ある日彼女は自分が都会に暮らしている少年になった夢を見る。夢では東京での生活を楽しみながらも、その不思議な感覚に困惑する三葉。一方、東京在住の男子高校生・瀧も自分が田舎町に生活する少女になった夢を見る。やがて、その奇妙な夢を通じて彼らは引き合うようになっていくが……。
</div>
</div>
<div class="reviewf_1">
<div class="form_title_1">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'raddRecord'],'class'=>'radio_1']) ?>
<?=$this->Form->hidden("workid",['name'=>'workid','value'=>'9']) ?>
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
<div class="subtit_2">
感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1'],
['text'=>'  2,やや感動なし ','value'=>'2'],
['text'=>'  3,普通 ','value'=>'3'],
['text'=>'  4,やや感動あり ','value'=>'4'],
['text'=>'  5,感動あり ','value'=>'5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_3">
キャストの有名度:</div>
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
<span class="subtit_4">
独特の世界観:</span>
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
<span class="subtit_5">
話題性:</span>
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
<span class="subtit_6">
緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>'  1,なし ','value'=>'1'],
['text'=>'  2,ややなし ','value'=>'2'],
['text'=>'  3,普通 ','value'=>'3'],
['text'=>'  4,ややあり ','value'=>'4'],
['text'=>'  5,あり ','value'=>'5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="submit_1">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_1"><canvas width="300" height="300" id="sample9"></canvas></div>

<!--11-->
<iframe width="560" height="315" src="https://www.youtube.com/embed/C5y9guceh6M" frameborder="0" allowfullscreen></iframe>
<div class="text_g_2">
  <div class="mtitle_2">
    ファンタスティックビーストと魔法使いの旅
  </div>
  <div class="arasuji_2">
    <div class="arasuji_2_1">
      魔
    </div>
    法動物学者ニュート・スキャマンダー（エディ・レッドメイン）は、魔法動物の調査と保護のためニューヨークを訪問する。ある日、彼の魔法のトランクが人間のものと取り違えられ、魔法動物たちが人間の世界に逃亡してしまう。街中がパニックに陥る中、ニュートはティナ（キャサリン・ウォーターストン）らと共に追跡を開始するが……。
  </div>
</div>
<div class="reviewf_2">
<div class="form_title_2">
評価投稿フォーム:</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'raddRecord'],'class'=>'radio_2'])?>
<?=$this->Form->hidden("workid",['value'=>'11']) ?>
<div class="subtit_7">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1','id'=>'11-i-1'],
['text'=>'  2,やや面白くない ','value'=>'2','id'=>'11-i-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'11-i-3'],
['text'=>'  4,やや面白い ','value'=>'4','id'=>'11-i-4'],
['text'=>'  5,面白い ','value'=>'5','id'=>'11-i-5'],
],
['label'=>'true','value'=>'1']
) ?>
<div class="subtit_7">
感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1','id'=>'11-ka-1'],
['text'=>'  2,やや感動なし ','value'=>'2','id'=>'11-ka-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'11-ka-3'],
['text'=>'  4,やや感動あり ','value'=>'4','id'=>'11-ka-4'],
['text'=>'  5,感動あり ','value'=>'5','id'=>'11-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_8">
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
<span class="subtit_9">
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
<span class="subtit_10">
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
<span class="subtit_11">
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
<div class="submit_2">
<?=$this->Form->submit("投稿") ?>
</div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_2"><canvas width="300" height="300" id="sample11"></canvas></div>

<!--14-->
<iframe width="560" height="315" src="https://www.youtube.com/embed/fsUmSwhLfjM" frameborder="0" allowfullscreen></iframe>
<div class="text_g_3">
  <div class="mtitle_3">
    バイオハザード:ザ・ファイナル
  </div>
  <div class="arasuji_3">
    <div class="arasuji_3_1">
      ア
    </div>
    リス（ミラ・ジョヴォヴィッチ）は、レッドクイーンから48時間後に人類が滅びると告げられる。そして、宿敵アンブレラ社が放った膨大な数のアンデッドが地上を占領。アリスはラクーンシティに戻って、生還したクレアやコバルトらと合流し、アンブレラ社の心臓部であるハイブを潰そうとするが……。
  </div>
</div>
<div class="reviewf_3">
<div class="form_title_3">
評価投稿フォーム:</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'raddRecord'],'class'=>'radio_3'])?>
<?=$this->Form->hidden("workid",['value'=>'14']) ?>
<div class="subtit_12">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1','id'=>'14-i-1'],
['text'=>'  2,やや面白くない ','value'=>'2','id'=>'14-i-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'14-i-3'],
['text'=>'  4,やや面白い ','value'=>'4','id'=>'14-i-4'],
['text'=>'  5,面白い ','value'=>'5','id'=>'14-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_13">
感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1','id'=>'14-ka-1'],
['text'=>'  2,やや感動なし ','value'=>'2','id'=>'14-ka-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'14-ka-3'],
['text'=>'  4,やや感動あり ','value'=>'4','id'=>'14-ka-4'],
['text'=>'  5,感動あり ','value'=>'5','id'=>'14-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_14">
キャストの有名度:</div>
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
<span class="subtit_15">
独特の世界観:</span>
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
<span class="subtit_16">
話題性:</span>
<?=$this->Form->radio("trend",
[['text'=>'  1,なし ','value'=>'1','id'=>'14-t-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'14-t-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'14-t-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'14-t-5'],
['text'=>'  5,あり ','value'=>'5','id'=>'14-t-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<br>
<span class="subtit_17">
緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>'  1,なし ','value'=>'1','id'=>'14-ki-1'],
['text'=>'  2,ややなし ','value'=>'2','id'=>'14-ki-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'14-ki-3'],
['text'=>'  4,ややあり ','value'=>'4','id'=>'14-ki-4'],
['text'=>'  5,あり ','value'=>'5','id'=>'14-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="submit_3"><?=$this->Form->submit("投稿") ?></div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_3"><canvas width="300" height="300" id="sample14"></canvas></div>

<!--15-->
<iframe width="560" height="315" src="https://www.youtube.com/embed/D9emnxN_SSM" frameborder="0" allowfullscreen></iframe>
<div class="text_g_4">
  <div class="mtitle_4">
    海賊と呼ばれた男
  </div>
  <div class="arasuji_4">
    <div class="arasuji_4_1">
    敗
    </div>
    戦後の1945年、東京。石油会社・国岡商店を率いる国岡鐡造（岡田准一）は、日本人としての誇りを持ち復興に向け突き進もうと従業員を激励する。戦後の混乱期にもかかわらず誰も解雇せず、独自の経営哲学と行動力で事業を広げていく。やがて欧米の石油メジャーも国岡を警戒し、その強大な包囲網により同社の石油輸入ルートは全て封鎖されてしまうが……。
  </div>
</div>
<div class="reviewf_4">
  <div class="form_title_4">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'raddRecord'],'class'=>'radio_4'])?>
<?=$this->Form->hidden("workid",['value'=>'15']) ?>
<br>話の面白さ:<br>
<?=$this->Form->radio("interest",
[['text'=>'  1,面白くない ','value'=>'1','id'=>'15-i-1'],
['text'=>'  2,やや面白くない ','value'=>'2','id'=>'15-i-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'15-i-3'],
['text'=>'  4,やや面白い ','value'=>'4','id'=>'15-i-4'],
['text'=>'  5,面白い ','value'=>'5','id'=>'15-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_18">
感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>'  1,感動なし ','value'=>'1','id'=>'15-ka-1'],
['text'=>'  2,やや感動なし ','value'=>'2','id'=>'15-ka-2'],
['text'=>'  3,普通 ','value'=>'3','id'=>'15-ka-3'],
['text'=>'  4,やや感動あり ','value'=>'4','id'=>'15-ka-4'],
['text'=>'  5,感動あり ','value'=>'5','id'=>'15-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_19">
キャストの有名度:</div>
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
<span class="subtit_20">
独特の世界観:</span>
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
<span class="subtit_21">
話題性:</span>
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
<span class="subtit_22">
緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>' 1,なし ','value'=>'1','id'=>'15-ki-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'15-ki-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'15-ki-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'15-ki-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'15-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="submit_4"><?=$this->Form->submit("投稿") ?></div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_4"><canvas width="300" height="300" id="sample15"></canvas></div>
<<<<<<< HEAD

=======
<?php /*
>>>>>>> rebase前
<!--16-->
<iframe width="560" height="315" src="https://www.youtube.com/embed/aDgww2IICBs" frameborder="0" allowfullscreen></iframe>
<div class="text_g_5">
  <div class="mtitle_5">
    ローグ・ワン/スターウォーズストーリー
  </div>
  <div class="arasuji_5">
    <div class="arasuji_5_1">
      帝
    </div>
    国軍の誇る究極兵器デス・スターによって、銀河は混乱と恐怖にさらされていた。窃盗、暴行、書類偽造などの悪事を重ねてきたジン（フェリシティ・ジョーンズ）は反乱軍に加わり、あるミッションを下される。それはデス・スターの設計図を奪うという、困難かつ無謀なものであった。彼女を筆頭に、キャシアン（ディエゴ・ルナ）、チアルート（ドニー・イェン）、ベイズ（チアン・ウェン）、ボーティー（リズ・アーメッド）といったメンバーで極秘部隊ローグ・ワンが結成され、ミッションが始動するが……。
  </div>
</div>
<div class="reviewf_5">
<div class="form_title_5">評価投稿フォーム:</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'raddRecord'],'class'=>'radio_5'])?>
<?=$this->Form->hidden("workid",['value'=>'16']) ?>
<div class="subtit_23">話の面白さ:</div>
<?=$this->Form->radio("interest",
[['text'=>' 1,面白くない ','value'=>'1','id'=>'16-i-1'],
['text'=>' 2,やや面白くない ','value'=>'2','id'=>'16-i-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'16-i-3'],
['text'=>' 4,やや面白い ','value'=>'4','id'=>'16-i-4'],
['text'=>' 5,面白い ','value'=>'5','id'=>'16-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_24">
感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>' 1,感動なし ','value'=>'1','id'=>'16-ka-1'],
['text'=>' 2,やや感動なし ','value'=>'2','id'=>'16-ka-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'16-ka-3'],
['text'=>' 4,やや感動あり ','value'=>'4','id'=>'16-ka-4'],
['text'=>' 5,感動あり ','value'=>'5','id'=>'16-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_25">
キャストの有名度:</div>
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
<span class="subtit_26">
独特の世界観:</span>
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
<span class="subtit_27">
話題性:</span>
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
<span class="subtit_28">
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
<div class="submit_5"><?=$this->Form->submit("投稿") ?></div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_5"><canvas width="300" height="300" id="sample16"></canvas></div>

<!--17-->
<iframe width="560" height="315" src="https://www.youtube.com/embed/MucWGlZ56Zo" frameborder="0" allowfullscreen></iframe>
<div class="text_g_6">
  <div class="mtitle_6">
    土竜の唄　香港狂騒曲
  </div>
  <div class="arasuji_6">
    <div class="arasuji_6_1">
    犯
    </div>
    罪組織・数寄矢会に潜り込んだ潜入捜査官モグラの菊川玲二（生田斗真）は、日浦組組長・日浦匡也（堤真一）と兄弟の契りを交わし、思いがけず日浦組若頭に就任。そのころ、容姿・頭脳・人望もピカイチの警官・兜真矢（瑛太）が警視庁組織犯罪対策部課長に就任し、玲二の逮捕に動き始める。一方玲二は、最終ターゲットの数寄矢会会長・轟周宝（岩城滉一）からチャイニーズマフィア仙骨竜の撲滅と、轟と娘のボディーガードを任され……。
  </div>
</div>
<div class="reviewf_6">
  <div class="form_title_6">
評価投稿フォーム:
</div>
<?=$this->Form->create($entity,['type'=>'post','url'=>['action'=>'raddRecord'],'class'=>'radio_6'])?>
<?=$this->Form->hidden("workid",['value'=>'17']) ?>
<br>話の面白さ:<br>
<?=$this->Form->radio("interest",
[['text'=>' 1,面白くない ','value'=>'1','id'=>'17-i-1'],
['text'=>' 2,やや面白くない ','value'=>'2','id'=>'17-i-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'17-i-3'],
['text'=>' 4,やや面白い ','value'=>'4','id'=>'17-i-4'],
['text'=>' 5,面白い ','value'=>'5','id'=>'17-i-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_29">
感動:</div>
<?=$this->Form->radio("kandou",
[['text'=>' 1,感動なし ','value'=>'1','id'=>'17-ka-1'],
['text'=>' 2,やや感動なし ','value'=>'2','id'=>'17-ka-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'17-ka-3'],
['text'=>' 4,やや感動あり ','value'=>'4','id'=>'17-ka-4'],
['text'=>' 5,感動あり ','value'=>'5','id'=>'17-ka-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="subtit_30">
キャストの有名度:</div>
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
<span class="subtit_31">
独特の世界観:</span>
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
<span class="subtit_32">
話題性:</span>
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
<span class="subtit_33">
緊張感:</span>
<?=$this->Form->radio("kincho",
[['text'=>' 1,なし ','value'=>'1','id'=>'17-ki-1'],
['text'=>' 2,ややなし ','value'=>'2','id'=>'17-ki-2'],
['text'=>' 3,普通 ','value'=>'3','id'=>'17-ki-3'],
['text'=>' 4,ややあり ','value'=>'4','id'=>'17-ki-4'],
['text'=>' 5,あり ','value'=>'5','id'=>'17-ki-5'],
],
['label'=>'true', 'value'=>'1']
) ?>
<div class="submit_6"><?=$this->Form->submit("投稿") ?></div>
<?=$this->Form->end(); ?>
</div>
<div class="sample_6"><canvas width="300" height="300" id="sample17"></canvas></div>

</div>
<<<<<<< HEAD
=======
*/?>
>>>>>>> rebase前
<p id="pageTop"><a href="#"><img src="../images/ue.png" width="40px" height="40px"></i></a></p>
