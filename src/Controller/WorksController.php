<?php
namespace App\Controller;

<<<<<<< HEAD
class WorksController extends AppController {
  public function initialize(){
=======
class WorksController extends AppController
{
  public function initialize()
  {
>>>>>>> rebase前
    $this->name = 'Works';
    $this->viewBuilder()->autoLayout(true);
    $this->viewBuilder()->layout('works');
    $this->set('workname',$this->Works->newEntity());
  }
<<<<<<< HEAD
  public function index(){
    if($this->request->is('get')){
    $workname = $this->request->query('workname');
    $data = $this->Works->find('all',[
      'conditions'=>[
        'workname like'=>"%{$workname}%"
      ]
    ]);
    $this->set('result',$data);
    }
  }
  public function isAuthorized($user = null){
    if(in_array($action, ['index'])){
      return true;
    }
=======

  public function index()
  {
    if($this->request->is('get'))
    {
      $workname = $this->request->query('workname');
      $data = $this->Works->find('all',[
        'conditions'=>[
        'workname like'=>"%{$workname}%"
        ]
      ]);

      $this->set('result',$data->toArray());
    }
  }

  public function isAuthorized($user = null)
  {
    if(in_array($action, ['index']))
    {
      return true;
    }

>>>>>>> rebase前
    return false;
  }
}
