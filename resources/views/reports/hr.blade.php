@extends('layouts.app')

@section('title', $title . ' - Office Management')
@section('page-title', $title)

@section('content')
<div class="space-y-6">
    <!-- Breadcrumb -->
    <div class="flex items-center space-x-2 text-sm text-gray-600">
        <a href="{{ route('dashboard') }}" class="hover:text-[#940000]">Dashboard</a>
        <span>/</span>
        <a href="#" class="hover:text-[#940000]">Reporting</a>
        <span>/</span>
        <span class="text-gray-900 font-medium">{{ $title }}</span>
    </div>

    <!-- Analytics Overview -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Turnover Rate -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <div class="w-10 h-10 rounded-lg bg-orange-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <span class="text-xs font-bold text-orange-600 bg-orange-50 px-2 py-1 rounded">-1.2%</span>
            </div>
            <h3 class="text-sm font-medium text-gray-500">Employee Turnover</h3>
            <p class="text-2xl font-bold text-gray-900 mt-1">4.8%</p>
            <div class="mt-4 flex items-center text-xs text-gray-500">
                <span class="font-bold text-green-600 mr-1">↑ 2.1%</span> vs last quarter
            </div>
        </div>

        <!-- Satisfaction Score -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <div class="w-10 h-10 rounded-lg bg-red-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#940000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <span class="text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded">+0.4</span>
            </div>
            <h3 class="text-sm font-medium text-gray-500">Employee Satisfaction</h3>
            <p class="text-2xl font-bold text-gray-900 mt-1">4.2 / 5.0</p>
            <div class="mt-4 flex items-center text-xs text-gray-500">
                <div class="flex text-yellow-400">
                    <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <svg class="w-3 h-3 fill-current text-gray-300" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                </div>
                <span class="ml-2 font-medium">Based on annual survey</span>
            </div>
        </div>

        <!-- Hiring Velocity -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <div class="w-10 h-10 rounded-lg bg-green-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <span class="text-xs font-bold text-gray-400 bg-gray-50 px-2 py-1 rounded">Stable</span>
            </div>
            <h3 class="text-sm font-medium text-gray-500">Average Time to Hire</h3>
            <p class="text-2xl font-bold text-gray-900 mt-1">24 Days</p>
            <div class="mt-4 flex items-center text-xs text-gray-500">
                <span class="font-bold text-gray-700 mr-1">Target:</span> 21 Days or less
            </div>
        </div>

        <!-- Training Hours -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-4">
                <div class="w-10 h-10 rounded-lg bg-purple-50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <span class="text-xs font-bold text-purple-600 bg-purple-50 px-2 py-1 rounded">+15%</span>
            </div>
            <h3 class="text-sm font-medium text-gray-500">Training Hours / Employee</h3>
            <p class="text-2xl font-bold text-gray-900 mt-1">12.5 hrs</p>
            <div class="mt-4 flex items-center text-xs text-gray-500">
                <span class="font-bold text-purple-600 mr-1">↑ 1.5h</span> from last month
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Growth Trend -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100 flex items-center justify-between bg-gray-50/30">
                <div>
                    <h3 class="text-lg font-bold text-gray-800">Headcount Growth</h3>
                    <p class="text-sm text-gray-500">Monthly evolution of total employees</p>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="flex items-center text-[10px] text-gray-500 font-bold uppercase">
                        <span class="w-2 h-2 rounded-full bg-[#940000] mr-1"></span>
                        Full-time
                    </span>
                    <span class="flex items-center text-[10px] text-gray-500 font-bold uppercase">
                        <span class="w-2 h-2 rounded-full bg-blue-300 mr-1"></span>
                        Contract
                    </span>
                </div>
            </div>
            <div class="p-6 h-64 flex items-end space-x-4">
                @foreach(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'] as $month)
                    <div class="flex-1 flex flex-col items-center group">
                        <div class="w-full relative flex items-end justify-center h-48 space-x-0.5">
                            <div class="bg-[#940000] rounded-t w-1.5 transition-all group-hover:bg-[#7a0000]" style="height: {{ rand(40, 95) }}%"></div>
                            <div class="bg-blue-300 rounded-t w-1.5 transition-all group-hover:bg-blue-400" style="height: {{ rand(10, 30) }}%"></div>
                        </div>
                        <span class="text-[10px] text-gray-400 font-bold mt-2 uppercase tracking-tighter">{{ $month }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Diversity & Inclusion -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100 bg-gray-50/30">
                <h3 class="text-lg font-bold text-gray-800">Gender Distribution</h3>
                <p class="text-sm text-gray-500">Organization diversity breakdown</p>
            </div>
            <div class="p-6">
                <div class="flex items-center justify-between mb-8 p-4 bg-gray-50 rounded-xl border border-gray-100">
                    <div class="text-center">
                        <p class="text-[10px] text-gray-500 uppercase font-black tracking-widest mb-1">Total</p>
                        <p class="text-xl font-black text-gray-900">156</p>
                    </div>
                    <div class="h-10 w-px bg-gray-200"></div>
                    <div class="text-center">
                        <p class="text-[10px] text-gray-500 uppercase font-black tracking-widest mb-1">Male</p>
                        <p class="text-xl font-black text-blue-600">82</p>
                        <p class="text-[10px] text-blue-400 font-bold">52.5%</p>
                    </div>
                    <div class="h-10 w-px bg-gray-200"></div>
                    <div class="text-center">
                        <p class="text-[10px] text-gray-500 uppercase font-black tracking-widest mb-1">Female</p>
                        <p class="text-xl font-black text-pink-500">74</p>
                        <p class="text-[10px] text-pink-400 font-bold">47.5%</p>
                    </div>
                </div>

                <div class="space-y-6">
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-bold text-gray-700">Leadership Role</span>
                            <span class="text-[10px] font-bold text-gray-400 uppercase">Target: 50%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-3 flex overflow-hidden">
                            <div class="bg-blue-500 h-full" style="width: 60%"></div>
                            <div class="bg-pink-500 h-full" style="width: 40%"></div>
                        </div>
                        <div class="flex justify-between mt-1">
                            <span class="text-[10px] font-bold text-blue-500 uppercase">Male (60%)</span>
                            <span class="text-[10px] font-bold text-pink-500 uppercase">Female (40%)</span>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-bold text-gray-700">Engineering Role</span>
                            <span class="text-[10px] font-bold text-gray-400 uppercase">Target: 40%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-3 flex overflow-hidden">
                            <div class="bg-blue-500 h-full" style="width: 75%"></div>
                            <div class="bg-pink-500 h-full" style="width: 25%"></div>
                        </div>
                        <div class="flex justify-between mt-1">
                            <span class="text-[10px] font-bold text-blue-500 uppercase">Male (75%)</span>
                            <span class="text-[10px] font-bold text-pink-500 uppercase">Female (25%)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Department Insights -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-6 border-b border-gray-100 flex items-center justify-between">
            <div>
                <h3 class="text-lg font-bold text-gray-800 uppercase tracking-tight">Department Performance Matrix</h3>
                <p class="text-sm text-gray-500 mt-1">Efficiency, attendance and cost metrics per unit</p>
            </div>
            <button class="px-4 py-2 bg-[#940000] text-white rounded-lg text-sm font-bold shadow-md hover:bg-[#7a0000] transition-all transform hover:-translate-y-0.5 active:translate-y-0">
                Generate Full HR Report
            </button>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50/50">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-widest">Department</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-500 uppercase tracking-widest">Employees</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-500 uppercase tracking-widest">Avg Attendance</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-500 uppercase tracking-widest">Performance</th>
                        <th class="px-6 py-4 text-right text-xs font-bold text-gray-500 uppercase tracking-widest">Monthly Cost</th>
                        <th class="px-6 py-4 text-center text-xs font-bold text-gray-500 uppercase tracking-widest">Efficiency</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <span class="w-2 h-2 rounded-full bg-blue-500 mr-3"></span>
                                <span class="text-sm font-bold text-gray-900 group-hover:text-[#940000] transition-colors">IT & Engineering</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-700">42</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="text-sm font-bold text-green-600">98%</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="flex items-center justify-center space-x-1">
                                <span class="text-sm font-bold text-gray-900">4.8</span>
                                <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-bold text-gray-900 font-mono">TSh 38.6M</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="w-24 bg-gray-100 rounded-full h-1.5 mx-auto">
                                <div class="bg-green-500 h-1.5 rounded-full" style="width: 92%"></div>
                            </div>
                            <span class="text-[10px] text-green-600 font-bold uppercase mt-1">High</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <span class="w-2 h-2 rounded-full bg-orange-500 mr-3"></span>
                                <span class="text-sm font-bold text-gray-900 group-hover:text-[#940000] transition-colors">Sales & Marketing</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-700">35</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="text-sm font-bold text-green-600">95%</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="flex items-center justify-center space-x-1">
                                <span class="text-sm font-bold text-gray-900">4.5</span>
                                <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-bold text-gray-900 font-mono">TSh 31.3M</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="w-24 bg-gray-100 rounded-full h-1.5 mx-auto">
                                <div class="bg-blue-500 h-1.5 rounded-full" style="width: 85%"></div>
                            </div>
                            <span class="text-[10px] text-blue-600 font-bold uppercase mt-1">Good</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors group">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <span class="w-2 h-2 rounded-full bg-[#940000] mr-3"></span>
                                <span class="text-sm font-bold text-gray-900 group-hover:text-[#940000] transition-colors">Operations</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-gray-700">50</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <span class="text-sm font-bold text-yellow-600">89%</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="flex items-center justify-center space-x-1">
                                <span class="text-sm font-bold text-gray-900">3.9</span>
                                <svg class="w-3 h-3 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-bold text-gray-900 font-mono">TSh 45.2M</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            <div class="w-24 bg-gray-100 rounded-full h-1.5 mx-auto">
                                <div class="bg-gray-400 h-1.5 rounded-full" style="width: 72%"></div>
                            </div>
                            <span class="text-[10px] text-gray-500 font-bold uppercase mt-1">Moderate</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
