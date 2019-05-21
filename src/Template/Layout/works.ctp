<!doctype html>
<html lang="ja">
<<<<<<< HEAD
<head>
  <?=$this->Html->charset(); ?>
  <title>映画批評.com
  </title>
  <?php
  echo $this->Html->meta('robots','noindex');
  echo $this->Html->css('cake.works');
  echo $this->fetch('meta');
  echo $this->fetch('css');?>
  <LINK rel="SHORTCUT ICON" href="mov.ico">
</head>
<body>
  <!--　ヘッダー　-->
  <?=$this->element('xxx/header1') ?>
=======
  <head>
    <?=$this->Html->charset(); ?>
    <title>
      映画批評.com
    </title>
<?php
  echo $this->Html->meta('robots','noindex');
  echo $this->Html->css('cake.works');
  echo $this->fetch('meta');
  echo $this->fetch('css');
?>
  <LINK rel="SHORTCUT ICON" href="mov.ico">
  </head>
  <body>
  <!--　ヘッダー　-->
    <?=$this->element('xxx/header1') ?>
>>>>>>> rebase前
  <!--　メイン　-->
    <?=$this->fetch('content') ?>
  <!-- レーダーチャート -->
  <!--　フッター　-->
<<<<<<< HEAD
  <?=$this->element('xxx/footer') ?>
</body>
=======
    <?=$this->element('xxx/footer') ?>
  </body>
>>>>>>> rebase前
</html>
