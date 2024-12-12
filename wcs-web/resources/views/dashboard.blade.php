<x-app-layout>
    <div class="carousel w-full">
        <div id="slide1" class="carousel-item relative w-full">
            <div class="hero min-h-screen"
                style="background-image: url(https://images.unsplash.com/photo-1545063914-a1a6ec821c88?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHdpbGRsaWZlfGVufDB8fDB8fHww);">
                <div class="hero-overlay bg-opacity-60"></div>
                <div class="hero-content text-neutral-content text-center">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-7xl font-bold">See Wildlife</h1>
                        <p class="mb-5">
                            Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                            quasi. In deleniti eaque aut repudiandae et a id nisi.
                        </p>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
            </div>
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide4" class="btn btn-circle">❮</a>
                <a href="#slide2" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide2" class="carousel-item relative w-full">
            <div class="hero min-h-screen"
                style="background-image: url(https://images.unsplash.com/photo-1610447158291-d917870bf750?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8NGslMjBmb3Jlc3R8ZW58MHx8MHx8fDA%3D);">
                <div class="hero-overlay bg-opacity-60"></div>
                <div class="hero-content text-neutral-content text-center">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-7xl font-bold">See Wildlife</h1>
                        <p class="mb-5">
                            Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                            quasi. In deleniti eaque aut repudiandae et a id nisi.
                        </p>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
            </div>
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide1" class="btn btn-circle">❮</a>
                <a href="#slide3" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide3" class="carousel-item relative w-full">
            <div class="hero min-h-screen"
                style="background-image: url(https://images.unsplash.com/photo-1427434991195-f42379e2139d?ixlib=rb-4.0.3);">
                <div class="hero-overlay bg-opacity-60"></div>
                <div class="hero-content text-neutral-content text-center">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-7xl font-bold">See Wildlife</h1>
                        <p class="mb-5">
                            Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                            quasi. In deleniti eaque aut repudiandae et a id nisi.
                        </p>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
            </div>
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide2" class="btn btn-circle">❮</a>
                <a href="#slide4" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide4" class="carousel-item relative w-full">
            <div class="hero min-h-screen"
                style="background-image: url(https://images.unsplash.com/photo-1721799671066-650447f5c112?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8cmFpbiUyMGZvcmVzdHxlbnwwfHwwfHx8MA%3D%3D);">
                <div class="hero-overlay bg-opacity-60"></div>
                <div class="hero-content text-neutral-content text-center">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-7xl font-bold">See Wildlife</h1>
                        <p class="mb-5">
                            Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                            quasi. In deleniti eaque aut repudiandae et a id nisi.
                        </p>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
            </div>
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide3" class="btn btn-circle">❮</a>
                <a href="#slide1" class="btn btn-circle">❯</a>
            </div>
        </div>
    </div>

    <!-- Form Tambah Artikel buat di Uploads
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="mb-8">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" rows="4" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
        </div>

        <div class="mb-4">
            <label for="file" class="block text-sm font-medium text-gray-700">File (Optional)</label>
            <input type="file" name="file" id="file" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-4">
            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
            <input type="date" name="date" id="date" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-4">
            <label for="time" class="block text-sm font-medium text-gray-700">Time</label>
            <input type="time" name="time" id="time" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="mb-4">
            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
            <input type="text" name="location" id="location" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600">
            Add Article
        </button>
    </form> -->

    <h1 class="text-5xl font-bold mt-24 px-6 sm:px-8 lg:px-12 md:flex lg:flex">Recent Uploads</h1>

    <div class="mx-auto px-14 sm:justify-items-center sm:px-16 lg:px-20 md:flex lg:flex">
        <!-- Untuk memunculkan card -->
        @foreach ($articles as $article)
        <div class="card w-96 mt-12 mx-5">
            <x-card :title="$article->title" :description="$article->content" :imageUrl="Storage::url($article->file)"
                :date="$article->date" :location="$article->location" :user="$article->user->name" />
        </div>
        @endforeach
    </div>

    <div class="mt-24 pb-4 text-center">
        <p>Provided by Techno Net Copyright 2024 &copy;.</p>
    </div>
</x-app-layout>