<button {{ $attributes->merge(["type" => "submit", "class" => "bg-violet-500 hover:bg-violet-500 focus:ring focus:ring-violet-200 text-white transition duration-150 flex items-center justify-center px-4 h-10 focus:outline-none text-sm tracking-wide rounded-lg uppercase font-medium"]) }}>
    {{ $slot }}
</button>