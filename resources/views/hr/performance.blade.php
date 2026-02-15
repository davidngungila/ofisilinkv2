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
                    <p class="text-sm font-medium text-gray-500 mb-1">Company Avg Score</p>
                    <div class="flex items-baseline space-x-2">
                        <p class="text-3xl font-bold text-gray-900">4.2</p>
                        <p class="text-sm font-medium text-gray-400">/ 5.0</p>
                    </div>
                    <p class="text-xs text-green-600 mt-1 flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        +0.3 from last year
                    </p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#940000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Active Assessments</p>
                    <p class="text-3xl font-bold text-gray-900">24</p>
                    <p class="text-xs text-yellow-600 mt-1">8 due this week</p>
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
                    <p class="text-sm font-medium text-gray-500 mb-1">Completion Rate</p>
                    <p class="text-3xl font-bold text-gray-900">86%</p>
                    <div class="w-24 bg-gray-100 h-1 rounded-full mt-2">
                        <div class="bg-green-500 h-1 rounded-full" style="width: 86%"></div>
                    </div>
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
                    <p class="text-sm font-medium text-gray-500 mb-1">Top Performers</p>
                    <p class="text-3xl font-bold text-gray-900">12</p>
                    <p class="text-xs text-blue-600 mt-1">Score above 4.7</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics & Insights -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-100">
            <div class="p-6 border-b border-gray-100 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-bold text-gray-800">Score Distribution</h3>
                    <p class="text-sm text-gray-500">Breakdown of performance levels company-wide</p>
                </div>
                <select class="text-sm border-gray-300 rounded-lg focus:ring-[#940000] focus:border-[#940000]">
                    <option>All Departments</option>
                    <option>Finance</option>
                    <option>IT & Engineering</option>
                </select>
            </div>
            <div class="p-6">
                <div class="flex items-end justify-between h-48 space-x-2">
                    <div class="flex-1 flex flex-col items-center group">
                        <div class="w-full bg-red-100 rounded-t-lg h-8 transition-all group-hover:bg-red-200"></div>
                        <span class="text-[10px] font-bold text-gray-400 mt-2 uppercase">Poor (0-1)</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center group">
                        <div class="w-full bg-orange-100 rounded-t-lg h-16 transition-all group-hover:bg-orange-200"></div>
                        <span class="text-[10px] font-bold text-gray-400 mt-2 uppercase">Fair (1-2)</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center group">
                        <div class="w-full bg-yellow-100 rounded-t-lg h-24 transition-all group-hover:bg-yellow-200"></div>
                        <span class="text-[10px] font-bold text-gray-400 mt-2 uppercase">Average (2-3)</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center group">
                        <div class="w-full bg-[#940000] rounded-t-lg h-40 transition-all group-hover:opacity-90"></div>
                        <span class="text-[10px] font-bold text-gray-900 mt-2 uppercase">Good (3-4)</span>
                    </div>
                    <div class="flex-1 flex flex-col items-center group">
                        <div class="w-full bg-green-500 rounded-t-lg h-32 transition-all group-hover:opacity-90"></div>
                        <span class="text-[10px] font-bold text-gray-400 mt-2 uppercase">Excellent (4-5)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100">
            <div class="p-6 border-b border-gray-100">
                <h3 class="text-lg font-bold text-gray-800">Critical Skills Gap</h3>
                <p class="text-sm text-gray-500">Areas requiring attention</p>
            </div>
            <div class="p-6 space-y-4">
                <div>
                    <div class="flex items-center justify-between mb-1">
                        <span class="text-sm font-medium text-gray-700">Project Management</span>
                        <span class="text-sm font-bold text-red-600">32% Gap</span>
                    </div>
                    <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                        <div class="bg-red-500 h-full" style="width: 32%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between mb-1">
                        <span class="text-sm font-medium text-gray-700">Technical Leadership</span>
                        <span class="text-sm font-bold text-orange-600">18% Gap</span>
                    </div>
                    <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                        <div class="bg-orange-500 h-full" style="width: 18%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-between mb-1">
                        <span class="text-sm font-medium text-gray-700">Strategic Planning</span>
                        <span class="text-sm font-bold text-yellow-600">12% Gap</span>
                    </div>
                    <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                        <div class="bg-yellow-500 h-full" style="width: 12%"></div>
                    </div>
                </div>
                <button class="w-full mt-4 py-2 bg-[#940000] text-white rounded-lg text-sm font-bold hover:bg-[#7a0000] transition-colors">
                    Plan Training Program
                </button>
            </div>
        </div>
    </div>

    <!-- Main Table Section -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-6 border-b border-gray-100 flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
            <div>
                <h2 class="text-xl font-bold text-gray-800 uppercase tracking-tight">Assessment Registry</h2>
                <p class="text-sm text-gray-500 mt-1">Comprehensive list of all performance cycles</p>
            </div>
            <div class="flex items-center space-x-3">
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-50 transition-all flex items-center shadow-sm">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Export Batch
                </button>
                <button class="px-4 py-2 bg-[#940000] text-white rounded-lg text-sm font-black shadow-md hover:bg-[#7a0000] transition-all transform hover:-translate-y-0.5 active:translate-y-0 flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Init New Cycle
                </button>
            </div>
        </div>

        <div class="px-6 py-4 bg-gray-50/50 border-b border-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-4">
                <div class="lg:col-span-2 relative">
                    <input type="text" placeholder="Search employee name, department or reviewer..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent text-sm">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                    <option value="">Cycle: All</option>
                    <option value="q1">Q1 2025</option>
                    <option value="annual">Annual 2024</option>
                </select>
                <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                    <option value="">Department: All</option>
                    <option value="finance">Finance</option>
                    <option value="it">IT & Engineering</option>
                </select>
                <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                    <option value="">Status: All</option>
                    <option value="completed">Completed</option>
                    <option value="pending">Pending Review</option>
                </select>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-widest">Employee Info</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-widest">Cycle</th>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-600 uppercase tracking-widest">Reviewer</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-600 uppercase tracking-widest">Total Score</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-600 uppercase tracking-widest">Goals</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-600 uppercase tracking-widest">Status</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-600 uppercase tracking-widest">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white">
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-[#940000] flex-shrink-0 flex items-center justify-center text-white text-sm font-bold mr-4 shadow-sm">JD</div>
                                <div>
                                    <div class="text-sm font-bold text-gray-900 group-hover:text-[#940000] transition-colors">John Doe</div>
                                    <div class="text-xs text-gray-500 font-medium">Finance | Senior Acc.</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-bold text-gray-700">Q1 2025</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-6 h-6 rounded-full bg-gray-200 mr-2 flex items-center justify-center text-[10px] font-bold">SJ</div>
                                <span class="text-sm text-gray-600 font-medium">Sarah Johnson</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="inline-flex items-center px-3 py-1 rounded-lg bg-green-50">
                                <span class="text-sm font-black text-green-700 mr-1">4.5</span>
                                <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="text-sm font-bold text-gray-900 italic">8/10 Met</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="px-3 py-1 text-[10px] font-black rounded-full bg-green-100 text-green-800 uppercase tracking-widest border border-green-200">Completed</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <button class="p-2 text-gray-400 hover:text-[#940000] transition-colors tooltip" title="View Full Report">
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
                                <div class="w-10 h-10 rounded-full bg-blue-500 flex-shrink-0 flex items-center justify-center text-white text-sm font-bold mr-4 shadow-sm">JS</div>
                                <div>
                                    <div class="text-sm font-bold text-gray-900 group-hover:text-[#940000] transition-colors">Jane Smith</div>
                                    <div class="text-xs text-gray-500 font-medium">Human Resources | HR Head</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-bold text-gray-700">Q1 2025</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-6 h-6 rounded-full bg-gray-200 mr-2 flex items-center justify-center text-[10px] font-bold">MB</div>
                                <span class="text-sm text-gray-600 font-medium">Michael Brown</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-gray-400 font-bold italic text-sm">Awaiting Score</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="text-sm font-bold text-gray-900 italic">4/10 Met</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="px-3 py-1 text-[10px] font-black rounded-full bg-yellow-100 text-yellow-800 uppercase tracking-widest border border-yellow-200">In Review</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <button class="px-4 py-1.5 bg-[#940000] text-white text-[10px] font-black rounded uppercase hover:bg-[#7a0000] transition-all shadow-sm">Process</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="px-6 py-4 border-t border-gray-100 bg-gray-50/30 flex items-center justify-between">
            <div class="text-[10px] text-gray-400 font-black uppercase tracking-widest">
                Aggregated performance data for 156 employees
            </div>
            <div class="flex items-center space-x-1">
                <button class="p-2 border border-gray-200 rounded-lg text-gray-400 disabled:opacity-50" disabled>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
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
