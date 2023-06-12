<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;


class IshakDownload extends AbstractForm
{
    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        $this->free();
    }

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        $this->progressBar->progress = 0;
        $this->timer->start();
        $this->randSpeed();
    }
    
    public function setDownloadText(string $text)
    {
        $this->title = str::format($this->title, $text);
    }
}
