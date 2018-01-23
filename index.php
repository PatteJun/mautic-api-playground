<?php
require_once "vendor/autoload.php";

use Mautic\Auth\ApiAuth;

session_start();

// ApiAuth->newAuth() will accept an array of Auth settings
$settings = array(
    'userName'   => 'xxx',
    'password'   => 'xxx',
    'baseUrl'    => 'xxx'
);

// Initiate the auth object specifying to use BasicAuth
$initAuth = new ApiAuth();
$auth = $initAuth->newAuth($settings, 'BasicAuth');

echo '<pre>';
print_r($auth);
echo '</pre>';