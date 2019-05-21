<?php
$g11i = 0;
$g11k = 0;
$g11c = 0;
$g11w = 0;
$g11t = 0;
$g11ki = 0;

$gi14 = 0;
$gk14 = 0;
$gc14 = 0;
$gw14 = 0;
$gt14 = 0;
$gki14 = 0;

$gi15 = 0;
$gk15 = 0;
$gc15 = 0;
$gw15 = 0;
$gt15 = 0;
$gki15 = 0;


$gi16 = 0;
$gk16 = 0;
$gc16 = 0;
$gw16 = 0;
$gt16 = 0;
$gki16 = 0;

$gi17 = 0;
$gk17 = 0;
$gc17 = 0;
$gw17 = 0;
$gt17 = 0;
$gki17 = 0;

$gi18 = 0;
$gk18 = 0;
$gc18 = 0;
$gw18 = 0;
$gt18 = 0;
$gki18 = 0;

$gi19 = 0;
$gk19 = 0;
$gc19 = 0;
$gw19 = 0;
$gt19 = 0;
$gki19 = 0;


$result = $data->toArray();
foreach($result as $key => $value){
  if($value['workid'] == '11'){
    $g11i += $value['interest'];
    $h11i[] = $value['interest'];
    $g11k += $value['kandou'];
    $h11k[] = $value['kandou'];
    $g11c += $value['cast'];
    $h11c[] = $value['cast'];
    $g11w += $value['worldview'];
    $h11w[] = $value['worldview'];
    $g11t += $value['trend'];
    $h11t[] = $value['trend'];
    $g11ki += $value['kincho'];
    $h11ki[] = $value['kincho'];
  }
  if($value['workid'] == '14'){
    $gi14 += $value['interest'];
    $hi14[] = $value['interest'];
    $gk14 += $value['kandou'];
    $hk14[] = $value['kandou'];
    $gc14 += $value['cast'];
    $hc14[] = $value['cast'];
    $gw14 += $value['worldview'];
    $hw14[] = $value['worldview'];
    $gt14 += $value['trend'];
    $ht14[] = $value['trend'];
    $gki14 += $value['kincho'];
    $hki14[] = $value['kincho'];
  }
  if($value['workid'] == '15'){
    $gi15 += $value['interest'];
    $hi15[] = $value['interest'];
    $gk15 += $value['kandou'];
    $hk15[] = $value['kandou'];
    $gc15 += $value['cast'];
    $hc15[] = $value['cast'];
    $gw15 += $value['worldview'];
    $hw15[] = $value['worldview'];
    $gt15 += $value['trend'];
    $ht15[] = $value['trend'];
    $gki15 += $value['kincho'];
    $hki15[] = $value['kincho'];
  }
  if($value['workid'] == '16'){
    $gi16 += $value['interest'];
    $hi16[] = $value['interest'];
    $gk16 += $value['kandou'];
    $hk16[] = $value['kandou'];
    $gc16 += $value['cast'];
    $hc16[] = $value['cast'];
    $gw16 += $value['worldview'];
    $hw16[] = $value['worldview'];
    $gt16 += $value['trend'];
    $ht16[] = $value['trend'];
    $gki16 += $value['kincho'];
    $hki16[] = $value['kincho'];
  }
  if($value['workid'] == '17'){
    $gi17 += $value['interest'];
    $hi17[] = $value['interest'];
    $gk17 += $value['kandou'];
    $hk17[] = $value['kandou'];
    $gc17 += $value['cast'];
    $hc17[] = $value['cast'];
    $gw17 += $value['worldview'];
    $hw17[] = $value['worldview'];
    $gt17 += $value['trend'];
    $ht17[] = $value['trend'];
    $gki17 += $value['kincho'];
    $hki17[] = $value['kincho'];
  }
  if($value['workid'] == '18'){
    $gi18 += $value['interest'];
    $hi18[] = $value['interest'];
    $gk18 += $value['kandou'];
    $hk18[] = $value['kandou'];
    $gc18 += $value['cast'];
    $hc18[] = $value['cast'];
    $gw18 += $value['worldview'];
    $hw18[] = $value['worldview'];
    $gt18 += $value['trend'];
    $ht18[] = $value['trend'];
    $gki18 += $value['kincho'];
    $hki18[] = $value['kincho'];
  }
  if($value['workid'] == '19'){
    $gi19 += $value['interest'];
    $hi19[] = $value['interest'];
    $gk19 += $value['kandou'];
    $hk19[] = $value['kandou'];
    $gc19 += $value['cast'];
    $hc19[] = $value['cast'];
    $gw19 += $value['worldview'];
    $hw19[] = $value['worldview'];
    $gt19 += $value['trend'];
    $ht19[] = $value['trend'];
    $gki19 += $value['kincho'];
    $hki19[] = $value['kincho'];
  }
}
$i11co = count($h11i);
$i11 = sprintf('%.2f', $g11i/$i11co);
$k11co = count($h11k);
$k11 = sprintf('%.2f', $g11k/$k11co);
$c11co = count($h11c);
$c11 = sprintf('%.2f', $g11c/$c11co);
$w11co = count($h11w);
$w11 = sprintf('%.2f', $g11w/$w11co);
$t11co = count($h11t);
$t11 = sprintf('%.2f', $g11t/$t11co);
$ki11co = count($h11ki);
$ki11 = sprintf('%.2f', $g11ki/$ki11co);


