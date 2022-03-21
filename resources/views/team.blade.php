<x-main>
    <h1 class="text-3xl text-primary text-center font-bold py-16 capitalize">{{ __('Our Team') }}</h1>
    
    <div class="max-w-7xl mx-auto grid grid-cols-2 lg:grid-cols-4 gap-12 pb-16 px-4 xl:px-0">
        <div>
            <img 
                src="{{ asset('/img/team/dentist1.jpg') }}" 
                class=""
                alt="{{ __('Dr. Violet Wagner') }}"
            >
            <p class="text-2xl text-primary font-bold mt-4">{{ __('Dr. Violet Wagner') }}</p>
            <p class="text-lg text-gray-800 font-bold">{{ __('Dentist') }}</p>
            <p class="text-lg mt-4">{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.') }}</p>
        </div>
        <div>
            <img 
                src="{{ asset('/img/team/dentist2.jpg') }}" 
                class=""
                alt="{{ __('Dr. Amanda Peterson') }}"
            >
            <p class="text-2xl text-primary font-bold mt-4">{{ __('Dr. Amanda Peterson') }}</p>
            <p class="text-lg text-gray-800 font-bold">{{ __('Dentist') }}</p>
            <p class="text-lg mt-4">{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.') }}</p>
        </div>
        <div>
            <img 
                src="{{ asset('/img/team/nurse1.jpg') }}" 
                class=""
                alt="{{ __('Ellie Mueller') }}"
            >
            <p class="text-2xl text-primary font-bold mt-4">{{ __('Ellie Mueller') }}</p>
            <p class="text-lg text-gray-800 font-bold">{{ __('Nurse') }}</p>
            <p class="text-lg mt-4">{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.') }}</p>
        </div>
        <div>
            <img 
                src="{{ asset('/img/team/nurse2.jpg') }}" 
                class=""
                alt="{{ __('Rosie Wilson') }}"
            >
            <p class="text-2xl text-primary font-bold mt-4">{{ __('Rosie Wilson') }}</p>
            <p class="text-lg text-gray-800 font-bold">{{ __('Nurse') }}</p>
            <p class="text-lg mt-4">{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.') }}</p>
        </div>
    </div>
</x-main>