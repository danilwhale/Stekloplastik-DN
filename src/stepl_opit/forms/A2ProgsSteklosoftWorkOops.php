<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;


class A2ProgsSteklosoftWorkOops extends AbstractForm
{

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        $this->appModule()->getDesktop()->closeAkno();
    }

}
