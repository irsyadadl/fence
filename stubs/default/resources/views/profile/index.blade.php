<x-layouts.app title="Update Profile Information">
    <x-header>
        <x-slot name='title'>{{ Auth::user()->name }}</x-slot>
        <x-slot name='subtitle'>Joined {{ Auth::user()->created_at->diffForHumans() }}</x-slot>

        <div class="mt-4">
            <a href="{{ route('profile.edit') }}" class="focus:ring focus:ring-blue-100 focus:border-blue-300 inline-flex px-4 py-2 rounded-lg border shadow-sm bg-white">
                Edit profile
            </a>
        </div>
    </x-header>
</x-layouts.app>
