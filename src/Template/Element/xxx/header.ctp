<?php $workname = 0;?>
<div id="slide_menu">
<div class="menu_wrap">
  <div class="close_menu_wrap" id="close">
    <img class="close_menu" src="<?php echo $this->Url->build("/images"); ?>/close_menu.png" width="20px">
  </div>
  <div class="ws_1">
    <?=$this->Form->create($workname,
    ['class'=>'search','type'=>'get', 'url'=>['controller'=>'Works',
    'action'=>'index']]) ?>
    <div class="search1_wrap">
    <?=$this->Form->text("workname",['class'=>'search1','placeholder'=>'作品名で検索','cols'=>'14']) ?>
  </div>
    <div class="search2_wrap">
    <?=$this->Form->image("workname",['class'=>'search2','src'=> $this->Url->build("/images").'/se.png']) ?>
  </div>
    <?=$this->Form->end(); ?>
  </div>
  <a class="top" href="/reviewresults"><div class="title_1"><div class="c_image_1_wrap"><img class="c_image_1" width="24px" src="<?php echo $this->Url->build("/images"); ?>/home.png"></div><span class="text_1">ホーム</span></div></a>
  <a class="login" href="/users/login"><div class="title_2"><div class="user_image_wrap"><img class="user_image" src="<?php echo $this->Url->build("/images"); ?>/user.png" width="24px"></div><span class="text_2">ログイン/新規登録</span></div></a>
  <a class="category" href="/reviewresults/category"><div class="title_3"><div class="category_image_wrap"><img src="<?php echo $this->Url->build("/images"); ?>/category.png" class="category_image" width="24px"></div><span class="text_3">映画カテゴリー</span></div></a>
  <a class="release" href="/reviewresults/release01"><div class="title_4"><div class="release_image_wrap"><img src="<?php echo $this->Url->build("/images"); ?>/release.png" class="release_image" width="24px"></div><span class="text_4">現在上映中の作品</span></div></a>
  <a class="academy" href="/reviewresults/academy"><div class="title_5"><div class="academy_image_wrap"><img src="<?php echo $this->Url->build("/images"); ?>/academy.png" class="academy_image" width="24px"></div><span class="text_5">アカデミー賞作品</span></div></a>
</div>
</div>
<div id="button">
<div class="menu_tip_wrap">
  <img src="<?php echo $this->Url->build("/images"); ?>/menu.png" class="menu_tip" width="30px">
</div>
</div>
