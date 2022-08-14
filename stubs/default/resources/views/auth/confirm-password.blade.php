<x-layouts.app title="Confirm Password">
    <x-header>
        <x-slot name='title'>{{ __('Confirm Password') }}</x-slot>
        <x-slot name='subtitle'>
            {{ __('We need your password to continue your previous action.') }}
        </x-slot>
    </x-header>
    <x-container>
        <div class="w-full max-w-xl -mt-24">
            <x-card-simple>
                <form action="{{ route('password.confirm') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <x-form.input type="password" name="password" />
                        <x-form.validation-message name="email" />
                    </div>
                    <x-form.button>Continue</x-form.button>
                </form>
            </x-card-simple>
        </div>
    </x-container>
</x-layouts.app>
