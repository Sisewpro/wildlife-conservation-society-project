<div class="relative w-full h-64 rounded-lg overflow-hidden shadow-lg group"
    x-data="
    { shortDescription: '{{ Str::limit($description, 20, '...') }}', longDescription: '{{ Str::limit($description, 75, '...') }}', displayDescription: '' }
     " 
    x-init="
    displayDescription = window.innerWidth >= 1280 ? longDescription : (window.innerWidth < 768 ? longDescription : shortDescription); 
    window.addEventListener('resize', () => { 
        displayDescription = window.innerWidth >= 1280 ? longDescription : (window.innerWidth < 768 ? longDescription : shortDescription); 
    })">
    <!-- Menentukan File Media -->
    {{ $slot }}

    <!-- Overlay untuk hover -->
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4">
        <!-- Tombol View di tengah -->
        <div class="mt-20 inset-0 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <button class="btn" onclick="location.href='{{ route('details', ['id' => $id]) }}'">
                View
            </button>
        </div>

        <!-- Informasi Artikel di bagian bawah -->
        <div class="text-white mt-auto">
            <h2 class="text-lg font-semibold">{{ Str::limit($title, 37, '...') }}</h2>
            <p class="mt-1 text-sm text-gray-200" x-text="displayDescription"></p>
            <p class="mt-2 text-xs text-gray-300">
                {{ \Carbon\Carbon::parse($date)->format('d M Y') }} &bull; {{ $location }} &bull; {{ $user }}
            </p>
        </div>
    </div>
</div>
