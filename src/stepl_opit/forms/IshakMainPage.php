<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;


class IshakMainPage extends AbstractForm
{

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        UXDialog::showAndWait("Стеклопластик Семёрка не поддерживается на твоем компе", "WARNING");
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $e = null)
    {    
        UXDialog::showAndWait("Не удалось установить связь с сервером\nтындекс.ру", "ERROR");
    }

    /**
     * @event button3.click-Left 
     */
    function doButton3ClickLeft(UXMouseEvent $e = null)
    {    
        $this->appModule()->getIshak()->openUrl("гугле.ком", "IshakGoogle");
    }

    /**
     * @event button4.click-Left 
     */
    function doButton4ClickLeft(UXMouseEvent $e = null)
    {    
        $this->appModule()->getIshak()->openUrl("двепроги.изихостинг.ру", "Ishar2Progs");
    }

}
