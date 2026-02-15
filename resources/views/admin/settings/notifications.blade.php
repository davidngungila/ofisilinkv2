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

    <!-- Notification Channels -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">Notification Channels</h2>
            <p class="text-sm text-gray-600 mt-1">Configure how notifications are delivered</p>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">Email Notifications</p>
                            <p class="text-xs text-gray-600">Send notifications via email</p>
                        </div>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-[#940000]/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#940000]"></div>
                    </label>
                </div>
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">SMS Notifications</p>
                            <p class="text-xs text-gray-600">Send notifications via SMS</p>
                        </div>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-[#940000]/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#940000]"></div>
                    </label>
                </div>
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg bg-yellow-100 flex items-center justify-center">
                            <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">In-App Notifications</p>
                            <p class="text-xs text-gray-600">Show notifications in the application</p>
                        </div>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" checked class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-[#940000]/20 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#940000]"></div>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <!-- Notification Rules -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-bold text-gray-800">Notification Rules</h2>
                    <p class="text-sm text-gray-600 mt-1">Configure when and how notifications are sent</p>
                </div>
                <button class="px-4 py-2 bg-[#940000] text-white rounded-lg text-sm font-medium hover:bg-[#7a0000] transition-colors">
                    Add Rule
                </button>
            </div>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                <div class="border border-gray-200 rounded-lg p-4">
                    <div class="flex items-center justify-between mb-3">
                        <div>
                            <p class="text-sm font-semibold text-gray-900">Leave Request Submitted</p>
                            <p class="text-xs text-gray-600">Notify manager when employee submits leave request</p>
                        </div>
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                    </div>
                    <div class="grid grid-cols-3 gap-4 text-xs">
                        <div>
                            <span class="text-gray-600">Channel:</span>
                            <span class="font-medium text-gray-900 ml-1">Email, In-App</span>
                        </div>
                        <div>
                            <span class="text-gray-600">Recipient:</span>
                            <span class="font-medium text-gray-900 ml-1">Manager</span>
                        </div>
                        <div>
                            <span class="text-gray-600">Priority:</span>
                            <span class="font-medium text-gray-900 ml-1">High</span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2 mt-3">
                        <button class="px-3 py-1.5 text-[#940000] border border-[#940000] rounded text-xs font-medium hover:bg-[#940000] hover:text-white transition-colors">
                            Edit
                        </button>
                        <button class="px-3 py-1.5 text-red-600 border border-red-300 rounded text-xs font-medium hover:bg-red-50 transition-colors">
                            Delete
                        </button>
                    </div>
                </div>
                <div class="border border-gray-200 rounded-lg p-4">
                    <div class="flex items-center justify-between mb-3">
                        <div>
                            <p class="text-sm font-semibold text-gray-900">Payroll Processed</p>
                            <p class="text-xs text-gray-600">Notify employees when payroll is processed</p>
                        </div>
                        <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                    </div>
                    <div class="grid grid-cols-3 gap-4 text-xs">
                        <div>
                            <span class="text-gray-600">Channel:</span>
                            <span class="font-medium text-gray-900 ml-1">Email, SMS</span>
                        </div>
                        <div>
                            <span class="text-gray-600">Recipient:</span>
                            <span class="font-medium text-gray-900 ml-1">Employee</span>
                        </div>
                        <div>
                            <span class="text-gray-600">Priority:</span>
                            <span class="font-medium text-gray-900 ml-1">Medium</span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2 mt-3">
                        <button class="px-3 py-1.5 text-[#940000] border border-[#940000] rounded text-xs font-medium hover:bg-[#940000] hover:text-white transition-colors">
                            Edit
                        </button>
                        <button class="px-3 py-1.5 text-red-600 border border-red-300 rounded text-xs font-medium hover:bg-red-50 transition-colors">
                            Delete
                        </button>
                    </div>
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

