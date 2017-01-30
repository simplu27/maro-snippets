<?php
// Lynda-Creating secure PHP Websites / Cap 3. / keep code private

// Redirect all default request to homepage

header("Location: /");
exit();

// Or you can render a 404 page not found error:
// header("HTTP/1.0 404 Not Found");
// exit();