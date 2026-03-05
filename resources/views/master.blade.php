<!-- resources/views/master.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap 5 (Updated) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
        }

        .custom-login {
            height: 500px;
            padding-top: 100px;
        }

        .search-box {
            width: 450px !important;
        }

        .trending-wrapper img,
        .trending-img,
        .searching-img {
            width: 100%;
            object-fit: cover;
        }

        .trending-item,
        .searching-item {
            display: block;
            margin-bottom: 15px;
        }

        .trending-title,
        .searching-title {
            padding: 5px 0;
        }
    </style>
</head>

<body>

    {{-- Include Header --}}
    @include('header')

    {{-- Page Content --}}
    <div class="container mt-4">
        @yield('content')
    </div>

    {{-- Include Footer --}}
    @include('footer')

</body>

</html>
