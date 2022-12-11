<?php

namespace App\Check\Model\MysqlModel;

use App\Check\Object\JiSuanJiCheckObject;
use Library\Abstracts\Model\AbstractMySqlModel;

class CheckInfoJiSuanJiModel extends AbstractMySqlModel
{
    public $tableName = "checkinfo_jisuanji_";

    public function check(JiSuanJiCheckObject $object)
    {
        return $this->builder->from($this->tableName . date('Y'))->where($object->toArray())->get();
    }
}