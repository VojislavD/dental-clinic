<div x-data="{ showForm: false }" class="min-h-[500px]">
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
                    class="py-2 border hover:bg-gray-200 @if(!empty($state['time']) && $state['time'] == $time) bg-primary hover:bg-primary-dark text-gray-100 @endif"
                    title="{{ __('Choose') }}">
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
            <div class="grid grid-cols-2 gap-16">
                <div class="flex flex-col">
                    <label for="first_name">
                        {{ __('First Name') }}
                    </label>
                    <input 
                        type="text" 
                        id="first_name" 
                        class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300"
                    >
                </div>
                <div class="flex flex-col">
                    <label for="last_name">
                        {{ __('Last Name') }}
                    </label>
                    <input 
                        type="text" 
                        id="last_name" 
                        class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300"
                    >
                </div>
            </div>
            <div class="grid grid-cols-2 gap-16">
                <div class="flex flex-col">
                    <label for="email">
                        {{ __('Email') }}
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300"
                    >
                </div>
                <div class="flex flex-col">
                    <label for="phone">
                        {{ __('Phone') }}
                    </label>
                    <input 
                        type="text" 
                        id="phone" 
                        class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300"
                    >
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