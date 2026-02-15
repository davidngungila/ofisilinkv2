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
                    <p class="text-3xl font-bold text-gray-900">32</p>
                    <p class="text-xs text-gray-400 mt-1">This rolling month</p>
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
                    <p class="text-3xl font-bold text-yellow-600">8</p>
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
                    <p class="text-sm font-medium text-gray-500 mb-1">Approved Cases</p>
                    <p class="text-3xl font-bold text-green-600">22</p>
                    <p class="text-xs text-green-600 mt-1">Successfully processed</p>
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
                    <p class="text-sm font-medium text-gray-500 mb-1">Denied Requests</p>
                    <p class="text-3xl font-bold text-red-600">2</p>
                    <p class="text-xs text-red-400 mt-1">Non-compliant reasons</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Table Section -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-8 border-b border-gray-100 flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0 bg-gray-50/30">
            <div>
                <h2 class="text-2xl font-black text-gray-900 tracking-tight uppercase">Short-Term Permissions</h2>
                <p class="text-sm text-gray-500 mt-1">Log and manage employee time-off requests for hours or single days.</p>
            </div>
            <div class="flex items-center space-x-3">
                <button class="px-5 py-2.5 border-2 border-gray-200 rounded-xl text-sm font-black text-gray-700 hover:border-[#940000] hover:text-[#940000] transition-all flex items-center shadow-sm">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Export Log
                </button>
                <button class="px-5 py-2.5 bg-[#940000] text-white rounded-xl text-sm font-black shadow-lg hover:bg-[#7a0000] transition-all transform hover:-translate-y-1 active:translate-y-0 flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    New Request
                </button>
            </div>
        </div>

        <div class="px-8 py-4 bg-gray-50/50 border-b border-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="lg:col-span-2 relative">
                    <input type="text" placeholder="Search employee name or permission ID..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#940000] focus:border-transparent text-sm">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <select class="px-4 py-2 border border-gray-300 rounded-xl text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                    <option value="">Status: All</option>
                    <option value="pending">Pending</option>
                    <option value="approved">Approved</option>
                    <option value="rejected">Rejected</option>
                </select>
                <input type="date" class="px-4 py-2 border border-gray-300 rounded-xl text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent text-gray-500">
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-8 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-widest">Employee</th>
                        <th class="px-8 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-widest">Schedule</th>
                        <th class="px-8 py-4 text-center text-xs font-bold text-gray-500 uppercase tracking-widest">Intensity</th>
                        <th class="px-8 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-widest">Justification</th>
                        <th class="px-8 py-4 text-center text-xs font-bold text-gray-500 uppercase tracking-widest">Status</th>
                        <th class="px-8 py-4 text-right text-xs font-bold text-gray-500 uppercase tracking-widest">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white">
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="px-8 py-5 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-[#940000] flex-shrink-0 flex items-center justify-center text-white text-sm font-black mr-4 shadow-sm">JD</div>
                                <div>
                                    <div class="text-sm font-black text-gray-900 group-hover:text-[#940000] transition-colors">John Doe</div>
                                    <div class="text-[10px] text-gray-400 font-bold uppercase tracking-tighter">ID: PER-2025-001</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap">
                            <div class="text-sm font-bold text-gray-900 uppercase">Feb 20, 2025</div>
                            <div class="text-[10px] text-gray-500 font-bold">14:00 - 16:00 (2h)</div>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-center">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-[10px] font-black bg-orange-50 text-orange-700 uppercase border border-orange-100">Medium</span>
                        </td>
                        <td class="px-8 py-5">
                            <p class="text-sm text-gray-600 line-clamp-1 max-w-xs italic group-hover:text-gray-900 transition-colors">"Medical appointment for quarterly checkup."</p>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-center">
                            <span class="px-3 py-1 text-[10px] font-black rounded-full bg-yellow-100 text-yellow-800 uppercase tracking-widest border border-yellow-200">Pending Review</span>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-right">
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
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="px-8 py-5 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-blue-500 flex-shrink-0 flex items-center justify-center text-white text-sm font-black mr-4 shadow-sm">JS</div>
                                <div>
                                    <div class="text-sm font-black text-gray-900 group-hover:text-[#940000] transition-colors">Jane Smith</div>
                                    <div class="text-[10px] text-gray-400 font-bold uppercase tracking-tighter">ID: PER-2025-002</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap">
                            <div class="text-sm font-bold text-gray-900 uppercase">Feb 18, 2025</div>
                            <div class="text-[10px] text-gray-500 font-bold">10:00 - 12:00 (2h)</div>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-center">
                            <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-[10px] font-black bg-blue-50 text-blue-700 uppercase border border-blue-100">Routine</span>
                        </td>
                        <td class="px-8 py-5">
                            <p class="text-sm text-gray-600 line-clamp-1 max-w-xs italic group-hover:text-gray-900 transition-colors">"Brief personal matter at the bank."</p>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-center">
                            <span class="px-3 py-1 text-[10px] font-black rounded-full bg-green-100 text-green-800 uppercase tracking-widest border border-green-200">Approved</span>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-right">
                            <button class="px-3 py-1 border border-gray-200 rounded text-[10px] font-black uppercase text-gray-400 hover:border-[#940000] hover:text-[#940000] transition-colors">View Details</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="px-8 py-5 border-t border-gray-100 bg-gray-50/20 flex items-center justify-between">
            <div class="text-[10px] text-gray-400 font-black uppercase tracking-[0.2em]">
                System Log v2.4 | Automated Policy Compliance Active
            </div>
            <div class="flex items-center space-x-1">
                <button class="px-4 py-2 bg-[#940000] text-white rounded-xl text-xs font-black shadow-sm transform active:scale-95 transition-transform">1</button>
                <button class="px-4 py-2 border border-gray-200 rounded-xl text-xs font-bold text-gray-700 hover:bg-gray-100 transition-colors">2</button>
                <button class="p-2 border border-gray-200 rounded-xl text-gray-700 hover:bg-gray-100 shadow-sm transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
