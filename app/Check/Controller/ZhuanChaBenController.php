<?php

namespace App\Check\Controller;

use App\Check\Logic\ZhuanChaBenLogic;
use App\Check\Object\ZhuanChaBenCheckObject;
use Library\Abstracts\Controller\AbstractController;

class ZhuanChaBenController extends AbstractController
{
    public function check()
    {
        return (new ZhuanChaBenLogic())->check(new ZhuanChaBenCheckObject($this->request));
    }
}