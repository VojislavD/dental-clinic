<x-main>
    <div class="flex items-center">
        <img 
            src="{{ asset('/img/header.jpg') }}" 
            class="w-full" 
            alt="Header"
        >
        <div class="w-2/3 absolute flex flex-col items-center space-y-8">
            <div class="flex flex-col items-center space-y-2">
                <p class="text-5xl font-bold text-gray-100 text-center">
                    {{ __('Achive Your Desired') }}
                </p>
                <p class="text-5xl font-bold text-gray-100 text-center">
                    {{ __('Perfect Smile') }}
                </p>
            </div>
            <a 
                href="#" 
                class="text-gray-100 hover:text-primary hover:bg-gray-100 border-2 border-gray-100 px-4 py-2 uppercase transition duration-100" 
                title="{{ __('Book an appointment') }}"
            >
                {{ __('Book an appointment') }}
            </a>
        </div>
    </div>
</x-main>