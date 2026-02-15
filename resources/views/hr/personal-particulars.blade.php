@extends('layouts.app')

@section('title', $title . ' - Office Management')
@section('page-title', $title)

@section('content')
<div class="space-y-6">
    <!-- Employee Profile Header -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
        <div class="bg-gradient-to-r from-[#940000] to-[#7a0000] p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div class="flex items-center space-x-4 mb-4 md:mb-0">
                    <div class="w-20 h-20 rounded-full bg-white flex items-center justify-center text-[#940000] text-2xl font-bold border-4 border-white shadow-lg">
                        JD
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-white">John Doe</h2>
                        <p class="text-red-100">Employee ID: EMP-001 | Finance Department</p>
                        <p class="text-red-100 text-sm">Senior Accountant</p>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <button class="px-4 py-2 bg-white text-[#940000] rounded-lg text-sm font-medium hover:bg-gray-100 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Edit Details
                    </button>
                    <button class="px-4 py-2 bg-white text-[#940000] rounded-lg text-sm font-medium hover:bg-gray-100 transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Export
                    </button>
                </div>
            </div>
        </div>

        <!-- Tabs -->
        <div class="border-b border-gray-200">
            <nav class="flex -mb-px" role="tablist">
                <button type="button" role="tab" data-tab="personal" class="px-6 py-4 text-sm font-medium text-[#940000] border-b-2 border-[#940000]">Personal Information</button>
                <button type="button" role="tab" data-tab="contact" class="px-6 py-4 text-sm font-medium text-gray-600 hover:text-gray-800">Contact Details</button>
                <button type="button" role="tab" data-tab="employment" class="px-6 py-4 text-sm font-medium text-gray-600 hover:text-gray-800">Employment Details</button>
                <button type="button" role="tab" data-tab="emergency" class="px-6 py-4 text-sm font-medium text-gray-600 hover:text-gray-800">Emergency Contacts</button>
                <button type="button" role="tab" data-tab="documents" class="px-6 py-4 text-sm font-medium text-gray-600 hover:text-gray-800">Documents</button>
            </nav>
        </div>

        <!-- Personal Information Content -->
        <div class="p-6" data-tab-content="personal">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <p class="text-gray-900 font-semibold">John Doe</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Date of Birth</label>
                    <p class="text-gray-900 font-semibold">January 15, 1990</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Gender</label>
                    <p class="text-gray-900 font-semibold">Male</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Nationality</label>
                    <p class="text-gray-900 font-semibold">Tanzanian</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Marital Status</label>
                    <p class="text-gray-900 font-semibold">Married</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">National ID Number</label>
                    <p class="text-gray-900 font-semibold">12345678901</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Tax ID Number</label>
                    <p class="text-gray-900 font-semibold">TAX-123456</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Blood Group</label>
                    <p class="text-gray-900 font-semibold">O+</p>
                </div>
            </div>
        </div>

        <!-- Contact Details Content -->
        <div class="p-6 hidden" data-tab-content="contact">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <p class="text-gray-900 font-semibold">john.doe@company.com</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                    <p class="text-gray-900 font-semibold">+234 123 456 7890</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Alternate Phone</label>
                    <p class="text-gray-900 font-semibold">+234 987 654 3210</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                    <p class="text-gray-900 font-semibold">123 Main Street, Lagos</p>
                </div>
            </div>
        </div>

        <!-- Employment Details Content -->
        <div class="p-6 hidden" data-tab-content="employment">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Employee ID</label>
                    <p class="text-gray-900 font-semibold">EMP-001</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Department</label>
                    <p class="text-gray-900 font-semibold">Finance</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Position</label>
                    <p class="text-gray-900 font-semibold">Senior Accountant</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Date of Joining</label>
                    <p class="text-gray-900 font-semibold">January 15, 2020</p>
                </div>
            </div>
        </div>

        <!-- Emergency Contacts Content -->
        <div class="p-6 hidden" data-tab-content="emergency">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Emergency Contact Name</label>
                    <p class="text-gray-900 font-semibold">Jane Doe</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Relationship</label>
                    <p class="text-gray-900 font-semibold">Spouse</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Emergency Phone</label>
                    <p class="text-gray-900 font-semibold">+234 111 222 3333</p>
                </div>
            </div>
        </div>

        <!-- Documents Content -->
        <div class="p-6 hidden" data-tab-content="documents">
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <p class="text-sm font-semibold text-gray-900">Resume</p>
                        <p class="text-xs text-gray-600">Uploaded on Jan 15, 2020</p>
                    </div>
                    <button class="px-3 py-1.5 text-[#940000] border border-[#940000] rounded text-sm font-medium hover:bg-[#940000] hover:text-white transition-colors">
                        Download
                    </button>
                </div>
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div>
                        <p class="text-sm font-semibold text-gray-900">ID Card Copy</p>
                        <p class="text-xs text-gray-600">Uploaded on Jan 15, 2020</p>
                    </div>
                    <button class="px-3 py-1.5 text-[#940000] border border-[#940000] rounded text-sm font-medium hover:bg-[#940000] hover:text-white transition-colors">
                        Download
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Years of Service</p>
                    <p class="text-2xl font-bold text-[#940000]">5.2</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-red-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#940000]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Leave Balance</p>
                    <p class="text-2xl font-bold text-blue-600">18 days</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Attendance Rate</p>
                    <p class="text-2xl font-bold text-green-600">96%</p>
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
                    <p class="text-sm text-gray-600 mb-1">Performance Score</p>
                    <p class="text-2xl font-bold text-yellow-600">4.5/5</p>
                </div>
                <div class="w-12 h-12 rounded-lg bg-yellow-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
