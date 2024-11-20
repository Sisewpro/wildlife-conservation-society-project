@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto mt-10">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Video Files</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($videos as $video)
        <div class="card bg-base-100 shadow-xl p-4">
            <h2 class="text-xl font-bold text-gray-900">{{ basename($video) }}</h2>
            <video controls class="w-full h-auto rounded-lg shadow-md">
                <source src="{{ asset('storage/' . $video) }}" type="video/mp4">
                Your browser does not support the video element.
            </video>

            <!-- Download Button -->
            <div class="mt-4 flex justify-end">
                <a href="{{ asset('storage/' . $video) }}" download="{{ basename($video) }}"
                    class="btn btn-primary btn-sm">
                    Download
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection