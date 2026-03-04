@extends('master')

@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h4>My Cart</h4>

            @if(count($product) > 0) 
                
                @foreach ($product as $item)
                    <div class="card mb-3 p-3">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset($item->gallery) }}" 
                                     alt="{{ $item->name }}" 
                                     style="height:250px;width:100%;">
                            </div>

                            <div class="col-md-8">
                                <a href="{{ url('detail/'.$item->id) }}">
                                    <h5>{{ $item->name }}</h5>
                                </a>
                                <p>{{ $item->description }}</p>
                                <p><strong>Price:</strong> ${{ $item->price }}</p>

                                <form action="{{ url('removecart/'.$item->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger btn-sm">Remove from Cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

            @else
                <h5>Your Cart is Empty</h5>
            @endif

        </div>

    </div>
</div>

@endsection