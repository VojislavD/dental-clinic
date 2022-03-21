<x-main>
    <div class="flex items-center">
        <img 
            src="{{ asset('/img/header.jpg') }}" 
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
</x-main>