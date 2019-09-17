<?php
/**
 * Created by PhpStorm.
 * User: z0dd
 */

class Pinba
{
    public function __construct()
    {
        if (
            config('pinba.enable') == false
            ||
            extension_loaded('pinba') === false
        ) {

        }
    }
}