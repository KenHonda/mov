<?php
namespace App\Model\Table;
use Cake\ORM\Table;
<<<<<<< HEAD
class ReviewresultsTable extends Table{
=======
class ReviewresultsTable extends Table
{
  public function top_data(){
        // truncateで桁指定してる。DB側のデータ型によって、小数点以下変わる。
        // 1回のSQLでデータ取得版
        $data = $this->find()->
        select(['interest'=>'truncate(avg(interest),4)','kandou'=>'truncate(avg(kandou),4)','cast'=>'truncate(avg(cast),4)','kincho'=>'truncate(avg(kincho),4)','trend'=>'truncate(avg(trend),4)','worldview'=>'truncate(avg(worldview),4)','workid'])
        ->where(['workid'=>11])->orWhere(['workid'=>14])->orWhere(['workid'=>15])->orWhere(['workid'=>16])->orWhere(['workid'=>17])->orWhere(['workid'=>18])->orWhere(['workid'=>19])
        ->group(['workid'])->toArray();
        return $data;
  }
  public function release01(){
        //
        $data = $this->find()->select(['interest'=>'avg(interest)','kandou'=>'avg(kandou)','cast'=>'avg(cast)','kincho'=>'avg(kincho)','trend'=>'avg(trend)','worldview'=>'avg(worldview)','workid'])->where(['workid'=>9])->orWhere(['workid'=>11])->orWhere(['workid'=>14])->orWhere(['workid'=>15])->group(['workid'])->toArray();
        return $data;
  }
>>>>>>> rebase前
}
