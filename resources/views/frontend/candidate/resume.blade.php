<x-layouts.dashboard title="My Resume">
    <div class="w-full">
        <!-- Breadcrumbs -->
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm text-gray-500">
                <li><a href="{{ route('candidate.dashboard') }}" class="hover:text-primary transition-colors">Dashboard</a></li>
                <li><i class="fa-solid fa-chevron-right text-[10px]"></i></li>
                <li class="font-medium text-gray-900" aria-current="page">My Resume</li>
            </ol>
        </nav>

        <!-- Page Header -->
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 tracking-tight mb-2">Resume Management</h1>
                <p class="text-gray-500 text-sm max-w-2xl">Upload, manage, and optimize your resume to increase your chances of landing your dream job. Ensure your resume is ATS-friendly.</p>
            </div>
            <div class="flex gap-3 shrink-0">
                <x-ui.button variant="primary" icon="fa-solid fa-cloud-arrow-up">Upload New</x-ui.button>
            </div>
        </div>

        <!-- Summary Metrics -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
            <!-- Metric 1 -->
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden group">
                <div class="absolute -right-4 -top-4 w-16 h-16 bg-primary/10 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="flex items-center gap-3 mb-2 relative z-10">
                    <div class="w-8 h-8 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-star text-sm"></i>
                    </div>
                    <span class="text-sm font-semibold text-gray-500">Resume Score</span>
                </div>
                <div class="flex items-baseline gap-2 relative z-10">
                    <h3 class="text-2xl font-bold text-gray-900">85</h3>
                    <span class="text-sm text-gray-400 font-medium">/ 100</span>
                </div>
            </div>
            
            <!-- Metric 2 -->
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden group">
                <div class="absolute -right-4 -top-4 w-16 h-16 bg-emerald-50 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="flex items-center gap-3 mb-2 relative z-10">
                    <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-robot text-sm"></i>
                    </div>
                    <span class="text-sm font-semibold text-gray-500">ATS Match</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 relative z-10">Excellent</h3>
            </div>
            
            <!-- Metric 3 -->
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden group">
                <div class="absolute -right-4 -top-4 w-16 h-16 bg-blue-50 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="flex items-center gap-3 mb-2 relative z-10">
                    <div class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                        <i class="fa-regular fa-clock text-sm"></i>
                    </div>
                    <span class="text-sm font-semibold text-gray-500">Last Updated</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 relative z-10 leading-7">Oct 15, 2026</h3>
            </div>
            
            <!-- Metric 4 -->
            <div class="bg-white rounded-2xl p-5 border border-gray-100 shadow-sm relative overflow-hidden group">
                <div class="absolute -right-4 -top-4 w-16 h-16 bg-amber-50 rounded-full opacity-50 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="flex items-center gap-3 mb-2 relative z-10">
                    <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-download text-sm"></i>
                    </div>
                    <span class="text-sm font-semibold text-gray-500">Employer Downloads</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 relative z-10">14</h3>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8 relative items-stretch mb-12">
            
            <!-- Left Column (Main Operations) -->
            <div class="lg:col-span-2 space-y-6 lg:space-y-8">
                
                <!-- Active Resume Card -->
                <div class="bg-white rounded-2xl border-2 border-primary/20 bg-primary/5 p-5 sm:p-6 shadow-sm relative overflow-hidden">
                    <!-- Decorative background element -->
                    <div class="absolute -right-12 -bottom-12 text-primary/5">
                        <i class="fa-solid fa-file-pdf text-[150px]"></i>
                    </div>
                    
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-4">
                            <span class="inline-flex items-center rounded-full bg-primary/10 px-2.5 py-1 text-xs font-semibold text-primary ring-1 ring-inset ring-primary/20">
                                <i class="fa-solid fa-circle-check mr-1.5"></i> Active Resume
                            </span>
                            <span class="text-xs font-medium text-gray-500">Uploaded 3 days ago</span>
                        </div>
                        
                        <div class="flex flex-col sm:flex-row sm:items-center gap-4 sm:gap-6 bg-white rounded-xl p-4 border border-gray-100 shadow-sm mb-6">
                            <div class="w-14 h-14 rounded-lg bg-red-50 text-red-500 flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-file-pdf text-2xl"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-base font-bold text-gray-900 truncate">John_Doe_Senior_Frontend_Resume.pdf</h3>
                                <div class="flex items-center gap-3 text-sm text-gray-500 mt-1">
                                    <span>2.4 MB</span>
                                    <span class="text-gray-300">•</span>
                                    <span>PDF Document</span>
                                </div>
                            </div>
                            <div class="flex gap-2 shrink-0">
                                <button class="w-10 h-10 rounded-lg bg-gray-50 hover:bg-gray-100 text-gray-600 flex items-center justify-center transition-colors border border-gray-200" title="Preview">
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                                <button class="w-10 h-10 rounded-lg bg-gray-50 hover:bg-gray-100 text-gray-600 flex items-center justify-center transition-colors border border-gray-200" title="Download">
                                    <i class="fa-solid fa-download"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="flex flex-wrap gap-3">
                            <x-ui.button variant="primary" icon="fa-solid fa-arrows-rotate">Replace Resume</x-ui.button>
                            <x-ui.button variant="danger" icon="fa-regular fa-trash-can">Delete</x-ui.button>
                        </div>
                    </div>
                </div>

                <!-- Resume Analytics -->
                <x-ui.card title="Resume Insights & Analytics">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <div>
                            <div class="flex justify-between items-end mb-2">
                                <span class="text-sm font-semibold text-gray-700">Profile Match</span>
                                <span class="text-lg font-bold text-primary">92%</span>
                            </div>
                            <div class="w-full bg-gray-100 rounded-full h-2.5 overflow-hidden">
                                <div class="bg-primary h-2.5 rounded-full" style="width: 92%"></div>
                            </div>
                            <p class="text-xs text-gray-500 mt-2">Your resume closely matches your profile details.</p>
                        </div>
                        <div>
                            <div class="flex justify-between items-end mb-2">
                                <span class="text-sm font-semibold text-gray-700">Keyword Optimization</span>
                                <span class="text-lg font-bold text-amber-500">78%</span>
                            </div>
                            <div class="w-full bg-gray-100 rounded-full h-2.5 overflow-hidden">
                                <div class="bg-amber-500 h-2.5 rounded-full" style="width: 78%"></div>
                            </div>
                            <p class="text-xs text-gray-500 mt-2">Missing some key industry terms.</p>
                        </div>
                    </div>
                    
                    <h4 class="text-sm font-bold text-gray-900 mb-4">Improvement Suggestions</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 bg-gray-50 rounded-lg p-3 border border-gray-100">
                            <div class="mt-0.5"><i class="fa-solid fa-triangle-exclamation text-amber-500 text-sm"></i></div>
                            <div>
                                <p class="text-sm font-medium text-gray-900">Add more quantifiable achievements</p>
                                <p class="text-xs text-gray-500 mt-0.5">Use numbers or percentages to describe the impact of your work (e.g., "Increased revenue by 15%").</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3 bg-gray-50 rounded-lg p-3 border border-gray-100">
                            <div class="mt-0.5"><i class="fa-solid fa-circle-info text-blue-500 text-sm"></i></div>
                            <div>
                                <p class="text-sm font-medium text-gray-900">Include a link to your portfolio</p>
                                <p class="text-xs text-gray-500 mt-0.5">Recruiters are 40% more likely to respond when they can see live examples of your work.</p>
                            </div>
                        </li>
                    </ul>
                </x-ui.card>

                <!-- Upload Area (For extra docs or replacement) -->
                <x-ui.card title="Upload Additional Documents">
                    <div class="border-2 border-dashed border-gray-200 rounded-xl p-8 text-center hover:border-primary hover:bg-primary/5 transition-colors cursor-pointer group">
                        <div class="w-16 h-16 rounded-full bg-gray-50 flex items-center justify-center mx-auto mb-4 group-hover:bg-white group-hover:shadow-sm transition-all duration-300 group-hover:scale-110">
                            <i class="fa-solid fa-cloud-arrow-up text-2xl text-gray-400 group-hover:text-primary transition-colors"></i>
                        </div>
                        <h3 class="text-base font-bold text-gray-900 mb-1">Click to upload or drag and drop</h3>
                        <p class="text-sm text-gray-500 max-w-xs mx-auto mb-4">Support for PDF, DOCX, and TXT files. Maximum file size is 5MB.</p>
                        <x-ui.button variant="secondary" size="sm">Browse Files</x-ui.button>
                    </div>
                </x-ui.card>

            </div>

            <!-- Right Column (Sidebar Widgets) -->
            <div class="lg:col-span-1 relative">
                <div class="space-y-6 sticky top-8 sm:top-24 pb-8">
                    
                    <!-- Version History -->
                    <x-ui.card title="Version History">
                        <div class="relative pl-4 border-l border-gray-200 space-y-6">
                            <!-- Version 1 -->
                            <div class="relative">
                                <div class="absolute -left-[21px] top-1 w-2.5 h-2.5 bg-primary rounded-full ring-4 ring-white"></div>
                                <h4 class="text-sm font-semibold text-gray-900">Current Version</h4>
                                <p class="text-xs text-gray-500 mt-0.5">Uploaded Oct 15, 2026</p>
                                <a href="#" class="inline-flex items-center text-xs font-medium text-primary hover:text-primary-hover mt-2"><i class="fa-solid fa-download mr-1"></i> Download</a>
                            </div>
                            <!-- Version 2 -->
                            <div class="relative">
                                <div class="absolute -left-[21px] top-1 w-2.5 h-2.5 bg-gray-300 rounded-full ring-4 ring-white"></div>
                                <h4 class="text-sm font-semibold text-gray-700">Previous Version</h4>
                                <p class="text-xs text-gray-500 mt-0.5">Uploaded Aug 02, 2026</p>
                                <div class="flex items-center gap-3 mt-2">
                                    <a href="#" class="inline-flex items-center text-xs font-medium text-gray-600 hover:text-primary"><i class="fa-solid fa-download mr-1"></i> Download</a>
                                    <span class="text-gray-300">|</span>
                                    <a href="#" class="inline-flex items-center text-xs font-medium text-gray-600 hover:text-primary"><i class="fa-solid fa-rotate-left mr-1"></i> Restore</a>
                                </div>
                            </div>
                            <!-- Version 3 -->
                            <div class="relative">
                                <div class="absolute -left-[21px] top-1 w-2.5 h-2.5 bg-gray-300 rounded-full ring-4 ring-white"></div>
                                <h4 class="text-sm font-semibold text-gray-700">Oldest Version</h4>
                                <p class="text-xs text-gray-500 mt-0.5">Uploaded Feb 14, 2026</p>
                                <div class="flex items-center gap-3 mt-2">
                                    <a href="#" class="inline-flex items-center text-xs font-medium text-gray-600 hover:text-primary"><i class="fa-solid fa-download mr-1"></i> Download</a>
                                    <span class="text-gray-300">|</span>
                                    <a href="#" class="inline-flex items-center text-xs font-medium text-gray-600 hover:text-primary"><i class="fa-solid fa-rotate-left mr-1"></i> Restore</a>
                                </div>
                            </div>
                        </div>
                    </x-ui.card>
                    
                    <!-- Tips Widget -->
                    <x-ui.card title="Resume Tips" class="bg-gradient-to-b from-white to-gray-50/50 border border-emerald-100">
                        <x-slot:headerActions>
                            <i class="fa-solid fa-lightbulb text-emerald-500"></i>
                        </x-slot:headerActions>
                        
                        <ul class="space-y-4">
                            <li class="flex items-start gap-2.5 text-sm">
                                <i class="fa-solid fa-check text-emerald-500 mt-1 flex-shrink-0 text-xs"></i>
                                <span class="text-gray-600">Keep it to <strong>one page</strong> if you have less than 10 years of experience.</span>
                            </li>
                            <li class="flex items-start gap-2.5 text-sm">
                                <i class="fa-solid fa-check text-emerald-500 mt-1 flex-shrink-0 text-xs"></i>
                                <span class="text-gray-600">Use standard fonts like <strong>Arial, Calibri, or Times New Roman</strong> for ATS readability.</span>
                            </li>
                            <li class="flex items-start gap-2.5 text-sm">
                                <i class="fa-solid fa-check text-emerald-500 mt-1 flex-shrink-0 text-xs"></i>
                                <span class="text-gray-600">Save your file as a <strong>PDF</strong> to preserve formatting across all devices.</span>
                            </li>
                            <li class="flex items-start gap-2.5 text-sm">
                                <i class="fa-solid fa-check text-emerald-500 mt-1 flex-shrink-0 text-xs"></i>
                                <span class="text-gray-600">Tailor your resume for each application by matching keywords from the job description.</span>
                            </li>
                        </ul>
                    </x-ui.card>
                </div>
            </div>
        </div>
    </div>
</x-layouts.dashboard>
