<!doctype html>
<html lang="ja">
<<<<<<< HEAD
<head>
  <?=$this->Html->charset(); ?>
  <title>映画批評.com
  </title>
  <?php
  echo $this->Html->css('cake.reviewresults');
  echo $this->fetch('meta');
  echo $this->fetch('css');?>
</head>
<body>
  <!--　ヘッダー　-->
  <div class="header">
    <a class="top" href="/cake/reviewresults">映画批評.com</a>
    <a class="category" href="/cake/reviewresults/category">映画カテゴリー</a>
    <a class="release" href="/cake/reviewresults">現在上映中の作品</a>
    <a class="rank" href="/cake/reviewresults">ランキング</a>
    <a class="academy" href="/cake/reviewresults">アカデミー賞作品</a>

    <a class="login" href="login.php"><img class="user" src="../img/user.png" width="17" height="17">&thinsp;ログイン/新規登録</a>

      <form class="search" method="GET" action="search.php">
      <input class="search1" name="ser" type="text" cols="14" placeholder="作品名で検索">
      <input class="search2" type="image" src="../img/se.png" alt="検索">
    </form>
  </div>
=======
  <head>
    <?=$this->Html->charset(); ?>
    <title>
      映画批評.com
    </title>
<?php
  echo $this->Html->css('cake.reviewresults');
  echo $this->fetch('meta');
  echo $this->fetch('css');
?>
  </head>
  <body>
  <!--　ヘッダー　-->
    <div class="header">
      <a class="top" href="/cake/reviewresults">
        映画批評.com
      </a>
      <a class="category" href="/cake/reviewresults/category">
        映画カテゴリー
      </a>
      <a class="release" href="/cake/reviewresults">
        現在上映中の作品
      </a>
      <a class="rank" href="/cake/reviewresults">
        ランキング
      </a>
      <a class="academy" href="/cake/reviewresults">
        アカデミー賞作品
      </a>

      <a class="login" href="login.php"><img class="user" src="../img/user.png" width="17" height="17">
        &thinsp;ログイン/新規登録
      </a>

      <form class="search" method="GET" action="search.php">
        <input class="search1" name="ser" type="text" cols="14" placeholder="作品名で検索">
        <input class="search2" type="image" src="../img/se.png" alt="検索">
      </form>
    </div>
>>>>>>> rebase前

  <!--　メイン　-->
    <?=$this->fetch('content'); ?>
  <!-- レーダーチャート -->
  <!--　フッター　-->
<<<<<<< HEAD
  <div class="footer">
    <div class="lll">
    <a class="foot" href="/cake/reviewresults/category">映画カテゴリー</a>
    <br>
    <a class="foot" href="/cake/reviewresults">上映中の作品</a>
    <br>
    <a class="foot" href="/cake/reviewresults">ランキング</a>
    <br>
    </div>
    <div class="ccc1">
    <a class="foot" href="/cake/reviewresults">アカデミー賞作品</a>
    <br>
    <a class="foot" href="/cake/reviewresults">ログイン/新規登録</a>
    <br>
    <a class="foot" href="">映画批評.comについて</a>
    <br>
  </div>
  <div class="rrr">
    <a class="foot" href="">アカウントサービス</a>
    <br>
    <a class="foot" href="">個人情報保護について</a>
    <br>
  </div>
  <div class="ccc2">
    Copyright ©︎Reserved
  </div>
    <br>
  </div>
</body>
=======
    <div class="footer">
      <div class="lll">
        <a class="foot" href="/cake/reviewresults/category">
          映画カテゴリー
        </a>
        <br>
        <a class="foot" href="/cake/reviewresults">
          上映中の作品
        </a>
        <br>
        <a class="foot" href="/cake/reviewresults">
          ランキング
        </a>
        <br>
      </div>
      <div class="ccc1">
        <a class="foot" href="/cake/reviewresults">
          アカデミー賞作品
        </a>
        <br>
        <a class="foot" href="/cake/reviewresults">
          ログイン/新規登録
        </a>
        <br>
        <a class="foot" href="">
          映画批評.comについて
        </a>
        <br>
      </div>
      <div class="rrr">
        <a class="foot" href="">
          アカウントサービス
        </a>
        <br>
        <a class="foot" href="">
          個人情報保護について
        </a>
        <br>
      </div>
      <div class="ccc2">
        Copyright ©︎Reserved
      </div>
      <br>
    </div>
  </body>
>>>>>>> rebase前
</html>
