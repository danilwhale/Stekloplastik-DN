<?php
namespace stepl_opit\modules;

use php\desktop\Mouse;
use std, gui, framework, stepl_opit;


class AppModule extends AbstractModule
{
    $comp;
    $desk;
    $bsod;
    $web;

    /**
    * @return NashCalculator
    */
    public function getComputer()
    {
        return $this->comp;
    }

    /**
     * @return Desktop
     */    
    public function getDesktop()
    {
        return $this->desk;
    }
    
    /**
     * @return BSOD
     */
    public function getBsod()
    {
        return $this->bsod;
    }
    
    /**
     * @return Ishak
     */
    public function getIshak()
    {
        return $this->web;
    }
    
    public function raiseBsod(string $reason)
    {
        $this->getBsod()->raise($reason);
    }
    
    /*
    * @return AbstractForm
    */
    public function getForm(string $name)
    {
        Logger::warn("бесполезно");
        return;
        
        $form = app()->getForm($name);
        $this->addCursorToForm($form);
    }
    
    public function addCursorToForm(AbstractForm $form)
    {
        Logger::warn("больше не работает хдд");
        return;
        
        $img = new UXImageArea();
        $img->image = new UXImage("res://.data/img/cursor.png");
        $img->id = "cursorImg";
        
        $form->add($img);
        $form->cursor = "NONE";
        $form->bind("cursorImg.step", function(UXEvent $e = null)
        {
            $e->sender->position = [Mouse::x(), Mouse::y()];
        });
    }
}
