<?php
namespace App\Controller;

class ReviewresultsController extends AppController {
  public function initialize(){
    $this->name = 'Reviewresults';
    $this->viewBuilder()->autoLayout(true);
    $this->viewBuilder()->layout('reviewresults');
  }
  public function index(){
    $data = $this->Reviewresults->find('all');
    $this->set('data',$data);
    $this->set('mov','xxx/mov1');
    $this->set('header','xxx/header1');
  }
  public function isAuthorized($user = null){
    if(in_array($action, ['index','category','sakuhin','addRecord','release','raddRecord','academy','rank'])){
      return true;
    }
    return false;
  }
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
}
