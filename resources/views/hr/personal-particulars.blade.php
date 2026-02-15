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
        <span class="text-gray-900 font-medium">Employee Profile</span>
    </div>

    <!-- Employee Profile Header -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="bg-gradient-to-br from-[#940000] via-[#800000] to-[#600000] p-8 relative overflow-hidden">
            <!-- Decorative background elements -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -mr-20 -mt-20 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-48 h-48 bg-black/10 rounded-full -ml-10 -mb-10 blur-2xl"></div>
            
            <div class="flex flex-col md:flex-row md:items-center relative z-10">
                <div class="flex items-center space-x-6 mb-6 md:mb-0">
                    <div class="relative">
                        <div class="w-32 h-32 rounded-3xl bg-white p-1 shadow-2xl rotate-3 transform transition-transform hover:rotate-0 duration-500">
                            <div class="w-full h-full rounded-2xl bg-gray-100 flex items-center justify-center text-[#940000] text-4xl font-black">
                                JD
                            </div>
                        </div>
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 border-4 border-white rounded-full shadow-lg" title="Active Employee"></div>
                    </div>
                    <div>
                        <div class="flex items-center space-x-3">
                            <h2 class="text-3xl font-black text-white tracking-tight">John Doe</h2>
                            <span class="px-2 py-0.5 bg-white/20 text-white text-[10px] font-black uppercase tracking-widest rounded-full backdrop-blur-md">Full-Time</span>
                        </div>
                        <p class="text-red-100 font-medium mt-1">Senior Accountant | Finance Department</p>
                        <div class="flex items-center space-x-4 mt-4">
                            <div class="flex items-center text-red-100 text-sm">
                                <svg class="w-4 h-4 mr-1.5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                john.doe@ofisilink.com
                            </div>
                            <div class="flex items-center text-red-100 text-sm">
                                <svg class="w-4 h-4 mr-1.5 opacity-70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 014 0"></path>
                                </svg>
                                EMP-001
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center md:ml-auto space-x-3">
                    <button class="px-5 py-2.5 bg-white text-[#940000] rounded-xl text-sm font-black shadow-lg hover:bg-gray-50 transition-all transform hover:-translate-y-1 active:translate-y-0 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Edit Profile
                    </button>
                </div>
            </div>
        </div>

        <!-- Navigation Tabs -->
        <div class="border-b border-gray-100 bg-gray-50/50">
            <nav class="flex px-8" role="tablist">
                <button type="button" role="tab" data-tab="personal" class="px-6 py-4 text-sm font-black uppercase tracking-widest text-[#940000] border-b-4 border-[#940000] transition-all">Overview</button>
                <button type="button" role="tab" data-tab="contact" class="px-6 py-4 text-sm font-bold uppercase tracking-widest text-gray-400 hover:text-gray-600 transition-all">Contact Info</button>
                <button type="button" role="tab" data-tab="employment" class="px-6 py-4 text-sm font-bold uppercase tracking-widest text-gray-400 hover:text-gray-600 transition-all">Work Details</button>
                <button type="button" role="tab" data-tab="emergency" class="px-6 py-4 text-sm font-bold uppercase tracking-widest text-gray-400 hover:text-gray-600 transition-all">Security</button>
                <button type="button" role="tab" data-tab="documents" class="px-6 py-4 text-sm font-bold uppercase tracking-widest text-gray-400 hover:text-gray-600 transition-all">Vault</button>
            </nav>
        </div>

        <div class="p-8">
            <!-- Personal Information Content -->
            <div data-tab-content="personal">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-2 space-y-8">
                        <div>
                            <h3 class="text-xs font-black text-gray-400 uppercase tracking-[0.2em] mb-4">Bio Data</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-6 gap-x-12">
                                <div class="group">
                                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1 group-hover:text-[#940000] transition-colors">Date of Birth</label>
                                    <p class="text-sm font-bold text-gray-900">January 15, 1990 (35 Years)</p>
                                </div>
                                <div class="group">
                                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1 group-hover:text-[#940000] transition-colors">Nationality</label>
                                    <p class="text-sm font-bold text-gray-900">Tanzanian</p>
                                </div>
                                <div class="group">
                                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1 group-hover:text-[#940000] transition-colors">NIN / National ID</label>
                                    <p class="text-sm font-bold text-gray-900 font-mono">19900115-12345-00001-22</p>
                                </div>
                                <div class="group">
                                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1 group-hover:text-[#940000] transition-colors">Marital Status</label>
                                    <p class="text-sm font-bold text-gray-900">Married</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-xs font-black text-gray-400 uppercase tracking-[0.2em] mb-4">Identification & Tax</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-6 gap-x-12">
                                <div class="group">
                                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1 group-hover:text-[#940000] transition-colors">TIN Number</label>
                                    <p class="text-sm font-bold text-gray-900 font-mono">123-456-789</p>
                                </div>
                                <div class="group">
                                    <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1 group-hover:text-[#940000] transition-colors">NSSF Number</label>
                                    <p class="text-sm font-bold text-gray-900 font-mono">NSSF/2020/9988</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100">
                            <h4 class="text-xs font-black text-gray-400 uppercase tracking-widest mb-4">Internal Stats</h4>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-bold text-gray-500">Service Duration</span>
                                    <span class="text-xs font-black text-[#940000]">5.2 Years</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-bold text-gray-500">Attendance Rate</span>
                                    <span class="text-xs font-black text-green-600">98.4%</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-bold text-gray-500">Late Arrivals</span>
                                    <span class="text-xs font-black text-orange-500">2 (YTD)</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-red-50 rounded-2xl p-6 border border-red-100">
                            <h4 class="text-xs font-black text-[#940000] uppercase tracking-widest mb-2">Next Review</h4>
                            <p class="text-lg font-black text-gray-900">March 15, 2025</p>
                            <p class="text-[10px] text-[#940000] font-bold mt-1 uppercase tracking-tighter">Annual Performance Cycle</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other tabs follow same structure (hidden by default) -->
            <div data-tab-content="contact" class="hidden">
                 <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Personal Email</label>
                        <p class="text-sm font-bold text-gray-900">john.doe.personal@gmail.com</p>
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Work Phone</label>
                        <p class="text-sm font-bold text-gray-900">+255 754 123 456</p>
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Residential Address</label>
                        <p class="text-sm font-bold text-gray-900">Plot 45, Masaki, Dar es Salaam</p>
                    </div>
                 </div>
            </div>
            
            <div data-tab-content="employment" class="hidden">
                 <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Date of Joining</label>
                        <p class="text-sm font-bold text-gray-900">January 15, 2020</p>
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Provisional Period</label>
                        <p class="text-sm font-bold text-green-600">PASSED (Apr 2020)</p>
                    </div>
                    <div>
                        <label class="block text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Reporting Manager</label>
                        <p class="text-sm font-bold text-gray-900">Sarah Johnson (Director of Finance)</p>
                    </div>
                 </div>
            </div>
        </div>
    </div>

    <!-- Bottom Quick Metrics -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-all">
            <p class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] mb-2">Leave Available</p>
            <div class="flex items-end justify-between">
                <p class="text-2xl font-black text-blue-600">18 Days</p>
                <span class="text-[10px] font-bold text-gray-400 pb-1">Annual Balance</span>
            </div>
        </div>
        <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-all">
            <p class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] mb-2">Benefit Tier</p>
            <div class="flex items-end justify-between">
                <p class="text-2xl font-black text-purple-600">Tier III</p>
                <span class="text-[10px] font-bold text-gray-400 pb-1">Senior Level</span>
            </div>
        </div>
        <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-all">
            <p class="text-[10px] font-black text-gray-400 uppercase tracking-[0.2em] mb-2">Performance</p>
            <div class="flex items-end justify-between">
                <p class="text-2xl font-black text-yellow-600">4.8 / 5.0</p>
                <span class="text-[10px] font-bold text-gray-400 pb-1">LTM Score</span>
            </div>
        </div>
        <div class="bg-white rounded-2xl shadow-sm p-6 border border-gray-100 hover:shadow-md transition-all text-center flex items-center justify-center">
             <button class="w-full h-full py-2 bg-gray-50 border border-gray-100 rounded-xl text-xs font-black uppercase text-gray-500 hover:bg-[#940000] hover:text-white transition-all">
                 Generate Org Chart
             </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('[role="tab"]');
        const contents = document.querySelectorAll('[data-tab-content]');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = tab.getAttribute('data-tab');

                // Update tab styles
                tabs.forEach(t => {
                    t.classList.remove('text-[#940000]', 'border-[#940000]', 'border-b-4');
                    t.classList.add('text-gray-400');
                });
                tab.classList.add('text-[#940000]', 'border-[#940000]', 'border-b-4');
                tab.classList.remove('text-gray-400');

                // Update content visibility
                contents.forEach(content => {
                    if (content.getAttribute('data-tab-content') === target) {
                        content.classList.remove('hidden');
                    } else {
                        content.classList.add('hidden');
                    }
                });
            });
        });
    });
</script>
@endsection
