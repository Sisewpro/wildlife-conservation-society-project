@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-20 px-4 py-6 bg-white rounded-lg shadow-lg">
    <h2 class="text-4xl font-semibold text-gray-800 mb-6">Upload New Article</h2>

    <!-- Form untuk upload artikel -->
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <!-- Title Input -->
        <div class="mb-4">
            <label for="title" class="block text-lg font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" required
                class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
        </div>

        <!-- Description Input -->
        <div class="mb-4">
            <label for="description" class="block text-lg font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" rows="4" required
                class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"></textarea>
        </div>

        <!-- File Input -->
        <div class="mb-4">
            <label for="file" class="block text-lg font-medium text-gray-700">File (Optional)</label>
            <input type="file" name="file" id="file"
                class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
        </div>

        <!-- Location Input -->
        <div class="mb-4">
            <label for="location" class="block text-lg font-medium text-gray-700">Location</label>
            <input type="text" name="location" id="location" required
                class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
        </div>

        <!-- Submit Button -->
        <button type="submit"
            class="w-full py-3 bg-blue-500 text-white font-semibold rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
            Add Article
        </button>
    </form>
</div>
@endsection