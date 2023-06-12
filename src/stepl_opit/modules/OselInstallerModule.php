<?php
namespace stepl_opit\modules;

use std, gui, framework, stepl_opit;


class OselInstallerModule extends AbstractModule
{
    $speed = 1;
    $downloadedFiles = 0;
    $downloadingFiles = false;

    /**
     * @event timer.action 
     */
    function doTimerAction(ScriptEvent $e = null)
    {    
        if ($this->downloadedFiles)
        {
            $this->progressBar->progress += 1;
            
            if ($this->progressBar->progress >= 100)
            {
                $desktop =  $this->appModule()->getDesktop();
                $desktop->closeAkno();
                $desktop->displayAkno("Ishak");
                Devices::$installedOsel = true;
                
                $desktop->image5->image = new UXImage("res://.data/img/osel.png");
                $desktop->label5->text = "осел";
            }
        }
        else 
        {
            $this->progressBar->progress += $this->speed;
            $this->setRandSpeed();
                    
            if ($this->progressBar->progress >= 100)
            {
                $this->downloadedFiles = true;
                $this->label->text = "Установка...";
                $this->progressBar->progress = 0;
            }
        }
        
    }

    /**
     * @event construct 
     */
    function doConstruct(ScriptEvent $e = null)
    {    
        
    }
    
    
    function setRandSpeed()
    {
        $this->speed = rand(1, 10);
    }
}
