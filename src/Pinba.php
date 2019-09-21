<?php
/**
 * Created by PhpStorm.
 * User: z0dd
 */
namespace z0dd\Pinba;

/**
 * Class Pinba
 *
 * @package z0dd\Pinba
 */
class Pinba
{
    /**
     * Pinba constructor.
     */
    public function __construct()
    {
        $this->checkPinbaEnable();
    }

    /**
     * @return mixed
     */
    public static function getUnknown()
    {
        return config('pinba.unknown');
    }

    /**
     * @return bool
     */
    public static function checkPinbaEnable()
    {
        return extension_loaded('pinba') === true
            && config('pinba.enable') == true
            && ini_get('pinba.enable') == true;
    }
}