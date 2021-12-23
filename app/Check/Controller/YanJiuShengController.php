<?php

namespace App\Check\Controller;

use App\Check\Logic\YanJiuShengLogic;
use App\Check\Object\YanJiuShengCheckObject;
use Library\Abstracts\Controller\AbstractController;

class YanJiuShengController extends AbstractController
{
    public function check()
    {
        return (new YanJiuShengLogic())->check(new YanJiuShengCheckObject($this->request));
    }
}