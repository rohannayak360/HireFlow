<x-ui.card title="Key Skills" x-data="{ isEditing: false }">
    <x-slot:headerActions>
        <button @click="isEditing = !isEditing" class="text-sm font-medium text-primary hover:text-primary-hover" x-text="isEditing ? 'Cancel' : 'Edit'"></button>
    </x-slot:headerActions>

    <!-- View Mode -->
    <div x-show="!isEditing">
        <div class="flex flex-wrap gap-2.5">
            @php
                $skills = ['React.js', 'Vue.js', 'Tailwind CSS', 'JavaScript (ES6+)', 'TypeScript', 'Node.js', 'Git', 'Responsive Design', 'Figma'];
            @endphp
            @foreach($skills as $skill)
                <span class="inline-flex items-center rounded-xl bg-gray-50/80 px-3 py-1.5 text-[13px] font-semibold text-gray-700 border border-gray-200/60 shadow-[0_1px_2px_rgba(0,0,0,0.02)] hover:bg-white hover:border-gray-300 hover:shadow-sm hover:-translate-y-0.5 transition-all duration-200 cursor-default">
                    {{ $skill }}
                </span>
            @endforeach
        </div>
    </div>

    <!-- Edit Mode -->
    <div x-show="isEditing" x-cloak class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1.5">Add Skill</label>
            <div class="flex gap-2">
                <div class="relative flex-1">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fa-solid fa-search text-gray-400"></i>
                    </div>
                    <input type="text" class="block w-full rounded-lg border-gray-200 bg-gray-50 focus:bg-white text-gray-900 focus:border-primary focus:ring-primary sm:text-sm transition-colors pl-10" placeholder="e.g. Next.js, Python, SEO...">
                </div>
                <x-ui.button variant="secondary">Add</x-ui.button>
            </div>
        </div>
        
        <div class="flex flex-wrap gap-2 pt-2">
            @foreach($skills as $skill)
                <span class="inline-flex items-center rounded-md bg-primary/10 px-2.5 py-1.5 text-xs font-medium text-primary ring-1 ring-inset ring-primary/20 cursor-pointer hover:bg-rose-50 hover:text-rose-600 hover:ring-rose-200 transition-colors group">
                    {{ $skill }}
                    <i class="fa-solid fa-xmark ml-1.5 text-primary/50 group-hover:text-rose-500"></i>
                </span>
            @endforeach
        </div>
        
        <div class="flex justify-end gap-3 pt-4 border-t border-gray-100 mt-6">
            <x-ui.button variant="primary" @click="isEditing = false">Done</x-ui.button>
        </div>
    </div>
</x-ui.card>
