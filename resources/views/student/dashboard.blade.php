@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-10">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center mb-8">
            <svg class="h-10 w-10 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 7v-6m0 0l-9-5m9 5l9-5" /></svg>
            <h1 class="ml-4 text-3xl font-extrabold text-gray-900 tracking-tight">Student Dashboard</h1>
        </div>
        <div class="grid md:grid-cols-4 gap-8 mb-10">
            <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-blue-500 flex flex-col">
                <div class="flex items-center mb-4">
                    <svg class="h-7 w-7 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m-6 0h6" /></svg>
                    <h2 class="font-bold text-lg">Assignments</h2>
                </div>
                <ul class="space-y-2 flex-1">
                    @foreach($assignments as $a)
                        <li class="flex items-center justify-between">
                            <a class="text-blue-600 font-semibold hover:underline" href="{{ route('assignments.show', $a) }}">{{ $a->title }}</a>
                            @if($a->due_date)<span class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded">Due: {{ $a->due_date }}</span>@endif
                        </li>
                    @endforeach
                </ul>
                <div class="mt-4">{{ $assignments->links() }}</div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-green-500 flex flex-col">
                <div class="flex items-center mb-4">
                    <svg class="h-7 w-7 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                    <h2 class="font-bold text-lg">Your Submissions</h2>
                </div>
                <ul class="space-y-2 flex-1">
                    @foreach($submissions as $s)
                        <li>
                            <div class="text-sm font-medium">{{ $s->assignment->title }} — <span class="capitalize">{{ $s->status }}</span>
                            @if($s->grade) <span class="ml-2 bg-green-100 text-green-700 px-2 py-1 rounded">Grade: {{ $s->grade }}</span> @endif
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="mt-4">{{ $submissions->links() }}</div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-indigo-500 flex flex-col">
                <div class="flex items-center mb-4">
                    <svg class="h-7 w-7 text-indigo-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m4 0h-1v-4h-1" /></svg>
                    <h2 class="font-bold text-lg">Results</h2>
                </div>
                <a class="text-indigo-600 font-semibold underline" href="{{ route('results.student') }}">View all results</a>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-6 border-t-4 border-purple-500 flex flex-col">
                <div class="flex items-center mb-4">
                    <svg class="h-7 w-7 text-purple-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16h6" /></svg>
                    <h2 class="font-bold text-lg">Contact Admin/Teacher</h2>
                </div>
                @if(session('status'))<div class="p-2 bg-green-100 rounded mb-3 text-center font-semibold">{{ session('status') }}</div>@endif
                <form method="POST" action="{{ route('student.message.store') }}" class="space-y-3">
                    @csrf
                    <div>
                        <label class="block text-sm mb-1 font-semibold">Subject</label>
                        <input name="subject" class="w-full border rounded p-2 focus:ring-2 focus:ring-purple-400" required />
                        @error('subject')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
                    </div>
                    <div>
                        <label class="block text-sm mb-1 font-semibold">Message</label>
                        <textarea name="body" class="w-full border rounded p-2 focus:ring-2 focus:ring-purple-400" rows="4" required></textarea>
                        @error('body')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
                    </div>
                    <button class="px-5 py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-xl font-semibold shadow">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
