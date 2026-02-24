<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'OfisiLink - Office Management System')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar w-64 fixed lg:static h-full z-50 lg:z-auto transform lg:transform-none transition-transform duration-300 ease-in-out">
            <div class="flex flex-col h-full">
                <div class="p-6 border-b border-gray-200">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('office_link_logo.png') }}" alt="Office Link" class="h-14 sm:h-16 lg:h-18 w-auto" />
                    </div>
                </div>
                
                <!-- Navigation -->
                <nav class="flex-1 overflow-y-auto p-4 space-y-1">
                    <!-- Dashboard -->
                    <a href="{{ route('dashboard') }}" class="sidebar-item flex items-center px-4 py-3 text-white hover:bg-white/10 rounded-lg {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span>Dashboard</span>
                    </a>
                    
                    <!-- Accounting & Finance -->
                    <div class="sidebar-item">
                        <a href="#" data-submenu-toggle="accounting-menu" class="flex items-center justify-between px-4 py-3 text-white hover:bg-white/10 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Accounting & Finance</span>
                            </div>
                            <svg class="w-4 h-4 submenu-icon transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <div id="accounting-menu" class="sidebar-submenu ml-4 mt-1">
                            <a href="{{ route('accounting.petty-cash') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Petty Cash Management</a>
                            <a href="{{ route('accounting.imprest') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Imprest Request & Retirement</a>
                            <a href="{{ route('accounting.chart-of-accounts') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Chart of Accounts</a>
                            <a href="{{ route('accounting.journal') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Journal Entries & Ledger</a>
                            <a href="{{ route('accounting.payable-receivable') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Accounts Payable & Receivable</a>
                            <a href="{{ route('accounting.budget') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Budget Planning & Forecasting</a>
                            <a href="{{ route('accounting.reports') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Financial Reports</a>
                            <a href="{{ route('accounting.cash-flow') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Cash Flow & Reconciliation</a>
                            <a href="{{ route('accounting.tax') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Tax & PAYE Management</a>
                            <a href="{{ route('accounting.assets') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Fixed Assets & Depreciation</a>
                        </div>
                    </div>
                    
                    <!-- File Management -->
                    <div class="sidebar-item">
                        <a href="#" data-submenu-toggle="file-menu" class="flex items-center justify-between px-4 py-3 text-white hover:bg-white/10 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                                </svg>
                                <span>File Management</span>
                            </div>
                            <svg class="w-4 h-4 submenu-icon transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <div id="file-menu" class="sidebar-submenu ml-4 mt-1">
                            <a href="{{ route('files.digital') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Digital File System</a>
                            <a href="{{ route('files.physical') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Physical Rack Management</a>
                            <a href="{{ route('files.access-request') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Access Request Workflow</a>
                            <a href="{{ route('files.assignments') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">User-Specific Assignments</a>
                            <a href="{{ route('files.search') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Advanced Search & Filtering</a>
                            <a href="{{ route('files.version') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Version Control & History</a>
                            <a href="{{ route('files.movement') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">File Movement Tracking</a>
                            <a href="{{ route('files.audit') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Complete Audit Trail</a>
                            <a href="{{ route('files.bulk') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Bulk Operations</a>
                            <a href="{{ route('files.confidentiality') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Confidentiality Levels</a>
                        </div>
                    </div>
                    
                    <!-- Task & Project Management -->
                    <div class="sidebar-item">
                        <a href="#" data-submenu-toggle="task-menu" class="flex items-center justify-between px-4 py-3 text-white hover:bg-white/10 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                                <span>Task & Project</span>
                            </div>
                            <svg class="w-4 h-4 submenu-icon transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <div id="task-menu" class="sidebar-submenu ml-4 mt-1">
                            <a href="{{ route('tasks.create') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Task Creation & Assignment</a>
                            <a href="{{ route('tasks.hierarchy') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Multi-Level Hierarchy</a>
                            <a href="{{ route('tasks.deadlines') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Deadline Tracking & Reminders</a>
                            <a href="{{ route('tasks.progress') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Progress Updates & Status</a>
                            <a href="{{ route('tasks.analytics') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Task Analytics & Reports</a>
                            <a href="{{ route('tasks.certificates') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Completion Certificates</a>
                            <a href="{{ route('tasks.department') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Department Filtering</a>
                            <a href="{{ route('tasks.history') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Task History & Audit</a>
                            <a href="{{ route('tasks.bulk') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Bulk Operations</a>
                            <a href="{{ route('tasks.notifications') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Real-Time Notifications</a>
                        </div>
                    </div>
                    
                    <!-- Human Resource Management -->
                    <div class="sidebar-item">
                        <a href="#" data-submenu-toggle="hr-menu" class="flex items-center justify-between px-4 py-3 text-white hover:bg-white/10 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                <span>Human Resources</span>
                            </div>
                            <svg class="w-4 h-4 submenu-icon transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <div id="hr-menu" class="sidebar-submenu ml-4 mt-1">
                            <a href="{{ route('hr.employees') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Employee Registration & Profiles</a>
                            <a href="{{ route('hr.leave') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Leave Management</a>
                            <a href="{{ route('hr.permission') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Permission Requests</a>
                            <a href="{{ route('hr.sick-sheet') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Sick Sheet Management</a>
                            <a href="{{ route('hr.performance') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Performance Assessments</a>
                            <a href="{{ route('hr.payroll') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Payroll Processing</a>
                            <a href="{{ route('hr.recruitment') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Recruitment Management</a>
                            <a href="{{ route('hr.departments') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Department & Position Management</a>
                            <a href="{{ route('hr.attendance') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Attendance Tracking</a>
                            <a href="{{ route('hr.documents') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Document Management</a>
                            <a href="{{ route('hr.communication') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Bulk SMS & Email</a>
                        </div>
                    </div>
                    
                    <!-- Incident Management -->
                    <div class="sidebar-item">
                        <a href="#" data-submenu-toggle="incident-menu" class="flex items-center justify-between px-4 py-3 text-white hover:bg-white/10 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                </svg>
                                <span>Incident Management</span>
                            </div>
                            <svg class="w-4 h-4 submenu-icon transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <div id="incident-menu" class="sidebar-submenu ml-4 mt-1">
                            <a href="{{ route('incidents.report') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Incident Reporting & Classification</a>
                            <a href="{{ route('incidents.email') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Email Integration</a>
                            <a href="{{ route('incidents.evidence') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Evidence Attachments</a>
                            <a href="{{ route('incidents.assignment') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Assignment & Escalation</a>
                            <a href="{{ route('incidents.status') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Status Tracking</a>
                            <a href="{{ route('incidents.comments') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Comment Threads</a>
                            <a href="{{ route('incidents.timeline') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Timeline & History</a>
                            <a href="{{ route('incidents.analytics') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Analytics & Reporting</a>
                            <a href="{{ route('incidents.bulk') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Bulk Operations</a>
                            <a href="{{ route('incidents.sla') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Priority & SLA Tracking</a>
                        </div>
                    </div>
                    
                    <!-- Reporting & Analytics -->
                    <div class="sidebar-item">
                        <a href="#" data-submenu-toggle="reporting-menu" class="flex items-center justify-between px-4 py-3 text-white hover:bg-white/10 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                <span>Reporting & Analytics</span>
                            </div>
                            <svg class="w-4 h-4 submenu-icon transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <div id="reporting-menu" class="sidebar-submenu ml-4 mt-1">
                            <a href="{{ route('reports.dashboards') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Role-Based Dashboards</a>
                            <a href="{{ route('reports.financial') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Financial Reports</a>
                            <a href="{{ route('reports.hr') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">HR Analytics</a>
                            <a href="{{ route('reports.task') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Task & Project Analytics</a>
                            <a href="{{ route('reports.incident') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Incident Statistics</a>
                            <a href="{{ route('reports.builder') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Custom Report Builder</a>
                            <a href="{{ route('reports.visualization') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Data Visualization</a>
                            <a href="{{ route('reports.export') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">PDF & Excel Export</a>
                            <a href="{{ route('reports.scheduled') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Scheduled Reports</a>
                            <a href="{{ route('reports.alerts') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Real-Time Alerts</a>
                        </div>
                    </div>
                    
                    <!-- System Administration -->
                    <div class="sidebar-item">
                        <a href="#" data-submenu-toggle="admin-menu" class="flex items-center justify-between px-4 py-3 text-white hover:bg-white/10 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>System Administration</span>
                            </div>
                            <svg class="w-4 h-4 submenu-icon transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <div id="admin-menu" class="sidebar-submenu ml-4 mt-1">
                            <a href="{{ route('admin.users') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">User & Role Management</a>
                            <a href="{{ route('admin.permissions') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Permission & Access Control</a>
                            <a href="{{ route('admin.departments') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Department & Organization</a>
                            <a href="{{ route('admin.settings') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">System Settings</a>
                            <a href="{{ route('admin.activity') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Activity Logging & Audit</a>
                            <a href="{{ route('admin.backup') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Backup & Restore</a>
                            <a href="{{ route('admin.health') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">System Health Monitoring</a>
                            <a href="{{ route('admin.communication') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Communication Settings</a>
                            <a href="{{ route('admin.financial-year') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Financial Year Management</a>
                            <a href="{{ route('admin.bulk') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Bulk Operations</a>
                        </div>
                    </div>
                    
                    <!-- Asset Management -->
                    <div class="sidebar-item">
                        <a href="#" data-submenu-toggle="asset-menu" class="flex items-center justify-between px-4 py-3 text-white hover:bg-white/10 rounded-lg">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                                <span>Asset Management</span>
                            </div>
                            <svg class="w-4 h-4 submenu-icon transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        <div id="asset-menu" class="sidebar-submenu ml-4 mt-1">
                            <a href="{{ route('assets.register') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Asset Registration</a>
                            <a href="{{ route('assets.assignment') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Assignment & Return Tracking</a>
                            <a href="{{ route('assets.maintenance') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Maintenance Scheduling</a>
                            <a href="{{ route('assets.issues') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Issue Reporting</a>
                            <a href="{{ route('assets.depreciation') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Depreciation Calculation</a>
                            <a href="{{ route('assets.barcode') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Barcode Generation</a>
                            <a href="{{ route('assets.analytics') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Asset Analytics</a>
                            <a href="{{ route('assets.bulk') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Bulk Operations</a>
                        </div>
                    </div>
                </nav>
                
            </div>
        </aside>
        
        <!-- Mobile Overlay -->
        <div id="sidebar-overlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden"></div>
        
        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Header -->
            <header class="bg-white border-b border-gray-200 px-4 lg:px-6 py-4 flex items-center justify-between">
                <div class="flex items-center min-w-0">
                    <button id="sidebar-toggle" class="lg:hidden mr-4 text-gray-600 hover:text-[#940000]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <div class="flex items-center gap-3 min-w-0">
                        <h1 class="text-lg sm:text-xl lg:text-2xl font-bold text-gray-800 truncate">Office Management System</h1>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <button class="relative text-gray-600 hover:text-[#940000]">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                        <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-[#940000] ring-2 ring-white"></span>
                    </button>
                    <div class="relative group">
                        <button id="profile-menu-button" type="button" class="flex items-center gap-3">
                            <div class="hidden sm:block text-right leading-tight">
                                <div class="text-sm font-medium text-gray-800">User Name</div>
                                <div class="text-xs text-gray-500">Administrator</div>
                            </div>
                            <div class="w-12 h-12 rounded-full bg-[#940000] flex items-center justify-center text-white font-semibold shrink-0">
                                U
                            </div>
                        </button>

                        <div id="profile-dropdown" class="hidden group-hover:block absolute right-0 mt-3 w-56 rounded-xl border border-gray-200 bg-white shadow-lg overflow-hidden z-50">
                            <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">Account Profile</a>
                            <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">Settings and Security</a>
                            <div class="border-t border-gray-100"></div>
                            <form method="POST" action="{{ Route::has('logout') ? route('logout') : url('/logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-3 text-sm text-gray-700 hover:bg-gray-50">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto bg-gray-50 p-4 lg:p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>

