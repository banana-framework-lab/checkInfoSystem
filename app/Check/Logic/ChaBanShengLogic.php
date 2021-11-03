<?php

namespace App\Check\Logic;

use App\Check\Model\MysqlModel\CheckInfoChaBanShengModel;
use App\Check\Object\ChaBanShengCheckObject;

class ChaBanShengLogic
{
    /**
     * @param ChaBanShengCheckObject $object
     * @return mixed
     */
    public function check(ChaBanShengCheckObject $object)
    {
        $result = (new CheckInfoChaBanShengModel())->check($object);

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