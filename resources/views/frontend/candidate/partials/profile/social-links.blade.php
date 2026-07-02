<x-ui.card title="Social Links" x-data="{ isEditing: false }">
    <x-slot:headerActions>
        <button @click="isEditing = !isEditing" class="text-sm font-medium text-primary hover:text-primary-hover" x-text="isEditing ? 'Cancel' : 'Edit'"></button>
    </x-slot:headerActions>

    <div x-show="!isEditing" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div class="p-4 rounded-xl border border-[#0077b5]/20 bg-[#0077b5]/5 hover:bg-[#0077b5]/10 transition-colors group cursor-pointer">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-white text-[#0077b5] rounded-lg flex items-center justify-center shadow-sm group-hover:scale-105 transition-transform">
                        <i class="fa-brands fa-linkedin-in text-lg"></i>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-gray-900">LinkedIn</h4>
                        <p class="text-xs text-gray-500 mt-0.5 truncate">/in/johndoe</p>
                    </div>
                </div>
                <i class="fa-solid fa-check text-[#0077b5]"></i>
            </div>
        </div>
        
        <div class="p-4 rounded-xl border border-dashed border-gray-200 bg-gray-50 hover:border-gray-300 transition-colors group cursor-pointer flex items-center justify-center h-[74px]">
            <div class="flex items-center gap-2 text-gray-500 group-hover:text-gray-900 transition-colors">
                <i class="fa-brands fa-twitter text-lg"></i>
                <span class="text-sm font-semibold">Connect Twitter</span>
            </div>
        </div>
    </div>

    <div x-show="isEditing" x-cloak class="space-y-4">
        <x-ui.input label="LinkedIn Profile" value="https://linkedin.com/in/johndoe" icon="fa-brands fa-linkedin" />
        <x-ui.input label="Twitter Profile" placeholder="https://twitter.com/username" icon="fa-brands fa-twitter" />
        
        <div class="flex justify-end gap-3 pt-4 border-t border-gray-100 mt-6">
            <x-ui.button variant="primary" @click="isEditing = false">Save Socials</x-ui.button>
        </div>
    </div>
</x-ui.card>
