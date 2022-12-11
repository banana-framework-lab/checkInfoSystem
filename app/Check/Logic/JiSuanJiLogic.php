<?php

namespace App\Check\Logic;

use App\Check\Model\MysqlModel\CheckInfoJiSuanJiModel;
use App\Check\Object\JiSuanJiCheckObject;

class JiSuanJiLogic
{
    /**
     * @param JiSuanJiCheckObject $object
     */
    public function check(JiSuanJiCheckObject $object)
    {
        $result = (new CheckInfoJiSuanJiModel())->check($object);

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