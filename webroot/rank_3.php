<?php
//感動

for($i=1; $i<24; $i++){
$eee{$i} = array();
$tousuu{$i} = 0;
$s{$i} = 0;
$goukei{$i} = 0;
}
if(is_array($goukeiKing)){
$goukeiKing = array();
}else{
$goukeiKing = 0;}
if(is_array($goukeiQueen)){
$goukeiQueen = array();
}else{
$goukeiQueen = 0;}
if(is_array($goukeiKnight)){
$goukeiKnight = array();
}else{
$goukeiKnight = 0;}

$result = $data->toArray();
foreach($result as $key => $value){
  if($value['workid'] == 1){
    $goukei{1} += $value['kandou'];
    $eee{1}[] = $goukei{1};
}
  if($value['workid'] == 2){
    $goukei{2} += $value['kandou'];
    $eee{2}[] = $goukei{2};
}
  if($value['workid'] == 3){
    $goukei{3} += $value['kandou'];
    $eee{3}[] = $goukei{3};
}
  if($value['workid'] == 4){
    $goukei{4} += $value['kandou'];
    $eee{4}[] = $goukei{4};
}
  if($value['workid'] == 5){
    $goukei{5} += $value['kandou'];
    $eee{5}[] = $goukei{5};
}
  if($value['workid'] == 6){
    $goukei{6} += $value['kandou'];
    $eee{6}[] = $goukei{6};
}
  if($value['workid'] == 7){
    $goukei{7} += $value['kandou'];
    $eee{7}[] = $goukei{7};
}
  if($value['workid'] == 8){
    $goukei{8} += $value['kandou'];
    $eee{8}[] = $goukei{8};
}
  if($value['workid'] == 9){
    $goukei{9} += $value['kandou'];
    $eee{9}[] = $goukei{9};
}
  if($value['workid'] == 10){
    $goukei{10} += $value['kandou'];
    $eee{10}[] = $goukei{10};
}
  if($value['workid'] == 11){
    $goukei{11} += $value['kandou'];
    $eee{11}[] = $goukei{11};
}
  if($value['workid'] == 12){
    $goukei{12} += $value['kandou'];
    $eee{12}[] = $goukei{12};
}
  if($value['workid'] == 13){
    $goukei{13} += $value['kandou'];
    $eee{13}[] = $goukei{13};
}
  if($value['workid'] == 14){
    $goukei{14} += $value['kandou'];
    $eee{14}[] = $goukei{14};
}
  if($value['workid'] == 15){
    $goukei{15} += $value['kandou'];
    $eee{15}[] = $goukei{15};
}
  if($value['workid'] == 16){
    $goukei{16} += $value['kandou'];
    $eee{16}[] = $goukei{16};
}
  if($value['workid'] == 17){
    $goukei{17} += $value['kandou'];
    $eee{17}[] = $goukei{17};
}
  if($value['workid'] == 18){
    $goukei{18} += $value['kandou'];
    $eee{18}[] = $goukei{18};
}
  if($value['workid'] == 19){
    $goukei{19} += $value['kandou'];
    $eee{19}[] = $goukei{19};
}
  if($value['workid'] == 20){
    $goukei{20} += $value['kandou'];
    $eee{20}[] = $goukei{20};
}
  if($value['workid'] == 21){
    $goukei{21} += $value['kandou'];
    $eee{21}[] = $goukei{21};
}
  if($value['workid'] == 22){
    $goukei{22} += $value['kandou'];
    $eee{22}[] = $goukei{22};
}
  if($value['workid'] == 23){
    $goukei{23} += $value['kandou'];
    $eee{23}[] = $goukei{23};
}
}


for($i=1; $i<24; $i++){
$tousuu{$i} = count($eee{$i});
$s{$i} = $goukei{$i}/$tousuu{$i};
$goukeiSo[] = $s{$i};
}

$goukeiKing = max($goukeiSo);
if($goukeiKing == $s{1}){
  echo"<div class='y_2' class='y_2'>1位 <a class='tag_3' href='sakuhin#mad'>マッドマックス 怒りのデス・ロード</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[0] = 0;
}
if($goukeiKing == $s{2}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=bridge'>ブリッジ・オブ・スパイ</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[1] = 0;
}
if($goukeiKing == $s{3}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=odess'>オデッセイ</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[2] = 0;
}
if($goukeiKing == $s{4}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=money'>マネー・ショート 華麗なる大逆転</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[3] = 0;
}
if($goukeiKing == $s{5}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=revenant'>レヴェナント 蘇りし者</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[4] = 0;
}
if($goukeiKing == $s{6}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=room'>ルーム</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[5] = 0;
}
if($goukeiKing == $s{7}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=spot'>スポットライト 世紀のスクープ</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[6] = 0;
}
if($goukeiKing == $s{8}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=brook'>ブルックリン</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[7] = 0;
}
if($goukeiKing == $s{9}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=kimi'>君の名は。</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[8] = 0;
}
if($goukeiKing == $s{10}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=xmen'>X-MEN アポカリプス</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[9] = 0;
}
if($goukeiKing == $s{11}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=fant'>ファンタスティック・ビーストと魔法の旅</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[10] = 0;
}
if($goukeiKing == $s{12}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=knife'>溺れるナイフ</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[11] = 0;
}
if($goukeiKing == $s{13}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=shippu'>疾風ロンド</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[12] = 0;
}
if($goukeiKing == $s{14}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=final'>バイオハザード・ファイナル</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[13] = 0;
}
if($goukeiKing == $s{15}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=kaizoku'>海賊と呼ばれた男</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[14] = 0;
}
if($goukeiKing == $s{16}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=starwars'>ローグ・ワン/スターウォーズストーリー</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[15] == 0;
}
if($goukeiKing == $s{17}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=doryunouta'>土竜の歌 香港狂騒曲</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[16] = 0;
}
if($goukeiKing == $s{18}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=nerve'>NERVE ナーヴ 世界で一番危険なゲーム</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[17] = 0;
}
if($goukeiKing == $s{19}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=honnoji'>本能寺ホテル</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[18] = 0;
}
if($goukeiKing == $s{20}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=dirty'>ダーティ・グランパ</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[19] = 0;
}
if($goukeiKing == $s{21}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=consultant'>ザ・コンサルタント</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[20] = 0;
}
if($goukeiKing == $s{22}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=shinjuku'>新宿スワン</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[21] = 0;
}
if($goukeiKing == $s{23}){
  echo"<div class='y_2'>1位 <a class='tag_3' href='sakuhin?id=ousama'>王様のためのホログラム</a>&nbsp;<img class='kin3' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiSo[22] = 0;
}

