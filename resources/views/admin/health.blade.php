@extends('layouts.app')

@section('title', $title . ' - Office Management')
@section('page-title', $title)

@section('content')
<div class="space-y-6">
    <!-- System Health Status -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg shadow-sm p-6 border border-green-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">System Status</p>
                    <p class="text-2xl font-bold text-green-600">Healthy</p>
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
                    <p class="text-sm text-gray-600 mb-1">CPU Usage</p>
                    <p class="text-2xl font-bold text-blue-600">45%</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Memory Usage</p>
                    <p class="text-2xl font-bold text-yellow-600">68%</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-yellow-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Disk Usage</p>
                    <p class="text-2xl font-bold text-green-600">42%</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Performance Metrics -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- CPU Usage Chart -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">CPU Usage (Last 24 Hours)</h3>
            <div class="h-48 bg-gray-50 rounded-lg flex items-center justify-center border-2 border-dashed border-gray-300">
                <p class="text-gray-500 text-sm">CPU Usage Chart</p>
            </div>
            <div class="mt-4 flex items-center justify-between text-sm">
                <span class="text-gray-600">Average: 42%</span>
                <span class="text-gray-600">Peak: 78%</span>
                <span class="text-gray-600">Current: 45%</span>
            </div>
        </div>

        <!-- Memory Usage Chart -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Memory Usage (Last 24 Hours)</h3>
            <div class="h-48 bg-gray-50 rounded-lg flex items-center justify-center border-2 border-dashed border-gray-300">
                <p class="text-gray-500 text-sm">Memory Usage Chart</p>
            </div>
            <div class="mt-4 flex items-center justify-between text-sm">
                <span class="text-gray-600">Average: 65%</span>
                <span class="text-gray-600">Peak: 85%</span>
                <span class="text-gray-600">Current: 68%</span>
            </div>
        </div>
    </div>

    <!-- System Components Status -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">System Components</h2>
        </div>
        <div class="p-6">
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-green-50 border border-green-200 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">Database</p>
                            <p class="text-xs text-gray-600">MySQL 8.0.35 - Connected</p>
                        </div>
                    </div>
                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Operational</span>
                </div>
                <div class="flex items-center justify-between p-4 bg-green-50 border border-green-200 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">Cache Server</p>
                            <p class="text-xs text-gray-600">Redis 7.0 - Running</p>
                        </div>
                    </div>
                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Operational</span>
                </div>
                <div class="flex items-center justify-between p-4 bg-green-50 border border-green-200 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">Queue Worker</p>
                            <p class="text-xs text-gray-600">Laravel Queue - Active</p>
                        </div>
                    </div>
                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Operational</span>
                </div>
                <div class="flex items-center justify-between p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div>
                            <p class="text-sm font-semibold text-gray-900">Email Service</p>
                            <p class="text-xs text-gray-600">SMTP - High latency detected</p>
                        </div>
                    </div>
                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Warning</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
