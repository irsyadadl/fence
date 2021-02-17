<x-layouts.guest title="Login">
    <x-slot name="header">Login</x-slot>
    <x-slot name="subheader">
        Doesn't have yet an account ? Please <a class="text-gray-800 underline" href="/register">register</a>
    </x-slot>
    <form action="/login" method="post">
        @csrf
        <div class="mb-4">
            <x-form.label for="email">Email</x-form.label>
            <x-form.input type="email" name="email" id="email" :value="old('email')"/>
            <x-form.validation-message name="email"/>
        </div>
        <div class="mb-4">
            <x-form.label for="password">Password</x-form.label>
            <x-form.input type="password" name="password" id="password"/>
            <x-form.validation-message name="password"/>
        </div>

        <div class="flex items-center mb-4 justify-between">
            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="border border-gray-300 mr-2 rounded focus:ring-transparent" {{ old('remember') ? 'checked' : '' }}/>
                <label for="remember" class="select-none">Remember</label>
            </div>
            <x-a href="/forgot-password">Forgot password</x-a>
        </div>
        <x-form.button class="w-full">Login</x-form.button>
    </form>
</x-layouts>