<div>
    @if(session('appointmentCreated'))
        <div class="w-3/4 md:w-2/3 lg:w-1/2 mx-auto text-center bg-green-200 text-green-800 px-16 py-2 rounded mb-4">
            {{ session('appointmentCreated') }}
        </div>
    @endif
    
    <div class="p-8 space-y-4">
        <form wire:submit.prevent="submit" class="space-y-4" id="updateAppointmentForm">
            <div class="w-full grid grid-cols-2 gap-16">
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
            </div>
            
            <div class="w-full grid grid-cols-2 gap-16">
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
            </div>
        </form>
        <div class="flex flex-col">
            <label for="default_select">{{ __('Date and time') }}</label>
            <div class="flex space-x-4">
                <input
                    wire:model="state.date"
                    type="date" 
                    class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 @error('date') border-red-600 @enderror @error('date_and_time') border-red-600 @enderror"
                    min="{{ date('Y-m-d') }}"
                >
                <select 
                    wire:model.defer="state.time"
                    class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 @error('date_and_time') border-red-600 @enderror"
                >
                    @forelse ($times as $time)
                        <option @if(in_array($time, $notAvailableTimes)) class="text-gray-400" disabled @endif>{{ $time }}</option>
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
        <div class="pt-6">
            <button type="submit" form="updateAppointmentForm" class="bg-primary hover:bg-primary-dark rounded-sm px-6 py-1.5 text-gray-100 hover:shadow-xl transition duration-150">
                {{ __('Create') }}
            </button>
        </div>
    </div>
</div>
