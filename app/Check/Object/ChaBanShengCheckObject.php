<?php

namespace App\Check\Object;

use Library\Abstracts\Object\AbstractObject;

class ChaBanShengCheckObject extends AbstractObject
{
    public $info_zhengjianbianhao;

    public $info_xingming;

    public function assignHook()
    {
        if ($this->info_zhengjianbianhao) {
            $this->info_zhengjianbianhao = strtolower($this->info_zhengjianbianhao);
        }

        if ($this->info_xingming) {
            $this->info_xingming = strtolower($this->info_xingming);
        }
    }
}