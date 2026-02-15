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

    <!-- Company Information -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">Company Information</h2>
            <p class="text-sm text-gray-600 mt-1">Manage your company details and branding</p>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Company Name *</label>
                    <input type="text" value="Office Management System" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Company Registration Number</label>
                    <input type="text" value="RC-123456" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Company Email *</label>
                    <input type="email" value="info@company.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Company Phone</label>
                    <input type="tel" value="+255 123 456 789" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Company Address</label>
                    <textarea rows="3" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">123 Business Street, Dar es Salaam, Tanzania</textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">City</label>
                    <input type="text" value="Dar es Salaam" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Country</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                        <option selected>Tanzania</option>
                        <option>Kenya</option>
                        <option>Uganda</option>
                        <option>Rwanda</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Branding -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">Branding</h2>
            <p class="text-sm text-gray-600 mt-1">Customize your application branding</p>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Application Name</label>
                    <input type="text" value="Office Management System" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Application Logo</label>
                    <div class="flex items-center space-x-4">
                        <div class="w-20 h-20 bg-white border-2 border-gray-300 rounded-lg flex items-center justify-center">
                            <img src="{{ asset('office_link_logo.png') }}" alt="Logo" class="max-w-full max-h-full">
                        </div>
                        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Upload Logo
                        </button>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Favicon</label>
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 bg-gray-100 border-2 border-gray-300 rounded flex items-center justify-center">
                            <span class="text-xs text-gray-500">Favicon</span>
                        </div>
                        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Upload Favicon
                        </button>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Primary Color</label>
                    <div class="flex items-center space-x-3">
                        <input type="color" value="#940000" class="w-16 h-10 border border-gray-300 rounded-lg cursor-pointer">
                        <input type="text" value="#940000" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Localization -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">Localization</h2>
            <p class="text-sm text-gray-600 mt-1">Configure language, timezone, and date formats</p>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Default Language</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                        <option>English (US)</option>
                        <option>English (UK)</option>
                        <option>French</option>
                        <option>Spanish</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Timezone *</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                        <option selected>Africa/Dar_es_Salaam (EAT) UTC+3</option>
                        <option>Africa/Nairobi (EAT) UTC+3</option>
                        <option>Africa/Kampala (EAT) UTC+3</option>
                        <option>Africa/Lagos (WAT) UTC+1</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Date Format</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                        <option>DD/MM/YYYY</option>
                        <option>MM/DD/YYYY</option>
                        <option>YYYY-MM-DD</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Time Format</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                        <option>12 Hour (AM/PM)</option>
                        <option>24 Hour</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Currency</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                        <option selected>Tanzanian Shilling (TSh)</option>
                        <option>US Dollar ($)</option>
                        <option>British Pound (£)</option>
                        <option>Kenyan Shilling (KES)</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Currency Position</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#940000] focus:border-transparent">
                        <option>Before amount (TSh 100)</option>
                        <option selected>After amount (100 TSh)</option>
                    </select>
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

