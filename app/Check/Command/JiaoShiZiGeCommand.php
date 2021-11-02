<?php

namespace App\Check\Command;

use App\Check\Logic\JiaoShiZiGeLogic;
use App\Check\Object\JiaoShiZiGeCheckObject;
use Library\Abstracts\Command\AbstractCommand;

class JiaoShiZiGeCommand extends AbstractCommand
{
    public function execute()
    {
        echo (new JiaoShiZiGeLogic())->check(new JiaoShiZiGeCheckObject([
            'zhun_kao_zheng_hao' => '',
            'xing_ming' => '',
        ]));
    }
}