<?php
namespace stepl_opit\forms;

use Error;
use Exception;
use std, gui, framework, stepl_opit;


class Desktop extends AbstractForm
{
    public const BUILD = "10562";
    public const EDITION = "Opit";
    $comp;
    
    /**
     * @event spusk.click-Left 
     */
    function doSpuskClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event shutdown.click-Left 
     */
    function doShutdownClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event akno_close.click-Left 
     */
    function doAkno_closeClickLeft(UXMouseEvent $e = null)
    {    
        $this->closeAkno();
    }

    /**
     * @event nash_calculator.click-Left 
     */
    function doNash_calculatorClickLeft(UXMouseEvent $e = null)
    {
        //$this->appModule()->comp = app()->getForm("NashCalculator");
        $this->displayAkno("NashCalculator");
    }

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        $this->spusk_2->toFront();
        $this->akno->toFront();
    }

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
        $this->appModule()->desk = $this;
        $this->appModule()->bsod = app()->getForm("BSOD");
        $this->title = "Stekloplastik " . Desktop::EDITION . " [build " . Desktop::BUILD . "]";
        
        
    }

    /**
     * @event label3.click-Left 
     */
    function doLabel3ClickLeft(UXMouseEvent $e = null)
    {    
        $this->appModule()->raiseBsod("uipanel.exe->0x0000010");
    }

    /**
     * @event image4.click-Left 
     */
    function doImage4ClickLeft(UXMouseEvent $e = null)
    {
        //$this->appModule()->comp = app()->getForm("NashCalculator");
        $this->displayAkno("TrashBin");
    }

    /**
     * @event image.step 
     */
    function doImageStep(UXEvent $e = null)
    {    
        if (is_nan($this->image->x))
        {
            $this->image->free();
            $this->cursor = "DEFAULT";
        }
    }

    /**
     * @event image5.click-Left 
     */
    function doImage5ClickLeft(UXMouseEvent $e = null)
    {
        //$this->appModule()->comp = app()->getForm("NashCalculator");
        $this->displayAkno("Ishak");
    }

    
    public function displayAkno(string $formName)
    {
        if (!Devices::$enableHdd)
        {
            UXDialog::showAndWait(
                "\"C:/STEPLOT32/SYSTEM32/" . str::upper($formName) . ".EXE\"" . 
                "\nПрограмма за указанным путем не найдена.", 
                "ERROR");
            return;
        }
        $this->akno->show();
        
        
        
            app()->getForm($formName)->free();
            app()->getForm($formName)->showInFragment($this->akno_vnutri);
            $form = app()->getForm($formName);
            $this->akno_icon->image = $form->icons[0];
            $this->akno_title->text = $form->title;
            
    }
    
    public function closeAkno()
    {
        $this->akno->hide();
        $this->akno_vnutri->content->free();
    }
}
