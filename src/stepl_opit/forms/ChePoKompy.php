<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;


class ChePoKompy extends AbstractForm
{

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
        $this->updateCheckboxes();
        $this->label->text = str::format($this->label->text, Desktop::EDITION, Desktop::BUILD);
    }

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        $this->updateDevices();
        
        $mustClose = false;
        $icon = "";
        switch (Devices::getStateAwareness())
        {
            case (10):
                $mustClose = true;
                $icon = "ERROR";
                break;
            case (6):
                $mustClose = false;
                $icon = "WARNING";
                break;
            case (0): 
                $mustClose = false;
                $icon = "INFORMATION";
                break;
            default:
                $mustClose = false;
                $icon = "CONFIRMATION";
                break;
            
        }
        if ($mustClose)
        {
            //app()->shutdown();
            $this->appModule()->raiseBsod("kernelop_0.dll>0x000001B");
        }
        
        $this->updateCheckboxes();
    }
    
    function updateCheckboxes()
    {
        $this->checkbox->selected = Devices::$enableComp;
        $this->checkboxAlt->selected = Devices::$enableRam321 || Devices::$enableRam322;
        $this->checkbox3->selected = Devices::$enableRam321;
        $this->checkbox4->selected = Devices::$enableRam322;
        $this->checkbox5->selected = Devices::$enableCpu;
        $this->checkbox6->selected = Devices::$enableCpu;
        $this->checkbox7->selected = Devices::$enableGpu;
        $this->checkbox8->selected = Devices::$enableGpu;
        $this->checkbox9->selected = Devices::$enableHdd || Devices::$enableDvd;
        $this->checkbox10->selected = Devices::$enableHdd;
        $this->checkbox11->selected = Devices::$enableDvd;
        $this->checkbox12->selected = Devices::$enableAudio;
        $this->checkbox13->selected = Devices::$enableAudio;
    }
    
    function updateDevices()
    {
        Devices::$enableComp = $this->checkbox->selected;
        
        Devices::$enableRam321 = $this->checkboxAlt->selected;
        Devices::$enableRam322 = $this->checkboxAlt->selected;
        
        Devices::$enableRam321 = $this->checkbox3->selected;
        Devices::$enableRam322 = $this->checkbox4->selected;
        
        Devices::$enableCpu = $this->checkbox5->selected;
        Devices::$enableCpu = $this->checkbox6->selected;
        
        Devices::$enableGpu = $this->checkbox7->selected;
        Devices::$enableGpu = $this->checkbox8->selected;
        
        Devices::$enableHdd = $this->checkbox9->selected;
        Devices::$enableDvd = $this->checkbox9->selected;
        
        Devices::$enableHdd = $this->checkbox10->selected;
        Devices::$enableDvd = $this->checkbox11->selected;
        
        Devices::$enableAudio = $this->checkbox12->selected;
        Devices::$enableAudio = $this->checkbox13->selected;
    }
}
