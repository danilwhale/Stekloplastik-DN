<?php
namespace stepl_opit\modules;

use std, gui, framework, stepl_opit;


class BsodModule extends AbstractModule
{

    /**
     * @event timer.action 
     */
    function doTimerAction(ScriptEvent $e = null)
    {    
        $this->loadForm("Desktop", true);
    }

}
