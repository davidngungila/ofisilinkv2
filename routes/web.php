<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\FileManagementController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HRController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssetController;

// Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// Accounting & Finance Routes
Route::prefix('accounting')->name('accounting.')->group(function () {
    Route::get('/petty-cash', [AccountingController::class, 'pettyCash'])->name('petty-cash');
    Route::get('/imprest', [AccountingController::class, 'imprest'])->name('imprest');
    Route::get('/refund', [AccountingController::class, 'refund'])->name('refund');
});

// File Management Routes
Route::prefix('files')->name('files.')->group(function () {
    Route::get('/digital', [FileManagementController::class, 'digital'])->name('digital');
    Route::get('/physical', [FileManagementController::class, 'physical'])->name('physical');
    Route::get('/my-files', [FileManagementController::class, 'myFiles'])->name('my-files');
});

// Task & Project Management Routes
Route::prefix('tasks')->name('tasks.')->group(function () {
    Route::get('/create', [TaskController::class, 'create'])->name('create');
    Route::get('/hierarchy', [TaskController::class, 'hierarchy'])->name('hierarchy');
    Route::get('/deadlines', [TaskController::class, 'deadlines'])->name('deadlines');
    Route::get('/progress', [TaskController::class, 'progress'])->name('progress');
    Route::get('/analytics', [TaskController::class, 'analytics'])->name('analytics');
    Route::get('/certificates', [TaskController::class, 'certificates'])->name('certificates');
    Route::get('/department', [TaskController::class, 'department'])->name('department');
    Route::get('/history', [TaskController::class, 'history'])->name('history');
    Route::get('/bulk', [TaskController::class, 'bulk'])->name('bulk');
    Route::get('/notifications', [TaskController::class, 'notifications'])->name('notifications');
});

// Human Resource Management Routes
Route::prefix('hr')->name('hr.')->group(function () {
    Route::get('/personal-particulars', [HRController::class, 'personalParticulars'])->name('personal-particulars');
    Route::get('/leave', [HRController::class, 'leave'])->name('leave');
    Route::get('/permission', [HRController::class, 'permission'])->name('permission');
    Route::get('/sick-sheet', [HRController::class, 'sickSheet'])->name('sick-sheet');
    Route::get('/performance', [HRController::class, 'performance'])->name('performance');
    Route::get('/payroll', [HRController::class, 'payroll'])->name('payroll');
    Route::get('/recruitment', [HRController::class, 'recruitment'])->name('recruitment');
    Route::get('/departments', [HRController::class, 'departments'])->name('departments');
    Route::get('/attendance', [HRController::class, 'attendance'])->name('attendance');
});

// Incident Management Routes
Route::prefix('incidents')->name('incidents.')->group(function () {
    Route::get('/report', [IncidentController::class, 'report'])->name('report');
    Route::get('/email', [IncidentController::class, 'email'])->name('email');
    Route::get('/evidence', [IncidentController::class, 'evidence'])->name('evidence');
    Route::get('/assignment', [IncidentController::class, 'assignment'])->name('assignment');
    Route::get('/status', [IncidentController::class, 'status'])->name('status');
    Route::get('/comments', [IncidentController::class, 'comments'])->name('comments');
    Route::get('/timeline', [IncidentController::class, 'timeline'])->name('timeline');
    Route::get('/analytics', [IncidentController::class, 'analytics'])->name('analytics');
    Route::get('/bulk', [IncidentController::class, 'bulk'])->name('bulk');
    Route::get('/sla', [IncidentController::class, 'sla'])->name('sla');
});

// Reporting & Analytics Routes
Route::prefix('reports')->name('reports.')->group(function () {
    Route::get('/dashboards', [ReportController::class, 'dashboards'])->name('dashboards');
    Route::get('/financial', [ReportController::class, 'financial'])->name('financial');
    Route::get('/hr', [ReportController::class, 'hr'])->name('hr');
    Route::get('/task', [ReportController::class, 'task'])->name('task');
    Route::get('/incident', [ReportController::class, 'incident'])->name('incident');
    Route::get('/builder', [ReportController::class, 'builder'])->name('builder');
    Route::get('/visualization', [ReportController::class, 'visualization'])->name('visualization');
    Route::get('/export', [ReportController::class, 'export'])->name('export');
    Route::get('/scheduled', [ReportController::class, 'scheduled'])->name('scheduled');
    Route::get('/alerts', [ReportController::class, 'alerts'])->name('alerts');
});

// System Administration Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/permissions', [AdminController::class, 'permissions'])->name('permissions');
    Route::get('/departments', [AdminController::class, 'departments'])->name('departments');
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/general', [AdminController::class, 'settingsGeneral'])->name('general');
        Route::get('/security', [AdminController::class, 'settingsSecurity'])->name('security');
        Route::get('/email', [AdminController::class, 'settingsEmail'])->name('email');
        Route::get('/integrations', [AdminController::class, 'settingsIntegrations'])->name('integrations');
        Route::get('/notifications', [AdminController::class, 'settingsNotifications'])->name('notifications');
        Route::get('/system', [AdminController::class, 'settingsSystem'])->name('system');
    });
    Route::get('/activity', [AdminController::class, 'activity'])->name('activity');
    Route::get('/backup', [AdminController::class, 'backup'])->name('backup');
    Route::get('/health', [AdminController::class, 'health'])->name('health');
    Route::get('/communication', [AdminController::class, 'communication'])->name('communication');
    Route::get('/financial-year', [AdminController::class, 'financialYear'])->name('financial-year');
    Route::get('/bulk', [AdminController::class, 'bulk'])->name('bulk');
});

// Asset Management Routes
Route::prefix('assets')->name('assets.')->group(function () {
    Route::get('/register', [AssetController::class, 'register'])->name('register');
    Route::get('/assignment', [AssetController::class, 'assignment'])->name('assignment');
    Route::get('/maintenance', [AssetController::class, 'maintenance'])->name('maintenance');
    Route::get('/issues', [AssetController::class, 'issues'])->name('issues');
    Route::get('/depreciation', [AssetController::class, 'depreciation'])->name('depreciation');
    Route::get('/barcode', [AssetController::class, 'barcode'])->name('barcode');
    Route::get('/analytics', [AssetController::class, 'analytics'])->name('analytics');
    Route::get('/bulk', [AssetController::class, 'bulk'])->name('bulk');
});
