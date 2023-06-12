<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;


class IshakAboiKleshRayal extends AbstractForm
{

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        $download = $this->form("IshakDownload");
        $download->setDownloadText("aboi_klesh_rayal.png");
        $download->showAndWait();
        
        $this->appModule()->getDesktop()->desktop_bg->image = new UXImage("res://.data/img/aboikleshrayal.png");
        UXDialog::showAndWait("Успешно установлены обои Абои Клещ Раяль", "INFORMATION");
    }

}
