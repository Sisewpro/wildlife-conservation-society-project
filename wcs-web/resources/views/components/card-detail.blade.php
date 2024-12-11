<x-app-layout>
    
    <div class="max-w-screen-2xl mx-auto overflow-hidden mt-12">
        <!-- File Media -->
        @if($file)
            @php
                // Mendapatkan ekstensi file
                $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
            @endphp

            <div class="relative px-12">
                @if(in_array(strtolower($fileExtension), ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                    <!-- Gambar -->
                    <img src="{{ asset('storage/' . $file) }}" alt="{{ $title }}" 
                        class="w-full max-h-[75vh] h-auto object-cover rounded-lg">
                @elseif(in_array(strtolower($fileExtension), ['mp4', 'webm', 'ogg']))
                    <!-- Video -->
                    <video controls class="w-full max-h-[75vh] h-auto object-cover rounded-lg">
                        <source src="{{ asset('storage/' . $file) }}" type="video/{{ $fileExtension }}">
                        Your browser does not support the video tag.
                    </video>
                @elseif(in_array(strtolower($fileExtension), ['mp3', 'wav', 'ogg']))
                    <!-- Audio -->
                    <audio controls class="w-full shadow-lg rounded-lg">
                        <source src="{{ asset('storage/' . $file) }}" type="audio/{{ $fileExtension }}">
                        Your browser does not support the audio element.
                    </audio>
                @else
                    <!-- File Tidak Didukung -->
                    <p class="text-gray-500 text-center">File format is not supported for preview.</p>
                @endif
            </div>
        @endif
        <!-- Konten -->
        <div class="max-w-screen-2xl bg-white overflow-hidden mx-12 mt-4 pt-4 shadow-lg rounded-lg">
            <div class="py-6 px-12 space-y-6">
                <div class="flex justify-between items-center mb-4">
                    <!-- Judul dan User -->
                    <div class="text-left">
                        <h1 class="text-3xl font-bold text-gray-900">{{ $title }}</h1>
                        <p class="text-sm text-gray-500 mt-2">By {{ $user ?? 'Unknown User' }}</p>
                    </div>

                    <!-- Tombol Download -->
                    @if($file)
                    <div>
                        <a href="{{ asset('storage/' . $file) }}" download 
                        class="btn btn-primary">
                            Download
                        </a>
                    </div>
                    @endif
                </div>

                <!-- Informasi Waktu dan Lokasi -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 border-t border-b py-6">
                    <!-- Waktu -->
                    <div>
                        <h1 class="text-xl font-medium text-gray-800">Date and time</h1>
                        <div class="flex items-center mt-2 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                            </svg>
                            {{ \Carbon\Carbon::parse($date)->format('d F Y') }}
                        </div>
                        <div class="flex items-center mt-1 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            {{ \Carbon\Carbon::parse($time)->format('H:i') }}
                        </div>
                    </div>

                    <!-- Lokasi -->
                    <div>
                        <h1 class="text-xl font-medium text-gray-800">Location</h1>
                        <div class="flex items-center mt-2 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            {{ $location }}
                        </div>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div>
                    <h1 class="text-xl font-semibold text-gray-800">Description</h1>
                    <p class="mt-3 text-gray-600 leading-relaxed">{{ $content }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
