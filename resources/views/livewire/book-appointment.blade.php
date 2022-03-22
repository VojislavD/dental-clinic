<div x-data="{ showForm: false }" class="min-h-[500px]">
    @if(session('appointmentCreated'))
        <div class="w-full md:w-3/4 lg:w-2/3 mx-auto text-center bg-green-200 text-green-800 px-16 py-2 rounded mb-4">
            {{ session('appointmentCreated') }}
        </div>
    @endif
    <div>
        <label for="date">
            {{ __('Choose Date:') }}
        </label>
        <input 
            wire:model="state.date"
            type="date" 
            id="date" 
            class="py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300"
            min="{{ date('Y-m-d') }}"
        >
    </div>

    <div class="mt-4">
        <p>{{ __('Choose time for an appointment:') }}</p>
        <div class="mt-2 grid grid-cols-8 w-full bg-gray-100 text-gray-800">
            @foreach ($times as $time)
                <button
                    @click="showForm = true" 
                    wire:click="setTime('{{ $time }}')"
                    class="@if(in_array($time, $availableTimes)) text-gray-400 @else text-gray-900 hover:bg-gray-200 @endif py-2 border @if(!empty($state['time']) && $state['time'] == $time) bg-primary hover:bg-primary-dark text-gray-100 @endif"
                    @if(in_array($time, $availableTimes)) disabled @endif
                >
                    {{ $time }}
                </button>
            @endforeach
        </div>
    </div>

    <form 
        wire:submit.prevent="submit"
        x-show="showForm"
        x-cloak
        class="w-full md:w-2/3 mx-auto mt-16 space-y-4"
    >
        @if(!empty($this->state['date']) && !empty($this->state['time']))
            <p>
                {{ __('Appointment will be scheduled at:') }} 
                <span class="bg-primary px-4 py-2 font-bold text-gray-100">
                    {{ $state['date'] }} {{ $this->state['time'] }}
                </span>
            </p>
            <p>{{ __('Enter Your Informations') }}</p>

            @error('date')
                <p class="text-sm text-red-600 font-bold mt-1">{{ $message }}</p>
            @enderror

            @error('date_and_time')
                <p class="text-sm text-red-600 font-bold mt-1">{{ $message }}</p>
            @enderror

            <div class="grid grid-cols-2 gap-16">
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
            <div class="grid grid-cols-2 gap-16">
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
            <div class="mt-4">
                <button class="bg-primary hover:bg-primary-dark rounded-sm px-6 py-1.5 text-gray-100 hover:shadow-xl transition duration-150">
                    {{ __('Book') }}
                </button>
            </div>
        @else
            <p class="font-bold">{{ __('Please choose date and time.') }}</p>
        @endif
    </form>
</div>