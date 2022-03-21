<form 
    wire:submit.prevent="submit" 
    class="space-y-4"
>
    @if(session('messageSent'))
        <span class="text-green-600 font-bold">
            {{ session('messageSent') }}
        </span>
    @endif
    <div class="flex flex-col">
        <label for="name">
            {{ __('Your Name') }}
            <sup class="text-red-600 font-bold">*</sup>
        </label>
        <input 
            wire:model.defer="state.name"
            type="text" 
            id="name" 
            class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 @error('state.name') border-red-600 @enderror"
        >
        @error('state.name')
            <span class="text-sm text-red-600 font-bold">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex flex-col">
        <label for="email">
            {{ __('Your email address') }}
            <sup class="text-red-600 font-bold">*</sup>
        </label>
        <input 
            wire:model.defer="state.email"
            type="email" 
            id="email" 
            class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 @error('state.name') border-red-600 @enderror"
        >
        @error('state.email')
            <span class="text-sm text-red-600 font-bold">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex flex-col">
        <label for="body">
            {{ __('Message') }}
            <sup class="text-red-600 font-bold">*</sup>
        </label>
        <textarea 
            wire:model.defer="state.body"
            id="body" 
            class="mt-2 border-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0 @error('state.body') border-red-600 @enderror"
        ></textarea>
        @error('state.email')
            <span class="text-sm text-red-600 font-bold">{{ $message }}</span>
        @enderror
    </div>
    <button class="bg-primary hover:bg-primary-dark text-gray-100 px-6 py-1 rounded" title="Send">
        {{ __('Send') }}
    </button>
</form>