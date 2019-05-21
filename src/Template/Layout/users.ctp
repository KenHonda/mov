<!DOCTYPE html>
<html lang="ja">
<<<<<<< HEAD
<head>
  <?=$this->Html->charset(); ?>
  <title>映画批評.com
  </title>
  <?php
  echo $this->Html->meta('robots','noindex');
  echo $this->Html->css('cake.users');
  echo $this->fetch('meta');
  echo $this->fetch('css');?>
<?=$this->element($mov) ?>
</head>
<body>
  <!--　ヘッダー　-->
<div id="header">
  <?=$this->element($header) ?>
</div>
  <!--　メイン　-->
    <?=$this->fetch('content') ?>
  <!--　フッター　-->
<div id="footer">
  <?=$this->element('xxx/footer') ?>
</div>
</body>
=======
  <head>
    <?=$this->Html->charset(); ?>
    <title>
      映画批評.com
    </title>
<?php
  echo $this->Html->meta('robots','noindex');
  echo $this->Html->css('cake.users');
  echo $this->fetch('meta');
  echo $this->fetch('css');
?>
<?=$this->element($mov) ?>
  </head>
  <body>
  <!--　ヘッダー　-->
    <div id="header">
      <?=$this->element($header) ?>
    </div>
  <!--　メイン　-->
  <?=$this->fetch('content') ?>
  <!--　フッター　-->
    <div id="footer">
      <?=$this->element('xxx/footer') ?>
    </div>
  </body>
>>>>>>> rebase前
</html>
