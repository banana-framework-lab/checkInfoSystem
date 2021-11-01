<?php

namespace App\Check\Form;

use Library\Abstracts\Form\AbstractForm;

class JiaoShiZiGeForm extends AbstractForm
{
    public function check()
    {
        $this->setRequestField(['zhun_kao_zheng_hao', 'xing_ming']);

        $this->setRequestErrMsg([
            'zhun_kao_zheng_hao' => '准考证号',
            'xing_ming' => '姓名',
        ]);
    }
}