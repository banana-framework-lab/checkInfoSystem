<?php

namespace App\Check\Controller;

use App\Check\Logic\PuTongHuaLogic;
use App\Check\Object\PuTongHuaCheckObject;
use Library\Abstracts\Controller\AbstractController;

class PuTongHuaController extends AbstractController
{
    public function check()
    {
        return (new PuTongHuaLogic())->check(new PuTongHuaCheckObject($this->request));
    }
}