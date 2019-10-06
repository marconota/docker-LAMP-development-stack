<?php

require __DIR__ . '/../vendor/autoload.php';

$requestUri = $_SERVER['REQUEST_URI'];

switch ($requestUri) {
    case '' :
    case '/' :
        echo 'Welcome!';
        break;
    case '/phpinfo' :
        echo phpinfo();
        break;
    default:
        echo '404 Not Found';
        break;
}