$ico14 = count($hi14);
$i14 = sprintf('%.2f', $gi14/$ico14);
$kco14 = count($hk14);
$k14 = sprintf('%.2f', $gk14/$kco14);
$cco14 = count($hc14);
$c14 = sprintf('%.2f', $gc14/$cco14);
$wco14 = count($hw14);
$w14 = sprintf('%.2f', $gw14/$wco14);
$tco14 = count($ht14);
$t14 = sprintf('%.2f', $gt14/$tco14);
$kico14 = count($hki14);
$ki14 = sprintf('%.2f', $gki14/$kico14);



$ico15 = count($hi15);
$i15 = sprintf('%.2f', $gi15/$ico15);
$kco15 = count($hk15);
$k15 = sprintf('%.2f', $gk15/$kco15);
$cco15 = count($hc15);
$c15 = sprintf('%.2f', $gc15/$cco15);
$wco15 = count($hw15);
$w15 = sprintf('%.2f', $gw15/$wco15);
$tco15 = count($ht15);
$t15 = sprintf('%.2f', $gt15/$tco15);
$kico15 = count($hki15);
$ki15 = sprintf('%.2f', $gki15/$kico15);


$ico16 = count($hi16);
$i16 = sprintf('%.2f', $gi16/$ico16);
$kco16 = count($hk16);
$k16 = sprintf('%.2f', $gk16/$kco16);
$cco16 = count($hc16);
$c16 = sprintf('%.2f', $gc16/$cco16);
$wco16 = count($hw16);
$w16 = sprintf('%.2f', $gw16/$wco16);
$tco16 = count($ht16);
$t16 = sprintf('%.2f', $gt16/$tco16);
$kico16 = count($hki16);
$ki16 = sprintf('%.2f', $gki16/$kico16);


$ico17 = count($hi17);
$i17 = sprintf('%.2f', $gi17/$ico17);
$kco17 = count($hk17);
$k17 = sprintf('%.2f', $gk17/$kco17);
$cco17 = count($hc17);
$c17 = sprintf('%.2f', $gc17/$cco17);
$wco17 = count($hw17);
$w17 = sprintf('%.2f', $gw17/$wco17);
$tco17 = count($ht17);
$t17 = sprintf('%.2f', $gt17/$tco17);
$kico17 = count($hki17);
$ki17 = sprintf('%.2f', $gki17/$kico17);


$ico18 = count($hi18);
$i18 = sprintf('%.2f', $gi18/$ico18);
$kco18 = count($hk18);
$k18 = sprintf('%.2f', $gk18/$kco18);
$cco18 = count($hc18);
$c18 = sprintf('%.2f', $gc18/$cco18);
$wco18 = count($hw18);
$w18 = sprintf('%.2f', $gw18/$wco18);
$tco18 = count($ht18);
$t18 = sprintf('%.2f', $gt18/$tco18);
$kico18 = count($hki18);
$ki18 = sprintf('%.2f', $gki18/$kico18);


$ico19 = count($hi19);
$i19 = sprintf('%.2f', $gi19/$ico19);
$kco19 = count($hk19);
$k19 = sprintf('%.2f', $gk19/$kco19);
$cco19 = count($hc19);
$c19 = sprintf('%.2f', $gc19/$cco19);
$wco19 = count($hw19);
$w19 = sprintf('%.2f', $gw19/$wco19);
$tco19 = count($ht19);
$t19 = sprintf('%.2f', $gt19/$tco19);
$kico19 = count($hki19);
$ki19 = sprintf('%.2f', $gki19/$kico19);
