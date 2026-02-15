<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function dashboards()
    {
        return view('reports.dashboards', ['title' => 'Role-Based Dashboards']);
    }
    
    public function financial()
    {
        return view('reports.financial', ['title' => 'Financial Reports']);
    }
    
    public function hr()
    {
        return view('reports.hr', ['title' => 'HR Analytics']);
    }
    
    public function task()
    {
        return view('reports.task', ['title' => 'Task & Project Analytics']);
    }
    
    public function incident()
    {
        return view('reports.incident', ['title' => 'Incident Statistics']);
    }
    
    public function builder()
    {
        return view('reports.builder', ['title' => 'Custom Report Builder']);
    }
    
    public function visualization()
    {
        return view('reports.visualization', ['title' => 'Data Visualization']);
    }
    
    public function export()
    {
        return view('reports.export', ['title' => 'PDF & Excel Export']);
    }
    
    public function scheduled()
    {
        return view('reports.scheduled', ['title' => 'Scheduled Reports']);
    }
    
    public function alerts()
    {
        return view('reports.alerts', ['title' => 'Real-Time Alerts']);
    }
}

