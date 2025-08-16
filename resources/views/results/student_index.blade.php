@extends('layouts.app')
@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-10">
    <div class="max-w-5xl mx-auto">
        <div class="flex items-center mb-8">
            <svg class="h-10 w-10 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m4 0h-1v-4h-1" /></svg>
            <h1 class="ml-4 text-3xl font-extrabold text-gray-900 tracking-tight">My Results</h1>
        </div>
        <div class="bg-white rounded-2xl shadow-lg border-t-4 border-indigo-500 overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-indigo-50">
                    <tr>
                        <th class="text-left p-4 font-bold text-indigo-700">Subject</th>
                        <th class="text-left p-4 font-bold text-indigo-700">Term</th>
                        <th class="text-left p-4 font-bold text-indigo-700">Marks</th>
                        <th class="text-left p-4 font-bold text-indigo-700">Grade</th>
                        <th class="text-left p-4 font-bold text-indigo-700">Published</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($results as $r)
                    <tr class="border-t hover:bg-indigo-50 transition">
                        <td class="p-4 font-semibold text-gray-800">{{ $r->subject }}</td>
                        <td class="p-4 text-gray-600">{{ $r->term }}</td>
                        <td class="p-4">
                            <span class="px-2 py-1 rounded bg-blue-100 text-blue-700 font-bold">{{ $r->marks }}</span>
                        </td>
                        <td class="p-4">
                            <span class="px-2 py-1 rounded bg-green-100 text-green-700 font-bold">{{ $r->grade }}</span>
                        </td>
                        <td class="p-4 text-gray-600">{{ $r->published_at? $r->published_at->format('Y-m-d') : '' }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="p-4 text-center text-gray-500">No results found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-6">{{ $results->links() }}</div>
    </div>
</div>
@endsection
