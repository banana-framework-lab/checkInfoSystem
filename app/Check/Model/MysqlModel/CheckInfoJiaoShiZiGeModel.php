<?php

namespace App\Check\Model\MysqlModel;

use App\Check\Object\JiaoShiZiGeCheckObject;
use Library\Abstracts\Model\AbstractMySqlModel;

class CheckInfoJiaoShiZiGeModel extends AbstractMySqlModel
{
    public $tableName = "checkinfo_jiaoshizige_";

    public function check(JiaoShiZiGeCheckObject $object)
    {
        return $this->builder->from($this->tableName . date('Y'))->where($object->toArray())->get();
    }
}