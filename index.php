<?php
/*
 * Authors: George Mcmullen
 * Date: February 19th, 2021
 * File: index.php
 */

//This is my CONTROLLER page

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Start a session
session_start();

//Require the auto autoload file
require_once('vendor/autoload.php');
require_once ("model/data-layer.php");

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('Debug',3);

//Run fat free
$f3->run();