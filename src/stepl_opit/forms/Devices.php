<?php
namespace stepl_opit\forms;

use stepl_opit;

class Devices 
{
    public static $enableComp = true;
    public static $enableRam321 = true;
    public static $enableRam322 = true;
    public static $enableCpu = true;
    public static $enableGpu = true;
    public static $enableHdd = true;
    public static $enableDvd = true;
    public static $enableAudio = true;
    
    public static $installedOsel = false;
    
    /**
    * 0 - the safest
    * 10 - the fatalest
    * @return int 
    */
    public static function getStateAwareness()
    {
        if (!Devices::$enableComp) return 10;
        if (!Devices::$enableCpu) return 10;
        if (Devices::getAvailableRam() == 0) return 10;
        
        if (!Devices::$enableGpu) return 6;
        
        if (!Devices::$enableAudio) return 1;
        
        if (!Devices::$enableDvd) return 0;
        
        return 0;
    }
    
    /** 
     * @return int 
     */
    public static function getAvailableRam()
    {
        $ram = 0;
        if (Devices::$enableRam321) $ram += 32;
        if (Devices::$enableRam322) $ram += 32;
        return $ram;
    }    
}