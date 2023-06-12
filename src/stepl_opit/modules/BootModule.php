<?php
namespace stepl_opit\modules;

use std, gui, framework, stepl_opit;


class BootModule extends AbstractModule
{

    /**
     * @event action 
     */
    function doAction(ScriptEvent $e = null)
    {    
        
    }

    /**
     * @event timer.action 
     */
    function doTimerAction(ScriptEvent $e = null)
    {    
        $this->label->text = $this->label->text . ".";
        if (str::length($this->label->text) >= 5)
        {
            $this->loadForm("Boot2");
            $this->timer->stop();
        }
    }

}
