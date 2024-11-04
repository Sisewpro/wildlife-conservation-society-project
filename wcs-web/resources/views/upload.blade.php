<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"> <!-- Vite.js integration -->
</head>

<body>
    <h1>Upload a File</h1>

    @if (session('success'))
    <div>{{ session('success') }}</div>
    @endif

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button type="submit">Upload</button>
    </form>


    <div>
        <a href="{{ url('/') }}">Back to Home</a>
    </div>
</body>

</html>