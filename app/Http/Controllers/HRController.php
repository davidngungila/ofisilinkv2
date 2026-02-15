<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRController extends Controller
{
    public function personalParticulars()
    {
        return view('hr.personal-particulars', ['title' => 'Personal Particulars']);
    }
    
    public function leave()
    {
        return view('hr.leave', ['title' => 'Leave Management']);
    }
    
    public function permission()
    {
        return view('hr.permission', ['title' => 'Permission Management']);
    }
    
    public function sickSheet()
    {
        return view('hr.sick-sheet', ['title' => 'Sick Sheet Management']);
    }
    
    public function performance()
    {
        return view('hr.performance', ['title' => 'Performance Assessments']);
    }
    
    public function payroll()
    {
        return view('hr.payroll', ['title' => 'Payroll Processing']);
    }
    
    public function recruitment()
    {
        return view('hr.recruitment', ['title' => 'Recruitment Management']);
    }
    
    public function departments()
    {
        return view('hr.departments', ['title' => 'Department & Position Management']);
    }
    
    public function attendance()
    {
        return view('hr.attendance', ['title' => 'Attendance Tracking']);
    }
}

