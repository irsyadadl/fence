<x-layouts.guest title="Reset Password">
    <x-slot name="header">Reset Password</x-slot>
    <x-slot name="subheader">
        Already have account ? Please <a class="text-gray-800 underline" href="/login">login</a>
    </x-slot>

    @if(session('status'))
        <div class="bg-violet-50 text-violet-900 mb-5 p-4 rounded text-sm">
            {{ session('status') }}
        </div>
    @endif

    <form action="/reset-password" method="post">
        @csrf
        <input type="hidden" name="token" value="{{ request()->route('token') }}"/>
        <div class="mb-5">
            <x-form.label for="email">Email</x-form.label>
            <x-form.with-icon>
                <x-svg class="mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </x-svg>
                <x-form.input placeholder="jane@domain.com" class="border-0 focus:ring-0 px-0" type="email" name="email" id="email" :value="old('email', request('email'))" />
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
        <x-form.button>Reset Password</x-form.button>
    </form>
</x-layouts>
