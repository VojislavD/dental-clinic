<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
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
        </div>
    </div>
</x-app-layout>
