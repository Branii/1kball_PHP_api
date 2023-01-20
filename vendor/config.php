<?php

// Require Composer's autoloader.
require 'vendor/autoload.php';
 
// Using Medoo namespace.
use Medoo\Medoo;
 
// Connect the database.
$database = new Medoo([
    'type' => 'mysql',
    'host' => 'localhost',
    'database' => 'demo',
    'username' => 'root',
    'password' => 'root'
]);

$GLOBALS['con'] = $database;
 
