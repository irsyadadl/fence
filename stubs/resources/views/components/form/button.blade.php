<button {{ $attributes->merge(["type" => "submit", "class" => "bg-blue-500 hover:bg-blue-500 focus:ring focus:ring-blue-200 text-white transition duration-150 flex items-center justify-center px-4 h-10 focus:outline-none text-sm tracking-wide rounded-lg uppercase font-semibold"]) }}>
    {{ $slot }}
</button>