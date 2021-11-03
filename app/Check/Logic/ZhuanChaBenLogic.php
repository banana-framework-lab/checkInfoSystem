<?php

namespace App\Check\Logic;

use App\Check\Model\MysqlModel\CheckInfoZhuanChaBenModel;
use App\Check\Object\ZhuanChaBenCheckObject;

class ZhuanChaBenLogic
{
    /**
     * @param ZhuanChaBenCheckObject $object
     */
    public function check(ZhuanChaBenCheckObject $object)
    {
        $result = (new CheckInfoZhuanChaBenModel())->check($object);

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