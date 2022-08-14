<x-layouts.app title="Verify your email address.">
    <x-header>
        <x-slot name='title'>{{ __('Verify your email address.') }}</x-slot>
        <x-slot name='subtitle'>
            {{ __('We need your password to continue your previous action.') }}
        </x-slot>
    </x-header>
    <x-container>
        <div class="w-full max-w-xl -mt-24">
            <x-card-simple>

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif
                <p class="leading-relaxed text-gray-500 mb-4">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </p>
                <form action="{{ route('verification.send') }}" method="post">
                    @csrf
                    <x-form.button>Resend verification link</x-form.button>
                </form>
            </x-card-simple>
        </div>
    </x-container>
</x-layouts.app>
