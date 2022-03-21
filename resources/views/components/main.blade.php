<x-guest-layout>
    <!-- start:Topbar -->
    <div class="w-full py-3 border-b">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 pl-4 pr-14 2xl:pl-0 2xl:pr-0">
            <ul class="flex flex-col md:flex-row items-center justify-center space-y-1 md:space-y-0 md:space-x-6 text-sm text-gray-400">
                <li class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>{{ __('Krunska 77, Belgrade') }}</span>
                </li>
                <li class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>{{ __('contact@example.com') }}</span>
                </li>
                <li class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span>{{ __('011 4159211') }}</span>
                </li>
            </ul>
            <ul class="flex items-center justify-center space-x-4">
                <li>
                    <a href="https://www.facebook.com/" title="{{ __('Facebook') }}" target="_blank">
                        <svg class="w-4 h-4" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M374.245,285.825l14.104,-91.961l-88.233,0l0,-59.677c0,-25.159 12.325,-49.682 51.845,-49.682l40.117,0l0,-78.291c0,0 -36.408,-6.214 -71.214,-6.214c-72.67,0 -120.165,44.042 -120.165,123.775l0,70.089l-80.777,0l0,91.961l80.777,0l0,222.31c16.197,2.542 32.798,3.865 49.709,3.865c16.911,0 33.512,-1.323 49.708,-3.865l0,-222.31l74.129,0Z" style="fill:#1877f2;fill-rule:nonzero;"/></svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/" title="{{ __('Instagram') }}" target="_blank">
                        <svg class="w-4 h-4" enable-background="new 0 0 128 128" id="Social_Icons" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x37__stroke"><g id="Instagram_1_"><rect clip-rule="evenodd" fill="none" fill-rule="evenodd" height="128" width="128"/><radialGradient cx="19.1111" cy="128.4444" gradientUnits="userSpaceOnUse" id="Instagram_2_" r="163.5519"><stop offset="0" style="stop-color:#FFB140"/><stop offset="0.2559" style="stop-color:#FF5445"/><stop offset="0.599" style="stop-color:#FC2B82"/><stop offset="1" style="stop-color:#8E40B7"/></radialGradient><path clip-rule="evenodd" d="M105.843,29.837    c0,4.242-3.439,7.68-7.68,7.68c-4.241,0-7.68-3.438-7.68-7.68c0-4.242,3.439-7.68,7.68-7.68    C102.405,22.157,105.843,25.595,105.843,29.837z M64,85.333c-11.782,0-21.333-9.551-21.333-21.333    c0-11.782,9.551-21.333,21.333-21.333c11.782,0,21.333,9.551,21.333,21.333C85.333,75.782,75.782,85.333,64,85.333z M64,31.135    c-18.151,0-32.865,14.714-32.865,32.865c0,18.151,14.714,32.865,32.865,32.865c18.151,0,32.865-14.714,32.865-32.865    C96.865,45.849,82.151,31.135,64,31.135z M64,11.532c17.089,0,19.113,0.065,25.861,0.373c6.24,0.285,9.629,1.327,11.884,2.204    c2.987,1.161,5.119,2.548,7.359,4.788c2.24,2.239,3.627,4.371,4.788,7.359c0.876,2.255,1.919,5.644,2.204,11.884    c0.308,6.749,0.373,8.773,0.373,25.862c0,17.089-0.065,19.113-0.373,25.861c-0.285,6.24-1.327,9.629-2.204,11.884    c-1.161,2.987-2.548,5.119-4.788,7.359c-2.239,2.24-4.371,3.627-7.359,4.788c-2.255,0.876-5.644,1.919-11.884,2.204    c-6.748,0.308-8.772,0.373-25.861,0.373c-17.09,0-19.114-0.065-25.862-0.373c-6.24-0.285-9.629-1.327-11.884-2.204    c-2.987-1.161-5.119-2.548-7.359-4.788c-2.239-2.239-3.627-4.371-4.788-7.359c-0.876-2.255-1.919-5.644-2.204-11.884    c-0.308-6.749-0.373-8.773-0.373-25.861c0-17.089,0.065-19.113,0.373-25.862c0.285-6.24,1.327-9.629,2.204-11.884    c1.161-2.987,2.548-5.119,4.788-7.359c2.239-2.24,4.371-3.627,7.359-4.788c2.255-0.876,5.644-1.919,11.884-2.204    C44.887,11.597,46.911,11.532,64,11.532z M64,0C46.619,0,44.439,0.074,37.613,0.385C30.801,0.696,26.148,1.778,22.078,3.36    c-4.209,1.635-7.778,3.824-11.336,7.382C7.184,14.3,4.995,17.869,3.36,22.078c-1.582,4.071-2.664,8.723-2.975,15.535    C0.074,44.439,0,46.619,0,64c0,17.381,0.074,19.561,0.385,26.387c0.311,6.812,1.393,11.464,2.975,15.535    c1.635,4.209,3.824,7.778,7.382,11.336c3.558,3.558,7.127,5.746,11.336,7.382c4.071,1.582,8.723,2.664,15.535,2.975    C44.439,127.926,46.619,128,64,128c17.381,0,19.561-0.074,26.387-0.385c6.812-0.311,11.464-1.393,15.535-2.975    c4.209-1.636,7.778-3.824,11.336-7.382c3.558-3.558,5.746-7.127,7.382-11.336c1.582-4.071,2.664-8.723,2.975-15.535    C127.926,83.561,128,81.381,128,64c0-17.381-0.074-19.561-0.385-26.387c-0.311-6.812-1.393-11.464-2.975-15.535    c-1.636-4.209-3.824-7.778-7.382-11.336c-3.558-3.558-7.127-5.746-11.336-7.382c-4.071-1.582-8.723-2.664-15.535-2.975    C83.561,0.074,81.381,0,64,0z" fill="url(#Instagram_2_)" fill-rule="evenodd" id="Instagram"/></g></g></svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/" title="{{ __('Youtube') }}" target="_blank">
                        <svg class="w-4 h-4" enable-background="new 0 0 32 32" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M31.67,9.179c0,0-0.312-2.353-1.271-3.389c-1.217-1.358-2.58-1.366-3.205-1.443C22.717,4,16.002,4,16.002,4   h-0.015c0,0-6.715,0-11.191,0.347C4.171,4.424,2.809,4.432,1.591,5.79C0.633,6.826,0.32,9.179,0.32,9.179S0,11.94,0,14.701v2.588   c0,2.763,0.32,5.523,0.32,5.523s0.312,2.352,1.271,3.386c1.218,1.358,2.815,1.317,3.527,1.459C7.677,27.919,15.995,28,15.995,28   s6.722-0.012,11.199-0.355c0.625-0.08,1.988-0.088,3.205-1.446c0.958-1.034,1.271-3.386,1.271-3.386s0.32-2.761,0.32-5.523v-2.588   C31.99,11.94,31.67,9.179,31.67,9.179z" fill="#E02F2F"/><polygon fill="#FFFFFF" points="12,10 12,22 22,16  "/></g><g/><g/><g/><g/><g/><g/></svg>
                    </a>
                </li>
            </ul>
        </div>

        <a 
            href="{{ route('login') }}" 
            class="absolute top-3 right-4 text-gray-500 hover:text-primary" 
            title="Sign In"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
            </svg>
        </a>
    </div>
    <!-- end:Topbar -->

    <!-- start:Menu -->
    <div class="w-full bg-white border-b-2 border-primary py-4 sticky top-0 z-10">
        <div
            x-data="{ showMenu: false }" 
            class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between px-4 2xl:px-0"
        >
            <div class="w-full lg:w-auto flex items-center justify-between">
                <a 
                    href="{{ route('welcome') }}" 
                    class="flex items-center space-x-2"
                >
                    <img 
                        src="{{ asset('/img/logo.png') }}" 
                        class="w-9 h-9"
                        alt="{{ __('Logo') }}" 
                    >
                    <span class="text-lg text-primary font-bold">
                        {{ config('app.name', 'Laravel') }}
                    </span>
                </a>
                <button 
                    @click="showMenu = !showMenu"
                    class="lg:hidden text-primary"
                >
                    <span 
                        x-show="!showMenu" 
                        title="Open Menu"
                        x-cloak
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </span>
                    <span 
                        x-show="showMenu" 
                        title="Close Menu"
                        x-cloak
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </span>
                </button>
            </div>
            <ul 
                class="flex flex-col lg:flex-row items-center justify-center space-y-2 lg:space-y-0 lg:space-x-2 text-lg font-bold py-2 lg:py-0"
                :class="showMenu ? 'flex' : 'hidden lg:flex'"
                x-cloak
            >
                <li>
                    <a 
                        href="{{ route('welcome') }}" 
                        class="text-primary hover:text-gray-100 hover:bg-primary px-2 py-1 rounded transition duration-100" 
                        title="{{ __('Home') }}"
                    >
                        {{ __('Home') }}
                    </a>
                </li>
                <li>
                    <a 
                        href="{{ route('about') }}" 
                        class="text-primary hover:text-gray-100 hover:bg-primary px-2 py-1 rounded transition duration-100" 
                        title="{{ __('About') }}"
                    >
                        {{ __('About') }}
                    </a>
                </li>
                <li>
                    <a 
                        href="{{ route('services') }}" 
                        class="text-primary hover:text-gray-100 hover:bg-primary px-2 py-1 rounded transition duration-100" 
                        title="{{ __('Services') }}"
                    >
                        {{ __('Services') }}
                    </a>
                </li>
                <li>
                    <a 
                        href="{{ route('gallery') }}" 
                        class="text-primary hover:text-gray-100 hover:bg-primary px-2 py-1 rounded transition duration-100" 
                        title="{{ __('Gallery') }}"
                    >
                        {{ __('Gallery') }}
                    </a>
                </li>
                <li>
                    <a 
                        href="{{ route('team') }}" 
                        class="text-primary hover:text-gray-100 hover:bg-primary px-2 py-1 rounded transition duration-100" 
                        title="{{ __('Team') }}"
                    >
                        {{ __('Team') }}
                    </a>
                </li>
                <li>
                    <a 
                        href="{{ route('contact') }}" 
                        class="text-primary hover:text-gray-100 hover:bg-primary px-2 py-1 rounded transition duration-100" 
                        title="{{ __('Contact') }}"
                    >
                        {{ __('Contact') }}
                    </a>
                </li>
                <li class="pl-4">
                    <a 
                        href="{{ route('bookAppointment') }}" 
                        class="text-primary hover:text-gray-100 hover:bg-primary px-2 py-1.5 border border-primary text-sm uppercase rounded transition duration-100" 
                        title="{{ __('Book an Appointment') }}"
                    >
                        {{ __('Book an Appointment') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end:Menu -->

    <div>
        {{ $slot }}
    </div>

    <footer class="bg-gray-800">
        <div class="border-b-2 border-gray-100">

            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 py-8">
                <div class="flex flex-col items-center text-gray-100">
                    <div class="w-2/3 text-center border-b-2 border-dashed border-gray-100 pb-2">
                        <span class="text-xl capitalize">{{ __('We are open on:') }}</span>
                    </div>
                    <div class="flex flex-col items-center justify-center mt-4">
                        <div class="space-x-2">
                            <span>{{ __('Monday-Friday:') }}</span>
                            <span>{{ __('9am - 5pm') }}</span>
                        </div>
                        <div class="space-x-2">
                            <span>{{ __('Saturday:') }}</span>
                            <span>{{ __('9am - 1pm')}}</span>
                        </div>
                        <div class="space-x-2 text-red-600">
                            <span>{{ __('Sunday:') }}</span>
                            <span>{{ __('Closed') }}</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center text-gray-100">
                    <div class="w-2/3 text-center border-b-2 border-dashed border-gray-100 pb-2">
                        <span class="text-xl capitalize">{{ __('Our Location:') }}</span>
                    </div>
                    <div class="flex flex-col items-center justify-center mt-4">
                        <div>
                            <span>{{ __('Krunska 77') }}</span>
                        </div>
                        <div>
                            <span>{{ __('Belgrade, Serbia')}}</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center text-gray-100">
                    <div class="w-2/3 text-center border-b-2 border-dashed border-gray-100 pb-2">
                        <span class="text-xl capitalize">{{ __('Get In Touch:') }}</span>
                    </div>
                    <div class="flex flex-col items-center justify-center mt-4">
                        <div class="space-x-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>{{ __('contact@example.com') }}</span>
                        </div>
                        <div class="space-x-2 flex items-center space-y-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>{{ __('011 4159211') }}</span>
                        </div>
                    </div>
                    <ul class="flex items-center justify-center space-x-4 mt-4">
                        <li>
                            <a href="https://www.facebook.com/" title="{{ __('Facebook') }}" target="_blank">
                                <svg class="w-4 h-4" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M374.245,285.825l14.104,-91.961l-88.233,0l0,-59.677c0,-25.159 12.325,-49.682 51.845,-49.682l40.117,0l0,-78.291c0,0 -36.408,-6.214 -71.214,-6.214c-72.67,0 -120.165,44.042 -120.165,123.775l0,70.089l-80.777,0l0,91.961l80.777,0l0,222.31c16.197,2.542 32.798,3.865 49.709,3.865c16.911,0 33.512,-1.323 49.708,-3.865l0,-222.31l74.129,0Z" style="fill:#1877f2;fill-rule:nonzero;"/></svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" title="{{ __('Instagram') }}" target="_blank">
                                <svg class="w-4 h-4" enable-background="new 0 0 128 128" id="Social_Icons" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x37__stroke"><g id="Instagram_1_"><rect clip-rule="evenodd" fill="none" fill-rule="evenodd" height="128" width="128"/><radialGradient cx="19.1111" cy="128.4444" gradientUnits="userSpaceOnUse" id="Instagram_2_" r="163.5519"><stop offset="0" style="stop-color:#FFB140"/><stop offset="0.2559" style="stop-color:#FF5445"/><stop offset="0.599" style="stop-color:#FC2B82"/><stop offset="1" style="stop-color:#8E40B7"/></radialGradient><path clip-rule="evenodd" d="M105.843,29.837    c0,4.242-3.439,7.68-7.68,7.68c-4.241,0-7.68-3.438-7.68-7.68c0-4.242,3.439-7.68,7.68-7.68    C102.405,22.157,105.843,25.595,105.843,29.837z M64,85.333c-11.782,0-21.333-9.551-21.333-21.333    c0-11.782,9.551-21.333,21.333-21.333c11.782,0,21.333,9.551,21.333,21.333C85.333,75.782,75.782,85.333,64,85.333z M64,31.135    c-18.151,0-32.865,14.714-32.865,32.865c0,18.151,14.714,32.865,32.865,32.865c18.151,0,32.865-14.714,32.865-32.865    C96.865,45.849,82.151,31.135,64,31.135z M64,11.532c17.089,0,19.113,0.065,25.861,0.373c6.24,0.285,9.629,1.327,11.884,2.204    c2.987,1.161,5.119,2.548,7.359,4.788c2.24,2.239,3.627,4.371,4.788,7.359c0.876,2.255,1.919,5.644,2.204,11.884    c0.308,6.749,0.373,8.773,0.373,25.862c0,17.089-0.065,19.113-0.373,25.861c-0.285,6.24-1.327,9.629-2.204,11.884    c-1.161,2.987-2.548,5.119-4.788,7.359c-2.239,2.24-4.371,3.627-7.359,4.788c-2.255,0.876-5.644,1.919-11.884,2.204    c-6.748,0.308-8.772,0.373-25.861,0.373c-17.09,0-19.114-0.065-25.862-0.373c-6.24-0.285-9.629-1.327-11.884-2.204    c-2.987-1.161-5.119-2.548-7.359-4.788c-2.239-2.239-3.627-4.371-4.788-7.359c-0.876-2.255-1.919-5.644-2.204-11.884    c-0.308-6.749-0.373-8.773-0.373-25.861c0-17.089,0.065-19.113,0.373-25.862c0.285-6.24,1.327-9.629,2.204-11.884    c1.161-2.987,2.548-5.119,4.788-7.359c2.239-2.24,4.371-3.627,7.359-4.788c2.255-0.876,5.644-1.919,11.884-2.204    C44.887,11.597,46.911,11.532,64,11.532z M64,0C46.619,0,44.439,0.074,37.613,0.385C30.801,0.696,26.148,1.778,22.078,3.36    c-4.209,1.635-7.778,3.824-11.336,7.382C7.184,14.3,4.995,17.869,3.36,22.078c-1.582,4.071-2.664,8.723-2.975,15.535    C0.074,44.439,0,46.619,0,64c0,17.381,0.074,19.561,0.385,26.387c0.311,6.812,1.393,11.464,2.975,15.535    c1.635,4.209,3.824,7.778,7.382,11.336c3.558,3.558,7.127,5.746,11.336,7.382c4.071,1.582,8.723,2.664,15.535,2.975    C44.439,127.926,46.619,128,64,128c17.381,0,19.561-0.074,26.387-0.385c6.812-0.311,11.464-1.393,15.535-2.975    c4.209-1.636,7.778-3.824,11.336-7.382c3.558-3.558,5.746-7.127,7.382-11.336c1.582-4.071,2.664-8.723,2.975-15.535    C127.926,83.561,128,81.381,128,64c0-17.381-0.074-19.561-0.385-26.387c-0.311-6.812-1.393-11.464-2.975-15.535    c-1.636-4.209-3.824-7.778-7.382-11.336c-3.558-3.558-7.127-5.746-11.336-7.382c-4.071-1.582-8.723-2.664-15.535-2.975    C83.561,0.074,81.381,0,64,0z" fill="url(#Instagram_2_)" fill-rule="evenodd" id="Instagram"/></g></g></svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/" title="{{ __('Youtube') }}" target="_blank">
                                <svg class="w-4 h-4" enable-background="new 0 0 32 32" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M31.67,9.179c0,0-0.312-2.353-1.271-3.389c-1.217-1.358-2.58-1.366-3.205-1.443C22.717,4,16.002,4,16.002,4   h-0.015c0,0-6.715,0-11.191,0.347C4.171,4.424,2.809,4.432,1.591,5.79C0.633,6.826,0.32,9.179,0.32,9.179S0,11.94,0,14.701v2.588   c0,2.763,0.32,5.523,0.32,5.523s0.312,2.352,1.271,3.386c1.218,1.358,2.815,1.317,3.527,1.459C7.677,27.919,15.995,28,15.995,28   s6.722-0.012,11.199-0.355c0.625-0.08,1.988-0.088,3.205-1.446c0.958-1.034,1.271-3.386,1.271-3.386s0.32-2.761,0.32-5.523v-2.588   C31.99,11.94,31.67,9.179,31.67,9.179z" fill="#E02F2F"/><polygon fill="#FFFFFF" points="12,10 12,22 22,16  "/></g><g/><g/><g/><g/><g/><g/></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto">
            <ul class="flex flex-col md:flex-row items-center justify-center text-gray-100 py-4 space-y-2 md:space-y-0 md:space-x-8">
                <li class="hover:underline">
                    <a href="{{ route('welcome') }}">
                        {{ __('Home') }}
                    </a>
                </li>
                <li class="hover:underline">
                    <a href="{{ route('about') }}">
                        {{ __('About') }}
                    </a>
                </li>
                <li class="hover:underline">
                    <a href="{{ route('services') }}">
                        {{ __('Services') }}
                    </a>
                </li>
                <li class="hover:underline">
                    <a href="{{ route('gallery') }}">
                        {{ __('Gallery') }}
                    </a>
                </li>
                <li class="hover:underline">
                    <a href="{{ route('team') }}">
                        {{ __('Team') }}
                    </a>
                </li>
                <li class="hover:underline">
                    <a href="{{ route('contact') }}">
                        {{ __('Contact') }}
                    </a>
                </li>
                <li class="hover:underline">
                    <a href="{{ route('bookAppointment') }}">
                        {{ __('Book an Appointment') }}
                    </a>
                </li>
            </ul>

            <div class="flex flex-col items-center justify-center text-gray-500 text-sm py-4">
                <div>
                    <span>{{ __('Created by:') }}</span>
                    <a href="https://vojislavd.com" class="text-primary hover:underline" target="_blank">
                        {{ __('Vojislav Dragicevic') }}
                    </a>
                </div>
                <span>{{ date('M, Y') }}</span>
            </div>
        </div>
    </footer>
</x-guest-layout>