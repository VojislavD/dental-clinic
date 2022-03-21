<x-main>
    <div class="flex items-center">
        <img 
            src="{{ asset('/img/welcome/header.jpg') }}" 
            class="w-full" 
            alt="Header"
        >
        <div class="w-2/3 absolute flex flex-col items-center space-y-2 md:space-y-8">
            <div class="flex flex-col items-center space-y-1 md:space-y-2">
                <p class="sm:text-xl md:text-2xl lg:text-4xl xl:text-6xl font-bold text-gray-100 text-center">
                    {{ __('Achive Your Desired') }}
                </p>
                <p class="sm:text-xl md:text-2xl lg:text-4xl xl:text-6xl font-bold text-gray-100 text-center">
                    {{ __('Perfect Smile') }}
                </p>
            </div>
            <a 
                href="#" 
                class="text-xs md:text-sm lg:text-lg text-gray-100 hover:text-primary hover:bg-gray-100 border-2 border-gray-100 px-4 py-2 uppercase transition duration-100" 
                title="{{ __('Book an appointment') }}"
            >
                {{ __('Book an appointment') }}
            </a>
        </div>
    </div>

    <div>
        <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4">
            <div class="flex flex-col items-center justify-center py-8 hover:bg-gray-300">
                <img
                    class="w-8 md:w-12 h-8 md:h-12 my-2" 
                    src="{{ asset('/img/welcome/implantology.png') }}" 
                    alt="{{ __('Implantology') }}"
                >
                <span class="text-primary text-lg md:text-xl font-bold">{{ __('Implantology') }}</span>
            </div>
            <div class="flex flex-col items-center justify-center py-8 hover:bg-gray-300">
                <img
                    class="w-8 md:w-12 h-8 md:h-12 my-2" 
                    src="{{ asset('/img/welcome/oral-surgery.png') }}" 
                    alt="{{ __('Oral Surgery') }}"
                >
                <span class="text-primary text-lg md:text-xl font-bold">{{ __('Oral Surgery') }}</span>
            </div>
            <div class="flex flex-col items-center justify-center py-8 hover:bg-gray-300">
                <img
                    class="w-8 md:w-12 h-8 md:h-12 my-2" 
                    src="{{ asset('/img/welcome/orthodontics.png') }}" 
                    alt="{{ __('Orthodontics') }}"
                >
                <span class="text-primary text-lg md:text-xl font-bold">{{ __('Orthodontics') }}</span>
            </div>
            <div class="flex flex-col items-center justify-center py-8 hover:bg-gray-300">
                <img
                    class="w-8 md:w-12 h-8 md:h-12 my-2" 
                    src="{{ asset('/img/welcome/cosmetic-dentistry.png') }}" 
                    alt="{{ __('Cosmetic Dentistry') }}"
                >
                <span class="text-primary text-lg md:text-xl font-bold">{{ __('Cosmetic Dentistry') }}</span>
            </div>
        </div>
    </div>

    <div class="py-16">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-center px-4 xl:px-0 space-y-6 lg:space-y-0">
            <div class="w-full lg:w-1/2">
                <img 
                    src="{{ asset('/img/welcome/welcome.jpg') }}" 
                    class="w-full md:w-3/4 lg:w-full mx-auto"
                    alt="{{ __('Welcome to our clinic') }}"
                >
            </div>
            <div class="w-full lg:w-1/2 flex flex-col justify-center px-4 lg:px-12 space-y-4">
                <h2 class="text-3xl text-primary font-bold uppercase text-center lg:text-left">{{ __('Welcome To Our Clinic') }}</h2>
                <p class="text-lg text-center lg:text-left">
                    {{ __('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.') }}
                </p>
                <div class="py-4 flex items-center justify-center lg:justify-start">
                    <a href="#" class="bg-primary hover:bg-primary-dark text-gray-100 font-bold px-8 py-2 rounded">
                        {{ __('Read More') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-primary w-full">
        <div class="max-w-7xl mx-auto py-16 space-y-16">
            <h2 class="text-4xl font-bold text-center text-gray-100 capitalize">{{ __('Why to choose us?') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-8 xl:gap-12 px-4 xl:px-0 space-y-4 lg:space-y-0">
                <div class="flex flex-col items-center justify-center space-y-6">
                    <span class="text-gray-100 hover:text-primary border-2 border-gray-100 p-8 rounded-full hover:bg-gray-100 transition duration-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 md:h-12 w-8 md:w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </span>
                    <p class="text-2xl text-center text-gray-100 font-bold">{{ __('Easy booking') }}</p>
                    <p class="text-lg text-center text-gray-100">{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.') }}</p>
                </div>
                <div class="flex flex-col items-center justify-center space-y-6">
                    <span class="text-gray-100 hover:text-primary border-2 border-gray-100 p-8 rounded-full hover:bg-gray-100 transition duration-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 md:h-12 w-8 md:w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </span>
                    <p class="text-2xl text-center text-gray-100 font-bold">{{ __('Experience') }}</p>
                    <p class="text-lg text-center text-gray-100">{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.') }}</p>
                </div>
                <div class="flex flex-col items-center justify-center space-y-6">
                    <span class="text-gray-100 hover:text-primary border-2 border-gray-100 p-8 rounded-full hover:bg-gray-100 transition duration-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 md:h-12 w-8 md:w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </span>
                    <p class="text-2xl text-center text-gray-100 font-bold">{{ __('Flexible schedule') }}</p>
                    <p class="text-lg text-center text-gray-100">{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.') }}</p>
                </div>
                <div class="flex flex-col items-center justify-center space-y-6">
                    <span class="text-gray-100 hover:text-primary border-2 border-gray-100 p-8 rounded-full hover:bg-gray-100 transition duration-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 md:h-12 w-8 md:w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                        </svg>
                    </span>
                    <p class="text-2xl text-center text-gray-100 font-bold">{{ __('Best price guarantee') }}</p>
                    <p class="text-lg text-center text-gray-100">{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.') }}</p>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="max-w-7xl mx-auto py-16 space-y-16">
            <h2 class="text-4xl font-bold text-center text-primary capitalize">{{ __('What Patients Say About Us?') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-4 lg:gap-12 px-8 xl:px-0">
                <div>
                    <img 
                        src="{{ asset('/img/welcome/patient1.jpg') }}" 
                        class="w-1/3 rounded-full mx-auto" 
                        alt="Patient"
                    >
                    <svg version="1.1" class="w-8 h-8 text-primary" fill="currentColor" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 122.88 92.81" style="enable-background:new 0 0 122.88 92.81" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M15.91,0h22.08c8.5,0,15.45,6.95,15.45,15.45c0,31.79,8.13,66.71-30.84,76.68 C4.94,96.64,0.34,77.2,19.12,75.86c11.45-0.82,13.69-8.22,14.04-19.4H15.45C6.95,56.45,0,49.5,0,41.01V15.91C0,7.16,7.16,0,15.91,0 L15.91,0z M84.65,0h22.08c8.5,0,15.45,6.95,15.45,15.45c0,31.79,8.13,66.71-30.84,76.68c-17.65,4.51-22.25-14.93-3.48-16.27 c11.45-0.82,13.69-8.22,14.04-19.4H84.18c-8.5,0-15.45-6.95-15.45-15.45V15.91C68.74,7.16,75.9,0,84.65,0L84.65,0z"/></g></svg>
                    <div class="mt-3 px-4 space-y-2 text-center md:text-left">
                        <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.') }}</p>
                        <p class="text-lg font-bold">{{ __('Amanda Mitchell') }}</p>
                    </div>
                </div>
                <div>
                    <img 
                        src="{{ asset('/img/welcome/patient2.jpg') }}" 
                        class="w-1/3 rounded-full mx-auto" 
                        alt="Patient"
                    >
                    <svg version="1.1" class="w-8 h-8 text-primary" fill="currentColor" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 122.88 92.81" style="enable-background:new 0 0 122.88 92.81" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M15.91,0h22.08c8.5,0,15.45,6.95,15.45,15.45c0,31.79,8.13,66.71-30.84,76.68 C4.94,96.64,0.34,77.2,19.12,75.86c11.45-0.82,13.69-8.22,14.04-19.4H15.45C6.95,56.45,0,49.5,0,41.01V15.91C0,7.16,7.16,0,15.91,0 L15.91,0z M84.65,0h22.08c8.5,0,15.45,6.95,15.45,15.45c0,31.79,8.13,66.71-30.84,76.68c-17.65,4.51-22.25-14.93-3.48-16.27 c11.45-0.82,13.69-8.22,14.04-19.4H84.18c-8.5,0-15.45-6.95-15.45-15.45V15.91C68.74,7.16,75.9,0,84.65,0L84.65,0z"/></g></svg>
                    <div class="mt-3 px-4 space-y-2 text-center md:text-left">
                        <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.') }}</p>
                        <p class="text-lg font-bold">{{ __('Gary Growles') }}</p>
                    </div>
                </div>
                <div>
                    <img 
                        src="{{ asset('/img/welcome/patient3.jpg') }}" 
                        class="w-1/3 rounded-full mx-auto" 
                        alt="Patient"
                    >
                    <svg version="1.1" class="w-8 h-8 text-primary" fill="currentColor" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 122.88 92.81" style="enable-background:new 0 0 122.88 92.81" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M15.91,0h22.08c8.5,0,15.45,6.95,15.45,15.45c0,31.79,8.13,66.71-30.84,76.68 C4.94,96.64,0.34,77.2,19.12,75.86c11.45-0.82,13.69-8.22,14.04-19.4H15.45C6.95,56.45,0,49.5,0,41.01V15.91C0,7.16,7.16,0,15.91,0 L15.91,0z M84.65,0h22.08c8.5,0,15.45,6.95,15.45,15.45c0,31.79,8.13,66.71-30.84,76.68c-17.65,4.51-22.25-14.93-3.48-16.27 c11.45-0.82,13.69-8.22,14.04-19.4H84.18c-8.5,0-15.45-6.95-15.45-15.45V15.91C68.74,7.16,75.9,0,84.65,0L84.65,0z"/></g></svg>
                    <div class="mt-3 px-4 space-y-2 text-center md:text-left">
                        <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.') }}</p>
                        <p class="text-lg font-bold">{{ __('Daniela Robbery') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-primary py-24 text-center px-4">
        <h2 class="text-3xl md:text-4xl text-gray-100">{{ __('How can we help...') }}</h2>
        <p class="text-xl md:text-2xl text-gray-100">{{ __('We offer a wide range of procedures to help you get the perfect smile.')}}</p>
        <div class="pt-12">
            <a 
                href="#"
                class="text-gray-100 hover:text-primary hover:bg-gray-100 border-2 border-gray-100 px-4 py-2 rounded uppercase text-sm font-bold"
                >
                {{ __('Book an Appointment') }}
            </a>
        </div>
    </div>
</x-main>