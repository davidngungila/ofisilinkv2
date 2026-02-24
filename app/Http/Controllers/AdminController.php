<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users()
    {
        return view('admin.users', ['title' => 'User & Role Management']);
    }
    
    public function permissions()
    {
        return view('admin.permissions', ['title' => 'Permission & Access Control']);
    }
    
    public function departments()
    {
        return view('admin.departments', ['title' => 'Department & Organization']);
    }
    
    public function settings()
    {
        return view('admin.settings', ['title' => 'System Settings']);
    }
    
    public function activity()
    {
        return view('admin.activity', ['title' => 'Activity Logging & Audit']);
    }
    
    public function backup()
    {
        return view('admin.backup', ['title' => 'Backup & Restore']);
    }
    
    public function health()
    {
        return view('admin.health', ['title' => 'System Health Monitoring']);
    }
    
    public function communication()
    {
        return view('admin.communication', ['title' => 'Communication Settings']);
    }
    
    public function financialYear()
    {
        return view('admin.financial-year', ['title' => 'Financial Year Management']);
    }
    
    public function bulk()
    {
        return view('admin.bulk', ['title' => 'Bulk Operations']);
    }
}

