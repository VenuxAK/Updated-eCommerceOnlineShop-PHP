<?php

class AdminPagesController
{
    public static function dashboard()
    {
        view("admin/dashboard");
    }
    public static function tables()
    {
        view("admin/tables");
    }
}
