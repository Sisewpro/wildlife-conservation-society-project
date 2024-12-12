<div class="relative w-full h-64 rounded-lg overflow-hidden shadow-lg group" x-data="
    {
        shortDescription: '{{ Str::limit($description, 20, '...') }}', 
        longDescription: '{{ Str::limit($description, 75, '...') }}', 
        displayDescription: '' 
    }" x-init="
    displayDescription = window.innerWidth >= 1280 ? longDescription : (window.innerWidth < 768 ? longDescription : shortDescription); 
    window.addEventListener('resize', () => { 
        displayDescription = window.innerWidth >= 1280 ? longDescription : (window.innerWidth < 768 ? longDescription : shortDescription); 
    })">

    <!-- Menampilkan Media -->
    @if (in_array(pathinfo($imageUrl, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']))
    <!-- Gambar -->
    <img src="{{ $imageUrl }}" alt="{{ $title }}"
        class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
    @elseif (in_array(pathinfo($imageUrl, PATHINFO_EXTENSION), ['mp3', 'wav']))
    <!-- Audio -->
    <audio controls class="w-full h-full">
        <source src="{{ $imageUrl }}" type="audio/{{ pathinfo($imageUrl, PATHINFO_EXTENSION) }}">
        Your browser does not support the audio element.
    </audio>
    @elseif (in_array(pathinfo($imageUrl, PATHINFO_EXTENSION), ['mp4', 'webm']))
    <!-- Video -->
    <video controls class="w-full h-full rounded-lg">
        <source src="{{ $imageUrl }}" type="video/{{ pathinfo($imageUrl, PATHINFO_EXTENSION) }}">
        Your browser does not support the video tag.
    </video>
    @else
    <!-- Placeholder untuk file yang tidak didukung -->
    <div class="w-full h-full flex items-center justify-center bg-gray-200">
        <p class="text-gray-500">File type not supported</p>
    </div>
    @endif

    <!-- Overlay untuk hover -->
    <div
        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4">
        <!-- Tombol View di tengah -->
        <div
            class="mt-20 inset-0 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <button class="btn">
                View
            </button>
        </div>

        <!-- Informasi Artikel di bagian bawah -->
        <div class="text-white mt-auto">
            <h2 class="text-lg font-semibold">{{ $title }}</h2>
            <p class="mt-1 text-sm text-gray-200" x-text="displayDescription"></p>
            <p class="mt-2 text-xs text-gray-300">
                {{ $date }} &bull; {{ $location }} &bull; {{ $user }}
            </p>
        </div>
    </div>
</div>