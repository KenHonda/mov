<?php
for($i=1; $i<24; $i++){
$eee{$i} = array();
$tousuu{$i} = 0;
$s{$i} = 0;
$goukei{$i} = 0;
}
$goukeiKing = 0;
$goukeiQueen = 0;
$goukeiKnight = 0;

$result = $data->toArray();
foreach($result as $key => $value){
  if($value['workid'] == 1){
    $goukei{1} += $value['interest'];
    $goukei{1} += $value['kandou'];
    $goukei{1} += $value['cast'];
    $goukei{1} += $value['worldview'];
    $goukei{1} += $value['trend'];
    $goukei{1} += $value['kincho'];
    $eee{1}[] = $goukei{1};
}
  if($value['workid'] == 2){
    $goukei{2} += $value['interest'];
    $goukei{2} += $value['kandou'];
    $goukei{2} += $value['cast'];
    $goukei{2} += $value['worldview'];
    $goukei{2} += $value['trend'];
    $goukei{2} += $value['kincho'];
    $eee{2}[] = $goukei{2};
}
  if($value['workid'] == 3){
    $goukei{3} += $value['interest'];
    $goukei{3} += $value['kandou'];
    $goukei{3} += $value['cast'];
    $goukei{3} += $value['worldview'];
    $goukei{3} += $value['trend'];
    $goukei{3} += $value['kincho'];
    $eee{3}[] = $goukei{3};
}
  if($value['workid'] == 4){
    $goukei{4} += $value['interest'];
    $goukei{4} += $value['kandou'];
    $goukei{4} += $value['cast'];
    $goukei{4} += $value['worldview'];
    $goukei{4} += $value['trend'];
    $goukei{4} += $value['kincho'];
    $eee{4}[] = $goukei{4};
}
  if($value['workid'] == 5){
    $goukei{5} += $value['interest'];
    $goukei{5} += $value['kandou'];
    $goukei{5} += $value['cast'];
    $goukei{5} += $value['worldview'];
    $goukei{5} += $value['trend'];
    $goukei{5} += $value['kincho'];
    $eee{5}[] = $goukei{5};
}
  if($value['workid'] == 6){
    $goukei{6} += $value['interest'];
    $goukei{6} += $value['kandou'];
    $goukei{6} += $value['cast'];
    $goukei{6} += $value['worldview'];
    $goukei{6} += $value['trend'];
    $goukei{6} += $value['kincho'];
    $eee{6}[] = $goukei{6};
}
  if($value['workid'] == 7){
    $goukei{7} += $value['interest'];
    $goukei{7} += $value['kandou'];
    $goukei{7} += $value['cast'];
    $goukei{7} += $value['worldview'];
    $goukei{7} += $value['trend'];
    $goukei{7} += $value['kincho'];
    $eee{7}[] = $goukei{7};
}
  if($value['workid'] == 8){
    $goukei{8} += $value['interest'];
    $goukei{8} += $value['kandou'];
    $goukei{8} += $value['cast'];
    $goukei{8} += $value['worldview'];
    $goukei{8} += $value['trend'];
    $goukei{8} += $value['kincho'];
    $eee{8}[] = $goukei{8};
}
  if($value['workid'] == 9){
    $goukei{9} += $value['interest'];
    $goukei{9} += $value['kandou'];
    $goukei{9} += $value['cast'];
    $goukei{9} += $value['worldview'];
    $goukei{9} += $value['trend'];
    $goukei{9} += $value['kincho'];
    $eee{9}[] = $goukei{9};
}
  if($value['workid'] == 10){
    $goukei{10} += $value['interest'];
    $goukei{10} += $value['kandou'];
    $goukei{10} += $value['cast'];
    $goukei{10} += $value['worldview'];
    $goukei{10} += $value['trend'];
    $goukei{10} += $value['kincho'];
    $eee{10}[] = $goukei{10};
}
  if($value['workid'] == 11){
    $goukei{11} += $value['interest'];
    $goukei{11} += $value['kandou'];
    $goukei{11} += $value['cast'];
    $goukei{11} += $value['worldview'];
    $goukei{11} += $value['trend'];
    $goukei{11} += $value['kincho'];
    $eee{11}[] = $goukei{11};
}
  if($value['workid'] == 12){
    $goukei{12} += $value['interest'];
    $goukei{12} += $value['kandou'];
    $goukei{12} += $value['cast'];
    $goukei{12} += $value['worldview'];
    $goukei{12} += $value['trend'];
    $goukei{12} += $value['kincho'];
    $eee{12}[] = $goukei{12};
}
  if($value['workid'] == 13){
    $goukei{13} += $value['interest'];
    $goukei{13} += $value['kandou'];
    $goukei{13} += $value['cast'];
    $goukei{13} += $value['worldview'];
    $goukei{13} += $value['trend'];
    $goukei{13} += $value['kincho'];
    $eee{13}[] = $goukei{13};
}
  if($value['workid'] == 14){
    $goukei{14} += $value['interest'];
    $goukei{14} += $value['kandou'];
    $goukei{14} += $value['cast'];
    $goukei{14} += $value['worldview'];
    $goukei{14} += $value['trend'];
    $goukei{14} += $value['kincho'];
    $eee{14}[] = $goukei{14};
}
  if($value['workid'] == 15){
    $goukei{15} += $value['interest'];
    $goukei{15} += $value['kandou'];
    $goukei{15} += $value['cast'];
    $goukei{15} += $value['worldview'];
    $goukei{15} += $value['trend'];
    $goukei{15} += $value['kincho'];
    $eee{15}[] = $goukei{15};
}
  if($value['workid'] == 16){
    $goukei{16} += $value['interest'];
    $goukei{16} += $value['kandou'];
    $goukei{16} += $value['cast'];
    $goukei{16} += $value['worldview'];
    $goukei{16} += $value['trend'];
    $goukei{16} += $value['kincho'];
    $eee{16}[] = $goukei{16};
}
  if($value['workid'] == 17){
    $goukei{17} += $value['interest'];
    $goukei{17} += $value['kandou'];
    $goukei{17} += $value['cast'];
    $goukei{17} += $value['worldview'];
    $goukei{17} += $value['trend'];
    $goukei{17} += $value['kincho'];
    $eee{17}[] = $goukei{17};
}
  if($value['workid'] == 18){
    $goukei{18} += $value['interest'];
    $goukei{18} += $value['kandou'];
    $goukei{18} += $value['cast'];
    $goukei{18} += $value['worldview'];
    $goukei{18} += $value['trend'];
    $goukei{18} += $value['kincho'];
    $eee{18}[] = $goukei{18};
}
  if($value['workid'] == 19){
    $goukei{19} += $value['interest'];
    $goukei{19} += $value['kandou'];
    $goukei{19} += $value['cast'];
    $goukei{19} += $value['worldview'];
    $goukei{19} += $value['trend'];
    $goukei{19} += $value['kincho'];
    $eee{19}[] = $goukei{19};
}
  if($value['workid'] == 20){
    $goukei{20} += $value['interest'];
    $goukei{20} += $value['kandou'];
    $goukei{20} += $value['cast'];
    $goukei{20} += $value['worldview'];
    $goukei{20} += $value['trend'];
    $goukei{20} += $value['kincho'];
    $eee{20}[] = $goukei{20};
}
  if($value['workid'] == 21){
    $goukei{21} += $value['interest'];
    $goukei{21} += $value['kandou'];
    $goukei{21} += $value['cast'];
    $goukei{21} += $value['worldview'];
    $goukei{21} += $value['trend'];
    $goukei{21} += $value['kincho'];
    $eee{21}[] = $goukei{21};
}
  if($value['workid'] == 22){
    $goukei{22} += $value['interest'];
    $goukei{22} += $value['kandou'];
    $goukei{22} += $value['cast'];
    $goukei{22} += $value['worldview'];
    $goukei{22} += $value['trend'];
    $goukei{22} += $value['kincho'];
    $eee{22}[] = $goukei{22};
}
  if($value['workid'] == 23){
    $goukei{23} += $value['interest'];
    $goukei{23} += $value['kandou'];
    $goukei{23} += $value['cast'];
    $goukei{23} += $value['worldview'];
    $goukei{23} += $value['trend'];
    $goukei{23} += $value['kincho'];
    $eee{23}[] = $goukei{23};
}
}


