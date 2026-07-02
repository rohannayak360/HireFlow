<x-ui.card title="Resume / CV">
    <!-- Uploaded Resume -->
    <div class="mb-4">
        <div class="p-4 rounded-xl border border-primary/20 bg-primary/5 hover:bg-primary/10 transition-colors group">
            <div class="flex items-start gap-3">
                <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center text-primary shadow-sm border border-primary/10 shrink-0 group-hover:scale-105 transition-transform">
                    <i class="fa-solid fa-file-pdf text-lg"></i>
                </div>
                <div class="min-w-0 flex-1">
                    <h4 class="text-sm font-semibold text-gray-900 group-hover:text-primary transition-colors truncate">John_Doe_Frontend_Resume_2026.pdf</h4>
                    <p class="text-xs font-medium text-gray-500 mt-0.5 truncate">Updated Oct 15, 2026 &bull; 2.4 MB</p>
                </div>
            </div>
            
            <div class="flex items-center justify-between mt-4 pt-3 border-t border-primary/10">
                <div>
                    <span class="text-[9px] font-bold uppercase tracking-wider text-emerald-600 block mb-0.5">ATS Score</span>
                    <div class="flex items-center gap-1">
                        <i class="fa-solid fa-arrow-trend-up text-emerald-500 text-[10px]"></i>
                        <span class="text-sm font-bold text-gray-900">85/100</span>
                    </div>
                </div>
                
                <div class="flex gap-1.5">
                    <button class="w-8 h-8 rounded-lg bg-white border border-gray-200 flex items-center justify-center text-gray-500 hover:text-primary hover:border-primary transition-colors shadow-sm" title="Preview">
                        <i class="fa-regular fa-eye text-xs"></i>
                    </button>
                    <button class="w-8 h-8 rounded-lg bg-white border border-gray-200 flex items-center justify-center text-gray-500 hover:text-primary hover:border-primary transition-colors shadow-sm" title="Download">
                        <i class="fa-solid fa-download text-[11px]"></i>
                    </button>
                    <button class="w-8 h-8 rounded-lg bg-white border border-gray-200 flex items-center justify-center text-gray-500 hover:text-rose-500 hover:border-rose-500 transition-colors shadow-sm" title="Delete">
                        <i class="fa-regular fa-trash-can text-[11px]"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Upload Area -->
    <div class="border-2 border-dashed border-gray-200 rounded-xl p-8 text-center hover:border-primary hover:bg-gray-50 transition-colors cursor-pointer group">
        <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary/10 transition-colors">
            <i class="fa-solid fa-cloud-arrow-up text-2xl text-gray-400 group-hover:text-primary transition-colors"></i>
        </div>
        <h4 class="text-sm font-semibold text-gray-900 mb-1">Upload a new resume</h4>
        <p class="text-xs text-gray-500 mb-4">PDF, DOCX, or RTF up to 5MB</p>
        <x-ui.button variant="secondary" size="sm">Browse Files</x-ui.button>
    </div>
</x-ui.card>
