<x-layouts.guest title="Register">
    <x-slot name="header">Register</x-slot>
    <x-slot name="subheader">
        Already have account ? Please <a class="text-gray-800 underline" href="/login">login</a>
    </x-slot>
    <form action="/register" method="post">
        @csrf
        <div class="mb-5">
            <x-form.label for="name">Name</x-form.label>
            <x-form.with-icon>
                <x-svg class="mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </x-svg>
                <x-form.input placeholder="Jane Doe" class="border-0 focus:ring-0 px-0" type="text" name="name" id="name" :value="old('name')" autofocus />
            </x-form.with-icon>
            <x-form.validation-message name="name" />
        </div>
        <div class="mb-5">
            <x-form.label for="email">Email</x-form.label>
            <x-form.with-icon>
                <x-svg class="mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </x-svg>
                <x-form.input placeholder="jane@domain.com" class="border-0 focus:ring-0 px-0" type="email" name="email" id="email" :value="old('email')" />
            </x-form.with-icon>
            <x-form.validation-message name="email" />
        </div>
        <div class="mb-5">
            <x-form.label for="password">Password</x-form.label>
            <x-form.with-icon>
                <x-svg class="mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </x-svg>
                <x-form.input placeholder="Password" class="border-0 focus:ring-0 px-0" type="password" name="password" id="password" />
            </x-form.with-icon>
            <x-form.validation-message name="password" />
        </div>
        <div class="mb-5">
            <x-form.label for="password_confirmation">Confirm Password</x-form.label>
            <x-form.with-icon>
                <x-svg class="mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                </x-svg>
                <x-form.input placeholder="Confirm Password" class="border-0 focus:ring-0 px-0" type="password" name="password_confirmation" id="password_confirmation" />
            </x-form.with-icon>
        </div>
        <x-form.button>Register</x-form.button>
    </form>
    </x-layouts>
