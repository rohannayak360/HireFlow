<x-ui.card title="Recommended Jobs" description="Based on your profile and search history">
    <x-slot:headerActions>
        <div class="flex gap-2">
            <button class="w-8 h-8 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:text-gray-600 hover:bg-gray-50 transition-colors">
                <i class="fa-solid fa-chevron-left text-xs"></i>
            </button>
            <button class="w-8 h-8 rounded-full border border-gray-200 flex items-center justify-center text-gray-400 hover:text-gray-600 hover:bg-gray-50 transition-colors">
                <i class="fa-solid fa-chevron-right text-xs"></i>
            </button>
        </div>
    </x-slot:headerActions>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        @php
            $jobs = [
                [
                    'role' => 'Lead Frontend Developer',
                    'company' => 'Stripe',
                    'location' => 'San Francisco, CA (Remote)',
                    'type' => 'Full-time',
                    'salary' => '$120k - $150k',
                    'logo' => 'https://ui-avatars.com/api/?name=St&background=635BFF&color=fff',
                    'posted' => '2 days ago'
                ],
                [
                    'role' => 'Senior React Engineer',
                    'company' => 'Shopify',
                    'location' => 'Toronto, ON (Hybrid)',
                    'type' => 'Full-time',
                    'salary' => '$110k - $140k',
                    'logo' => 'https://ui-avatars.com/api/?name=Sh&background=95BF47&color=fff',
                    'posted' => '5 days ago'
                ]
            ];
        @endphp

        @foreach($jobs as $job)
        <div class="group border border-gray-100 rounded-xl p-4 hover:border-primary/30 hover:shadow-md transition-all bg-white relative">
            <div class="absolute top-4 right-4">
                <button class="text-gray-300 hover:text-primary transition-colors focus:outline-none">
                    <i class="fa-regular fa-bookmark"></i>
                </button>
            </div>
            
            <div class="flex items-start gap-3">
                <img src="{{ $job['logo'] }}" alt="{{ $job['company'] }}" class="w-10 h-10 rounded-lg object-cover border border-gray-100">
                <div>
                    <h4 class="font-semibold text-gray-900 group-hover:text-primary transition-colors leading-tight pr-6">{{ $job['role'] }}</h4>
                    <p class="text-sm text-gray-500 mt-1">{{ $job['company'] }}</p>
                </div>
            </div>
            
            <div class="mt-4 flex flex-wrap gap-2">
                <span class="inline-flex items-center px-2 py-1 rounded-md bg-gray-50 text-xs font-medium text-gray-600 border border-gray-100">
                    <i class="fa-solid fa-location-dot mr-1.5 text-gray-400"></i>{{ $job['location'] }}
                </span>
                <span class="inline-flex items-center px-2 py-1 rounded-md bg-gray-50 text-xs font-medium text-gray-600 border border-gray-100">
                    <i class="fa-regular fa-clock mr-1.5 text-gray-400"></i>{{ $job['type'] }}
                </span>
            </div>
            
            <div class="mt-4 pt-4 border-t border-gray-100 flex items-center justify-between">
                <p class="text-sm font-semibold text-gray-900">{{ $job['salary'] }}</p>
                <p class="text-xs text-gray-400">{{ $job['posted'] }}</p>
            </div>
            
            <a href="#" class="mt-4 block w-full text-center py-2 px-4 rounded-lg bg-primary/5 text-primary text-sm font-medium hover:bg-primary hover:text-white transition-colors opacity-0 group-hover:opacity-100 transform translate-y-2 group-hover:translate-y-0 duration-200">
                View Details
            </a>
        </div>
        @endforeach
    </div>
</x-ui.card>
