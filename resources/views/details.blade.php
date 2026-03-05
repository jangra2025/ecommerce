@extends('master')

@section('content')
<div class="container mt-3">
    @if(isset($details) && $details)
        <div class="row">
            <div class="col-sm-6">
                <img src="{{ $details->gallery }}" alt="{{ $details->name }}" 
                     class="img-fluid" style="width:100%; height:auto; object-fit:cover;">
            </div>
            <div class="col-sm-6">
                <h3>{{ $details->name }}</h3>
                <p><strong>Price:</strong> ₹{{ $details->price }}</p>
                <p><strong>Category:</strong> {{ $details->category }}</p>
                <p><strong>Description:</strong> {{ $details->description }}</p>

                <form action="/add_to_cart" method="POST" class="mb-2">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $details->id }}">
                    <button type="submit" class="btn btn-success">Add To Cart</button>
                </form>

                <button class="btn btn-primary">Buy Now</button>
            </div>
        </div>
    @else
        <h4 class="text-center mt-5 text-danger">Product not found.</h4>
    @endif
</div>
@endsection