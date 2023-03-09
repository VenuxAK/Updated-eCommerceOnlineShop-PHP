<?php

class AdminPagesController
{
    public static function sessionExit()
    {
        if(!isset($_SESSION["is_admin_logged_in"]))
        {
            redirect("/admin/login");
        }
    }
    public static function adminView()
    {
        redirect("/admin/dashboard");
    }
    public static function dashboardView()
    {
        self::sessionExit();
        view("admin/dashboard");
    }
    public static function adminProfile()
    {
        self::sessionExit();
        view("admin/profile");
    }
    public static function usersAdminView()
    {
        self::sessionExit();
        view("admin/users.admin");
    }
    public static function usersCustomerView()
    {
        self::sessionExit();
        view("admin/users.customer");
    }
    public static function productsView()
    {
        self::sessionExit();
        view("admin/products");
    }
    public static function categoriesView()
    {
        self::sessionExit();
        view("admin/categories");
    }
    public static function ordersView()
    {
        self::sessionExit();
        view("admin/orders");
    }
    public static function tablesView()
    {
        self::sessionExit();
        view("admin/tables");
    }
}
