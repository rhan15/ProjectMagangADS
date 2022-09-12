<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex-1 items-center px-6 py-2 border border-gray-300
    rounded-md font-bold text-md text-black tracking-widest hover:bg-gray-100 active:bg-gray-100 
    focus:outline-none focus:border-gray-90 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ']) }}>
    {{ $slot }}
</button>
