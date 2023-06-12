<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;


class Ishar2Progs extends AbstractForm
{

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        $this->openDownloadWithText("stepl_update_6_5_1_unlocked.exe");
        $this->appModule()->getDesktop()->displayAkno("A2ProgsUpdateTool");
    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $e = null)
    {    
        $this->openDownloadWithText("stepl_active_any.exe");
        UXDialog::showAndWait("ОШИБКА: Stekloplastik Opit уже активирован\nв activate_key.vbs:10", "ERROR");
    }

    /**
     * @event button3.click-Left 
     */
    function doButton3ClickLeft(UXMouseEvent $e = null)
    {    
        $this->openDownloadWithText("stepl_work_7_setup.exe");
        $this->appModule()->getDesktop()->displayAkno("A2ProgsSteklosoftWork");
    }

    /**
     * @event button5.click-Left 
     */
    function doButton5ClickLeft(UXMouseEvent $e = null)
    {    
        $this->openDownloadWithText("carch_5_3_active.exe");
        UXDialog::showAndWait("Программа несовместима с Stekloplastik Opit. Минимальная версия Stekloplastik Seven", "ERROR");
    }

    /**
     * @event button6.click-Left 
     */
    function doButton6ClickLeft(UXMouseEvent $e = null)
    {    
        $this->openDownloadWithText("steklosoft_osel_setup.exe");
        $this->appModule()->getDesktop()->displayAkno("A2ProgsSsOselInstall");
    }

    /**
     * @event button7.click-Left 
     */
    function doButton7ClickLeft(UXMouseEvent $e = null)
    {    
        $this->openDownloadWithText("recode_decryptor.exe");
        UXDialog::showAndWait("Не обнаружено закодированных файлов", "WARNING");
    }

    /**
     * @event button4.click-Left 
     */
    function doButton4ClickLeft(UXMouseEvent $e = null)
    {    
        $this->openDownloadWithText("easy_winlock.exe");
        $this->appModule()->getDesktop()->displayAkno("A2ProgsEasyWinlocker");
    }
    
    function openDownloadWithText(string $text)
    {
        $download = $this->form("IshakDownload");
        $download->setDownloadText($text);
        $download->showAndWait();
    }

}
