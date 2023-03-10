<?php

// if not constant __CONFIG__
// do not lod this file
if(!defined('__CONFIG__')) {
    exit('You do not a config file');
}

if (!isset($_SESSION)) {
    session_start();
}

error_reporting(-1);
ini_set('display_errors', 'On');

define("URLROOT", '/phploginsystem');


// include db class

$root = dirname(__DIR__);

include_once($root . '/inc/classes/DB.php');
include_once($root . '/inc/classes/Filter.php');
include_once("functions.php");

$con = DB::getConnection();