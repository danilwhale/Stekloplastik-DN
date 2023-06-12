<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;


class BSOD extends AbstractForm
{
    public function raise(string $reason)
    {
        $this->appModule()->getDesktop()->loadForm($this->getName(), true);
        $this->label->text = $reason . "\n" . "Перезагрузка через 5 секунд...";
    }
}
