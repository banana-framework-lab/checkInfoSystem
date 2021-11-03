<?php

namespace App\Check\Controller;

use App\Check\Logic\ChaBanShengLogic;
use App\Check\Object\ChaBanShengCheckObject;
use Library\Abstracts\Controller\AbstractController;

class ChaBanShengController extends AbstractController
{
    public function check()
    {
        return (new ChaBanShengLogic())->check(new ChaBanShengCheckObject($this->request));
    }
}