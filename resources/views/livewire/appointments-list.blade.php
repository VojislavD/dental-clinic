<div x-data="{ updateModal: @entangle('showModal') }">
    @if(session('appointmentUpdated'))
        <div class="w-3/4 md:w-2/3 lg:w-1/2 mx-auto text-center bg-green-200 text-green-800 px-16 py-2 rounded mb-4">
            {{ session('appointmentUpdated') }}
        </div>
    @endif
    @if(session('appointmentDeleted'))
        <div class="w-3/4 md:w-2/3 lg:w-1/2 mx-auto text-center bg-green-200 text-green-800 px-16 py-2 rounded mb-4">
            {{ session('appointmentDeleted') }}
        </div>
    @endif
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
                            <button
                                wire:click="editAppointment({{$appointment}})" 
                                @click="updateModal = true"
                                class="text-yellow-600 hover:text-yellow-700"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </button>
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

    <div
        x-show="updateModal" 
        x-cloak
        class="w-full h-screen fixed left-0 top-0 bg-black bg-opacity-30 flex items-center justify-center"
    >
        <div 
            @click.away="updateModal = false"
            class="w-1/3 bg-gray-100 rounded-lg shadow-xl"
        >
            <div class="relative border-b border-gray-300">
                <h3 class="text-lg text-primary font-bold py-3 text-center">
                    {{ __('Edit Appointment') }}
                </h3>
                <button 
                    @click="updateModal = false"
                    class="absolute top-3 right-3 text-gray-700 hover:text-gray-900" 
                    title="{{ __('Close') }}"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="p-8 space-y-4">
                <form wire:submit.prevent="submit" class="space-y-4" id="updateAppointmentForm">
                    <div class="flex flex-col">
                        <label for="first_name">
                            {{ __('First Name') }}
                        </label>
                        <input 
                            wire:model.defer="state.first_name"
                            type="text" 
                            id="first_name" 
                            class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 @error('first_name') border-red-600 @enderror"
                        >
                        @error('first_name')
                            <p class="text-sm text-red-600 font-bold mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="last_name">
                            {{ __('Last Name') }}
                        </label>
                        <input 
                            wire:model.defer="state.last_name"
                            type="text" 
                            id="last_name" 
                            class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 @error('last_name') border-red-600 @enderror"
                        >
                        @error('last_name')
                            <p class="text-sm text-red-600 font-bold mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="email">
                            {{ __('Email') }}
                        </label>
                        <input 
                            wire:model.defer="state.email"
                            type="email" 
                            id="email" 
                            class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 @error('email') border-red-600 @enderror"
                        >
                        @error('email')
                            <p class="text-sm text-red-600 font-bold mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label for="phone">
                            {{ __('Phone') }}
                        </label>
                        <input 
                            wire:model.defer="state.phone"
                            type="text" 
                            id="phone" 
                            class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 @error('phone') border-red-600 @enderror"
                        >
                        @error('phone')
                            <p class="text-sm text-red-600 font-bold mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </form>
                <div class="flex flex-col">
                    <label for="default_select">{{ __('Date and time') }}</label>
                    <div class="flex space-x-4">
                        <input
                            wire:model="state.date"
                            type="date" 
                            class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300"
                        >
                        <select 
                            wire:model.defer="state.time"
                            class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300"
                        >
                            @forelse ($times as $time)
                                <option @if(in_array($time, $availableTimes)) class="text-gray-400" disabled @endif>{{ $time }}</option>
                            @empty
                                <option></option>
                            @endforelse
                        </select>
                    </div>
                    @error('date')
                        <p class="text-sm text-red-600 font-bold mt-1">{{ $message }}</p>
                    @enderror
                    @error('date_and_time')
                        <p class="text-sm text-red-600 font-bold mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="pt-6 flex items-center justify-between">
                    <button type="submit" form="updateAppointmentForm" class="bg-primary hover:bg-primary-dark rounded-sm px-6 py-1.5 text-gray-100 hover:shadow-xl transition duration-150">
                        {{ __('Save') }}
                    </button>
                    <button 
                        wire:click="delete"
                        class="text-sm text-red-600 hover:underline"
                        title="{{ __('Delete Appointment') }}"
                    >
                        {{ __('Delete') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
