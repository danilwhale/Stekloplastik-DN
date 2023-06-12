<?php
namespace stepl_opit\forms;

use std, gui, framework, stepl_opit;


class A2ProgsSteklosoftWork extends AbstractForm
{

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        if (!$this->verify())
        {
            if (!UXDialog::confirm("Неверный ключ активации. Продолжить?"))
            {
                $this->appModule()->getDesktop()->closeAkno();
            }
        }
        else
        {
            $this->appModule()->getDesktop()->displayAkno("A2ProgsSteklosoftWorkOops");
        }
    }
    
    function verify()
    {
        if ($this->getSumOf($this->edit->text) % 7 != 0)
        {
            return false;
        }
        if (!str::startsWith($this->edit7->text, "5"))
        {
            return false;
        }
        if (!str::startsWith($this->edit8->text, "8"))
        {
            return false;
        }
        if (!$this->getSumOf($this->edit27->text) % 15 != 0)
        {
            return false;
        }
        
        return true;
    }
    
    function getSumOf(string $str)
    {
        $val = 0;
        
        for ($i = 0; $i < str::length($str); $i++)
        {
            $val += $str[$i];
        }
        
        return $val;
    }
}
