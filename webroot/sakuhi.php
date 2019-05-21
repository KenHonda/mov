<?php
for($r=1; $r<24; $r++){
$gi{$r} = 0;
$gk{$r} = 0;
$gc{$r} = 0;
$gw{$r} = 0;
$gt{$r} = 0;
$gki{$r} = 0;
}
for($f=1; $f<24; $f++){
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
  if($value['workid'] == '1'){
    $gi{1} += $value['interest'];
    $hi{1}[] = $value['interest'];
    $gk{1} += $value['kandou'];
    $hk{1}[] = $value['kandou'];
    $gc{1} += $value['cast'];
    $hc{1}[] = $value['cast'];
    $gw{1} += $value['worldview'];
    $hw{1}[] = $value['worldview'];
    $gt{1} += $value['trend'];
    $ht{1}[] = $value['trend'];
    $gki{1} += $value['kincho'];
    $hki{1}[] = $value['kincho'];
  }
    if($value['workid'] == '2'){
      $gi{2} += $value['interest'];
      $hi{2}[] = $value['interest'];
      $gk{2} += $value['kandou'];
      $hk{2}[] = $value['kandou'];
      $gc{2} += $value['cast'];
      $hc{2}[] = $value['cast'];
      $gw{2} += $value['worldview'];
      $hw{2}[] = $value['worldview'];
      $gt{2} += $value['trend'];
      $ht{2}[] = $value['trend'];
      $gki{2} += $value['kincho'];
      $hki{2}[] = $value['kincho'];
    }
      if($value['workid'] == '3'){
        $gi{3} += $value['interest'];
        $hi{3}[] = $value['interest'];
        $gk{3} += $value['kandou'];
        $hk{3}[] = $value['kandou'];
        $gc{3} += $value['cast'];
        $hc{3}[] = $value['cast'];
        $gw{3} += $value['worldview'];
        $hw{3}[] = $value['worldview'];
        $gt{3} += $value['trend'];
        $ht{3}[] = $value['trend'];
        $gki{3} += $value['kincho'];
        $hki{3}[] = $value['kincho'];
      }
      if($value['workid'] == '4'){
        $gi{4} += $value['interest'];
        $hi{4}[] = $value['interest'];
        $gk{4} += $value['kandou'];
        $hk{4}[] = $value['kandou'];
        $gc{4} += $value['cast'];
        $hc{4}[] = $value['cast'];
        $gw{4} += $value['worldview'];
        $hw{4}[] = $value['worldview'];
        $gt{4} += $value['trend'];
        $ht{4}[] = $value['trend'];
        $gki{4} += $value['kincho'];
        $hki{4}[] = $value['kincho'];
      }
      if($value['workid'] == '5'){
        $gi{5} += $value['interest'];
        $hi{5}[] = $value['interest'];
        $gk{5} += $value['kandou'];
        $hk{5}[] = $value['kandou'];
        $gc{5} += $value['cast'];
        $hc{5}[] = $value['cast'];
        $gw{5} += $value['worldview'];
        $hw{5}[] = $value['worldview'];
        $gt{5} += $value['trend'];
        $ht{5}[] = $value['trend'];
        $gki{5} += $value['kincho'];
        $hki{5}[] = $value['kincho'];
      }
      if($value['workid'] == '6'){
        $gi{6} += $value['interest'];
        $hi{6}[] = $value['interest'];
        $gk{6} += $value['kandou'];
        $hk{6}[] = $value['kandou'];
        $gc{6} += $value['cast'];
        $hc{6}[] = $value['cast'];
        $gw{6} += $value['worldview'];
        $hw{6}[] = $value['worldview'];
        $gt{6} += $value['trend'];
        $ht{6}[] = $value['trend'];
        $gki{6} += $value['kincho'];
        $hki{6}[] = $value['kincho'];
      }
      if($value['workid'] == '7'){
        $gi{7} += $value['interest'];
        $hi{7}[] = $value['interest'];
        $gk{7} += $value['kandou'];
        $hk{7}[] = $value['kandou'];
        $gc{7} += $value['cast'];
        $hc{7}[] = $value['cast'];
        $gw{7} += $value['worldview'];
        $hw{7}[] = $value['worldview'];
        $gt{7} += $value['trend'];
        $ht{7}[] = $value['trend'];
        $gki{7} += $value['kincho'];
        $hki{7}[] = $value['kincho'];
      }
      if($value['workid'] == '8'){
        $gi{8} += $value['interest'];
        $hi{8}[] = $value['interest'];
        $gk{8} += $value['kandou'];
        $hk{8}[] = $value['kandou'];
        $gc{8} += $value['cast'];
        $hc{8}[] = $value['cast'];
        $gw{8} += $value['worldview'];
        $hw{8}[] = $value['worldview'];
        $gt{8} += $value['trend'];
        $ht{8}[] = $value['trend'];
        $gki{8} += $value['kincho'];
        $hki{8}[] = $value['kincho'];
      }
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
      if($value['workid'] == '10'){
        $gi{10} += $value['interest'];
        $hi{10}[] = $value['interest'];
        $gk{10} += $value['kandou'];
        $hk{10}[] = $value['kandou'];
        $gc{10} += $value['cast'];
        $hc{10}[] = $value['cast'];
        $gw{10} += $value['worldview'];
        $hw{10}[] = $value['worldview'];
        $gt{10} += $value['trend'];
        $ht{10}[] = $value['trend'];
        $gki{10} += $value['kincho'];
        $hki{10}[] = $value['kincho'];
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
  if($value['workid'] == '12'){
    $gi{12} += $value['interest'];
    $hi{12}[] = $value['interest'];
    $gk{12} += $value['kandou'];
    $hk{12}[] = $value['kandou'];
    $gc{12} += $value['cast'];
    $hc{12}[] = $value['cast'];
    $gw{12} += $value['worldview'];
    $hw{12}[] = $value['worldview'];
    $gt{12} += $value['trend'];
    $ht{12}[] = $value['trend'];
    $gki{12} += $value['kincho'];
    $hki{12}[] = $value['kincho'];
  }
  if($value['workid'] == '13'){
    $gi{13} += $value['interest'];
    $hi{13}[] = $value['interest'];
    $gk{13} += $value['kandou'];
    $hk{13}[] = $value['kandou'];
    $gc{13} += $value['cast'];
    $hc{13}[] = $value['cast'];
    $gw{13} += $value['worldview'];
    $hw{13}[] = $value['worldview'];
    $gt{13} += $value['trend'];
    $ht{13}[] = $value['trend'];
    $gki{13} += $value['kincho'];
    $hki{13}[] = $value['kincho'];
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
  if($value['workid'] == '18'){
    $gi{18} += $value['interest'];
    $hi{18}[] = $value['interest'];
    $gk{18} += $value['kandou'];
    $hk{18}[] = $value['kandou'];
    $gc{18} += $value['cast'];
    $hc{18}[] = $value['cast'];
    $gw{18} += $value['worldview'];
    $hw{18}[] = $value['worldview'];
    $gt{18} += $value['trend'];
    $ht{18}[] = $value['trend'];
    $gki{18} += $value['kincho'];
    $hki{18}[] = $value['kincho'];
  }
  if($value['workid'] == '19'){
    $gi{19} += $value['interest'];
    $hi{19}[] = $value['interest'];
    $gk{19} += $value['kandou'];
    $hk{19}[] = $value['kandou'];
    $gc{19} += $value['cast'];
    $hc{19}[] = $value['cast'];
    $gw{19} += $value['worldview'];
    $hw{19}[] = $value['worldview'];
    $gt{19} += $value['trend'];
    $ht{19}[] = $value['trend'];
    $gki{19} += $value['kincho'];
    $hki{19}[] = $value['kincho'];
  }
  if($value['workid'] == '20'){
    $gi{20} += $value['interest'];
    $hi{20}[] = $value['interest'];
    $gk{20} += $value['kandou'];
    $hk{20}[] = $value['kandou'];
    $gc{20} += $value['cast'];
    $hc{20}[] = $value['cast'];
    $gw{20} += $value['worldview'];
    $hw{20}[] = $value['worldview'];
    $gt{20} += $value['trend'];
    $ht{20}[] = $value['trend'];
    $gki{20} += $value['kincho'];
    $hki{20}[] = $value['kincho'];
  }
  if($value['workid'] == '21'){
    $gi{21} += $value['interest'];
    $hi{21}[] = $value['interest'];
    $gk{21} += $value['kandou'];
    $hk{21}[] = $value['kandou'];
    $gc{21} += $value['cast'];
    $hc{21}[] = $value['cast'];
    $gw{21} += $value['worldview'];
    $hw{21}[] = $value['worldview'];
    $gt{21} += $value['trend'];
    $ht{21}[] = $value['trend'];
    $gki{21} += $value['kincho'];
    $hki{21}[] = $value['kincho'];
  }
  if($value['workid'] == '22'){
    $gi{22} += $value['interest'];
    $hi{22}[] = $value['interest'];
    $gk{22} += $value['kandou'];
    $hk{22}[] = $value['kandou'];
    $gc{22} += $value['cast'];
    $hc{22}[] = $value['cast'];
    $gw{22} += $value['worldview'];
    $hw{22}[] = $value['worldview'];
    $gt{22} += $value['trend'];
    $ht{22}[] = $value['trend'];
    $gki{22} += $value['kincho'];
    $hki{22}[] = $value['kincho'];
  }
  if($value['workid'] == '23'){
    $gi{23} += $value['interest'];
    $hi{23}[] = $value['interest'];
    $gk{23} += $value['kandou'];
    $hk{23}[] = $value['kandou'];
    $gc{23} += $value['cast'];
    $hc{23}[] = $value['cast'];
    $gw{23} += $value['worldview'];
    $hw{23}[] = $value['worldview'];
    $gt{23} += $value['trend'];
    $ht{23}[] = $value['trend'];
    $gki{23} += $value['kincho'];
    $hki{23}[] = $value['kincho'];
  }
}
for($f=1; $f<24; $f++){
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
