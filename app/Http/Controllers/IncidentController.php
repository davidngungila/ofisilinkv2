<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function report()
    {
        return view('incidents.report', ['title' => 'Incident Reporting & Classification']);
    }
    
    public function email()
    {
        return view('incidents.email', ['title' => 'Email Integration']);
    }
    
    public function evidence()
    {
        return view('incidents.evidence', ['title' => 'Evidence Attachments']);
    }
    
    public function assignment()
    {
        return view('incidents.assignment', ['title' => 'Assignment & Escalation']);
    }
    
    public function status()
    {
        return view('incidents.status', ['title' => 'Status Tracking']);
    }
    
    public function comments()
    {
        return view('incidents.comments', ['title' => 'Comment Threads']);
    }
    
    public function timeline()
    {
        return view('incidents.timeline', ['title' => 'Timeline & History']);
    }
    
    public function analytics()
    {
        return view('incidents.analytics', ['title' => 'Analytics & Reporting']);
    }
    
    public function bulk()
    {
        return view('incidents.bulk', ['title' => 'Bulk Operations']);
    }
    
    public function sla()
    {
        return view('incidents.sla', ['title' => 'Priority & SLA Tracking']);
    }
}

