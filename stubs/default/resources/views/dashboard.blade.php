<x-layouts.app title="Dashboard">
    <x-header>
        <x-slot name='title'>Dashboard</x-slot>
        <x-slot name='subtitle'>
            You will see this page if you already authenticated.
        </x-slot>
    </x-header>
    <x-container>
        <div class="w-full max-w-xl -mt-24">
            <div class="bg-gray-50 text-gray-800 border border-gray-200 rounded-lg p-6 shadow-sm relative">
                <div class="w-2.5 h-2.5 rounded-full bg-orange-500 animate-ping absolute right-3 top-3"></div>
                <p class="leading-relaxed">
                    If you find this package very useful, consider supporting me via github. The link can be clicked on
                    the button below.
                </p>
                <div class="mt-4">
                    <a href="https://github.com/sponsors/irsyadadl"
                        class="items-center gap-x-2 focus:ring focus:ring-blue-100 focus:border-blue-300 inline-flex px-4 py-2 rounded-lg border shadow-sm bg-white">
                        🥳 Support me on Github
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                          </svg>
                    </a>
                </div>
            </div>
        </div>
    </x-container>
</x-layouts.app>
