<x-ui.card title="Personal Information" x-data="{ isEditing: false }">
    <x-slot:headerActions>
        <button @click="isEditing = !isEditing" class="text-sm font-medium text-primary hover:text-primary-hover" x-text="isEditing ? 'Cancel' : 'Edit'"></button>
    </x-slot:headerActions>

    <!-- View Mode -->
    <div x-show="!isEditing" class="grid grid-cols-1 sm:grid-cols-2 gap-y-6 gap-x-8">
        <div>
            <p class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-1 flex items-center gap-1.5"><i class="fa-regular fa-user text-gray-400"></i> Full Name</p>
            <p class="text-sm text-gray-900 font-medium">John Doe</p>
        </div>
        <div>
            <p class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-1 flex items-center gap-1.5"><i class="fa-regular fa-envelope text-gray-400"></i> Email Address</p>
            <p class="text-sm text-gray-900 font-medium">john.doe@example.com <span class="ml-2 inline-flex items-center rounded-md bg-emerald-50 px-1.5 py-0.5 text-[10px] font-medium text-emerald-700 ring-1 ring-inset ring-emerald-600/20">Verified</span></p>
        </div>
        <div>
            <p class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-1 flex items-center gap-1.5"><i class="fa-solid fa-phone text-gray-400"></i> Phone Number</p>
            <p class="text-sm text-gray-900 font-medium">+1 (555) 123-4567</p>
        </div>
        <div>
            <p class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-1 flex items-center gap-1.5"><i class="fa-regular fa-calendar text-gray-400"></i> Date of Birth</p>
            <p class="text-sm text-gray-900 font-medium">March 15, 1995</p>
        </div>
        <div class="sm:col-span-2">
            <p class="text-xs font-medium text-gray-500 uppercase tracking-wider mb-1 flex items-center gap-1.5"><i class="fa-solid fa-map-pin text-gray-400"></i> Address</p>
            <p class="text-sm text-gray-900 font-medium">123 Tech Boulevard, Apt 4B, San Francisco, CA 94105</p>
        </div>
    </div>

    <!-- Edit Mode -->
    <div x-show="isEditing" x-cloak class="space-y-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <x-ui.input label="First Name" value="John" />
            <x-ui.input label="Last Name" value="Doe" />
            <x-ui.input label="Email Address" type="email" value="john.doe@example.com" />
            <x-ui.input label="Phone Number" type="tel" value="+1 (555) 123-4567" />
            <x-ui.input label="Date of Birth" type="date" value="1995-03-15" />
        </div>
        <x-ui.input label="Address" value="123 Tech Boulevard, Apt 4B, San Francisco, CA 94105" />
        
        <div class="flex justify-end gap-3 pt-4 border-t border-gray-100 mt-6">
            <x-ui.button variant="secondary" @click="isEditing = false">Cancel</x-ui.button>
            <x-ui.button variant="primary" @click="isEditing = false">Save Details</x-ui.button>
        </div>
    </div>
</x-ui.card>
