<?php

// Route::get("uri", [Controller::class, "method"]);

Route::get("", [PagesController::class, "home"]);
Route::get("about", [PagesController::class, "about"]);
Route::get("contact", [PagesController::class, "contact"]);

// Products
Route::get("products/product-detail", [PagesController::class, "productDetail"]);
Route::get("cart/add-product", [PagesController::class, "addToCart"]);

Route::get("admin", [AdminPagesController::class, "dashboard"]);
Route::get("admin/tables", [AdminPagesController::class, "tables"]);
