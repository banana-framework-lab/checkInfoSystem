<?php

namespace App\Check\Command;

use App\Check\Logic\ChaBanShengLogic;
use App\Check\Logic\ChengRenGaoKaoLogic;
use App\Check\Logic\JiaoShiZiGeLogic;
use App\Check\Logic\PuTongHuaLogic;
use App\Check\Logic\ZhuanChaBenLogic;
use App\Check\Object\ChaBanShengCheckObject;
use App\Check\Object\ChengRenGaoKaoCheckObject;
use App\Check\Object\JiaoShiZiGeCheckObject;
use App\Check\Object\PuTongHuaCheckObject;
use App\Check\Object\ZhuanChaBenCheckObject;
use Library\Abstracts\Command\AbstractCommand;
use Library\Container;

class TestCommand extends AbstractCommand
{
    public function execute()
    {
        Container::setMysqlPool('check');
//        echo json_encode((new ChaBanShengLogic())->check(new ChaBanShengCheckObject([
//            'zhun_kao_zheng_hao' => '',
//            'xing_ming' => '',
//        ])), JSON_UNESCAPED_UNICODE);
//
//        echo json_encode((new ChengRenGaoKaoLogic())->check(new ChengRenGaoKaoCheckObject([
//            'zhun_kao_zheng_hao' => '',
//            'xing_ming' => '',
//        ])), JSON_UNESCAPED_UNICODE);
//
//        echo json_encode((new JiaoShiZiGeLogic())->check(new JiaoShiZiGeCheckObject([
//            'zhun_kao_zheng_hao' => '',
//            'xing_ming' => '',
//        ])), JSON_UNESCAPED_UNICODE);
//
//        echo json_encode((new PuTongHuaLogic())->check(new PuTongHuaCheckObject([
//            'zhun_kao_zheng_hao' => '',
//            'xing_ming' => '',
//        ])), JSON_UNESCAPED_UNICODE);

        echo json_encode((new ZhuanChaBenLogic())->check(new ZhuanChaBenCheckObject([
            'zheng_jian_hou_ba_wei' => '1013613X',
            'xing_ming' => '缪昊洋',
        ])), JSON_UNESCAPED_UNICODE);
    }
}