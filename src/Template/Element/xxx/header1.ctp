<?php $workname = 0;?>
<div id="slide_menu">
<div class="menu_wrap" id="wrap">
  <div class="close_menu_wrap" id="close">
    <img class="close_menu" src="images/close_menu.png" width="20px">
  </div>
  <div class="ws_1">
    <?=$this->Form->create($workname,
    ['class'=>'search','type'=>'get', 'url'=>['controller'=>'Works',
    'action'=>'index']]) ?>
    <div class="search1_wrap">
    <?=$this->Form->text("workname",['class'=>'search1','placeholder'=>'作品名で検索','cols'=>'14']) ?>
  </div>
    <div class="search2_wrap">
    <?=$this->Form->image("workname",['class'=>'search2','src'=>'./images/se.png']) ?>
  </div>
    <?=$this->Form->end(); ?>
  </div>
  <a class="top" href="/mov/reviewresults"><div class="title_1"><div class="c_image_1_wrap"><img class="c_image_1" width="24px" src="./images/home.png"></div><span class="text_1">ホーム</span></div></a>
  <a class="login" href="/mov/users/login"><div class="title_2"><div class="user_image_wrap"><img class="user_image" src="./images/user.png" width="24px"></div><span class="text_2">ログイン/新規登録</span></div></a>
  <a class="category" href="/mov/reviewresults/category"><div class="title_3"><div class="category_image_wrap"><img src="./images/category.png" class="category_image" width="24px"></div><span class="text_3">映画カテゴリー</span></div></a>
  <a class="release" href="/mov/reviewresults/release"><div class="title_4"><div class="release_image_wrap"><img src="./images/release.png" class="release_image" width="24px"></div><span class="text_4">現在上映中の作品</span></div></a>
  <a class="rank" href="/mov/reviewresults/rank"><div class="title_5"><div class="rank_image_wrap"><img src="./images/rank.png" class="rank_image" width="24px"></div><span class="text_5">ランキング</span></div></a>
  <a class="academy" href="/mov/reviewresults/academy"><div class="title_6"><div class="academy_image_wrap"><img src="./images/academy.png" class="academy_image" width="24px"></div><span class="text_6">アカデミー賞作品</span></div></a>
</div>
</div>
<div id="button" id="wrap">
<div class="menu_tip_wrap">
  <img src="./images/menu.png" class="menu_tip" width="30px">
</div>
</div>
