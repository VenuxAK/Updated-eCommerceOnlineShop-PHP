<?php

class AuthController
{
    public static function login()
    {
        view("login");
    }
    public static function register()
    {
        view("register");
    }
    public static function logout()
    {

    }
    public static function adminLogin()
    {
        view("admin/login");
    }
}
