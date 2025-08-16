@extends('layouts.app')
@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-10">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center mb-8">
            <svg class="h-10 w-10 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 01-8 0m8 0a4 4 0 01-8 0m8 0v4a4 4 0 01-8 0V7m8 0V5a4 4 0 00-8 0v2" /></svg>
            <h1 class="ml-4 text-3xl font-extrabold text-gray-900 tracking-tight">Teacher Dashboard</h1>
        </div>
        <div class="grid md:grid-cols-4 gap-8 mb-10">
            <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-blue-500 flex flex-col">
                <div class="flex items-center mb-4">
                    <svg class="h-7 w-7 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m-6 0h6" /></svg>
                    <h2 class="font-bold text-lg">Students</h2>
                </div>
                <ul class="space-y-2 flex-1">
                    @foreach($students as $s)
                        <li class="flex items-center justify-between text-sm font-medium">
                            <span class="text-gray-800">{{ $s->name }} <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">{{ $s->student_id }}</span></span>
                            <span class="text-gray-500">{{ $s->email }}</span>
                        </li>
                    @endforeach
                </ul>
                <div class="mt-4">{{ $students->links() }}</div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-green-500 flex flex-col">
                <div class="flex items-center mb-4 justify-between">
                    <div class="flex items-center">
                        <svg class="h-7 w-7 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <h2 class="font-bold text-lg">Assignments</h2>
                    </div>
                    <a href="{{ route('assignments.create') }}" class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-xl font-semibold shadow">New</a>
                </div>
                <ul class="space-y-2 flex-1">
                    @foreach($assignments as $a)
                        <li class="flex items-center justify-between text-sm font-medium">
                            <a class="text-green-700 font-semibold hover:underline" href="{{ route('assignments.show',$a) }}">{{ $a->title }}</a>
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">Submissions: {{ $a->submissions_count }}</span>
                        </li>
                    @endforeach
                </ul>
                <div class="mt-4">{{ $assignments->links() }}</div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-indigo-500 flex flex-col">
                <div class="flex items-center mb-4 justify-between">
                    <div class="flex items-center">
                        <svg class="h-7 w-7 text-indigo-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m4 0h-1v-4h-1" /></svg>
                        <h2 class="font-bold text-lg">Inbox</h2>
                    </div>
                    <a href="{{ route('messages.index') }}" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold shadow">Open</a>
                </div>
                <ul class="space-y-2 flex-1">
                    @foreach($messages as $m)
                        <li class="text-sm font-medium">
                            <a class="text-indigo-700 font-semibold hover:underline" href="{{ route('messages.show',$m) }}">{{ $m->subject }}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="mt-4">{{ $messages->links() }}</div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-purple-500 flex flex-col items-center justify-center">
                <svg class="h-8 w-8 text-purple-500 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16h6" /></svg>
                <a href="{{ route('results.create') }}" class="px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white rounded-xl font-semibold shadow">Publish Result</a>
            </div>
        </div>
    </div>
</div>
@endsection
