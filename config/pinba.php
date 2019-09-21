<?php
/**
 * Created by PhpStorm.
 * User: z0dd
 */

return [
    /**
     * Enable pinba extension.
     */
	'enable' => true,

    /**
     * Set this variable to pinba server name
     */
	'host_name' => env('APP_NAME', 'My_App'),
    /**
     * Name of unknow paths or middlewares
     */
    'unknown' => "UNKNOWN",
];