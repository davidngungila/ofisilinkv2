<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Office Management - Office Management System')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar w-64 fixed lg:static h-full z-50 lg:z-auto transform lg:transform-none transition-transform duration-300 ease-in-out">
            <div class="flex flex-col h-full">
                <!-- Logo -->
                <div class="p-6 border-b border-white/10">
                    <div class="flex items-center justify-center">
                        <div class="bg-white rounded-lg p-2">
                            <img src="{{ asset('office_link_logo.png') }}" alt="Office Management" class="h-10 w-auto">
                        </div>
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
                            <a href="{{ route('accounting.imprest') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Imprest Management</a>
                            <a href="{{ route('accounting.refund') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Refund Management</a>
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
                            <a href="{{ route('files.digital') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Digital File</a>
                            <a href="{{ route('files.physical') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Physical Rack</a>
                            <a href="{{ route('files.my-files') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">My Files</a>
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
                            <a href="{{ route('hr.personal-particulars') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Personal Particulars</a>
                            <a href="{{ route('hr.leave') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Leave Management</a>
                            <a href="{{ route('hr.permission') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Permission Management</a>
                            <a href="{{ route('hr.sick-sheet') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Sick Sheet Management</a>
                            <a href="{{ route('hr.performance') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Performance Assessments</a>
                            <a href="{{ route('hr.payroll') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Payroll Processing</a>
                            <a href="{{ route('hr.recruitment') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Recruitment Management</a>
                            <a href="{{ route('hr.departments') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Department & Position Management</a>
                            <a href="{{ route('hr.attendance') }}" class="block px-4 py-2 text-white/80 hover:text-white hover:bg-white/5 rounded-lg text-sm">Attendance Tracking</a>
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
            <header class="bg-white border-b border-gray-200 px-4 lg:px-6 py-4">
                <div class="flex items-center justify-between">
                    <!-- Left Side: Logo/Toggle and Title -->
                    <div class="flex items-center space-x-4">
                        <button id="sidebar-toggle" class="lg:hidden text-gray-600 hover:text-[#940000] transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        <div class="hidden md:flex flex-col">
                            <h1 class="text-lg lg:text-xl font-extrabold text-gray-900 leading-tight">Office Management System</h1>
                            <p class="text-xs font-extrabold text-gray-700 hidden lg:block">Comprehensive Office Solution</p>
                        </div>
                    </div>
                    
                    <!-- Right Side: Date/Time, Notifications, Profile -->
                    <div class="flex items-center space-x-6">
                        <!-- Date and Time -->
                        <div class="hidden lg:flex items-center space-x-4 px-4 py-2 bg-gray-50 rounded-lg border border-gray-200">
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <span id="live-date" class="text-sm font-semibold text-gray-700"></span>
                            </div>
                            <div class="w-px h-5 bg-gray-300"></div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span id="live-time" class="text-sm font-semibold text-gray-700"></span>
                            </div>
                        </div>
                        
                        <!-- Mobile Date/Time -->
                        <div class="lg:hidden flex items-center space-x-2 px-3 py-1.5 bg-gray-50 rounded-lg border border-gray-200">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span id="live-time-mobile" class="text-sm font-semibold text-gray-700"></span>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                    <!-- Notifications Dropdown -->
                    <div class="relative group" id="notification-dropdown">
                        <button id="notification-btn" class="relative text-gray-600 hover:text-[#940000] transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                            <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-[#940000] ring-2 ring-white"></span>
                        </button>
                        
                        <!-- Notifications Dropdown Menu -->
                        <div class="absolute right-0 mt-2 w-[calc(100vw-2rem)] md:w-96 max-w-md bg-white rounded-lg shadow-xl border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 max-h-[500px] overflow-y-auto">
                            <div class="p-3 md:p-4 border-b border-gray-200 bg-gray-50">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-sm md:text-base font-bold text-gray-800">Notifications</h3>
                                    <span class="text-xs text-gray-500">3 new</span>
                                </div>
                            </div>
                            <div class="py-1 md:py-2">
                                <!-- Notification Items -->
                                <a href="#" class="block px-3 md:px-4 py-3 md:py-4 hover:bg-gray-50 border-b border-gray-100 transition-colors">
                                    <div class="flex items-start space-x-3">
                                        <div class="flex-shrink-0">
                                            <div class="w-3 h-3 rounded-full bg-[#940000] mt-1.5"></div>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-semibold text-gray-900">New task assigned</p>
                                            <p class="text-xs text-gray-600 mt-1 leading-relaxed">You have been assigned a new task in the project management module. Please review and update the status.</p>
                                            <p class="text-xs text-gray-400 mt-2">2 minutes ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="block px-3 md:px-4 py-3 md:py-4 hover:bg-gray-50 border-b border-gray-100 transition-colors">
                                    <div class="flex items-start space-x-3">
                                        <div class="flex-shrink-0">
                                            <div class="w-3 h-3 rounded-full bg-[#940000] mt-1.5"></div>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-semibold text-gray-900">System update available</p>
                                            <p class="text-xs text-gray-600 mt-1 leading-relaxed">A new system update is ready to install. This update includes security patches and performance improvements.</p>
                                            <p class="text-xs text-gray-400 mt-2">1 hour ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="block px-3 md:px-4 py-3 md:py-4 hover:bg-gray-50 border-b border-gray-100 transition-colors">
                                    <div class="flex items-start space-x-3">
                                        <div class="flex-shrink-0">
                                            <div class="w-3 h-3 rounded-full bg-gray-300 mt-1.5"></div>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-semibold text-gray-900">Report generated</p>
                                            <p class="text-xs text-gray-600 mt-1 leading-relaxed">Your monthly financial report has been generated successfully. You can download it from the reports section.</p>
                                            <p class="text-xs text-gray-400 mt-2">3 hours ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="block px-3 md:px-4 py-3 md:py-4 hover:bg-gray-50 border-b border-gray-100 transition-colors">
                                    <div class="flex items-start space-x-3">
                                        <div class="flex-shrink-0">
                                            <div class="w-3 h-3 rounded-full bg-gray-300 mt-1.5"></div>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-semibold text-gray-900">Leave request approved</p>
                                            <p class="text-xs text-gray-600 mt-1 leading-relaxed">Your leave request for next week has been approved by your manager.</p>
                                            <p class="text-xs text-gray-400 mt-2">5 hours ago</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-3 md:p-4 border-t border-gray-200 bg-gray-50">
                                <a href="#" class="block text-center text-xs md:text-sm text-[#940000] hover:text-[#7a0000] font-semibold transition-colors">View all notifications</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- User Profile Dropdown -->
                    <div class="relative group" id="profile-dropdown">
                        <button class="flex items-center space-x-3 focus:outline-none px-3 py-2 rounded-lg border-2 border-transparent hover:border-[#940000] transition-all">
                            <div class="w-10 h-10 rounded-full bg-[#940000] flex items-center justify-center text-white font-semibold hover:bg-[#7a0000] transition-colors border-2 border-[#940000]">
                                {{ strtoupper(substr(auth()->check() ? auth()->user()->name : 'U', 0, 1)) }}
                            </div>
                            <div class="hidden lg:block text-left">
                                <p class="text-sm font-medium text-gray-800">{{ auth()->check() ? auth()->user()->name : 'User Name' }}</p>
                                <p class="text-xs text-gray-500">{{ auth()->check() ? auth()->user()->email : 'Administrator' }}</p>
                            </div>
                            <svg class="w-4 h-4 text-gray-600 hidden lg:block group-hover:text-[#940000] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <!-- Dropdown Menu -->
                        <div class="absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-lg border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center">
                                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    Account Settings
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center">
                                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    Profile
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center">
                                    <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                    Security
                                </a>
                                <div class="border-t border-gray-200 my-1"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left block px-4 py-2 text-sm text-red-600 hover:bg-red-50 flex items-center">
                                        <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                        </svg>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Page Content with Footer -->
            <div class="flex-1 overflow-y-auto flex flex-col">
                <main class="flex-1 bg-gray-50 p-4 lg:p-6">
                    @yield('content')
                </main>
                
                <!-- Footer -->
                <footer class="bg-white border-t border-gray-200 px-4 lg:px-6 py-4 mt-auto">
                    <div class="flex flex-col md:flex-row items-center justify-center space-y-2 md:space-y-0 text-sm text-gray-600">
                        <p>Version: 1.0.0 | © 2025 OfisiLink. All rights reserved. | Powered By EmCa Techonologies</p>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>

