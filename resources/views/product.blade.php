<!-- resources/views/product.blade.php -->
@extends('master')
@section('content')
    <div class="container custom-product">
        <div class="row">

            <div class="col-md-12">
                <h2>Products Carousel</h2>

                <div id="productCarousel" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @foreach ($products as $key => $item)
                            <li data-target="#productCarousel" data-slide-to="{{ $key }}"
                                class="{{ $key == 0 ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        @foreach ($products as $item)
                            <div class="item {{ $item['id'] == 1 ? 'active' : '' }}">
                                 <a href="{{ route('detail', $item['id']) }}">
                                    <img class="slider-img" src="{{ $item['gallery'] }}" alt="images">
                                    <div class="carousel-caption">
                                        <h3>{{ $item->name }}</h3>
                                        <p>{{ $item->description }}</p>
                                        <p>Price: ₹{{ $item->price }}</p>
                                        <p>Category: {{ $item->category }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#productCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#productCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
            <div class="col-md-12 mt-5">
                <h2>Trending Products</h2>
                <div class="row">
                    @foreach ($products as $item)
                        <div class="col-md-3 text-center mb-4">
                            <!-- Fixed height & responsive with object-fit -->
                            <img class="slider-img img-fluid" src="{{ asset($item->gallery) }}" alt="{{ $item->name }}"
                                style="height:200px; width:100%; object-fit:cover; border-radius:5px;">
                            <div class="mt-2">
                                <h5>{{ $item->name }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
