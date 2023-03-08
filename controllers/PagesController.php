<?php

class PagesController
{
    public static function home()
    {
        view("home");
    }
    public static function productDetail()
    {
        view("product-detail");
    }
    public static function addToCart()
    {
        view("add-to-cart");
    }
    public static function productsCheckout()
    {
        view("checkout");
    }
    public static function categories()
    {
        view("categories");
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
