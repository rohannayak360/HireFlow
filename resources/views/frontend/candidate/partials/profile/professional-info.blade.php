<x-ui.card title="Professional Information" x-data="{ isEditing: false }">
    <x-slot:headerActions>
        <button @click="isEditing = !isEditing" class="text-sm font-medium text-primary hover:text-primary-hover" x-text="isEditing ? 'Cancel' : 'Edit'"></button>
    </x-slot:headerActions>

    <!-- View Mode -->
    <div x-show="!isEditing" class="space-y-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-6 gap-x-8">
            <div>
                <p class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-1 flex items-center gap-1.5"><i class="fa-solid fa-user-tie text-gray-400"></i> Current Job Title</p>
                <p class="text-sm text-gray-900 font-medium">Senior Frontend Developer</p>
            </div>
            <div>
                <p class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-1 flex items-center gap-1.5"><i class="fa-solid fa-clock-rotate-left text-gray-400"></i> Total Experience</p>
                <p class="text-sm text-gray-900 font-medium">6 Years</p>
            </div>
            <div>
                <p class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-1 flex items-center gap-1.5"><i class="fa-solid fa-money-bill-wave text-gray-400"></i> Expected Salary</p>
                <p class="text-sm text-gray-900 font-medium">$120,000 / year</p>
            </div>
        </div>
        <div class="bg-gray-50/50 p-5 rounded-xl border border-gray-100/80">
            <p class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-2 flex items-center gap-1.5"><i class="fa-solid fa-quote-left text-gray-400"></i> About Me</p>
            <p class="text-sm text-gray-700 leading-relaxed">
                Passionate and detail-oriented Frontend Developer with 6 years of experience building scalable, responsive, and accessible web applications. Expert in React, Vue, and modern CSS frameworks like Tailwind CSS. Strong track record of improving site performance and collaborating with cross-functional teams to deliver exceptional user experiences.
            </p>
        </div>
    </div>

    <!-- Edit Mode -->
    <div x-show="isEditing" x-cloak class="space-y-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <x-ui.input label="Current Job Title" value="Senior Frontend Developer" />
            
            <div class="w-full">
                <x-ui.input type="select" label="Total Experience (Years)">
                    <option>0-2 Years</option>
                    <option>3-5 Years</option>
                    <option selected>6-8 Years</option>
                    <option>8+ Years</option>
                </x-ui.input>
            </div>
            
            <x-ui.input label="Expected Salary" value="$120,000" icon="fa-solid fa-dollar-sign" />
        </div>
        
        <x-ui.input type="textarea" label="About Me" rows="4" value="Passionate and detail-oriented Frontend Developer with 6 years of experience building scalable, responsive, and accessible web applications. Expert in React, Vue, and modern CSS frameworks like Tailwind CSS. Strong track record of improving site performance and collaborating with cross-functional teams to deliver exceptional user experiences." />
        
        <div class="flex justify-end gap-3 pt-4 border-t border-gray-100 mt-6">
            <x-ui.button variant="secondary" @click="isEditing = false">Cancel</x-ui.button>
            <x-ui.button variant="primary" @click="isEditing = false">Save Details</x-ui.button>
        </div>
    </div>
</x-ui.card>
