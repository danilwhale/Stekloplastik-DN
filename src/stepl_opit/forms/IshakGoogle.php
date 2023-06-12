<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;


class IshakGoogle extends AbstractForm
{
    var $requestType = -1;
    
    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {
        switch (str::replace(str::lower($this->edit->text), ' ', ''))
        {
            case ("абоиклещраяль"): 
                $this->setRequest(
                    "Скачать Абои Клещ Рояль", 
                    "Только здесь вы можете скачать более 200+ обоев на разный вкус и цвет!", 
                    "wallscloud.png");
                $this->requestType = 0;
                break;
            case ("юбуб"):    
                $this->setRequest(
                    "YouBub",
                    "Смотрите видео от разных авторов",
                    "ubyb.png"
                );
                $this->requestType = 1;
                break;
            case ("тиктак"):
                $this->setRequest(
                    "TikTak",
                    "Миллионы коротких видео для всех",
                    "tiktak.png"
                );
                $this->requestType = 2;
                break;
            default: UXDialog::showAndWait(
                "Запрос не найден.\nПопулярные запросы:\nабои клещ раяль\nюбуб\nтик так",
                "INFORMATION"); 
                break;   
        }
    }

    /**
     * @event link.click-Left 
     */
    function doLinkClickLeft(UXMouseEvent $e = null)
    {    
        switch ($this->requestType)
        {
        case 0:
            $this->appModule()->getIshak()->openUrl("абоиклещраяль.облакообои.мой", "IshakAboiKleshRayal");
            break;
        case 1:
            $this->appModule()->getIshak()->openUrl("юбуб.юкоз.юа", "IshakYoutube");
            break;
        case 2:
            UXDialog::showAndWait("Не удалось установить связь с сервером\nтиктак.ау", "ERROR");
            break;
        }
    }

    
    function setRequest(string $title, string $desc, string $imageName)
    {
        $this->link->visible = true;
        $this->link->text = $title;
        
        $this->label3->visible = true;
        $this->label3->text = $desc;
        
        $this->image->image = new UXImage("res://.data/img/" . $imageName);
        $this->image->visible = true;
    }
}
