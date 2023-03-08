<?php

// Route::get("uri", [Controller::class, "method"]);

Route::get("", [PagesController::class, "home"]);
Route::get("about", [PagesController::class, "about"]);
Route::get("contact", [PagesController::class, "contact"]);

Route::get("admin", [AdminPagesController::class, "dashboard"]);
Route::get("admin/tables", [AdminPagesController::class, "tables"]);
