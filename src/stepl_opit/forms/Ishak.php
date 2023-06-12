<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;


class Ishak extends AbstractForm
{
    /**
     * @event button3.click-Left 
     */
    function doButton3ClickLeft(UXMouseEvent $e = null)
    {    
        $this->openUrl("стеклософт.ком/главная.asp", "IshakMainPage");
    }

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
        $this->appModule()->web = $this;
        
        if (!Devices::$installedOsel)
        {
            $this->openUrl("стеклософт.ком/ишак-устарел.asp", "IshakUstarel");
        }
        else 
        {
            $this->appModule()->getDesktop()->akno_title = "Стеклософт Осел";
            $this->appModule()->getDesktop()->akno_icon = new UXImage("res://.data/img/osel.png");
            $this->openUrl("стеклософт.ком/главная.asp", "IshakMainPage");
        }
    }
    
    
    public function openUrl(string $url, string $formName)
    {
            $this->form($formName)->free();
            $form = $this->form($formName);
            
            $form->showInFragment($this->fragment);
            
            if (!str::startsWith($url, "хттп://"))
            {
                $this->edit->text = "хттп://" . $url;
            }
            else 
            {
                $this->edit->text = $url;
            }
            
            if (!str::startsWith(str::replace($url, 'хттп://', ''), "стеклософт.ком") && !Devices::$installedOsel)
            {
                UXDialog::showAndWait(
                    "Не удалось подтвердить подлинность сертификатов веб-сайта '" . $this->edit->text .
                    "'\n" .
                    "Возможно, срок годность сертификатов истекла или время на компьютере спешит",
                    "WARNING"
                );
            }
            
    }
}
