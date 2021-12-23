<?php

namespace App\Check\Model\MysqlModel;

use App\Check\Object\YanJiuShengCheckObject;
use Library\Abstracts\Model\AbstractMySqlModel;

class CheckInfoYanJiuShengModel extends AbstractMySqlModel
{
    public $tableName = "checkinfo_yanjiusheng_";

    public function check(YanJiuShengCheckObject $object)
    {
        return $this->builder->from($this->tableName . date('Y'))->where($object->toArray())->first();
    }
}