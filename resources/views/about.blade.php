<x-main>
    <h1 class="text-3xl text-primary text-center font-bold py-16 capitalize">{{ __('About Us') }}</h1>
    <div class="max-w-7xl mx-auto px-4 xl:px-0 pb-16 space-y-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <img 
                src="{{ asset('/img/about/about1.jpg') }}" 
                alt="About"
            >
            <div class="space-y-4 text-lg">
                <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.') }}</p>
                <p>{{ __('Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.') }}</p>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="space-y-4 text-lg">
                <p>{{ __('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.') }}</p>
                <p>{{ __('Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?') }}</p>
            </div>
            <img 
            src="{{ asset('/img/about/about2.jpg') }}" 
            alt="About"
        >
        </div>
    </div>

    <div class="bg-primary py-16 flex flex-col items-center justify-center space-y-4">
        <h2 class="text-xl md:text-2xl font-bold text-gray-100">{{ __('Contact us for more informations, or') }}</h2>
        <a 
            href="#"
            class="border-2 border-gray-100 px-4 py-2 text-gray-100 hover:text-primary hover:bg-gray-100 rounded font-bold uppercase text-sm"
            title="{{ __('Book an Appointment') }}"
        >
            {{ __('Book an Appointment') }}
        </a>
    </div>
</x-main>