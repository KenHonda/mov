<?php
namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table{
  public function ValidationDefault(Validator $validator){
    $validator
        ->add('username', [
            'length' => [
                'rule' => ['minLength', 6],
                'message' => '6文字以上で入力してください'
            ]
        ])
        ->add('username', [
            'alphaNumeric' => [
                'rule' => ['alphaNumeric'],
                'message' => '半角英数字のみで入力してください'
            ]
        ])
        ->add('username', [
            'isUnique' => [
                'rule' => [$this,'isUnique'],
                'message' => 'ご指定のIDはすでに存在しています'
            ]
        ])
       ->add('password', [
            'length' => [
                'rule' => ['minLength', 6],
                'message' => '6文字以上で入力してください'
            ]
        ])
        ->add('password', [
             'alphaNumeric' => [
                 'rule' => ['alphaNumeric'],
                 'message' => '半角英数字のみで入力してください'
             ]
         ])
       ->add('inputpass2', [
            'length' => [
                'rule' => ['minLength', 6],
                'message' => '6文字以上で入力してください'
              ]
          ])
        ->add('inputpass2', [
             'alphaNumeric' => [
                 'rule' => ['alphaNumeric'],
                 'message' => '半角英数字のみで入力してください'
             ]
         ])
        ->add('inputpass2', [
            'sameAs' => [
                'rule' => [$this,'sameAs'],
                'message' => 'パスワードが一致していません'
            ]
        ])
        ->add('email', [
            'email' =>[
                'rule' => ['email'],
                'message' => '正しく入力してください'
            ]
        ]);
      return $validator;
  }
  public function isUnique($val){
    $rrr = $this->find('all',['conditions'=>['username'=>$val]]);
    $result = $rrr->toArray();
      if(sizeof($result) == 0){
          return true;
      }else{
      return false;
  }
}
  public function sameAs($value, $context){
      if($value == $context['data']['password']) {
          return true;
      }
      return false;
  }
}
