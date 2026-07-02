<x-ui.card title="Education">
    <x-slot:headerActions>
        <button class="w-8 h-8 rounded-full bg-primary/10 text-primary hover:bg-primary hover:text-white transition-colors flex items-center justify-center">
            <i class="fa-solid fa-plus text-sm"></i>
        </button>
    </x-slot:headerActions>

    <div class="space-y-8 sm:space-y-10">
        <div class="relative pl-8 sm:pl-12 border-l-2 border-gray-100 group" x-data="{ isEditing: false }">
            <div class="absolute -left-[7px] top-2 w-3 h-3 bg-white border-2 border-gray-300 rounded-full group-hover:border-primary transition-colors"></div>
            
            <div x-show="!isEditing" class="relative">
                <div class="flex justify-between items-start mb-3">
                    <div class="flex gap-5 items-start">
                        <img src="https://ui-avatars.com/api/?name=UC&background=2e55fa&color=fff&size=100" class="w-12 h-12 rounded-xl object-cover border border-gray-100 shadow-sm hidden sm:block shrink-0">
                        <div>
                            <h4 class="text-base font-bold text-gray-900 group-hover:text-primary transition-colors tracking-tight">B.S. in Computer Science</h4>
                            <p class="text-sm font-semibold text-gray-700">University of California, Berkeley</p>
                            <div class="flex flex-wrap items-center gap-x-3 gap-y-1 text-xs text-gray-500 mt-1 font-medium">
                                <span class="flex items-center"><i class="fa-regular fa-calendar mr-1.5 text-gray-400"></i> Sep 2016 - May 2020</span>
                                <span class="hidden sm:inline text-gray-300">•</span>
                                <span class="flex items-center"><i class="fa-solid fa-graduation-cap mr-1.5 text-gray-400"></i> Graduated with Honors</span>
                            </div>
                        </div>
                    </div>
                    <button @click="isEditing = true" class="text-gray-400 hover:text-primary transition-colors p-2 -mr-2"><i class="fa-solid fa-pen text-xs"></i></button>
                </div>
                <p class="text-sm text-gray-600 leading-relaxed mt-3">Coursework included Data Structures, Algorithms, Web Development, and HCI. Active member of the web development club and led a team of 3 to build a campus event tracker.</p>
            </div>

            <div x-show="isEditing" x-cloak class="bg-gray-50 p-5 rounded-xl border border-gray-200 space-y-5">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <x-ui.input label="Degree / Program" value="B.S. in Computer Science" />
                    <x-ui.input label="Institution" value="University of California, Berkeley" />
                    <x-ui.input label="Start Year" type="month" value="2016-09" />
                    <x-ui.input label="End Year" type="month" value="2020-05" />
                </div>
                <x-ui.input type="textarea" label="Description (Optional)" rows="2" value="Graduated with Honors. Coursework included Data Structures, Algorithms, Web Development, and HCI." />
                
                <div class="flex justify-end gap-3 pt-3">
                    <x-ui.button size="sm" variant="danger" class="mr-auto"><i class="fa-regular fa-trash-can mr-1.5"></i> Delete</x-ui.button>
                    <x-ui.button size="sm" variant="secondary" @click="isEditing = false">Cancel</x-ui.button>
                    <x-ui.button size="sm" variant="primary" @click="isEditing = false">Save</x-ui.button>
                </div>
            </div>
        </div>
    </div>
</x-ui.card>
