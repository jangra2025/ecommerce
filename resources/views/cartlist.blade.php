@extends('master')

@section('content')
<div class="container-fluid p-0 mt-3">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="container mt-3">
                <h2>Cart List</h2>

                @if(isset($data) && count($data) > 0)
                    <a href="/ordernow" class="btn btn-success mb-3">Order Now</a>
                    <div class="searching-wrapper">
                        @foreach ($data as $item)
                        <div class="row mb-3 p-2 border rounded">
                            <div class="col-sm-4">
                                <a href="{{ url('detail/'.$item->id) }}" class="searching-item text-decoration-none text-dark">
                                    <img src="{{ $item->gallery }}" class="trending-img p-2" style="width:100%; height:200px; object-fit:cover;">
                                </a>
                            </div>
                            <div class="col-sm-4">
                                <a href="{{ url('detail/'.$item->id) }}" class="text-decoration-none text-dark">
                                    <div class="searching-title">
                                        <h4>Name: {{ $item->name }}</h4>
                                        <h5>Price: ₹{{ $item->price }}</h5>
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-4 d-flex align-items-center">
                                <a href="{{ url('/removecart/'.$item->cart_id) }}" class="btn btn-warning">Remove from Cart</a>
                            </div>
                        </div>
                        @endforeach
                        <a href="/ordernow" class="btn btn-success mt-3">Order Now</a>
                    </div>
                @else
                    <h5 class="text-center mt-3">Your cart is empty.</h5>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection