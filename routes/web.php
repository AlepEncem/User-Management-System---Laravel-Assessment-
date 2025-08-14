<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserManagementController;

Route::get('/', function () {
    return redirect('/admin/users');
});

Route::get('/test', function () {
    return 'Routes working!';
});

// Use the NEW controller name
Route::prefix('admin')->group(function () {
    Route::get('/users', [UserManagementController::class, 'index'])->name('admin.users.index');
    Route::get('/users/create', [UserManagementController::class, 'create'])->name('admin.users.create');
    Route::post('/users', [UserManagementController::class, 'store'])->name('admin.users.store');
    Route::get('/users/{id}', [UserManagementController::class, 'show'])->name('admin.users.show');
    Route::get('/users/{id}/edit', [UserManagementController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/{id}', [UserManagementController::class, 'update'])->name('admin.users.update');
    Route::delete('/users/{id}', [UserManagementController::class, 'destroy'])->name('admin.users.destroy');
});