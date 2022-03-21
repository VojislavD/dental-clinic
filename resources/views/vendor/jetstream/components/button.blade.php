<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-dark active:bg-primary-dark focus:outline-none focus:border-primary-dark focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
