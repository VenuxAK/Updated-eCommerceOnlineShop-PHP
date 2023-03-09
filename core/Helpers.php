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

function request($name)
{
    if(Request::METHOD() === "GET")
    {
        return $_GET[$name];
    }
    if(Request::METHOD() === "POST")
    {
        return $_POST[$name];
    }
}

function validateEmail($email)
{
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

