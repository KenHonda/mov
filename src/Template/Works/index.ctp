<<<<<<< HEAD
<?php require_once('./lib/util.php') ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="./js/slide.js">
</script>
<div class="content">
  <div class="w_wrap_1">
"&thinsp;
<?php
$workname = $this->request->query('workname');
echo es($workname);
 ?>
 &thinsp;"を含む作品の検索結果<br>
<?php
$td = 0;
$test = array();
$hoge = $result->toArray();
foreach ($hoge as $key => $value) {
if(isset($value['workid'])){
  $test[] = $value['workid'];
}
}
$td = count($test);
echo"<div class='text_1_1'>該当数：",$td, "件</div>";
foreach ($hoge as $key => $value) {
  if($value['workid'] == "1"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin'>";
    echo ($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "2"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=bridge'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "3"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=odess'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "4"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=money'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "5"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=revenant'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "6"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=room'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "7"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=spot'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "8"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=brook'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "9"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=kimi'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "10"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=xmen'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "11"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=fant'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "12"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=knife'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "13"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=shippu'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "14"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=final'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "15"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=kaizoku'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "16"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=starwars'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "17"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=doryunouta'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "18"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=nerve'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "19"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=honnoji'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "20"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=dirty'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "21"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=consultant'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "22"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=shinjuku'>";
    echo($value['workname']);
    echo"</a></div>";
  }
  if($value['workid'] == "23"){
    echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=ousama'>";
    echo($value['workname']);
    echo"</a></div>";
  }

}?>
</div>
=======
<?php
  require_once('./lib/util.php')
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="./js/slide.js"></script>
<div class="content">
  <div class="w_wrap_1">
    "&thinsp;

<?php
  $workname = $this->request->query('workname');
  echo es($workname);
?>

 &thinsp;"を含む作品の検索結果<br>

<?php
  $td = 0;
  $test = array();

  foreach ($result as $key => $value)
  {
    if(isset($value['workid']))
    {
      $test[] = $value['workid'];
    }
  }

  $td = count($test);
  echo"<div class='text_1_1'>該当数：",$td, "件</div>";

  foreach ($hoge as $key => $value)
  {
    if($value['workid'] == "1")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin'>";
      echo ($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "2")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=bridge'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "3")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=odess'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "4")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=money'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "5")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=revenant'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "6")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=room'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "7")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=spot'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "8")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=brook'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "9")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=kimi'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "10")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=xmen'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "11")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=fant'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "12")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=knife'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "13")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=shippu'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "14")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=final'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "15")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=kaizoku'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "16")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=starwars'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "17")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=doryunouta'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "18")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=nerve'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "19")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=honnoji'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "20")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=dirty'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "21")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=consultant'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "22")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=shinjuku'>";
      echo($value['workname']);
      echo"</a></div>";
    }

    if($value['workid'] == "23")
    {
      echo"<div class='work_1'><a class='ser' href='/mov/reviewresults/sakuhin?id=ousama'>";
      echo($value['workname']);
      echo"</a></div>";
    }
  }
?>
  </div>
>>>>>>> rebase前
</div>
