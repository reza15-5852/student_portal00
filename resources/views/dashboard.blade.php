<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <svg class="h-8 w-8 text-indigo-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 7v-6m0 0l-9-5m9 5l9-5" /></svg>
            <h2 class="font-extrabold text-2xl text-gray-800 leading-tight tracking-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-12">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-2xl shadow-2xl border-t-4 border-indigo-500 p-10 flex flex-col items-center">
                <svg class="h-12 w-12 text-indigo-600 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m4 0h-1v-4h-1" /></svg>
                <h1 class="text-3xl font-extrabold text-gray-900 mb-2">Welcome to your Dashboard!</h1>
                <p class="text-lg text-gray-700 mb-4">You are successfully logged in.</p>
                <a href="/" class="px-6 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold shadow">Go to Home</a>
            </div>
        </div>
    </div>
</x-app-layout>
