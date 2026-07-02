<x-ui.card title="Certifications">
    <x-slot:headerActions>
        <button class="w-8 h-8 rounded-full bg-primary/10 text-primary hover:bg-primary hover:text-white transition-colors flex items-center justify-center">
            <i class="fa-solid fa-plus text-sm"></i>
        </button>
    </x-slot:headerActions>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <!-- Certificate 1 -->
        <div class="border border-gray-100 rounded-xl p-4 flex gap-4 bg-white hover:shadow-md transition-shadow group relative" x-data="{ isEditing: false }">
            <div x-show="!isEditing" class="flex gap-4 w-full">
                <div class="w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-105 transition-transform overflow-hidden bg-gray-50 border border-gray-100">
                    <img src="https://ui-avatars.com/api/?name=AWS&background=232F3E&color=fff&size=100" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 min-w-0 pr-8">
                    <h4 class="text-sm font-semibold text-gray-900 group-hover:text-primary transition-colors truncate">AWS Certified Developer</h4>
                    <p class="text-xs font-medium text-gray-500 mb-3">Amazon Web Services</p>
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between mt-auto gap-2 sm:gap-0 items-start">
                        <span class="text-[11px] font-medium text-gray-400"><i class="fa-regular fa-calendar-check mr-1 text-gray-300"></i> Issued Jan 2024</span>
                        <a href="#" class="text-[11px] font-semibold text-primary hover:underline flex items-center group/link">Show Credential <i class="fa-solid fa-arrow-up-right-from-square ml-1.5 text-[10px] sm:opacity-0 group-hover/link:opacity-100 transition-opacity"></i></a>
                    </div>
                </div>
                <button @click="isEditing = true" class="absolute top-3 right-3 text-gray-400 hover:text-primary p-1.5 bg-white rounded-lg transition-colors shadow-[0_1px_2px_rgba(0,0,0,0.05)] border border-gray-100"><i class="fa-solid fa-pen text-[10px]"></i></button>
            </div>
            
            <div x-show="isEditing" x-cloak class="w-full space-y-3">
                <x-ui.input label="Certification Name" value="AWS Certified Developer" size="sm" />
                <x-ui.input label="Issuing Organization" value="Amazon Web Services" size="sm" />
                <div class="grid grid-cols-2 gap-3">
                    <x-ui.input label="Issue Date" type="month" value="2024-01" size="sm" />
                    <x-ui.input label="Credential URL" value="https://aws.amazon.com/verify" size="sm" />
                </div>
                <div class="flex justify-end gap-2 pt-2">
                    <x-ui.button size="sm" variant="secondary" @click="isEditing = false">Cancel</x-ui.button>
                    <x-ui.button size="sm" variant="primary" @click="isEditing = false">Save</x-ui.button>
                </div>
            </div>
        </div>
    </div>
</x-ui.card>
