<?php
for($r=9; $r<18; $r++){
$gi{$r} = 0;
$gk{$r} = 0;
$gc{$r} = 0;
$gw{$r} = 0;
$gt{$r} = 0;
$gki{$r} = 0;
}
for($f=9; $f<18; $f++){
$hi{$f} = array();
$ico{$f} = 0;
$i{$f} = 0;
$hk{$f} = array();
$kco{$f} = 0;
$k{$f} = 0;
$hc{$f} = array();
$cco{$f} = 0;
$c{$f} = 0;
$hw{$f} = array();
$wco{$f} = 0;
$w{$f} = 0;
$ht{$f} = array();
$tco{$f} = 0;
$t{$f} = 0;
$hki{$f} = array();
$kico{$f} = 0;
$ki{$f} = 0;
}

$result = $data->toArray();
foreach($result as $key => $value){
      if($value['workid'] == '9'){
        $gi{9} += $value['interest'];
        $hi{9}[] = $value['interest'];
        $gk{9} += $value['kandou'];
        $hk{9}[] = $value['kandou'];
        $gc{9} += $value['cast'];
        $hc{9}[] = $value['cast'];
        $gw{9} += $value['worldview'];
        $hw{9}[] = $value['worldview'];
        $gt{9} += $value['trend'];
        $ht{9}[] = $value['trend'];
        $gki{9} += $value['kincho'];
        $hki{9}[] = $value['kincho'];
      }
  if($value['workid'] == '11'){
    $gi{11} += $value['interest'];
    $hi{11}[] = $value['interest'];
    $gk{11} += $value['kandou'];
    $hk{11}[] = $value['kandou'];
    $gc{11} += $value['cast'];
    $hc{11}[] = $value['cast'];
    $gw{11} += $value['worldview'];
    $hw{11}[] = $value['worldview'];
    $gt{11} += $value['trend'];
    $ht{11}[] = $value['trend'];
    $gki{11} += $value['kincho'];
    $hki{11}[] = $value['kincho'];
  }

  if($value['workid'] == '14'){
    $gi{14} += $value['interest'];
    $hi{14}[] = $value['interest'];
    $gk{14} += $value['kandou'];
    $hk{14}[] = $value['kandou'];
    $gc{14} += $value['cast'];
    $hc{14}[] = $value['cast'];
    $gw{14} += $value['worldview'];
    $hw{14}[] = $value['worldview'];
    $gt{14} += $value['trend'];
    $ht{14}[] = $value['trend'];
    $gki{14} += $value['kincho'];
    $hki{14}[] = $value['kincho'];
  }
  if($value['workid'] == '15'){
    $gi{15} += $value['interest'];
    $hi{15}[] = $value['interest'];
    $gk{15} += $value['kandou'];
    $hk{15}[] = $value['kandou'];
    $gc{15} += $value['cast'];
    $hc{15}[] = $value['cast'];
    $gw{15} += $value['worldview'];
    $hw{15}[] = $value['worldview'];
    $gt{15} += $value['trend'];
    $ht{15}[] = $value['trend'];
    $gki{15} += $value['kincho'];
    $hki{15}[] = $value['kincho'];
  }
  if($value['workid'] == '16'){
    $gi{16} += $value['interest'];
    $hi{16}[] = $value['interest'];
    $gk{16} += $value['kandou'];
    $hk{16}[] = $value['kandou'];
    $gc{16} += $value['cast'];
    $hc{16}[] = $value['cast'];
    $gw{16} += $value['worldview'];
    $hw{16}[] = $value['worldview'];
    $gt{16} += $value['trend'];
    $ht{16}[] = $value['trend'];
    $gki{16} += $value['kincho'];
    $hki{16}[] = $value['kincho'];
  }
  if($value['workid'] == '17'){
    $gi{17} += $value['interest'];
    $hi{17}[] = $value['interest'];
    $gk{17} += $value['kandou'];
    $hk{17}[] = $value['kandou'];
    $gc{17} += $value['cast'];
    $hc{17}[] = $value['cast'];
    $gw{17} += $value['worldview'];
    $hw{17}[] = $value['worldview'];
    $gt{17} += $value['trend'];
    $ht{17}[] = $value['trend'];
    $gki{17} += $value['kincho'];
    $hki{17}[] = $value['kincho'];
  }
}
for($f=14; $f<18; $f++){
$ico{$f} = count($hi{$f});
$i{$f} = sprintf('%.2f', $gi{$f}/$ico{$f});
$kco{$f} = count($hk{$f});
$k{$f} = sprintf('%.2f', $gk{$f}/$kco{$f});
$cco{$f} = count($hc{$f});
$c{$f} = sprintf('%.2f', $gc{$f}/$cco{$f});
$wco{$f} = count($hw{$f});
$w{$f} = sprintf('%.2f', $gw{$f}/$wco{$f});
$tco{$f} = count($ht{$f});
$t{$f} = sprintf('%.2f', $gt{$f}/$tco{$f});
$kico{$f} = count($hki{$f});
$ki{$f} = sprintf('%.2f', $gki{$f}/$kico{$f});
}

$ico{9} = count($hi{9});
$i{9} = sprintf('%.2f', $gi{9}/$ico{9});
$kco{9} = count($hk{9});
$k{9} = sprintf('%.2f', $gk{9}/$kco{9});
$cco{9} = count($hc{9});
$c{9} = sprintf('%.2f', $gc{9}/$cco{9});
$wco{9} = count($hw{9});
$w{9} = sprintf('%.2f', $gw{9}/$wco{9});
$tco{9} = count($ht{9});
$t{9} = sprintf('%.2f', $gt{9}/$tco{9});
$kico{9} = count($hki{9});
$ki{9} = sprintf('%.2f', $gki{9}/$kico{9});

$ico{11} = count($hi{11});
$i{11} = sprintf('%.2f', $gi{11}/$ico{11});
$kco{11} = count($hk{11});
$k{11} = sprintf('%.2f', $gk{11}/$kco{11});
$cco{11} = count($hc{11});
$c{11} = sprintf('%.2f', $gc{11}/$cco{11});
$wco{11} = count($hw{11});
$w{11} = sprintf('%.2f', $gw{11}/$wco{11});
$tco{11} = count($ht{11});
$t{11} = sprintf('%.2f', $gt{11}/$tco{11});
$kico{11} = count($hki{11});
$ki{11} = sprintf('%.2f', $gki{11}/$kico{11});
