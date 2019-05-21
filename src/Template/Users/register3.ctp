<?php
<<<<<<< HEAD
$username = $this->request->data('username');
$password = $this->request->data('password');
$email_to = $this->request->data('email');
require_once('./lib/util.php');
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/slide.js">
</script>
<link rel="stylesheet" type="text/css" href="../css/register3.css">
<?php if(isset($username)&&isset($password)&&isset($email_to)){ ?>
<div class="content_reg3">
<div class="reg3_wrap">
<div class="conf_1">登録確認メールが送信されました。メールをご確認下さい。</div>
<div class="reg3_text1">以下の内容で申請を受け付けています。</div>
<div class="reg3_text2">ご登録内容:</div>
<div class="reg3_text3">ID:<?php echo es($username);?></div>
<div class="reg3_text4">パスワード:<?php print es(preg_replace("/./","*",$password));?></div>
<div class="reg3_text5">パスワード確認:<?php print es(preg_replace("/./","*",$password));?></div>
<div class="reg3_text6">メールアドレス:<?php echo es($email_to);?></div>
<?=$this->Form->create(null,['type'=>'put','url'=>['controller'=>'Users','action'=>'login']]) ?>
<?=$this->Form->button('戻る') ?>
<?=$this->Form->end(); ?>
</div>
</div>
<?php }else{ ?>
  <div class="content_reg3">
  <div class="reg3_wrap">
  <div class="error_1">エラーがありました。</div>
  <?=$this->Form->create(null,['class'=>'back_wrap_2','type'=>'put','url'=>['controller'=>'Users','action'=>'login']]) ?>
  <?=$this->Form->button('戻る') ?>
  <?=$this->Form->end(); ?>
  </div>
  </div>
<?php } ?>
=======
  $username = $this->request->data('username');
  $password = $this->request->data('password');
  $email_to = $this->request->data('email');
  require_once('./lib/util.php');
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/slide.js"></script>
<link rel="stylesheet" type="text/css" href="../css/register3.css">
<?php
  if(isset($username)&&isset($password)&&isset($email_to))
  {
?>
<div class="content_reg3">
  <div class="reg3_wrap">
    <div class="conf_1">
      登録確認メールが送信されました。メールをご確認下さい。
    </div>
    <div class="reg3_text1">
      以下の内容で申請を受け付けています。
    </div>
    <div class="reg3_text2">
      ご登録内容:
    </div>
    <div class="reg3_text3">
      ID:<?php echo es($username);?>
    </div>
    <div class="reg3_text4">
      パスワード:<?php print es(preg_replace("/./","*",$password));?>
    </div>
    <div class="reg3_text5">
      パスワード確認:<?php print es(preg_replace("/./","*",$password));?>
    </div>
    <div class="reg3_text6">
      メールアドレス:<?php echo es($email_to);?>
    </div>
    <?=$this->Form->create(null,['type'=>'put','url'=>['controller'=>'Users','action'=>'login']]) ?>
    <?=$this->Form->button('戻る') ?>
    <?=$this->Form->end(); ?>
  </div>
</div>
<?php
  }
  else
  {
?>
  <div class="content_reg3">
    <div class="reg3_wrap">
      <div class="error_1">
        エラーがありました。
      </div>
      <?=$this->Form->create(null,['class'=>'back_wrap_2','type'=>'put','url'=>['controller'=>'Users','action'=>'login']]) ?>
      <?=$this->Form->button('戻る') ?>
      <?=$this->Form->end(); ?>
    </div>
  </div>
<?php
  }
?>
>>>>>>> rebase前
