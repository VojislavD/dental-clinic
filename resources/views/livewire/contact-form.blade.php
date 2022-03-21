<form method="POST" action="" class="space-y-4">
    @csrf

    <div class="flex flex-col">
        <label for="name">
            {{ __('Your Name') }}
            <sup class="text-red-600 font-bold">*</sup>
        </label>
        <input type="text" name="name" id="name" class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300">
    </div>
    <div class="flex flex-col">
        <label for="email">
            {{ __('Your email address') }}
            <sup class="text-red-600 font-bold">*</sup>
        </label>
        <input type="email" name="email" id="email" class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300">
    </div>
    <div class="flex flex-col">
        <label for="body">
            {{ __('Message') }}
            <sup class="text-red-600 font-bold">*</sup>
        </label>
        <textarea id="body" class="mt-2 border-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"></textarea>
    </div>
    <button class="bg-primary hover:bg-primary-dark text-gray-100 px-6 py-1 rounded" title="Send">
        {{ __('Send') }}
    </button>
</form>