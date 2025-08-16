@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-indigo-100 py-12 px-4">
    <div class="max-w-3xl w-full bg-white shadow-2xl rounded-2xl p-10 border border-gray-200">
        <div class="flex items-center justify-center mb-8">
            <svg class="h-12 w-12 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 7v-6m0 0l-9-5m9 5l9-5" /></svg>
            <h1 class="ml-4 text-3xl font-extrabold text-gray-900 tracking-tight">Student Portal</h1>
        </div>
        @auth
            <div class="mb-8 text-center">
                <p class="mb-4 text-lg text-gray-700">Welcome back, <span class="font-bold text-indigo-700">{{ auth()->user()->name }}</span> <span class="bg-indigo-100 text-indigo-800 text-xs px-2 py-1 rounded">{{ auth()->user()->role }}</span></p>
                @if(auth()->user()->isTeacher())
                    <a href="{{ route('teacher.dashboard') }}" class="inline-flex items-center px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-xl shadow transition">Go to Teacher Dashboard <span class="ml-2">&rarr;</span></a>
                @else
                    <a href="{{ route('student.dashboard') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl shadow transition">Go to Student Dashboard <span class="ml-2">&rarr;</span></a>
                @endif
            </div>
        @endauth

        @guest
        <div class="grid sm:grid-cols-2 gap-8 mt-4">
            <div class="bg-blue-50 border border-blue-200 rounded-xl p-6 flex flex-col items-center shadow">
                <svg class="h-8 w-8 text-blue-500 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.657 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                <h2 class="font-bold text-lg mb-2 text-blue-700">Student</h2>
                <div class="space-x-2">
                    <a href="{{ route('login') }}" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-semibold shadow">Login</a>
                    <a href="{{ route('register') }}?role=student" class="px-5 py-2 bg-green-500 hover:bg-green-600 text-white rounded-xl font-semibold shadow">Sign up</a>
                </div>
            </div>
            <div class="bg-indigo-50 border border-indigo-200 rounded-xl p-6 flex flex-col items-center shadow">
                <svg class="h-8 w-8 text-indigo-500 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 01-8 0m8 0a4 4 0 01-8 0m8 0v4a4 4 0 01-8 0V7m8 0V5a4 4 0 00-8 0v2" /></svg>
                <h2 class="font-bold text-lg mb-2 text-indigo-700">Teacher / Admin</h2>
                <div class="space-x-2">
                    <a href="{{ route('login') }}" class="px-5 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold shadow">Login</a>
                    <a href="{{ route('register') }}?role=teacher" class="px-5 py-2 bg-purple-500 hover:bg-purple-600 text-white rounded-xl font-semibold shadow">Sign up</a>
                </div>
            </div>
        </div>
        @endguest
    </div>
</div>
@endsection
