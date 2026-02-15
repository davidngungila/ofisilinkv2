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
                    <p class="text-sm font-medium text-gray-500 mb-1">Total Requests</p>
                    <p class="text-3xl font-bold text-gray-900">48</p>
                    <p class="text-xs text-gray-400 mt-1">This calendar year</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#940000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Pending Approval</p>
                    <p class="text-3xl font-bold text-yellow-600">12</p>
                    <p class="text-xs text-yellow-500 mt-1 flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Needs attention
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
                    <p class="text-sm font-medium text-gray-500 mb-1">On Leave Today</p>
                    <p class="text-3xl font-bold text-blue-600">6</p>
                    <p class="text-xs text-blue-400 mt-1">Across all units</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Avg Duration</p>
                    <p class="text-3xl font-bold text-gray-900">4.2</p>
                    <p class="text-xs text-green-600 mt-1">Days per request</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-100">
            <div class="p-6 border-b border-gray-100 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-bold text-gray-800">Leave Type Distribution</h3>
                    <p class="text-sm text-gray-500">Most common reasons for time off</p>
                </div>
                <button class="text-[#940000] text-sm font-bold hover:underline">Full Report</button>
            </div>
            <div class="p-6">
                <div class="space-y-5">
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-bold text-gray-700">Annual Leave</span>
                            <span class="text-sm font-black text-gray-900">186 Days (62%)</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-[#940000] h-full rounded-full transition-all duration-1000" style="width: 62%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-bold text-gray-700">Sick Leave</span>
                            <span class="text-sm font-black text-gray-900">42 Days (14%)</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-orange-400 h-full rounded-full transition-all duration-1000" style="width: 14%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-bold text-gray-700">Compassionate Leave</span>
                            <span class="text-sm font-black text-gray-900">28 Days (9%)</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-blue-400 h-full rounded-full transition-all duration-1000" style="width: 9%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-bold text-gray-700">Maternity/Paternity</span>
                            <span class="text-sm font-black text-gray-900">45 Days (15%)</span>
                        </div>
                        <div class="w-full bg-gray-100 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-purple-400 h-full rounded-full transition-all duration-1000" style="width: 15%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 flex flex-col">
            <div class="p-6 border-b border-gray-100 bg-gray-50/50">
                <h3 class="text-lg font-bold text-gray-800 tracking-tight">Active Policy</h3>
                <p class="text-xs text-gray-500 mt-1 uppercase font-bold tracking-widest">Employee Handbook 2025</p>
            </div>
            <div class="p-6 flex-1 flex flex-col justify-center">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-red-50 text-[#940000] rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-sm">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h4 class="text-sm font-black text-gray-900 uppercase">Carry Forward Limit</h4>
                    <p class="text-2xl font-black text-[#940000] mt-1">5 Days</p>
                    <p class="text-xs text-gray-500 mt-2 leading-relaxed">Employees can carry forward up to 5 days of unused annual leave to the next calendar year.</p>
                </div>
                <button class="w-full py-2.5 border-2 border-dashed border-gray-200 text-gray-500 rounded-xl text-xs font-black uppercase hover:border-[#940000] hover:text-[#940000] transition-all">
                    View Complete Terms
                </button>
            </div>
        </div>
    </div>

    <!-- Main Table Section -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-6 border-b border-gray-100 flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
            <div>
                <h2 class="text-xl font-bold text-gray-800 tracking-tight uppercase">Leave Register</h2>
                <div class="flex items-center mt-1">
                    <span class="w-2 h-2 rounded-full bg-green-500 mr-2 animate-pulse"></span>
                    <p class="text-sm text-gray-500">Live request tracking enabled</p>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-bold text-gray-700 hover:bg-gray-50 transition-all flex items-center shadow-sm">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Download Summary
                </button>
                <button class="px-4 py-2 bg-[#940000] text-white rounded-lg text-sm font-black shadow-md hover:bg-[#7a0000] transition-all transform hover:-translate-y-0.5 active:translate-y-0 flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    New Leave Request
                </button>
            </div>
        </div>

        <div class="px-6 py-4 bg-gray-50/50 border-b border-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="lg:col-span-2 relative">
                    <input type="text" placeholder="Search employee name, department or leave ID..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent text-sm">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                    <option value="">Type: All</option>
                    <option value="annual">Annual Leave</option>
                    <option value="sick">Sick Leave</option>
                </select>
                <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                    <option value="">Status: All</option>
                    <option value="pending">Pending</option>
                    <option value="approved">Approved</option>
                    <option value="rejected">Rejected</option>
                </select>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-widest">Employee</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-widest">Leave Details</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-500 uppercase tracking-widest">Duration</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-500 uppercase tracking-widest">Current Balance</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-500 uppercase tracking-widest">Status</th>
                        <th class="px-6 py-4 text-right text-xs font-bold text-gray-500 uppercase tracking-widest">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white">
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-[#940000] flex-shrink-0 flex items-center justify-center text-white text-sm font-bold mr-4 shadow-sm">JD</div>
                                <div>
                                    <div class="text-sm font-black text-gray-900 group-hover:text-[#940000] transition-colors">John Doe</div>
                                    <div class="text-[10px] text-gray-500 font-bold uppercase">ID: LV-2025-001</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-bold text-gray-900">Annual Leave</div>
                            <div class="text-xs text-gray-500">Mar 1, 2025 - Mar 5, 2025</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-black bg-blue-100 text-blue-800 uppercase tracking-tighter">5 Full Days</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="text-sm font-black text-gray-900">18 Days</div>
                            <div class="text-[10px] text-gray-400 font-bold uppercase italic">Remaining</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="px-3 py-1 text-[10px] font-black rounded-full bg-yellow-100 text-yellow-800 uppercase tracking-widest border border-yellow-200">Pending Review</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <div class="flex items-center justify-end space-x-2">
                                <button class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="Quick Approve">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </button>
                                <button class="p-2 text-[#940000] hover:bg-red-50 rounded-lg transition-colors" title="Reject">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                                <button class="p-2 text-gray-400 hover:text-gray-900 transition-colors" title="View Documentation">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-blue-500 flex-shrink-0 flex items-center justify-center text-white text-sm font-bold mr-4 shadow-sm">JS</div>
                                <div>
                                    <div class="text-sm font-black text-gray-900 group-hover:text-[#940000] transition-colors">Jane Smith</div>
                                    <div class="text-[10px] text-gray-500 font-bold uppercase">ID: LV-2025-002</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-bold text-gray-900">Sick Leave</div>
                            <div class="text-xs text-gray-500">Feb 20, 2025 - Feb 22, 2025</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-black bg-orange-100 text-orange-800 uppercase tracking-tighter">3 Full Days</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="text-sm font-black text-gray-900">7 Days</div>
                            <div class="text-[10px] text-gray-400 font-bold uppercase italic">Remaining</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="px-3 py-1 text-[10px] font-black rounded-full bg-green-100 text-green-800 uppercase tracking-widest border border-green-200">Approved</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right">
                            <button class="px-3 py-1 border border-gray-200 rounded text-[10px] font-black uppercase text-gray-500 hover:border-[#940000] hover:text-[#940000] transition-colors">Print Voucher</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="px-6 py-4 border-t border-gray-100 bg-gray-50/30 flex items-center justify-between">
            <div class="text-[10px] text-gray-400 font-black uppercase tracking-widest">
                Records compliant with Tanzania Labor Laws section 34
            </div>
            <div class="flex items-center space-x-1">
                <button class="px-3 py-1.5 bg-[#940000] text-white rounded-lg text-xs font-black shadow-sm transform active:scale-95 transition-transform">1</button>
                <button class="px-3 py-1.5 border border-gray-200 rounded-lg text-xs font-bold text-gray-700 hover:bg-gray-50 transition-colors">2</button>
                <button class="p-2 border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50 shadow-sm transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
