<?php
<<<<<<< HEAD
$flag = null;
$status = null;
$hoge = null;
$failed = null;
if($this->request->session()->check('two.flag')){
$flag = $this->request->session()->read('two.flag');
$status = $this->request->session()->consume('two.status');
}elseif($this->request->session()->check('one.hoge')){
$hoge = $this->request->session()->consume('one.hoge');
}elseif($this->request->session()->check('two.failed')){
$failed = $this->request->session()->consume('two.failed');
}
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/slide.js">
</script>
<div class="content">
<?php if($failed == "Failed!!"){?>
    <script>
    alert('ログイン失敗!!');
    </script>
<?php } ?>
<?php if(!empty($status)){ ?>
  <script>
  alert('ログイン成功!!');
  </script>
<?php }elseif(!empty($flag)){ ?>
  <script>
  alert('ログイン済み');
  </script>
<?php } ?>
<?php
if(!empty($hoge)){ ?>
<script>
alert("ログアウトしました。");
</script>
<?php } ?>
<?php if($flag != "zumi"){ ?>
<div class="users form">
<?=$this->Form->create(null,['type'=>'post','url'=>['controller'=>'Users','action'=>'check']]) ?>
<?=$this->Form->text("username",['class'=>'ppp','placeholder'=>'ID']) ?><br>
<?=$this->Form->password("password",['class'=>'ppp','placeholder'=>'パスワード']) ?>
<?=$this->Form->submit("ログイン",['class'=>'ppp','value'=>'ログイン']) ?>
<?=$this->Form->end(); ?>
</div>
<br>
<?php }elseif($flag == "zumi"){ ?>
=======
  $flag = null;
  $status = null;
  $hoge = null;
  $failed = null;

  if($this->request->session()->check('two.flag'))
  {
    $flag = $this->request->session()->read('two.flag');
    $status = $this->request->session()->consume('two.status');
  }
  elseif($this->request->session()->check('one.hoge'))
  {
    $hoge = $this->request->session()->consume('one.hoge');
  }
  elseif($this->request->session()->check('two.failed'))
  {
    $failed = $this->request->session()->consume('two.failed');
  }
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/slide.js"></script>

<div class="content">
<?php
  if($failed == "Failed!!")
  {
?>
  <script>
    alert('ログイン失敗!!');
  </script>
<?php
  }
?>
<?php
  if(!empty($status))
  {
?>
  <script>
    alert('ログイン成功!!');
  </script>
<?php
  }
  elseif(!empty($flag))
  {
?>
  <script>
    alert('ログイン済み');
  </script>
<?php
  }
?>
<?php
  if(!empty($hoge))
  {
?>
  <script>
    alert("ログアウトしました。");
  </script>
<?php
  }
?>
<?php
  if($flag != "zumi")
  {
?>
  <div class="users form">
    <?=$this->Form->create(null,['type'=>'post','url'=>['controller'=>'Users','action'=>'check']]) ?>
    <?=$this->Form->text("username",['class'=>'ppp','placeholder'=>'ID']) ?><br>
    <?=$this->Form->password("password",['class'=>'ppp','placeholder'=>'パスワード']) ?>
    <?=$this->Form->submit("ログイン",['class'=>'ppp','value'=>'ログイン']) ?>
    <?=$this->Form->end(); ?>
  </div>
  <br>
<?php
  }
  elseif($flag == "zumi")
  {
?>
>>>>>>> rebase前
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <?=$this->Form->create(null,['class'=>'logout_1','url'=>['controller'=>'Users','action'=>'logout']]) ?>
  <?=$this->Form->button('ログアウト') ?>
  <?=$this->Form->end(); ?>
<<<<<<< HEAD
<?php } ?>
<hr width="30%" size="1" color="#f6f6f6">
<br>
=======
<?php
  }
?>
  <hr width="30%" size="1" color="#f6f6f6">
  <br>
>>>>>>> rebase前
<?=$this->Form->create(null,['class'=>'reg_1_1','type'=>'put','url'=>['controller'=>'Users','action'=>'register1']]) ?>
<?=$this->Form->button('新規登録手続き') ?>
<?=$this->Form->end(); ?>
</div>
