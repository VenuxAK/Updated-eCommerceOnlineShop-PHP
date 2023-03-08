<?php

function dd($data) 
{
    echo "<pre>";
    die(var_dump($data));
}

function escape($html) 
{
    return htmlspecialchars($html);
}

function view($uri, $data = [])
{
    extract($data);
    return include "views/$uri.view.php";
}

function redirect($view)
{
    return header("Location: $view");
}


