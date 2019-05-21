<?php
namespace App\Controller;

<<<<<<< HEAD
class ReviewresultsController extends AppController {
  public function initialize(){
=======
class ReviewresultsController extends AppController
{

  public function initialize()
  {
>>>>>>> rebase前
    $this->name = 'Reviewresults';
    $this->viewBuilder()->autoLayout(true);
    $this->viewBuilder()->layout('reviewresults');
  }
<<<<<<< HEAD
  public function index(){
    $data = $this->Reviewresults->find('all');
    $this->set('data',$data);
    $this->set('mov','xxx/mov1');
    $this->set('header','xxx/header1');
  }
  public function isAuthorized($user = null){
    if(in_array($action, ['index','category','sakuhin','addRecord','release','raddRecord','academy','rank'])){
=======

  public function isAuthorized($user = null)
  {
    if(in_array($action, ['index','category','sakuhin','addRecord','release','raddRecord','academy','rank']))
    {
>>>>>>> rebase前
      return true;
    }
    return false;
  }
<<<<<<< HEAD
public function category(){
  $this->set('header','xxx/header2');
  $this->set('mov','xxx/mov2');
}
public function sakuhin(){
  $data = $this->Reviewresults->find('all');
  $this->set('data',$data);
  $this->set('header','xxx/header2');
  $this->set('mov','xxx/mov2');
  $this->set('entity',$this->Reviewresults->newEntity());
}
public function addRecord(){
  if ($this->request->is('post')){
    $this->loadModel('Reviewresults');
    $entity = $this->Reviewresults->newEntity();
    $entity->workid = $this->request->data('workid');
    $entity->interest = $this->request->data('interest');
    $entity->kandou = $this->request->data('kandou');
    $entity->cast = $this->request->data('cast');
    $entity->worldview = $this->request->data('worldview');
    $entity->trend = $this->request->data('trend');
    $entity->kincho = $this->request->data('kincho');
    $entity->otp = base64_encode(microtime());
    $entity->registrateDate = date("Y/m/d H:i:s", strtotime("+9hour"));
    $flag_2 = $this->Reviewresults->save($entity);
  }
  if($flag_2 == 1){
  $this->request->session()->write('flag_2','success');
  return $this->redirect(['action' => 'sakuhin']);
}else{
  $this->request->session()->write('flag_2','failed');
  return $this->redirect(['action' => 'sakuhin']);
}
}
public function academy(){
$this->set('header','xxx/header2');
$this->set('mov','xxx/mov2');
}
public function release(){
$data = $this->Reviewresults->find('all');
$this->set('data',$data);
$this->set('header','xxx/header2');
$this->set('mov','xxx/mov2');
$this->set('entity',$this->Reviewresults->newEntity());
}
public function raddRecord(){
  if ($this->request->is('post')){
    $this->loadModel('Reviewresults');
    $entity = $this->Reviewresults->newEntity();
    $entity->workid = $this->request->data('workid');
    $entity->interest = $this->request->data('interest');
    $entity->kandou = $this->request->data('kandou');
    $entity->cast = $this->request->data('cast');
    $entity->worldview = $this->request->data('worldview');
    $entity->trend = $this->request->data('trend');
    $entity->kincho = $this->request->data('kincho');
    $entity->otp = base64_encode(microtime());
    $entity->registrateDate = date("Y/m/d H:i:s", strtotime("+9hour"));
    $flag_1 = $this->Reviewresults->save($entity);
  }
  if($flag_1 == 1){
  $this->request->session()->write('flag_1','success');
  return $this->redirect(['action' => 'release']);
}else{
  $this->request->session()->write('flag_1','failed');
  return $this->redirect(['action' => 'release']);
}
}
public function rank(){
$data = $this->Reviewresults->find('all');
$this->set('data',$data);
$this->set('header','xxx/header2');
$this->set('mov','xxx/mov2');
}
=======

  public function json_safe_encode($param)
  {
    return json_encode($param, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
  }


  public function index()
  {
    $response = $this->Reviewresults->top_data();
    $this->set('data',$this->json_safe_encode($response));
    $this->set('mov','xxx/mov');
    $this->set('header','xxx/header');
  }

  public function category()
  {
    $this->set('header','xxx/header');
    $this->set('mov','xxx/mov');
  }

  public function sakuhin()
  {
    //！！修正必要 GETで振り分け　４件ずつ表示
    $res1 = $this->Reviewresults->find_data(1);
    $res2 = $this->Reviewresults->find_data(2);
    $res3 = $this->Reviewresults->find_data(3);
    $res4 = $this->Reviewresults->find_data(4);
    $res5 = $this->Reviewresults->find_data(5);
    $res6 = $this->Reviewresults->find_data(6);
    $res7 = $this->Reviewresults->find_data(7);
    $res8 = $this->Reviewresults->find_data(8);
    $res9 = $this->Reviewresults->find_data(9);
    $res10 = $this->Reviewresults->find_data(10);
    $res11 = $this->Reviewresults->find_data(11);
    $res12 = $this->Reviewresults->find_data(12);
    $res13 = $this->Reviewresults->find_data(13);
    $res14 = $this->Reviewresults->find_data(14);
    $res15 = $this->Reviewresults->find_data(15);
    $res16 = $this->Reviewresults->find_data(16);
    $res17 = $this->Reviewresults->find_data(17);
    $res18 = $this->Reviewresults->find_data(18);
    $res19 = $this->Reviewresults->find_data(19);
    $res20 = $this->Reviewresults->find_data(20);
    $res21 = $this->Reviewresults->find_data(21);
    $res22 = $this->Reviewresults->find_data(22);
    $res23 = $this->Reviewresults->find_data(23);
    $package = [$res1,$res2,$res3,$res4,$res5,$res6,$res7,$res8,$res9,$res10,$res11,$res12,$res13,$res14,$res15,$res16,$res17,$res18,$res19,$res20,$res21,$res22,$res23];
    $this->set('data',$this->json_safe_encode($package));
    $this->set('header','xxx/header');
    $this->set('mov','xxx/mov');
    $this->set('entity',$this->Reviewresults->newEntity());
  }

  public function addRecord()
  {
    if ($this->request->is('post'))
    {
      $this->loadModel('Reviewresults');
      $entity = $this->Reviewresults->newEntity();
      $entity->workid = $this->request->data('workid');
      $entity->interest = $this->request->data('interest');
      $entity->kandou = $this->request->data('kandou');
      $entity->cast = $this->request->data('cast');
      $entity->worldview = $this->request->data('worldview');
      $entity->trend = $this->request->data('trend');
      $entity->kincho = $this->request->data('kincho');
      $entity->otp = base64_encode(microtime());
      $entity->registrateDate = date("Y/m/d H:i:s", strtotime("+9hour"));
      $flag_2 = $this->Reviewresults->save($entity);
    }
    if($flag_2 === 1)
    {
      $this->request->session()->write('flag_2','success');
      return $this->redirect(['action' => 'sakuhin']);
    }
    else
    {
      $this->request->session()->write('flag_2','failed');
      return $this->redirect(['action' => 'sakuhin']);
    }
  }

  public function academy()
  {
    $this->set('header','xxx/header');
    $this->set('mov','xxx/mov');
  }

  public function release()
  {
    $response = $this->Reviewresults->release01();
    $this->set('data',$this->json_safe_encode($response));
    $this->set('header','xxx/header');
    $this->set('mov','xxx/mov');
    $this->set('entity',$this->Reviewresults->newEntity());
  }

  public function raddRecord()
  {
    if ($this->request->is('post'))
    {
      $this->loadModel('Reviewresults');
      $entity = $this->Reviewresults->newEntity();
      $entity->workid = $this->request->data('workid');
      $entity->interest = $this->request->data('interest');
      $entity->kandou = $this->request->data('kandou');
      $entity->cast = $this->request->data('cast');
      $entity->worldview = $this->request->data('worldview');
      $entity->trend = $this->request->data('trend');
      $entity->kincho = $this->request->data('kincho');
      $entity->otp = base64_encode(microtime());
      $entity->registrateDate = date("Y/m/d H:i:s", strtotime("+9hour"));
      $flag_1 = $this->Reviewresults->save($entity);
    }
    if($flag_1 === 1)
    {
      $this->request->session()->write('flag_1','success');
      return $this->redirect(['action' => 'release01']);
    }
    else
    {
      $this->request->session()->write('flag_1','failed');
      return $this->redirect(['action' => 'release01']);
    }
  }
>>>>>>> rebase前
}
