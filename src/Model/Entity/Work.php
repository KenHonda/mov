<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class Work extends Entity{
  protected $_accesssible = [
    '*' => true,
    'id' => false
  ];
}
