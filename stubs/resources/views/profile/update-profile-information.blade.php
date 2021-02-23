<x-layouts.app title="Update Profile Information">
    <div class="container">
        @if(session('status'))
            <div class="flex justify-end lg:-mx-4">
                <div class="lg:px-4 w-full lg:w-2/3 mb-5 ">
                    <div class="text-green-800 bg-green-100 p-4 rounded-lg flex items-center">
                        <svg class="mr-3 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ session('status') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="flex flex-col lg:flex-row mb-10 lg:mb-20 lg:-mx-4">
            <div class="lg:w-1/3 w-full lg:px-4">
                <h1 class="font-semibold uppercase mb-0.5 lg:mb-2">Update Profile</h1>
                <div class="leading-relaxed text-gray-500 mb-4 lg:mb-0 text-sm lg:text-base">
                    I know you'll be ask, where the hell thing to update my profile picture.
                </div>
            </div>
            <div class="lg:w-2/3 w-full lg:px-4">
                <form action="{{ route('profile.update-information') }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-5">
                        <x-form.label for="name">Name</x-form.label>
                        <x-form.input placeholder="Jane Doe" class="focus:ring focus:ring-blue-200" type="text" name="name" id="name" :value="old('name') ?? Auth::user()->name" required />
                        @if($errors->updateProfileInformation->first('name'))
                        <span class="text-red-500 mt-1 text-sm font-medium block" role="alert">
                            {{ $errors->updateProfileInformation->first('name') }}
                        </span>
                        @endif
                    </div>
                    <div class="mb-5">
                        <x-form.label for="email">Email</x-form.label>
                        <x-form.input placeholder="jane@domain.com" class="focus:ring focus:ring-blue-200" type="email" name="email" id="email" :value="old('email') ?? Auth::user()->email" required />
                        @if($errors->updateProfileInformation->first('email'))
                        <span class="text-red-500 mt-1 text-sm font-medium block" role="alert">
                            {{ $errors->updateProfileInformation->first('email') }}
                        </span>
                        @endif
                    </div>
                    <x-form.button class="lg:w-auto w-full">Update Profile</x-form.button>
                </form>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row lg:-mx-4">
            <div class="lg:w-1/3 w-full lg:px-4">
                <h1 class="font-semibold uppercase mb-0.5 lg:mb-2">Update Password</h1>
                <div class="leading-relaxed text-gray-500 mb-4 lg:mb-0 text-sm lg:text-base">
                    For whatever security reason, actually we are advised to update our password every six months.
                </div>
            </div>
            <div class="lg:w-2/3 w-full lg:px-4">
                <form action="{{ route('profile.update-password') }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="mb-5">
                        <x-form.label for="current_password">Current Password</x-form.label>
                        <x-form.input class="focus:ring focus:ring-blue-200" type="password" name="current_password" id="current_password" required />
                        @if($errors->updatePassword->first('current_password'))
                        <span class="text-red-500 mt-1 text-sm font-medium block" role="alert">
                            {{ $errors->updatePassword->first('current_password') }}
                        </span>
                        @endif
                    </div>
                    <div class="mb-5">
                        <x-form.label for="password">New Password</x-form.label>
                        <x-form.input class="focus:ring focus:ring-blue-200" type="password" name="password" id="password" required />
                        @if($errors->updatePassword->first('password'))
                        <span class="text-red-500 mt-1 text-sm font-medium block" role="alert">
                            {{ $errors->updatePassword->first('password') }}
                        </span>
                        @endif
                    </div>
                    <div class="mb-5">
                        <x-form.label for="password_confirmation">Confirm New Password</x-form.label>
                        <x-form.input class="focus:ring focus:ring-blue-200" type="password" name="password_confirmation" id="password_confirmation" />
                    </div>
                    <x-form.button class="lg:w-auto w-full">Update Password</x-form.button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>
