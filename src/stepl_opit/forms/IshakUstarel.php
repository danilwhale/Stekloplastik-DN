<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;


class IshakUstarel extends AbstractForm
{

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        $download = app()->getForm("IshakDownload");
        $download->setDownloadText("osel_setup.exe");
        $download->showAndWait();
        
        UXDialog::showAndWait("Для запуска требуется Stekloplastik Семёрка или новее", "ERROR");
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $e = null)
    {    
        $this->appModule()->getIshak()->openUrl("стеклософт.ком/главная.asp", "IshakMainPage");
    }
}
