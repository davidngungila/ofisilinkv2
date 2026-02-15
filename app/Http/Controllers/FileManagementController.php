<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileManagementController extends Controller
{
    public function digital()
    {
        return view('files.digital', ['title' => 'Digital File']);
    }
    
    public function physical()
    {
        return view('files.physical', ['title' => 'Physical Rack']);
    }
    
    public function myFiles()
    {
        return view('files.my-files', ['title' => 'My Files']);
    }
}

