<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;

class Booting extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        Media::open("res://.data/beep.mp3");
    }

}
