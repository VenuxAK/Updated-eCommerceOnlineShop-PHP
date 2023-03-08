<?php

declare(strict_type = 1);
ini_set("display_errors", 1);
error_reporting(E_ALL);
ob_start();


require "vendor/autoload.php";
require "core/bootstrap.php";



Router::load("Routes")::direct(Request::URI(), Request::METHOD());
