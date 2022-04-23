<?php

namespace App\Check\Model\MysqlModel;

use App\Check\Object\ZhuanShengBenCheckObject;
use Library\Abstracts\Model\AbstractMySqlModel;

class CheckInfoZhuanShengBenModel extends AbstractMySqlModel
{
    public $tableName = "checkinfo_zhuanShengben_";

    public function check(ZhuanShengBenCheckObject $object)
    {
        $b = $this->builder->from($this->tableName . date('Y'))->where($object->toArray());
        return $b->get();
    }
}