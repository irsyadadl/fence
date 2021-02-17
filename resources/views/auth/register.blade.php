<x-layouts.guest title="Register">
    <x-slot name="header">Register</x-slot>
    <x-slot name="subheader">
        Already have account ? Please <a class="text-gray-800 underline" href="/login">login</a>
    </x-slot>
    <form action="/register" method="post">
        @csrf
        <div class="mb-4">
            <x-form.label for="name">Name</x-form.label>
            <x-form.input type="text" name="name" id="name" :value="old('name')" autofocus/>
            <x-form.validation-message name="name"/>
        </div>
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
        <div class="mb-4">
            <x-form.label for="password_confirmation">Confirm Password</x-form.label>
            <x-form.input type="password" name="password_confirmation" id="password_confirmation"/>
        </div>
        <x-form.button>Register</x-form.button>
    </form>
</x-layouts>