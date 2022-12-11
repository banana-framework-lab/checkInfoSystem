<?php

namespace App\Check\Controller;

use App\Check\Logic\JiSuanJiLogic;
use App\Check\Object\JiSuanJiCheckObject;
use Library\Abstracts\Controller\AbstractController;

class JiSuanJiController extends AbstractController
{
    public function check()
    {
        return (new JiSuanJiLogic())->check(new JiSuanJiCheckObject($this->request));
    }
}