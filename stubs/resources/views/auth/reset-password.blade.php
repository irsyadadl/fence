<x-layouts.guest title="Reset Password">
    <x-slot name="header">Reset Password</x-slot>
    <x-slot name="subheader">
        Already have account ? Please <a class="text-gray-800 underline" href="/login">login</a>
    </x-slot>

    @if(session('status'))
        <div class="bg-cyan-50 text-cyan-900 mb-5 p-4 rounded text-sm">
            {{ session('status') }}
        </div>
    @endif

    <form action="/reset-password" method="post">
        @csrf
        <input type="hidden" name="token" value="{{ request()->route('token') }}"/>
        <div class="mb-4">
            <x-form.label for="email">Email</x-form.label>
            <x-form.input type="email" name="email" id="email" :value="old('email')" autofocus/>
            <x-form.validation-message name="email"/>
        </div>
        <div class="mb-4">
            <x-form.label for="password">Password</x-form.label>
            <x-form.input type="password" name="password" id="password"/>
            <x-form.validation-message name="password"/>
        </div>
        <div class="mb-4">
            <x-form.label for="password_confirmation">Confirm Password</x-form.label>
            <x-form.input type="password" name="password_confirmation" id="password_confirmation"/>
        </div>
        <x-form.button>Reset Password</x-form.button>
    </form>
</x-layouts>