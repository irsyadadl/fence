<x-layouts.app title="{{ config('app.name') }}">
    <x-header>
        <x-slot name='title'>{{ config('app.name') }}</x-slot>
        <x-slot name='subtitle'>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur in aperiam inventore. Expedita saepe, non corrupti, mollitia harum reprehenderit voluptatem, minima odit nemo odio iusto beatae quibusdam? Eveniet, fugiat a.
        </x-slot>
    </x-header>
    <x-container>
        <div class="w-full max-w-xl -mt-24">
            <div class="bg-gray-50 text-gray-800 border border-gray-200 rounded-lg p-6 shadow-sm relative">
                <div class="w-2.5 h-2.5 rounded-full bg-orange-500 animate-ping absolute right-3 top-3"></div>
                <p class="leading-relaxed">
                    Want to learn laravel more than just the fundamentals? Please buy the book by clicking the link below.
                </p>
                <div class="mt-4">
                    <a href="https://parsinta.com/s/elrvl?ref=package-fence" class="items-center gap-x-2 focus:ring focus:ring-blue-100 focus:border-blue-300 inline-flex px-4 py-2 rounded-lg border shadow-sm bg-white">
                        Ebook Laravel
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                          </svg>
                    </a>
                </div>
            </div>
        </div>
    </x-container>
</x-layouts.app>
