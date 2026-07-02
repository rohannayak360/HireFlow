<div class="relative bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden mb-6" x-data="{ isEditing: false }">
    <!-- Cover Image -->
    <div class="h-56 bg-primary/90 relative group overflow-hidden">
        <!-- Abstract pattern -->
        <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] mix-blend-overlay"></div>
        <div class="absolute -right-20 -top-20 w-64 h-64 bg-white/10 rounded-full blur-3xl pointer-events-none"></div>
        
        <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center cursor-pointer" x-show="isEditing">
            <span class="text-white bg-black/50 px-4 py-2 rounded-lg backdrop-blur-sm text-sm font-medium border border-white/20">
                <i class="fa-solid fa-camera mr-2"></i>Change Cover
            </span>
        </div>
    </div>
    
    <!-- Profile Info Area -->
    <div class="px-6 pb-8 sm:px-8 sm:pb-10 pt-4 sm:pt-5">
        <div class="flex flex-col sm:flex-row items-center sm:items-start justify-between relative gap-6">
            
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-5 sm:gap-6 w-full">
                <!-- Avatar -->
                <div class="relative group shrink-0 -mt-20 sm:-mt-24 mb-2 sm:mb-0">
                    <img src="https://ui-avatars.com/api/?name=John+Doe&background=ffffff&color=2e55fa&size=200" alt="Profile photo" class="w-36 h-36 sm:w-44 sm:h-44 rounded-2xl border-4 border-white shadow-lg object-cover bg-white relative z-10">
                    <div class="absolute inset-0 rounded-2xl bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center cursor-pointer z-20" x-show="isEditing">
                        <i class="fa-solid fa-camera text-white text-xl"></i>
                    </div>
                    <div class="absolute -bottom-1 -right-1 w-8 h-8 bg-emerald-500 border-[3px] border-white rounded-full flex items-center justify-center shadow-sm z-30" title="Actively looking for work">
                        <i class="fa-solid fa-check text-white text-xs"></i>
                    </div>
                </div>
                
                <!-- Basic Header Details -->
                <div class="text-center sm:text-left mb-2 sm:mb-3">
                    <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 tracking-tight flex items-center justify-center sm:justify-start gap-2">
                        John Doe <i class="fa-solid fa-circle-check text-primary text-lg" title="Verified Professional"></i>
                    </h1>
                    <p class="text-gray-600 font-medium text-lg mt-0.5">Senior Frontend Developer</p>
                    <div class="flex flex-wrap items-center justify-center sm:justify-start gap-x-4 gap-y-2 mt-3 text-sm text-gray-500">
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-location-dot text-gray-400"></i> San Francisco, CA (Remote)</span>
                        <span class="hidden sm:inline text-gray-300">•</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-briefcase text-gray-400"></i> 6 Years Exp.</span>
                        <span class="hidden sm:inline text-gray-300">•</span>
                        <span class="flex items-center gap-1.5"><i class="fa-solid fa-money-bill-wave text-gray-400"></i> $120k Expected</span>
                    </div>
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex flex-wrap items-center justify-center sm:justify-end gap-4 shrink-0 sm:mt-2">
                <div x-show="!isEditing" class="flex gap-4">
                    <button class="w-10 h-10 rounded-xl bg-gray-50 text-gray-600 border border-gray-200 flex items-center justify-center hover:text-primary hover:border-primary hover:bg-primary/5 transition-colors shadow-sm" title="Share Profile">
                        <i class="fa-solid fa-share-nodes"></i>
                    </button>
                    <button class="w-10 h-10 rounded-xl bg-gray-50 text-gray-600 border border-gray-200 flex items-center justify-center hover:text-primary hover:border-primary hover:bg-primary/5 transition-colors shadow-sm" title="Download Resume">
                        <i class="fa-solid fa-download"></i>
                    </button>
                    <x-ui.button variant="primary" @click="isEditing = true">
                        <i class="fa-solid fa-pen mr-2"></i> Edit Profile
                    </x-ui.button>
                </div>
                <div x-show="isEditing" x-cloak class="flex gap-3">
                    <x-ui.button variant="secondary" @click="isEditing = false">Cancel</x-ui.button>
                    <x-ui.button variant="primary" @click="isEditing = false"><i class="fa-solid fa-check mr-2"></i> Save Changes</x-ui.button>
                </div>
            </div>
        </div>
        
        <!-- Profile Stats Banner (View Mode Only) -->
        <div x-show="!isEditing" class="mt-8 grid grid-cols-2 md:grid-cols-4 gap-4 pt-6 border-t border-gray-100">
            <div class="text-center sm:text-left">
                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Profile Views</p>
                <div class="flex items-center justify-center sm:justify-start gap-2">
                    <span class="text-xl font-bold text-gray-900">156</span>
                    <span class="text-xs font-semibold text-emerald-600 flex items-center bg-emerald-50 px-1.5 py-0.5 rounded-md"><i class="fa-solid fa-arrow-trend-up mr-1 text-[10px]"></i>24%</span>
                </div>
            </div>
            <div class="text-center sm:text-left">
                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Search Appearances</p>
                <div class="flex items-center justify-center sm:justify-start gap-2">
                    <span class="text-xl font-bold text-gray-900">42</span>
                    <span class="text-xs font-semibold text-emerald-600 flex items-center bg-emerald-50 px-1.5 py-0.5 rounded-md"><i class="fa-solid fa-arrow-trend-up mr-1 text-[10px]"></i>12%</span>
                </div>
            </div>
            <div class="text-center sm:text-left">
                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Resume ATS Score</p>
                <div class="flex items-center justify-center sm:justify-start gap-2">
                    <span class="text-xl font-bold text-primary">85/100</span>
                    <i class="fa-solid fa-circle-info text-gray-400 text-xs" title="Good match for frontend roles"></i>
                </div>
            </div>
            <div class="text-center sm:text-left">
                <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Profile Strength</p>
                <div class="flex items-center justify-center sm:justify-start gap-2 w-full max-w-[120px] mx-auto sm:mx-0">
                    <div class="flex-1 bg-gray-100 rounded-full h-2 overflow-hidden">
                        <div class="bg-emerald-500 h-2 rounded-full" style="width: 90%"></div>
                    </div>
                    <span class="text-sm font-bold text-gray-900">90%</span>
                </div>
            </div>
        </div>
    </div>
</div>
