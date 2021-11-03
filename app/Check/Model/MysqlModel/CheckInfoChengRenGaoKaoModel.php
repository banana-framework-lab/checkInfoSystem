<?php

namespace App\Check\Model\MysqlModel;

use App\Check\Object\ChengRenGaoKaoCheckObject;
use Library\Abstracts\Model\AbstractMySqlModel;

class CheckInfoChengRenGaoKaoModel extends AbstractMySqlModel
{
    public $tableName = "checkinfo_zhuanchaben_info_";

    public function check(ChengRenGaoKaoCheckObject $object)
    {
        return $this->builder->from($this->tableName . date('Y'))->where($object->toArray())->first();
    }
}