<nav class="md:hidden block max-w-screen-2xl px-4 bg-white border-b">
    <div class='flex items-center justify-between'>
        <x-navlink :active="false" class="text-black mr-3 !pl-0 !border-transparent font-semibold" href='/'>
            {{ config('app.name') }}
        </x-navlink>
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button
                    class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </x-slot>
            <x-slot name="content">
                <x-dropdown.item href="{{ route('home') }}">Home</x-dropdown.item>
                <x-dropdown.item href="https://parsinta.com" target="_blank">Parsinta</x-dropdown.item>
                @auth
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
                @else
                    <x-dropdown.item href="{{ route('login') }}">Login</x-dropdown.item>
                    <x-dropdown.item href="{{ route('register') }}">Register</x-dropdown.item>
                @endauth
            </x-slot>
        </x-dropdown>
    </div>
</nav>
