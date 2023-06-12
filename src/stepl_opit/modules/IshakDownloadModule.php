<?php
namespace stepl_opit\modules;

use std, gui, framework, stepl_opit;


class IshakDownloadModule extends AbstractModule
{
    $speed= 1;
    
    public function randSpeed()
    {
        $this->speed = rand(1, 100);
    }
    
    /**
     * @event timer.action 
     */
    function doTimerAction(ScriptEvent $e = null)
    {    
        $this->progressBar->progress += $this->speed;
        $this->label->text = $this->progressBar->progress . "%";
        if ($this->progressBar->progress >= 100)
        {
            $this->label->text = "Готово";
            $this->timer->stop();
            $this->button->enabled = true;
        }
    }

}
