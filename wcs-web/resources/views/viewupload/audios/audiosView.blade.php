@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto mt-10">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Audio Files</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($audios as $audio)
        <div class="card bg-base-100 shadow-xl p-4">
            <h2 class="text-xl font-bold text-gray-900">{{ basename($audio) }}</h2>
            <audio controls class="w-full mt-2">
                <source src="{{ asset('storage/' . $audio) }}" type="audio/mp3">
                Your browser does not support the audio element.
            </audio>

            <!-- Download Button -->
            <div class="mt-4 flex justify-end">
                <a href="{{ asset('storage/' . $audio) }}" download="{{ basename($audio) }}"
                    class="btn btn-primary btn-sm">
                    Download
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection