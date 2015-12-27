<?php
require_once 'wordingHelper.php';

//create the url and the script name variables
$url = $_SERVER['REQUEST_URI'];
$parts = parse_url($url);
preg_match('~([^/]+)\..+$~', $parts['path'], $m);
$scriptName = (!empty($m[0])) ? $m[0] : 'index.php';

