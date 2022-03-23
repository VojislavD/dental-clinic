<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-primary leading-tight">
                {{ __('Appointments') }}
            </h2>
            <a 
                href="{{ route('appointments.create') }}"
                class="flex items-center space-x-2 bg-primary hover:bg-primary-dark text-gray-100 px-4 py-1 rounded"
                title="{{ __('Create Appointment') }}"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-sm font-bold">{{ __('Create') }}</span>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @livewire('appointments-list')
        </div>
    </div>
</x-app-layout>
