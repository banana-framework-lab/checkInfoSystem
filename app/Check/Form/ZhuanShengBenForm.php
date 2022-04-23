<?php

namespace App\Check\Form;

use Library\Abstracts\Form\AbstractForm;

class ZhuanShengBenForm extends AbstractForm
{
    public function check()
    {
        $this->setRequestField(['zheng_jian_hou_ba_wei', 'xing_ming']);

        $this->setRequestErrMsg([
            'zheng_jian_hou_ba_wei' => '证件编号后8位',
            'xing_ming' => '姓名',
        ]);
    }
}