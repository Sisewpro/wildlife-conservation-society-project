<x-app-layout>
    <div
        class="hero min-h-screen"
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
    
    <h1 class="text-5xl font-bold mt-24 px-6 sm:px-8 lg:px-12 md:flex lg:flex">Recent Uploads</h1>

    <div class="mx-auto px-14 sm:justify-items-center sm:px-16 lg:px-20 md:flex lg:flex">

        <div class="card w-96 mt-12 mx-5">
            @component('components.card')
                @slot('imageUrl', 'https://images.unsplash.com/photo-1542181149-585bcf0d9ce9?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8NnwxMDYwNzA4MXx8ZW58MHx8fHx8') <!-- Ganti dengan URL gambar -->
                @slot('title', 'Example Title 1')
                @slot('description', 'If a dog chews shoes whose shoes does he choose? If a dog chews shoes whose shoes does he choose? If a dog chews shoes whose shoes does he choose? If a dog chews shoes whose shoes does he choose? If a dog chews shoes whose shoes does he choose?')
                @slot('date', '2024-11-13')
                @slot('location', 'New York')
                @slot('user', 'John Doe')
            @endcomponent
        </div>

        <div class="card w-96 mt-12 mx-5">
            @component('components.card')
                @slot('imageUrl', 'https://images.unsplash.com/photo-1459262838948-3e2de6c1ec80?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8OHx8fGVufDB8fHx8fA%3D%3D') <!-- Ganti dengan URL gambar -->
                @slot('title', 'Shoes!')
                @slot('description', 'If a dog chews shoes whose shoes does he choose?')
                @slot('date', '2024-11-13')
                @slot('location', 'New York')
                @slot('user', 'John Doe')
            @endcomponent
        </div>

        <div class="card w-96 mt-12 mx-5">
            @component('components.card')
                @slot('imageUrl', 'https://images.unsplash.com/photo-1456926631375-92c8ce872def?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fHdpbGRsaWZlfGVufDB8fDB8fHww') <!-- Ganti dengan URL gambar -->
                @slot('title', 'Shoes!')
                @slot('description', 'If a dog chews shoes whose shoes does he choose?')
                @slot('date', '2024-11-13')
                @slot('location', 'New York')
                @slot('user', 'John Doe')
            @endcomponent
        </div>

        <div class="card w-96 mt-12 mx-5">
            @component('components.card')
                @slot('imageUrl', 'https://images.unsplash.com/photo-1650810954198-757671d7d079?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8NHx8fGVufDB8fHx8fA%3D%3D') <!-- Ganti dengan URL gambar -->
                @slot('title', 'Shoes!')
                @slot('description', 'If a dog chews shoes whose shoes does he choose?')
                @slot('date', '2024-11-13')
                @slot('location', 'New York')
                @slot('user', 'John Doe')
            @endcomponent
        </div>
    </div>
    
    <div class="mx-auto px-14 sm:justify-items-center sm:px-16 lg:px-20 md:flex lg:flex">

        <div class="card w-96 mt-12 mx-5">
            @component('components.card')
                @slot('imageUrl', 'https://images.unsplash.com/photo-1542181149-585bcf0d9ce9?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8NnwxMDYwNzA4MXx8ZW58MHx8fHx8') <!-- Ganti dengan URL gambar -->
                @slot('title', 'Shoes!')
                @slot('description', 'If a dog chews shoes whose shoes does he choose? If a dog chews shoes whose shoes does he choose? If a dog chews shoes whose shoes does he choose? If a dog chews shoes whose shoes does he choose? If a dog chews shoes whose shoes does he choose?')
                @slot('date', '2024-11-13')
                @slot('location', 'New York')
                @slot('user', 'John Doe')
            @endcomponent
        </div>

        <div class="card w-96 mt-12 mx-5">
            @component('components.card')
                @slot('imageUrl', 'https://images.unsplash.com/photo-1459262838948-3e2de6c1ec80?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8OHx8fGVufDB8fHx8fA%3D%3D') <!-- Ganti dengan URL gambar -->
                @slot('title', 'Shoes!')
                @slot('description', 'If a dog chews shoes whose shoes does he choose?')
                @slot('date', '2024-11-13')
                @slot('location', 'New York')
                @slot('user', 'John Doe')
            @endcomponent
        </div>

        <div class="card w-96 mt-12 mx-5">
            @component('components.card')
                @slot('imageUrl', 'https://images.unsplash.com/photo-1456926631375-92c8ce872def?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fHdpbGRsaWZlfGVufDB8fDB8fHww') <!-- Ganti dengan URL gambar -->
                @slot('title', 'Shoes!')
                @slot('description', 'If a dog chews shoes whose shoes does he choose?')
                @slot('date', '2024-11-13')
                @slot('location', 'New York')
                @slot('user', 'John Doe')
            @endcomponent
        </div>

        <div class="card w-96 mt-12 mx-5">
            @component('components.card')
                @slot('imageUrl', 'https://images.unsplash.com/photo-1650810954198-757671d7d079?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8NHx8fGVufDB8fHx8fA%3D%3D') <!-- Ganti dengan URL gambar -->
                @slot('title', 'Shoes!')
                @slot('description', 'If a dog chews shoes whose shoes does he choose?')
                @slot('date', '2024-11-13')
                @slot('location', 'New York')
                @slot('user', 'John Doe')
            @endcomponent
        </div>
    </div>
    
    <div class="mx-auto px-14 sm:justify-items-center sm:px-16 lg:px-20 md:flex lg:flex">

        <div class="card w-96 mt-12 mx-5">
            @component('components.card')
                @slot('imageUrl', 'https://images.unsplash.com/photo-1542181149-585bcf0d9ce9?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8NnwxMDYwNzA4MXx8ZW58MHx8fHx8') <!-- Ganti dengan URL gambar -->
                @slot('title', 'Shoes!')
                @slot('description', 'If a dog chews shoes whose shoes does he choose? If a dog chews shoes whose shoes does he choose? If a dog chews shoes whose shoes does he choose? If a dog chews shoes whose shoes does he choose? If a dog chews shoes whose shoes does he choose?')
                @slot('date', '2024-11-13')
                @slot('location', 'New York')
                @slot('user', 'John Doe')
            @endcomponent
        </div>

        <div class="card w-96 mt-12 mx-5">
            @component('components.card')
                @slot('imageUrl', 'https://images.unsplash.com/photo-1459262838948-3e2de6c1ec80?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8OHx8fGVufDB8fHx8fA%3D%3D') <!-- Ganti dengan URL gambar -->
                @slot('title', 'Shoes!')
                @slot('description', 'If a dog chews shoes whose shoes does he choose?')
                @slot('date', '2024-11-13')
                @slot('location', 'New York')
                @slot('user', 'John Doe')
            @endcomponent
        </div>

        <div class="card w-96 mt-12 mx-5">
            @component('components.card')
                @slot('imageUrl', 'https://images.unsplash.com/photo-1456926631375-92c8ce872def?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fHdpbGRsaWZlfGVufDB8fDB8fHww') <!-- Ganti dengan URL gambar -->
                @slot('title', 'Shoes!')
                @slot('description', 'If a dog chews shoes whose shoes does he choose?')
                @slot('date', '2024-11-13')
                @slot('location', 'New York')
                @slot('user', 'John Doe')
            @endcomponent
        </div>

        <div class="card w-96 mt-12 mx-5">
            @component('components.card')
                @slot('imageUrl', 'https://images.unsplash.com/photo-1650810954198-757671d7d079?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8NHx8fGVufDB8fHx8fA%3D%3D') <!-- Ganti dengan URL gambar -->
                @slot('title', 'Shoes!')
                @slot('description', 'If a dog chews shoes whose shoes does he choose?')
                @slot('date', '2024-11-13')
                @slot('location', 'New York')
                @slot('user', 'John Doe')
            @endcomponent
        </div>
    </div>
    

    <div class="mt-24 pb-4 text-center"><p>Provided by Techno Net Copyright 2024.</p></div>
</x-app-layout>
