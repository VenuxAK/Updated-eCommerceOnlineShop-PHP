<?php

App::bind("conf", require("config.php"));
App::bind("db", new DB(App::get("conf")["databases"]));
