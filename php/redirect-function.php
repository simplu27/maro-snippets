<?php
// Lynda-Creating secure PHP Websites / Cap 3. / keep code private

// Put this in functions.php

// Header redirection often require output buffering
// to be turned on in php.ini

function redirect_to($new_location) {
	header("Location: " . $new_location);
	exit();
}