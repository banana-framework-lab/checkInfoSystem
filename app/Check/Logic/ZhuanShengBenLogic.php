<?php

namespace App\Check\Logic;

use App\Check\Model\MysqlModel\CheckInfoZhuanShengBenModel;
use App\Check\Object\ZhuanShengBenCheckObject;

class ZhuanShengBenLogic
{
    /**
     * @param ZhuanShengBenCheckObject $object
     */
    public function check(ZhuanShengBenCheckObject $object)
    {
        $result = (new CheckInfoZhuanShengBenModel())->check($object);

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