<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create()
    {
        return view('tasks.create', ['title' => 'Task Creation & Assignment']);
    }
    
    public function hierarchy()
    {
        return view('tasks.hierarchy', ['title' => 'Multi-Level Hierarchy']);
    }
    
    public function deadlines()
    {
        return view('tasks.deadlines', ['title' => 'Deadline Tracking & Reminders']);
    }
    
    public function progress()
    {
        return view('tasks.progress', ['title' => 'Progress Updates & Status']);
    }
    
    public function analytics()
    {
        return view('tasks.analytics', ['title' => 'Task Analytics & Reports']);
    }
    
    public function certificates()
    {
        return view('tasks.certificates', ['title' => 'Completion Certificates']);
    }
    
    public function department()
    {
        return view('tasks.department', ['title' => 'Department Filtering']);
    }
    
    public function history()
    {
        return view('tasks.history', ['title' => 'Task History & Audit']);
    }
    
    public function bulk()
    {
        return view('tasks.bulk', ['title' => 'Bulk Operations']);
    }
    
    public function notifications()
    {
        return view('tasks.notifications', ['title' => 'Real-Time Notifications']);
    }
}

