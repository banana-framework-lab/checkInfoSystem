<?php

namespace App\Check\Controller;

use App\Check\Logic\JiaoShiZiGeLogic;
use App\Check\Object\JiaoShiZiGeCheckObject;
use Library\Abstracts\Controller\AbstractController;

class JiaoShiZiGeController extends AbstractController
{
    public function check()
    {
        return (new JiaoShiZiGeLogic())->check(new JiaoShiZiGeCheckObject($this->request));
    }
}