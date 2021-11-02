<?php

namespace App\Check\Form;

use Library\Abstracts\Form\AbstractForm;

class PuTongHuaForm extends AbstractForm
{
    public function check()
    {
        $this->setRequestField(['info_zhengjianbianhao', 'info_xingming']);

        $this->setRequestErrMsg([
            'info_zhengjianbianhao' => '证件编号',
            'info_xingming' => '姓名',
        ]);
    }
}