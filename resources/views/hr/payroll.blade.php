@extends('layouts.app')

@section('title', $title . ' - Office Management')
@section('page-title', $title)

@section('content')
<div class="space-y-6">
    <!-- Breadcrumb -->
    <div class="flex items-center space-x-2 text-sm text-gray-600">
        <a href="{{ route('dashboard') }}" class="hover:text-[#940000]">Dashboard</a>
        <span>/</span>
        <a href="#" class="hover:text-[#940000]">Human Resources</a>
        <span>/</span>
        <span class="text-gray-900 font-medium">{{ $title }}</span>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Total Payroll Cost</p>
                    <p class="text-2xl font-bold text-gray-900">TSh 142.5M</p>
                    <p class="text-xs text-green-600 mt-1 flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        +2.4% from last month
                    </p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#940000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Average Net Salary</p>
                    <p class="text-2xl font-bold text-gray-900">TSh 913.4K</p>
                    <p class="text-xs text-gray-500 mt-1">156 Employees</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Pending Processing</p>
                    <p class="text-2xl font-bold text-yellow-600">8</p>
                    <p class="text-xs text-gray-500 mt-1">Awaiting approval</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-yellow-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-1">Processed Status</p>
                    <p class="text-2xl font-bold text-green-600">95%</p>
                    <p class="text-xs text-green-600 mt-1">148 of 156 completed</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Payroll Distribution -->
        <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-100">
            <div class="p-6 border-b border-gray-100 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-bold text-gray-800">Payroll Distribution by Department</h3>
                    <p class="text-sm text-gray-500">Monthly breakdown of salary expenses</p>
                </div>
                <select class="text-sm border-gray-300 rounded-lg focus:ring-[#940000] focus:border-[#940000]">
                    <option>Last 6 Months</option>
                    <option>Year to Date</option>
                </select>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-700">Operations</span>
                            <span class="text-sm font-bold text-gray-900">TSh 45.2M (32%)</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2.5">
                            <div class="bg-[#940000] h-2.5 rounded-full" style="width: 32%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-700">IT & Engineering</span>
                            <span class="text-sm font-bold text-gray-900">TSh 38.6M (27%)</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2.5">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 27%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-700">Sales & Marketing</span>
                            <span class="text-sm font-bold text-gray-900">TSh 31.3M (22%)</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2.5">
                            <div class="bg-green-600 h-2.5 rounded-full" style="width: 22%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-700">Human Resources</span>
                            <span class="text-sm font-bold text-gray-900">TSh 15.6M (11%)</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2.5">
                            <div class="bg-purple-600 h-2.5 rounded-full" style="width: 11%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-medium text-gray-700">Administration</span>
                            <span class="text-sm font-bold text-gray-900">TSh 11.8M (8%)</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-2.5">
                            <div class="bg-orange-600 h-2.5 rounded-full" style="width: 8%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100">
            <div class="p-6 border-b border-gray-100">
                <h3 class="text-lg font-bold text-gray-800">Tax & Deductions</h3>
                <p class="text-sm text-gray-500">Current month statutory summary</p>
            </div>
            <div class="p-6">
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-2 h-2 rounded-full bg-red-500 mr-3"></div>
                            <span class="text-sm text-gray-600">PAYE (Income Tax)</span>
                        </div>
                        <span class="text-sm font-bold text-gray-900">TSh 12.4M</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-2 h-2 rounded-full bg-blue-500 mr-3"></div>
                            <span class="text-sm text-gray-600">NSSF (Social Security)</span>
                        </div>
                        <span class="text-sm font-bold text-gray-900">TSh 7.2M</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-2 h-2 rounded-full bg-green-500 mr-3"></div>
                            <span class="text-sm text-gray-600">NHIF (Health Insurance)</span>
                        </div>
                        <span class="text-sm font-bold text-gray-900">TSh 3.1M</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="w-2 h-2 rounded-full bg-yellow-500 mr-3"></div>
                            <span class="text-sm text-gray-600">Other Deductions</span>
                        </div>
                        <span class="text-sm font-bold text-gray-900">TSh 1.8M</span>
                    </div>
                    <div class="pt-6 border-t border-gray-50 flex items-center justify-between">
                        <span class="text-base font-bold text-gray-800">Total Statutory</span>
                        <span class="text-base font-bold text-[#940000]">TSh 24.5M</span>
                    </div>
                </div>
                <button class="w-full mt-6 py-2 px-4 bg-gray-50 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-100 transition-colors border border-gray-200">
                    View Statutory Reports
                </button>
            </div>
        </div>
    </div>

    <!-- Main Content List -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <!-- Header with Actions -->
        <div class="p-6 border-b border-gray-100">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
                <div>
                    <h2 class="text-xl font-bold text-gray-800 uppercase tracking-tight">Payroll Processing Detail</h2>
                    <p class="text-sm text-gray-500 mt-1">Manage individual employee compensation for Feb 2025</p>
                </div>
                <div class="flex items-center space-x-3">
                    <button class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-sm font-semibold text-gray-700 hover:bg-gray-50 flex items-center shadow-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Export Excel
                    </button>
                    <button class="px-4 py-2 bg-[#940000] text-white rounded-lg text-sm font-bold hover:bg-[#7a0000] transition-all flex items-center shadow-md transform hover:-translate-y-0.5 active:translate-y-0">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Process New Payroll
                    </button>
                </div>
            </div>
        </div>

        <!-- Filters & Search -->
        <div class="px-6 py-4 bg-gray-50/50 border-b border-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-4">
                <div class="lg:col-span-2 relative">
                    <input type="text" placeholder="Search employee name, ID or bank account..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent text-sm">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                    <option value="">All Departments</option>
                    <option value="ops">Operations</option>
                    <option value="it">IT & Engineering</option>
                    <option value="sales">Sales & Marketing</option>
                    <option value="hr">Human Resources</option>
                </select>
                <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                    <option value="">Status: All</option>
                    <option value="paid">Paid</option>
                    <option value="pending">Pending</option>
                    <option value="on-hold">On Hold</option>
                    <option value="processing">Processing</option>
                </select>
                <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                    <option value="2025-02">February 2025</option>
                    <option value="2025-01">January 2025</option>
                    <option value="2024-12">December 2024</option>
                </select>
            </div>
        </div>

        <!-- Data Table -->
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-widest">Employee Info</th>
                        <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase tracking-widest">Department</th>
                        <th class="px-6 py-3 text-right text-xs font-bold text-gray-600 uppercase tracking-widest">Basic</th>
                        <th class="px-6 py-3 text-right text-xs font-bold text-gray-600 uppercase tracking-widest">Allowances</th>
                        <th class="px-6 py-3 text-right text-xs font-bold text-gray-600 uppercase tracking-widest">Statutory</th>
                        <th class="px-6 py-3 text-right text-xs font-bold text-gray-600 uppercase tracking-widest">Net Salary</th>
                        <th class="px-6 py-3 text-center text-xs font-bold text-gray-600 uppercase tracking-widest">Status</th>
                        <th class="px-6 py-3 text-center text-xs font-bold text-gray-600 uppercase tracking-widest">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-[#940000] flex-shrink-0 flex items-center justify-center text-white text-sm font-bold mr-4 shadow-sm">JD</div>
                                <div>
                                    <div class="text-sm font-bold text-gray-900 group-hover:text-[#940000] transition-colors">John Doe</div>
                                    <div class="text-xs text-gray-500">EMP-2024-001</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2.5 py-1 text-xs font-medium rounded-md bg-blue-50 text-blue-700 border border-blue-100">IT & Engineering</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right">
                            <span class="text-sm font-semibold text-gray-900 font-mono">1,250,000</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right">
                            <span class="text-sm text-green-600 font-medium font-mono">+150,000</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right">
                            <span class="text-sm text-red-600 font-medium font-mono">-185,000</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right">
                            <span class="text-base font-bold text-[#940000] font-mono">1,215,000</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="px-3 py-1 text-xs font-bold rounded-full bg-green-100 text-green-800 flex items-center justify-center w-24 mx-auto">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-500 mr-2"></span>
                                Paid
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <div class="flex items-center justify-center space-x-3">
                                <button class="p-2 text-gray-400 hover:text-blue-600 transition-colors tooltip" title="View Payslip">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </button>
                                <button class="p-2 text-gray-400 hover:text-[#940000] transition-colors tooltip" title="Edit Compensation">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-blue-500 flex-shrink-0 flex items-center justify-center text-white text-sm font-bold mr-4 shadow-sm">JS</div>
                                <div>
                                    <div class="text-sm font-bold text-gray-900 group-hover:text-[#940000] transition-colors">Jane Smith</div>
                                    <div class="text-xs text-gray-500">EMP-2024-002</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2.5 py-1 text-xs font-medium rounded-md bg-purple-50 text-purple-700 border border-purple-100">Human Resources</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right">
                            <span class="text-sm font-semibold text-gray-900 font-mono">950,000</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right">
                            <span class="text-sm text-green-600 font-medium font-mono">+80,000</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right">
                            <span class="text-sm text-red-600 font-medium font-mono">-125,000</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right">
                            <span class="text-base font-bold text-[#940000] font-mono">905,000</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="px-3 py-1 text-xs font-bold rounded-full bg-yellow-100 text-yellow-800 flex items-center justify-center w-24 mx-auto">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 mr-2 border"></span>
                                Processing
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <div class="flex items-center justify-center space-x-3">
                                <button class="px-3 py-1 bg-[#940000] text-white text-xs font-bold rounded hover:bg-[#7a0000] transition-colors">Approve</button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-green-500 flex-shrink-0 flex items-center justify-center text-white text-sm font-bold mr-4 shadow-sm">MB</div>
                                <div>
                                    <div class="text-sm font-bold text-gray-900 group-hover:text-[#940000] transition-colors">Mike Brown</div>
                                    <div class="text-xs text-gray-500">EMP-2024-005</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2.5 py-1 text-xs font-medium rounded-md bg-orange-50 text-orange-700 border border-orange-100">Operations</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right">
                            <span class="text-sm font-semibold text-gray-900 font-mono">850,000</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right">
                            <span class="text-sm text-green-600 font-medium font-mono">+0</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right">
                            <span class="text-sm text-red-600 font-medium font-mono">-110,000</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right">
                            <span class="text-base font-bold text-[#940000] font-mono">740,000</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="px-3 py-1 text-xs font-bold rounded-full bg-red-100 text-red-800 flex items-center justify-center w-24 mx-auto">
                                <span class="w-1.5 h-1.5 rounded-full bg-red-500 mr-2"></span>
                                On Hold
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                            <div class="flex items-center justify-center space-x-3">
                                <button class="p-2 text-gray-400 hover:text-green-600 transition-colors" title="Release">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-100 bg-gray-50/30 flex items-center justify-between">
            <div class="text-sm text-gray-500 font-medium">
                Showing <span class="text-gray-900">1</span> to <span class="text-gray-900">3</span> of <span class="text-gray-900">156</span> payroll records
            </div>
            <nav class="flex items-center space-x-1">
                <button class="p-2 border border-gray-200 rounded-lg text-gray-400 hover:bg-gray-50 disabled:opacity-50" disabled>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button class="px-3 py-1.5 bg-[#940000] text-white rounded-lg text-sm font-bold shadow-sm">1</button>
                <button class="px-3 py-1.5 border border-gray-200 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 shadow-sm transition-colors">2</button>
                <button class="px-3 py-1.5 border border-gray-200 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 shadow-sm transition-colors">3</button>
                <button class="p-2 border border-gray-200 rounded-lg text-gray-700 hover:bg-gray-50 shadow-sm transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </nav>
        </div>
    </div>

    <!-- Additional Context: Tax Deadlines or Reminders -->
    <div class="bg-red-50 border-l-4 border-[#940000] p-4 rounded-r-lg">
        <div class="flex">
            <div class="flex-shrink-0">
                <svg class="h-5 w-5 text-[#940000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                </svg>
            </div>
            <div class="ml-3">
                <p class="text-sm text-[#940000] font-bold uppercase tracking-wider">Upcoming Submission Deadline</p>
                <p class="text-sm text-[#940000] mt-1 opacity-90">Remember to submit PAYE returns to TRA by the 7th of March to avoid penalties. Automatic submission integration is pending for this month.</p>
            </div>
        </div>
    </div>
</div>
@endsection
