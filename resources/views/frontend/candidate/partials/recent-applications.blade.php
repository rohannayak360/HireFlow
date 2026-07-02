<x-ui.card title="Recent Applications">
    <x-slot:headerActions>
        <a href="#" class="text-sm font-medium text-primary hover:text-primary-hover transition-colors">View all</a>
    </x-slot:headerActions>
    
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr class="bg-gray-50/50">
                    <th scope="col" class="py-3.5 pl-5 pr-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Job Role</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider hidden sm:table-cell">Applied Date</th>
                    <th scope="col" class="relative py-3.5 pl-3 pr-5">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 bg-white">
                @php
                    $applications = [
                        [
                            'role' => 'Senior Frontend Developer',
                            'company' => 'TechNova Inc.',
                            'logo' => 'https://ui-avatars.com/api/?name=TN&background=2e55fa&color=fff',
                            'status' => 'Under Review',
                            'status_color' => 'warning',
                            'date' => 'Oct 24, 2026',
                            'type' => 'Full-time',
                            'remote' => true,
                            'salary' => '$120k'
                        ],
                        [
                            'role' => 'Product Designer',
                            'company' => 'Creative Studio',
                            'logo' => 'https://ui-avatars.com/api/?name=CS&background=8b5cf6&color=fff',
                            'status' => 'Interviewing',
                            'status_color' => 'info',
                            'date' => 'Oct 20, 2026',
                            'type' => 'Contract',
                            'remote' => false,
                            'salary' => '$90/hr'
                        ],
                        [
                            'role' => 'Full Stack Engineer',
                            'company' => 'Global Systems',
                            'logo' => 'https://ui-avatars.com/api/?name=GS&background=10b981&color=fff',
                            'status' => 'Applied',
                            'status_color' => 'gray',
                            'date' => 'Oct 18, 2026',
                            'type' => 'Full-time',
                            'remote' => true,
                            'salary' => '$135k'
                        ],
                        [
                            'role' => 'UI/UX Designer',
                            'company' => 'Innovate Tech',
                            'logo' => 'https://ui-avatars.com/api/?name=IT&background=f43f5e&color=fff',
                            'status' => 'Rejected',
                            'status_color' => 'danger',
                            'date' => 'Oct 15, 2026',
                            'type' => 'Full-time',
                            'remote' => false,
                            'salary' => '$110k'
                        ],
                    ];
                @endphp
                
                @foreach($applications as $app)
                <tr class="hover:bg-gray-50/80 transition-colors group">
                    <td class="whitespace-nowrap py-4 pl-5 pr-3">
                        <div class="flex items-center">
                            <div class="h-10 w-10 flex-shrink-0 group-hover:scale-105 transition-transform">
                                <img class="h-10 w-10 rounded-lg object-cover border border-gray-100 shadow-sm" src="{{ $app['logo'] }}" alt="">
                            </div>
                            <div class="ml-4">
                                <div class="font-medium text-gray-900 group-hover:text-primary transition-colors">{{ $app['role'] }}</div>
                                <div class="flex items-center gap-2 mt-0.5">
                                    <span class="text-xs text-gray-500">{{ $app['company'] }}</span>
                                    <span class="text-[10px] text-gray-300">•</span>
                                    <span class="text-xs font-medium text-gray-600">{{ $app['salary'] }}</span>
                                    @if($app['remote'])
                                        <span class="inline-flex items-center rounded-md bg-blue-50 px-1.5 py-0.5 text-[10px] font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Remote</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="whitespace-nowrap px-3 py-4">
                        <x-ui.badge color="{{ $app['status_color'] }}" dot="true">
                            {{ $app['status'] }}
                        </x-ui.badge>
                    </td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 hidden sm:table-cell">
                        {{ $app['date'] }}
                    </td>
                    <td class="relative whitespace-nowrap py-4 pl-3 pr-5 text-right text-sm font-medium">
                        <button class="text-gray-400 hover:text-primary transition-colors p-2 rounded-md hover:bg-primary/10">
                            <i class="fa-solid fa-chevron-right text-xs"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-ui.card>
