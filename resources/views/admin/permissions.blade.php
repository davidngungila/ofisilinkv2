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
                    <p class="text-sm text-gray-600 mb-1">Total Permissions</p>
                    <p class="text-2xl font-bold text-[#940000]">48</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-red-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#940000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Active Roles</p>
                    <p class="text-2xl font-bold text-green-600">8</p>
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
                    <p class="text-sm text-gray-600 mb-1">Access Rules</p>
                    <p class="text-2xl font-bold text-blue-600">156</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Restricted Modules</p>
                    <p class="text-2xl font-bold text-yellow-600">5</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-yellow-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
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
                    <h2 class="text-xl font-bold text-gray-800">Permission & Access Control</h2>
                    <p class="text-sm text-gray-600 mt-1">Manage system permissions and access rules</p>
                </div>
                <div class="flex items-center space-x-3">
                    <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                        </svg>
                        Filter
                    </button>
                    <button class="px-4 py-2 bg-[#940000] text-white rounded-lg text-sm font-medium hover:bg-[#7a0000] transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        New Permission
                    </button>
                </div>
            </div>
        </div>

        <!-- Permission Groups -->
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Module Card 1 -->
                <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-900">Accounting & Finance</h3>
                        <div class="flex items-center space-x-2">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">8 Permissions</span>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">View Financial Data</span>
                            <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Manager+</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Create Transactions</span>
                            <span class="px-2 py-1 text-xs rounded-full bg-purple-100 text-purple-800">Admin</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Approve Payments</span>
                            <span class="px-2 py-1 text-xs rounded-full bg-purple-100 text-purple-800">Admin</span>
                        </div>
                    </div>
                    <button class="mt-4 w-full px-4 py-2 border border-[#940000] text-[#940000] rounded-lg text-sm font-medium hover:bg-[#940000] hover:text-white transition-colors">
                        Manage Permissions
                    </button>
                </div>

                <!-- Module Card 2 -->
                <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-900">Human Resources</h3>
                        <div class="flex items-center space-x-2">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">12 Permissions</span>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">View Employee Data</span>
                            <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Manager+</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Edit Payroll</span>
                            <span class="px-2 py-1 text-xs rounded-full bg-purple-100 text-purple-800">Admin</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Manage Recruitment</span>
                            <span class="px-2 py-1 text-xs rounded-full bg-purple-100 text-purple-800">Admin</span>
                        </div>
                    </div>
                    <button class="mt-4 w-full px-4 py-2 border border-[#940000] text-[#940000] rounded-lg text-sm font-medium hover:bg-[#940000] hover:text-white transition-colors">
                        Manage Permissions
                    </button>
                </div>

                <!-- Module Card 3 -->
                <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-gray-900">System Administration</h3>
                        <div class="flex items-center space-x-2">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Restricted</span>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">User Management</span>
                            <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-800">Admin Only</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">System Settings</span>
                            <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-800">Admin Only</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Backup & Restore</span>
                            <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-800">Admin Only</span>
                        </div>
                    </div>
                    <button class="mt-4 w-full px-4 py-2 border border-[#940000] text-[#940000] rounded-lg text-sm font-medium hover:bg-[#940000] hover:text-white transition-colors">
                        Manage Permissions
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
