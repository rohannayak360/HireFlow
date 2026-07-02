<x-ui.card title="Portfolio Links" x-data="{ isEditing: false }">
    <x-slot:headerActions>
        <button @click="isEditing = !isEditing" class="text-sm font-medium text-primary hover:text-primary-hover" x-text="isEditing ? 'Cancel' : 'Edit'"></button>
    </x-slot:headerActions>

    <div x-show="!isEditing" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div class="p-4 rounded-xl border border-gray-100 hover:border-primary/30 hover:shadow-md transition-all group bg-white">
            <div class="flex items-center justify-between mb-3">
                <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center group-hover:scale-105 transition-transform">
                    <i class="fa-solid fa-globe text-lg"></i>
                </div>
                <a href="#" class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:text-primary hover:bg-primary/10 transition-colors">
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                </a>
            </div>
            <div>
                <h4 class="text-sm font-semibold text-gray-900 group-hover:text-primary transition-colors">Personal Website</h4>
                <p class="text-xs text-gray-500 mt-1 truncate">johndoe.dev</p>
            </div>
        </div>
        
        <div class="p-4 rounded-xl border border-gray-100 hover:border-gray-300 hover:shadow-md transition-all group bg-white">
            <div class="flex items-center justify-between mb-3">
                <div class="w-10 h-10 bg-gray-900 text-white rounded-lg flex items-center justify-center group-hover:scale-105 transition-transform">
                    <i class="fa-brands fa-github text-lg"></i>
                </div>
                <a href="#" class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:text-gray-900 hover:bg-gray-100 transition-colors">
                    <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                </a>
            </div>
            <div>
                <h4 class="text-sm font-semibold text-gray-900 group-hover:text-gray-700 transition-colors">GitHub Profile</h4>
                <p class="text-xs text-gray-500 mt-1 truncate">github.com/johndoe</p>
            </div>
        </div>
    </div>

    <div x-show="isEditing" x-cloak class="space-y-4">
        <div class="flex gap-3 items-end">
            <x-ui.input label="Personal Website" value="https://johndoe.dev" icon="fa-solid fa-globe" class="flex-1" />
            <button class="w-10 h-10 mb-[2px] flex items-center justify-center text-rose-500 hover:bg-rose-50 rounded-lg transition-colors"><i class="fa-regular fa-trash-can"></i></button>
        </div>
        <div class="flex gap-3 items-end">
            <x-ui.input label="GitHub URL" value="https://github.com/johndoe" icon="fa-brands fa-github" class="flex-1" />
            <button class="w-10 h-10 mb-[2px] flex items-center justify-center text-rose-500 hover:bg-rose-50 rounded-lg transition-colors"><i class="fa-regular fa-trash-can"></i></button>
        </div>
        
        <button class="text-sm font-medium text-primary hover:text-primary-hover flex items-center mt-2"><i class="fa-solid fa-plus mr-1.5"></i> Add another link</button>
        
        <div class="flex justify-end gap-3 pt-4 border-t border-gray-100 mt-6">
            <x-ui.button variant="primary" @click="isEditing = false">Save Links</x-ui.button>
        </div>
    </div>
</x-ui.card>
