@extends('master')

@section('content')

<div class="container">
    <div class="row">

        <!-- Left Side Filter -->
        <div class="col-md-3">
            <h4>Filter</h4>
        </div>

        <!-- Right Side Results -->
        <div class="col-md-9">
            <h4>Result For Products</h4>

            @if(count($products) > 0)

                @foreach ($products as $item)
                    <div class="card mb-3 p-3">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset($item->gallery) }}"
                                     
                                     style="height:250px;width:500px;">
                            </div>

                            <div class="col-md-8">
                                <a href="{{ url('detail/'.$item->id) }}">
                                    <h5>{{ $item->name }}</h5>
                                </a>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            @else
                <h5>No Products Found</h5>
            @endif

        </div>

    </div>
</div>

@endsection