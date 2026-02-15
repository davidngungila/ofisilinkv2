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
                    <p class="text-sm text-gray-600 mb-1">Total Backups</p>
                    <p class="text-2xl font-bold text-[#940000]">48</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-red-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#940000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Total Size</p>
                    <p class="text-2xl font-bold text-blue-600">12.5 GB</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Last Backup</p>
                    <p class="text-2xl font-bold text-green-600">Today</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Auto Backup</p>
                    <p class="text-2xl font-bold text-yellow-600">Enabled</p>
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
                    <h2 class="text-xl font-bold text-gray-800">Backup & Restore Management</h2>
                    <p class="text-sm text-gray-600 mt-1">Manage system backups and restore operations</p>
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Create Backup
                    </button>
                </div>
            </div>
        </div>

        <!-- Backup List -->
        <div class="p-6">
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-green-50 border border-green-200 rounded-lg">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">backup_2025-02-15_08-30-00.sql</p>
                            <p class="text-xs text-gray-600">Created: Feb 15, 2025 at 08:30 AM • Size: 245 MB</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Complete</span>
                        <button class="px-3 py-1.5 bg-[#940000] text-white rounded text-sm hover:bg-[#7a0000] transition-colors">
                            Restore
                        </button>
                        <button class="px-3 py-1.5 border border-gray-300 rounded text-sm text-gray-700 hover:bg-gray-50">
                            Download
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between p-4 bg-gray-50 border border-gray-200 rounded-lg">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center">
                            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">backup_2025-02-14_08-30-00.sql</p>
                            <p class="text-xs text-gray-600">Created: Feb 14, 2025 at 08:30 AM • Size: 242 MB</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Complete</span>
                        <button class="px-3 py-1.5 bg-[#940000] text-white rounded text-sm hover:bg-[#7a0000] transition-colors">
                            Restore
                        </button>
                        <button class="px-3 py-1.5 border border-gray-300 rounded text-sm text-gray-700 hover:bg-gray-50">
                            Download
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Backup Settings -->
        <div class="p-6 border-t border-gray-200 bg-gray-50">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Backup Configuration</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Auto Backup Schedule</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                        <option>Daily at 2:00 AM</option>
                        <option>Weekly (Sunday at 2:00 AM)</option>
                        <option>Monthly (1st at 2:00 AM)</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Retention Period</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                        <option>Keep last 30 days</option>
                        <option>Keep last 60 days</option>
                        <option>Keep last 90 days</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Backup Location</label>
                    <input type="text" value="/var/backups/system" class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div class="flex items-end">
                    <button class="w-full px-4 py-2 bg-[#940000] text-white rounded-lg text-sm font-medium hover:bg-[#7a0000] transition-colors">
                        Save Configuration
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
