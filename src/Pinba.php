<?php
/**
 * Created by PhpStorm.
 * User: z0dd
 */
namespace z0dd\Pinba;

class Pinba
{
    public function __construct()
    {
        $this->checkPinbaEnable();
    }

    public static function getUnknown()
    {
        return config('pinba.unknown');
    }

    public static function checkPinbaEnable()
    {
        return extension_loaded('pinba') === true
            && config('pinba.enable') == true
            && ini_get('pinba.enable') == true;
    }
}