@extends('layouts.app')

@section('title', $title . ' - Office Management')
@section('page-title', $title)

@section('content')
<div class="space-y-6">
    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Total Departments</p>
                    <p class="text-2xl font-bold text-[#940000]">8</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-red-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#940000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Total Employees</p>
                    <p class="text-2xl font-bold text-green-600">156</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Total Positions</p>
                    <p class="text-2xl font-bold text-blue-600">32</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Organizational Units</p>
                    <p class="text-2xl font-bold text-yellow-600">12</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-yellow-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <!-- Header with Actions -->
        <div class="p-6 border-b border-gray-200">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
                <div>
                    <h2 class="text-xl font-bold text-gray-800">Department & Organization Structure</h2>
                    <p class="text-sm text-gray-600 mt-1">Manage organizational hierarchy and departments</p>
                </div>
                <div class="flex items-center space-x-3">
                    <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Export
                    </button>
                    <button class="px-4 py-2 bg-[#940000] text-white rounded-lg text-sm font-medium hover:bg-[#7a0000] transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        New Department
                    </button>
                </div>
            </div>
        </div>

        <!-- Organizational Tree -->
        <div class="p-6">
            <div class="space-y-4">
                <!-- Top Level: CEO -->
                <div class="flex justify-center">
                    <div class="bg-gradient-to-r from-[#940000] to-[#7a0000] text-white rounded-lg p-4 shadow-lg">
                        <div class="text-center">
                            <p class="font-bold text-lg">CEO</p>
                            <p class="text-sm opacity-90">Chief Executive Officer</p>
                        </div>
                    </div>
                </div>

                <!-- Second Level: Departments -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-8">
                    <div class="bg-white border-2 border-gray-200 rounded-lg p-4 hover:border-[#940000] transition-colors">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-900">Finance</h3>
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">24 Employees</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Manager: Sarah Johnson</p>
                        <div class="flex items-center space-x-2 text-xs text-gray-500">
                            <span>8 Positions</span>
                            <span>•</span>
                            <span>3 Sub-units</span>
                        </div>
                        <button class="mt-3 w-full px-3 py-1.5 bg-[#940000] text-white rounded text-sm hover:bg-[#7a0000] transition-colors">
                            View Details
                        </button>
                    </div>

                    <div class="bg-white border-2 border-gray-200 rounded-lg p-4 hover:border-[#940000] transition-colors">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-900">Human Resources</h3>
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">18 Employees</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Manager: Michael Brown</p>
                        <div class="flex items-center space-x-2 text-xs text-gray-500">
                            <span>6 Positions</span>
                            <span>•</span>
                            <span>2 Sub-units</span>
                        </div>
                        <button class="mt-3 w-full px-3 py-1.5 bg-[#940000] text-white rounded text-sm hover:bg-[#7a0000] transition-colors">
                            View Details
                        </button>
                    </div>

                    <div class="bg-white border-2 border-gray-200 rounded-lg p-4 hover:border-[#940000] transition-colors">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-900">IT</h3>
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">32 Employees</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Manager: David Wilson</p>
                        <div class="flex items-center space-x-2 text-xs text-gray-500">
                            <span>12 Positions</span>
                            <span>•</span>
                            <span>4 Sub-units</span>
                        </div>
                        <button class="mt-3 w-full px-3 py-1.5 bg-[#940000] text-white rounded text-sm hover:bg-[#7a0000] transition-colors">
                            View Details
                        </button>
                    </div>

                    <div class="bg-white border-2 border-gray-200 rounded-lg p-4 hover:border-[#940000] transition-colors">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-semibold text-gray-900">Administration</h3>
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">15 Employees</span>
                        </div>
                        <p class="text-sm text-gray-600 mb-2">Manager: Alice Johnson</p>
                        <div class="flex items-center space-x-2 text-xs text-gray-500">
                            <span>5 Positions</span>
                            <span>•</span>
                            <span>2 Sub-units</span>
                        </div>
                        <button class="mt-3 w-full px-3 py-1.5 bg-[#940000] text-white rounded text-sm hover:bg-[#7a0000] transition-colors">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
