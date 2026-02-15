@extends('layouts.app')

@section('title', $title . ' - Office Management')
@section('page-title', $title)

@section('content')
<div class="space-y-6">
    <!-- Breadcrumb -->
    <div class="flex items-center space-x-2 text-sm text-gray-600">
        <a href="{{ route('admin.settings') }}" class="hover:text-[#940000]">System Settings</a>
        <span>/</span>
        <span class="text-gray-900">{{ $title }}</span>
    </div>

    <!-- Maintenance Mode -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">Maintenance Mode</h2>
            <p class="text-sm text-gray-600 mt-1">Put the system in maintenance mode for updates</p>
        </div>
        <div class="p-6">
            <div class="space-y-6">
                <div class="flex items-center justify-between">
                    <div>
                        <label class="text-sm font-medium text-gray-900">Enable Maintenance Mode</label>
                        <p class="text-xs text-gray-600">Temporarily disable access for all users except administrators</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-[#940000]/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#940000]"></div>
                    </label>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Maintenance Message</label>
                    <textarea rows="3" placeholder="Enter maintenance message to display to users..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">The system is currently under maintenance. We'll be back shortly.</textarea>
                </div>
                <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-yellow-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                        <div>
                            <p class="text-sm font-medium text-yellow-800">Warning</p>
                            <p class="text-xs text-yellow-700 mt-1">Enabling maintenance mode will restrict access for all non-administrator users.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- System Updates -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">System Updates</h2>
            <p class="text-sm text-gray-600 mt-1">Manage system updates and version control</p>
        </div>
        <div class="p-6">
            <div class="space-y-6">
                <div class="flex items-center justify-between p-4 bg-green-50 border border-green-200 rounded-lg">
                    <div>
                        <p class="text-sm font-semibold text-gray-900">Current Version</p>
                        <p class="text-xs text-gray-600">Version 1.0.0 - Up to date</p>
                    </div>
                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Latest</span>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <label class="text-sm font-medium text-gray-900">Auto-Update</label>
                        <p class="text-xs text-gray-600">Automatically install security updates</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-[#940000]/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#940000]"></div>
                    </label>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Update Check Frequency</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                        <option>Daily</option>
                        <option>Weekly</option>
                        <option>Monthly</option>
                        <option>Manual Only</option>
                    </select>
                </div>
                <button class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors">
                    Check for Updates
                </button>
            </div>
        </div>
    </div>

    <!-- Log Management -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">Log Management</h2>
            <p class="text-sm text-gray-600 mt-1">Configure system logging and retention</p>
        </div>
        <div class="p-6">
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Log Level</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                        <option>Debug (All logs)</option>
                        <option>Info (Recommended)</option>
                        <option>Warning</option>
                        <option>Error</option>
                        <option>Critical</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Log Retention (Days)</label>
                    <input type="number" value="30" min="7" max="365" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                    <p class="text-xs text-gray-600 mt-1">Logs older than this will be automatically deleted</p>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <label class="text-sm font-medium text-gray-900">Enable Log Rotation</label>
                        <p class="text-xs text-gray-600">Automatically rotate log files to prevent large file sizes</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-[#940000]/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#940000]"></div>
                    </label>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Max Log File Size (MB)</label>
                    <input type="number" value="10" min="1" max="100" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div class="flex items-center space-x-3">
                    <button class="flex-1 px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                        View Logs
                    </button>
                    <button class="flex-1 px-4 py-2 border border-red-300 text-red-600 rounded-lg text-sm font-medium hover:bg-red-50">
                        Clear Logs
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Save Button -->
    <div class="flex justify-end space-x-3">
        <button class="px-6 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
            Cancel
        </button>
        <button class="px-6 py-2 bg-[#940000] text-white rounded-lg text-sm font-medium hover:bg-[#7a0000] transition-colors">
            Save Changes
        </button>
    </div>
</div>
@endsection

