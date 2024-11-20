@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto mt-10">
    <h1 class="text-3xl font-semibold text-gray-800 mb-6">Photo Files</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($photos as $photo)
        <div class="card bg-base-100 shadow-xl p-4">
            <h2 class="text-xl font-bold text-gray-900">{{ basename($photo) }}</h2>
            <img src="{{ asset('storage/' . $photo) }}" alt="{{ basename($photo) }}"
                class="w-full h-auto rounded-lg shadow-md">

            <!-- Download Button -->
            <div class="mt-4 flex justify-end">
                <a href="{{ asset('storage/' . $photo) }}" download="{{ basename($photo) }}"
                    class="btn btn-primary btn-sm">
                    Download
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection