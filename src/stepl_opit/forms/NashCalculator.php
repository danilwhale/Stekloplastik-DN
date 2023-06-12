<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;


class NashCalculator extends AbstractForm
{
    $pathS = "курятник/";
    

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    

    }

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        $this->changeFolder("MainPage");
    }

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
        $this->appModule()->comp = $this;
    }

    /**
     * @event file.click-Left 
     */
    function doFileClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event che_po_kompy.click-Left 
     */
    function doChe_po_kompyClickLeft(UXMouseEvent $e = null)
    {    
        $this->appModule()->getDesktop()->displayAkno("ChePoKompy");
    }
    
    public function changeFolder(string $formName, string $pathName = "")
    {
        $this->path->text = "курятник/" . $pathName;
        
        echo $this->fragment->content == null;
            echo $this->fragment->content->getName() != $formName;
        
        if ($this->fragment->content == null ||
            $this->fragment->content->getName() != $formName)
        {
            $this->form($formName)->free();
            $this->form($formName)->showInFragment($this->fragment);
        }
    }
}
