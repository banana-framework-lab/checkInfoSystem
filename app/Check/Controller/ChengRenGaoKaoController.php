<?php

namespace App\Check\Controller;

use App\Check\Logic\ChengRenGaoKaoLogic;
use App\Check\Object\ChengRenGaoKaoObject;
use Library\Abstracts\Controller\AbstractController;

class ChengRenGaoKaoController extends AbstractController
{
    public function check()
    {
        return (new ChengRenGaoKaoLogic())->check(new ChengRenGaoKaoObject($this->request));
    }
}