<?php

namespace App\Check\Object;

use Library\Abstracts\Object\AbstractObject;

class YanJiuShengCheckObject extends AbstractObject
{
    public $shen_fen_zheng_hao;

    public $xing_ming;

    public function assignHook()
    {
        if ($this->shen_fen_zheng_hao) {
            $this->shen_fen_zheng_hao = strtolower($this->shen_fen_zheng_hao);
        }

        if ($this->xing_ming) {
            $this->xing_ming = strtolower($this->xing_ming);
        }
    }
}