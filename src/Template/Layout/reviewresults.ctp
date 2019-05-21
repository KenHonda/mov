<<<<<<< HEAD
<!DOCTYPE html>
<html lang="ja">
<head>
  <?=$this->Html->charset(); ?>
  <title>映画批評.com
  </title>
  <?php
  echo $this->Html->meta('robots','noindex');
  echo $this->Html->css('cake.reviewresults');
  echo $this->fetch('meta');
  echo $this->fetch('css');?>
<?=$this->element($mov) ?>
</head>
<body>
  <!--　ヘッダー　-->
<div id="header" id="wrap">
  <?=$this->element($header) ?>
</div>
  <!--　メイン　-->
    <?=$this->fetch('content') ?>
  <!-- レーダーチャート -->
  <!--　フッター　-->
<div id="footer">
  <?=$this->element('xxx/footer') ?>
</div>
</body>
=======
<?=$this->Html->doctype('html5'); ?>
<html lang="ja">
  <head>
    <?=$this->Html->charset(); ?>
    <title>
      映画批評.com
    </title>
<?php
  echo $this->Html->meta('robots','noindex');
  echo $this->Html->css('cake.reviewresults');
  echo $this->fetch('meta');
  echo $this->fetch('css');
?>
<?=$this->element($mov) ?>
  </head>
  <body>
    <div id="header">
      <?=$this->element('xxx/header') ?>
    </div>
    <?=$this->fetch('content') ?>
  </body>
>>>>>>> rebase前
</html>
