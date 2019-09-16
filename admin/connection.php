<?php

// Db configs.
define('HOST', 'localhost');
define('PORT', 3306);
define('DATABASE', 'mintarik_mintari');
define('USERNAME', 'root');
define('PASSWORD', '');
define('CHARSET', 'utf8');

/*
 * Enable internal report functions. This enables the exception handling, 
 * e.g. mysqli will not throw PHP warnings anymore, but mysqli exceptions 
 * (mysqli_sql_exception).
 * 
 * MYSQLI_REPORT_ERROR: Report errors from mysqli function calls.
 * MYSQLI_REPORT_STRICT: Throw a mysqli_sql_exception for errors instead of warnings. 
 * 
 * @link http://php.net/manual/en/class.mysqli-driver.php
 * @link http://php.net/manual/en/mysqli-driver.report-mode.php
 * @link http://php.net/manual/en/mysqli.constants.php
 */
$mysqliDriver = new mysqli_driver();
$mysqliDriver->report_mode = (MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

/*
 * Create a new db connection.
 * 
 * @see http://php.net/manual/en/mysqli.construct.php
 */
$connection = new mysqli(HOST, USERNAME, PASSWORD, DATABASE, PORT);