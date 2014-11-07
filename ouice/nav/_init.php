<?php

// Select a site environment
define('SITE_ENV', 'off'); // Accepts 'dev', 'live' or 'off'

// By defining the absolute SITE_ROOT and SITE_URL we can use the functions within sub directories

if (SITE_ENV == "dev") {
	// Development server
	define('SITE_ROOT', '/Users/guycarberry/Sites/site-nav/');
	define('SITE_URL', 'http://localhost:8888/site-nav/');
}
else if (SITE_ENV == "live") {
	// Live server
	define('SITE_ROOT', '/share/Qweb/site-nav/');
	define('SITE_URL', 'http://qnap.local/site-nav/');
}
else if (SITE_ENV == "off") {
	// Off. If you select this option all pages must sit in the same directory of your site
	define('SITE_ROOT', getcwd().'/');
	define('SITE_URL', '');
}
else {
	die("Error: Please define SITE_ENV in nav/_init.php");
}

// The XML file path relative to SITE_ROOT
define('XML_PATH', 'nav.xml'); 

// Load the functions
require_once(SITE_ROOT."nav/_functions.php");
?>