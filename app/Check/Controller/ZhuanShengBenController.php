<?php

namespace App\Check\Controller;

use App\Check\Logic\ZhuanShengBenLogic;
use App\Check\Object\ZhuanShengBenCheckObject;
use Library\Abstracts\Controller\AbstractController;

class ZhuanShengBenController extends AbstractController
{
    public function check()
    {
        return (new ZhuanShengBenLogic())->check(new ZhuanShengBenCheckObject($this->request));
    }
}