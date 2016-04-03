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

/**
 * Model path
 */
define('Model', dirname(__DIR__) . DS . "Model");

/**
 * View path
 */
define('View', VENDOR . DS . "View");


/**
 * Controller path
 */
define('Controller', dirname(__DIR__) . DS . "Controller");

/**
 * Routing path
 */
define('Routing', VENDOR . DS . "Routing");
