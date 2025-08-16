<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <svg class="h-8 w-8 text-indigo-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.657 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
            <h2 class="font-extrabold text-2xl text-gray-800 leading-tight tracking-tight">
                {{ __('Edit Profile') }}
            </h2>
        </div>
    </x-slot>

    <div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-12">
        <div class="max-w-4xl mx-auto space-y-8">
            <div class="p-8 bg-white shadow-2xl rounded-2xl border-t-4 border-indigo-500">
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-8 bg-white shadow-2xl rounded-2xl border-t-4 border-blue-500">
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-8 bg-white shadow-2xl rounded-2xl border-t-4 border-red-500">
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
