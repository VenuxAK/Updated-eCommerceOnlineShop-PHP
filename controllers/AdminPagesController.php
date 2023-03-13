<?php

class AdminPagesController
{
    public static function dashboardView()
    {
        view("admin/dashboard");
    }
    public static function adminProfile()
    {
        view("admin/profile");
    }
    public static function usersAdminView()
    {
        view("admin/users.admin");
    }
    public static function usersCustomerView()
    {
        view("admin/users.customer");
    }
    public static function productsView()
    {
        view("admin/products");
    }
    public static function categoriesView()
    {
        view("admin/categories");
    }
    public static function ordersView()
    {
        view("admin/orders");
    }
    public static function tablesView()
    {
        view("admin/tables");
    }
}
