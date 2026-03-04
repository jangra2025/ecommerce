<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>

    {{ View::make('header') }}

    <div class="container mt-4">
        @yield('content')
    </div>

    {{ View::make('footer') }}

</body>
<style>
    .custom-login {
        height: 500px;
        padding-top: 100px;
    }

    .search-box {
        width: 450px !important
    }
</style>
</html>
