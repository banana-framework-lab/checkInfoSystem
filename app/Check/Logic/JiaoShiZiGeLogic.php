<?php

namespace App\Check\Logic;

use App\Check\Model\MysqlModel\CheckInfoJiaoShiZiGeModel;
use App\Check\Object\JiaoShiZiGeCheckObject;

class JiaoShiZiGeLogic
{
    /**
     * @param JiaoShiZiGeCheckObject $object
     */
    public function check(JiaoShiZiGeCheckObject $object)
    {
        $result = (new CheckInfoJiaoShiZiGeModel())->check($object);

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