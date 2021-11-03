<?php

namespace App\Check\Model\MysqlModel;

use App\Check\Object\ChaBanShengCheckObject;
use Library\Abstracts\Model\AbstractMySqlModel;

class CheckInfoChaBanShengModel extends AbstractMySqlModel
{
    public $tableName = "checkinfo_chabansheng_";

    public function check(ChaBanShengCheckObject $object)
    {
        return $this->builder->from($this->tableName . date('Y') . '_' . date('m'))->where($object->toArray())->first();
    }
}