<?php

/**
 * Use the DS to separate the directories in other defines
 */
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

/**
 * The full path to the directory which holds "src", WITHOUT a trailing DS.
 */
define('ROOT', dirname(__DIR__));

/**
 * vendor path
 */
define('VENDOR', dirname(__DIR__) . DS . "vendor");

/**
 * webroot path
 */
define('PUBLIC', dirname(__DIR__) . DS . "public");
