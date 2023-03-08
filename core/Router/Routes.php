<?php

// Route::get("uri", [Controller::class, "method"]);

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

Route::get("admin", [AdminPagesController::class, "dashboard"]);
Route::get("admin/tables", [AdminPagesController::class, "tables"]);
