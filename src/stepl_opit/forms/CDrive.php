<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;


class CDrive extends AbstractForm
{

    /**
     * @event folder.click 
     */
    function doFolderClick(UXMouseEvent $e = null)
    {    
        $this->appModule()->getComputer()->changeFolder("SteplOT32", "C:/STEPLOT32");
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
     * @event button5.click 
     */
    function doButton5Click(UXMouseEvent $e = null)
    {
        $this->appModule()->getComputer()->changeFolder("MainPage", "");
    }




}
