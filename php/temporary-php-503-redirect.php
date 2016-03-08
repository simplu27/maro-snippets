<?php 
// Temporary PHP Redirect:
// Allow Multiple IP Access and Redirect Everyone Else
// https://perishablepress.com/php-redirect-multiple-ip-addresses/
?>

<?php 
// 1. Option One — Quick & Dirty

// Put this in the head of php document !!!

// Adresele de IP care au acces
$allow = array("81.196.93.114", "81.196.93.113");

// Orice alta adresa vede mesajul de mai jos

if(!in_array($_SERVER['REMOTE_ADDR'], $allow) && !in_array($_SERVER["HTTP_X_FORWARDED_FOR"], $allow)) {

	// Perioada dupa care sa incerce
	$retry = 60 * 60; // = 60 minutes

	header("HTTP/1.1 503 Service Unavailable");
	header("Retry-After: $retry");
	echo "<h1>503 - Service Unavailable</h1>";
	echo "<p>Please try again later!</p>";
	exit();
} 
?>

<?php 
// 2. Option Two — Full Meal Deal

// This method is more flexible in that it provides a temporary redirect to an alternate location.
// This is useful when you would like to send your visitors to a completely customized maintenance
// page or to a preexisting page on a different domain.
// As before, this method also delivers a “503 Service Unavailable” HTTP status code
// to the client and instructs a revisit after the specified period of time.
// To throw it down, first edit the next code block according to the list below
// and place at the top of your header.php file:
?>

<?php 
	$allow = array("123.456.789", "456.789.123", "789.123.456");
	if(!in_array($_SERVER['REMOTE_ADDR'], $allow) && !in_array($_SERVER["HTTP_X_FORWARDED_FOR"], $allow)) {
		// modifica locatia unde se afla maintenance.php
		header("Location: http://domain.tld/path/maintenance.php");
		exit();
	} 
?>

<?php 
// maintenance.php:
	$retry = 60 * 60; // = 60 minutes
	header("HTTP/1.1 503 Service Unavailable");
	header("Retry-After: $retry");

	echo "<h1>Site update in progress - Please return in 60 minutes!</h1>";
	exit();
?>