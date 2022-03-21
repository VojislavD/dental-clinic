<x-main>
    <h1 class="text-3xl text-primary text-center font-bold py-16 capitalize">{{ __('Contact Us') }}</h1>

    <div class="max-w-7xl mx-auto grid grid-cols-2 gap-16 pb-16">
        
        @livewire('contact-form')

        <div class="space-y-4">
            <div class="flex items-center space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="font-bold text-gray-800">{{ __('Krunska 77, Belgrade') }}</span>
            </div>
            <div class="flex items-center space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span class="font-bold text-gray-800">{{ __('contact@example.com') }}</span>
            </div>
            <div class="flex items-center space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <span class="font-bold text-gray-800">{{ __('011 4159211') }}</span>
            </div>
            <div class="pt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5661.788180707437!2d20.473306!3d44.803347!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7aa017a04201%3A0x2220b5ec6b879afe!2sKrunska%2077%2C%20Beograd%2011000!5e0!3m2!1sen!2srs!4v1647872499072!5m2!1sen!2srs" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</x-main>