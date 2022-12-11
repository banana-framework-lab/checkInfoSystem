<?php

namespace App\Check\Object;

use Library\Abstracts\Object\AbstractObject;

class JiSuanJiCheckObject extends AbstractObject
{
    public $xue_hao;

    public $xing_ming;

    public function assignHook()
    {
        if ($this->xue_hao) {
            $this->xue_hao = strtolower($this->xue_hao);
        }

        if ($this->xing_ming) {
            $this->xing_ming = strtolower($this->xing_ming);
        }
    }
}