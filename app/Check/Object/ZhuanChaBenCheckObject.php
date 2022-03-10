<?php

namespace App\Check\Object;

use Library\Abstracts\Object\AbstractObject;

class ZhuanChaBenCheckObject extends AbstractObject
{
    public $zheng_jian_hou_ba_wei;

    public $xing_ming;

    public function assignHook()
    {
        if ($this->zheng_jian_hou_ba_wei) {
            $this->zheng_jian_hou_ba_wei = strtolower($this->zheng_jian_hou_ba_wei);
        }

        if ($this->xing_ming) {
            $this->xing_ming = strtolower($this->xing_ming);
        }
    }
}