for($i=1; $i<24; $i++){
$tousuu{$i} = count($eee{$i});
$s{$i} = $goukei{$i}/$tousuu{$i};
$goukeiGo[] = $s{$i};
}

$goukeiKing = max($goukeiGo);
if($goukeiKing == $s{1}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin#mad'>マッドマックス 怒りのデス・ロード</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[0] = 0;
}
if($goukeiKing == $s{2}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=bridge'>ブリッジ・オブ・スパイ</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[1] = 0;
}
if($goukeiKing == $s{3}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=odess'>オデッセイ</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[2] = 0;
}
if($goukeiKing == $s{4}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=money'>マネー・ショート 華麗なる大逆転</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[3] = 0;
}
if($goukeiKing == $s{5}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=revenant'>レヴェナント 蘇りし者</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[4] = 0;
}
if($goukeiKing == $s{6}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=room'>ルーム</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[5] = 0;
}
if($goukeiKing == $s{7}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=spot'>スポットライト 世紀のスクープ</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[6] = 0;
}
if($goukeiKing == $s{8}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=brook'>ブルックリン</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[7] = 0;
}
if($goukeiKing == $s{9}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=kimi'>君の名は。</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[8] = 0;
}
if($goukeiKing == $s{10}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=xmen'>X-MEN アポカリプス</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[9] = 0;
}
if($goukeiKing == $s{11}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=fant'>ファンタスティック・ビーストと魔法の旅</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[10] = 0;
}
if($goukeiKing == $s{12}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=knife'>溺れるナイフ</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[11] = 0;
}
if($goukeiKing == $s{13}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=shippu'>疾風ロンド</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[12] = 0;
}
if($goukeiKing == $s{14}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=final'>バイオハザード・ファイナル</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[13] = 0;
}
if($goukeiKing == $s{15}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=kaizoku'>海賊と呼ばれた男</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[14] = 0;
}
if($goukeiKing == $s{16}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=starwars'>ローグ・ワン/スターウォーズストーリー</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[15] == 0;
}
if($goukeiKing == $s{17}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=doryunouta'>土竜の唄 香港狂騒曲</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[16] = 0;
}
if($goukeiKing == $s{18}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=nerve'>NERVE ナーヴ 世界で一番危険なゲーム</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[17] = 0;
}
if($goukeiKing == $s{19}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=honnoji'>本能寺ホテル</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[18] = 0;
}
if($goukeiKing == $s{20}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=dirty'>ダーティ・グランパ</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[19] = 0;
}
if($goukeiKing == $s{21}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=consultant'>ザ・コンサルタント</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[20] = 0;
}
if($goukeiKing == $s{22}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=shinjuku'>新宿スワン</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[21] = 0;
}
if($goukeiKing == $s{23}){
  echo"<div class='x_1'>1位 <a class='tag_1' href='sakuhin?id=ousama'>王様のためのホログラム</a>&nbsp;<img class='kin' src='../images/kin.png' width='23' height='19'></div>";
  $goukeiGo[22] = 0;
}

