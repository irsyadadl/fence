<x-layouts.guest title="Forgot Password">
    <x-slot name="header">Forgot Password</x-slot>
    <x-slot name="subheader">
        I have remembered! I want to <a class="text-gray-800 underline" href="/login">login</a>
    </x-slot>
    @if(session('status'))
    <div class="bg-violet-50 text-violet-900 mb-5 p-4 rounded text-sm">
        {{ session('status') }}
    </div>
    @endif
    <form action="/two-factor-challenge" method="post">
        @csrf
        <div class="mb-4">
            <x-form.label for="code">Token code</x-form.label>
            <x-form.with-icon>
                <x-svg class="mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </x-svg>
                <x-form.input placeholder="jane@domain.com" class="border-0 focus:ring-0 pl-0" type="code" name="code" id="code" :value="old('code')" autofocus />
            </x-form.with-icon>
            <x-form.validation-message name="code" />
        </div>
        <x-form.button>{__('Continue')}</x-form.button>
    </form>
    </x-layouts>
