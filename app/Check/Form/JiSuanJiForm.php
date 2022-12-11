<?php

namespace App\Check\Form;

use Library\Abstracts\Form\AbstractForm;

class JiSuanJiForm extends AbstractForm
{
    public function check()
    {
        $this->setRequestField(['xue_hao', 'xing_ming']);

        $this->setRequestErrMsg([
            'xue_hao' => '学号',
            'xing_ming' => '姓名',
        ]);
    }
}