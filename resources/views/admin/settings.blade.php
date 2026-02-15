@extends('layouts.app')

@section('title', $title . ' - Office Management')
@section('page-title', $title)

@section('content')
<div class="space-y-6">
    <!-- Settings Categories -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- General Settings -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow cursor-pointer">
            <div class="flex items-center space-x-4 mb-4">
                <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">General Settings</h3>
                    <p class="text-sm text-gray-600">Company info, branding, timezone</p>
                </div>
            </div>
            <div class="flex items-center justify-between text-sm">
                <span class="text-gray-600">12 configurations</span>
                <span class="text-[#940000] font-medium">Configure →</span>
            </div>
        </div>

        <!-- Security Settings -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow cursor-pointer">
            <div class="flex items-center space-x-4 mb-4">
                <div class="w-12 h-12 rounded-lg bg-red-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Security Settings</h3>
                    <p class="text-sm text-gray-600">Password policy, 2FA, sessions</p>
                </div>
            </div>
            <div class="flex items-center justify-between text-sm">
                <span class="text-gray-600">8 configurations</span>
                <span class="text-[#940000] font-medium">Configure →</span>
            </div>
        </div>

        <!-- Email Settings -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow cursor-pointer">
            <div class="flex items-center space-x-4 mb-4">
                <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Email Settings</h3>
                    <p class="text-sm text-gray-600">SMTP, templates, notifications</p>
                </div>
            </div>
            <div class="flex items-center justify-between text-sm">
                <span class="text-gray-600">6 configurations</span>
                <span class="text-[#940000] font-medium">Configure →</span>
            </div>
        </div>

        <!-- Integration Settings -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow cursor-pointer">
            <div class="flex items-center space-x-4 mb-4">
                <div class="w-12 h-12 rounded-lg bg-purple-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Integrations</h3>
                    <p class="text-sm text-gray-600">API keys, third-party services</p>
                </div>
            </div>
            <div class="flex items-center justify-between text-sm">
                <span class="text-gray-600">4 active</span>
                <span class="text-[#940000] font-medium">Configure →</span>
            </div>
        </div>

        <!-- Notification Settings -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow cursor-pointer">
            <div class="flex items-center space-x-4 mb-4">
                <div class="w-12 h-12 rounded-lg bg-yellow-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Notifications</h3>
                    <p class="text-sm text-gray-600">Alert preferences, channels</p>
                </div>
            </div>
            <div class="flex items-center justify-between text-sm">
                <span class="text-gray-600">10 rules</span>
                <span class="text-[#940000] font-medium">Configure →</span>
            </div>
        </div>

        <!-- System Settings -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 hover:shadow-md transition-shadow cursor-pointer">
            <div class="flex items-center space-x-4 mb-4">
                <div class="w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">System</h3>
                    <p class="text-sm text-gray-600">Maintenance, updates, logs</p>
                </div>
            </div>
            <div class="flex items-center justify-between text-sm">
                <span class="text-gray-600">5 configurations</span>
                <span class="text-[#940000] font-medium">Configure →</span>
            </div>
        </div>
    </div>

    <!-- Quick Settings Overview -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">System Configuration Overview</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-3">Application Information</h3>
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Application Name</span>
                        <span class="font-medium text-gray-900">Office Management System</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Version</span>
                        <span class="font-medium text-gray-900">1.0.0</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Environment</span>
                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Production</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Timezone</span>
                        <span class="font-medium text-gray-900">Africa/Lagos (WAT)</span>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="text-sm font-semibold text-gray-700 mb-3">Security Status</h3>
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Two-Factor Auth</span>
                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Enabled</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Password Policy</span>
                        <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Active</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Session Timeout</span>
                        <span class="font-medium text-gray-900">30 minutes</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Last Security Audit</span>
                        <span class="font-medium text-gray-900">Feb 10, 2025</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
