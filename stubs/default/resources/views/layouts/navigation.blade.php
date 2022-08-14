@include('layouts.responsive-navigation')

<nav class="md:block hidden max-w-screen-2xl px-4 bg-white border-b">
    <div class="flex justify-between items-center">
        <div class='flex items-center gap-x-4'>
            <x-navlink :active="false" class="text-black mr-2 uppercase !pl-0 !border-transparent font-semibold" href='/'>
                {{ config('app.name') }}
            </x-navlink>
            <x-navlink :active="request()->routeIs('home')" href="{{ route('home') }}">Home</x-navlink>

            <x-navlink target="_blank" href="https://parsinta.com">Parsinta</x-navlink>
        </div>
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button
                    class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                    <div>{{ Auth::user()->name }}</div>

                    <div class="ml-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>
            <x-slot name="content">
                <x-dropdown.item href="{{ route('dashboard') }}">Dashboard</x-dropdown.item>
                <x-dropdown.item href="{{ route('profile.showInformation') }}">View profile</x-dropdown.item>
                <x-dropdown.item href="{{ route('profile.edit') }}">Update Profile</x-dropdown.item>
                <form action="/logout" method="post">
                    @csrf
                    <x-dropdown.item href="/logout" class="px-4 py-2 block" href="/login"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        Logout
                    </x-dropdown.item>
                </form>
            </x-slot>
        </x-dropdown>
    </div>
</nav>
