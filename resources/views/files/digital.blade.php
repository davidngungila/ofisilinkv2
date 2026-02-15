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
                    <p class="text-sm text-gray-600 mb-1">Total Files</p>
                    <p class="text-2xl font-bold text-[#940000]">1,247</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-red-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#940000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Total Size</p>
                    <p class="text-2xl font-bold text-blue-600">2.4 GB</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Shared Files</p>
                    <p class="text-2xl font-bold text-green-600">342</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Pending Approval</p>
                    <p class="text-2xl font-bold text-yellow-600">18</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-yellow-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- View Toggle -->
    <div class="bg-white rounded-lg shadow-sm p-4 border border-gray-200">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <button class="px-4 py-2 bg-[#940000] text-white rounded-lg text-sm font-medium">Grid View</button>
                <button class="px-4 py-2 text-gray-600 hover:bg-gray-50 rounded-lg text-sm font-medium">List View</button>
            </div>
            <div class="flex items-center space-x-3">
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                    </svg>
                    Filter
                </button>
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50 flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                    Sort
                </button>
                <button class="px-4 py-2 bg-[#940000] text-white rounded-lg text-sm font-medium hover:bg-[#7a0000] transition-colors flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Upload File
                </button>
            </div>
        </div>
    </div>

    <!-- Search and Filters -->
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
        <div class="flex flex-col md:flex-row md:items-center space-y-3 md:space-y-0 md:space-x-4">
            <div class="flex-1">
                <div class="relative">
                    <input type="text" placeholder="Search files by name, type, or tags..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
            <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                <option value="">All Categories</option>
                <option value="documents">Documents</option>
                <option value="images">Images</option>
                <option value="videos">Videos</option>
                <option value="spreadsheets">Spreadsheets</option>
                <option value="presentations">Presentations</option>
            </select>
            <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                <option value="">All Departments</option>
                <option value="finance">Finance</option>
                <option value="hr">Human Resources</option>
                <option value="it">IT</option>
                <option value="admin">Administration</option>
            </select>
            <select class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                <option value="">All Status</option>
                <option value="approved">Approved</option>
                <option value="pending">Pending</option>
                <option value="archived">Archived</option>
            </select>
        </div>
    </div>

    <!-- Files Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- File Card 1 -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition-shadow overflow-hidden">
            <div class="p-4 bg-blue-50 flex items-center justify-center h-32">
                <svg class="w-16 h-16 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
            <div class="p-4">
                <h3 class="text-sm font-semibold text-gray-900 truncate mb-1">Annual Report 2024.pdf</h3>
                <p class="text-xs text-gray-500 mb-2">2.4 MB • Updated 2 days ago</p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <div class="w-6 h-6 rounded-full bg-[#940000] flex items-center justify-center text-white text-xs font-semibold">JD</div>
                        <span class="text-xs text-gray-600">John Doe</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <button class="p-1.5 text-gray-400 hover:text-[#940000] transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                            </svg>
                        </button>
                        <button class="p-1.5 text-gray-400 hover:text-[#940000] transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- File Card 2 -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition-shadow overflow-hidden">
            <div class="p-4 bg-green-50 flex items-center justify-center h-32">
                <svg class="w-16 h-16 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            </div>
            <div class="p-4">
                <h3 class="text-sm font-semibold text-gray-900 truncate mb-1">Company Logo.png</h3>
                <p class="text-xs text-gray-500 mb-2">856 KB • Updated 1 week ago</p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <div class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center text-white text-xs font-semibold">JS</div>
                        <span class="text-xs text-gray-600">Jane Smith</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <button class="p-1.5 text-gray-400 hover:text-[#940000] transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                            </svg>
                        </button>
                        <button class="p-1.5 text-gray-400 hover:text-[#940000] transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- File Card 3 -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition-shadow overflow-hidden">
            <div class="p-4 bg-yellow-50 flex items-center justify-center h-32">
                <svg class="w-16 h-16 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
            <div class="p-4">
                <h3 class="text-sm font-semibold text-gray-900 truncate mb-1">Budget Q1 2025.xlsx</h3>
                <p class="text-xs text-gray-500 mb-2">1.2 MB • Updated 3 days ago</p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <div class="w-6 h-6 rounded-full bg-green-500 flex items-center justify-center text-white text-xs font-semibold">MB</div>
                        <span class="text-xs text-gray-600">Mike Brown</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <button class="p-1.5 text-gray-400 hover:text-[#940000] transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                            </svg>
                        </button>
                        <button class="p-1.5 text-gray-400 hover:text-[#940000] transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- File Card 4 -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition-shadow overflow-hidden">
            <div class="p-4 bg-purple-50 flex items-center justify-center h-32">
                <svg class="w-16 h-16 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                </svg>
            </div>
            <div class="p-4">
                <h3 class="text-sm font-semibold text-gray-900 truncate mb-1">Presentation Deck.pptx</h3>
                <p class="text-xs text-gray-500 mb-2">3.8 MB • Updated 5 days ago</p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <div class="w-6 h-6 rounded-full bg-purple-500 flex items-center justify-center text-white text-xs font-semibold">AW</div>
                        <span class="text-xs text-gray-600">Alice Wilson</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <button class="p-1.5 text-gray-400 hover:text-[#940000] transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                            </svg>
                        </button>
                        <button class="p-1.5 text-gray-400 hover:text-[#940000] transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
        <div class="flex items-center justify-between">
            <div class="text-sm text-gray-600">
                Showing <span class="font-medium">1</span> to <span class="font-medium">4</span> of <span class="font-medium">1,247</span> files
            </div>
            <div class="flex items-center space-x-2">
                <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-50 disabled:opacity-50" disabled>Previous</button>
                <button class="px-3 py-2 bg-[#940000] text-white rounded-lg text-sm font-medium">1</button>
                <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-50">2</button>
                <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-50">3</button>
                <button class="px-3 py-2 border border-gray-300 rounded-lg text-sm text-gray-700 hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection
