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
define('WEBROOT', dirname(__DIR__) . DS . "public");

/**
 * js path
 */
define('JS', WEBROOT . DS . "js");

/**
 * css path
 */
define('CSS', WEBROOT . DS . "css");

/**
 * img path
 */
define('IMG', WEBROOT . DS . "img");

/**
 * Model path
 */
define('Model', dirname(__DIR__) . DS . "Model");

/**
 * View path
 */
define('View', dirname(__DIR__) . DS . "View");

/**
 * Template path
 */
define('Layouts', View . DS . "Layouts");

/**
 * Elements path
 */
define('Elements', View . DS . "Elements");

/**
 * VendorView Class path
 */
define('VendorView', VENDOR . DS . "View");


/**
 * Controller path
 */
define('Controller', dirname(__DIR__) . DS . "Controller");

/**
 * Routing path
 */
define('Routing', VENDOR . DS . "Routing");

/**
 * Request path
 */
define('Request', VENDOR . DS . "Request");
