<?php
namespace App\Check\Command;

use Library\Abstracts\Command\AbstractCommand;

class IndexCommand extends AbstractCommand
{
    public function execute()
    {
        echo bananaSwoole(false);
    }
}