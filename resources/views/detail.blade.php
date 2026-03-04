@extends('master')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-sm-6">
                <img src="{{ $product->gallery }}" alt="{{ $product->name }}" style="width:400px; height:150px;">
            </div>
            <div class="col-sm-6">
                <h3>{{ $product->name }}</h3>
                <p><strong>Price:</strong> ₹{{ $product->price }}</p>
                <p><strong>Category:</strong> {{ $product->category }}</p>
                <p><strong>Description:</strong>{{ $product->description }}</p>
                <br><br>
                <form action="/add_to_cart" method="POST">
                    <input type="hidden" name="product_id" value="{{ $product }}">
                    @csrf
                    <button class="btn btn-success">Add To Cart</button>
                </form><br><br>
                <button class="btn btn-primary">Buy Now</button>

            </div>
        </div>

    </div>
@endsection
