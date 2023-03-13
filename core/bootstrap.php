<?php

require "core/Helpers.php";
require "core/ServiceContainer.php";

$server_name = $_SERVER["SERVER_NAME"];
$server_port = $_SERVER["SERVER_PORT"];
define("BASE_URL", "http://$server_name:$server_port");

