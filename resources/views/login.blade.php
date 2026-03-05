@extends('master')

@section('content')
<div class="container custom-login mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <h3 class="mb-3 text-center">Login</h3>

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="/login" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            <!-- YAHAN ADD KARNA HAI -->
            <p class="text-center mt-3">
                Don't have an account? <a href="/register">Register</a>
            </p>

        </div>
    </div>
</div>
@endsection