@extends('layouts.app')

@section('content')
<h1 class="text-5xl font-bold mt-24 px-6 sm:px-8 lg:px-12 md:flex lg:flex">Photo Files</h1>

<div class="mx-auto px-14 sm:justify-items-center sm:px-16 lg:px-20 md:flex lg:flex flex-wrap gap-6">
    <!-- Loop for articles -->
    @foreach ($articles as $article)
    <div class="card w-96 mt-12 mx-5">
        <!-- Custom x-card component -->
        <x-card :title="$article->title" :description="$article->content" :imageUrl="Storage::url($article->file)"
            :date="$article->date" :location="$article->location" :user="$article->user->name" />
    </div>
    @endforeach
</div>
@endsection