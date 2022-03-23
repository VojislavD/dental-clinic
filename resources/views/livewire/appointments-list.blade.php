<div>
    <h2 class="space-x-2">
        <span class="text-lg text-primary font-bold">
            {{ __('Appointments For ') }}
        </span>
        <input
            wire:model="day" 
            type="date" 
            class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300"
        >
    </h2>

    <div class="mt-8 bg-white shadow-xl py-4 rounded-lg border border-gray-300">
        <table class="w-full">
            <thead class="border-b-2 border-primary">
                <th class="py-2">{{ __('Time') }}</th>
                <th class="py-2">{{ __('Name') }}</th>
                <th class="py-2">{{ __('Email') }}</th>
                <th class="py-2">{{ __('Phone') }}</th>
                <th class="py-2">{{ __('Manage') }}</th>
            </thead>
            <tbody>
                @forelse ($appointments as $appointment)
                    <tr class="border-b border-gray-300">
                        <td class="text-center font-bold py-3">
                            {{ $appointment->scheduled_at->format('H:i A') }}
                        </td>
                        <td class="text-center py-3">
                            {{ $appointment->fullName }}
                        </td>
                        <td class="text-center py-3">
                            {{ $appointment->email }}
                        </td>
                        <td class="text-center py-3">
                            {{ $appointment->phone }}
                        </td>
                        <td class="text-center py-3">
                            <a href="#" class="inline-block text-yellow-600 hover:text-yellow-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-8 font-bold">
                            {{ __('There are no appointments for this day.') }}
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
