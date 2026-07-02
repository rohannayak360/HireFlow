<x-layouts.dashboard title="Applied Jobs">
    <div class="w-full">
        <!-- Breadcrumbs -->
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm text-gray-500">
                <li><a href="{{ route('candidate.dashboard') }}" class="hover:text-primary transition-colors">Dashboard</a></li>
                <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
                <li class="font-medium text-gray-900" aria-current="page">Applied Jobs</li>
            </ol>
        </nav>

        <!-- Page Header -->
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 tracking-tight mb-2">My Applications</h1>
                <p class="text-gray-500 text-sm max-w-2xl">Track and manage all your job applications in one place. Keep your profile updated to improve your chances.</p>
            </div>
            <div class="flex gap-3 shrink-0">
                <x-ui.button variant="secondary" icon="fa-solid fa-download">Export</x-ui.button>
                <x-ui.button variant="primary" icon="fa-solid fa-magnifying-glass">Find Jobs</x-ui.button>
            </div>
        </div>

        <!-- Application Statistics -->
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4 mb-8">
            <!-- Stat 1 -->
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden group">
                <div class="absolute -right-4 -top-4 w-16 h-16 bg-blue-50 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="flex items-center gap-3 mb-2 relative z-10">
                    <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-paper-plane text-sm"></i>
                    </div>
                    <span class="text-sm font-semibold text-gray-500">Total Applied</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 relative z-10">24</h3>
            </div>
            
            <!-- Stat 2 -->
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden group">
                <div class="absolute -right-4 -top-4 w-16 h-16 bg-amber-50 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="flex items-center gap-3 mb-2 relative z-10">
                    <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-eye text-sm"></i>
                    </div>
                    <span class="text-sm font-semibold text-gray-500">Under Review</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 relative z-10">8</h3>
            </div>
            
            <!-- Stat 3 -->
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden group">
                <div class="absolute -right-4 -top-4 w-16 h-16 bg-primary/10 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="flex items-center gap-3 mb-2 relative z-10">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-comments text-sm"></i>
                    </div>
                    <span class="text-sm font-semibold text-gray-500">Interviews</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 relative z-10">3</h3>
            </div>
            
            <!-- Stat 4 -->
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden group">
                <div class="absolute -right-4 -top-4 w-16 h-16 bg-emerald-50 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="flex items-center gap-3 mb-2 relative z-10">
                    <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-award text-sm"></i>
                    </div>
                    <span class="text-sm font-semibold text-gray-500">Offers</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 relative z-10">1</h3>
            </div>

            <!-- Stat 5 -->
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden group hidden lg:block">
                <div class="absolute -right-4 -top-4 w-16 h-16 bg-rose-50 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="flex items-center gap-3 mb-2 relative z-10">
                    <div class="w-8 h-8 rounded-lg bg-rose-50 text-rose-600 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-circle-xmark text-sm"></i>
                    </div>
                    <span class="text-sm font-semibold text-gray-500">Rejected</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 relative z-10">12</h3>
            </div>
        </div>

        <!-- Filter Toolbar -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-4 mb-6">
            <div class="flex flex-col xl:flex-row gap-4">
                <!-- Search -->
                <div class="flex-1 relative group/input">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass text-gray-400 group-focus-within/input:text-primary transition-colors"></i>
                    </div>
                    <input type="text" class="block w-full pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 hover:bg-white focus:bg-white text-gray-900 placeholder-gray-400 focus:border-primary focus:ring-2 focus:ring-primary/20 sm:text-sm transition-all duration-200 outline-none" placeholder="Search by job title or company...">
                </div>
                
                <!-- Filters -->
                <div class="flex flex-wrap sm:flex-nowrap gap-3">
                    <select class="block w-full sm:w-36 px-3 py-2.5 rounded-xl border border-gray-200 bg-gray-50 hover:bg-white focus:bg-white text-gray-700 focus:border-primary focus:ring-2 focus:ring-primary/20 sm:text-sm transition-all duration-200 outline-none cursor-pointer appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%239ca3af%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E')] bg-[length:10px_10px] bg-no-repeat bg-[position:right_1rem_center]">
                        <option value="">All Statuses</option>
                        <option value="applied">Applied</option>
                        <option value="review">Under Review</option>
                        <option value="interview">Interview</option>
                        <option value="offer">Offer</option>
                        <option value="rejected">Rejected</option>
                    </select>

                    <select class="block w-full sm:w-36 px-3 py-2.5 rounded-xl border border-gray-200 bg-gray-50 hover:bg-white focus:bg-white text-gray-700 focus:border-primary focus:ring-2 focus:ring-primary/20 sm:text-sm transition-all duration-200 outline-none cursor-pointer appearance-none bg-[url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%239ca3af%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E')] bg-[length:10px_10px] bg-no-repeat bg-[position:right_1rem_center]">
                        <option value="">Any Time</option>
                        <option value="7">Last 7 days</option>
                        <option value="30">Last 30 days</option>
                        <option value="90">Last 3 months</option>
                    </select>

                    <button class="w-full sm:w-auto px-4 py-2.5 rounded-xl border border-gray-200 bg-white text-gray-700 font-medium hover:bg-gray-50 focus:ring-2 focus:ring-primary/20 transition-colors shadow-sm flex items-center justify-center gap-2">
                        <i class="fa-solid fa-sliders text-sm"></i> More
                    </button>
                </div>
            </div>
        </div>

        <!-- Desktop Table View (Hidden on mobile) -->
        <div class="hidden lg:block bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden mb-6">
            <table class="w-full text-left text-sm whitespace-nowrap">
                <thead class="bg-gray-50/50 border-b border-gray-100 text-gray-500 uppercase tracking-wider text-[11px] font-bold">
                    <tr>
                        <th class="px-6 py-4 rounded-tl-2xl">Job Details</th>
                        <th class="px-6 py-4">Applied On</th>
                        <th class="px-6 py-4">Status & Progress</th>
                        <th class="px-6 py-4 text-right rounded-tr-2xl">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    
                    <!-- Job Row 1 (Interview) -->
                    <tr class="hover:bg-gray-50/50 transition-colors group">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-xl bg-white border border-gray-100 shadow-sm flex items-center justify-center shrink-0 overflow-hidden p-1">
                                    <img src="https://placehold.co/100x100/2e55fa/ffffff?text=TN" alt="TechNova" class="w-full h-full object-contain rounded-lg">
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-gray-900 group-hover:text-primary transition-colors cursor-pointer">Senior Frontend Developer</h4>
                                    <p class="text-xs text-gray-500 mt-0.5 font-medium">TechNova Inc. &bull; San Francisco, CA (Remote)</p>
                                    <div class="flex items-center gap-2 mt-1.5">
                                        <span class="inline-flex items-center rounded-md bg-gray-100 px-1.5 py-0.5 text-[10px] font-medium text-gray-600">Full-time</span>
                                        <span class="inline-flex items-center rounded-md bg-green-50 px-1.5 py-0.5 text-[10px] font-medium text-green-700 ring-1 ring-inset ring-green-600/20">$120k - $150k</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-col">
                                <span class="text-sm font-medium text-gray-900">Oct 12, 2026</span>
                                <span class="text-xs text-gray-500 mt-0.5">3 days ago</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-col gap-1.5 w-36">
                                <div class="flex items-center justify-between text-[10px] font-bold tracking-wide uppercase">
                                    <span class="text-primary">Interview</span>
                                    <span class="text-gray-500">Step 3 of 4</span>
                                </div>
                                <div class="flex gap-1 h-1.5 w-full">
                                    <div class="flex-1 bg-primary rounded-full"></div> 
                                    <div class="flex-1 bg-primary rounded-full"></div> 
                                    <div class="flex-1 bg-primary/20 relative rounded-full overflow-hidden">
                                        <div class="absolute inset-0 bg-primary w-2/3 animate-pulse"></div> 
                                    </div>
                                    <div class="flex-1 bg-gray-100 rounded-full"></div> 
                                </div>
                                <span class="text-[10px] text-gray-500 mt-0.5 truncate">Recruiter: Sarah Miller</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="w-8 h-8 rounded-lg bg-white border border-gray-200 flex items-center justify-center text-gray-500 hover:text-primary hover:border-primary transition-colors shadow-sm" title="Track Status">
                                    <i class="fa-solid fa-timeline text-xs"></i>
                                </button>
                                <button class="w-8 h-8 rounded-lg bg-white border border-gray-200 flex items-center justify-center text-gray-500 hover:text-primary hover:border-primary transition-colors shadow-sm" title="Download JD">
                                    <i class="fa-solid fa-file-arrow-down text-xs"></i>
                                </button>
                                <div class="relative" x-data="{ open: false }" @click.away="open = false">
                                    <button @click="open = !open" class="w-8 h-8 rounded-lg bg-white border border-gray-200 flex items-center justify-center text-gray-500 hover:text-gray-900 hover:border-gray-300 transition-colors shadow-sm">
                                        <i class="fa-solid fa-ellipsis-vertical text-xs"></i>
                                    </button>
                                    <div x-show="open" x-transition.opacity class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-gray-100 py-1 z-10" style="display: none;">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary"><i class="fa-solid fa-arrow-up-right-from-square mr-2"></i> View Job Post</a>
                                        <div class="border-t border-gray-100 my-1"></div>
                                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50"><i class="fa-regular fa-trash-can mr-2"></i> Withdraw Application</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Job Row 2 (Under Review) -->
                    <tr class="hover:bg-gray-50/50 transition-colors group">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-xl bg-white border border-gray-100 shadow-sm flex items-center justify-center shrink-0 overflow-hidden p-1">
                                    <img src="https://placehold.co/100x100/10b981/ffffff?text=CS" alt="Creative Studio" class="w-full h-full object-contain rounded-lg">
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-gray-900 group-hover:text-primary transition-colors cursor-pointer">React Native Developer</h4>
                                    <p class="text-xs text-gray-500 mt-0.5 font-medium">Creative Studio &bull; New York, NY (Hybrid)</p>
                                    <div class="flex items-center gap-2 mt-1.5">
                                        <span class="inline-flex items-center rounded-md bg-gray-100 px-1.5 py-0.5 text-[10px] font-medium text-gray-600">Contract</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-col">
                                <span class="text-sm font-medium text-gray-900">Oct 10, 2026</span>
                                <span class="text-xs text-gray-500 mt-0.5">5 days ago</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-col gap-1.5 w-36">
                                <div class="flex items-center justify-between text-[10px] font-bold tracking-wide uppercase">
                                    <span class="text-amber-500">Under Review</span>
                                    <span class="text-gray-500">Step 2 of 4</span>
                                </div>
                                <div class="flex gap-1 h-1.5 w-full">
                                    <div class="flex-1 bg-amber-500 rounded-full"></div>
                                    <div class="flex-1 bg-amber-500/30 relative rounded-full overflow-hidden">
                                        <div class="absolute inset-0 bg-amber-500 w-1/3 animate-pulse"></div>
                                    </div>
                                    <div class="flex-1 bg-gray-100 rounded-full"></div>
                                    <div class="flex-1 bg-gray-100 rounded-full"></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                <button class="w-8 h-8 rounded-lg bg-white border border-gray-200 flex items-center justify-center text-gray-500 hover:text-primary hover:border-primary transition-colors shadow-sm" title="Track Status">
                                    <i class="fa-solid fa-timeline text-xs"></i>
                                </button>
                                <button class="w-8 h-8 rounded-lg bg-white border border-gray-200 flex items-center justify-center text-gray-500 hover:text-primary hover:border-primary transition-colors shadow-sm" title="Download JD">
                                    <i class="fa-solid fa-file-arrow-down text-xs"></i>
                                </button>
                                <div class="relative" x-data="{ open: false }" @click.away="open = false">
                                    <button @click="open = !open" class="w-8 h-8 rounded-lg bg-white border border-gray-200 flex items-center justify-center text-gray-500 hover:text-gray-900 hover:border-gray-300 transition-colors shadow-sm">
                                        <i class="fa-solid fa-ellipsis-vertical text-xs"></i>
                                    </button>
                                    <div x-show="open" x-transition.opacity class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-gray-100 py-1 z-10" style="display: none;">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary"><i class="fa-solid fa-arrow-up-right-from-square mr-2"></i> View Job Post</a>
                                        <div class="border-t border-gray-100 my-1"></div>
                                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50"><i class="fa-regular fa-trash-can mr-2"></i> Withdraw Application</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Job Row 3 (Offer) -->
                    <tr class="hover:bg-gray-50/50 transition-colors group">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-xl bg-white border border-gray-100 shadow-sm flex items-center justify-center shrink-0 overflow-hidden p-1">
                                    <img src="https://placehold.co/100x100/f59e0b/ffffff?text=GL" alt="Global Logistics" class="w-full h-full object-contain rounded-lg">
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-gray-900 group-hover:text-primary transition-colors cursor-pointer">UI Developer</h4>
                                    <p class="text-xs text-gray-500 mt-0.5 font-medium">Global Logistics &bull; Austin, TX (On-site)</p>
                                    <div class="flex items-center gap-2 mt-1.5">
                                        <span class="inline-flex items-center rounded-md bg-gray-100 px-1.5 py-0.5 text-[10px] font-medium text-gray-600">Full-time</span>
                                        <span class="inline-flex items-center rounded-md bg-green-50 px-1.5 py-0.5 text-[10px] font-medium text-green-700 ring-1 ring-inset ring-green-600/20">$90k - $110k</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-col">
                                <span class="text-sm font-medium text-gray-900">Sep 28, 2026</span>
                                <span class="text-xs text-gray-500 mt-0.5">2 weeks ago</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-col gap-1.5 w-36">
                                <div class="flex items-center justify-between text-[10px] font-bold tracking-wide uppercase">
                                    <span class="text-emerald-500">Offer Received</span>
                                    <span class="text-gray-500">Complete</span>
                                </div>
                                <div class="flex gap-1 h-1.5 w-full">
                                    <div class="flex-1 bg-emerald-500 rounded-full"></div>
                                    <div class="flex-1 bg-emerald-500 rounded-full"></div>
                                    <div class="flex-1 bg-emerald-500 rounded-full"></div>
                                    <div class="flex-1 bg-emerald-500 rounded-full relative overflow-hidden">
                                        <div class="absolute inset-0 bg-white/30 animate-[pulse_2s_ease-in-out_infinite]"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <x-ui.button variant="primary" size="sm" class="opacity-0 group-hover:opacity-100 transition-opacity">View Offer</x-ui.button>
                        </td>
                    </tr>
                    
                    <!-- Job Row 4 (Rejected) -->
                    <tr class="hover:bg-gray-50/50 transition-colors group opacity-60 hover:opacity-100">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-xl bg-gray-100 border border-gray-200 flex items-center justify-center shrink-0 overflow-hidden p-1 grayscale">
                                    <img src="https://placehold.co/100x100/6b7280/ffffff?text=AC" alt="Acme Corp" class="w-full h-full object-contain rounded-lg">
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-gray-900 group-hover:text-primary transition-colors cursor-pointer line-through">Web Designer</h4>
                                    <p class="text-xs text-gray-500 mt-0.5 font-medium">Acme Corp &bull; Chicago, IL</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-col">
                                <span class="text-sm font-medium text-gray-900">Sep 15, 2026</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="inline-flex items-center rounded-md bg-rose-50 px-2 py-1 text-xs font-medium text-rose-700 ring-1 ring-inset ring-rose-600/20">
                                <i class="fa-solid fa-xmark mr-1.5"></i> Not Selected
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="relative" x-data="{ open: false }" @click.away="open = false">
                                <button @click="open = !open" class="w-8 h-8 rounded-lg bg-white border border-gray-200 flex items-center justify-center text-gray-500 hover:text-gray-900 hover:border-gray-300 transition-colors shadow-sm opacity-0 group-hover:opacity-100 ml-auto">
                                    <i class="fa-solid fa-ellipsis-vertical text-xs"></i>
                                </button>
                                <div x-show="open" x-transition.opacity class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-gray-100 py-1 z-10" style="display: none;">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-primary"><i class="fa-regular fa-envelope mr-2"></i> Request Feedback</a>
                                    <div class="border-t border-gray-100 my-1"></div>
                                    <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50"><i class="fa-regular fa-trash-can mr-2"></i> Archive</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

        <!-- Mobile Card View (Hidden on desktop) -->
        <div class="lg:hidden space-y-4 mb-6">
            <!-- Mobile Card 1 -->
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-4 relative">
                <div class="absolute top-4 right-4 relative" x-data="{ open: false }" @click.away="open = false">
                    <button @click="open = !open" class="w-8 h-8 rounded-lg bg-gray-50 text-gray-500 flex items-center justify-center hover:bg-gray-100">
                        <i class="fa-solid fa-ellipsis-vertical text-xs"></i>
                    </button>
                    <div x-show="open" class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-gray-100 py-1 z-10" style="display: none;">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">View Job Post</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Track Status</a>
                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Withdraw</a>
                    </div>
                </div>

                <div class="flex items-start gap-4 mb-4 pr-10">
                    <div class="w-12 h-12 rounded-xl bg-white border border-gray-100 shadow-sm flex items-center justify-center shrink-0 overflow-hidden p-1">
                        <img src="https://placehold.co/100x100/2e55fa/ffffff?text=TN" alt="TechNova" class="w-full h-full object-contain rounded-lg">
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-gray-900 leading-tight">Senior Frontend Developer</h4>
                        <p class="text-xs text-gray-500 mt-1">TechNova Inc.</p>
                        <p class="text-xs text-gray-400 mt-0.5"><i class="fa-solid fa-location-dot mr-1"></i>San Francisco (Remote)</p>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-xl p-3 mb-4">
                    <div class="flex items-center justify-between text-xs mb-2">
                        <span class="font-medium text-gray-500">Applied: Oct 12, 2026</span>
                        <span class="font-bold text-gray-900">$120k - $150k</span>
                    </div>
                    
                    <div class="flex flex-col gap-1.5 w-full mt-2">
                        <div class="flex items-center justify-between text-[10px] font-bold tracking-wide uppercase">
                            <span class="text-primary">Interview</span>
                            <span class="text-gray-500">Step 3 of 4</span>
                        </div>
                        <div class="flex gap-1 h-1.5 w-full">
                            <div class="flex-1 bg-primary rounded-full"></div>
                            <div class="flex-1 bg-primary rounded-full"></div>
                            <div class="flex-1 bg-primary/20 relative rounded-full overflow-hidden">
                                <div class="absolute inset-0 bg-primary w-2/3 animate-pulse"></div>
                            </div>
                            <div class="flex-1 bg-gray-200 rounded-full"></div>
                        </div>
                    </div>
                </div>
                
                <x-ui.button variant="secondary" class="w-full justify-center">View Details</x-ui.button>
            </div>
            
            <!-- Mobile Card 2 -->
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-4 relative">
                <div class="absolute top-4 right-4 relative" x-data="{ open: false }" @click.away="open = false">
                    <button @click="open = !open" class="w-8 h-8 rounded-lg bg-gray-50 text-gray-500 flex items-center justify-center hover:bg-gray-100">
                        <i class="fa-solid fa-ellipsis-vertical text-xs"></i>
                    </button>
                    <div x-show="open" class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-gray-100 py-1 z-10" style="display: none;">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">View Job Post</a>
                        <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Withdraw</a>
                    </div>
                </div>

                <div class="flex items-start gap-4 mb-4 pr-10">
                    <div class="w-12 h-12 rounded-xl bg-white border border-gray-100 shadow-sm flex items-center justify-center shrink-0 overflow-hidden p-1">
                        <img src="https://placehold.co/100x100/10b981/ffffff?text=CS" alt="Creative Studio" class="w-full h-full object-contain rounded-lg">
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-gray-900 leading-tight">React Native Developer</h4>
                        <p class="text-xs text-gray-500 mt-1">Creative Studio</p>
                    </div>
                </div>
                
                <div class="bg-amber-50/50 rounded-xl p-3 mb-4">
                    <div class="flex flex-col gap-1.5 w-full">
                        <div class="flex items-center justify-between text-[10px] font-bold tracking-wide uppercase">
                            <span class="text-amber-600">Under Review</span>
                            <span class="text-amber-600/70">Step 2 of 4</span>
                        </div>
                        <div class="flex gap-1 h-1.5 w-full">
                            <div class="flex-1 bg-amber-500 rounded-full"></div>
                            <div class="flex-1 bg-amber-500/30 relative rounded-full overflow-hidden">
                                <div class="absolute inset-0 bg-amber-500 w-1/3 animate-pulse"></div>
                            </div>
                            <div class="flex-1 bg-amber-500/10 rounded-full"></div>
                            <div class="flex-1 bg-amber-500/10 rounded-full"></div>
                        </div>
                    </div>
                </div>
                
                <x-ui.button variant="secondary" class="w-full justify-center">View Details</x-ui.button>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6 rounded-2xl shadow-sm mb-12">
            <div class="flex flex-1 justify-between sm:hidden">
                <a href="#" class="relative inline-flex items-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                <a href="#" class="relative ml-3 inline-flex items-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
            </div>
            <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700">
                        Showing
                        <span class="font-medium text-gray-900">1</span>
                        to
                        <span class="font-medium text-gray-900">10</span>
                        of
                        <span class="font-medium text-gray-900">24</span>
                        results
                    </p>
                </div>
                <div>
                    <nav class="isolate inline-flex -space-x-px rounded-lg shadow-sm" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center rounded-l-lg px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Previous</span>
                            <i class="fa-solid fa-chevron-left text-xs"></i>
                        </a>
                        <a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-primary px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">1</a>
                        <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                        <a href="#" class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                        <span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300">...</span>
                        <a href="#" class="relative inline-flex items-center rounded-r-lg px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                            <span class="sr-only">Next</span>
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</x-layouts.dashboard>
