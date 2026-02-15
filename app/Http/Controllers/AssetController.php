<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function register()
    {
        return view('assets.register', ['title' => 'Asset Registration']);
    }
    
    public function assignment()
    {
        return view('assets.assignment', ['title' => 'Assignment & Return Tracking']);
    }
    
    public function maintenance()
    {
        return view('assets.maintenance', ['title' => 'Maintenance Scheduling']);
    }
    
    public function issues()
    {
        return view('assets.issues', ['title' => 'Issue Reporting']);
    }
    
    public function depreciation()
    {
        return view('assets.depreciation', ['title' => 'Depreciation Calculation']);
    }
    
    public function barcode()
    {
        return view('assets.barcode', ['title' => 'Barcode Generation']);
    }
    
    public function analytics()
    {
        return view('assets.analytics', ['title' => 'Asset Analytics']);
    }
    
    public function bulk()
    {
        return view('assets.bulk', ['title' => 'Bulk Operations']);
    }
}

