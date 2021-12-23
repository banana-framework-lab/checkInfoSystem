<?php

namespace App\Check\Logic;

use App\Check\Model\MysqlModel\CheckInfoYanJiuShengModel;
use App\Check\Object\YanJiuShengCheckObject;

class YanJiuShengLogic
{
    /**
     * @param YanJiuShengCheckObject $object
     */
    public function check(YanJiuShengCheckObject $object)
    {
        $result = (new CheckInfoYanJiuShengModel())->check($object);

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