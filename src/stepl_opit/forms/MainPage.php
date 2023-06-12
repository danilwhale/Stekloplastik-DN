<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;


class MainPage extends AbstractForm
{

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        $this->appModule()->getComputer()->changeFolder("CDrive", "C:/");
    }
    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
        if (!Devices::$enableHdd)
        {
            $this->label->text = "?";
            $this->button->enabled = false;
            
            $this->labelAlt->textColor = UXColor::of('#80b380');
            $this->labelAlt->text = "0/0 байт 0%";
            
            $this->progressBar->progress = 0;
        }
        if (!Devices::$enableDvd)
        {
            $this->buttonAlt->enabled = false;
        }
        
    }

}
