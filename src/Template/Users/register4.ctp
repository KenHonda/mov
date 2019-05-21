<link rel="stylesheet" type="text/css" href="../css/register4.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/slide.js"></script>
<div class="content_reg4">
<<<<<<< HEAD
<?php if(is_null($this->request->query(0))||is_null($this->request->query(1))||is_null($this->request->query(2))){?>
  <div class="text_4_1">エラーがありました。</div>
<?php }else{ ?>
  <div class="text_4_1">登録が完了しました。</div>
  <?php } ?>
<?=$this->Form->create(null,['class'=>'back_1','type'=>'put','url'=>['controller'=>'Users','action'=>'login']]) ?>
<?=$this->Form->button('戻る') ?>
<?=$this->Form->end(); ?>
=======
<?php
  if(is_null($this->request->query(0))||is_null($this->request->query(1))||is_null($this->request->query(2)))
  {
?>
  <div class="text_4_1">
    エラーがありました。
  </div>
<?php
  }
  else
  {
?>
  <div class="text_4_1">
    登録が完了しました。
  </div>
<?php
  }
?>
  <?=$this->Form->create(null,['class'=>'back_1','type'=>'put','url'=>['controller'=>'Users','action'=>'login']]) ?>
  <?=$this->Form->button('戻る') ?>
  <?=$this->Form->end(); ?>
>>>>>>> rebase前
</div>
