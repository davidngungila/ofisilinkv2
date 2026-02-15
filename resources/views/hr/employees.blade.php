@extends('layouts.app')

@section('title', $title . ' - OfisiLink')
@section('page-title', $title)

@section('content')
<div class="space-y-6">
    <!-- Breadcrumb -->
    <div class="flex items-center space-x-2 text-sm text-gray-600">
        <a href="{{ route('dashboard') }}" class="hover:text-[#940000]">Dashboard</a>
        <span>/</span>
        <a href="#" class="hover:text-[#940000]">Human Resources</a>
        <span>/</span>
        <span class="text-gray-900 font-medium">Employee Directory</span>
    </div>

    <!-- Summary Stats -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-black text-gray-400 uppercase tracking-widest mb-1">Total Workforce</p>
                    <p class="text-3xl font-black text-gray-900">156</p>
                    <p class="text-[10px] text-green-600 font-bold mt-1 uppercase">+12 This Month</p>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-red-50 flex items-center justify-center text-[#940000]">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-black text-gray-400 uppercase tracking-widest mb-1">Active Now</p>
                    <p class="text-3xl font-black text-blue-600">142</p>
                    <p class="text-[10px] text-blue-400 font-bold mt-1 uppercase">91% Attendance</p>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-600">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-black text-gray-400 uppercase tracking-widest mb-1">On Leave</p>
                    <p class="text-3xl font-black text-yellow-600">8</p>
                    <p class="text-[10px] text-yellow-500 font-bold mt-1 uppercase tracking-tighter">Authorized Absence</p>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-yellow-50 flex items-center justify-center text-yellow-600">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-black text-gray-400 uppercase tracking-widest mb-1">Upcoming B-Days</p>
                    <p class="text-3xl font-black text-purple-600">3</p>
                    <p class="text-[10px] text-purple-400 font-bold mt-1 uppercase">Next 7 Days</p>
                </div>
                <div class="w-12 h-12 rounded-2xl bg-purple-50 flex items-center justify-center text-purple-600">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c.533-1.295.797-2.61.797-3.931l-3.327-.001-3.328-.001-.001 3.328-.001 3.327 3.328-.001c1.321 0 2.636-.264 3.931-.796l-1.399-1.399-1.4-1.399.001-3.328.001-3.327-3.328-.001-3.327-.001-.001 3.328-.001 3.327 3.328-.001 1.321 0 2.636-.264 3.931-.796L21 15.546z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-8 border-b border-gray-100 flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0 bg-gray-50/30">
            <div>
                <h2 class="text-2xl font-black text-gray-900 tracking-tight uppercase">Employee Directory</h2>
                <p class="text-sm text-gray-500 mt-1">Manage complete employee lifecycle from onboarding to offboarding.</p>
            </div>
            <div class="flex items-center space-x-3">
                <button class="px-5 py-2.5 border-2 border-gray-200 rounded-xl text-sm font-black text-gray-700 hover:border-[#940000] hover:text-[#940000] transition-all flex items-center shadow-sm">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                    </svg>
                    Import Employees
                </button>
                <button class="px-5 py-2.5 bg-[#940000] text-white rounded-xl text-sm font-black shadow-lg hover:bg-[#7a0000] transition-all transform hover:-translate-y-1 active:translate-y-0 flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Add New Employee
                </button>
            </div>
        </div>

        <div class="px-8 py-5 border-b border-gray-100 bg-gray-50/50">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="lg:col-span-2 relative">
                    <input type="text" placeholder="Search by name, ID, department, or location..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#940000] focus:border-transparent text-sm">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <select class="px-4 py-2 border border-gray-300 rounded-xl text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                    <option value="">Department: All</option>
                    <option value="finance">Finance</option>
                    <option value="hr">HR</option>
                    <option value="it">Engineering</option>
                </select>
                <select class="px-4 py-2 border border-gray-300 rounded-xl text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                    <option value="">Status: All Employees</option>
                    <option value="active">Active</option>
                    <option value="on-leave">On Leave</option>
                    <option value="terminated">Terminated</option>
                </select>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-8 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-widest">Employee Name</th>
                        <th class="px-8 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-widest">Dept & Ref</th>
                        <th class="px-8 py-4 text-center text-xs font-bold text-gray-500 uppercase tracking-widest">Contact Info</th>
                        <th class="px-8 py-4 text-center text-xs font-bold text-gray-500 uppercase tracking-widest">Joining Date</th>
                        <th class="px-8 py-4 text-center text-xs font-bold text-gray-500 uppercase tracking-widest">Account Status</th>
                        <th class="px-8 py-4 text-right text-xs font-bold text-gray-500 uppercase tracking-widest">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white">
                    @php
                        $sampleEmployees = [
                            ['name' => 'John Doe', 'dept' => 'Finance', 'id' => 'EMP-001', 'email' => 'john.doe@ofisilink.com', 'initials' => 'JD', 'joined' => '15 Jan 2020'],
                            ['name' => 'Jane Smith', 'dept' => 'HR', 'id' => 'EMP-002', 'email' => 'jane.smith@ofisilink.com', 'initials' => 'JS', 'joined' => '10 Feb 2021'],
                            ['name' => 'David Wilson', 'dept' => 'Engineering', 'id' => 'EMP-003', 'email' => 'david.w@ofisilink.com', 'initials' => 'DW', 'joined' => '05 Mar 2022'],
                        ];
                    @endphp
                    @foreach($sampleEmployees as $emp)
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="px-8 py-5 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-[#940000] to-[#7a0000] flex-shrink-0 flex items-center justify-center text-white text-xs font-black mr-4 shadow-sm group-hover:scale-110 transition-transform">
                                    {{ $emp['initials'] }}
                                </div>
                                <div>
                                    <div class="text-sm font-black text-gray-900 group-hover:text-[#940000] transition-colors">{{ $emp['name'] }}</div>
                                    <div class="text-[10px] text-gray-400 font-bold uppercase tracking-tighter">Senior Professional</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap">
                            <div class="text-sm font-bold text-gray-700 tracking-tight">{{ $emp['dept'] }}</div>
                            <div class="text-[10px] text-gray-400 font-bold uppercase">{{ $emp['id'] }}</div>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-center">
                            <div class="text-xs font-bold text-gray-600">{{ $emp['email'] }}</div>
                            <div class="text-[10px] text-gray-400 font-bold">+255 754 000 000</div>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-center">
                            <div class="text-sm font-black text-gray-900 uppercase">{{ $emp['joined'] }}</div>
                            <div class="text-[10px] text-gray-400 font-bold uppercase italic">Full Cycle</div>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-center">
                            <span class="px-3 py-1 text-[10px] font-black rounded-full bg-green-100 text-green-800 uppercase tracking-widest border border-green-200">ACTIVE</span>
                        </td>
                        <td class="px-8 py-5 whitespace-nowrap text-right">
                             <div class="flex items-center justify-end space-x-2">
                                <a href="#" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="View Profile">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </a>
                                <button class="p-2 text-gray-400 hover:text-gray-900 rounded-lg transition-colors" title="Settings">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="px-8 py-5 border-t border-gray-100 bg-gray-50/20 flex items-center justify-between">
            <div class="text-[10px] text-gray-400 font-black uppercase tracking-[0.2em]">
                Workforce Management System v4.8 | Data Privacy Compliant
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
