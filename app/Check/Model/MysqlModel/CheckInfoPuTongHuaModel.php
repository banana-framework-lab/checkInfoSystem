<?php

namespace App\Check\Model\MysqlModel;

use App\Check\Object\PuTongHuaCheckObject;
use Library\Abstracts\Model\AbstractMySqlModel;

class CheckInfoPuTongHuaModel extends AbstractMySqlModel
{
    public $tableName = "checkinfo_putonghua_info_";

    public function check(PuTongHuaCheckObject $object)
    {
        return $this->builder->from($this->tableName . date('Y') . '_' . date('m'))->where($object->toArray())->first();
    }
}