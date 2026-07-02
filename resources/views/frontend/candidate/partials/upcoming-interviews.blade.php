<x-ui.card title="Upcoming Interviews">
    <div class="space-y-4">
        @php
            $interviews = [
                [
                    'role' => 'Product Designer',
                    'company' => 'Creative Studio',
                    'date' => 'Today',
                    'time' => '10:00 AM - 11:30 AM',
                    'type' => 'Video Call (Google Meet)',
                    'logo' => 'https://ui-avatars.com/api/?name=CS&background=8b5cf6&color=fff',
                    'countdown' => 'In 45 mins',
                    'is_urgent' => true
                ],
                [
                    'role' => 'Frontend Developer',
                    'company' => 'TechNova Inc.',
                    'date' => 'Tomorrow',
                    'time' => '02:00 PM - 03:00 PM',
                    'type' => 'Technical Assessment',
                    'logo' => 'https://ui-avatars.com/api/?name=TN&background=2e55fa&color=fff',
                    'countdown' => 'Starts tomorrow',
                    'is_urgent' => false
                ]
            ];
        @endphp

        @forelse($interviews as $interview)
            <div class="group relative rounded-xl border {{ $interview['is_urgent'] ? 'border-primary/30 bg-primary/5' : 'border-gray-100 bg-white' }} p-4 hover:shadow-md transition-all">
                <div class="flex items-start gap-4">
                    <img src="{{ $interview['logo'] }}" class="w-12 h-12 rounded-xl object-cover border border-gray-100 shadow-sm bg-white">
                    <div class="flex-1 min-w-0">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 group-hover:text-primary transition-colors">{{ $interview['role'] }}</h4>
                                <p class="text-xs text-gray-500 mt-0.5">{{ $interview['company'] }}</p>
                            </div>
                            <span class="inline-flex items-center rounded-md {{ $interview['is_urgent'] ? 'bg-rose-50 text-rose-700 ring-rose-600/20' : 'bg-gray-50 text-gray-600 ring-gray-500/10' }} px-2 py-1 text-[10px] font-medium ring-1 ring-inset">
                                {{ $interview['countdown'] }}
                            </span>
                        </div>
                        
                        <div class="mt-3 grid grid-cols-2 gap-2 text-xs text-gray-600">
                            <div class="flex items-center gap-1.5">
                                <i class="fa-regular fa-calendar text-gray-400"></i> {{ $interview['date'] }}
                            </div>
                            <div class="flex items-center gap-1.5">
                                <i class="fa-regular fa-clock text-gray-400"></i> {{ $interview['time'] }}
                            </div>
                        </div>
                        
                        <div class="mt-4 pt-3 border-t {{ $interview['is_urgent'] ? 'border-primary/10' : 'border-gray-100' }} flex items-center justify-between">
                            <div class="flex items-center text-xs text-gray-500">
                                <i class="fa-solid fa-video mr-1.5 {{ $interview['is_urgent'] ? 'text-primary' : 'text-gray-400' }}"></i> {{ $interview['type'] }}
                            </div>
                            @if($interview['is_urgent'])
                                <button class="bg-primary text-white text-xs font-semibold px-3 py-1.5 rounded-lg hover:bg-primary-hover shadow-sm transition-colors animate-pulse hover:animate-none">
                                    Join Now
                                </button>
                            @else
                                <button class="bg-gray-50 text-gray-600 border border-gray-200 text-xs font-medium px-3 py-1.5 rounded-lg hover:bg-gray-100 transition-colors">
                                    Details
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center py-6">
                <div class="w-12 h-12 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-3">
                    <i class="fa-regular fa-calendar-xmark text-gray-400 text-xl"></i>
                </div>
                <p class="text-sm font-medium text-gray-900">No upcoming interviews</p>
                <p class="text-xs text-gray-500 mt-1">Keep applying to get scheduled!</p>
            </div>
        @endforelse
    </div>
</x-ui.card>
