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
                    <p class="text-sm text-gray-600 mb-1">Email Sent Today</p>
                    <p class="text-2xl font-bold text-[#940000]">248</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-red-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#940000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">SMS Sent</p>
                    <p class="text-2xl font-bold text-blue-600">156</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Notifications</p>
                    <p class="text-2xl font-bold text-green-600">1,245</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Active Channels</p>
                    <p class="text-2xl font-bold text-yellow-600">5</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-yellow-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Communication Channels -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Email Settings -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Email Configuration</h3>
                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
            </div>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">SMTP Host</label>
                    <input type="text" value="smtp.company.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">SMTP Port</label>
                    <input type="text" value="587" class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">From Email</label>
                    <input type="email" value="noreply@company.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <button class="w-full px-4 py-2 bg-[#940000] text-white rounded-lg text-sm font-medium hover:bg-[#7a0000] transition-colors">
                    Test Connection
                </button>
            </div>
        </div>

        <!-- SMS Settings -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-semibold text-gray-900">SMS Configuration</h3>
                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
            </div>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Provider</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                        <option>Twilio</option>
                        <option>Nexmo</option>
                        <option>Custom API</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">API Key</label>
                    <input type="password" value="••••••••••••" class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Sender ID</label>
                    <input type="text" value="COMPANY" class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <button class="w-full px-4 py-2 bg-[#940000] text-white rounded-lg text-sm font-medium hover:bg-[#7a0000] transition-colors">
                    Test SMS
                </button>
            </div>
        </div>
    </div>

    <!-- Notification Templates -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">Notification Templates</h2>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <p class="text-sm font-semibold text-gray-900">Leave Request Notification</p>
                        <p class="text-xs text-gray-600">Sent when leave request is submitted</p>
                    </div>
                    <button class="px-4 py-2 text-[#940000] border border-[#940000] rounded-lg text-sm font-medium hover:bg-[#940000] hover:text-white transition-colors">
                        Edit Template
                    </button>
                </div>
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <p class="text-sm font-semibold text-gray-900">Payroll Processing Alert</p>
                        <p class="text-xs text-gray-600">Sent when payroll is processed</p>
                    </div>
                    <button class="px-4 py-2 text-[#940000] border border-[#940000] rounded-lg text-sm font-medium hover:bg-[#940000] hover:text-white transition-colors">
                        Edit Template
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
