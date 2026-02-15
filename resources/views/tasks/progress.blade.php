@extends('layouts.app')

@section('title', $title . ' - Office Management')
@section('page-title', $title)

@section('content')
<div class="space-y-6">
    <!-- Breadcrumb -->
    <div class="flex items-center space-x-2 text-sm text-gray-600">
        <a href="{{ route('dashboard') }}" class="hover:text-[#940000]">Dashboard</a>
        <span>/</span>
        <span class="text-gray-900">{{ $title }}</span>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Tasks In Progress</p>
                    <p class="text-2xl font-bold text-blue-600">142</p>
                    <p class="text-xs text-gray-500 mt-1">+12% from last week</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Completed Today</p>
                    <p class="text-2xl font-bold text-green-600">28</p>
                    <p class="text-xs text-gray-500 mt-1">+5 from yesterday</p>
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
                    <p class="text-sm text-gray-600 mb-1">Overdue Tasks</p>
                    <p class="text-2xl font-bold text-red-600">15</p>
                    <p class="text-xs text-gray-500 mt-1">-3 from last week</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-red-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Average Completion Rate</p>
                    <p class="text-2xl font-bold text-purple-600">78%</p>
                    <p class="text-xs text-gray-500 mt-1">+4% improvement</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-purple-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Status Overview -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">Status Overview</h2>
            <p class="text-sm text-gray-600 mt-1">Real-time task status tracking and progress updates</p>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="w-20 h-20 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-3">
                        <span class="text-2xl font-bold text-blue-600">142</span>
                    </div>
                    <p class="text-sm font-semibold text-gray-800">In Progress</p>
                    <p class="text-xs text-gray-500 mt-1">57% of total tasks</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-3">
                        <span class="text-2xl font-bold text-green-600">89</span>
                    </div>
                    <p class="text-sm font-semibold text-gray-800">Completed</p>
                    <p class="text-xs text-gray-500 mt-1">36% of total tasks</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 rounded-full bg-yellow-100 flex items-center justify-center mx-auto mb-3">
                        <span class="text-2xl font-bold text-yellow-600">16</span>
                    </div>
                    <p class="text-sm font-semibold text-gray-800">Pending</p>
                    <p class="text-xs text-gray-500 mt-1">6% of total tasks</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 rounded-full bg-red-100 flex items-center justify-center mx-auto mb-3">
                        <span class="text-2xl font-bold text-red-600">15</span>
                    </div>
                    <p class="text-sm font-semibold text-gray-800">Overdue</p>
                    <p class="text-xs text-gray-500 mt-1">6% of total tasks</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Progress Updates Table -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-bold text-gray-800">Recent Progress Updates</h2>
                    <p class="text-sm text-gray-600 mt-1">Track all task progress updates and status changes</p>
                </div>
                <div class="flex items-center space-x-3">
                    <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                        <option>All Projects</option>
                        <option>Website Redesign</option>
                        <option>Mobile App Development</option>
                        <option>Financial Planning</option>
                    </select>
                    <button class="px-4 py-2 bg-[#940000] text-white rounded-lg text-sm font-medium hover:bg-[#7a0000] transition-colors">
                        Export Report
                    </button>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class="p-6 bg-gray-50 border-b border-gray-200">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <input type="text" placeholder="Search tasks..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                        <option>All Status</option>
                        <option>In Progress</option>
                        <option>Completed</option>
                        <option>Pending</option>
                        <option>On Hold</option>
                    </select>
                </div>
                <div>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                        <option>All Departments</option>
                        <option>IT Department</option>
                        <option>Finance</option>
                        <option>HR</option>
                        <option>Marketing</option>
                    </select>
                </div>
                <div>
                    <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
            </div>
        </div>

        <!-- Progress Updates Table -->
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Task</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Assigned To</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Progress</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Update</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Due Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div>
                                <div class="text-sm font-medium text-gray-900">Implement User Authentication System</div>
                                <div class="text-sm text-gray-500">TASK-2025-001 | Website Redesign</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-2">
                                    <span class="text-xs font-semibold text-blue-600">JD</span>
                                </div>
                                <span class="text-sm text-gray-900">John Doe</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">In Progress</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-32 bg-gray-200 rounded-full h-2.5 mr-3">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 65%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-900">65%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">2 hours ago</div>
                            <div class="text-xs text-gray-500">Updated by John Doe</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Feb 28, 2025</div>
                            <div class="text-xs text-orange-600">3 days left</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button class="text-[#940000] hover:text-[#7a0000]">View Details</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div>
                                <div class="text-sm font-medium text-gray-900">Design Mobile App UI/UX</div>
                                <div class="text-sm text-gray-500">TASK-2025-002 | Mobile App Development</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center mr-2">
                                    <span class="text-xs font-semibold text-green-600">SM</span>
                                </div>
                                <span class="text-sm text-gray-900">Sarah Miller</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-32 bg-gray-200 rounded-full h-2.5 mr-3">
                                    <div class="bg-yellow-600 h-2.5 rounded-full" style="width: 20%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-900">20%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">1 day ago</div>
                            <div class="text-xs text-gray-500">Updated by Sarah Miller</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 5, 2025</div>
                            <div class="text-xs text-gray-500">8 days left</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button class="text-[#940000] hover:text-[#7a0000]">View Details</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div>
                                <div class="text-sm font-medium text-gray-900">Prepare Q1 Financial Reports</div>
                                <div class="text-sm text-gray-500">TASK-2025-003 | Financial Planning</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center mr-2">
                                    <span class="text-xs font-semibold text-purple-600">MJ</span>
                                </div>
                                <span class="text-sm text-gray-900">Michael Johnson</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Completed</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-32 bg-gray-200 rounded-full h-2.5 mr-3">
                                    <div class="bg-green-600 h-2.5 rounded-full" style="width: 100%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-900">100%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">5 hours ago</div>
                            <div class="text-xs text-gray-500">Completed by Michael Johnson</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Feb 20, 2025</div>
                            <div class="text-xs text-green-600">Completed</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button class="text-[#940000] hover:text-[#7a0000]">View Details</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div>
                                <div class="text-sm font-medium text-gray-900">Conduct Employee Training Session</div>
                                <div class="text-sm text-gray-500">TASK-2025-004 | HR Development</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-pink-100 flex items-center justify-center mr-2">
                                    <span class="text-xs font-semibold text-pink-600">EW</span>
                                </div>
                                <span class="text-sm text-gray-900">Emily Wilson</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">In Progress</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-32 bg-gray-200 rounded-full h-2.5 mr-3">
                                    <div class="bg-blue-600 h-2.5 rounded-full" style="width: 45%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-900">45%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">30 minutes ago</div>
                            <div class="text-xs text-gray-500">Updated by Emily Wilson</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 10, 2025</div>
                            <div class="text-xs text-gray-500">13 days left</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button class="text-[#940000] hover:text-[#7a0000]">View Details</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div>
                                <div class="text-sm font-medium text-gray-900">Update Company Website Content</div>
                                <div class="text-sm text-gray-500">TASK-2025-005 | Website Redesign</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-8 h-8 rounded-full bg-indigo-100 flex items-center justify-center mr-2">
                                    <span class="text-xs font-semibold text-indigo-600">RB</span>
                                </div>
                                <span class="text-sm text-gray-900">Robert Brown</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">On Hold</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-32 bg-gray-200 rounded-full h-2.5 mr-3">
                                    <div class="bg-gray-400 h-2.5 rounded-full" style="width: 30%"></div>
                                </div>
                                <span class="text-sm font-medium text-gray-900">30%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">3 days ago</div>
                            <div class="text-xs text-gray-500">Status changed to On Hold</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Mar 15, 2025</div>
                            <div class="text-xs text-gray-500">18 days left</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button class="text-[#940000] hover:text-[#7a0000]">View Details</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-200 bg-gray-50 flex items-center justify-between">
            <div class="text-sm text-gray-700">
                Showing <span class="font-medium">1</span> to <span class="font-medium">5</span> of <span class="font-medium">142</span> updates
            </div>
            <div class="flex items-center space-x-2">
                <button class="px-3 py-1 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-50 disabled:opacity-50" disabled>Previous</button>
                <button class="px-3 py-1 bg-[#940000] text-white rounded-lg text-sm font-medium">1</button>
                <button class="px-3 py-1 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-50">2</button>
                <button class="px-3 py-1 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-50">3</button>
                <button class="px-3 py-1 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection
