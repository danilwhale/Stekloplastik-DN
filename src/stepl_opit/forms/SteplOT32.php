<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;


class SteplOT32 extends AbstractForm
{

    /**
     * @event buttonAlt.click 
     */
    function doButtonAltClick(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event button.click 
     */
    function doButtonClick(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event button3.click 
     */
    function doButton3Click(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event button4.click 
     */
    function doButton4Click(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event button5.click 
     */
    function doButton5Click(UXMouseEvent $e = null)
    {    
        $this->appModule()->getComputer()->changeFolder("CDrive", "C:");
    }



}
