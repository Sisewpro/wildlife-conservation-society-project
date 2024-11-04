<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildlife Conservation Society</title>
    <style>
    body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #f2f2f2;
        padding: 10px 0;
        text-align: center;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .logo {
        width: 200px;
        height: auto;
    }

    .title {
        font-size: 32px;
        margin-bottom: 20px;
    }

    .content {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .image-container {
        position: relative;
        width: 300px;
        height: 200px;
        overflow: hidden;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .button {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .button:hover {
        background-color: #0069d9;
    }
    </style>
</head>

<body>

    <header>
        <img src="/logo.png" alt="Wildlife Conservation Society" class="logo">
        <h1 class="title">Wildlife Conservation Society</h1>
    </header>

    <div class="container">
        <div class="content">
            @if(isset($images) && count($images) > 0)
            @foreach($images as $image)
            <div class="image-container">
                <img src="{{ asset('storage/uploads/' . $image) }}" alt="Uploaded Image"
                    style="max-width: 200px; max-height: 200px;">
            </div>
            @endforeach
            @else
            <p>No images uploaded yet.</p>
            @endif

            <button class="button">Learn More</button>
        </div>
    </div>

    <script src="/js/app.js"></script>
</body>

</html>