echo"<br>";

$goukeiQueen = max($goukeiGo);
if($goukeiQueen == $s{1}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin#mad'>マッドマックス 怒りのデス・ロード</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[0] = 0;
}
if($goukeiQueen == $s{2}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=bridge'>ブリッジ・オブ・スパイ</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[1] = 0;
}
if($goukeiQueen == $s{3}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=odess'>オデッセイ</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[2] = 0;
}
if($goukeiQueen == $s{4}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=money'>マネー・ショート 華麗なる大逆転</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[3] = 0;
}
if($goukeiQueen == $s{5}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=revenant'>レヴェナント　蘇りし者</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[4] = 0;
}
if($goukeiQueen == $s{6}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=room'>ルーム</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[5] = 0;
}
if($goukeiQueen == $s{7}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=spot'>スポットライト 世紀のスクープ</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[6] = 0;
}
if($goukeiQueen == $s{8}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=brook'>ブルックリン</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[7] = 0;
}
if($goukeiQueen == $s{9}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=kimi'>君の名は。</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[8] = 0;
}
if($goukeiQueen == $s{10}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin#xme'>X-Men アポカリプス</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[9] = 0;
}
if($goukeiQueen == $s{11}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=fant'>ファンタスティック・ビーストと魔法の旅</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[10] = 0;
}
if($goukeiQueen == $s{12}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=knife'>溺れるナイフ</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[11] = 0;
}
if($goukeiQueen == $s{13}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=shippu'>疾風ロンド</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[12] = 0;
}
if($goukeiQueen == $s{14}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=final'>バイオハザード・ファイナル</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[13] = 0;
}
if($goukeiQueen == $s{15}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=kaizoku'>海賊と呼ばれた男</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[14] = 0;
}
if($goukeiQueen == $s{16}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=starwars'>ローグ・ワン/スターウォーズストーリー</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[15] = 0;
}
if($goukeiQueen == $s{17}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=doryunouta'>土竜の唄 香港狂騒曲</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[16] = 0;
}
if($goukeiQueen == $s{18}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=nerve'>NERVE ナーヴ 世界で一番危険なゲーム</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[17] = 0;
}
if($goukeiQueen == $s{19}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=honnoji'>本能寺ホテル</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[18] = 0;
}
if($goukeiQueen == $s{20}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=dirty'>ダーティ・グランパ</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[19] = 0;
}
if($goukeiQueen == $s{21}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=consultant'>ザ・コンサルタント</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[20] = 0;
}
if($goukeiQueen == $s{22}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=shinjuku'>新宿スワン</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[21] = 0;
}
if($goukeiQueen == $s{23}){
  echo"<div class='x_1'>2位 <a class='tag_1' href='sakuhin?id=ousama'>王様のためのホログラム</a>&nbsp;<img class='gin' src='../images/gin.png' width='23' height='19'></div>";
  $goukeiGo[22] = 0;
}

