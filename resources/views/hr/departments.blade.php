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
                    <p class="text-sm font-medium text-gray-500 mb-1">Total Departments</p>
                    <p class="text-3xl font-bold text-gray-900">8</p>
                    <p class="text-xs text-gray-400 mt-1">Core business units</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#940000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Total Positions</p>
                    <p class="text-3xl font-bold text-blue-600">32</p>
                    <p class="text-xs text-blue-400 mt-1">Defined job roles</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Total Employees</p>
                    <p class="text-3xl font-bold text-green-600">156</p>
                    <p class="text-xs text-green-600 mt-1 flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        +12 this month
                    </p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Vacant Positions</p>
                    <p class="text-3xl font-bold text-yellow-600">5</p>
                    <p class="text-xs text-yellow-500 mt-1">Open for hiring</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-yellow-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <!-- Header with Actions -->
        <div class="p-8 border-b border-gray-100 flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0 bg-gray-50/30">
            <div>
                <h2 class="text-2xl font-black text-gray-900 tracking-tight uppercase">Departments Registry</h2>
                <p class="text-sm text-gray-500 mt-1">Define and oversee the organizational hierarchy and job roles.</p>
            </div>
            <div class="flex items-center space-x-3">
                <button class="px-5 py-2.5 border-2 border-gray-200 rounded-xl text-sm font-black text-gray-700 hover:border-[#940000] hover:text-[#940000] transition-all flex items-center shadow-sm">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Add Business Unit
                </button>
                <button class="px-5 py-2.5 bg-[#940000] text-white rounded-xl text-sm font-black shadow-lg hover:bg-[#7a0000] transition-all transform hover:-translate-y-1 active:translate-y-0 flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    New Position
                </button>
            </div>
        </div>

        <!-- Departments Grid -->
        <div class="p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Department Card 1 -->
                <div class="group bg-white rounded-2xl border border-gray-100 p-6 hover:shadow-xl hover:border-[#940000]/20 transition-all relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-[#940000]/5 rounded-full -mr-16 -mt-16 blur-2xl group-hover:bg-[#940000]/10 transition-colors"></div>
                    
                    <div class="flex items-center justify-between mb-6 relative z-10">
                        <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-[#940000]">
                             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-black text-gray-900 tracking-tight">Finance</h3>
                        <span class="px-2.5 py-1 bg-green-100 text-green-800 text-[10px] font-black uppercase tracking-widest rounded-lg">Operational</span>
                    </div>

                    <div class="space-y-4 mb-6 relative z-10">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Employees</span>
                            <span class="text-sm font-black text-gray-900">24 Members</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Positions</span>
                            <span class="text-sm font-black text-gray-900">8 Roles</span>
                        </div>
                        <div class="pt-4 border-t border-gray-50">
                            <span class="text-[10px] font-black text-[#940000] uppercase tracking-widest block mb-1">Unit Head</span>
                            <span class="text-sm font-bold text-gray-800">Sarah Johnson</span>
                        </div>
                    </div>
                    
                    <button class="w-full py-3 bg-gray-50 text-gray-600 rounded-xl text-xs font-black uppercase tracking-widest hover:bg-[#940000] hover:text-white transition-all transform active:scale-95 shadow-sm">
                        View Unit Details
                    </button>
                </div>

                <!-- Department Card 2 -->
                <div class="group bg-white rounded-2xl border border-gray-100 p-6 hover:shadow-xl hover:border-blue-600/20 transition-all relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-600/5 rounded-full -mr-16 -mt-16 blur-2xl group-hover:bg-blue-600/10 transition-colors"></div>
                    
                    <div class="flex items-center justify-between mb-6 relative z-10">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600">
                             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-black text-gray-900 tracking-tight">HR</h3>
                        <span class="px-2.5 py-1 bg-blue-100 text-blue-800 text-[10px] font-black uppercase tracking-widest rounded-lg">Corporate</span>
                    </div>

                    <div class="space-y-4 mb-6 relative z-10">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Employees</span>
                            <span class="text-sm font-black text-gray-900">18 Members</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Positions</span>
                            <span class="text-sm font-black text-gray-900">6 Roles</span>
                        </div>
                        <div class="pt-4 border-t border-gray-50">
                            <span class="text-[10px] font-black text-blue-600 uppercase tracking-widest block mb-1">Unit Head</span>
                            <span class="text-sm font-bold text-gray-800">Michael Brown</span>
                        </div>
                    </div>
                    
                    <button class="w-full py-3 bg-gray-50 text-gray-600 rounded-xl text-xs font-black uppercase tracking-widest hover:bg-blue-600 hover:text-white transition-all transform active:scale-95 shadow-sm">
                        View Unit Details
                    </button>
                </div>

                <!-- Department Card 3 -->
                <div class="group bg-white rounded-2xl border border-gray-100 p-6 hover:shadow-xl hover:border-green-600/20 transition-all relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-green-600/5 rounded-full -mr-16 -mt-16 blur-2xl group-hover:bg-green-600/10 transition-colors"></div>
                    
                    <div class="flex items-center justify-between mb-6 relative z-10">
                        <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center text-green-600">
                             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-black text-gray-900 tracking-tight">Engineering</h3>
                        <span class="px-2.5 py-1 bg-green-100 text-green-800 text-[10px] font-black uppercase tracking-widest rounded-lg">Technical</span>
                    </div>

                    <div class="space-y-4 mb-6 relative z-10">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Employees</span>
                            <span class="text-sm font-black text-gray-900">32 Members</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Positions</span>
                            <span class="text-sm font-black text-gray-900">12 Roles</span>
                        </div>
                        <div class="pt-4 border-t border-gray-50">
                            <span class="text-[10px] font-black text-green-600 uppercase tracking-widest block mb-1">Unit Head</span>
                            <span class="text-sm font-bold text-gray-800">David Wilson</span>
                        </div>
                    </div>
                    
                    <button class="w-full py-3 bg-gray-50 text-gray-600 rounded-xl text-xs font-black uppercase tracking-widest hover:bg-green-600 hover:text-white transition-all transform active:scale-95 shadow-sm">
                        View Unit Details
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
