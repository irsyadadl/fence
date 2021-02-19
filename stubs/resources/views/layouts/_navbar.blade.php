<div class="bg-white border-b" x-data="{ open: false }">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row lg:items-center justify-between">
            <div class="flex lg:items-center justify-between w-full lg:w-auto p-4 lg:p-0 border-b lg:border-b-0">
                <a href="/" class="uppercase font-medium">
                    Brand
                </a>
                <button @click="open = !open" class="block lg:hidden focus:outline-none">
                    <x-svg class="text-gray-800">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </x-svg>
                </button>
            </div>
            <div x-show.transition.in.duration.300ms.origin.top.left.opacity.scale.85.out.duration.300ms.origin.top.left.opacity.scale.95="open"
                style="display: none;"
                class="flex-col bg-gray-800 fixed z-50 inset-0 w-full h-full flex justify-center items-center">
                    
                <ul class="flex flex-col lg:flex-row items-center">
                    <li class="lg:py-2">
                        <a class="px-4 py-2 block font-medium text-gray-400 focus:text-white hover:text-white {{ request()->is('/') ? 'text-violet-500' : '' }}" href="/">
                            Home
                        </a>
                    </li>
                </ul>
                @auth
                <ul class="flex flex-col lg:flex-row items-center">
                    <li class="lg:py-2 flex items-center justify-center">
                        <div class="flex-shrink-0">
                            <img src="{{ Auth::user()->gravatar() }}" alt="{{ Auth::user()->name }}" class="w-6 h-6 border rounded-full">
                        </div>
                        <a class="px-4 py-2 block font-medium text-gray-400 focus:text-white hover:text-white" href="/profile">{{ Auth::user()->name }}</a>
                    </li>
                    <li class="lg:py-2">
                        <a class="px-4 py-2 block font-medium text-gray-400 focus:text-white hover:text-white" href="/update-profile">Update Profile</a>
                    </li>
                    <li class="lg:py-2">
                        <a class="px-4 py-2 block font-medium text-gray-400 focus:text-white hover:text-white" href="/update-password">Update Password</a>
                    </li>
                    <li class="lg:py-2">
                        <form action="/logout" method="post">
                            @csrf
                            <a href="/logout" class="px-4 py-2 block font-medium text-gray-400 focus:text-white hover:text-white" href="/login" onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </a>
                        </form>
                    </li>
                </ul>
                @else
                <ul class="flex flex-col justify-center items-center">
                    <li class="lg:py-2">
                        <a class="px-4 py-2 block font-medium text-gray-400 focus:text-white hover:text-white" href="/login">
                            Login
                        </a>
                    </li>
                    <li class="lg:py-2">
                        <a class="px-4 py-2 block font-medium text-gray-400 focus:text-white hover:text-white" href="/register">
                            Register
                        </a>
                    </li>
                </ul>
                @endauth
            </div>
            <div class="hidden lg:flex w-auto lg:w-full flex-col lg:flex-row lg:items-center justify-between">
                <ul class="flex flex-row lg:flex-row lg:items-center py-2 lg:py-0">
                    <li class="lg:py-2">
                        <a class="px-4 py-2 block font-medium {{ request()->is('/') ? 'text-violet-500' : '' }}" href="/">
                            Home
                        </a>
                    </li>
                </ul>
                @auth
                <ul class="flex flex-col lg:flex-row lg:items-center py-2 lg:py-0">
                    <li>
                        <ul class="relative" x-data="{ down: false }">
                            <li @click.prevent="down = !down" class="lg:py-2 flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ Auth::user()->gravatar() }}" alt="{{ Auth::user()->name }}" class="w-6 h-6 border rounded-full">
                                </div>
                                <a class="px-4 py-2 block font-medium" href="#">{{ Auth::user()->name }}</a>
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
                                        <a class="px-4 py-2 block font-medium" href="/user/profile">Profile</a>
                                    </li>
                                    <li>
                                        <a class="px-4 py-2 block font-medium" href="/user/update-profile">Update Profile</a>
                                    </li>
                                    <li>
                                        <a class="px-4 py-2 block font-medium" href="/user/update-password">Update Password</a>
                                    </li>
                                    <li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <a href="/logout" class="px-4 py-2 block font-medium" href="/login" onclick="event.preventDefault(); this.closest('form').submit();">
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
                        <a class="px-4 py-2 block font-medium" href="/login">
                            Login
                        </a>
                    </li>
                    <li class="lg:py-2">
                        <a class="px-4 py-2 block font-medium" href="/register">
                            Register
                        </a>
                    </li>
                </ul>
                @endauth
            </div>
        </div>
    </div>
</div>
