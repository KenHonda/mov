<?php
<<<<<<< HEAD
$username = null;
$password = null;
$inputpass2 = null;
$email = null;
if($this->request->isPost()){
$username = $this->request->data('username');
$password = $this->request->data('password');
$inputpass2 = $this->request->data('inputpass2');
$email = $this->request->data('email');
$this->request->session()->write('username',$username);
$this->request->session()->write('password',$password);
$this->request->session()->write('inputpass2',$inputpass2);
$this->request->session()->write('email',$email);
if($hoge == 0){
header("location:http://test1013.sub.jp/mov/users/register2",true,303);
exit();
}
}
if($this->request->session()->check('username')){
$username = $this->request->session()->read('username');
$password = $this->request->session()->read('password');
$inputpass2 = $this->request->session()->read('inputpass2');
$email = $this->request->session()->read('email');
}
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/slide.js">
</script>
<link rel="stylesheet" type="text/css" href="../css/register1.css">
<div class="content_reg1">
<div class="reg1_wrap">
<div class="reg_title_1">ご登録手続き:</div>
<div class="reg_text_1">⚠︎ID、パスワードは6文字以上の半角英数字のみで、正しく入力して下さい。</div>
<?=$this->Form->create($entity,
['class'=>'id_1','type'=>'post','url'=>['controller'=>'Users','action'=>'register1']]) ?>
<div class="id_wrap">
<?=$this->Form->label("username",['text'=>'ID：']) ?>
<?=$this->Form->text("username",['id'=>'username','placeholder'=>'ID','value'=>$username]) ?>
</div>
<?php
if($this->request->isPost() && $hoge == 1){
foreach($errors as $key1 => $value1){
  if($key1 == 'username'){
  foreach ($value1 as $key2 => $value2) {
    echo '<div class="error">'.$value2.'</div>';
}
}
}
} ?>
<div class="password_wrap">
<?=$this->Form->label("password",['text'=>'パスワード：']) ?>
<?=$this->Form->password("password",['id'=>'password','placeholder'=>'パスワード','value'=>$password]) ?>
</div>
<?php
if($this->request->isPost() && $hoge == 1){
foreach($errors as $key1 => $value1){
  if($key1 == 'password'){
  foreach ($value1 as $key2 => $value2) {
    echo '<div class="error">'.$value2.'</div>';
}
}
}
} ?>
<div class="inputpass2_wrap">
<?=$this->Form->label("inputpass2",['text'=>'パスワード確認：']) ?>
<?=$this->Form->password("inputpass2",['id'=>'inputpass2','placeholder'=>'パスワード確認','value'=>$inputpass2]) ?>
</div>
<?php
if($this->request->isPost() && $hoge == 1){
foreach($errors as $key1 => $value1){
  if($key1 == 'inputpass2'){
  foreach ($value1 as $key2 => $value2) {
    echo '<div class="error">'.$value2.'</div>';
}
}
}
} ?>
<div class="email_wrap">
<?=$this->Form->label("email",['text'=>'メールアドレス：']) ?>
<?=$this->Form->text("email",['id'=>'email','placeholder'=>'メールアドレス','value'=>$email]) ?>
</div>
<?php
if($this->request->isPost() && $hoge == 1){
foreach($errors as $key1 => $value1){
  if($key1 == 'email'){
  foreach ($value1 as $key2 => $value2) {
    echo '<div class="error">'.$value2.'</div>';
}
}
}
} ?>
<?=$this->Form->submit("登録",['class'=>'submit_1']) ?>
<?=$this->Form->end(); ?>
</div>
=======
  $username = null;
  $password = null;
  $inputpass2 = null;
  $email = null;

  if($this->request->isPost())
  {
    $username = $this->request->data('username');
    $password = $this->request->data('password');
    $inputpass2 = $this->request->data('inputpass2');
    $email = $this->request->data('email');
    $this->request->session()->write('username',$username);
    $this->request->session()->write('password',$password);
    $this->request->session()->write('inputpass2',$inputpass2);
    $this->request->session()->write('email',$email);
    if($hoge == 0)
    {
      header("location:http://test1013.sub.jp/mov/users/register2",true,303);
      exit();
    }
  }

  if($this->request->session()->check('username'))
  {
    $username = $this->request->session()->read('username');
    $password = $this->request->session()->read('password');
    $inputpass2 = $this->request->session()->read('inputpass2');
    $email = $this->request->session()->read('email');
  }
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/slide.js"></script>
<link rel="stylesheet" type="text/css" href="../css/register1.css">
<div class="content_reg1">
  <div class="reg1_wrap">
    <div class="reg_title_1">
      ご登録手続き:
    </div>
    <div class="reg_text_1">
      ⚠︎ID、パスワードは6文字以上の半角英数字のみで、正しく入力して下さい。
    </div>
    <?=$this->Form->create($entity,
    ['class'=>'id_1','type'=>'post','url'=>['controller'=>'Users','action'=>'register1']]) ?>
    <div class="id_wrap">
      <?=$this->Form->label("username",['text'=>'ID：']) ?>
      <?=$this->Form->text("username",['id'=>'username','placeholder'=>'ID','value'=>$username]) ?>
    </div>
<?php
  if($this->request->isPost() && $hoge == 1)
  {
    foreach($errors as $key1 => $value1)
    {
      if($key1 == 'username')
      {
        foreach ($value1 as $key2 => $value2)
        {
          echo '<div class="error">'.$value2.'</div>';
        }
      }
    }
  }
?>
  <div class="password_wrap">
    <?=$this->Form->label("password",['text'=>'パスワード：']) ?>
    <?=$this->Form->password("password",['id'=>'password','placeholder'=>'パスワード','value'=>$password]) ?>
  </div>
<?php
  if($this->request->isPost() && $hoge == 1)
  {
    foreach($errors as $key1 => $value1)
    {
      if($key1 == 'password')
      {
        foreach ($value1 as $key2 => $value2)
        {
          echo '<div class="error">'.$value2.'</div>';
        }
      }
    }
  }
?>

  <div class="inputpass2_wrap">
    <?=$this->Form->label("inputpass2",['text'=>'パスワード確認：']) ?>
    <?=$this->Form->password("inputpass2",['id'=>'inputpass2','placeholder'=>'パスワード確認','value'=>$inputpass2]) ?>
  </div>
<?php
  if($this->request->isPost() && $hoge == 1)
  {
    foreach($errors as $key1 => $value1)
    {
      if($key1 == 'inputpass2')
      {
        foreach ($value1 as $key2 => $value2)
        {
          echo '<div class="error">'.$value2.'</div>';
        }
      }
    }
  }
?>
  <div class="email_wrap">
    <?=$this->Form->label("email",['text'=>'メールアドレス：']) ?>
    <?=$this->Form->text("email",['id'=>'email','placeholder'=>'メールアドレス','value'=>$email]) ?>
  </div>
<?php
  if($this->request->isPost() && $hoge == 1)
  {
    foreach($errors as $key1 => $value1)
    {
      if($key1 == 'email')
      {
        foreach ($value1 as $key2 => $value2)
        {
          echo '<div class="error">'.$value2.'</div>';
        }
      }
    }
  }
?>
  <?=$this->Form->submit("登録",['class'=>'submit_1']) ?>
  <?=$this->Form->end(); ?>
  </div>
>>>>>>> rebase前
</div>
