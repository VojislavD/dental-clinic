<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 gap-4 md:gap-12 lg:gap-20 px-4 md:px-0">
                <div class="flex flex-col items-center justify-center bg-cyan-100 bg-opacity-50 text-cyan-700 border border-cyan-300 py-4 rounded-lg">
                    <span class="text-4xl font-bold">{{ $today }}</span>
                    <span class="text-center">{{ __('Appointments Today') }}</span>
                </div>
                <div class="flex flex-col items-center justify-center bg-sky-100 bg-opacity-50 text-sky-700 border border-sky-300 py-4 rounded-lg">
                    <span class="text-4xl font-bold">{{ $week }}</span>
                    <span class="text-center">{{ __('Appointments This Week') }}</span>
                </div>
                <div class="flex flex-col items-center justify-center bg-blue-100 bg-opacity-50 text-blue-700 border border-blue-300 py-4 rounded-lg">
                    <span class="text-4xl font-bold">{{ $month }}</span>
                    <span class="text-center">{{ __('Appointments This Month') }}</span>
                </div>
            </div>

            <div class="mt-16 bg-white shadow-xl py-4 rounded-lg border border-gray-300">
                <h2 class="text-2xl text-primary text-center font-bold">
                    <span>{{ __('Today') }}</span>
                    <span>|</span>
                    <span>{{ today()->format('Y-m-d') }}</span>
                </h2>
                <table class="w-full mt-8">
                    <thead class="border-b-2 border-primary">
                        <th class="py-2">{{ __('Time') }}</th>
                        <th class="py-2">{{ __('Name') }}</th>
                        <th class="py-2">{{ __('Email') }}</th>
                        <th class="py-2">{{ __('Phone') }}</th>
                        <th class="py-2">{{ __('Manage') }}</th>
                    </thead>
                    <tbody>
                        @forelse ($appointmentsToday as $appointment)
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
                                    {{ __('There are no appointments today.') }}
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
