<div class="bg-gradient-to-b from-blue-50 to-gray-50 border-b py-5 lg:py-1" x-data="{ open: false }">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row lg:items-center justify-between">
            <div class="flex truncate flex-wrap lg:items-center justify-between w-full lg:w-auto pl-4 lg:pr-4 lg:p-0 lg:border-b-0">
                <a href="/" class="uppercase text-sm font-semibold">
                    Laravel
                </a>
                <button @click="open = !open" class="block lg:hidden focus:outline-none">
                    <x-svg class="text-gray-800">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </x-svg>
                </button>
            </div>
            <div x-show.transition.in.duration.300ms.origin.top.left.opacity.scale.85.out.duration.300ms.origin.top.left.opacity.scale.95="open"
                style="display: none;"
                class="flex-col bg-gradient-to-b from-blue-50 to-gray-50 fixed z-50 inset-0 w-full h-full flex justify-center items-center">
                <button @click="open = false" class="absolute right-0 top-0 mr-4 mt-4">
                    <x-svg class="text-gray-800">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </x-svg>
                </button>
                <ul class="flex flex-col lg:flex-row items-center">
                    <li class="lg:py-2">
                        <a class="px-4 py-2 block text-gray-600 focus:text-gray-800 hover:text-gray-900 {{ request()->is('/') ? 'text-gray-900' : '' }}" href="/">
                            Home
                        </a>
                    </li>
                </ul>
                @auth
                <ul class="flex flex-col lg:flex-row items-center">
                    <li class="lg:py-2 flex items-center justify-center">
                        <a class="px-4 py-2 block text-gray-600 focus:text-gray-800 hover:text-gray-900" href="/profile">{{ Auth::user()->name }}</a>
                    </li>
                    <li class="lg:py-2">
                        <a class="px-4 py-2 block text-gray-600 focus:text-gray-800 hover:text-gray-900" href="{{ route('profile.information') }}">Update Profile</a>
                    </li>
                    <li class="lg:py-2">
                        <a class="px-4 py-2 block text-gray-600 focus:text-gray-800 hover:text-gray-900" href="https://github.com/irsyadadl/fence/">Documentation</a>
                    </li>
                    <li class="lg:py-2">
                        <form action="/logout" method="post">
                            @csrf
                            <a href="/logout" class="px-4 py-2 block text-gray-600 focus:text-gray-800 hover:text-gray-900" href="/login" onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </a>
                        </form>
                    </li>
                </ul>
                @else
                <ul class="flex flex-col justify-center items-center">
                    <li class="lg:py-2">
                        <a class="px-4 py-2 block text-gray-600 focus:text-gray-800 hover:text-gray-900" href="/login">
                            Login
                        </a>
                    </li>
                    <li class="lg:py-2">
                        <a class="px-4 py-2 block font-medium text-gray-600 focus:text-gray-800 hover:text-gray-900" href="/register">
                            Register
                        </a>
                    </li>
                </ul>
                @endauth
            </div>
            <div class="hidden lg:flex w-auto lg:w-full flex-col lg:flex-row lg:items-center justify-between">
                <ul class="flex flex-row lg:flex-row lg:items-center py-2 lg:py-0">
                    <li class="lg:py-2">
                        <a class="px-4 py-2 block font-medium {{ request()->is('/') ? 'text-gray-900 font-semibold' : '' }}" href="/">
                            Home
                        </a>
                    </li>
                </ul>
                @auth
                <ul class="flex flex-col lg:flex-row lg:items-center py-2 lg:py-0">
                    <li>
                        <ul class="relative" x-data="{ down: false }">
                            <li @click.prevent="down = !down" class="lg:py-2 flex items-center">
                                <a class="px-4 py-2 block font-medium" href="#">{{ Auth::user()->name }}</a>
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </li>
                            <li
                                x-show="down"
                                x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform scale-90"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-90"
                                style="display: none"
                                >
                                <ul class="absolute w-56 right-0 border mr-4 -mt-2 py-2 rounded-lg bg-white">
                                    <li>
                                        <a class="px-4 py-2 block" href="{{ route('profile.showInformation') }}">Profile</a>
                                    </li>
                                    <li>
                                        <a class="px-4 py-2 block" href="{{ route('profile.information') }}">Update Profile</a>
                                    </li>
                                    <li>
                                        <a class="px-4 py-2 block" href="https://github.com/irsyadadl/fence/">Documentation</a>
                                    </li>
                                    <li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <a href="/logout" class="px-4 py-2 block" href="/login" onclick="event.preventDefault(); this.closest('form').submit();">
                                                Logout
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                @else
                <ul class="flex justify-center items-center py-2 lg:py-0 border-t lg:border-t-0">
                    <li class="lg:py-2">
                        <a class="px-4 py-2 block" href="/login">
                            Login
                        </a>
                    </li>
                    <li class="lg:py-2">
                        <a class="px-4 py-2 block" href="/register">
                            Register
                        </a>
                    </li>
                </ul>
                @endauth
            </div>
        </div>
    </div>
</div>
