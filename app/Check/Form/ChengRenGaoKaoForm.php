<?php

namespace App\Check\Form;

use Library\Abstracts\Form\AbstractForm;

class ChengRenGaoKaoForm extends AbstractForm
{
    public function check()
    {
        $this->setRequestField(['kaoshenghao', 'xingming']);

        $this->setRequestErrMsg([
            'kaoshenghao' => '考生号',
            'xingming' => '姓名',
        ]);
    }
}