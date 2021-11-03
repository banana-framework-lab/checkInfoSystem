<?php

namespace App\Check\Object;

use Library\Abstracts\Object\AbstractObject;

class ChengRenGaoKaoCheckObject extends AbstractObject
{
    public $kaoshenghao;

    public $xingming;

    public function assignHook()
    {
        if ($this->kaoshenghao) {
            $this->kaoshenghao = strtolower($this->kaoshenghao);
        }

        if ($this->xingming) {
            $this->xingming = strtolower($this->xingming);
        }
    }
}