<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;

<<<<<<< HEAD
class UsersController extends AppController {
public function initialize(){
  parent::initialize();
  $this->name = 'Users';
  $this->viewBuilder()->autoLayout(true);
  $this->viewBuilder()->layout('users');
}
public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['check', 'logout','register1','register2','register3','register4']);
}
public function isAuthorized($user = null){
  if(in_array($action, ['login','logout','check','register1','register2','register3','register4'])){
    return true;
  }
  return false;
}
public function login(){
  $this->set('header','./xxx/header2');
  $this->set('mov','./xxx/mov2');
}
public function check(){
  if($this->request->isPost()){
    $user = $this->Auth->identify();
if($user){
    $this->Auth->setUser($user);
    $this->request->session()->write('two.flag','zumi');
    $this->request->session()->write('two.status','ok');
    return $this->redirect("http://test1013.sub.jp/mov/users/login");
  }else{
 $this->request->session()->write('two.failed','Failed!!');
 return $this->redirect("http://test1013.sub.jp/mov/users/login");
}
}
}
public function logout(){
  $this->request->session()->destroy();
  $this->request->session()->write('one.hoge','out');
  return $this->redirect($this->Auth->logout());
}
public function register1(){
  $this->set('header','xxx/header2');
  $this->set('mov','xxx/mov2');
  $this->set('entity',$this->Users->newEntity());
  if($this->request->isPost()){
  $entity = $this->Users->newEntity($this->request->data);
  $errors = $entity->errors();
  if(!empty($errors)){
  $this->set('hoge',1);
  $this->set('errors',$errors);
  }else{
  $this->set('hoge',0);
  }
  }
}
public function register2(){
$this->set('header','xxx/header2');
$this->set('mov','xxx/mov2');
}
public function register3(){
$this->set('header','xxx/header2');
$this->set('mov','xxx/mov2');
$username = base64_encode($this->request->data('username'));
$password = base64_encode($this->request->data('password'));
$email_1 = $this->request->data('email');
$email_2 = base64_encode($this->request->data('email'));
$flag = array();
$flag[] = $username;
$flag[] = $password;
$flag[] = $email_2;
$get = http_build_query($flag);
$text = "ご登録確認ありがとうございます。\n登録手続きを完了するには、
\nこちら http://test1013.sub.jp/mov/users/register4?$get をクリックしてください。";
if($this->request->session()->check('username')){
  $email = new Email('default');
  $email->from(['info@test1013.sub.jp' => '映画批評.com'])
        ->to($email_1)
        ->subject('ご登録確認')
        ->send($text);
}
$this->request->session()->destroy();
}
public function register4(){
$this->set('header','xxx/header2');
$this->set('mov','xxx/mov2');
if(!is_null($this->request->query(0))&&!is_null($this->request->query(1))&&!is_null($this->request->query(2))){
  $this->loadModel('Users');
  $entity = $this->Users->newEntity();
  $entity->username = base64_decode($this->request->query(0));
  $entity->password = base64_decode($this->request->query(1));
  $entity->email = base64_decode($this->request->query(2));
  $entity->otp = base64_encode(microtime());
  $entity->registrateDate = date('Y-m-d H:i:s',strtotime("+9hour"));
  $this->Users->save($entity);
}
}
=======
class UsersController extends AppController
{
  public function initialize()
  {
    parent::initialize();
    $this->name = 'Users';
    $this->viewBuilder()->autoLayout(true);
    $this->viewBuilder()->layout('users');
  }

  public function beforeFilter(Event $event)
  {
        parent::beforeFilter($event);
        $this->Auth->allow(['check', 'logout','register1','register2','register3','register4']);
  }

  public function isAuthorized($user = null)
  {
    if(in_array($action, ['login','logout','check','register1','register2','register3','register4']))
    {
      return true;
    }
    return false;
  }

  public function login()
  {
    $this->set('header','./xxx/header');
    $this->set('mov','./xxx/mov');
  }

  public function check()
  {
    if($this->request->isPost())
    {
      $user = $this->Auth->identify();
      if($user)
      {
        $this->Auth->setUser($user);
        $this->request->session()->write('two.flag','zumi');
        $this->request->session()->write('two.status','ok');
        return $this->redirect("http://test1013.sub.jp/mov/users/login");
      }
      else
      {
        $this->request->session()->write('two.failed','Failed!!');
        return $this->redirect("http://test1013.sub.jp/mov/users/login");
      }
    }
  }

  public function logout()
  {
    $this->request->session()->destroy();
    $this->request->session()->write('one.hoge','out');
    return $this->redirect($this->Auth->logout());
  }

  public function register1()
  {
    $this->set('header','xxx/header2');
    $this->set('mov','xxx/mov2');
    $this->set('entity',$this->Users->newEntity());

    if($this->request->isPost())
    {
      $entity = $this->Users->newEntity($this->request->data);
      $errors = $entity->errors();
      if(!empty($errors))
      {
        $this->set('hoge',1);
        $this->set('errors',$errors);
      }
      else
      {
        $this->set('hoge',0);
      }
    }
  }

  public function register2()
  {
    $this->set('header','xxx/header2');
    $this->set('mov','xxx/mov2');
  }

  public function register3()
  {
    $this->set('header','xxx/header2');
    $this->set('mov','xxx/mov2');
    $username = base64_encode($this->request->data('username'));
    $password = base64_encode($this->request->data('password'));
    $email_1 = $this->request->data('email');
    $email_2 = base64_encode($this->request->data('email'));
    $flag = array();
    $flag[] = $username;
    $flag[] = $password;
    $flag[] = $email_2;
    $get = http_build_query($flag);
    $text = "ご登録確認ありがとうございます。\n登録手続きを完了するには、
    \nこちら http://test1013.sub.jp/mov/users/register4?$get をクリックしてください。";

    if($this->request->session()->check('username'))
    {
      $email = new Email('default');
      $email->from(['info@test1013.sub.jp' => '映画批評.com'])
            ->to($email_1)
            ->subject('ご登録確認')
            ->send($text);
    }

    $this->request->session()->destroy();
  }

  public function register4()
  {
    $this->set('header','xxx/header2');
    $this->set('mov','xxx/mov2');

    if(!is_null($this->request->query(0))&&!is_null($this->request->query(1))&&!is_null($this->request->query(2)))
    {
      $this->loadModel('Users');
      $entity = $this->Users->newEntity();
      $entity->username = base64_decode($this->request->query(0));
      $entity->password = base64_decode($this->request->query(1));
      $entity->email = base64_decode($this->request->query(2));
      $entity->otp = base64_encode(microtime());
      $entity->registrateDate = date('Y-m-d H:i:s',strtotime("+9hour"));
      $this->Users->save($entity);
    }
  }
>>>>>>> rebase前
}
