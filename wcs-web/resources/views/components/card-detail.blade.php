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
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 border-t border-b py-6">
                    <!-- Waktu -->
                    <div>
                        <h1 class="text-xl font-medium text-gray-800">Date and time</h1>
                        <div class="flex items-center mt-2 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M15.75 3v1.5M3 9.75h18M21 9.75v9.75a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 19.5V9.75M16.5 13.5h.008v.008H16.5v-.008zM7.5 13.5h.008v.008H7.5v-.008z" />
                            </svg>
                            {{ \Carbon\Carbon::parse($date)->format('d F Y') }}
                        </div>
                        <div class="flex items-center mt-1 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l3 3" />
                            </svg>
                            {{ \Carbon\Carbon::parse($time)->format('H:i') }}
                        </div>
                    </div>

                    <!-- Lokasi -->
                    <div>
                        <h1 class="text-xl font-medium text-gray-800">Location</h1>
                        <div class="flex items-center mt-2 text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2.25c4.832 0 8.75 3.918 8.75 8.75 0 6.364-8.75 11.75-8.75 11.75s-8.75-5.386-8.75-11.75c0-4.832 3.918-8.75 8.75-8.75z" />
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
