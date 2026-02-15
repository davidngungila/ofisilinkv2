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

    <!-- SMTP Configuration -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">SMTP Configuration</h2>
            <p class="text-sm text-gray-600 mt-1">Configure email server settings</p>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">SMTP Host *</label>
                    <input type="text" value="smtp.company.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">SMTP Port *</label>
                    <input type="number" value="587" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">SMTP Username *</label>
                    <input type="text" value="noreply@company.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">SMTP Password *</label>
                    <input type="password" value="••••••••" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Encryption</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                        <option>TLS</option>
                        <option>SSL</option>
                        <option>None</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">From Email Address *</label>
                    <input type="email" value="noreply@company.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">From Name</label>
                    <input type="text" value="Office Management System" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div class="flex items-end">
                    <button class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors">
                        Test Connection
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Email Templates -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">Email Templates</h2>
            <p class="text-sm text-gray-600 mt-1">Manage email templates for notifications</p>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <p class="text-sm font-semibold text-gray-900">Welcome Email</p>
                        <p class="text-xs text-gray-600">Sent to new users upon account creation</p>
                    </div>
                    <button class="px-4 py-2 text-[#940000] border border-[#940000] rounded-lg text-sm font-medium hover:bg-[#940000] hover:text-white transition-colors">
                        Edit Template
                    </button>
                </div>
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <p class="text-sm font-semibold text-gray-900">Password Reset</p>
                        <p class="text-xs text-gray-600">Sent when user requests password reset</p>
                    </div>
                    <button class="px-4 py-2 text-[#940000] border border-[#940000] rounded-lg text-sm font-medium hover:bg-[#940000] hover:text-white transition-colors">
                        Edit Template
                    </button>
                </div>
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <p class="text-sm font-semibold text-gray-900">Leave Request Notification</p>
                        <p class="text-xs text-gray-600">Sent when leave request is submitted</p>
                    </div>
                    <button class="px-4 py-2 text-[#940000] border border-[#940000] rounded-lg text-sm font-medium hover:bg-[#940000] hover:text-white transition-colors">
                        Edit Template
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Email Notifications -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">Email Notifications</h2>
            <p class="text-sm text-gray-600 mt-1">Configure which events trigger email notifications</p>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <div>
                        <label class="text-sm font-medium text-gray-900">User Registration</label>
                        <p class="text-xs text-gray-600">Send email when new user is registered</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-[#940000]/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#940000]"></div>
                    </label>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <label class="text-sm font-medium text-gray-900">Leave Request Updates</label>
                        <p class="text-xs text-gray-600">Send email when leave request status changes</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-[#940000]/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#940000]"></div>
                    </label>
                </div>
                <div class="flex items-center justify-between">
                    <div>
                        <label class="text-sm font-medium text-gray-900">Payroll Processing</label>
                        <p class="text-xs text-gray-600">Send email when payroll is processed</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-[#940000]/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#940000]"></div>
                    </label>
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

