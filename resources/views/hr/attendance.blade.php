@extends('layouts.app')

@section('title', $title . ' - Office Management')
@section('page-title', $title)

@section('content')
<div class="space-y-6">
    <!-- Breadcrumb -->
    <div class="flex items-center space-x-2 text-sm text-gray-600">
        <a href="{{ route('dashboard') }}" class="hover:text-[#940000]">Dashboard</a>
        <span>/</span>
        <a href="#" class="hover:text-[#940000]">Human Resources</a>
        <span>/</span>
        <span class="text-gray-900 font-medium">{{ $title }}</span>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Present Today</p>
                    <p class="text-3xl font-bold text-gray-900">142</p>
                    <p class="text-xs text-green-600 mt-1 flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        91% Attendance Rate
                    </p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Late Arrivals</p>
                    <p class="text-3xl font-bold text-gray-900">6</p>
                    <p class="text-xs text-yellow-600 mt-1 flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        4% of total staff
                    </p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-yellow-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">On Leave / Sick</p>
                    <p class="text-3xl font-bold text-gray-900">8</p>
                    <p class="text-xs text-blue-600 mt-1 flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Authorized absences
                    </p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Unexplained</p>
                    <p class="text-3xl font-bold text-red-600">0</p>
                    <p class="text-xs text-gray-500 mt-1">Excellent compliance</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#940000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content List -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <!-- Header with Actions -->
        <div class="p-6 border-b border-gray-100">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
                <div>
                    <h2 class="text-xl font-bold text-gray-800 uppercase tracking-tight">Attendance Logs</h2>
                    <p class="text-sm text-gray-500 mt-1">Real-time attendance monitoring for {{ date('F d, Y') }}</p>
                </div>
                <div class="flex items-center space-x-3">
                    <button class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-50 flex items-center shadow-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Download Report
                    </button>
                    <button class="px-4 py-2 bg-[#940000] text-white rounded-lg text-sm font-bold hover:bg-[#7a0000] transition-all flex items-center shadow-md">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Manual Attendance Entry
                    </button>
                </div>
            </div>
        </div>

        <!-- Filters & Search -->
        <div class="px-6 py-4 bg-gray-50/50 border-b border-gray-100">
            <div class="flex flex-col md:flex-row md:items-center space-y-3 md:space-y-0 md:space-x-4">
                <div class="flex-1 relative">
                    <input type="text" placeholder="Search employee name or ID..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent text-sm">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent bg-white">
                    <option value="">All Departments</option>
                    <option value="finance">Finance</option>
                    <option value="hr">Human Resources</option>
                    <option value="it">IT & Engineering</option>
                    <option value="ops">Operations</option>
                </select>
                <input type="date" value="{{ date('Y-m-d') }}" class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent bg-white">
            </div>
        </div>

        <!-- Data Table -->
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-widest">Employee</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-widest">Department</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-widest">Check In</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-widest">Check Out</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-widest">Work Duration</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-600 uppercase tracking-widest">Status</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-600 uppercase tracking-widest">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-9 h-9 rounded-full bg-[#940000] flex items-center justify-center text-white text-xs font-bold mr-3 shadow-sm">JD</div>
                                <div>
                                    <span class="text-sm font-bold text-gray-900 group-hover:text-[#940000] transition-colors">John Doe</span>
                                    <p class="text-[10px] text-gray-500 uppercase font-semibold">EMP-001</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-gray-600 font-medium">Finance</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-gray-900 font-bold">08:15 AM</span>
                            <p class="text-[10px] text-green-600 font-bold uppercase">On Time</p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-gray-900 font-bold">05:30 PM</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex flex-col">
                                <span class="text-sm font-bold text-gray-900">9h 15m</span>
                                <div class="w-16 bg-gray-200 h-1 rounded-full mt-1">
                                    <div class="bg-green-500 h-1 rounded-full" style="width: 100%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="px-3 py-1 text-[10px] font-bold rounded-full bg-green-100 text-green-800 uppercase tracking-tighter">
                                Present
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <button class="text-gray-400 hover:text-[#940000] transition-colors">
                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-9 h-9 rounded-full bg-blue-500 flex items-center justify-center text-white text-xs font-bold mr-3 shadow-sm">JS</div>
                                <div>
                                    <span class="text-sm font-bold text-gray-900 group-hover:text-[#940000] transition-colors">Jane Smith</span>
                                    <p class="text-[10px] text-gray-500 uppercase font-semibold">EMP-002</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-gray-600 font-medium">HR</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-yellow-600 font-bold">09:25 AM</span>
                            <p class="text-[10px] text-yellow-600 font-bold uppercase">Late</p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-gray-900 font-bold">05:45 PM</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex flex-col">
                                <span class="text-sm font-bold text-gray-900">8h 20m</span>
                                <div class="w-16 bg-gray-200 h-1 rounded-full mt-1">
                                    <div class="bg-blue-500 h-1 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="px-3 py-1 text-[10px] font-bold rounded-full bg-yellow-100 text-yellow-800 uppercase tracking-tighter">
                                Late
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <button class="text-gray-400 hover:text-[#940000] transition-colors">
                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-9 h-9 rounded-full bg-green-500 flex items-center justify-center text-white text-xs font-bold mr-3 shadow-sm">MB</div>
                                <div>
                                    <span class="text-sm font-bold text-gray-900 group-hover:text-[#940000] transition-colors">Mike Brown</span>
                                    <p class="text-[10px] text-gray-500 uppercase font-semibold">EMP-005</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-gray-600 font-medium">IT & Engineering</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-gray-400 font-bold">-</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-gray-400 font-bold">-</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-bold text-gray-400">-</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="px-3 py-1 text-[10px] font-bold rounded-full bg-blue-100 text-blue-800 uppercase tracking-tighter">
                                On Leave
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <button class="text-gray-400 hover:text-[#940000] transition-colors">
                                <svg class="w-5 h-5 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-100 bg-gray-50/30 flex items-center justify-between">
            <div class="text-xs text-gray-500 font-bold uppercase tracking-widest">
                Displaying 3 of 156 records
            </div>
            <div class="flex items-center space-x-2">
                <button class="px-3 py-1 border border-gray-300 rounded-lg text-xs font-bold text-gray-600 hover:bg-gray-50 disabled:opacity-50 transition-colors uppercase" disabled>Prev</button>
                <button class="px-3 py-1 bg-[#940000] text-white rounded-lg text-xs font-bold shadow-sm transition-transform active:scale-95">1</button>
                <button class="px-3 py-1 border border-gray-300 rounded-lg text-xs font-bold text-gray-600 hover:bg-gray-50 transition-colors uppercase">2</button>
                <button class="px-3 py-1 border border-gray-300 rounded-lg text-xs font-bold text-gray-600 hover:bg-gray-50 transition-colors uppercase">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection
