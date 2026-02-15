@extends('layouts.app')

@section('title', $title . ' - OfisiLink')
@section('page-title', $title)

@section('content')
<div class="space-y-6">
    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-200">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold text-gray-800">{{ $title }}</h2>
            <button class="btn-primary px-4 py-2 rounded-lg text-sm font-medium">
                <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Register Asset
            </button>
        </div>
        
        <div class="bg-gray-50 rounded-lg p-6">
            <p class="text-gray-600 text-center py-8">Content for {{ $title }} will be displayed here.</p>
            <p class="text-sm text-gray-500 text-center">Track assets from procurement to disposal with assignments, maintenance, and issue management.</p>
        </div>
    </div>
</div>
@endsection

