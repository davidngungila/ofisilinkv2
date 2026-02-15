@extends('layouts.app')

@section('title', $title . ' - OfisiLink')
@section('page-title', $title)

@section('content')
<div class="space-y-6">
    <!-- Breadcrumb -->
    <div class="flex items-center space-x-2 text-sm text-gray-600">
        <a href="{{ route('dashboard') }}" class="hover:text-[#940000]">Dashboard</a>
        <span>/</span>
        <a href="#" class="hover:text-[#940000]">Human Resources</a>
        <span>/</span>
        <span class="text-gray-900 font-medium">Document Vault</span>
    </div>

    <!-- Storage Info & Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex items-center space-x-6">
            <div class="w-16 h-16 rounded-2xl bg-red-50 flex items-center justify-center text-[#940000]">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
            </div>
            <div>
                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Total Repository</p>
                <h4 class="text-2xl font-black text-gray-900 tracking-tight">2.4 GB</h4>
                <div class="w-32 h-1 bg-gray-100 rounded-full mt-2 overflow-hidden">
                    <div class="h-full bg-[#940000] w-[45%]"></div>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex items-center space-x-6">
            <div class="w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-600">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
            <div>
                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Total Documents</p>
                <h4 class="text-2xl font-black text-gray-900 tracking-tight">1,280</h4>
                <p class="text-[10px] text-blue-400 font-bold mt-1 uppercase">85 New This Week</p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 flex items-center space-x-6">
            <div class="w-16 h-16 rounded-2xl bg-green-50 flex items-center justify-center text-green-600">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V7M8 7h12m0 0v8a2 2 0 01-2 2h-3.414a1 1 0 01-.707-.293l-4.414-4.414A1 1 0 0110 12V7h10z"></path>
                </svg>
            </div>
            <div>
                <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest mb-1">Security Score</p>
                <h4 class="text-2xl font-black text-gray-900 tracking-tight">A+</h4>
                <p class="text-[10px] text-green-600 font-bold mt-1 uppercase">Encrypted Storage</p>
            </div>
        </div>
    </div>

    <!-- Document Browser -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-8 border-b border-gray-100 flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0 bg-gray-50/30">
            <div>
                <h2 class="text-2xl font-black text-gray-900 tracking-tight uppercase">Document Repository</h2>
                <p class="text-sm text-gray-500 mt-1">Centralized, secure storage for all HR-related legal and administrative files.</p>
            </div>
            <div class="flex items-center space-x-3">
                <button class="px-5 py-2.5 border-2 border-gray-200 rounded-xl text-sm font-black text-gray-700 hover:border-[#940000] hover:text-[#940000] transition-all flex items-center shadow-sm">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    New Category
                </button>
                <button class="px-5 py-2.5 bg-[#940000] text-white rounded-xl text-sm font-black shadow-lg hover:bg-[#7a0000] transition-all transform hover:-translate-y-1 active:translate-y-0 flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                    </svg>
                    Upload Documents
                </button>
            </div>
        </div>

        <!-- Directory Grid -->
        <div class="p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Folder 1 -->
                <div class="group p-6 bg-white border border-gray-100 rounded-2xl hover:shadow-xl hover:border-[#940000]/20 transition-all cursor-pointer relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-[#940000]/5 rounded-full -mr-12 -mt-12 transition-all group-hover:bg-[#940000]/10"></div>
                    <div class="w-12 h-12 rounded-xl bg-red-50 flex items-center justify-center text-[#940000] mb-4">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-black text-gray-900 group-hover:text-[#940000] transition-colors mb-1">Employment Contracts</h3>
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-tighter">482 Files | 1.2 GB</p>
                </div>

                <!-- Folder 2 -->
                <div class="group p-6 bg-white border border-gray-100 rounded-2xl hover:shadow-xl hover:border-blue-600/20 transition-all cursor-pointer relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-blue-600/5 rounded-full -mr-12 -mt-12 transition-all group-hover:bg-blue-600/10"></div>
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 mb-4">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-black text-gray-900 group-hover:text-blue-600 transition-colors mb-1">Policy & Guidelines</h3>
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-tighter">45 Files | 85 MB</p>
                </div>

                <!-- Folder 3 -->
                <div class="group p-6 bg-white border border-gray-100 rounded-2xl hover:shadow-xl hover:border-green-600/20 transition-all cursor-pointer relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-green-600/5 rounded-full -mr-12 -mt-12 transition-all group-hover:bg-green-600/10"></div>
                    <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center text-green-600 mb-4">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-black text-gray-900 group-hover:text-green-600 transition-colors mb-1">Statutory Documents</h3>
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-tighter">156 Files | 340 MB</p>
                </div>

                <!-- Folder 4 -->
                <div class="group p-6 bg-white border border-gray-100 rounded-2xl hover:shadow-xl hover:border-purple-600/20 transition-all cursor-pointer relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-purple-600/5 rounded-full -mr-12 -mt-12 transition-all group-hover:bg-purple-600/10"></div>
                    <div class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center text-purple-600 mb-4">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path>
                        </svg>
                    </div>
                    <h3 class="text-sm font-black text-gray-900 group-hover:text-purple-600 transition-colors mb-1">Company Archieve</h3>
                    <p class="text-[10px] text-gray-400 font-bold uppercase tracking-tighter">597 Files | 1.8 GB</p>
                </div>
            </div>
            
            <div class="mt-8 pt-8 border-t border-gray-50 flex items-center justify-between">
                <p class="text-[10px] text-gray-400 font-black uppercase tracking-[0.2em] italic">Automated Indexing System Active | Vault v3.0</p>
                <div class="flex items-center space-x-2">
                    <span class="flex items-center text-[10px] font-black text-green-600 uppercase">
                        <div class="w-2 h-2 rounded-full bg-green-500 mr-2 animate-pulse"></div>
                        Server Healthy
                    </span>
                    <span class="text-gray-300">|</span>
                    <span class="text-[10px] font-black text-gray-400 uppercase">Backup: 2 Hours Ago</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
