<?php

namespace App\Check\Model\MysqlModel;

use App\Check\Object\ZhuanChaBenCheckObject;
use Library\Abstracts\Model\AbstractMySqlModel;

class CheckInfoZhuanChaBenModel extends AbstractMySqlModel
{
    public $tableName = "checkinfo_zhuanchaben_";

    public function check(ZhuanChaBenCheckObject $object)
    {
        $b = $this->builder->from($this->tableName . date('Y'))->where($object->toArray());
        return $b->first();
    }
}