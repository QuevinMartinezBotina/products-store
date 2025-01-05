<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UserRolesController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\AuditController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// * Product routes
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});

// * Role routes
Route::prefix('roles')->group(function () {
    Route::get('/', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/store', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/{role}', [RoleController::class, 'show'])->name('roles.show');
    Route::get('/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::put('/{role}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');
});

// * Permission routes
Route::prefix('permissions')->group(function () {
    Route::get('/', [PermissionsController::class, 'index'])->name('permissions.index');
    Route::get('/create', [PermissionsController::class, 'create'])->name('permissions.create');
    Route::post('/store', [PermissionsController::class, 'store'])->name('permissions.store');
    Route::get('/{permissions}', [PermissionsController::class, 'show'])->name('permissions.show');
    Route::get('/{permissions}/edit', [PermissionsController::class, 'edit'])->name('permissions.edit');
    Route::put('/{permissions}', [PermissionsController::class, 'update'])->name('permissions.update');
    Route::delete('/{permissions}', [PermissionsController::class, 'destroy'])->name('permissions.destroy');
});

// * Category routes
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoriesController::class, 'create'])->name('categories.create');
    Route::post('/store', [CategoriesController::class, 'store'])->name('categories.store');
    Route::get('/{categories}', [CategoriesController::class, 'show'])->name('categories.show');
    Route::get('/{categories}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
    Route::put('/{categories}', [CategoriesController::class, 'update'])->name('categories.update');
    Route::delete('/{categories}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
});

// * User roles routes
Route::prefix('user-roles')->group(function () {
    Route::get('/', [UserRolesController::class, 'index'])->name('user-roles.index');
    Route::get('/create', [UserRolesController::class, 'create'])->name('user-roles.create');
    Route::post('/store', [UserRolesController::class, 'store'])->name('user-roles.store');
    Route::get('/{userRoles}', [UserRolesController::class, 'show'])->name('user-roles.show');
    Route::get('/{userRoles}/edit', [UserRolesController::class, 'edit'])->name('user-roles.edit');
    Route::put('/{userRoles}', [UserRolesController::class, 'update'])->name('user-roles.update');
    Route::delete('/{userRoles}', [UserRolesController::class, 'destroy'])->name('user-roles.destroy');
});

// * Cart item routes
Route::prefix('cart-items')->group(function () {
    Route::get('/', [CartItemController::class, 'index'])->name('cart-items.index');
    Route::get('/create', [CartItemController::class, 'create'])->name('cart-items.create');
    Route::post('/store', [CartItemController::class, 'store'])->name('cart-items.store');
    Route::get('/{cartItem}', [CartItemController::class, 'show'])->name('cart-items.show');
    Route::get('/{cartItem}/edit', [CartItemController::class, 'edit'])->name('cart-items.edit');
    Route::put('/{cartItem}', [CartItemController::class, 'update'])->name('cart-items.update');
    Route::delete('/{cartItem}', [CartItemController::class, 'destroy'])->name('cart-items.destroy');
});

// * Order routes
Route::prefix('orders')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/create', [OrderController::class, 'create'])->name('orders.create');
    Route::post('/store', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/{order}', [OrderController::class, 'show'])->name('orders.show');
    Route::get('/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');
    Route::put('/{order}', [OrderController::class, 'update'])->name('orders.update');
    Route::delete('/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');
});

// * Order item routes
Route::prefix('order-items')->group(function () {
    Route::get('/', [OrderItemController::class, 'index'])->name('order-items.index');
    Route::get('/create', [OrderItemController::class, 'create'])->name('order-items.create');
    Route::post('/store', [OrderItemController::class, 'store'])->name('order-items.store');
    Route::get('/{orderItem}', [OrderItemController::class, 'show'])->name('order-items.show');
    Route::get('/{orderItem}/edit', [OrderItemController::class, 'edit'])->name('order-items.edit');
    Route::put('/{orderItem}', [OrderItemController::class, 'update'])->name('order-items.update');
    Route::delete('/{orderItem}', [OrderItemController::class, 'destroy'])->name('order-items.destroy');
});

// * Audit routes
Route::prefix('audits')->group(function () {
    Route::get('/', [AuditController::class, 'index'])->name('audits.index');
    Route::get('/create', [AuditController::class, 'create'])->name('audits.create');
    Route::post('/store', [AuditController::class, 'store'])->name('audits.store');
    Route::get('/{audit}', [AuditController::class, 'show'])->name('audits.show');
    Route::get('/{audit}/edit', [AuditController::class, 'edit'])->name('audits.edit');
    Route::put('/{audit}', [AuditController::class, 'update'])->name('audits.update');
    Route::delete('/{audit}', [AuditController::class, 'destroy'])->name('audits.destroy');
});
