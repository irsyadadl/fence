<x-layouts.guest title="Forgot Password">
    <x-slot name="header">Forgot Password</x-slot>
    <x-slot name="subheader">
        I have remembered! I want to <a class="text-gray-800 underline" href="/login">login</a>
    </x-slot>
    @if(session('status'))
        <div class="bg-cyan-50 text-cyan-900 mb-5 p-4 rounded text-sm">
            {{ session('status') }}
        </div>
    @endif
    <form action="/forgot-password" method="post">
        @csrf
        <div class="mb-4">
            <x-form.label for="email">Email</x-form.label>
            <x-form.input type="email" name="email" id="email" :value="old('email')" autofocus/>
            <x-form.validation-message name="email"/>
        </div>
        <x-form.button>Request Link</x-form.button>
    </form>
</x-layouts>