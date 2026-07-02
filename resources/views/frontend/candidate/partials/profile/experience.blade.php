<x-ui.card title="Work Experience">
    <x-slot:headerActions>
        <button class="w-8 h-8 rounded-full bg-primary/10 text-primary hover:bg-primary hover:text-white transition-colors flex items-center justify-center">
            <i class="fa-solid fa-plus text-sm"></i>
        </button>
    </x-slot:headerActions>

    <div class="space-y-8 sm:space-y-10">
        <!-- Experience Item 1 -->
        <div class="relative pl-8 sm:pl-12 border-l-2 border-gray-100 group" x-data="{ isEditing: false }">
            <div class="absolute -left-[7px] top-2 w-3 h-3 bg-white border-2 border-primary rounded-full group-hover:scale-125 transition-transform"></div>
            
            <!-- View Mode -->
            <div x-show="!isEditing" class="relative">
                <div class="flex justify-between items-start mb-3">
                    <div class="flex gap-5 items-start">
                        <img src="https://ui-avatars.com/api/?name=TN&background=2e55fa&color=fff&size=100" class="w-12 h-12 rounded-xl object-cover border border-gray-100 shadow-sm hidden sm:block shrink-0">
                        <div>
                            <h4 class="text-base font-semibold text-gray-900 group-hover:text-primary transition-colors">Senior Frontend Developer</h4>
                            <p class="text-sm font-medium text-gray-700">TechNova Inc.</p>
                            <div class="flex items-center gap-3 text-xs text-gray-500 mt-1 font-medium">
                                <span class="flex items-center"><i class="fa-regular fa-calendar mr-1.5"></i> Jan 2023 - Present (3 yrs 10 mos)</span>
                                <span class="hidden sm:inline">•</span>
                                <span class="flex items-center"><i class="fa-solid fa-location-dot mr-1.5"></i> San Francisco, CA (Remote)</span>
                            </div>
                        </div>
                    </div>
                    <button @click="isEditing = true" class="text-gray-400 hover:text-primary transition-colors p-2 -mr-2"><i class="fa-solid fa-pen text-xs"></i></button>
                </div>
                
                <p class="text-sm text-gray-600 leading-relaxed mt-3">
                    Lead a team of 4 frontend developers to rebuild the core SaaS platform using React and Tailwind CSS. Improved page load performance by 40% and implemented a robust design system that accelerated new feature development by 25%.
                </p>
                <div class="flex flex-wrap gap-2 mt-4">
                    <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-[10px] font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10"><i class="fa-brands fa-react mr-1.5 text-sky-500"></i> React</span>
                    <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-[10px] font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10"><i class="fa-solid fa-wind mr-1.5 text-teal-400"></i> Tailwind CSS</span>
                    <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-[10px] font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10"><i class="fa-brands fa-js mr-1.5 text-yellow-400"></i> TypeScript</span>
                </div>
            </div>
            
            <!-- Edit Mode -->
            <div x-show="isEditing" x-cloak class="bg-gray-50 p-5 rounded-xl border border-gray-200 space-y-5">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <x-ui.input label="Job Title" value="Senior Frontend Developer" />
                    <x-ui.input label="Company Name" value="TechNova Inc." />
                    <x-ui.input label="Start Date" type="month" value="2023-01" />
                    <x-ui.input label="End Date" type="month" placeholder="Present" />
                </div>
                <x-ui.input type="textarea" label="Description" rows="3" value="Lead a team of 4 frontend developers to rebuild the core SaaS platform using React and Tailwind CSS. Improved page load performance by 40% and implemented a robust design system." />
                
                <div class="flex justify-end gap-3 pt-3">
                    <x-ui.button size="sm" variant="danger" class="mr-auto"><i class="fa-regular fa-trash-can mr-1.5"></i> Delete</x-ui.button>
                    <x-ui.button size="sm" variant="secondary" @click="isEditing = false">Cancel</x-ui.button>
                    <x-ui.button size="sm" variant="primary" @click="isEditing = false">Save</x-ui.button>
                </div>
            </div>
        </div>
        
        <!-- Experience Item 2 -->
        <div class="relative pl-8 sm:pl-12 border-l-2 border-gray-100 group" x-data="{ isEditing: false }">
            <div class="absolute -left-[7px] top-2 w-3 h-3 bg-white border-2 border-gray-300 rounded-full group-hover:border-primary transition-colors"></div>
            
            <div x-show="!isEditing" class="relative">
                <div class="flex justify-between items-start mb-3">
                    <div class="flex gap-5 items-start">
                        <div class="w-12 h-12 rounded-xl bg-gray-50 border border-gray-100 flex items-center justify-center shadow-[0_1px_2px_rgba(0,0,0,0.02)] hidden sm:flex shrink-0">
                            <i class="fa-solid fa-building text-gray-400 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-base font-bold text-gray-900 group-hover:text-primary transition-colors tracking-tight">Web Developer</h4>
                            <p class="text-sm font-semibold text-gray-700">Creative Studio</p>
                            <div class="flex flex-wrap items-center gap-x-3 gap-y-1 text-xs text-gray-500 mt-1 font-medium">
                                <span class="flex items-center"><i class="fa-regular fa-calendar mr-1.5 text-gray-400"></i> Jun 2020 - Dec 2022</span>
                                <span class="hidden sm:inline text-gray-300">•</span>
                                <span class="flex items-center"><i class="fa-solid fa-location-dot mr-1.5 text-gray-400"></i> New York, NY</span>
                            </div>
                        </div>
                    </div>
                    <button @click="isEditing = true" class="text-gray-400 hover:text-primary transition-colors p-2 -mr-2"><i class="fa-solid fa-pen text-xs"></i></button>
                </div>
                
                <p class="text-sm text-gray-600 leading-relaxed mt-3">
                    Developed responsive websites for e-commerce clients using Vue.js and Laravel. Integrated payment gateways and built custom CMS dashboards that increased client retention by 15%.
                </p>
                <div class="flex flex-wrap gap-2 mt-4">
                    <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-[10px] font-semibold text-gray-600 border border-gray-200/60"><i class="fa-brands fa-vuejs mr-1.5 text-emerald-500"></i> Vue.js</span>
                    <span class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-[10px] font-semibold text-gray-600 border border-gray-200/60"><i class="fa-brands fa-laravel mr-1.5 text-red-500"></i> Laravel</span>
                </div>
            </div>
            
            <div x-show="isEditing" x-cloak class="bg-gray-50 p-5 rounded-xl border border-gray-200 space-y-5">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <x-ui.input label="Job Title" value="Web Developer" />
                    <x-ui.input label="Company Name" value="Creative Studio" />
                    <x-ui.input label="Start Date" type="month" value="2020-06" />
                    <x-ui.input label="End Date" type="month" value="2022-12" />
                </div>
                <x-ui.input type="textarea" label="Description" rows="3" value="Developed responsive websites for e-commerce clients using Vue.js and Laravel. Integrated payment gateways and built custom CMS dashboards that increased client retention by 15%." />
                
                <div class="flex justify-end gap-3 pt-3">
                    <x-ui.button size="sm" variant="danger" class="mr-auto"><i class="fa-regular fa-trash-can mr-1.5"></i> Delete</x-ui.button>
                    <x-ui.button size="sm" variant="secondary" @click="isEditing = false">Cancel</x-ui.button>
                    <x-ui.button size="sm" variant="primary" @click="isEditing = false">Save</x-ui.button>
                </div>
            </div>
        </div>
    </div>
</x-ui.card>
