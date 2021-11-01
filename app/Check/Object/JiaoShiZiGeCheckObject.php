<?php

namespace App\Check\Object;

use Library\Abstracts\Object\AbstractObject;

class JiaoShiZiGeCheckObject extends AbstractObject
{
    public $zhun_kao_zheng_hao;

    public $xing_ming;

    public function assignHook()
    {
        if ($this->zhun_kao_zheng_hao) {
            $this->zhun_kao_zheng_hao = strtolower($this->zhun_kao_zheng_hao);
        }

        if ($this->xing_ming) {
            $this->xing_ming = strtolower($this->xing_ming);
        }
    }
}