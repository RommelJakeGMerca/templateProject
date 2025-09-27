<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Franchisee\BranchesController;
use App\Http\Controllers\Franchisee\DashboardController;
use App\Http\Controllers\Franchisee\SalesReportsController;
use App\Http\Controllers\Franchisee\StatisticsController;
use App\Http\Controllers\Franchisee\TransactionsReportsController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'isUser'])->prefix('user')->group(function () {

});

Route::middleware(['auth', 'isAdmin'])->prefix('admin')->group(function () {
    // Admin Dashboard Routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

    // Admin Branches Routes
    Route::get('/branches', [BranchesController::class, 'index'])->name('admin.branches.index');
    Route::post('/branches/remove', [BranchesController::class, 'removeBranch'])->name('admin.branches.remove');
    Route::get('/branches/statistics/{branch_id}', [BranchesController::class, 'statistics'])->name('admin.branches.statistics');
    Route::get('/branches/branchTransactions', [BranchesController::class, 'getBranchTodayTransactions'])->name('admin.branches.branchTransactions');
    Route::get('/branches/branchSales', [BranchesController::class, 'getBranchTodaySales'])->name('admin.branches.branchSales');

    // Admin Reports Routes
    Route::get('/sales_reports', [SalesReportsController::class, 'index'])->name('admin.sales-reports.index');
    Route::get('/transactions_reports', [TransactionsReportsController::class, 'index'])->name('admin.transactions-reports.index');

    // Admin Statistics Routes
    Route::get('/statistics', [StatisticsController::class, 'index'])->name('admin.statistics.index');
});

require __DIR__.'/auth.php';
