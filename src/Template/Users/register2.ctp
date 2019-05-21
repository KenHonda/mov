<?php
<<<<<<< HEAD
if($this->request->session()->check("username")){
$username = $this->request->session()->read("username");
$password = $this->request->session()->read("password");
$inputpass2 = $this->request->session()->read("inputpass2");
$email = $this->request->session()->read("email");
}
require_once('./lib/util.php');
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/slide.js">
</script>
<link rel="stylesheet" type="text/css" href="../css/register2.css">
<div class="content_reg2">
<?php if(isset($username)&&isset($password)&&isset($inputpass2)&&isset($email)){ ?>
<div class="reg2_wrap">
<div class="reg_title_1">登録内容確認:</div>
<?=$this->Form->create(null,
['type'=>'post','url'=>['controller'=>'Users','action'=>'register3']]) ?>
<div class="id_wrap">ID:
<?=$this->Form->hidden("username",['value'=>$username]) ?><?php echo es($username);?></div>
<div class="password_wrap">パスワード:
<?=$this->Form->hidden("password",['value'=>$password]) ?><?php echo es(preg_replace("/./","*",$password));?></div>
<div class="inputpass2_wrap">パスワード確認:&nbsp;<?php echo es(preg_replace("/./","*",$inputpass2));?></div>
<div class="email_wrap">メールアドレス:
<?=$this->Form->hidden("email",['value'=>$email]) ?><?php echo es($email);?></div>
<?=$this->Form->submit("登録確認",['class'=>'submit_1']) ?>
<?=$this->Form->end(); ?>
<?=$this->Form->create(null,['type'=>'put','url'=>['controller'=>'Users','action'=>'register1']]) ?>
<?=$this->Form->button('戻る') ?>
<?php $options = ['div'=>['class'=>'back_wrap']]; ?>
<?=$this->Form->end($options); ?>
</div>
<?php }else{?>
  <div class="reg2_wrap">
  <div class="error_1">エラーがありました。</div>
  <?=$this->Form->create(null,['class'=>'back_wrap_2','type'=>'put','url'=>['controller'=>'Users','action'=>'login']]) ?>
  <?=$this->Form->button('戻る') ?>
  <?=$this->Form->end(); ?>
  </div>
  <?php } ?>
=======
  if($this->request->session()->check("username"))
  {
    $username = $this->request->session()->read("username");
    $password = $this->request->session()->read("password");
    $inputpass2 = $this->request->session()->read("inputpass2");
    $email = $this->request->session()->read("email");
  }

  require_once('./lib/util.php');
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/slide.js"></script>
<link rel="stylesheet" type="text/css" href="../css/register2.css">
<div class="content_reg2">
<?php
  if(isset($username)&&isset($password)&&isset($inputpass2)&&isset($email))
  {
?>
  <div class="reg2_wrap">
    <div class="reg_title_1">
      登録内容確認:
    </div>
    <?=$this->Form->create(null,
    ['type'=>'post','url'=>['controller'=>'Users','action'=>'register3']]) ?>
    <div class="id_wrap">
      ID:
      <?=$this->Form->hidden("username",['value'=>$username]) ?><?php echo es($username);?>
    </div>
    <div class="password_wrap">
      パスワード:
      <?=$this->Form->hidden("password",['value'=>$password]) ?><?php echo es(preg_replace("/./","*",$password));?>
    </div>
    <div class="inputpass2_wrap">
      パスワード確認:&nbsp;<?php echo es(preg_replace("/./","*",$inputpass2));?>
    </div>
    <div class="email_wrap">
      メールアドレス:
      <?=$this->Form->hidden("email",['value'=>$email]) ?><?php echo es($email);?>
    </div>
      <?=$this->Form->submit("登録確認",['class'=>'submit_1']) ?>
      <?=$this->Form->end(); ?>
      <?=$this->Form->create(null,['type'=>'put','url'=>['controller'=>'Users','action'=>'register1']]) ?>
      <?=$this->Form->button('戻る') ?>
<?php
  $options = ['div'=>['class'=>'back_wrap']];
?>
      <?=$this->Form->end($options); ?>
  </div>
<?php
  }
  else
  {
?>
  <div class="reg2_wrap">
    <div class="error_1">
      エラーがありました。
    </div>
    <?=$this->Form->create(null,['class'=>'back_wrap_2','type'=>'put','url'=>['controller'=>'Users','action'=>'login']]) ?>
    <?=$this->Form->button('戻る') ?>
    <?=$this->Form->end(); ?>
  </div>
<?php
  }
?>
>>>>>>> rebase前
</div>
