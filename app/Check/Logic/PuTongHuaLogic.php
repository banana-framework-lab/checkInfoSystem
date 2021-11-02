<?php

namespace App\Check\Logic;

use App\Check\Model\MysqlModel\CheckInfoPuTongHuaModel;
use App\Check\Object\PuTongHuaCheckObject;

class PuTongHuaLogic
{
    /**
     * @param PuTongHuaCheckObject $object
     */
    public function check(PuTongHuaCheckObject $object)
    {
        $result = (new CheckInfoPuTongHuaModel())->check($object);

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