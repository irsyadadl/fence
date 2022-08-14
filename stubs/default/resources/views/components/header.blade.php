<div {{ $attributes->merge(['class' => 'mb-8  lg:mb-16 border-b -mt-8 py-8 lg:py-16 bg-gray-50']) }}>
    <x-container>
        <div class="max-w-2xl w-full">
            <h1 class="font-semibold text-2xl mb-3">{{ $title }}</h1>
            <p class="leading-relaxed text-gray-500 text-base">{{ $subtitle }}</p>
            {{ $slot }}
        </div>
    </x-container>
</div>
