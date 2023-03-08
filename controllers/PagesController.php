<?php

class PagesController
{
    public static function home()
    {
        view("home");
    }
    public static function about()
    {
        view("about");
    }
    public static function contact()
    {
        view("contact");
    }
}
