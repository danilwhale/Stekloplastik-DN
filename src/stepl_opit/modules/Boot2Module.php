<?php
namespace stepl_opit\modules;

use std, gui, framework, stepl_opit;


class Boot2Module extends AbstractModule
{

    /**
     * @event timer.action 
     */
    function doTimerAction(ScriptEvent $e = null)
    {    
        $this->loadForm("Desktop");
        $this->timer->stop();
    }
    
}