echo"<br>";

$goukeiQueen = max($goukeiSo);
if($goukeiQueen == $s{1}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin#mad'>マッドマックス 怒りのデス・ロード</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[0] = 0;
}
if($goukeiQueen == $s{2}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=bridge'>ブリッジ・オブ・スパイ</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[1] = 0;
}
if($goukeiQueen == $s{3}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=odess'>オデッセイ</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[2] = 0;
}
if($goukeiQueen == $s{4}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=money'>マネーショート 華麗なる大逆転</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[3] = 0;
}
if($goukeiQueen == $s{5}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=revenant'>レヴェナント 蘇りし者</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[4] = 0;
}
if($goukeiQueen == $s{6}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=room'>ルーム</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[5] = 0;
}
if($goukeiQueen == $s{7}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=spot'>スポットライト 世紀のスクープ</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[6] = 0;
}
if($goukeiQueen == $s{8}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=brook'>ブルックリン</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[7] = 0;
}
if($goukeiQueen == $s{9}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=kimi'>君の名は。</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[8] = 0;
}
if($goukeiQueen == $s{10}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=xmen'>X-MEN アポカリプス</a></div><&nbsp;<img class='gin2' src='../images/gin.png' width='23' height='19'>";
  $goukeiSo[9] = 0;
}
if($goukeiQueen == $s{11}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=fant'>ファンタスティック・ビーストと魔法の旅</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[10] = 0;
}
if($goukeiQueen == $s{12}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=knife'>溺れるナイフ</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[11] = 0;
}
if($goukeiQueen == $s{13}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=shippu'>疾風ロンド</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[12] = 0;
}
if($goukeiQueen == $s{14}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=final'>バイオハザード・ファイナル</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[13] = 0;
}
if($goukeiQueen == $s{15}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=kaizoku'>海賊と呼ばれた男</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[14] = 0;
}
if($goukeiQueen == $s{16}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=starwars'>ローグ・ワン/スターウォーズストーリー</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[15] = 0;
}
if($goukeiQueen == $s{17}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=doryunouta'>土竜の歌 香港狂騒曲</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[16] = 0;
}
if($goukeiQueen == $s{18}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=nerve'>NERVE ナーヴ 世界で一番危険なゲーム</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[17] = 0;
}
if($goukeiQueen == $s{19}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=honnoji'>本能寺ホテル</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[18] = 0;
}
if($goukeiQueen == $s{20}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=dirty'>ダーティ・グランパ</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[19] = 0;
}
if($goukeiQueen == $s{21}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=consultant'>ザ・コンサルタント</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[20] = 0;
}
if($goukeiQueen == $s{22}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=shinjuku'>新宿スワン</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[21] = 0;
}
if($goukeiQueen == $s{23}){
  echo"<div class='y_2'>2位 <a class='tag_3' href='sakuhin?id=ousama'>王様のためのホログラム</a>&nbsp;<img class='gin3' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiSo[22] = 0;
}

echo"<br>";

$goukeiKnight = max($goukeiSo);
if($goukeiKnight == $s{1}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin#mad'>マッドマックス 怒りのデス・ロード</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{2}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=bridge'>ブリッジ・オブ・スパイ</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{3}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=odess'>オデッセイ</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{4}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=money'>マネー・ショート 華麗なる大逆転</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{5}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=revenant'>レヴェナント 蘇りし者</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{6}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=room'>ルーム</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{7}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=spot'>スポットライト 世紀のスクープ</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{8}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=brook'>ブルックリン</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{9}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=kimi'>君の名は。</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{10}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=xmen'>X-MEN アポカリプス</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{11}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=fant'>ファンタスティック・ビーストと魔法の旅</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{12}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=knife'>溺れるナイフ</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{13}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=shippu'>疾風ロンド</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{14}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=final'>バイオハザード・ファイナル</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{15}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=kaizoku'>海賊と呼ばれた男</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{16}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=starwars'>ローグ・ワン/スターウォーズストーリー</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{17}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=doryunouta'>土竜の唄 香港狂騒曲</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{18}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=nerve'>NERVE ナーヴ 世界で一番危険なゲーム</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{19}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=honnoji'>本能寺ホテル</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{20}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=dirty'>ダーティ・グランパ</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{21}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=consultant'>ザ・コンサルタント</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{22}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=shippu'>新宿スワン</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{23}){
  echo"<div class='y_2'>3位 <a class='tag_3' href='sakuhin?id=ousama'>王様のためのホログラム</a>&nbsp;<img class='dou3' src='../images/dou.png' width='23' height='19'></div>";
}
echo"<br>";
