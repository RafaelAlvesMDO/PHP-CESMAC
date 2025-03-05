<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center">Categories</h1>
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-4">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category }}</h5>
                        <img src="{{ asset('img/powerbank.png') }}" class="card-img" alt="Category Image">
                        <p class="card-text">Category Description {{ $category }}.</p>
                        <a href="#" class="btn btn-primary">See more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>