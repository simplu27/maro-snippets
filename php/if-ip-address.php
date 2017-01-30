<?php

if ($_SERVER['REMOTE_ADDR'] == "127.0.0.1" || $_SERVER['REMOTE_ADDR'] == "1.2.3.4") {
	echo "Show secret things here";
}

if ($_SERVER['REMOTE_ADDR'] == "127.0.0.1") {
	echo "Show secret things here";
}