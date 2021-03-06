<?php

namespace App\Check\Logic;

use App\Check\Model\MysqlModel\CheckInfoChengRenGaoKaoModel;
use App\Check\Object\ChengRenGaoKaoCheckObject;

class ChengRenGaoKaoLogic
{
    /**
     * @param ChengRenGaoKaoCheckObject $object
     */
    public function check(ChengRenGaoKaoCheckObject $object)
    {
        $result = (new CheckInfoChengRenGaoKaoModel())->check($object);

        if ($result) {
            $res['status'] = 1;
            $res['info'] = $result;

        } else {
            $res['status'] = 0;
            $res['msg'] = "无考生信息.";
        }
        return $res;
    }
}