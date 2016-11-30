<?php

// Display SERVER variables in php
// http://www.plus2net.com/php_tutorial/php_ip.php
while (list ($key, $val) = each ($_SERVER)) { 
    echo "$key -> $val <br> ";
}

?>