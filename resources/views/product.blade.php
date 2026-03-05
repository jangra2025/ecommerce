@extends('master')

@section('content')
<div class="container-fluid p-0 mt-3">

    <!-- Carousel Section -->
    @if(isset($products) && count($products) > 0)
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($products as $key => $item)
            <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($products as $key => $item)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <a href="{{ url('details/'.$item->id) }}">
                    <img src="{{ $item->gallery }}" class="d-block w-100" style="height:550px; object-fit:cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>{{ $item->name }}</h3>
                        <p>{{ $item->description }}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    @else
    <p class="text-center mt-5">No products available.</p>
    @endif

    <!-- Trending Products Section -->
    @if(isset($products) && count($products) > 0)
    <div class="container mt-5">
        <h2 class="mb-3">Trending Products</h2>
        <div class="row">
            @foreach ($products as $item)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <a href="{{ url('details/'.$item->id) }}">
                        <img src="{{ $item->gallery }}" class="card-img-top" style="height:200px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif

</div>
@endsection