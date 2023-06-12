<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;


class A2ProgsEasyWinlocker extends AbstractForm
{
    $oldBg;
    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
        $this->appModule()->getDesktop()->akno_close->visible = false;
        $this->oldBg = $this->appModule()->getDesktop()->desktop_bg->image;
        $this->appModule()->getDesktop()->desktop_bg->backgroundColor = new UXColor("#000000");
        $this->appModule()->getDesktop()->desktop_bg->image = new UXImage();
    }

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        if ($this->edit->text != "1029") return ;
        
        $this->appModule()->getDesktop()->akno_close->visible = true;
        $this->appModule()->getDesktop()->desktop_bg->image = $oldBg;
        $this->appModule()->getDesktop()->closeAkno();
    }

}