echo"<br>";

$goukeiKnight = max($goukeiGo);
if($goukeiKnight == $s{1}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin#mad'>マッドマックス 怒りのデス・ロード</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{2}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=bridge'>ブリッジ・オブ・スパイ</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{3}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=odess'>オデッセイ</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{4}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=money'>マネー・ショート 華麗なる大逆転</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{5}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=revenant'>レヴェナント 蘇りし者</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{6}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=room'>ルーム</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{7}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=spot'>スポットライト 世紀のスクープ</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{8}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=brook'>ブルックリン</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{9}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=kimi'>君の名は。</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{10}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin#xme'>X-MEN アポカリプス</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{11}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=fant'>ファンタスティック・ビーストと魔法の旅</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{12}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=knife'>溺れるナイフ</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{13}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=shippu'>疾風ロンド</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{14}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=final'>バイオハザード・ファイナル</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{15}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=kaizoku'>海賊と呼ばれた男</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{16}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=starwars'>ローグ・ワン/スターウォーズストーリー</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{17}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=doryunouta'>土竜の唄 香港狂騒曲</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{18}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=nerve'>NERVE ナーヴ 世界で一番危険なゲーム</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{19}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=honnoji'>本能寺ホテル</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{20}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=dirty'>ダーティ・グランパ</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{21}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=consultant'>ザ・コンサルタント</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{22}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=shippu'>新宿スワン</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
if($goukeiKnight == $s{23}){
  echo"<div class='x_1'>3位 <a class='tag_1' href='sakuhin?id=ousama'>王様のためのホログラム</a>&nbsp;<img class='dou' src='../images/dou.png' width='23' height='19'></div>";
}
echo"<br>";
