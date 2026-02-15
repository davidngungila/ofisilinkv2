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
                    <p class="text-sm font-medium text-gray-500 mb-1">Active Positions</p>
                    <p class="text-3xl font-bold text-gray-900">12</p>
                    <p class="text-xs text-[#940000] mt-1 font-bold">4 Urgent</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#940000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Total Applications</p>
                    <p class="text-3xl font-bold text-blue-600">248</p>
                    <p class="text-xs text-blue-400 mt-1 flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        +42 this week
                    </p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Interviews Scheduled</p>
                    <p class="text-3xl font-bold text-yellow-600">18</p>
                    <p class="text-xs text-yellow-500 mt-1">Next 7 days</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-yellow-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Offers Extended</p>
                    <p class="text-3xl font-bold text-green-600">8</p>
                    <p class="text-xs text-green-600 mt-1">Pending acceptance</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Recruitment Table Section -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-8 border-b border-gray-100 flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0 bg-gray-50/30">
            <div>
                <h2 class="text-2xl font-black text-gray-900 tracking-tight uppercase">Talent Acquisition</h2>
                <p class="text-sm text-gray-500 mt-1">Oversee job vacancies, application pipelines, and hiring milestones.</p>
            </div>
            <div class="flex items-center space-x-3">
                <button class="px-5 py-2.5 border-2 border-gray-200 rounded-xl text-sm font-black text-gray-700 hover:border-[#940000] hover:text-[#940000] transition-all flex items-center shadow-sm">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                    </svg>
                    Advanced Filters
                </button>
                <button class="px-5 py-2.5 bg-[#940000] text-white rounded-xl text-sm font-black shadow-lg hover:bg-[#7a0000] transition-all transform hover:-translate-y-1 active:translate-y-0 flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Post New Position
                </button>
            </div>
        </div>

        <div class="px-8 py-4 bg-gray-50/50 border-b border-gray-100">
            <div class="flex flex-col md:flex-row md:items-center space-y-3 md:space-y-0 md:space-x-4">
                <div class="flex-1 relative">
                    <input type="text" placeholder="Search by position title, reference or department..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#940000] focus:border-transparent text-sm">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <select class="px-4 py-2 border border-gray-300 rounded-xl text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                    <option value="">Status: All</option>
                    <option value="open">Open</option>
                    <option value="closed">Closed</option>
                    <option value="hold">On Hold</option>
                </select>
                <select class="px-4 py-2 border border-gray-300 rounded-xl text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                    <option value="">Dept: All</option>
                    <option value="finance">Finance</option>
                    <option value="hr">HR</option>
                    <option value="it">IT</option>
                </select>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-8 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-widest">Position & Type</th>
                        <th class="px-8 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-widest">Department</th>
                        <th class="px-8 py-4 text-center text-xs font-bold text-gray-500 uppercase tracking-widest">Applicants</th>
                        <th class="px-8 py-4 text-center text-xs font-bold text-gray-500 uppercase tracking-widest">Pipeline</th>
                        <th class="px-8 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-widest">Cycle Dates</th>
                        <th class="px-8 py-4 text-center text-xs font-bold text-gray-500 uppercase tracking-widest">Status</th>
                        <th class="px-8 py-4 text-right text-xs font-bold text-gray-500 uppercase tracking-widest">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white">
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="px-8 py-5 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-xl bg-red-50 flex-shrink-0 flex items-center justify-center text-[#940000] font-black shadow-sm mr-4">SA</div>
                                <div>
                                    <div class="text-sm font-black text-gray-900 group-hover:text-[#940000] transition-colors">Senior Accountant</div>
                                    <div class="text-[10px] text-gray-400 font-bold uppercase">Ref: REG-2025-088</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap">
                            <span class="text-sm font-bold text-gray-700">Finance</span>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-center">
                            <div class="text-sm font-black text-gray-900">24</div>
                            <div class="text-[10px] text-green-600 font-bold uppercase tracking-tighter">+5 New</div>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-center">
                            <div class="flex items-center justify-center space-x-1">
                                <span class="w-2 h-2 rounded-full bg-blue-500" title="Shortlisted: 6"></span>
                                <span class="w-2 h-2 rounded-full bg-yellow-400" title="Interviews: 4"></span>
                                <span class="w-2 h-2 rounded-full bg-green-500" title="Offers: 2"></span>
                            </div>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap">
                            <div class="text-xs font-bold text-gray-600 uppercase">Start: Feb 1</div>
                            <div class="text-[10px] text-red-500 font-bold uppercase">End: Mar 1</div>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-center">
                            <span class="px-3 py-1 text-[10px] font-black rounded-full bg-green-100 text-green-800 uppercase tracking-widest border border-green-200">Active / Open</span>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-right">
                            <div class="flex items-center justify-end space-x-2">
                                <button class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="Manage Pipeline">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>
                                </button>
                                <button class="p-2 text-gray-400 hover:text-gray-900 rounded-lg transition-colors" title="View Details">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="px-8 py-5 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-xl bg-blue-50 flex-shrink-0 flex items-center justify-center text-blue-600 font-black shadow-sm mr-4">HM</div>
                                <div>
                                    <div class="text-sm font-black text-gray-900 group-hover:text-[#940000] transition-colors">HR Manager</div>
                                    <div class="text-[10px] text-gray-400 font-bold uppercase">Ref: REG-2025-072</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap">
                            <span class="text-sm font-bold text-gray-700">Human Resources</span>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-center">
                            <div class="text-sm font-black text-gray-900">18</div>
                            <div class="text-[10px] text-gray-400 font-bold uppercase tracking-tighter">On Review</div>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-center">
                            <div class="flex items-center justify-center space-x-1">
                                <span class="w-2 h-2 rounded-full bg-blue-500" title="Shortlisted: 4"></span>
                                <span class="w-2 h-2 rounded-full bg-yellow-400" title="Interviews: 2"></span>
                            </div>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap">
                            <div class="text-xs font-bold text-gray-600 uppercase">Start: Jan 25</div>
                            <div class="text-[10px] text-red-500 font-bold uppercase">End: Feb 25</div>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-center">
                            <span class="px-3 py-1 text-[10px] font-black rounded-full bg-green-100 text-green-800 uppercase tracking-widest border border-green-200">Active / Open</span>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-right">
                            <button class="px-3 py-1 border border-gray-200 rounded text-[10px] font-black uppercase text-gray-400 hover:border-[#940000] hover:text-[#940000] transition-colors">Manage Role</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="px-8 py-5 border-t border-gray-100 bg-gray-50/20 flex items-center justify-between">
            <div class="text-[10px] text-gray-400 font-black uppercase tracking-[0.2em]">
                Recruitment Engine v4.0 | Integrated with Internal Talent Pool
            </div>
            <div class="flex items-center space-x-1">
                <button class="px-4 py-2 bg-[#940000] text-white rounded-xl text-xs font-black shadow-sm transform active:scale-95 transition-transform">1</button>
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
