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
        <span class="text-gray-900 font-medium">Internal Communication</span>
    </div>

    <!-- Communication Dashboard -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Message Compose / Quick Actions -->
        <div class="lg:col-span-1 space-y-6">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-lg font-black text-gray-900 uppercase tracking-tight mb-4">Broadcasting</h3>
                <div class="space-y-3">
                    <button class="w-full py-4 bg-[#940000] text-white rounded-xl text-sm font-black shadow-lg hover:bg-[#7a0000] transition-all transform hover:-translate-y-1 active:translate-y-0 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                        </svg>
                        New Announcement
                    </button>
                    <button class="w-full py-4 border-2 border-gray-100 text-gray-600 rounded-xl text-sm font-black hover:border-blue-600 hover:text-blue-600 transition-all flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V7M8 7h12m0 0v8a2 2 0 01-2 2h-3.414a1 1 0 01-.707-.293l-4.414-4.414A1 1 0 0110 12V7h10z"></path>
                        </svg>
                        Internal Memo
                    </button>
                </div>
            </div>

            <!-- Stats -->
            <div class="bg-gradient-to-br from-[#940000] to-[#600000] rounded-2xl shadow-xl p-8 text-white relative overflow-hidden">
                 <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16 blur-2xl"></div>
                 <h4 class="text-xs font-black uppercase tracking-[0.2em] mb-4 opacity-70">Engagement Stats</h4>
                 <div class="space-y-6 relative z-10">
                    <div>
                        <div class="flex items-center justify-between mb-2">
                             <span class="text-sm font-bold">Read Receipt Rate</span>
                             <span class="text-sm font-black">94%</span>
                        </div>
                        <div class="h-1.5 w-full bg-white/20 rounded-full overflow-hidden">
                            <div class="h-full bg-white w-[94%]"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between mb-2">
                             <span class="text-sm font-bold">Policy Acceptance</span>
                             <span class="text-sm font-black">88%</span>
                        </div>
                        <div class="h-1.5 w-full bg-white/20 rounded-full overflow-hidden">
                            <div class="h-full bg-white w-[88%]"></div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>

        <!-- Recent Communications Feed -->
        <div class="lg:col-span-2 space-y-6">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="p-6 border-b border-gray-100 flex items-center justify-between bg-gray-50/50">
                    <h3 class="text-lg font-black text-gray-900 uppercase tracking-tight">Recent Announcements</h3>
                    <span class="text-[10px] font-black bg-red-100 text-[#940000] px-2 py-1 rounded-lg uppercase">System Live</span>
                </div>
                <div class="divide-y divide-gray-100">
                    <!-- Comm 1 -->
                    <div class="p-8 hover:bg-gray-50 transition-colors cursor-pointer group">
                        <div class="flex items-start space-x-6">
                            <div class="w-12 h-12 rounded-2xl bg-red-50 flex-shrink-0 flex items-center justify-center text-[#940000]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-1">
                                    <h4 class="text-base font-black text-gray-900 group-hover:text-[#940000] transition-colors">Quarterly General Meeting</h4>
                                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">2 Hours Ago</span>
                                </div>
                                <p class="text-sm text-gray-500 leading-relaxed line-clamp-2 italic">"Dear Team, we will be hosting our Q1 general meeting this Friday at 10:00 AM in the main conference hall..."</p>
                                <div class="mt-4 flex items-center space-x-4">
                                    <span class="flex items-center text-[10px] font-black text-gray-400 uppercase">
                                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        124 Views
                                    </span>
                                    <span class="flex items-center text-[10px] font-black text-blue-600 uppercase">
                                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        Important
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Comm 2 -->
                    <div class="p-8 hover:bg-gray-50 transition-colors cursor-pointer group">
                        <div class="flex items-start space-x-6">
                            <div class="w-12 h-12 rounded-2xl bg-blue-50 flex-shrink-0 flex items-center justify-center text-blue-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-1">
                                    <h4 class="text-base font-black text-gray-900 group-hover:text-blue-600 transition-colors">Updated HR Policy - 2025</h4>
                                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Yesterday</span>
                                </div>
                                <p class="text-sm text-gray-500 leading-relaxed line-clamp-2 italic">"Internal Memo: Following our latest review, the staff handbook has been updated to include remote work guidelines..."</p>
                                <div class="mt-4 flex items-center space-x-4">
                                    <span class="flex items-center text-[10px] font-black text-gray-400 uppercase">
                                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        156 Views
                                    </span>
                                    <span class="flex items-center text-[10px] font-black text-green-600 uppercase">
                                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                        Action Required
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-8 py-4 bg-gray-50/50 text-center border-t border-gray-100">
                    <button class="text-[10px] font-black text-gray-400 uppercase tracking-widest hover:text-[#940000] transition-colors">Load Archive Communications</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
