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
                    <p class="text-sm text-gray-600 mb-1">Current Year</p>
                    <p class="text-2xl font-bold text-[#940000]">2025</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-red-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#940000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Start Date</p>
                    <p class="text-2xl font-bold text-blue-600">Jan 1</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">End Date</p>
                    <p class="text-2xl font-bold text-green-600">Dec 31</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Days Remaining</p>
                    <p class="text-2xl font-bold text-yellow-600">319</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-yellow-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
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
                    <h2 class="text-xl font-bold text-gray-800">Financial Year Management</h2>
                    <p class="text-sm text-gray-600 mt-1">Manage financial periods and year-end processes</p>
                </div>
                <div class="flex items-center space-x-3">
                    <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Export
                    </button>
                    <button class="px-4 py-2 bg-[#940000] text-white rounded-lg text-sm font-medium hover:bg-[#7a0000] transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        New Financial Year
                    </button>
                </div>
            </div>
        </div>

        <!-- Current Financial Year -->
        <div class="p-6 border-b border-gray-200 bg-gradient-to-r from-[#940000] to-[#7a0000]">
            <div class="text-white">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Financial Year 2025</h3>
                        <p class="text-red-100">January 1, 2025 - December 31, 2025</p>
                    </div>
                    <span class="px-3 py-1 text-sm font-semibold rounded-full bg-white text-[#940000]">Active</span>
                </div>
                <div class="grid grid-cols-3 gap-4 mt-4">
                    <div>
                        <p class="text-sm text-red-100">Progress</p>
                        <div class="w-full bg-red-900 rounded-full h-2 mt-1">
                            <div class="bg-white h-2 rounded-full" style="width: 12%"></div>
                        </div>
                        <p class="text-sm font-semibold mt-1">12% Complete</p>
                    </div>
                    <div>
                        <p class="text-sm text-red-100">Days Elapsed</p>
                        <p class="text-2xl font-bold">46 days</p>
                    </div>
                    <div>
                        <p class="text-sm text-red-100">Days Remaining</p>
                        <p class="text-2xl font-bold">319 days</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Financial Years List -->
        <div class="p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Previous Financial Years</h3>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg border border-gray-200">
                    <div>
                        <p class="text-sm font-semibold text-gray-900">Financial Year 2024</p>
                        <p class="text-xs text-gray-600">January 1, 2024 - December 31, 2024</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">Closed</span>
                        <button class="px-3 py-1.5 text-[#940000] border border-[#940000] rounded text-sm hover:bg-[#940000] hover:text-white transition-colors">
                            View Reports
                        </button>
                    </div>
                </div>
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg border border-gray-200">
                    <div>
                        <p class="text-sm font-semibold text-gray-900">Financial Year 2023</p>
                        <p class="text-xs text-gray-600">January 1, 2023 - December 31, 2023</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">Closed</span>
                        <button class="px-3 py-1.5 text-[#940000] border border-[#940000] rounded text-sm hover:bg-[#940000] hover:text-white transition-colors">
                            View Reports
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
