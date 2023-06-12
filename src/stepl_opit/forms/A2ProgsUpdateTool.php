<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;


class A2ProgsUpdateTool extends AbstractForm
{

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
        UXDialog::showAndWait("Не удалось найти важный компонент steplcheck.dll\nСредство обновления завершит свою работу", "ERROR");
        $this->appModule()->getDesktop()->closeAkno();
    }

}
