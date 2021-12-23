<?php

namespace App\Check\Form;

use Library\Abstracts\Form\AbstractForm;

class YanJiuShengForm extends AbstractForm
{
    public function check()
    {
        $this->setRequestField(['shen_fen_zheng_hao', 'xing_ming']);

        $this->setRequestErrMsg([
            'shen_fen_zheng_hao' => '考生号',
            'xing_ming' => '姓名',
        ]);
    }
}