<?php

// Route::get("uri", [Controller::class, "method"]);

// Clients Side
Route::get("", [PagesController::class, "home"]);
Route::get("about", [PagesController::class, "about"]);
Route::get("contact", [PagesController::class, "contact"]);

Route::get("products/product-detail", [PagesController::class, "productDetail"]);
Route::get("products/checkout", [PagesController::class, "productsCheckout"]);
Route::get("cart", [PagesController::class, "addToCart"]);
Route::get("categories", [PagesController::class, "categories"]);

// Clients Side Authentication
Route::get("login", [AuthController::class, "login"]);
Route::get("register", [AuthController::class, "register"]);
Route::post("login", [AuthController::class, "login"]);
Route::post("register", [AuthController::class, "register"]);
Route::get("logout", [AuthController::class, "logout"]);


// Admin Panel Authentication
Route::get("admin/login", [AuthController::class, "adminLogin"]);
Route::post("admin/login", [AuthController::class, "adminLogin"]);
Route::get("admin/logout", [AuthController::class, "adminLogout"]);

// Admin Panel
Route::get("admin", [AdminPagesController::class, "adminView"]);
Route::get("admin/dashboard", [AdminPagesController::class, "dashboardView"]);
Route::get("admin/profile", [AdminPagesController::class, "adminProfile"]);
Route::get("admin/users-admin", [AdminPagesController::class, "usersAdminView"]);
Route::get("admin/users-customer", [AdminPagesController::class, "usersCustomerView"]);
Route::get("admin/products", [AdminPagesController::class, "productsView"]);
Route::get("admin/categories", [AdminPagesController::class, "categoriesView"]);
Route::get("admin/orders", [AdminPagesController::class, "ordersView"]);
Route::get("admin/tables", [AdminPagesController::class, "tablesView"]);
